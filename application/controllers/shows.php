<?php

class shows extends CI_Controller {
  
  public function __construct() {
    parent::__contruct();
    $this->load->model('shows_model');
  }
  
  public function index() {
    $data['shows'] = $this->shows_model->get_shows();
  }
  
  public function view($date) {
    $data['show'] = $this->shows_model->get_shows($date);
  }
  
}