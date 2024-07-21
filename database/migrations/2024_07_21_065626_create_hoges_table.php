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
        Schema::create('hoges', function (Blueprint $table) {
            $table->id();
            $table->boolean('hoge_culomn_01')->comment('boolean');
            $table->integer('hoge_culomn_02')->comment('integer');
            $table->string('hoge_culomn_03')->comment('string');
            $table->date('hoge_culomn_04')->comment('date');
            $table->timestamp('hoge_culomn_05')->comment('timestamp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hoges');
    }
};
