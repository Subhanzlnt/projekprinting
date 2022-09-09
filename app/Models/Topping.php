<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topping extends Model
{
    use HasFactory;
    protected $guarded =['id'];
    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
