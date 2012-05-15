<?php

defined("BASEPATH") or exit("No direct script access allowed");

class Migration_Add_created_on_and_updated_on_to_shows extends CI_Migration {
  
  public function up() {
    $fields = array(
      'created_on' => array(
        'type' => 'TIMESTAMP',
        'null' => FALSE,
      ),
      'updated_on' => array(
        'type' => 'TIMESTAMP',
        'null' => FALSE
      ),
    );
    $this->dbforge->add_column('shows', $fields);
  }
  
  public function down() {
    $this->dbforge->drop_column('shows', 'created_on');
    $this->dbforge->drop_column('shows', 'updated_on');
  }
  
}