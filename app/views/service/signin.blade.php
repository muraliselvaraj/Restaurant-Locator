@extends('Layouts.master')

@section('content')
   <div class="container">
   			<div class="span4 well">
    			{{ Form::open(array('url' => '/signin','class'=>'form-signup')) }}
				<h1 class="form-signup-heading">Login Here</h1>

      			{{ Form::email('email', '',array('class'=>'form-control','placeholder'=>'email')) }}
    			{{ Form::password('pwd',array('class'=>'form-control','placeholder'=>'password')) }}
    			{{ Form::submit('Signin', array('class'=>'btn btn-lg btn-primary btn-block')) }}
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