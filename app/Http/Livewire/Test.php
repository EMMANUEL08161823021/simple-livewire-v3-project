<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Test extends Component
{

    public $foo = 'hi';
    public function render()
    {
        return view('livewire.test');
    }
}
