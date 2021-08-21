<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jop extends Model
{
    use HasFactory;

    protected $fillable=['jop_name','salary','location','company_name','jop_description','category_id'];

    public function category(){
        return $this->belongsTo(Categore::class);
    }
    
    public function users(){
        return $this->belongsToMany(User::class,'user_jop');
    }
}
