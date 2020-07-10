<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    protected $table = "tb_photos";

    protected $primaryKey = 'photos_id';

    protected $fillable = ['photos_date', 'photos_title', 'photos_text', 'photos_post_id'];

    public function Post()
    {
    	return $this->belongsTo('App\Post', 'photos_post_id', 'post_id');
    }

     public function Album()
    {
    	return $this->hasMany('App\Album', 'album_id');
    }
}
