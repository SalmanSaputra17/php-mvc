<?php 

class Home extends Controller {

	public function index()
	{
		$data['judul'] = 'Dashboard';
		$data['nama'] = $this->model('User_model')->getUser();
		$this->view('layouts/header', $data);
		$this->view('home/index', $data);
		$this->view('layouts/footer');
	}

	public function helloWorld()
	{
		return "Hello World!";
	}

}



