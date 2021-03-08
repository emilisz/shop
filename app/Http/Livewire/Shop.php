<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class Shop extends Component
{
    use WithPagination; 

    public $search;
    public $count = 0;

    protected $queryString = ['search'];

    public function mount()
    {
        if (session()->has('cart')) {
             $this->count = count(session()->get('cart'));
        }
    }

    public function render()
    {

        return view('livewire.shop', [
            'products' => Product::where('title', 'like', '%' . $this->search . '%')->paginate(10),
        ]);

    }

    public function add(Product $product)
    {
        $cart = session()->get('cart');

        if (isset($cart[$product->id])) {
            $cart[$product->id]['qty'] += 1;
        } else {
            $cart[$product->id] = array(
                "id" => $product->id,
                "title" => $product->title,
                "description" => $product->description,
                "price" =>  $product->price,
                "qty" => 1,
            );
        }
        
        session()->put('cart', $cart);

        $this->count = count(session()->get('cart'));
       
    }
}
