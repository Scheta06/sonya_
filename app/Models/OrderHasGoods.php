<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderHasGoods extends Model
{
    use HasFactory;

    protected $table = 'order_has_goods';
    public $timestamps = false;
    public $incrementing = false;

    protected $fillable = [
        'order_idorder',
        'order_user_iduser',
        'goods_idgoods'
    ];
}