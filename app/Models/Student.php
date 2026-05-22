<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['name','email','password','date_of_birth','phone_number','gender','resume','department','skills'];
    protected $casts = ['skills' => 'array'];
}
