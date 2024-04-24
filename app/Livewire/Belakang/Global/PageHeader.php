<?php

namespace App\Livewire\Belakang\Global;

use Livewire\Component;

class PageHeader extends Component
{
    public $judul = "";
    public $subjudul = "";
    public $breadcrumb = [];
    public function render()
    {
        return view('livewire.belakang.global.page-header');
    }
}