@layout('layouts.main')

@section('content')
<div class = "row">
	<div class="six columns centered">
		<h1>Upload a picture.</h1>
		<div class = 'panel'>
			{{ Former::horizontal_open_for_files('pictures')->class('custom')->method('POST') }}
			<div class "row">
				<div class = "five coulumns end error">
				{{ Former::file('picture')->accepts('image')->required()}}
				</div>
			</div>
			<br>
			<div class = "row">
				{{ Former::actions (Former::large_normal_submit('Upload')->class('medium radius button')) }}
			</div>
			{{ Former::close() }}
		</div>
	</div>
</div>
@endsection