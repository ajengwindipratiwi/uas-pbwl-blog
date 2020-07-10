<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = "table_album";

    protected $primaryKey = 'album_id';

    protected $fillable = ['album_name', 'album_text', 'album_photos_id'];

    public function Photos()
    {
    	return $this->belongsTo('App\Photos', 'album_photos_id', 'photos_id');
    }
}
