<?php namespace App\Controllers;

class Login extends BaseController
{
	public function login()
	{
		return view ('gate/login');
    }
    
    public function fungsi_login(){
        $username= $this->request->getVar('username');
        $password= $this->request->getVar('password');
        if($username=="yuliviaannisa"&&$password=="masuk")
        {
            return redirect()->to('/Pages/index');
        }else{
            return redirect()->to('/Login');
        }
    }
    
    public function register(){
        return view('Gate/register');
    }
    public function admin() {
        return view('Gate/admin');
    }
}