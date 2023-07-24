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
        Schema::create('company_setting', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id');
            // $table->foreign('company_id')->reference('id')->on('company');
            $table->integer('setting_type_id');
            $table->integer('value');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_setting');
    }
};
