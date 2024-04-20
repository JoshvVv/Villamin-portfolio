<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('first');
            $table->string('middle');
            $table->string('last');
            $table->string('role');
            $table->string('month');
            $table->string('day');
            $table->string('year');
            $table->string('site');                 
            $table->string('email'); 
            $table->string('number');    
            $table->text('description');      
            $table->text('description1');
            $table->text('description2');
            $table->text('description3');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
