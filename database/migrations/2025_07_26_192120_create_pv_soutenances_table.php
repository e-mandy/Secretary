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
            $table->string('nom_etu', 255);
            $table->text('jury');
            $table->decimal(4, 2);
            $table->year('start_year');
            $table->year('end_year');

            $table->unsignedBigInteger('id_filiere');
            $table->foreign('id_filiere')->references('id')->on('filieres');
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
