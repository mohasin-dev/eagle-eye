<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWhiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('whies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique();
            $table->text('description');
            $table->unsignedInteger('icon_id');
            $table->foreign('icon_id')
                ->references('id')->on('font_awesomes')
                ->onDelete('cascade');
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
        Schema::dropIfExists('whies');
    }
}
