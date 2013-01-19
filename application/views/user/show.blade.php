@foreach ($users as $user)
	{{HTML::image($user->profilePicture->getUrl())}}
@endforeach