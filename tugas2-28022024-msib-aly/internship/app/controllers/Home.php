<?php
class Home extends Controller
{
    public function index() {
        $data['title'] = 'Home | Pendaftaran Magang';
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('home/index');
    }
}
