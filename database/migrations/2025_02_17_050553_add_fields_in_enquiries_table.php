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
        Schema::table('enquiries', function (Blueprint $table) {
            $table->string('type')->nullable()->after('id');
            $table->string('model')->nullable()->after('is_confirmed');
            $table->string('email')->nullable()->after('model');
            $table->date('date')->nullable()->after('email');
            $table->time('time')->nullable()->after('date');
            $table->string('language')->nullable()->after('time');
            $table->string('nationality')->nullable()->after('language');
            $table->string('subject')->nullable()->after('nationality');
            $table->text('message')->nullable()->after('subject');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('enquiries', function (Blueprint $table) {
            //
        });
    }
};
