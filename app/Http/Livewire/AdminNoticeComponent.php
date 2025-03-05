<?php

namespace App\Http\Livewire;

use App\Models\Notice;

use Livewire\Component;
use Livewire\WithFileUploads; //added
use Livewire\TemporaryUploadedFile; //added
// use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
// use Livewire\WithFileUploads;
// use Livewire\TemporaryUploadedFile; //added



use Validator;

class AdminNoticeComponent extends Component
{
    use WithFileUploads; //added

    public $notices;
    public $notice_selected = null;
    public $notice_id = null;
    public $modal_is_open;



    public $title;
    public $desc;
    public $dop;
    public $doe;
    public $fileaddr;
    public $is_active = 1;

    protected $rules = [
        'title' => 'required|string|max:255',
        'desc' => 'required|string',
        'dop' => 'required|date|before:doe',
        'doe' => 'required|date|after:dop',
        'fileaddr' => 'nullable|image|max:2048', //|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'is_active' => 'required|boolean',
    ];
    

    public function mount(){
        $this->refresh();
        $this->notice_id = -555;
        
    }

    public function refresh(){
        $this->notices = Notice::orderBy('id', 'desc')->get();
        $this->modal_is_open = false;
        $this->notice_selected = null;
    }

    public function edit($id){
        $this->notice_id = $id;
        $this->modal_is_open = true;
        // $this->emit('openModal');
        if($id <= 0){
            $this->myreset();
            return;
        }else{
            $this->notice_selected = Notice::find($id);
            $this->title = $this->notice_selected->title;
            $this->desc = $this->notice_selected->desc;
            $this->dop = $this->notice_selected->dop;
            $this->doe = $this->notice_selected->doe;
            // $this->fileaddr = $this->notice_selected->fileaddr;
            $this->is_active = $this->notice_selected->is_active;
        }
    }


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->rules, [
            'dop.before' => 'The Date of Publication must be before the Date of Expiration.',
            'doe.after' => 'The Date of Expiration must be after the Date of Publication.',
            'fileaddr.max' => 'The file size must be less than :max kilobytes. Actual file size: :actual kilobytes.',
        ]);
    }

    public function closeModal(){
        $this->modal_is_open = false;
        // $this->emit('closeModal');
        
        $this->refresh();
    }

    public function saveNotice()
    {
        // dd($this->fileaddr);

        $validatedData = Validator::make(
            [
                'title' => $this->title,
                'desc' => $this->desc,
                'dop' => $this->dop,
                'doe' => $this->doe,
                'fileaddr' => $this->fileaddr,
                'is_active' => $this->is_active,
            ],
            $this->rules,
            [
                'dop.before' => 'The Date of Publication must be before the Date of Expiration.',
                'doe.after' => 'The Date of Expiration must be after the Date of Publication.',
                'fileaddr.max' => 'The file size must be less than :max kilobytes. Actual file size: :actual kilobytes.',
                // 'fileaddr.max' => function ($attribute, $value, $parameters) {
                //     $fileSize = $value->getSize() / 1024 / 1024; // Convert bytes to MB
                //     $maxSize = $parameters[0] / 1024; // Convert KB to MB
                //     return "The file size is " . number_format($fileSize, 2) . " MB, but the maximum allowed size is " . $maxSize . " MB.";
                // },//'The file size is :filesize MB, but the maximum allowed size is :max MB.',
            ],
            // [
            //     'fileaddr' => [
            //         'max' => [
            //             'actual' => 'abcd', //$this->fileaddr ? round($this->fileaddr->getSize() / 1024, 2) : 0,
            //         ],
            //     ],
            // ]
        )->validate();

        // Simulate saving the data (replace with your actual logic)
        $data = (object) $validatedData;
        $data->created_at = now();
        $data->updated_at = now();
        // $data->id = rand(1,1000);

                
        if($this->fileaddr){
            $data->fileaddr = $this->fileaddr->store('public/photos'); // store the image
            
            // $file = $this->fileaddr;
            // $extension = $file->getClientOriginalExtension();
            // $path = 'img/';
            // $filename = 'hari-'.$this->notice_id.'.'.$extension;
            // $file->store($path, $filename);


            // $data->fileaddr = $path.$filename;

            // $fileUrl = Storage::disk('public')->download($data->fileaddr); // get the image url
            // $data->fileaddr = $fileUrl; // assign the image url to the data object


            // $data->fileaddr = $this->fileaddr->store('photos', 'public');
            // $data->fileaddr = asset('storage/' . 'photos/' . $data->fileaddr);

            // $data->fileaddr = $this->fileaddr->store('photos', 'public');
            // $data->fileaddr = asset('storage/' . $filePath);
            // $data->fileaddr = $this->fileaddr->store('photos', 'public');
            // $data->fileaddr = asset('storage/' . $filePath);
            
            // dd($data->fileaddr);
            // $filePath = $this->fileaddr->store('photos', 'public');
            // $data->fileaddr = asset('storage/' . $filePath); 
            
        $saved_notice = Notice::updateOrCreate([
            'id' => $this->notice_id,
        ],[
            'title' => $data->title,
            'desc' => $data->desc,
            'dop' => $data->dop,
            'doe' => $data->doe,
            'fileaddr' => $data->fileaddr,
            'is_active' => $data->is_active,
        ]);
       }else{
        
        $saved_notice = Notice::updateOrCreate([
            'id' => $this->notice_id,
        ],[
            'title' => $data->title,
            'desc' => $data->desc,
            'dop' => $data->dop,
            'doe' => $data->doe,
            // 'fileaddr' => $data->fileaddr,
            'is_active' => $data->is_active,
        ]);
        
       }





       

        // $filePath = 'photos/4Y8s0gU9s2axjjmWOQ3ZvBobguLCMPxViX5c9DcB.png';
        // $fullPath = Storage::disk('public')->path($filePath);
        // $data->fileaddr = $fullPath;
        //example of displaying the data
        session()->flash('message', 'Data saved successfully!');
        // session()->flash('savedData', json_encode($saved_notice));
        session()->flash('savedData', $data->title);

        // Reset the form
        $this->fileaddr = null;
        $this->myreset();

        // $this->modal_is_open = false;
        // $this->notices = Notice::all();
        $this->refresh();
    }

    public function myreset(){
        $this->fileaddr = null; // or $this->fileaddr = '';
        $this->title = '';
        $this->desc = '';
        $this->dop = '';
        $this->doe = '';
        $this->is_active = 1;
    }


    public function render()
    {

        return view('livewire.admin-notice-component');
    }
}
