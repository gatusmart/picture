@layout('layouts.main')
@section('header')

@endsection
@section('content')
    <div class="six columns centered">
        <h1>Log in.</h1>
    	<div class="panel radius">
    		{{ Former::horizontal_open('users')->id('MyForm')->method('POST') }}
			{{ Former::xlarge_text('email')->class('myclass')->placeholder('Enter your Email')->required() }}
			{{ Former::password('password')->class('password')->placeholder('Enter Password')->required() }}
			{{ Former::actions (Former::large_normal_submit('Submit')->class('radius button') ,Former::large_inverse_reset('Reset')->class('secondary radius button')) }}
			{{ Former::close() }}
    	</div>
    </div>

    
    
	
@endsection