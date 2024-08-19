<?php

namespace App\Livewire;

use App\Models\Category;

use App\Models\Products;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class AddProductForm extends Component
{
    use WithFileUploads;
    public $current_url;
    public $product_name = '';
    public $photo;
    public $product_description = '';
    public $product_price = '';

    public $category_id;

    public $all_category;

    public function mount()
    {
        $this->all_category = Category::all();
    }

    public function save()
    {
        $this->validate([
            'product_name' => 'required',
            'photo' => 'image|required|mimes:jpg,png|max:1024',
            'product_description' => 'required',
            'product_price' => 'required|numeric',
            'category_id' => 'required',
        ]);

        $path = $this->photo->store('public/photos');

        $product = new Products();
        $product->name = $this->product_name;
        $product->image = $path;
        $product->description = $this->product_description;
        $product->price = $this->product_price;
        $product->category_id = $this->category_id;
        $product->save();

        return $this->redirect('/products', navigate: true);
    }
    public function render()
    {
        $currentUrl = url()->current();
        $explodeUrl = explode('/', $currentUrl);
        // dd($explodeUrl);
        $this->current_url = $explodeUrl[3] . ' ' . $explodeUrl[4];

        return view('livewire.add-product-form')
            ->layout('admin-layout');
    }
}
