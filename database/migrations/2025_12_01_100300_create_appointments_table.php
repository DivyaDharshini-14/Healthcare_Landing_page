<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->unsignedBigInteger('service_id')->nullable();
            $table->unsignedBigInteger('doctor_id')->nullable();
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->text('message')->nullable();
            $table->timestamps();

            $table->foreign('service_id')->references('id')->on('services')->nullOnDelete();
            $table->foreign('doctor_id')->references('id')->on('doctors')->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};


