<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExam09ScheduleRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam09_schedule_rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            
            $table->integer('exam_detail_id')->unsigned()->nullable();
            $table->integer('exam_class_subject_id')->unsigned()->nullable();
                        
            $table->integer('room_id')->unsigned()->nullable();
                        
            $table->date('exam_date')->nullable();
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            
            $table->integer('teacher1_id')->unsigned()->nullable();
            $table->integer('teacher2_id')->unsigned()->nullable();
            $table->integer('teacher3_id')->unsigned()->nullable();
            $table->integer('teacher4_id')->unsigned()->nullable();


            $table->integer('order_index')->unsigned()->nullable();
            $table->boolean('is_optional')->default(0)->nullable(); 
            
            $table->integer('session_id')->unsigned()->nullable();
            $table->integer('school_id')->unsigned()->nullable();
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
        Schema::dropIfExists('exam09_schedule_rooms');
    }
}
