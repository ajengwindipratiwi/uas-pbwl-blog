<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "tb_post";

    protected $primaryKey = 'post_id';

    protected $fillable = ['post_date', 'post_slug', 'post_title', 'post_text', 'post_cat_id'];

    public function Category()
    {
    	return $this->belongsTo('App\Category', 'post_cat_id', 'cat_id');
    }

     public function Photos()
    {
    	return $this->hasMany('App\Photos', 'photos_id');
    }
}
