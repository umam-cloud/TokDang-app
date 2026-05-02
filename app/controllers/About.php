<?php

class About{

    public function index(){
        echo "ini about woi";
    }

    public function page($nama = 'seseorang', $about = 'manusia'){
        echo "Aku adalah ". $nama . " dan aku adalah seorang ". $about;
    }
}