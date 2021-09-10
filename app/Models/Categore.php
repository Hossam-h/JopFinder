<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Categore extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $fillable=['category','icon'];
    public $translatable=['category'];
    public function jops(){
        return $this->hasMany(Jop::class);
    }
}
