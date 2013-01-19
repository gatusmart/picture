@layout('layouts.main')

@section('content')
		<div class = "twelve columns centered">
			<div class = "row">
				<div class = "twelve columns">
					<h1>Heyyy!</h1>
				</div>
			</div>
			<div class = "row">
				<div class = "eight columns">
					<p> You are logged in now! Congratulations</p>
				</div>
				<div class = "four columns">
					<div class = "panel radius">
						<h1>{{$user->name}}</h1>
						{{HTML::image($user->profilePicture->getUrl());}}
					</div>
				</div>
			</div>
		</div>
@endsection