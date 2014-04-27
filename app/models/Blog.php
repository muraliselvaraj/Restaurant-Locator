<?php

class Blog extends Eloquent
{
	public $table="register";

	public static $rules = array(
		'uname'=> 'required',
		'email'=> 'required',
		'pwd'=> 'required',
		'city'=> 'required',
		'area'=>'required',
		'acode'=> 'required'
		
		);
	public static $messages= array(
		'uname.required'=>'Your User Name is required',
		'email.required'=>'Your Email is required',
		'pwd.required'=>'Your Password is required',
		'city.required'=>'Your City Name is required',
		'area.required'=>'Your Area Name is required',
		'acode.required'=>'Your pincode is required'

		);
	public static $rule = array(
		
		'email'=> 'required',
		'pwd'=> 'required'
		
		);
	public static $mesg= array(
		
		'email.required'=>'Your Email is required',
		'pwd.required'=>'Your Password is required'

		);
	public static $msg = array(

		'Your Email or password is incorrect '

		);
	


}
