<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;
use App\Models\Wishlist;

class FirstComponent extends Component
{
    public $message = '';
    public $user_id = 42;

    public $productos;
    public $createAccountError;

    public function mount() 
    {
        $this->productos = Producto::all();
    }

    public function addToWishList(int $product_id){
        
        try {
            
            $wishlist = Wishlist::create([
                'producto_id' => $product_id
            ]);

    } catch (\Exception $e) {

  
        $this->addError('error', 'Dramatic error you will die.');

        $this->createAccountError = 'Dramatic error you will die.';
    
    }
        
    }
   
  
   
    public function callFunction()
    {
        $this->message = "You clicked on button";
    }
  
    
    public function callFunctionArg($user_id)
    {
        $this->message = $user_id;
        $this->user_id = $this->message + 1;
    }

    public function render()
    {
        return view('livewire.first-component');
    }
}
