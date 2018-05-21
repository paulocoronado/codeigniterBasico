<?php

class Procesador extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('ruta');
    }
    
    public function index(){
        $data = array();
        
        $data['rutas'] = $this->ruta-> obtenerListado();
        $data['titulo'] = 'Mis Rutas';
        
        $this->load->view('rutas/index', $data);
        
    }
    
    
}

