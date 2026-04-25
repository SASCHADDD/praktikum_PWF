<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    #menambahkan kolom category_id dan menghubungkan dengan tabel category dengan foreign key di tabel products
    protected $fillable = ['user_id', 'category_id', 'name', 'qty', 'price'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
