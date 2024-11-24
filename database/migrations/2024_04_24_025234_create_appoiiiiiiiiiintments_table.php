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
        Schema::create('appoiiiiiiiiiintments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('dddr_id'); // تغيير اسم العمود إلى dddr_id
            $table->date('date');
            $table->time('time');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('dddr_id')->references('d_id')->on('doctors'); // تغيير اسم العمود في القيد الخارجي أيضًا
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appoiiiiiiiiiintments');
    }
};
