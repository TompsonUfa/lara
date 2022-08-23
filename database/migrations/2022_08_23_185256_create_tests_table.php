<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string('test_title');
            $table->string('test_desc');
            $table->string('test_category');
            $table->integer('test_author')->nullable();
            $table->integer('test_timer')->nullable();
            $table->integer('test_try')->nullable();
            $table->integer('test_limit')->nullable();
            $table->date('test_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tests');
    }
};
