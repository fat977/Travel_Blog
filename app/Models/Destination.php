<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model  implements TranslatableContract
{
    use HasFactory, Translatable;

    public $translatedAttributes = ['title', 'content'];
    protected $fillable = ['id','image','parent_id','created_at','updated_at','deleted_at'];

    public function parents()
    {
        return $this->belongsTo(Destination::class,'parent_id')->where(['parent_id'=>0])->with('children');
    }
    
    public function children()
    {
        return $this->hasMany(Destination::class,'parent_id');
    }

    public function posts()
    {
       return $this->hasMany(Post::class);
    }
}
