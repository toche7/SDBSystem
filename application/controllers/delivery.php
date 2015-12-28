<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class delivery extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('deliveryModel');

    }
    public function index()
    {
        $data['groups'] = $this->deliveryModel->getAllGroups();
        $this->load->view('templates/header');
        $this->load->view('templates/navi', $data);
        $this->load->view('deliveryView');            
        $this->load->view('templates/footer');

    }


}