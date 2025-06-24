<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShop03ItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop03_items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->nullable();
            $table->text('description')->nullable();

            // $table->decimal('price', 10, 2);
            // $table->decimal('discount_price', 10, 2)->nullable();
            // $table->integer('stock')->default(0);
            $table->string('image')->nullable();
            $table->boolean('is_active')->default(false);
            // $table->foreignId('category_id')->constrained('shop02_categories')->onDelete('cascade');
            // $table->foreignId('owner_id')->constrained('shop01_owners')->onDelete('cascade');
            
            
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
        Schema::dropIfExists('shop03_items');
    }
}
