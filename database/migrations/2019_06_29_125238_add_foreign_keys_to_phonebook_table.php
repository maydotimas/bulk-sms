<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPhonebookTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('phonebook', function(Blueprint $table)
		{
			$table->foreign('app_id', 'fk_phonebook_app1')->references('id')->on('app')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('phonebook', function(Blueprint $table)
		{
			$table->dropForeign('fk_phonebook_app1');
		});
	}

}
