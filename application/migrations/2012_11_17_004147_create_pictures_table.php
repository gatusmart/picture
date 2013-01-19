<?php

class Create_Pictures_Table {    

	public function up()
    {
		Schema::create('pictures', function($table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->string('caption');
			$table->string('filepath');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('pictures');

    }

}