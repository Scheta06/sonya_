<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $primaryKey = 'idorder';
    public $timestamps = false;

    protected $fillable = [
        'date',
        'status',
        'payment',
        'delivery',
        'amountorder',
        'user_iduser',
        'quantity'
    ];

    public function goods()
    {
        return $this->belongsToMany(Goods::class, 'order_has_goods', 'order_idorder', 'goods_idgoods');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_iduser', 'iduser');
    }
}