<?php

class Add_Profilepicture_To_Users_Table {    

	public function up()
    {
		Schema::table('users', function($table) {
			$table->string('profilepicture');
	});

    }    

	public function down()
    {
		Schema::table('users', function($table) {
			$table->drop_column('profilepicture');
	});

    }

}