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
        Schema::create('octtyydvideos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('control_video_id');
            $table->time('oovideo_time');
            $table->enum('vvvideo_completed', ['مكتمل', 'غير مكتمل'])->default('غير مكتمل');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('control_video_id')->references('id')->on('control_video');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('octtyydvideos');
    }
};
