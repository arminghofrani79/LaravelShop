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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('full_name');
            $table->string('phone');
            $table->string('province');
            $table->string('city');
            $table->string('postal_code');
            $table->text('address');
            $table->boolean('is_default')->default(false);
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            // delete address when user is deleted
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
