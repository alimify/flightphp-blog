<?php

namespace app\controllers;

use app\records\UserRecord;
use Flight;

class AuthController extends BaseController
{

	public function login()
	{
        $message = "";
        return $this->render('admin/auth/login',[
            'message' => $message
        ]);
	}

    public function loginRequest()
    {
        $message = "";
        $email = $this->request()->data->email;
        $password = $this->request()->data->password;
        $user = (new UserRecord())->eq('email',$email)->find();

        if($user->id && password_verify($password,$user->password)){
            $this->cookie()
                ->set('user_id',$user->id);
            $this->cookie()
                ->set('name',$user->name);
            $this->cookie()
                ->set('email',$user->email);
            return $this->redirect('/admin/dashboard');
        }else {
            $message = "Please check credentials.";
        }

        return $this->render('admin/auth/login',[
            'message' => $message
        ]);
    }

    public function register()
    {
        return $this->render('admin/auth/register');
    }


    public function logout()
    {
        $this->cookie()
             ->clear();
        return $this->redirect('/admin/login');
    }
}