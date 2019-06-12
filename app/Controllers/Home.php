<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Home extends BaseController
{
	public function index()
	{
		$userModel=new UserModel($db);
		$user=$userModel->find('1');
		var_dump($user);
		$estructura=view('estructura/header').view('estructura/body',$user);
		return $estructura;
	}

	//--------------------------------------------------------------------

}
