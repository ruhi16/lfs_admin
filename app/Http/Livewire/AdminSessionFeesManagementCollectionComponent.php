<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminSessionFeesManagementCollectionComponent extends Component
{

    public $myclasses, $studentcrs, $feeCollections;

    public $isReceiptVisible = false, $receiptStudentcrId, $receiptFeeMandateId, $receiptFeeMandateDateId;
    public $receiptStudentcr, $receiptFeeMandate, $receiptFeeMandateDate; 

    public function mount($sessionId = null, $myclassId = null){


        $this->isReceiptVisible = false;
        $this->receiptStudentcrId = null;
        $this->receiptFeeMandateId = null;
        $this->receiptFeeMandateDateId = null;

        $this->myclasses = \App\Models\Myclass::all();
        $this->feeCollections = \App\Models\FeeCollection::where('myclass_id', $myclassId)
            // ->with(['myclass', 'studentcr', 'feeMandate', 'feeMandateDate'])
            ->get();
            // dd($this->feeCollections);
        // where('session_id', 1)
            // ->where('id', $myclassId)
            // ->with(['feeMandates' => function($query) {
            //     $query->where('is_active', true);
            // }])
            // ->with(['feeMandates' => function($query) {
            //     $query->where('is_active', true)
            //           ->where('is_special', false); // Assuming you want only non-special mandates
            // }])
            // ->get();
        $this->studentcrs = $this->myclasses->where('id', $myclassId)->first()->studentcrs ?? collect();
        
        
        // dd($this->myclasses);
        // dd($this->studentcrs);

        
        // if($receiptStudentcrId && $mandateId && $mandateDateId){
        //     $this->isReceiptVisible = true;
        //     $this->receiptStudentcrId = $receiptStudentcrId;
        //     $this->receiptFeeMandateId = $mandateId;
        //     $this->receiptFeeMandateDateId = $mandateDateId;

        //     // Fetch the studentcr, fee mandate, and fee mandate date details
        //     $this->receiptStudentcr = \App\Models\Studentcr::find($receiptStudentcrId);
        //     $this->receiptFeeMandate = \App\Models\FeeMandate::find($mandateId);
        //     $this->receiptFeeMandateDate = \App\Models\FeeMandateDate::find($mandateDateId);
        // }
    }


    public function collectFees($studentcrId, $mandateFeeMonthlyId,  $mandateFeeMonthlyDateId)
    {
        // dd("Collecting fees for student ID: $studentcrId, mandate fee monthly ID: $mandateFeeMonthlyId, schedule ID: $mandateFeeMonthlyDateId");
        // dd($studentcrId, $mandateFeeMonthlyId, $mandateFeeMonthlyDateId);

        $mandateFee = \App\Models\FeeMandate::find($mandateFeeMonthlyId);
        try{
            $feeCollection = \App\Models\FeeCollection::updateOrCreate([
                'myclass_id' => $mandateFee->myclass_id,
                'section_id' => 0, // Assuming section_id is not used in this context
                'studentcr_id' => $studentcrId,
                'fee_mandate_id' => $mandateFee->id,
                'fee_mandate_date_id' => $mandateFeeMonthlyDateId, // Assuming fee_mandate_date_id is not used in this context
                

            ], [
                'total_amount' => 1000, 
                'paid_amount' => 1000, 
                'balance_amount' => 0, 
                'status' => null, 
                'user_id' => auth()->user()->id, // Assuming the user is authenticated
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Collect the corresponding fee_structure data
            $feeStructures = \App\Models\FeeStructure::where('myclass_id', $mandateFee->myclass_id)
                // ->where('is_special', false) // Assuming is_special is not used in this context
                ->get();
            foreach ($feeStructures as $feeStructure) {
                // Create a new FeeCollectionDetail for each fee structure
                if($feeStructure->is_special){
                   foreach($feeStructure->feeSpecials as $feeSpecial){
                        if($feeCollection->fee_mandate_date_id == $feeSpecial->fee_mandate_date_id){
                            
                            
                        \App\Models\FeeCollectionDetail::updateOrCreate([
                                'fee_collection_id' => $feeCollection->id,
                                'src_table_name' => 'fee_structure', 
                                'src_table_id' => $feeStructure->id, 

                                
                            ], [
                                'fee_category_id' => $feeStructure->fee_category_id, 
                                'fee_particular_id' => $feeStructure->fee_particular_id, 
                                'amount' => $feeStructure->amount, 

                                'created_at' => now(),
                                'updated_at' => now(),
                            ]);
                        }
                   };
                        
                }else{

                    // If not special, create a FeeCollectionDetail for the fee structure                    
                    $feeCollectionDetail = \App\Models\FeeCollectionDetail::updateOrCreate([
                        'fee_collection_id' => $feeCollection->id,
                        'src_table_name' => 'fee_structure', 
                        'src_table_id' => $feeStructure->id, 

                        'fee_category_id' => $feeStructure->fee_category_id, 
                        'fee_particular_id' => $feeStructure->fee_particular_id, 
                        'amount' => $feeStructure->amount, 
                    ], [
                        
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }

                // Student specific fee extras
                $feeExtras = \App\Models\FeeExtra::where('studentcr_id', $studentcrId)
                    ->where('myclass_id', $mandateFee->id)
                    ->where('fee_mandate_id', $mandateFeeMonthlyId)
                    ->where('fee_mandate_date_id', $mandateFeeMonthlyDateId)
                    ->get();
                    
                foreach ($feeExtras as $feeExtra) {
                    // Create a new FeeCollectionDetail for each fee extra
                    \App\Models\FeeCollectionDetail::updateOrCreate([
                        'fee_collection_id' => $feeCollection->id,
                        'src_table_name' => 'fee_extra', 
                        'src_table_id' => $feeExtra->id,                         

                        'fee_category_id' => $feeExtra->fee_category_id, 
                        'fee_particular_id' => $feeExtra->fee_particular_id, 
                        'amount' => $feeExtra->amount,
                    ], [
                         
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }



                $this->receiptStudentcrId = $studentcrId;
                $this->receiptFeeMandateId = $mandateFeeMonthlyId;
                $this->receiptFeeMandateDateId = $mandateFeeMonthlyDateId;
                $this->isReceiptVisible = true;

                // dd($this->receiptFeeMandateId, $this->receiptFeeMandateDateId, $this->receiptStudentcrId);

            }

            // dd($feeCollection);
        }catch(\Exception $e){
            session()->flash('fee_collection_message', "Error collecting fees for student ID: $studentcrId. Error: " . $e->getMessage());
            return;
        }



        // Flash a success message to the session
        session()->flash('fee_collection_message', "Fees collected for student ID: $studentcrId for mandate ID: $mandateFeeMonthlyId and schedule ID: $mandateFeeMonthlyDateId");
    }


    public function render()
    {
        return view('livewire.admin-session-fees-management-collection-component');
    }
}
