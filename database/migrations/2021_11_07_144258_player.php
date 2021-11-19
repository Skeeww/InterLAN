<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Player extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("player", function(Blueprint $schema) {
            $schema->string('name')->nullable(false);
            $schema->string('surname')->nullable(false);
            $schema->string('username')->nullable(false);
            $schema->string('email')->primary();
            $schema->string('team_name')->nullable(false);
            $schema->text('ticket_id')->nullable(true)->default(null);
            $schema->foreign('team_name')->references('name')->on('team');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("player");
        Schema::dropIfExists("team");
    }
}
