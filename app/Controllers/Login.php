<?php namespace App\Controllers;

class Login extends BaseController
{
	public function index()
	{
		return view ('gate/login');
    }
    
    public function fungsi_login(){
        $email= $this->request->getVar('email');
        $password= $this->request->getVar('password');
        if($email=="yulivia@gmail.com"&&$password=="masuk")
        {
            return redirect()->to('/home');
        }else{
            return redirect()->to('/gate');
        }
    }
    
    public function register(){
        return view('gate/register');
    }
}
