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
        Schema::create('gardens', function (Blueprint $table) {
            $table->id();
            $table->text('garden');
            $table->text('slug');
            $table->text('owner');
            $table->text('ownFat')->nullable();
            $table->text('ownNid')->nullable();
            $table->text('ownTin')->nullable();
            $table->text('ownMob')->nullable();
            $table->text('ownEml')->nullable();
            $table->longText('ownAdr')->nullable();
            $table->text('manager')->nullable();
            $table->text('manaFat')->nullable();
            $table->longText('manaAdr')->nullable();
            $table->text('manaNid')->nullable();
            $table->text('manaTin')->nullable();
            $table->text('manaMob')->nullable();
            $table->text('manaEml')->nullable();
            $table->text('partner')->nullable();
            $table->longText('partAdr')->nullable();
            $table->text('mouza')->nullable();
            $table->text('zlNo')->nullable();
            $table->text('leaDed')->nullable();
            $table->text('leaDedDat')->nullable();
            $table->text('leaDedExp')->nullable();
            $table->text('leaLan')->nullable();
            $table->text('leaLed')->nullable();
            $table->text('leaSta')->nullable();
            $table->text('teaToLan')->nullable();
            $table->text('rabToLan')->nullable();
            $table->text('etcToLan')->nullable();
            $table->text('falLan')->nullable();
            $table->text('etcStaLan')->nullable();
            $table->text('cultLan')->nullable();
            $table->text('planShad')->nullable();
            $table->text('annTotRen')->nullable();
            $table->text('lateRen')->nullable();
            $table->text('leaMonRR')->nullable();
            $table->text('dcrNo')->nullable();
            $table->text('latRendat')->nullable();
            $table->longText('lawOrd')->nullable();
            $table->text('clinic')->nullable();
            $table->text('bed')->nullable();
            $table->text('doctor')->nullable();
            $table->text('nurse')->nullable();
            $table->text('compounder')->nullable();
            $table->text('ripWash')->nullable();
            $table->text('rawWash')->nullable();
            $table->text('primary')->nullable();
            $table->text('priStud')->nullable();
            $table->text('secodary')->nullable();
            $table->text('secStud')->nullable();
            $table->text('higStud')->nullable();
            $table->longText('tourSpot')->nullable();
            $table->text('playFil')->nullable();
            $table->text('stage')->nullable();
            $table->text('straPla')->nullable();
            $table->text('monument')->nullable();
            $table->text('freFight')->nullable();
            $table->text('labor')->nullable();
            $table->text('community')->nullable();
            $table->text('labComm')->nullable();
            $table->text('advEdu')->nullable();
            $table->text('educRat')->nullable();
            $table->text('stipend')->nullable();
            $table->text('labHom')->nullable();
            $table->text('labImpPro')->nullable();
            $table->text('labOngPro')->nullable();
            $table->text('finPro')->nullable();
            $table->text('river')->nullable();
            $table->text('rivNam')->nullable();
            $table->longText('drug')->nullable();
            $table->text('disDis')->nullable();
            $table->text('upoDis')->nullable();
            $table->text('casNo')->nullable();
            $table->text('casePla')->nullable();
            $table->text('caseDef')->nullable();
            $table->text('court')->nullable();
            $table->text('casTyp')->nullable();
            $table->text('lawyer')->nullable();
            $table->text('nxtDatCas')->nullable();
            $table->text('caseRes')->nullable();
            $table->text('caseOrd')->nullable();
            $table->text('teaOnPro')->nullable();
            $table->longText('comm')->nullable();



            $table->unsignedBigInteger('union_id');
            $table->integer('leaCla_id');
            $table->unsignedBigInteger('upozela_id');
            $table->unsignedBigInteger('cat_id');

            $table->foreign('union_id')->references('id')->on('unions')->cascadeOnDelete();
            $table->foreign('upozela_id')->references('id')->on('upozelas')->cascadeOnDelete();
            $table->foreign('cat_id')->references('id')->on('categories')->cascadeOnDelete();

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
        Schema::dropIfExists('gardens');
    }
};
