<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;
use App\Models\Wishlist;

class MenuSup extends Component
{      

    public function removeToWishList(int $wislist_id) {
        $wishlist = Wishlist::find($wislist_id);        
        $wishlist->delete();       
        
    }



    public function render()
    {
        $prowish = Wishlist::all();
        return view('livewire.menu-sup', ['prowish' => $prowish ]);
    }
}
