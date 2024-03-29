<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    use HasFactory;
    public function client(){
        return $this->hasOne(Client::class);
    }
    public function operations(){
        return $this->hasMany(Operation::class);
    }
}
