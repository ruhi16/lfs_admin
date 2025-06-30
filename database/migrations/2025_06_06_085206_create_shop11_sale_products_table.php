<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShop11SaleProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop11_sale_products', function (Blueprint $table) {
            $table->id();
            $table->integer('sale_id');
            $table->integer('customer_id')->nullable();
            
            $table->integer('product_id');
            $table->integer('sale_unit_id');
            $table->integer('sale_unit_rate');
            $table->integer('sale_unit_qty');

            $table->decimal('total_amount', 10, 2)->nullable();
            $table->decimal('adjust_amount', 10, 2)->nullable();
            $table->decimal('payable_amount', 10, 2)->nullable();

            $table->boolean('is_paid')->default(false);            

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
        Schema::dropIfExists('shop11_product_solds');
    }
}
