<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShop08PurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop08_purchases', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id')->nullable();
            $table->integer('vendor_id')->nullable();
            $table->integer('invoice_no')->nullable();
            $table->date('invoice_date')->nullable();

            $table->decimal('total_amount', 10, 2)->nullable();
            $table->decimal('adjust_amount', 10, 2)->nullable();
            $table->decimal('payable_amount', 10, 2)->nullable();

            $table->boolean('is_paid')->default(false)->nullable();
            $table->date('paid_date')->nullable();
            $table->string('payment_method')->nullable();
            
            $table->string('remarks')->nullable();
            

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
        Schema::dropIfExists('shop08_purchases');
    }
}
