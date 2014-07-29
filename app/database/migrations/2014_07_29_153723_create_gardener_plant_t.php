<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGardenerPlantT extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gardeners_plants', function($table) {
			
		// This generates two columns: `created_at` and `updated_at` to
        // keep track of changes to a row
        $table->timestamps();

        // The rest of the fields...
        $table->Integer('frost_id')->unsigned();
		$table->foreign('frost_id')->references('frost_id')->on('frosts');
        $table->Integer('gardener_id')->unsigned();
		$table->foreign('gardener_id')->references('gardener_id')->on('users');
		$table->Integer('plant_id')->unsigned();
		$table->foreign('plant_id')->references('plant_id')->on('plants');
		
		$table->date('seedling_Date');
		$table->date('direct_Sow_Date');
		$table->date('transplanting_Date');
		$table->string('gardener_Indoor_Offset_Days');
		$table->string('gardener_Outdoor_Offset_Days');
		$table->string('gardener_Transplant_Offset_Days');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('gardeners_plants');
	}

}
