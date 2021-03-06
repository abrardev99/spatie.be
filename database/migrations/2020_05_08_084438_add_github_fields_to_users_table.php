<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGithubFieldsToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('github_id')->nullable();
            $table->string('github_username')->nullable();
            $table->boolean('is_sponsor')->nullable();
            $table->string('avatar')->nullable();
        });
    }
}
