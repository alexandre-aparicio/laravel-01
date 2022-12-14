<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;
use App\Models\Wishlist;

class MenuSup extends Component
{      


    public $numero;
    protected $listeners = ['logro'=>'mount'];
    public $prowish;
    

    public function mount()
    {
        $this->numero = Wishlist::count();
        $this->prowish = Wishlist::all();
         
        
    }


    public function removeToWishList(int $wislist_id) {
        $wishlist = Wishlist::find($wislist_id);        
        $wishlist->delete();
        $this->emit('logro');      
        
    }

   



    public function render()
    {
        
        return view('livewire.menu-sup');
    }
}
