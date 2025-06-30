<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShop06UnitRefsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop06_unit_refs', function (Blueprint $table) {
            $table->id();
            $table->enum('ref_type', ['purchase', 'sale'])->nullable()->default(null);
            $table->string('name')->nullable();     // Box or Bosta
            
            $table->integer('unit_id');
            $table->integer('amount')->nullable(); 
            $table->integer('quantity')->nullable(); 
            $table->decimal('unit_sold_price', 10, 2)->nullable();  // must when sale
            $table->decimal('unit_purchase_price', 10, 2)->nullable(); // must when purchase 
            

            $table->string('prod_type')->nullable(); 
            $table->string('prod_details')->nullable(); 
            


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
        Schema::dropIfExists('shop06_unit_refs');
    }
}
