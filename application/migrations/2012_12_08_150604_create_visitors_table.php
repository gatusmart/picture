<?php

class Create_Visitors_Table {    

	public function up()
    {
		Schema::create('visitors', function($table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('visitor_id');
			$table->integer('action_id');
			$table->integer('object_id');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('visitors');

    }

}