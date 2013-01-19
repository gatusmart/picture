<?php

class Add_Album_Id_To_Pictures_Table {    

	public function up()
    {
		Schema::table('pictures', function($table) {
			$table->integer('album_id');
	});

    }    

	public function down()
    {
		Schema::table('pictures', function($table) {
			$table->drop_column('album_id');
	});

    }

}