<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('web_pages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('title', 50);
            $table->string('name', 50);
            $table->string('icon', 50)->nullable();
            $table->string('primary_person', 30);
            $table->string('primary_contact', 12);
            $table->string('secondary_person', 30)->nullable();
            $table->string('secondary_contact', 12)->nullable();
            $table->string('email', 50);
            $table->string('copyright')->nullable();
            $table->string('map')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_pages');
    }
};
