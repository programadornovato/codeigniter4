<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Home extends BaseController
{
	public function __construct(){
		helper('form');
	}
	public function formulario(){
		$estructura=view('estructura/header').view('estructura/formulario');
		return $estructura;
	}
	public function index()
	{
		$userModel=new UserModel($db);
		//$users=$userModel->find([1,2]);
		//$users=$userModel->findAll();
		//$users=$userModel->where('name','maria')->findAll();
		//$users=$userModel->findAll(2,3);
		//$users=$userModel->withDeleted()->findAll();
		/*
		$data=[
			'name'=>"programador1",
			'email'=>"programador1@hotmail.com"
		];
		$userModel->insert($data);
		
		$data=[
			'name'=>"programador2",
			'email'=>"programador2@hotmail.com"
		];
		$userModel->update(10,$data);
		
		$data=[
			'name'=>"yo"
		];
		$userModel->update([2,3],$data);
		
		$userModel->whereIn('id',[4,5,10])
		->set(['name'=>'yo tambien'])
		->update();
		
		$data=[
			'name'=>"programador11",
			'email'=>"programador11@hotmail.com"
		];
		$userModel->save($data);
		
		$data=[
			'id'=>"12",
			'name'=>"programador yo tambien",
			'email'=>"programadorto@hotmail.com"
		];
		$userModel->save($data);
		*/
		//$userModel->delete([2,4,5]);
		//$userModel->where('id',10)->delete();
		//$userModel->purgeDeleted();
		/*
		$data=[
			'name'=>"programadorvalido nuevo 2",
			'email'=>"programadornuevo2@hotmail.com"
		];
		if($userModel->save($data)===false){
			var_dump($userModel->errors());
		}
		*/
		/*
		$users=$userModel->asArray()->where('name','programador11')
		->orderBy('id','asc')
		->findAll();
		var_dump($users);
		*/
		$users=$userModel->findAll();
		
		$users=array('users'=>$users);
		$estructura=view('estructura/header').view('estructura/body',$users);
		return $estructura;
		
	}

	//--------------------------------------------------------------------

}
