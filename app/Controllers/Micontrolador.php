<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Micontrolador extends BaseController
{	
	public $session=null;
	public function __construct(){
		helper('form');
		$this->session= \Config\Services::session();
	}

	public function ponerDatos(){
		$newdata=[
			'name'=>'novato',
			'email'=>'info@programadornovato.com',
			'login'=>TRUE,
		];
		$this->session->set($newdata);
		echo $this->session->get('email');
	}
	public function leerDatos(){
		if($this->session->has('name')){
			echo "name=".$this->session->get('name')."<br>";
			echo "email=".$this->session->get('email')."<br>";
			echo "login=".$this->session->get('login')."<br>";
		}
		else{
			echo "No hay datos";
		}
	}
	public function quitarDatos(){
		$this->session->remove('email');
	}
	public function destruirDatos(){
		$this->session->destroy();
	}
		

	public function guarda(){
		$userModel=new UserModel($db);
		$request= \Config\Services::request();
		$data=array(
			'name'=>$request->getPostGet('name'),
			'email'=>$request->getPostGet('email'),
		);
		if($request->getPostGet('id')){
			$data['id']=$request->getPostGet('id');
		}
		if($userModel->save($data)===false){
			var_dump($userModel->errors());
		}
		if($request->getPostGet('id')){
			$users=$userModel->find([$request->getPostGet('id')]);
			$users=array('users'=>$users);
			$estructura=view('estructura/header').view('estructura/formulario',$users);	
		}
		else{
			$users=$userModel->findAll();
			$users=array('users'=>$users);
			$estructura=view('estructura/header').view('estructura/body',$users);
		}
		return $estructura;

	}
	public function editar(){
		$userModel=new UserModel($db);
		$request= \Config\Services::request();
		if($request->getPostGet('id')){
			$id=$request->getPostGet('id');
		}else{
			$id=$request->uri->getSegment(3);
		}
		$users=$userModel->find([$id]);
		$users=array('users'=>$users);
		$estructura=view('estructura/header').view('estructura/formulario',$users);
		return $estructura;

	}
	public function borrar(){
		$userModel=new UserModel($db);
		$request= \Config\Services::request();
		if($request->getPostGet('id')){
			$id=$request->getPostGet('id');
		}else{
			$id=$request->uri->getSegment(3);
		}
		$userModel->delete($id);
		$users=$userModel->findAll();
		$users=array('users'=>$users);
		$estructura=view('estructura/header').view('estructura/body',$users);
		return $estructura;

	}

	public function formulario(){
		$estructura=view('estructura/header').view('estructura/formulario');
		return $estructura;
	}
	public function index()
	{
		$userModel=new UserModel($db);
		$datos=$userModel->paginate(10);
		$paginador=$userModel->pager;
		$paginador->setPath('ci4/');
		$datos=array('users'=>$datos,'paginador'=>$paginador);
		$estructura=view('estructura/header').view('estructura/body',$datos);
		return $estructura;
		
	}

	public function imagenManipulacion(){
		$info=\Config\Services::image()
		->withFile('codeigniter.jpg')
		->getFile()
		->getProperties(true);
		$ancho=$info['width'];
		$alto=$info['height'];

		$imagen=\Config\Services::image()
		->withFile('codeigniter.jpg')
		->reorient()
		//->rotate(90)
		//->fit(250,250,'bottom-left')
		//->resize($ancho/2,$alto/2)
		->crop(300,300,50,0)
		->save('codeigniter_p.jpg');
		return view('estructura/imagen');
	}
	//--------------------------------------------------------------------

}
