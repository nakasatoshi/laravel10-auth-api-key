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
        Schema::create('fugas', function (Blueprint $table) {
            $table->id();
            $table->boolean('fuga_culomn_01')->comment('boolean');
            $table->integer('fuga_culomn_02')->comment('integer');
            $table->string('fuga_culomn_03')->comment('string');
            $table->date('fuga_culomn_04')->comment('date');
            $table->timestamp('fuga_culomn_05')->comment('timestamp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fugas');
    }
};
