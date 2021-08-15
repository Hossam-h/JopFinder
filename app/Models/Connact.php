<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Connact extends Model
{
    use HasFactory;
    protected $fillable=['name','email','message','phone'];
}
