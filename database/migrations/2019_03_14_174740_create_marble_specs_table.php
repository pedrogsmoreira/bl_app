<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateMarbleSpecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marble_specs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo', 15);
            $table->string('description',50);
            $table->longText('specifications')->nullable();
            $table->longText('usedOn')->nullable();
            $table->longText('cleanAndCare')->nullable();
            $table->text('density')->nullable();
            $table->text('abortionCoefifficient')->nullable();
            $table->text('porosity')->nullable();
            $table->text('mechanicalCompressiveStrength')->nullable();
            $table->text('mechanicalBendingStrength')->nullable();
            $table->text('wearResistance')->nullable();
            $table->text('impactStrength')->nullable();
            $table->text('microhardnessOnImpact')->nullable();
            $table->text('compressiveStrenghtAfterFreezingTest')->nullable();
            $table->text('knoopMicrohardness')->nullable();
            $table->text('compressionTensileStrength')->nullable();
            $table->text('tensileStrengthAfterFreezeThawCycles')->nullable();
            $table->text('unitaryMudulusOfBendingTensileStrength')->nullable();
            $table->text('heatExpansionCoeficient')->nullable();
            $table->text('waterImbibitionCoeficient')->nullable();
            $table->text('massByUnitOfVolume')->nullable();
            $table->timestamps();
        });


        DB::table('marble_specs')->insert([
            [
                'codigo' => 'MB0003',
                'description' => 'NERO MARQUINA MARBLE',
                'specifications' => 'The Black Marquina marble is a beautiful natural stone with white veining pattern, compact and fine-grained.  As it is a natural element the colour variations depend on the intensity of the grain and white fossil. It could move from an almost absolute black colour until another abounding white veining making. Each plate is unique. <p>The beauty, the brightness, the natural textures and colour richness are only some of the qualities that make the marbles one of the most desirable materials by decorators and architects.</p>',
                'usedOn' => 'It can be applied for indoors and outdoors floors, for stairs and for coatings. It is usualy found in indoor decorations like fireplaces, diverse furniture, bathroom and kitchens designs and much more', 
                'cleanAndCare' => 'To extend the life of your marble pieces, you must clean surface regularly with a soft cleaner or only water, do not use cleaners that contain acid, abrasives or alkaline cleaners not specifically formulated for stone. <p>To avoid stains do not place hot objects directly on the stone and clean up spills immediately to avoid the absorbing.</p>', 
                'density' => '2.69 gms/cm3',
                'abortionCoefifficient' => '0.17%',
                'porosity' => '0.47%',
                'mechanicalCompressiveStrength' => '631 kg/cm2',
                'mechanicalBendingStrength' => '135 kg/cm2',
                'wearResistance' => '2.90 mm',
                'microhardnessOnImpact' => '134 kg/mm2',
                'compressiveStrenghtAfterFreezingTest' => '',
                'knoopMicrohardness' => '',
                'compressionTensileStrength' => '',
                'tensileStrengthAfterFreezeThawCycles' => '',
                'unitaryMudulusOfBendingTensileStrength' => '',
                'heatExpansionCoeficient' => '',
                'impactStrength' => '30 cm',
                'massByUnitOfVolume' => '',
            ],
            [
                'codigo' => 'MB0002',
                'description' => 'ALICANTE RED MARBLE',
                'specifications' => 'The Alicante Red Marble is a beautiful natural stone reddish with white veining pattern, compact, fine-grained and resistant.  As it is a natural element the colour variations depend on the intensity of the grain. It could move from an almost absolute red colour until another abounding white veining making, occasionally, this marble may present deeper red or burgundy spots as well. Each slab is unique. <p>The beauty, the brightness, the natural textures and colour richness are only some of the qualities that make the marbles one of the most desirable materials by decorators and architects. </p>', 
                'usedOn' => 'It can be applied for indoors and outdoors floors, for stairs and for coatings. It is usualy found in indoor decorations like fireplaces, diverse furniture, bathroom and kitchens designs and much more.',
                'cleanAndCare' => 'To extend the life of your marble pieces, you must clean surface regularly with a soft cleaner or only water, do not use cleaners that contain acid, abrasives or alkaline cleaners not specifically formulated for stone. <p>To avoid stains do not place hot objects directly on the stone and clean up spills immediately to avoid the absorbing.</p>', 
                'density' => '2.71 gms/cm3',
                'abortionCoefifficient' => '0.10%',
                'porosity' => '0.30%',
                'mechanicalCompressiveStrength' => '965 kg/cm2',
                'mechanicalBendingStrength' => '89 kg/cm2',
                'wearResistance' => '2.42 mm',
                'microhardnessOnImpact' => '153 kg/mm2',
                'compressiveStrenghtAfterFreezingTest' => '89.5 kg/cm2',
                'knoopMicrohardness' => '157 kg/mm2',
                'compressionTensileStrength' => '',
                'tensileStrengthAfterFreezeThawCycles' => '',
                'unitaryMudulusOfBendingTensileStrength' => '',
                'heatExpansionCoeficient' => '',
                'impactStrength' => '30 cm',
                'massByUnitOfVolume' => '',
            ],
            [
                'codigo' => 'MB0001',
                'description' => 'GUATEMALA GREEN MARBLE',
                'specifications' => 'The Guatemala Green Marble is a beautiful natural stone of deep green with veining pattern from that varies from a blue-green through to dark green vein.  As it is a natural element the colour variations depend on the intensity of the grain. It could move from an almost absolute greenish colour until another abounding veining with an array of different green hues. Each slab is unique. <p>The beauty, the brightness, the natural textures and colour richness are only some of the qualities that make the marbles one of the most desirable materials by decorators and architect</p>', 
                'usedOn' => 'It can be applied for indoors and outdoors floors, for stairs and for coatings. It is usualy found in indoor decorations like fireplaces, diverse furniture, bathroom and kitchens designs and much more.',                
                'cleanAndCare' => 'To extend the life of your marble pieces, you must clean surface regularly with a soft cleaner or only water, do not use cleaners that contain acid, abrasives or alkaline cleaners not specifically formulated for stone. <p>To avoid stains do not place hot objects directly on the stone and clean up spills immediately to avoid the absorbing.</p>', 
                'density' => '',
                'abortionCoefifficient' => '',
                'porosity' => '',
                'mechanicalCompressiveStrength' => '',
                'mechanicalBendingStrength' => '1',
                'wearResistance' => '',
                'microhardnessOnImpact' => '',
                'compressiveStrenghtAfterFreezingTest' => '',
                'knoopMicrohardness' => '',
                'compressionTensileStrength' => ' 1427 kg/cm2',
                'tensileStrengthAfterFreezeThawCycles' => '1215 kg/cm2',
                'unitaryMudulusOfBendingTensileStrength' => '141 kg/cm2',
                'heatExpansionCoeficient' => '0,0058 mm/m°C',
                'impactStrength' => '49 cm',
                'massByUnitOfVolume' => '2680 kg/m3',
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marble_specs');
    }
}
