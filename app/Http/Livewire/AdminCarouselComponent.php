<?php

namespace App\Http\Livewire;
use App\Models\UiScreen;
use App\Models\UiScreenDesign;

use Livewire\Component;
use Livewire\WithFileUploads;

class AdminCarouselComponent extends Component
{
    use WithFileUploads;

    public $titleId = [], $title = [], $subTitle = [], $details = [], $imgFile = [], $isActive = [];

    public $uiwelcomescreen_caraosels;

    // protected $rules = [
    //     'title.*' => 'required',
    //     'subTitle.*' => 'required',
    //     'details.*' => 'required',
    //     'imgFile.*' => 'nullable|max:2048|mimes:png,jpg,jpeg,webp,pdf',
    // ];

    // protected $message = [
    //     'title' => 'Title is required',
    //     'subTitle' => 'Sub Title is required',
    //     'details' => 'Details is required',
    //     'imgFile'=> 'Image should be uploaded',
    // ];
    
    public function mount(){
        
        $this->uiwelcomescreen_caraosels = UiScreenDesign::where('ui_screen_id', 1)->where('ui_section_id', 1)->get();    
        
        foreach($this->uiwelcomescreen_caraosels as $uiwelcomescreen_caraosel){
            $this->title[$uiwelcomescreen_caraosel->id] = $uiwelcomescreen_caraosel->title;
            $this->subTitle[$uiwelcomescreen_caraosel->id] = $uiwelcomescreen_caraosel->sub_title;
            $this->details[$uiwelcomescreen_caraosel->id] = $uiwelcomescreen_caraosel->details;
            $this->imgFile[$uiwelcomescreen_caraosel->id] = null; //$uiwelcomescreen_caraosel->img_ref_1;
        }
    }


    public function saveCarousel($carouselId){
        try{
            // 1. Dynamic Rule Generation
            $rules = [
                "title. {$carouselId}" => 'required',
                "subTitle. {$carouselId}" => 'required',
                "details. {$carouselId}" => 'required',
                "imgFile.{$carouselId}" => 'nullable|max:2048|mimes:png,jpg,jpeg,webp,pdf',
                // 'title.'. $carouselId => 'required',
                // 'subTitle.' . $carouselId => 'required',
                // 'details.' . $carouselId => 'required',
                // 'imgFile.' . $carouselId => 'nullable|max:2048|mimes:png,jpg,jpeg,webp,pdf',
            ];
            //2. Dynamically generate message
            $messages = [
                "title.{$carouselId}.required" => 'Title is required for this carousel.',
                "subTitle.{$carouselId}.required" => 'Sub Title is required for this carousel.',
                "details.{$carouselId}.required" => 'Details is required for this carousel.',
                "imgFile.{$carouselId}.mimes" => 'Image should be of type png, jpg, jpeg, webp or pdf.',
                "imgFile.{$carouselId}.max" => 'The image may not be greater than 2MB.',
                
                // 'title.' . $carouselId . '.required' => 'Title is required for this carousel.',
                // 'subTitle.' . $carouselId . '.required' => 'Sub Title is required for this carousel.',
                // 'details.' . $carouselId . '.required' => 'Details is required for this carousel.',
                // 'imgFile.' . $carouselId . '.mimes' => 'Image should be of type png, jpg, jpeg, webp or pdf.',
                // 'imgFile.' . $carouselId . '.max' => 'The image may not be greater than 2MB.',
            ];

            // 3. Validate only the current carousel's data
            $validatedData = $this->validate($rules, $messages);
            // dd($validatedData);
            // $this->validate($this->rules);

            $image_name = "principal.jpg";
            if (isset($this->imgFile[$carouselId]) && is_object($this->imgFile[$carouselId])) {                
                $this->imageUrl = $this->imgFile[$carouselId]->store('images', 'public');                
            } else {
                throw new \Exception('No file uploaded.');
            }
            

            UiScreenDesign::updateOrCreate([
                'ui_screen_id'=> 1,
                'ui_section_id' => 1,
                'ui_entity_id' => $carouselId,
            ] , [
                'name' => 'Welcome Screen Design',
                'title' => $this->title[$carouselId],
                'sub_title'=> $this->subTitle[$carouselId],
                'details' => $this->details[$carouselId],
                'img_ref_1' => $this->imageUrl,
            
            ]);



            session()->flash('success','Image uploaded successfully.');
        }catch(\Exception $e){
            session()->flash('error', $e->getMessage());
        }

    }

    public function render()
    {
        return view('livewire.admin-carousel-component');
    }
}
