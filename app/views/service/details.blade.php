@extends('Layouts.master')

@section('content')
	<div class="container">
		<div class="header">
			<ul class="nav nav-pills pull-right">
          		<li class="active">{{ HTML::link('/go/'.$value[0]->email,'Back') }}</li>
          		
        	</ul>
            <h1></h1>
    </div>
  </div>
  <hr>
	<div class="container">
    @if(isset($user))
      <table class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th>Restaurant Name</th>
            <th>Special Item</th>
            <th>Description</th>
            <th>City</th>
            <th>Area</th>
          </tr>
        </thead>
        <tbody>
            <td>{{ $user->title }}</td>
            <td>{{ $user->spl_item }}</td>
            <td>{{ $user->body }}</td>
            <td>{{ $user->city }}</td>
            <td>{{ $user->area }}</td>
            </tr>
          
        </tbody>
      </table>
    @else
      There is no user
    @endif
  </div>
    <hr>
    <div class="container">
        <div class="panel comments"><p>This is comment</p>
              @if(isset($com))
                
                @foreach ($com as $c) 
                    
                    <p> {{ $c->details }} </p>
                    <hr>
                    
                @endforeach
                
              @else
                  No Comments
              @endif
        </div>
            <div class="form-group">
        
              <textarea class="form-control comment-text" name="tarea"></textarea>

              <input type="hidden" class="author" value="{{ $value[0]->uname }}">
              <input type="hidden" class="did" value="{{ $user->id }}">
            </div>
            <button class="btn btn-primary add">Add Comment</button>

        
    </div>
  <div class="footer">
       <p>Created By Murali Selvaraj</p>
  </div>
@stop