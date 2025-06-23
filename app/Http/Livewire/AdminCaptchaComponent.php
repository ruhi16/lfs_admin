<?php

namespace App\Http\Livewire;

use Livewire\Component;
use function Livewire\str;

class AdminCaptchaComponent extends Component
{
    public $captcha;
    public $input;
    public $result;

    public function mount()
    {
        $this->generateCaptcha();
    }

    public function generateCaptcha()
    {
        $this->captcha = strtoupper(str(rand(1000, 9999))); // Generate a random 4-digit number and convert it to uppercase
        $this->input = '';
        $this->result = '';
    }

    public function checkCaptcha()
    {
        if (strtoupper($this->input) === $this->captcha) {
            $this->result = '✅ Captcha verified!';
            $this->emit('captchaVerified', True); // Emit an event to notify that the captcha is verified
        } else {
            $this->result = '❌ Incorrect captcha. Try again.';
            $this->emit('captchaVerified', False); // Emit an event to notify that the captcha is not verified
            $this->generateCaptcha();

        }
    }



    public function render()
    {
        return view('livewire.admin-captcha-component');
    }
}
