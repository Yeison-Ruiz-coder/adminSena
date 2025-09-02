<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('apprentices', function (Blueprint $table) {
            $table->id();
                $table->string('name');
                $table->string('email')->unique();
                $table->string('cell_number');
                $table->foreign('course_id')->references('id')->on('curses')->onDelete('set null');
                $table->foreign('computer_id')->references('id')->on('computers')->onDelete('set null');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('apprentices');
    }
};
