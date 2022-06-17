<?php
class Pages extends Controller {
    public function __construct() {
    }

    public function index() {
        $data = [
            'title' => 'Home page',
            'title-banner'=>'Examen'
        ];

        $this->view('index', $data);
    }
    
}
