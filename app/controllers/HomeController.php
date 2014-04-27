<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function show()
	{
		$id = "1";
		return Redirect::to('/service/single?id ='.$id.'');

	}

	public function login()
	{

	$input = Input::all();
	$rules = array(
		
		'email'=> 'required',
		'pwd'=> 'required'
		
		);
	$messages= array(
		
		'email.required'=>'Your Email is required',
		'pwd.required'=>'Your Password is required'

		);
	$msg = array(

		'Your Email or password is incorrect '

		);
	
		//var_dump($input);
		$v = Validator::make($input,$rules,$messages);
		if ($v->passes())
		{
			$email = $input['email'];
			$pwd = $input['pwd'];
			
			//$user = DB::table('register')->where('email' => $input['email'], 'password' => $input['pwd'])->get();
			$user = DB::table('register')->where('email',$email)->where('password',$pwd)->get();
			//var_dump($user);
			if($user)
			{
				// $e = DB::table('register')
				//         ->select('email','acode')
				//         ->where('email',$email)->get();
				//var_dump($e);

				//$users = User::all();
				//$users = DB::table('posts')
    			//	->join('register', 'posts.acode', '=', 'register.acode')
    			//	->select('posts.title', 'register.uname')
    			//	->where('email',$email)
    			//	->get();
				//$email= 'kkkkk';
				return Redirect::to('/data?email='.$email.'');
				//		->with($e);


			}
			else
			{
				return Redirect::to('signin')
					->withInput()
					->withErrors($v)
					->with('msg');
				      
			}

			
		}
		else 
		{
			return Redirect::to('signin')
				 ->withInput()
			     ->withErrors($v)
			     ->with('messages');
			     
		}

	}

}