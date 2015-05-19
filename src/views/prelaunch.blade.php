@extends('prelaunch::prelaunch-layout')

@section('content')
	<main>
		<div class="msg-box">
			@if(Session::has('msg'))
				{!! Session::get('msg') !!}
			@endif
		</div>
		<div class="prelaunch-text">
			<h3>Wir arbeiten noch an dem Spiel</h3>
			Du kannst schon jetzt einen Namen<br> für das Spiel registrieren.
		</div>
		@include('prelaunch::newsletter')
	</main>
@stop

@section('pagescripts')
	<script type="text/javascript">
		@include('prelaunch::pagescripts')
	</script>
@stop