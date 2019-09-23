<?php
	class Art extends Eloquent {
		
		protected $table = 'arts';
		
		public function user() 
		
		{
			
			return $this->belongsTo('User', 'uid', 'user_id');	
			
			$users = User::with('arts')->get();
			
		}
		
		
		 
	
	
	}