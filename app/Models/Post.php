<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model  implements TranslatableContract
{
    use HasFactory , Translatable , SoftDeletes;

    public $translatedAttributes = ['title', 'content','meta','tags'];
    protected $fillable = ['id','image','destination_id','created_at','updated_at','deleted_at','admin_id'];

    public function destination()
    {
       return $this->belongsTo(Destination::class , 'destination_id');
    }


    public function admin()
    {
       return $this->belongsTo(admin::class , 'admin_id');
    }
}
