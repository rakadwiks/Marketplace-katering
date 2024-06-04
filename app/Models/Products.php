<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{

    protected $fillable = [
        'name',
        'users_id',
        'categories_id',
        'price',
        'description',
        'slug'
    ];
    protected $hidden = [];

    // create relation between tables
    public function galleries()
    {
        return $this->hasMany(ProductGallery::class, 'products_id', 'id');
    }
    // public function user()
    // {
    //     return $this->hasOne(User::class, 'id', 'users_id');
    // }

    // end relation

}
