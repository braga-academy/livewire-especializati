<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowTweets extends Component
{
    public $message = "Apenas um Teste";
    public function render()
    {
        return view('livewire.show-tweets');
    }
}
