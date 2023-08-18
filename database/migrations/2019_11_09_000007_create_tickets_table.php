<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title');

            $table->longText('content')->nullable();

            $table->string('brought_by')->nullable();

            $table->string('email')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
