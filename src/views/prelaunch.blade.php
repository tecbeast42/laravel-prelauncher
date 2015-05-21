@extends('prelaunch::prelaunch-layout')

@section('content')
	<main>
		@if(count($errors) > 0)
			<div class="msg-box">
				@foreach($errors->all() as $error)
					<div class="alert alert-danger" role="alert">{{ $error }}</div>
				@endforeach
				@if(Session::has('fadeMsg'))
				<div class="alert alert-success" role="alert">{{ Session::get('fadeMsg') }}</div>
				@endif
			</div>
		@endif
		<div class="prelaunch-text">
			<h3>Prelaunch</h3>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, ullam.
		</div>
		@include('prelaunch::signup-form')
	</main>
@stop