<?php

/*
Route::get('/',function(){
	$users=User::orderBy('lname','asc')->get();
	foreach ($users as $u) {
		var_dump($u->fname);
	}
	
});
*/
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function(){

	$users = User::all();
	
	return View::make('service.home')->with('users',$users);
	
});
Route::get('/comment', function(){

	
});

 Route::get('/generalhome/{id}', function($id)
 {

	

 	$user = DB::table('posts')->where('id',$id)->first();
 	$com = DB::table('comment')->where('detail_id',$id)->get();
 	 

 	
   return View::make('service.unlogdetail')->with('user',$user)->with('com',$com);
});


 Route::get('details/{id}', function($id)
 {

	$value = Session::get('name');

 	$user = DB::table('posts')->where('id',$id)->first();
 	$com = DB::table('comment')->where('detail_id',$id)->get();
 	 

 	
   return View::make('service.details')->with('user',$user)->with('value',$value)->with('com',$com);
});

Route::get('/comment/{data}/{id}', function($data,$id){

		
	  		if (Request::ajax()) {

 				DB::table('comment')->insert(array(
 					'details' => $data,
 					'detail_id' => $id


 		
 					));
 			}



 
});



Route::post('/signup', function(){
	
	$input = Input::all();
	
		
	$v = Validator::make($input,Blog::$rules,Blog::$messages);
	if ($v->passes())
	{
		DB::table('register')->insert(array(
		'uname' => $input['uname'],
		'email' => $input['email'],
		'password' => $input['pwd'],
		'city' => $input['city'],
		'area' => $input['area'],
		'acode' => $input['acode'],
		'contact' => $input['cno']

		));

		return Redirect::to('/');

	}
	else 
	{
		return Redirect::to('/signup')
			 ->withInput()
		     ->withErrors($v)
		     ->with('messages');
		     
	}

});

Route::post('/signin', function(){

		$input = Input::all();
		$v = Validator::make($input,Blog::$rule,Blog::$mesg);
		if ($v->passes())
		{
			$email = $input['email'];
			$pwd = $input['pwd'];
			
			$user = DB::table('register')->where('email',$email)->where('password',$pwd)->get();
			if($user)
			{
				
				return View::make('service.single')->with('email',$email);


				
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
			     ->with('mesg');
			     
		}

});



Route::get('/go/{email}',function($email){

	

	$name = DB::table('register')
				       ->where('email',$email)
				       ->get();
				
				
				 Session::put('name', $name);

				$users = DB::table('register')
    				->join('posts', 'register.acode', '=', 'posts.acode')
    				->where('email',$email)
    				->get();
     			$uname = DB::table('register')->where('email',$email)->first();

	return View::make('service.user')->with('users',$users)->with('uname',$uname);	
});



Route::get('/signup',function(){

	return View::make('service.signup');	
});

Route::get('/signin',function(){

	return View::make('service.signin');	
});








