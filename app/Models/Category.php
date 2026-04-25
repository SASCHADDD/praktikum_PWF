<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * membuat model category yang memiliki relasi one to many 
 * dengan product untuk menyimpan data kategori produk karena setiap produk memiliki satu kategori,
 * sedangkan satu kategori dapat memiliki banyak produk
 */
class Category extends Model
{
    protected $table = 'category';

    protected $fillable = ['name'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
