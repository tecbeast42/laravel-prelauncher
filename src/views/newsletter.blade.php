{!! Form::open(['route' => 'prelaunch','method' => 'put','class' => 'prelaunch-form']) !!}

	<div class="form-group">
		{!! Form::text('email',null,['placeholder' => 'Email','id'=>'email','class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::text('reserved_username',null,['placeholder' => 'Nick (optional)','id'=>'reserved_username','class' => 'form-control']) !!}
	</div> 
	<div class="g-recaptcha google-recaptcha-center form-group" data-sitekey="6Ldh0AITAAAAAFFcHr9AZI1mwr4-JGW8oDMP1zu0"></div>
	<div class="form-group">
		{!! Form::submit('Voranmelden',['class' => 'btn btn-lg btn-prelaunch']) !!}
	</div>
{!! Form::close() !!}