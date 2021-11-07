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
        Schema::create("players", function(Blueprint $schema) {
            $schema->string('name')->nullable(false);
            $schema->string('surname')->nullable(false);
            $schema->string('username')->nullable(false);
            $schema->string('email')->nullable(false)->unique();
            $schema->string('team_name')->nullable(false);
            $schema->text('ticket_id')->nullable(true)->default(null);
            $schema->primary(['email', 'team_name']);
            $schema->foreign('team_name')->references('name')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("players");
        Schema::dropIfExists("teams");
    }
}
