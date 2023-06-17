<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Blogger extends Authenticatable
{
    use HasFactory;
    protected $fillable =['name','email','password','image','country','status'];
    public $timestamps= false;
    protected $guard = 'admin';
}
