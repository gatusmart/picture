<?php

class Messages_Controller extends Base_Controller {

	public $restful = true;    

    public function __construct()
    {
        $this->filter('before', 'auth');
    }

	public function get_index()
    {
        
        //Message::send_message_to('1','HEJ HEJ');
        

        //dd(Auth::user()->messages()->get()->sender());
        //dd(Message::with('sender')->where('reciever_id','=', Auth::user()->id)->get());
        //return View::make('message.index')->with('messages', Auth::user()->messages);
        //dd(Auth::user()->get_messages());
        //$uid = Auth::user()->id;
        //$messages = Message::with(array('sender'))->where('user_id','=',$uid)->get();
        return View::make('message.index')->with('messages', Auth::user()->get_messages());

    }    

	public function post_index()
    {

    }    

	public function get_show()
    {

    }    

	public function get_edit()
    {

    }    

	public function get_new()
    {

    }    

	public function put_update()
    {

    }    

	public function delete_destroy()
    {

    }

}