<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $primaryKey = 'idcategory';
    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    // Связь с товарами
    public function goods()
    {
        return $this->hasMany(Goods::class, 'category_idxategory', 'idcategory');
    }
}