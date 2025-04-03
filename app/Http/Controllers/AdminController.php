<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        
        return view('components.admin-dashboard');
    }

    public function admission($myclassSection_id){
        // echo ($myclassSection_id);
        return view('livewire.admin-admission-component', ['myclassSection_id' => $myclassSection_id]);
    }

    public function mydashboard() {
        return view('livewire.about');
    }

    // public function facilities() {
    //     return view('admin.facilities');
    // }

    // public function principal() {
    //     return view('admin.principal');
    // }

    // public function notices() {
    //     return view('admin.notices');
    // }

    // public function classes() {
    //     return view('admin.classes');
    // }

    // public function appointments() {
    //     return view('admin.appointments');
    // }

    // public function team() {
    //     return view('admin.team');
    // }

    // public function comments() {
    //     return view('admin.comments');
    // }

    // public function contact() {
    //     return view('admin.contact');
    // }

    // public function gallery() {
    //     return view('admin.gallery');
    // }

    // public function settings() {
    //     return view('admin.settings');
    // }




}


