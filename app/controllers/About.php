<?php

class About extends Controller{

    public function index(){
        $data['judul'] ='Halaman About';
        $this->view('tamplates/header', $data);
        $this->view('about/index');
        $this->view('tamplates/footer');
    }

    public function page($nama = 'seseorang', $about = 'manusia'){
        $data['judul'] = 'Halaman Page';
        $data['nama'] = $nama;
        $data['about'] = $about;
        $this->view('tamplates/header', $data);
        $this->view('about/page', $data);
        $this->view('tamplates/footer');
    }
}