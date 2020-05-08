<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDetaliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_detali', function (Blueprint $table) {
            $table->bigIncrements('PDNo');
            $table->integer('PNo')->unsigned();
            $table->string('PDName', 50);
            $table->string('PType', 50);
            $table->decimal('PCost', 18, 4)->unsigned();
            $table->string('PIntroduction', 255)->nullable();
            $table->decimal('PPirce', 18, 4)->unsigned();
            $table->decimal('PLPirce', 18, 4)->unsigned();
            $table->boolean('PSsales')->default(true);
            $table->string('PImages', 255)->nullable();
            $table->string('PRemark', 255)->nullable();
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
        Schema::dropIfExists('product_detali');
    }
}
