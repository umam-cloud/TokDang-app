<?php

class About extends Controller{

    public function index($nama = '_?_', $about = '_?_'){
        $data['judul'] ='Halaman About';
        $data['nama'] = $nama;
        $data['about'] = $about;
        $this->view('tamplates/header', $data);
        $this->view('about/index', $data);
        $this->view('tamplates/footer');
    }

    public function page(){
        $data['judul'] = 'Halaman Page';
        $this->view('tamplates/header', $data);
        $this->view('about/page');
        $this->view('tamplates/footer');
    }
}