<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\UiScreen;
use App\Models\UiScreenDesign;

class UIWelcomeScreenController extends Controller
{
    
    public function index()
    {
        // return "Welcome to the UI Welcome Screen";

        $uiscreens = UiScreen::all();
        $uiscreendesigns = UiScreenDesign::where('ui_screen_id', 1)->get();

        return view('ui-welcome-screen', [
            'uiscreens' => $uiscreens,
            'uiscreendesigns' => $uiscreendesigns
        ]);
    }


    public function caraoselView(){
        
        $uiwelcomescreen_caraosels = UiScreenDesign::where('ui_screen_id', 1)->where('ui_section_id', 1)->get();
    
        return view('ui-welcome-screen-caraosel', [
            'uiwelcomescreen_caraosels' => $uiwelcomescreen_caraosels
        ]);
    }


    public function caraoselSubmit(Request $request){
        // dd($request);

        $path = NULL;
        $filename = NULL;

        $record = UiScreenDesign::find($request->id);

        if($request->has('fileaddr')){
            $file = $request->file('fileaddr');
            // $extension = $request->file('fileaddr')->extension();
            $extension = $file->getClientOriginalExtension();

            $path = 'img/';
            // $filename = time().'.'.$extension;
            $filename = 'carousel-'.$record->ui_entity_id.'.'.$extension;
            
            $file->move($path, $filename);
        }
        // echo '\nfilename:'.$path.$filename;

         
        UiScreenDesign::updateOrCreate(['id' => $request->id],[
            'name'  => 'Welcome Screen',
            'ui_screen_id' => 1,    // Welcome Screen
            'ui_section_id' => 1,   // Caraousel
            // 'ui_entity_id' => 1,    // Page 1
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'details' => $request->details,
            // 'dop' => $request->dop,
            // 'doe' => $request->doe,
            'img_ref_1' => $path.$filename,
            'is_active' => $request->is_active == true ? 1:0,
        ]);

        $uiwelcomescreen_caraosels = UiScreenDesign::where('ui_screen_id', 1)->where('ui_section_id', 1)->get();
    
        return redirect ('admin/welcomescreens/caraosel-view')->with([
            'uiwelcomescreen_caraosels' => $uiwelcomescreen_caraosels
        ]);
    }






    public function noticesView(){

    }

    public function noticesSubmit(Request $request){

    }
}
