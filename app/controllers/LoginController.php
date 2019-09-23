<?php

class LoginController extends BaseController {
	public function showRegisterc()
	{
		return View::make('customer-login-register');
	}

	
	
	
	public function doLoginc()
	{
	
	$validator = Validator::make(
			Input::all(),
			array(
			  'loginemail' => array('required', 'email'),
			  'password' => array('required')
				 
			)
		);
		
		
		 if ($validator->passes()){
			 
			 
			 $customerdata = array(
			'email'     => Input::get('loginemail'),
			'password'  => Input::get('password')
		);
			if (Auth::attempt($customerdata)) {
				
				// validation successful!
				// redirect them to the secure section or whatever
				$email = Input::get('loginemail');
				
				$userresults=User::where('email', '=', $email)->first();
				
				 Session::put('uid', $userresults->uid);
				 Session::put('firstname', $userresults->firstname);
				 Session::put('othername', $userresults->othername);
				 Session::put('lastname', $userresults->lastname);
	             Session::put('email', $userresults->email);

				 
				return Redirect::to('index');
		
			} else {        
		
				// validation not successful, send back to form 
				return Redirect::to('customer-login-register')->with('flash_error', 'Your username/password combination was incorrect.')
            ->withInput();
				
				
		
			}
			
			 
		}

		
	} 
	
	
	public function doLogoutc()
	{
		Session::flush();
		return Redirect::to('customer-login-register');	
		

	}
	
		


}


?>