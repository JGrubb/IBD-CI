<?php defined("BASEPATH") or exit("No direct script access allowed");

class Migration_Add_shows extends CI_Migration {
  public function up() {
    $this->dbforge->add_field('id');
    $this->dbforge->add_field(array(
      'date' => array(
        'type' => 'DATE',
        'null' => FALSE,
      ),
      'location' => array(
        'type' => 'VARCHAR',
        'constraint' => '255',
        'null' => FALSE,
      ),
      'description' => array(
        'type' => 'TEXT',
        'null' => TRUE,
      ),
    ));
    $this->dbforge->create_table('shows');
    
  }
  
  public function down() {
    $this->dbforge->drop_table('shows');
  }
  
}