<?php

class Add_Gender_To_Users_Table {    

	public function up()
    {
		Schema::table('users', function($table) {
			$table->string('gender',1);
	});

    }    

	public function down()
    {
		Schema::table('users', function($table) {
			$table->drop_column('gender');
	});

    }

}