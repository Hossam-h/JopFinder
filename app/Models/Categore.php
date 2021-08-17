<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categore extends Model
{
    use HasFactory;

    protected $fillable=['category'];
    public function jops(){
        return $this->hasMany(Jop::class);
    }
}
