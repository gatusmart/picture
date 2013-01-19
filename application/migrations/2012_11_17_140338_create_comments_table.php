<?php

class Create_Comments_Table {    

	public function up()
    {
		Schema::create('comments', function($table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('picture_id');
			$table->text('comment');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('comments');

    }

}