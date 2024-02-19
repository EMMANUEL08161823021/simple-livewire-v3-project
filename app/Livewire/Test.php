<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Test extends Component
{
    public $foo = 'hi';

    public $color;

    public function submit(){
        $this->foo = 'bar';
        $this->validate([
            'color' => 'required',
        ]);
    }

    public function render()
    {
        return view('livewire.test');
    }
}
