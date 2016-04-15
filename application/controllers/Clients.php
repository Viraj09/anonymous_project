<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Clients
 *
 * @author Viraj
 */
class Clients extends CI_Controller {
    function index()
    {
        $this->showAll();
    }
    
    function showAll()
    {
       $data=array();
       $data['client']=$this->client_model->get_All();
       $this->load->view('client/Clients_index_view', $data);
    }
    
    function load_create_view()
   {
       $this->load->view('client/Add_Client_View');
   }
    
    function create()
    {
        $data = array(
            'Name'=>$this->input->post('txtName'),
            'Date_of_Birth' => $this->input->post('DOB'),
            'Email' => $this->input->post('Email'),
            'Primary_Contact' => $this->input->post('PrimaryContact'),
            'Secondary_Contact' =>$this->input->post('SecondaryContact'),
            'Address_Line1' =>$this->input->post('AddLine1'),
            'Address_Line2' =>$this->input->post('AddLine2'),
            
            );
        //$this->db->set('$data');
        $this->client_model->add_records($data);
        $this->index();
    }
    
    function delete()
    {
     
        $this->client_model->delete_record();
        $this->index();
    }
    
   
    
    function get_record_id()
    {
        $id=$this->uri->segment(3);
        $data['client']=$this->client_model->get_record_by_id($id);
        $this->load->view('client/update_client_view',$data);
    }
    
    function update()
    {
            
            $id=$this->uri->segment(3);
            $data = array(
            'Name'=>$this->input->post('UptxtName'),
            'Date_of_Birth' => $this->input->post('UpDOB'),
            'Email' => $this->input->post('UpEmail'),
            'Primary_Contact' => $this->input->post('UpPrimaryContact'),
            'Secondary_Contact' =>$this->input->post('UpSecondaryContact'),
            'Address_Line1' =>$this->input->post('UpAddLine1'),
            'Address_Line2' =>$this->input->post('UpAddLine2'),
            );
            
            $this->client_model->update_record($id,$data);
            $this->index();
    }
    
    
}
