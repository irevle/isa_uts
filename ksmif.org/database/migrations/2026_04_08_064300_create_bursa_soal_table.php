<?php

use App\Models\User;
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
        Schema::create('matkul', function (Blueprint $table){
            $table->id();
            $table->string('nama_matkul', 20);
            $table->string('code', 7);
            $table->timestamps();
        });    

        Schema::create('bursa_soal', function (Blueprint $table) {
            $table->id();
            $table->foreignId('matkul_id');
            $table->foreignId('uploaded_by')->constrained('users');
            $table->enum('tipe',['UTS', 'UAS', 'Quiz']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bursa_soal');
    }
};
