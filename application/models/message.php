<?php

class Message extends Eloquent 
{
	public function reciever()
	{
		return $this->belongs_To('User','reciever_id');
	}

	public function sender()
	{
		return $this->belongs_To('User','sender_id');
	}

	public static function send_message_to($reciever, $message_text)
	{
		
		$message = new Message;
		$message->sender_id = Auth::user()->id;
		$message->reciever_id = $reciever;
		$message->message = $message_text;
		
		if ($message->save())
			return true;
		else
			return false;
		
	}
}