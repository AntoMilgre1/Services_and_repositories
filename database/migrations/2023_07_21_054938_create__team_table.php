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
        Schema::create('_team', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('team_type');
            // $table->foreign('team_type')->reference('id')->on('_team_type');
            $table->unsignedBigInteger('company_id');
            // $table->foreign('company_id')->reference('id')->on('_company');
            $table->unsignedBigInteger('created_by');
            //$table->foreign('created_by')->reference('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_team');
    }
};
