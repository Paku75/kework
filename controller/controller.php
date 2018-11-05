<?php
include_once("model/model.php");

class Controller 
{
	protected $model;
	
	public function __construct()  
    {  
        $this->model = new Model();
    }
	
	public function index()
	{
		include_once "view/index.php";
	}
	
	public function register()
	{
		$status=$this->model->register($errors);
		include_once "view/register.php";
	}

	public function login()
	{
		$status=$this->model->login($errors);
		include_once "view/login.php";
	}
	
	public function forgot_password()
	{
		$status=$this->model->forgot_password($errors);
		include_once "view/forgot_password.php";
	}

	public function home()
	{
		$logged_in=$this->model->logged_in();
		include_once "view/home.php";
	}

	public function logout()
	{
		$logged_in=$this->model->logout();
	}

	public function profile()
	{
		$logged_in=$this->model->logged_in();
		$status=$this->model->profile($errors, $profile);
		include_once "view/profile.php";
	}
}

?>
