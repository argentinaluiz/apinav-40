<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogTeachingItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_teaching_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teaching_item_id')->constrained('teaching_items');
            $table->foreignId('eventcontent_id')->constrained('eventcontents');
            $table->foreignId('student_id')->constrained('students');
            $table->string('time_elapsed');
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
        Schema::dropIfExists('log_teaching_items');
    }
}
