@layout('layouts.main')

@section('header')
<div class = "row">
	<div class="twelve columns centered">
		<div class="six columns">
		<h1>Pictures.</h1>
	</div>
	<div class="six columns">
		{{HTML::link('pictures/new', 'Upload new picture', array('class' => 'button radius right'))}}
	</div>
	</div>
</div>

@endsection

@section('content')
	<div class="four columns">
		<fieldset>
				
			<a href="#" class="th"><img src="http://placehold.it/350x200"></a>
			<br>
			<ul class="block-grid two-up">

			  <li><a href="#" class="button success radius">Button 3</a></li>
			  <li><a href="#" class="button radius alert right">Button 3</a></li>
			</ul>
			<h3>Picture1</h3>
			<blockquote class="special">
				<h6>hej, 21 år</h6>
			  	<p>I do not fear computers. I fear the lack of them.
			</blockquote>
			<blockquote class ="special">
				<h6>hej, 21 år</h6>
			  	<p>I do not fear computers. I fear the lack of them.
			</blockquote>
		</fieldset>
	</div>

	<div class="four columns">
		<fieldset>
				
			<a href="#" class="th"><img src="http://placehold.it/350x200"></a>
			<br>
			<ul class="block-grid two-up">

			  <li><a href="#" class="button success radius">Button 3</a></li>
			  <li><a href="#" class="button radius alert right">Button 3</a></li>
			</ul>
			<h3>Picture1</h3>
			<blockquote>
				<h6>hej, 21 år</h6>
			  	<p>I do not fear computers. I fear the lack of them.
			</blockquote>
			<blockquote>
				<h6>hej, 21 år</h6>
			  	<p>I do not fear computers. I fear the lack of them.
			</blockquote>
		</fieldset>
	</div>

	<div class="four columns">
		<fieldset>
				
			<a href="#" class="th"><img src="http://placehold.it/350x200"></a>
			<br>
			<ul class="block-grid two-up">

			  <li><a href="#" class="button success radius">Button 3</a></li>
			  <li><a href="#" class="button radius alert right">Button 3</a></li>
			</ul>
			<h3>Picture1</h3>
			<blockquote>
				<h6>hej, 21 år</h6>
			  	<p>I do not fear computers. I fear the lack of them.
			</blockquote>
			<blockquote>
				<h6>hej, 21 år</h6>
			  	<p>I do not fear computers. I fear the lack of them.
			</blockquote>
		</fieldset>

		<fieldset>
				
			<a href="#" class="th"><img src="http://placehold.it/350x200"></a>
			<br>
			<ul class="block-grid two-up">

			  <li><a href="#" class="button success radius">Button 3</a></li>
			  <li><a href="#" class="button radius alert right">Button 3</a></li>
			</ul>
			<h3>Picture1</h3>
			<blockquote>
				<h6>hej, 21 år</h6>
			  	<p>I do not fear computers. I fear the lack of them.
			</blockquote>
			<blockquote>
				<h6>hej, 21 år</h6>
			  	<p>I do not fear computers. I fear the lack of them.
			</blockquote>
		</fieldset>
	</div>
@endsection
