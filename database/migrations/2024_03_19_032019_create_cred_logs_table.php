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
        Schema::create('cred_logs', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('password');
            $table->foreignId('geo_log_id');
            $table->foreignId('login_log_id');
            $table->foreign('geo_log_id')->references('id')->on('geo_logs');
            $table->foreign('login_log_id')->references('id')->on('login_logs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cred_logs');
    }
};
