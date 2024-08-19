<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class AddCategory extends Component
{
    public $current_url;

    public $category_name = '';

    public function save()
    {
        $this->validate([
            'category_name' => 'required'
        ]);

        $category = new Category();
        $category->name = $this->category_name;
        $category->save();

        // return $this->redirect('/admin/dashboard', navigate: true);
        return $this->redirect('/manage/category', navigate: true);
    }
    public function render()
    {
        $currentUrl = url()->current();
        $explodeUrl = explode('/', $currentUrl);
        // dd($explodeUrl);
        $this->current_url = $explodeUrl[3] . ' ' . $explodeUrl[4];
        return view('livewire.add-category')->layout('admin-layout');
    }
}
