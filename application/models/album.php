<?php

class Album extends Eloquent 
{
	public function user()
	{
		return $this->belongs_to('User','user_id');
	}
	
	public function picture()
	{
		return $this->has_Many('Picture');
	}
}