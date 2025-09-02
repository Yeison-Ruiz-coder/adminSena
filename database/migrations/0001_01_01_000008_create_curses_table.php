<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('curses', function (Blueprint $table) {
            $table->id();
            $table->string('curse_number');
            $table->string('day');
            $table->unsignedBigInteger('areas_id')->nullable();
            $table->unsignedBigInteger('training_centers_id')->nullable();
            $table->foreign('areas_id')->references('id')->on('areas')->onDelete('set null');
            $table->foreign('training_centers_id')->references('id')->on('training_centers')->onDelete('set null');
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('curses');
    }
};
