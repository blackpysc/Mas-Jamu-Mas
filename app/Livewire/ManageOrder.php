<?php

namespace App\Livewire;

use Livewire\Component;

class ManageOrder extends Component
{
    public $current_url;

    public function render()
    {
        $currentUrl = url()->current();
        $explodeUrl = explode('/', $currentUrl);
        // dd($explodeUrl);
        $this->current_url = $explodeUrl[3];
        return view('livewire.manage-order')->layout('admin-layout');
    }
}
