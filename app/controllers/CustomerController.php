<?php

class CustomerController extends BaseController {
	public function showRegisterc()
	{
		return View::make('customer-login-register');
	}

	public function doRegisterc()
	{
		
		
		$validator = Validator::make(
        Input::all(),
		
		array(
		
		  'email' => 'required|email|unique:users',
		  'password' => 'required',
          'confirm_password' => 'required|same:password',
		  'firstname' => array('required'),
		  'othername' => array('required'),
		  'lastname' => array('required')
		  
		  )
		 
		);
	
		if($validator->passes()){
			
			//$messages = $validator->messages();
			
			return 'Thanks';
			
			
		}
	 /*if ($validator->passes()){
		
       $user = new User();
	   
	  
	   $user->email=Input::get('email'); 
	   $user->password=Hash::make(Input::get('password'));
	   $user->firstname=Input::get('firstname');
	   $user->othername=Input::get('othername');
	   $user->lastname=Input::get('lastname');
	   $user->remember_token=Hash::make(Input::get('rememberToken()'));
	   $user->account_type="0";
	   
	   $user->save();
	   
		return Redirect::to('customer-login-register')->with('msg','You have successfully registered.');
		
		 
		 }else{
		   return Redirect::to('customer-login-register')->with(
            'error',
            'Please correct the following errors:'
        )->withErrors($validator);
		
		 
		 }*/
		 
	
	}
	
/*	public function doLoginc()
	{
	
	$loginvalidator = Validator::make(
			Input::all(),
			array(
			  'loginemail' => array('required', 'email'),
			  'password' => array('required')
				 
			)
		);
		
		
		 if ($loginvalidator->passes()){
			 
			 
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
	*/
	
	public function doLogoutc()
	{
		Session::flush();
		return Redirect::to('customer-login-register');	
		
	}
	
		
	


}



?>