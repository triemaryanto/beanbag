<?php

namespace App\Livewire\Depan;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.depan.home')->layout('layouts.depan.app');
    }
}
