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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->string('title');
            $table->string('logo')->nullable();
            $table->string('tags');
            $table->string('time');
            $table->string('company');
            $table->longText('company-detail');
            $table->string('location');
            $table->string('salary');
            $table->string('category');
            $table->string('email');
            $table->string('website');
            $table->longText('description');
            $table->longText('requirement')->nullable();
            $table->longText('qualification')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};
