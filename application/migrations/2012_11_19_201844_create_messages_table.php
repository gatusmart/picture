<?php

class Create_Messages_Table {    

	public function up()
    {
		Schema::create('messages', function($table) {
			$table->increments('id');
			$table->integer('reciever_id');
			$table->integer('sender_id');
			$table->text('message');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('messages');

    }

}