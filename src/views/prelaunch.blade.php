@extends('prelaunch::prelaunch-layout')

@section('content')
	<main>
		@if(count($errors) > 0)
			<div class="msg-box">
				<ul>
					@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
		<div class="prelaunch-text">
			<h3>Prelaunch</h3>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, ullam.
		</div>
		@include('prelaunch::signup-form')
	</main>
@stop