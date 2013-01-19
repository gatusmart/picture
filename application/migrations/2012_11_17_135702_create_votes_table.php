<?php

class Create_Votes_Table {    

	public function up()
    {
		Schema::create('votes', function($table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('picture_id');
			$table->integer('vote');
			$table->integer('ip');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('votes');

    }

}