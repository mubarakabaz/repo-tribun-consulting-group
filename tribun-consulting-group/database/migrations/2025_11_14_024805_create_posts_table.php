<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->comment('ID Penulis');

            $table->string('slug');
            $table->string('title', 255)->comment('Judul Artikel');
            $table->string('excerpt', 500)->nullable()->comment('Cuplikan Artikel');
            $table->text('body');
            $table->string('featured_image')->nullable()->comment('Gambar Unggulan');
            $table->boolean('is_published')->default(0)->comment('Status Publikasi (0: Draft, 1: Published)');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
