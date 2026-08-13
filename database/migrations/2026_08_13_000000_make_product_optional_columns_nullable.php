<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('image_url')->nullable()->change();
            $table->string('dealer')->nullable()->change();
            $table->date('date_arrived')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('image_url')->nullable(false)->change();
            $table->string('dealer')->nullable(false)->change();
            $table->date('date_arrived')->nullable(false)->change();
        });
    }
};
