<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("owners", function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->integer("travel_packages_id");
            $table->string("nama");
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
        Schema::dropIfExists("owners");
    }
}
