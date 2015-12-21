<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start(); //we need to call PHP's session object to access it through CI
class insertController extends CI_Controller {

function __construct() {
parent::__construct();
$this->load->model('insert_model');
}
function index() {
    
 if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
    /* $this->load->view('home_view', $data); */
   
//Including validation library
 
$this->load->view('templates/header');
$this->load->view('templates/navi', $data);
$this->load->view('pages/insert', $data);
$this->load->view('templates/footer'); 
}
 else
 {
     //If no session, redirect to login page
     redirect('login', 'refresh');
 }    
}

 function staff() { 
 
//Setting values for tabel columns
$dataDB = array(
'staff_Name' => $this->input->post('dname'),
'staff_Email' => $this->input->post('demail'),
'staff_Mobile' => $this->input->post('dmobile'),
'staff_Address' => $this->input->post('daddress')
);

if  ( $this->db->insert('staffs', $dataDB)){
      echo "success";     
  }
else {
       echo "Error on insert data to DB";     
}

}

 
 function department() { 
 
 $dataDB = array(
'name' => $this->input->post('dname')    
);
  
//$this->db->insert('department', $dataDB);
 //Setting values for tabel columns
//Transfering data to Model
 
 // $this->insert_model->form_insert_departments($dataDB);
 
 if  ( $this->db->insert('departments', $dataDB)){
      echo "success";     
  }
else {
       echo "Error on insert data to DB";     
}
    }
 
}

