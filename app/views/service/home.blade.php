@extends('Layouts.master')

@section('content')
	<div class="container">
		<div class="header">
			<ul class="nav nav-pills pull-right">
          		<li class="active">{{ HTML::link('/home','Home') }}</li>
          		<li>{{ HTML::link('/signup','Signup') }}</li>
          		<li>{{ HTML::link('/signin','Login') }}</li>
        	</ul>
            <h1>Restaurants in Bangalore</h1>
      	</div>
        <hr>
	<div class="container">

      <div class="row">
                @if(isset($users))
                    @foreach ($users as $u) 
                        <div class="col-md-4">
                            <h4>{{ $u->title    }}</h4>
                            <p><b>Special Item:</b>{{ $u->spl_item }}</p>
                              
                             <p class="active">{{ HTML::link('generalhome/'.$u->id,'View Details') }}</p>
                            </ul>
                        </div>
                    @endforeach
                @else
                    There is no user
                @endif
      </div>
      <hr>
      <div class="footer">
        <p>Created By Murali Selvaraj</p>
      </div>
    </div>
@stop