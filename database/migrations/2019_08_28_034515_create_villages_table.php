<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVillagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('villages', function (Blueprint $table) {
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('website');
            $table->boolean('cellphone_service');
            $table->boolean('internet');
            $table->boolean('community_farm_garden');
            $table->boolean('gym_sports_facilities');
            $table->boolean('large_scale_kitchen');
            $table->boolean('library');
            $table->boolean('play_areas');
            $table->boolean('swimming_pond_pool');
            $table->boolean('natural')->nullable();
            $table->boolean('green')->nullable();
            $table->integer('residents');
            $table->json('languages');
            $table->string('dietary_restrictions')->nullable();
            $table->boolean('income_sharing');
            $table->boolean('self_governance');
            $table->boolean('urban');
            $table->boolean('semi_urban');
            $table->boolean('rural');
            $table->boolean('mobile');
            $table->string('country');
            $table->string('continent');
            $table->boolean('cohousing');
            $table->boolean('shared_housing');
            $table->boolean('building_lots');
            $table->boolean('camping');
            $table->boolean('visitors');
            $table->boolean('new_members');
            $table->boolean('volunteers');
            $table->boolean('self_or_shared_food_production');
            $table->boolean('renewable_energy');
            $table->boolean('education');
            $table->boolean('research');
            $table->boolean('art');
            $table->boolean('spiritual');
            $table->boolean('religious');
            $table->boolean('forming');
            $table->boolean('established');
            $table->boolean('disbanded');
            $table->integer('founded_in');
            $table->boolean('fic_member');
            $table->string('location');
            $table->text('description');
            $table->text('picture');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vilages');
    }
}
