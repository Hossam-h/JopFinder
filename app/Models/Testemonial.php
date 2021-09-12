<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Testemonial extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $fillable=['name','opinion','image'];
    public $translatable=['name','opinion'];


}
