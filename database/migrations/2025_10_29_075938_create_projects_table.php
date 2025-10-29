<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image_prefix')->nullable(); // contoh: "Quickbook", "wisata", "upinipin"
            $table->integer('image_count')->default(5);
            $table->text('code')->nullable(); // untuk project yang berisi kode (misal Mini Calculator)
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
