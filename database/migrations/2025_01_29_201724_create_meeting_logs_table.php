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
        Schema::create('meeting_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('meeting_id')->constrained()->onDelete('cascade');
            $table->string('action'); // 'start' or 'end'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meeting_logs');
    }
};
