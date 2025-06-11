<?php

namespace App\Http\Livewire;

use App\Models\School;

use Livewire\Component;

class AdminSessionFeesManagementReceiptComponent extends Component
{


    public $school, $session, $myclasses, $studentcrs, $feeCollections;
    public $isReceiptVisible = false, $receiptStudentcrId, $receiptFeeMandateId, $receiptFeeMandateDateId;
    public $receiptStudentcr, $receiptFeeMandate, $receiptFeeMandateDate;
    public $receiptFeeCollection;

    public function mount($receiptStudentcrId = null, $receiptFeeMandateId = null, $receiptFeeMandateDateId = null){
        // dd($receiptStudentcrId, $receiptFeeMandateId, $receiptFeeMandateDateId);

        $this->school = School::first();
        $this->session = $this->school->sessions()->where('status', 'CURRENT')->first();

        // $this->myclasses = \App\Models\Myclass::all();
        // $this->studentcrs = collect();
        // $this->feeCollection = null;
        // $feeCollections = 
        // dd($this->session);

        if($receiptStudentcrId && $receiptFeeMandateId && $receiptFeeMandateDateId){
            $this->isReceiptVisible = true;
            $this->receiptStudentcrId = $receiptStudentcrId;
            $this->receiptFeeMandateId = $receiptFeeMandateId;
            $this->receiptFeeMandateDateId = $receiptFeeMandateDateId;

            // Fetch the studentcr, fee mandate, and fee mandate date details
            $this->receiptStudentcr = \App\Models\Studentcr::find($receiptStudentcrId);
            $this->receiptFeeMandate = \App\Models\FeeMandate::find($receiptFeeMandateId);
            $this->receiptFeeMandateDate = \App\Models\FeeMandateDate::find($receiptFeeMandateDateId);

            // Fetch the fee collection details
            $this->receiptFeeCollection = \App\Models\FeeCollection::where('studentcr_id', $receiptStudentcrId)
                ->where('fee_mandate_id', $receiptFeeMandateId)
                ->where('fee_mandate_date_id', $receiptFeeMandateDateId)
                ->first();
            // dd($this->receiptFeeCollection->feeCollectionDetails );
        }
    }

    public function render(){
        return view('livewire.admin-session-fees-management-receipt-component');
    }
}
