<?php

class User extends Eloquent 
{
	public function pictures(){
		return $this->has_Many('Picture');
	}

	public function album()
	{
		return $this->has_Many('Album');
	}

	public function profilePicture()
	{
		return $this->belongs_To('Picture','profilepicture');
	}

	public function sent_messages()
	{
		return $this->has_Many('Message','sender_id');
	}

	public function messages()
	{
		return $this->has_Many('Message','reciever_id');
	}

	public function get_messages()
	{
		return Message::with('sender')->where('reciever_id','=', $this->id)->order_by('created_at','desc')->get();
	}

}