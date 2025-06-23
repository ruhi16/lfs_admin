<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShop09PurchaseProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop09_purchase_products', function (Blueprint $table) {
            $table->id();
            $table->integer('purchase_id');
            $table->integer('product_id');
            
            $table->integer('purch_unit_id');
            $table->integer('purch_unit_rate');
            $table->integer('purch_unit_qty');

            $table->decimal('total_amount', 10, 2)->nullable();
            $table->decimal('adjust_amount', 10, 2)->nullable();
            $table->decimal('payable_amount', 10, 2)->nullable();
            
            $table->boolean('is_paid')->default(false);
            $table->boolean('is_sale_unit_defined')->default(false);


            
            // $table->integer('invoice_id')->nullable();
            // $table->integer('vendor_id')->nullable();
            // $table->integer('order_id')->nullable();


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
        Schema::dropIfExists('shop09_product_purchaseds');
    }
}
