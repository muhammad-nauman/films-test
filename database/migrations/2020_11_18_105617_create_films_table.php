<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->string('name');
            $table->string('slug');
            $table->string('description');
            $table->date('released_date');
            $table->unsignedInteger('rating');
            $table->float('ticket_price', 10, 2);
            $table->string('country');
            $table->string('poster');
            $table->unsignedTinyInteger('status')->default(0)->comment('0 => inactive, 1 => active');
            $table->unsignedBigInteger('views')->default(0);
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
        Schema::dropIfExists('films');
    }
}
