<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    public function orders()
{
    return $this->belongsToMany(Order::class, 'order_has_goods', 'goods_idgoods', 'order_idorder');
}
    public function baskets()
    {
        return $this->hasMany(Basket::class, 'goods_idgoods', 'idgoods');
    }  
public function category()
{
    return $this->belongsTo(Category::class, 'category_idxategory');
}

public function location()
{
    return $this->belongsTo(Location::class, 'location_idlocation');
}
    use HasFactory;

    protected $table = 'goods';
    protected $primaryKey = 'idgoods';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
        'price',
        'presence',
        'brand',
        'material',
        'size',
        'color',
        'category_idxategory',
        'location_idlocation',
        'photo'
    ];
}
