<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class department extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

          $this->load->model('department_model','departmentObj');
          $this->load->model('insert_model');

    }

    public function index()
    {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];

    /* $this->load->view('home_view', $data); */

        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/navi',$data);
        $this->load->view('departmentView',$data);
        $this->load->view('templates/footer');
     }
    else
    {
     //If no session, redirect to login page
     redirect('login', 'refresh');
     }
    }


    public function ajax_list()
    {
        $list = $this->departmentObj->get_datatables();

        $data = array();
        $no = $_POST['start'];
        foreach ($list as $departmentObj) {
            $no++;
            $row = array();
           // $row[] = $person->firstName;
           // $row[] = $person->lastName;
           // $row[] = $person->title;
             $row[] = $departmentObj->name_department;
           // $row[] = $person->name_department;


            //add html for action
            $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_person('."'".$departmentObj->id_department."'".')"> Edit</a>
                  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_person('."'".$departmentObj->id_department."'".')"> Delete</a>';

            $data[] = $row;
        }

        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->departmentObj->count_all(),
                        "recordsFiltered" => $this->departmentObj->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }

    public function ajax_edit($id)
    {
        $data = $this->departmentObj->get_by_id($id);
        echo json_encode($data);
    }


    public function ajax_add()
    {
        $data = array(
                'firstName' => $this->input->post('firstName'),
                'lastName' => $this->input->post('lastName'),
                'title' => $this->input->post('title'),
                'gender' => $this->input->post('gender'),
                'address' => $this->input->post('address'),
                'dob' => $this->input->post('dob'),
                'department' => $this->input->post('department'),
            );
        $insert = $this->departmentObj->save($data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_update()
    {
        $data = array(
                'firstName' => $this->input->post('firstName'),
                'lastName' => $this->input->post('lastName'),
                'title' => $this->input->post('title'),
                'gender' => $this->input->post('gender'),
                'address' => $this->input->post('address'),
                'dob' => $this->input->post('dob'),
                'department' => $this->input->post('department'),
            );
        $this->departmentObj->update(array('id' => $this->input->post('id')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_delete($id)
    {
        $this->person->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }

}
