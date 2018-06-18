<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class mapa extends Nivel_Controller {


     function __construct() {
        parent::__construct();
        
        if ($this->entraadriver()) {
            
        } else {
            
        }
        
    }

    function index() {
        if (!$this->session->avatar) {
            redirect('/main', 'refresh');
        } else {
            $this->data['avatar'] = 'av' . strtoupper(substr($this->session->grupo, 0, 1)) . $this->session->avatar;
            //echo $this->data['avatar'];
        }
    	$this->data['own_dir'] = $this->data['assets_dir'] . '/mapa';

        $this->load->view('mapa', $this->data);
    }

}
