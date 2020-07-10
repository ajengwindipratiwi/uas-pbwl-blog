<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbAlbumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_album', function (Blueprint $table) {
            $table->increments('album_id');
            $table->string('album_name');
            $table->string('album_text');
            $table->string('album_photos_id')->references('photos_id')->on('tb_photos');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('table_album');
    }
}
