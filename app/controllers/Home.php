<?php

class Home extends Controller{
    public function index(){
        $data['judul'] = 'Halaman Home';
        $this->view('tamplates/header', $data);
        $this->view('Home/index');
        $this->view('tamplates/footer');
    }
}