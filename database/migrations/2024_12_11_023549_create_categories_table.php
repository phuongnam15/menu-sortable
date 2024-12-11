<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255)->collation('utf8mb4_unicode_ci');
            $table->string('slug', 255)->collation('utf8mb4_unicode_ci');
            $table->string('status', 255)->collation('utf8mb4_unicode_ci');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};