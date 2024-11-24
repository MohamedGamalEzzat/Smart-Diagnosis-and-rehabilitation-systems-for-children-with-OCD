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
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->timestamp('entry_time')->useCurrent();
            $table->integer('duration_minutes');
            $table->integer('view')->default(1);
            $table->timestamp('start_time')->nullable();
            $table->integer('watch_duration')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('admin_video_id')->nullable(); // إضافة معرف الإدمن
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('admin_video_id')->references('id')->on('admin_videos'); // ربطه بجدول الإدمن
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
