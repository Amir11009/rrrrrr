<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $fillable = [
        'title', 'status' ,
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
