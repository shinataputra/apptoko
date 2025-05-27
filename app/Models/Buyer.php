<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    protected $guarded = ['id'];

    public function sales(){
        return $this->hasMany(Sale::class);
    }
}