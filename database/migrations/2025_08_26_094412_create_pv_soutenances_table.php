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
        Schema::create('pv_soutenances', function (Blueprint $table) {
            $table->id();
            $table->string('nom_etu');
            $table->foreignId('id_filiere')->constrained('filieres');
            $table->date('soutenance_date');
            $table->time('heure');
            $table->text('jurys');
            $table->string('note');
            $table->string('mention')->nullable();
            $table->text('observations')->nullable();
            $table->string('pv_file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pv_soutenances');
    }
};
