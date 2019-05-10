<?php

class Mahasiswa extends Controller {

    public function index()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();

        $this->view('layouts/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('layouts/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);

        $this->view('layouts/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('layouts/footer');
    }

    public function tambah()
    {
        if ( $this->model('Mahasiswa_model')->tambahData($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'tambah', 'success');
            header('Location: '.BASEURL.'/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'tambah', 'danger');
            header('Location: '.BASEURL.'/mahasiswa');
            exit;
        }
    }

    public function hapus($id)
    {
        if ( $this->model('Mahasiswa_model')->hapusData($id) > 0 ) {
            Flasher::setFlash('berhasil', 'hapus', 'success');
            header('Location: '.BASEURL.'/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'hapus', 'danger');
            header('Location: '.BASEURL.'/mahasiswa');
            exit;
        }
    }

    public function edit()
    {
        echo json_encode($this->model('Mahasiswa_model')->getMahasiswaById($_POST['id']));
    }

    public function update()
    {
        if ( $this->model('Mahasiswa_model')->ubahData($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ubah', 'success');
            header('Location: '.BASEURL.'/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ubah', 'danger');
            header('Location: '.BASEURL.'/mahasiswa');
            exit;
        }
    }

    public function search()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->searchDataMahasiswa($_POST);

        $this->view('layouts/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('layouts/footer');
    }

}