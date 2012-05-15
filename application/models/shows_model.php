<?php

class Shows_model extends CI_Model {
  
  public function __construct() {
    $this->load->database();
  }
  
  public function get_shows($date = FALSE) {
    if ($date === FALSE) {
      $query = $this->db->get('shows');
      return $query->results();
    }
    
    $query = $this->db->get_where('shows', array('date' => $date));
    return $query->results();
    
  }
  
}