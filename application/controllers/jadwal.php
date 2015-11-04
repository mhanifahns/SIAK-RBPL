<?php
class Jadwal extends Public_Controller
{
    public $data = array(
        'halaman' => 'jadwal',
        'main_view' => 'jadwal',
        'title' => 'Jadwal Akademik',
    );

    public function index()
    {
        $this->load->view($this->layout, $this->data);
    }
}