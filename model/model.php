<?php
include_once("model/user.php");

class Model 
{
	protected $user;
	
	
	public function __construct()  
    {  
		$this->user = new User();
    } 
	
	public function register(&$errors)
	{
		return $this->user->register($errors);
	}
	
	public function login(&$errors)
	{
		return $this->user->login($errors);
	}
	
	public function forgot_password(&$errors)
	{
		return $this->user->forgot_password($errors);
	}
	
	public function logged_in()
	{
		return $this->user->logged_in();
	}

	public function logout()
	{
		return $this->user->logout();
	}
	
	public function profile(&$errors, &$profile)
	{
		return $this->user->profile($errors, $profile);
	}
}

?>
