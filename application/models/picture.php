<?php

class Picture extends Eloquent 
{

	public function user(){
		return $this->belongs_to('User', 'user_id');
	}

    public function album()
    {
        return $this->belongs_to('Album', 'album_id');
    }

    public function comment()
    {
        return $this->has_Many('Comment');
    }

	static function create_unique_filename(){
            $filename = base_convert(rand(10000,999999),10,36);

            if (Auth::user()->pictures()->where('filepath', 'LIKE', '%'.$filename.'%')->get()){
                create_unique_filename();
            }

            return $filename;
        }
	
    public static function upload_picture_for_user(){
    	$user = Auth::user();

        $path = path('public').'data'.'/userimages'.'/'.$user->gender.'/'.$user->id;
        $filename = Picture::create_unique_filename();

        //Check if user doesnt have a folder
        //If not create one
        if(!File::exists($path))
            File::mkdir($path);
        
        //If upload succeeds insert into database information about the file.
        if(Input::upload('picture', $path, $filename)){
            $picture = new Picture;
            $picture->user_id = Auth::user()->id;
            $picture->filepath = 'data'.'/userimages'.'/'.$user->gender.'/'.$user->id.'/'.$filename;
            $picture->save();

            return true;
        }
        else 
        	return false;
    }

    public function getUrl()
    {
        $url = URL::to_asset($this->filepath);
        return $url ;
    }

}