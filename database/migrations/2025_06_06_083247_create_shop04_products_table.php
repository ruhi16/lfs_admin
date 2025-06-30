<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShop04ProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop04_products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('sku')->nullable();
            $table->string('tag')->nullable();
            
            $table->text('description')->nullable();

            $table->integer('category_id');
            $table->integer('item_id');

            $table->string('color_bk')->nullable();
            $table->string('color_fn')->nullable();

            $table->string('image_01')->nullable();
            $table->string('image_02')->nullable();
            $table->string('image_03')->nullable();
            $table->string('image_04')->nullable();

            $table->double('rating', 8, 2)->default(0.00);
            $table->integer('review_count')->default(0);
            
            $table->boolean('is_active')->default(false);
            $table->integer('owner_id')->default(0)->nullable();
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
        Schema::dropIfExists('shop04_products');
    }
}
