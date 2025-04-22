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

            $table->integer('session_event_id')->unsigned()->nullable();
            $table->integer('session_event_schedule_id')->unsigned()->nullable();
            $table->decimal('reg_total_amount')->unsigned()->nullable();
            $table->decimal('extra_total_amount')->unsigned()->nullable();

            $table->decimal('total_amount')->unsigned()->nullable();
            $table->decimal('total_discount')->unsigned()->nullable();
            $table->decimal('paid_amount')->unsigned()->nullable();
            $table->decimal('balance_amount')->unsigned()->nullable();
            
            $table->string('payment_mode')->nullable();
            $table->string('cat_part_ref')->nullable();


            $table->integer('school_id')->unsigned()->nullable();
            $table->integer('session_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('approved_by')->unsigned()->nullable();
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
