<?php

class Visitor extends Eloquent 
{
	public function user()
	{
		return $this->has_Many('Visitor');
	}


}