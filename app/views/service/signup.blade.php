@extends('Layouts.master')

@section('content')
	<div class="container">
		<div class="span4 well">
			{{ Form::open(array('url' => '/signup','class'=>'form-signup')) }}
			<h1 class="form-signup-heading">Register a User</h1>
			{{ Form::text('uname','',array('placeholder'=>'Username','class'=>'form-control')) }}
			{{ Form::email('email','',array('placeholder'=>'Email','class'=>'form-control')) }}
			{{ Form::password('pwd',array('placeholder'=>'Password','class'=>'form-control')) }}
			{{ Form::text('cno','',array('placeholder'=>'Contact No','class'=>'form-control')) }}
			{{ Form::text('city','',array('placeholder'=>'City','class'=>'form-control')) }}
			{{ Form::text('area','',array('placeholder'=>'Area','class'=>'form-control')) }}
			{{ Form::text('acode','',array('placeholder'=>'Pincode','class'=>'form-control')) }}
			{{ Form::submit('Sign up',array('class'=>'btn btn-lg btn-primary btn-block')) }}
			{{ Form::close() }}
		</div>
		<div class="span4 well">
			
			@if($errors->any())
				<ul>
					{{ implode('', $errors->all('<li class="error">:message</li>')) }}
				</ul>
			@endif
		</div>
	</div>

@stop