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
    Schema::create('sections', function (Blueprint $table) {
    $table->id();
    $table->string('key')->unique(); // Ex: 'sobre-nos', 'depoimentos', 'contact'
    $table->string('title')->nullable();
    $table->text('subtitle')->nullable();
    $table->longText('content')->nullable(); // JSON com textos adicionais se necessário
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};
