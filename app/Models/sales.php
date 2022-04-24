<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sales extends Model
{
    use HasFactory;

    protected $fillable = ['customer_id','price'];

    // Satış tablosu üzerinden müşteri bilgilerine ulaşma
    public function musteri(){
        return $this->hasOne('App\Models\customer','id','customer_id');
    }

}
