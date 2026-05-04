<?php

class Mahasiswa extends Controller{
    public function index(){
        $data['judul'] = 'Halaman Mahasiswa';
        $data['mahasiswa']= $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('tamplates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('tamplates/footer');
    }
    
    public function detail($id){
        $data['judul'] = 'Halaman Detail Mahasiswa';
        $data['mahasiswa']= $this->model('Mahasiswa_model')->getMahasiswa($id);
        $this->view('tamplates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('tamplates/footer');
    }
}
?>