<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoldenAddress extends Model
{
    use HasFactory;

    protected $table = 'golden_address';
    protected $guarded = [];

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }
}
