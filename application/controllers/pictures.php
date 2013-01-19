<?php

class Pictures_Controller extends Base_Controller {

	public $restful = true;    

    public function __construct()
    {
        $this->filter('before', 'auth');
    }

    public function get_index()
    {
        
        return View::make('picture.index');
    }    

	public function post_index()
    {
        if (Picture::upload_picture_for_user())
            return Redirect::to_action('pictures@index')->with('alert', array('alert type' => 'success', 'message' => 'Your picture have been uploaded!' ));
        else
            return Redirect::to_action('pictures@index')->with('alert', array('alert type' => 'alert', 'message' => 'Couldnt upload your picture' ));    }    

	public function get_show()
    {

    }    

	public function get_edit()
    {

    }    

	public function get_new()
    {
        return View::make('picture.new');
    }

	public function put_update()
    {

    }    

	public function delete_destroy()
    {

    }

}