<?php

class Create_Albums_Table {    

	public function up()
    {
		Schema::create('albums', function($table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->string('name');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('albums');

    }

}