@extends('Layouts.master')

@section('content')

<h1>Thank you for Logging in</h1>

{{ Redirect::to('/go/'.$email) }}

@stop

