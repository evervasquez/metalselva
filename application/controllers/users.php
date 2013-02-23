<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class users extends CI_Controller {
    
    //cargar librerias
    public function __construct() {
        parent::__construct();
        //cargamos el modelo usersModel
        $this->load->model('usersModel');
    }
    
    public function addUser() {
        echo 'hola';
    }
}
?>
