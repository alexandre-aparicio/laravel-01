<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;
use App\Models\Wishlist;

class FirstComponent extends Component
{
   

 
    public $color;
    

   

    public function addToWishList(int $product_id){
        
        // 

        // Cuando se tienen dos campos id_usuario y Id_producto se puede hacer con una coincidancia de los dos camps
        // Wishlist::where('producto_id', $product_id)->where('user_id', $usuario_id)->exists()
        
        if(Wishlist::where('producto_id', $product_id)->exists()) {

        session()->flash('message','Ya se ha añadido este producto a tu lista de favoritos');
        $this->color = "alert-danger";
        $this->emit('alert_remove');
        return;

        } else {

            $wishlist = Wishlist::create([
                'producto_id' => $product_id
            ]);

        session()->flash('message','Añadido con éxito');
        $this->color = "alert-success";
        $this->emit('alert_remove');
        return;

        }

        
/*
       Cuando la tabla esta limitada a unic entrada en id_producto (tabla -> wishlist) se puede utilizar try/catch
        
        try {
            
            $wishlist = Wishlist::create([
                'producto_id' => $product_id
            ]);

        session()->flash('message','Añadido con éxito');
        $this->emit('alert_remove');
        return;

    } catch (\Exception $e) {

  
        session()->flash('message','Ya se ha añadido este producto a tu lista de favoritos');
        $this->emit('alert_remove');
        return;
    
    }
    */
        
    }
   


    public function render()
    {
        $productos = Producto::all();
        return view('livewire.first-component', ['productos' => $productos]);
    }
}
