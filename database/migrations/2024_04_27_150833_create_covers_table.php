<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('covers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained()->onDelete('cascade');
            $table->string('filename');
            $table->binary('filedata');
            $table->string('mime_type');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('covers');
    }
};
