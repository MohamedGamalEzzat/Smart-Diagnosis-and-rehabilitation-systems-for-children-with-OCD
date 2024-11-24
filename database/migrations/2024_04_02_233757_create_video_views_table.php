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
        Schema::create('video_views', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('admin_video_id');
            $table->integer('views_count')->default(0);
            $table->integer('watch_duration')->default(0);
            $table->enum('video_status', ['completed', 'paused'])->default('paused');
            $table->timestamps();

            // إضافة مفاتيح خارجية
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('admin_video_id')->references('id')->on('admin_videos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('video_views');
    }
};
