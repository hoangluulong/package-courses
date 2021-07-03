<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id('course_id');
            $table->string('course_name',255);
            $table->string('course_semester',255);
            $table->integer('course_year');
            $table->integer('status');
            $table->timestamp('deleted_at')->nullable();           
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
            
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
