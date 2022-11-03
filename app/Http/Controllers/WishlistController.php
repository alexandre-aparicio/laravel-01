<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index(){

        $wishlists = Wishlist::all();
        return $wishlists;
    }
}
