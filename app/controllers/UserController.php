<?php

namespace app\controllers;

use app\records\UserRecord;
use Flight;

class UserController extends BaseController
{

	public function index()
	{
        $users = new UserRecord();
        $users = $users->order('id desc')->findAll();

        return $this->render('admin/users/index',[
            'users' => $users
        ]);
	}


    public function create()
    {
        return $this->render('admin/users/form');
    }

    public function store()
    {
        $name = $this->request()->data->name;
        $email = $this->request()->data->email;
        $password = $this->request()->data->password;
        $confirm_password = $this->request()->confirm_password;


        $existing_user = (new UserRecord())->eq('email',$email)->find();

        if($existing_user->id || $password != $confirm_password){
            $_SESSION['error'] = 'Email already exist!';
            return $this->redirect("/admin/users/create?err=err&name=$name&email=$email&password=$password&confirm_password=$confirm_password");
        }else {
            $user = new UserRecord();
            $user->name = $name;
            $user->email = $email;
            $user->password = password_hash($password, PASSWORD_BCRYPT);
            $user->insert();

            return $this->redirect($this->getUrl('admin.users.index'));
        }
    }

    public function edit($id)
    {
        $user = (new UserRecord())->findOrFail($id);

        return $this->render('admin/users/form', [
            'user' => $user
        ]);
    }

    public function update($id)
    {
        $user = (new UserRecord())->findOrFail($id);
        if($user){
            $user->name = $this->request()->data->name;
            $user->email = $this->request()->data->email;
            $password = $this->request()->data->password;
            $confirm_password = $this->request()->data->confirm_password;

            if($password){
                if($password != $confirm_password){
                    return $this->redirect($this->getUrl('admin.users.edit',[
                        'id' => $id
                    ])."?err=err");
                }

                $user->password = password_hash($password, PASSWORD_BCRYPT);
            }
            $user->update();
        }
        return $this->redirect($this->getUrl('admin.users.edit',[
            'id' => $id
        ]));
    }

    public function destroy($id)
    {
        $user = (new UserRecord())->findOrFail($id);
        $user->delete();
        return $this->redirect($this->getUrl('admin.users.index'));
    }
}