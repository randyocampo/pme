<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCropsRelatedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crops_related', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_id')->constrained('tblmnes')->onDelete('cascade');
            $table->string('cycle');
            $table->string('crops');
            $table->integer('crops_per_cycle');
            $table->date('planted_target')->nullable();
            $table->date('planted_actual')->nullable();
            $table->double('total_area_planted_target')->nullable();
            $table->double('total_area_planted_actual')->nullable();
            $table->date('date_harvested_target')->nullable();
            $table->date('date_harvested_actual')->nullable();
            $table->double('total_area_harvested_target')->nullable();
            $table->double('total_area_harvested_actual')->nullable();
            $table->double('total_produce')->nullable();
            $table->double('total_sold')->nullable();
            $table->double('priceperkg')->nullable();
            $table->double('totalsales')->nullable();
            $table->text('remarks')->nullable();
            $table->timestamps();

        });

        // Schema::table('crops_related', function (Blueprint $table) {
        //     $table->
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crops_related');
    }
}
