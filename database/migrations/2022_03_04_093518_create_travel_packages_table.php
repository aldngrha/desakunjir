<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("travel_packages", function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("title");
            $table->string("slug");
            $table->string("location");
            $table->longText("about");
            $table->string("hiburan");
            $table->string("language");
            $table->string("foods");
            $table->string("duration");
            $table->integer("price");
            $table->string("map");
            $table->string("owner_name");
            $table->string("account_number");
            $table->string("bank");
            $table->string("whatsapp_number");
            $table->softDeletes();
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
        Schema::dropIfExists("travel_packages");
    }
}
