<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $table = 'locations';
    protected $primaryKey = 'idlocation';
    public $timestamps = false;

    protected $fillable = [
        'city'
    ];

    // Связь с товарами
    public function goods()
    {
        return $this->hasMany(Goods::class, 'location_idlocation', 'idlocation');
    }
}