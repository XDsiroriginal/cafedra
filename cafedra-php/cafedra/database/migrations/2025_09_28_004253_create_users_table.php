<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fio');
            $table->string('avatar')->default('default_avatar.png');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('role')->default('client');
        });

    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};
