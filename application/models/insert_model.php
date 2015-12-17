<?php
class insert_model extends CI_Model{
function __construct() {
parent::__construct();
}
function form_insert($data){
// Inserting in Table(students) of Database(college)
$this->db->insert('staffs', $data);
}
function form_insert_departments($data){
// Inserting in Table(students) of Database(college)
$this->db->insert('departments', $data);
}
}
?>