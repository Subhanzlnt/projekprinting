<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function voucer()
    {
        return $this->belongsTo(Voucer::class);
    }
    public function topping()
    {
        return $this->belongsTo(Topping::class);
    }
    public function order_details()
   {
       return $this->hasMany(OrderDetail::class);
   }
}
