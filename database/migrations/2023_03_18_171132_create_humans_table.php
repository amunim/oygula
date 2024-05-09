<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHumansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('humans', function (Blueprint $table) {
            $table->id();
            $table->string("jobs");
            $table->string("name");
            $table->date("date");
            $table->boolean("status");
            $table->string("country");
            $table->string("address");
            $table->string("mobile");
            $table->string("email");
            $table->string("facebook")->nullable();
            $table->string("linkedin")->nullable();
            $table->string("langs");
            $table->string("money");
            $table->text("description");
            $table->text("cv");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('humans');
    }
}
