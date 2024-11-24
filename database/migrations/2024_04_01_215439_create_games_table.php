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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->integer('score');
            $table->integer('levels');
            $table->timestamp('start_time')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('admin_game_id')->nullable(); // إضافة معرف الإدمن للعبة
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('admin_game_id')->references('id')->on('admin_games'); // ربطه بجدول الإدمن للعبة
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
