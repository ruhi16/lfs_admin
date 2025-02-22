<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeeStructuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fee_structures', function (Blueprint $table) {
            $table->id();
            $table->integer('fee_category_id')->unsigned()->nullable();
            $table->integer('fee_particular_id')->unsigned()->nullable();
            $table->integer('myclass_id')->unsigned()->nullable();
            $table->integer('student_social_category_id')->unsigned()->nullable();
            $table->integer('student_category_id')->unsigned()->nullable();

            $table->decimal('amount')->unsigned()->nullable();
            $table->enum ('amount_type', ['Yearly', 'Monthly', 'Half Yearly', 'Quarterly'])->default(null)->nullable();
               
            $table->boolean('is_emi_allowed')->default(0)->unsigned();
            
            
            // $table->string('name');
            // $table->string('description')->nullable();
            // $table->integer('order_index')->unsigned()->nullable();

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
        Schema::dropIfExists('fee_structures');
    }
}
