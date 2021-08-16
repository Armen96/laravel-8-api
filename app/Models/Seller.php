<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    protected $table = 'seller';
    protected $guarded = [];

    public function goldenAddress()
    {
        return $this->hasMany(GoldenAddress::class, 'seller_id');
    }
}
