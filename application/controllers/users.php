<?php

class Users_Controller extends Base_Controller {

	public $restful = true;    

    public function __construct()
    {
        $this->filter('before', 'auth')->except(array('new','logout','index'));
        $this->filter('before', 'auth')->only('index')->on('get');

    }

	public function get_index($userID = null)
    {
        
        if ($userID == null){
            $user = Auth::user();
        }
        else {
            $user = User::find($userID);
            if($user == null) $user = Auth::user();
        }
        return View::make('user.index')->with('user',$user);
        
    }    

	public function post_index()
    {
        //return dd(Input::all());
        //$email = Input::get('username');
        //$password = Input::get('password');
        //return $email;
        $credentials = array(
            'username' => Input::get('email'),
            'password' => Input::get('password')
            );

        if (Auth::attempt($credentials)){
            // If user attempted to access specific URL before logging in
                    if ( Session::has('pre_login_url') )
                    {
                        $url = Session::get('pre_login_url');
                        Session::forget('pre_login_url');
                        return Redirect::to($url);
                    }
                    else
                        return Redirect::to_action('users@index');
        }

        else
        {
            return Redirect::to('login')->with('login_errors', true);
        }
        
    }    

	public function get_show()
    {
        $users = User::with('profilePicture')->get();
        return View::make('user.show')->with('users',$users);
        //return dd($users);
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

    public function get_logout(){
        Auth::logout();
        return Redirect::home();
    }

}