@extends('Layouts.master')

@section('content')
	<div class="container">
		<div class="header">
			    <ul class="nav nav-pills pull-right">
              <li>{{ HTML::link('/','Logout') }}</li>
        	</ul>
       <h1>Welcome Mr.{{ $uname->uname }}</h1>
    </div>
  </div>
        <hr>
	<div class="container">

      <div class="row">
                @if(isset($users))
                    @foreach ($users as $u) 
                     
                        <div class="col-md-4">
                            <h4>{{ $u->title }}</h4>
                            <p><b>Special Item:</b>{{ $u->spl_item }}</p>
                            <p>{{ HTML::link('details/'.$u->id,'View Details') }}</p>
                            
                        </div>
                    @endforeach
                @else
                    Please Register and Login
                @endif
      </div>
      <hr>
      <div class="footer">
        <p>Created By Murali Selvaraj</p>
      </div>
  </div>
@stop