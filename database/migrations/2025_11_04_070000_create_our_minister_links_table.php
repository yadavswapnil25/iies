<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('our_minister_links', function (Blueprint $table) {
            $table->id();
            $table->text('url1')->nullable();
            $table->text('url2')->nullable();
            $table->text('url3')->nullable();
            $table->text('url4')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('our_minister_links');
    }
};


