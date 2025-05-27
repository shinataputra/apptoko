<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function buyer(){
        return $this->belongsTo(Buyer::class);
    }

    public function saleDetails(){
        return $this->hasMany(SaleDetail::class);
    }

}
