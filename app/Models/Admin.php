<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Admin extends Authenticatable
{
    use HasFactory;

    protected $fillable =['name','mobile','email','password','image','status','type','blogger_id'];
    public $timestamps= false;
    protected $guard = 'admin';
}
