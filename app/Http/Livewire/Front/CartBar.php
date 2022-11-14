<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Shipping;

class CartBar extends Component
{
    use LivewireAlert;

    public $decreaseQuantity;
    public $increaseQuantity;
    public $removeFromCart;
    
    public $shipping;
    public $shipping_id;

    public array $listsForFields = [];

    public function decreaseQuantity($rowId)
    {
        $cart = Cart::instance('shopping')->get($rowId);
        
        $qty = $cart->qty - 1;
        
        Cart::instance('shopping')->update($rowId, $qty);
    }

    public function increaseQuantity($rowId)
    {
        $cart = Cart::instance('shopping')->get($rowId);
        
        $qty = $cart->qty + 1;
        
        Cart::instance('shopping')->update($rowId, $qty);
    }

    public function removeFromCart($rowId)
    {
        Cart::instance('shopping')->remove($rowId);
    }

   

    public function mount()
    {
        $this->cartTotal = Cart::instance('shopping')->total();
        
        $this->cartCount = Cart::instance('shopping')->count();

        $this->cartItems =  Cart::instance('shopping')->content();
        
        $this->shipping = Shipping::find($this->shipping_id);
        
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.front.cart-bar');
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['shippings'] = Shipping::pluck('title', 'id')->toArray();
    }

}
