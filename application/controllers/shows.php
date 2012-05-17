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
    $this->load->view('shows/index', $data);
    $this->load->view('templates/footer');
  }
  
  public function view($date) {
    
    $data['show'] = $this->shows_model->get_shows($date);
    $data['title'] = $data['show']['date'];
    
    $this->load->view('templates/header', $data);
    $this->load->view('shows/view', $data);
    $this->load->view('templates/footer');
  }
  
  public function create() {
    log_message('info', 'got here');
    $this->load->helper('form');
    $this->load->library('form_validation');
    
    $data['title'] = 'New show';
    
    $this->form_validation->set_rules('date', 'Date', 'required')->set_rules('location', 'Location', 'required');
    
    if ($this->form_validation->run() === FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('shows/create');
      $this->load->view('templates/footer');
    } else {
      $this->shows_model->set_show();
      $this->load->view('shows/view/' . $this->input->post('date'));
    }
  }
  
}