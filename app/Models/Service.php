<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class Service extends Model
{

    use HasFactory;
    // use to translate database
    use HasTranslations;

    protected $fillable=['description','tittle','icon'];
    public $translatable=['tittle','description'];

}
