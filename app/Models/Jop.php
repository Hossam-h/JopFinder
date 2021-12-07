<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class Jop extends Model
{
    use HasFactory;
use HasTranslations;

protected $fillable=['jop_name','salary','location','company_name','jop_description','categore_id'];
public $translatable=['jop_name','location','jop_description'];

    public function category(){
        return $this->belongsTo(Categore::class,'categore_id','id');
    }

    public function users(){
        return $this->belongsToMany(User::class,'user_jop');
    }
}
