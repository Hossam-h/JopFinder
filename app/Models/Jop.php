<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jop extends Model
{
    use HasFactory;

    protected $fillable=['jop_name','salary','location','company_name','jop_description','categore_id'];

    public function category(){
        return $this->belongsTo(Categore::class,'categore_id','id');
    }
    
    public function users(){
        return $this->belongsToMany(User::class,'user_jop');
    }
}
