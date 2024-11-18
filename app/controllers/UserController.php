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

        $existing_user = (new UserRecord())->eq('email',$email)->findOrFail();

        if($existing_user->id){
            return $this->redirect('/admin/users/create');
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
            if($password){
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