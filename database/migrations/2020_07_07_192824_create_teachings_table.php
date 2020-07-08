<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('classroom_subject_id')->constrained('classroom_subjects');
            $table->dateTime('date');
            $table->time('hour_start');
            $table->time('hour_end');
            $table->softDeletes();
            $table->unique(['classroom_subject_id','date', 'hour_start', 'hour_end']);
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
        Schema::dropIfExists('teachings');
    }
}
