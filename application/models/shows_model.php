<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shows_model extends CI_Model {
  
  public function __construct() {
    $this->load->database();
  }
  
  public function get_shows($date = FALSE) {
    if ($date === FALSE) {
      $this->db->select()->from('shows')->limit(5)->order_by('date', 'desc');
      $query = $this->db->get();
      return $query->result_array();
    }
    
    $query = $this->db->get_where('shows', array('date' => $date));
    return $query->result_row();
    
  }
  
  public function set_show() {
    
    $updated_on = date( 'Y-m-d H:i:s', time() );;
    $data = array(
      'date' => $this->input->post('date'),
      'location' => $this->input->post('location'),
      'description' => $this->input->post('description'),
    );
    
    return $this->db->insert('shows', $data);
  }
  
}