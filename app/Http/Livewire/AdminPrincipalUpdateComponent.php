<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\UiSection;
use App\Models\UiScreenDesign;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;
use Livewire\WithFileUploads;

class AdminPrincipalUpdateComponent extends Component
{
    use WithFileUploads;

    public $title, $subTitle, $description;
    public $name, $desig,  $imageRef;
    
    public $principal_desk;

    public $imageUrl; // Property to store the image URL after upload

    // Validation rules
    protected $rules = [
        'title' => 'required',
        'subTitle' => 'required',
        'description' => 'required',
        'name' => 'required',
        'desig' => 'required',
        // 'school' => 'required',
        // 'addr' => 'required',
        'imageRef' => 'required|image|max:2048', // 2MB max
    ];


    public function mount(){
        $this->principal_desk = UiScreenDesign::where('ui_screen_id', 1)
            ->where('ui_section_id', 5)
            ->where('ui_entity_id', 1)
            ->first();
        // dd($this->principal_desk);
        $this->title = $this->principal_desk->title;
        $this->subTitle = $this->principal_desk->sub_title;
        $this->description = $this->principal_desk->details;
        $this->name = $this->principal_desk->by_whom;
        $this->desig = $this->principal_desk->by_whom_desig;
        $this->imageUrl = $this->principal_desk->img_ref_1;

    }

    // public function update(){
    //     $this->validateOnly($this->rules);
    // }

    public function uploadImage(){
        $this->validate($this->rules);
        // $this->imageRef = request('image');
        try{
            $image_name = "principal.jpg";
            $this->imageUrl = $this->imageRef->storeAs('images', $image_name, 'public');
            // dd($this->imageUrl);

        
            // $this->reset('imageRef', $this->imageUrl);
            UiScreenDesign::updateOrCreate([
                'ui_screen_id'=> 1,
                'ui_section_id' => 5,
                'ui_entity_id' => 1,
            ] , [
                'name' => 'Welcome Screen Design',
                'title' => $this->title,
                'sub_title'=> $this->subTitle,
                'details' => $this->description,
                'by_whom'=> $this->name ,
                'by_whom_desig'=> $this->desig,
                'img_ref_1' => $this->imageUrl ?? $this->principal_desk->img_ref_1,
                // 'img_ref_1' => $this->imageUrl ? $this->imageUrl : $this->principal_desk->img_ref_1, 
            ]);



            session()->flash('success','Image uploaded successfully.');
        }catch(\Exception $e){
            session()->flash('error', $e->getMessage());
        }
    }
    
    public function render()
    {
        return view('livewire.admin-principal-update-component');
    }
}
