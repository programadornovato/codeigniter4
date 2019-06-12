<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Home extends BaseController
{
	public function index()
	{
		$userModel=new UserModel($db);
		//$users=$userModel->find([1,2]);
		//$users=$userModel->findAll();
		//$users=$userModel->where('name','maria')->findAll();
		//$users=$userModel->findAll(2,3);
		//$users=$userModel->withDeleted()->findAll();
		$users=$userModel->onlyDeleted()->findAll();
		$users=array('users'=>$users);
		$estructura=view('estructura/header').view('estructura/body',$users);
		return $estructura;
	}

	//--------------------------------------------------------------------

}
