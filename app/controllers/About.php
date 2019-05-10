<?php 

class About extends Controller {

	public function index($nama = 'Nissa', $pekerjaan = 'Penyanyi', $umur = '19')
	{
		$data['nama'] = $nama;
		$data['pekerjaan'] = $pekerjaan;
		$data['umur'] = $umur;
		$data['judul'] = 'About Me';

		$this->view('layouts/header', $data);
		$this->view('about/index', $data);
		$this->view('layouts/footer');
	}

	public function page()
	{
		$data['judul'] = 'My Pages';

		$this->view('layouts/header', $data);
		$this->view('about/page');
		$this->view('layouts/footer');
	}

}