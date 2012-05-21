<?php defined("BASEPATH") or exit("No direct script access allowed");

class Migration_Add_sessions extends CI_Migration {
  public function up() {
    $this->dbforge->add_field(array(
      'session_id' => array(
        'type' => 'varchar',
        'constraint' => 40,
        'default' => '0',
        'null' => false,
      ),
      'ip_address' => array(
        'type' => 'varchar',
        'constraint' => 16,
        'default' => '0',
        'null' => false,
      ),
      'user_agent' => array(
        'type' => 'varchar',
        'constraint' => 120,
        'null' => false
      ),
      'last_activity' => array(
        'type' => 'int',
        'constraint' => 10,
        'unsigned' => true,
        'default' => 0,
        'null' => false,
      ),
      'user_data' => array(
        'type' => 'text',
        'null' => false,
      ),
    ));
    
    $this->dbforge->add_key('session_id', true);
    $this->dbforge->add_key('last_activity');
    
    $this->dbforge->create_table('sessions');
  }
  
  public function down() {
    $this->dbforge->drop_table('sessions');
  }
  
}