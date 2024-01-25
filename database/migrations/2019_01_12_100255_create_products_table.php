<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->text('short_description');
            $table->longText('description');
            $table->float('purchase_price',9,2);
            $table->float('sale_price',9,2);
            $table->integer('stock');
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_discount')->default(false);
            $table->string('discount_type')->default(false)->nullable();
            $table->string('front_image')->default('default.png');
            $table->unsignedInteger('subcategory_id');
            $table->unsignedInteger('brand_id');
            $table->unsignedInteger('unit_id');
            $table->unsignedInteger('added_by');
            $table->foreign('subcategory_id')
                ->references('id')->on('subcategories')
                ->onDelete('cascade');
            $table->foreign('brand_id')
                ->references('id')->on('brands')
                ->onDelete('cascade');
            $table->foreign('unit_id')
                ->references('id')->on('units')
                ->onDelete('cascade');
            $table->foreign('user_id')
                ->references('id')->on('users')
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
        Schema::dropIfExists('products');
    }
}
