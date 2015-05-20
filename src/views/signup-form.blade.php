{!! Form::open(['route' => 'prelaunch','method' => 'put','class' => 'prelaunch-form']) !!}
	<div class="form-group">
		{!! Form::text('email',null,['placeholder' => 'Email','id'=>'email','class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::text('reserved_username',null,['placeholder' => 'Nick (optional)','id'=>'reserved_username','class' => 'form-control']) !!}
	</div> 
		{!! Config::get('prelaunch.google_reCaptcha_html') !!}
	<div class="form-group">
		{!! Form::submit('Voranmelden',['class' => 'btn btn-lg btn-prelaunch']) !!}
	</div>
{!! Form::close() !!}