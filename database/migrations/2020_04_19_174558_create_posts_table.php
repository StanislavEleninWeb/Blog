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
            $table->id();
            $table->unsignedBigInteger('owner_id');
            $table->unsignedBigInteger('author_id');
            $table->unsignedBigInteger('category_id')->index();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('sub_title');
            $table->text('content');
            $table->text('embed');
            $table->enum('status', ['private', 'protected', 'public'])->index();
            $table->timestamp('publish_at')->index();
            $table->softDeletes();
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
