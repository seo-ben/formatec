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
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->integer('age');
            $table->string('email');
            $table->string('photo')->nullable();
            $table->string('video')->nullable();
            $table->string('options');
            $table->string('filiere');
            $table->string('categorie');
            $table->string('facebook');
            $table->string('numero');
            $table->string('numero_candidat');
            $table->text('description_de_personnalite');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};

