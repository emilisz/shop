<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Cart extends Component
{
    public function render()
    {
       $cart = session()->get('cart');
        return view('livewire.cart', \compact('cart'));
    }

    public function checkout()
    {
       session()->flush();
       return \redirect('/');
    }
}
