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
}
