@layout('layouts.main')


@section('header')


@endsection
@section('content')
<script src="http://code.jquery.com/jquery-1.8.3.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.entry-title').toggle(function() {
			$hej = "#" + $(this).attr("messageId");
			$($hej).animate({height: "230"}, 500);
		}
		, function() {
			$hej = "#" + $(this).attr("messageId");
			$($hej).animate({height: "0"}, 500);
		});
	});
</script>
	<h1>Messages.</h1>
	<i class="general foundicon-edit"></i>
	@foreach ($messages as $message)
		<div class="alert-box secondary">
				<ul class="block-grid message two-up">
					<li class="contactTumbnailPicture"> 
						{{HTML::image('http://placehold.it/64', 'picture', array('class' => 'left'))}}
					</li>
					
					<li class="messageText">
						<ul class="block-grid message two-up">
							<li><h6 class="subheader test"> 
								{{HTML::link_to_action('user@index', $message->sender->email, array($message->sender->id))}}
							</h6></li>
							<li><h6 class="subheader testar right mobile-right"> {{$message->created_at}}</h6>  </li>
						</ul>
						
						<div class="messagetest">
							<p>
								{{$message->message}} Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac justo sit amet odio suscipit vehicula nec a neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dolor est, laoreet vel egestas ac, dapibus et eros. Quisque commodo aliquam rutrum. Suspendisse ligula mauris, placerat ac aliquam ac, molestie vitae risus. Cras ut erat rhoncus leo lacinia ornare at eu arcu. Ut fermentum dapibus malesuada. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pellentesque blandit euismod. Pellentesque nec ipsum ut lacus vulputate dapibus.
								<br>
								<br>
								Morbi vitae lobortis mi. Curabitur placerat lacus sit amet diam tempor at suscipit est tristique. Nulla egestas dignissim blandit. Vivamus sed urna odio, at sagittis leo. Praesent eget turpis orci. Morbi ut lorem quis massa volutpat molestie sed ut dui. Donec quis imperdiet sem.
							</p>
						</div>
					</li>
				</ul>
		
				<div style="height:20px;">
						<a href="#" class="entry-title right mobile-right replyButton" messageid="{{$message->id}}">&larr;</a>
				</div>
						
				<div id="{{$message->id}}" class="videoblock">
					{{ Former::horizontal_open('messages')->id('MyForm')->method('POST')->class('slidingDiv') }}
					{{Former::textarea('Message')->class('replymessage')->label('')		}}		
					{{ Former::actions (Former::large_normal_submit('Submit')->class('radius button')) }}
					{{ Former::close() }} 
				</div>
			
				<a href="" class="report close">!</a>	
				<a href="" class="viewConversation close">&times;</a>	
		  		<a href="" class="close">&times;</a>
		</div>
	@endforeach

@endsection