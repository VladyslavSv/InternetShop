<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table = 'categories';
    public $fillable = ['name'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
