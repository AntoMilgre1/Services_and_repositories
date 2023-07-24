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
        //
        Schema::create('request', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id');
            $table->integer('client_id');
            $table->unsignedBigInteger('request_initiated_id')->unsigned();
            $table->longText('title');
            $table->integer('request_status');
            $table->unsignedBigInteger('request_assigned_type')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('team_id')->nullable();
            $table->integer('priority_id');
            $table->date('due_at');
            $table->boolean('archive');
            $table->timestamps();
            $table->foreign('request_assigned_type')->references('id')->on('request_assigned_type');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('team_id')->references('id')->on('_team');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
