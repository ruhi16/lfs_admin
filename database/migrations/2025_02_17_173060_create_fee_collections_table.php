<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeeCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fee_collections', function (Blueprint $table) {
            $table->id();
            $table->integer('myclass_id');
            $table->integer('section_id');
            $table->integer('studentcr_id');

            $table->integer('fee_mandate_id')->nullable();

            
            $table->decimal('total_amount')->nullable();
            $table->decimal('total_discount')->nullable();
            $table->decimal('paid_amount')->nullable();
            $table->decimal('balance_amount')->nullable();
            
            $table->string('payment_mode')->nullable();
            $table->string('cat_part_ref')->nullable();


            $table->integer('school_id')->nullable();
            $table->integer('session_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('approved_by')->nullable();
            $table->boolean('is_active')->default(1)->nullable();
            $table->boolean('is_finalized')->default(0)->nullable();
            $table->string('status')->nullable();
            $table->string('remarks')->nullable();
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
        Schema::dropIfExists('fee_collections');
    }
}
