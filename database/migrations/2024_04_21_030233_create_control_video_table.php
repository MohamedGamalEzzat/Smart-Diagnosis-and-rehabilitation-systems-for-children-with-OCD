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
        Schema::create('control_video', function (Blueprint $table) {
            $table->id();
            $table->string('cvideo_name');
            $table->string('cvideo_file', 500);
            $table->text('cdescription')->nullable();
            $table->time('cvideo_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('control_video');
    }
};
