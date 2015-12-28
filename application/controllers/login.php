<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index()
 {
  
      $this->load->helper(array('form'));
      $this->load->library('form_validation');

     /* $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
      $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
    */
      
     $this->load->view('templates/header');
       $this->load->view('templates/navi');  
      $this->load->view('pages/loginView');      
      $this->load->view('templates/footer'); 
 
          
   /*$this->load->view('login_view');*/
 }

}

?>