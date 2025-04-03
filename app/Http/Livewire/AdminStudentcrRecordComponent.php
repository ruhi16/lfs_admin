<?php

namespace App\Http\Livewire;

use App\Models\Studentcr;
use Livewire\Component;
use Spatie\Browsershot\Browsershot;
use Illuminate\Support\Facades\Storage;

use SimpleSoftwareIO\QrCode\Facades\QrCode;

use Livewire\WithFileUploads;


class AdminStudentcrRecordComponent extends Component
{
    public $message = null;

    public function mount(){
        $html = view('test-image')->render();

        $fileName = 'view-image-' . time() . '.png';
        $fullPath = storage_path('app/public/' . $fileName);

        Browsershot::html($html)
        // ->waitUntilNetworkIdle()
            ->noSandbox()
            ->ignoreHttpsErrors()
            // ->setNodeBinary('/usr/bin/node')
            // ->setNpmBinary('/usr/bin/npm')
            ->hideBackground()
            ->dismissDialogs()
            ->timeout(120)
            ->windowSize(450, 550)    
            ->save($fullPath);

            $qrcode_str = 'https://www.google.com';
            // $qrcode = QrCode::size(80)->generate($qrcode_str);
            $qrcode_path = storage_path('app/public/'.time().'.svg');
            $qrcode = QrCode::format('svg')->size(300)->generate('Hello, world!', $qrcode_path);
            
            // return response($qrcode)->header('Content-type','image/svg+xml');
            // $path = public_path('qrcode/'.time().'.png');        
        //     $qrcdoe_path = storage_path('app/public/'.time().'.png');
        //     QrCode::size(300)->generate('https://www.itsolutionstuff.com', $qrcdoe_path);
        // // $qrcode = QrCode::size(80)->generate('This is a test qrcode');
        // $image = QrCode::format('png')
        //                 //  ->merge(public_path('images/YOUR_IMAGE_NAME.png'), 0.5, true)
        //                  ->size(500)
        //                  ->errorCorrection('H')
        //                  ->generate('A simple example of QR code!');
  
        // return response($image)->header('Content-type','image/png');

    }


    public function getQrcode($uuid){
        $this->message = 'QrCode generated successfully';
        $qrcode_str = 'https://www.google.com';
        $qrcode = QrCode::size(80)->generate($qrcode_str);
        // $qrcode_path = storage_path('app/public/'.time().'.svg');
        // $qrcode = QrCode::format('svg')->size(300)->generate('Hello, world!', $qrcode_path);
        return $qrcode;
        // return response($qrcode)->header('Content-type','image/svg+xml');

    }

    public function getIdcard($uuid){
        $this->message = 'IdCard generated successfully';

        $studentcr = Studentcr::find($uuid);

        $qrcode_str = 'https://www.google.com';
        $qrcode = QrCode::size(80)->generate($qrcode_str);
        $qrcode_path = storage_path('app/public/'.time().'.svg');
        $qrcode = QrCode::format('svg')->size(300)->generate('Hello, world!', $qrcode_path);

        return view('idcard', [
            'qrcode' => $qrcode,
            'studentcr' => $studentcr,
        ]);
        // return response($qrcode)->header('Content-type','image/svg+xml');
        // return response($this->message)->header('Content-type','text/plain');
    }




    public function render(){

        return view('livewire.admin-studentcr-record-component');
    }
}
