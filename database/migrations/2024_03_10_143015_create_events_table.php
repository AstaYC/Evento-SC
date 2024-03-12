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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('titre')->unique();
            $table->string('organization');
            $table->text('description');
            $table->string('images');
            $table->date('date');
            $table->time('heure');
            $table->enum('type_validation', ['automatic', 'manual'])->default('automatic');
            $table->string('lieu');
            $table->enum('status', ['accepted', 'pending', 'rejected'])->default('pending');
            $table->integer('places');
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreignId('categorie_id')->constrained('categories')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
