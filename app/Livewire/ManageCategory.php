<?php

namespace App\Livewire;

use Livewire\Component;

class ManageCategory extends Component
{
    public $current_url;

    public function render()
    {
        $currentUrl = url()->current();
        $explodeUrl = explode('/', $currentUrl);
        // dd($explodeUrl);
        $this->current_url = $explodeUrl[3] . ' ' . $explodeUrl[4];
        return view('livewire.manage-category')->layout('admin-layout');
    }
}
