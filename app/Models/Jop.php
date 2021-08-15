<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jop extends Model
{
    use HasFactory;

    protected $fillable=['jop_name','salary','location','company_name','jop_description'];
}