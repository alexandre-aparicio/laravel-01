<?php

namespace App\Models;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wishlist extends Model
{
    use HasFactory;
    protected $table = 'wishlist';

    protected $fillable = [
        'producto_id',       

    ];

    public function producto() {
        return $this->belongsTo(Producto::class, 'producto_id', 'id');
    }

    
}
