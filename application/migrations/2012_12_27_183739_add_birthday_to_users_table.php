<?php

class Add_Birthday_To_Users_Table {    

	public function up()
    {
		Schema::table('users', function($table) {
			$table->date('birthday');
	});

    }    

	public function down()
    {
		Schema::table('users', function($table) {
			$table->drop_column('birthday');
	});

    }

}