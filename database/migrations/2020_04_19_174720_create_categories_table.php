<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->unsignedMediumInteger('parent_id')->index();
            $table->string('title');
            $table->string('slug')->unique();
            $table->tinyInteger('active')->default(0)->index();
            $table->tinyInteger('header')->default(0)->index();
            $table->tinyInteger('footer')->default(0)->index();
            $table->tinyInteger('position')->default(0)->index();
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
        Schema::dropIfExists('categories');
    }
}
