<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start(); //we need to call PHP's session object to access it through CI
class insert_c extends CI_Controller {

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
$this->load->library('form_validation');
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
 $session_data = $this->session->userdata('logged_in');
 $data['username'] = $session_data['username'];
 $this->load->library('form_validation');
$this->form_validation->set_error_delimiters('<div class="text-warning">', '</div>');
     
//Validating Name Field
$this->form_validation->set_rules('dname', 'Username', 'required|min_length[5]|max_length[15]');

//Validating Email Field
$this->form_validation->set_rules('demail', 'Email', 'required|valid_email');

//Validating Mobile no. Field
$this->form_validation->set_rules('dmobile', 'Mobile No.', 'required|regex_match[/^[0-9]{10}$/]');

//Validating Address Field
$this->form_validation->set_rules('daddress', 'Address', 'required|min_length[10]|max_length[50]');

if ($this->form_validation->run() == FALSE) {
$data['form_1_errors'] = 1;  
$this->load->view('templates/header');
$this->load->view('templates/navi', $data);
$this->load->view('pages/insert', $data);
$this->load->view('templates/footer'); 
} else {
//Setting values for tabel columns
$dataDB = array(
'staff_Name' => $this->input->post('dname'),
'staff_Email' => $this->input->post('demail'),
'staff_Mobile' => $this->input->post('dmobile'),
'staff_Address' => $this->input->post('daddress')
);
//Transfering data to Model
$this->insert_model->form_insert($dataDB);
$data['message'] = 'Data Inserted Successfully';
//Loading View
$this->load->view('templates/header');
$this->load->view('templates/navi', $data);
$this->load->view('pages/insert', $data);
$this->load->view('templates/footer'); 
}

}
 function department() { 
 $session_data = $this->session->userdata('logged_in');
 $data['username'] = $session_data['username'];
 $this->load->library('form_validation');
$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

//Validating Name Field
$this->form_validation->set_rules('dname', 'Username', 'required|min_length[5]|max_length[15]');

 

if ($this->form_validation->run() == FALSE) {
 $data['form_2_errors'] = 1;  
$this->load->view('templates/header');
$this->load->view('templates/navi', $data);
$this->load->view('pages/insert', $data);
$this->load->view('templates/footer'); 

} else {
//Setting values for tabel columns
$dataDB = array(
'staff_Name' => $this->input->post('dname'),
'staff_Email' => $this->input->post('demail'),
'staff_Mobile' => $this->input->post('dmobile'),
'staff_Address' => $this->input->post('daddress')
);
//Transfering data to Model
$this->insert_model->form_insert($dataDB);
$data['message'] = 'Data Inserted Successfully';
//Loading View
$this->load->view('templates/header');
$this->load->view('templates/navi', $data);
$this->load->view('pages/insert', $data);
$this->load->view('templates/footer'); 
}
   }


}

?>