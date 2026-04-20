<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    // === Buat scheama Members baru ===
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username', 15);
            $table->string('full_name', 45);
            $table->string('password', 255);
            $table->string('email', 255)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('NRP', 9)->nullable();
            $table->string('status');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('members', function(Blueprint $table){
            $table->id();
            $table->foreignId('users_id');
            $table->year('period');
            $table->enum('division', ['BPH', 'IRD', 'PRD', 'HRDD', 'CDD']);
            $table->enum('role', ['Koor', 'WaKoor', 'Anggota']);
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    
    // === DROP TABLE  ===
    // *note : jangan sekali2 pake function ini, solae nge delete semua schema
    public function down(): void
    {
        Schema::dropIfExists('members');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
