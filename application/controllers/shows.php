<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shows extends CI_Controller {
  
  public function __construct() {
    parent::__construct();
    $this->load->model('shows_model');
  }
  
  public function index() {   
    $data['title'] = 'Shows'; 
    $data['shows'] = $this->shows_model->get_shows();
    
    $this->load->view('templates/header', $data);
    echo "hello";
    $this->load->view('templates/footer');
  }
  
  public function view($date) {
    $data['show'] = $this->shows_model->get_shows($date);
  }
  
}