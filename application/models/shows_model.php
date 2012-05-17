<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
  
 // public function set_show() {
 //   
 //   $updated_on = time();
 //   $data = array(
 //     'updated_on' => $updated_on,
 //     'created_on' => $updated_on,
 //     'date' => $this->input->post('date'),
 //     'location' => $this->input->post('location'),
 //     'description' => $this->input->post('description'),
 //   );
 //   
 //   return $this->db->insert('shows', $data);
 // }
  
}