<?php

namespace App\Livewire;

use Livewire\Component;


class AdminDashboard extends Component
{
    public $current_url;
    public function render()
    {
        // dd(url()->current());
        $currentUrl = url()->current();
        $explodeUrl = explode('/', $currentUrl);
        // dd($explodeUrl);
        $this->current_url = $explodeUrl[3] . ' ' . $explodeUrl[4];
        return view('livewire.admin-dashboard')->layout('admin-layout');
    }
}
