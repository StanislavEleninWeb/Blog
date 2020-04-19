<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePollObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poll_objects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('poll_id')->index();
            $table->string('title');
            $table->tinyInteger('active')->index();
            $table->tinyInteger('sortorder')->index();
            $table->softDeletes();
            $table->timestamps();

            $table->index(['poll_id', 'active', 'sortorder']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('poll_objects');
    }
}
