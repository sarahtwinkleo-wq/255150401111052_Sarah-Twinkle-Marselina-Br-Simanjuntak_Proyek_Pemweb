<?php

class HomeController extends Controller {

    public function index() {

        $data = Berita::getAll();

        require 'views/home.php';
    }
}
