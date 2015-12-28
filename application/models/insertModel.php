<?php
class insertModel extends CI_Model{
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

function get_departments() {
   
    $this->db->order_by("name_department", "asc");
    $query = $this->db->get('departments');
    return $query->result();
}


}
?>
