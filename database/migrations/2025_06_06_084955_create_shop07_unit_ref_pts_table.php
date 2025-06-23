<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShop07UnitRefPtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop07_unit_ref_pts', function (Blueprint $table) {
            $table->id();            
            $table->integer('purchase_id');
            $table->integer('purchase_product_id');
            
            $table->integer('sale_unit_id')->nullable();

            $table->double('purchase_to_sale_factor', 10, 7)->nullable();            

            $table->double('sale_unit__actual_rate', 10, 7)->nullable();
            $table->double('sale_unit_profit_percent', 10, 7)->nullable();
            $table->double('sale_unit_profit_rate', 10, 7)->nullable();




            $table->boolean('is_active')->default(false);
            $table->integer('owner_id');
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
        Schema::dropIfExists('shop07_unit_ref_pts');
    }
}
