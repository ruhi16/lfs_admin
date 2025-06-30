<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShop10SalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop10_sales', function (Blueprint $table) {
            $table->id();
            $table->integer('studentcr_id')->nullable();
            $table->integer('myclass_id')->nullable();
            $table->integer('section_id')->nullable();
            $table->integer('roll_no')->nullable();

            $table->decimal('total_amount', 10, 2)->nullable();
            $table->decimal('adjust_amount', 10, 2)->nullable();
            $table->decimal('payable_amount', 10, 2)->nullable();

            $table->boolean('is_order_placed')->nullable()->default(false);
            $table->boolean('is_paid')->default(false)->nullable();
            $table->date('paid_date')->nullable();
            $table->string('payment_method')->nullable();
            
            $table->string('remarks')->nullable();


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
        Schema::dropIfExists('shop10_sales');
    }
}
