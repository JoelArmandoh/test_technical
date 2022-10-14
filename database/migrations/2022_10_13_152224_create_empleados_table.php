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
        Schema::create('employes', function (Blueprint $table) {
            
            $table->id();
            $table->string('name');
            $table->string('last_name');
            $table->integer('phone');
            $table->string('mail');
            $table->integer('age');
            $table->text('observation');
            $table->boolean('confirmed')->nullable()->default(false);('delivered_food');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
};
