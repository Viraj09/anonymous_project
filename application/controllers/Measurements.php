<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Measurements
 *
 * @author Viraj
 */
class Measurements extends CI_Controller{
    function index()
    {
        $this->getDetails();
    }
    
    function getDetails()
    {
        $data['Details']=$this->Measurement_Model->getAll();
        $this->load->view('measurements/Measurement_Index_View',$data);
    }
    function create()
    {
        $data = array(           
            'Client_id'=>$this->input->post('SelectClient'),
            'Order_Category' => $this->input->post('SelectCat'),
            'Upper_Length' => $this->input->post('txtUpperLength'),
            'Shoulder' => $this->input->post('txtShoulder'),
            'Upper_Chest' => $this->input->post('txtUpperChest'),
            'Middle_Chest' =>$this->input->post('txtMiddleChest'),
            'Lower_Chest' =>$this->input->post('txtLowerChest'),
            'Waist' =>$this->input->post('txtWaist'),
            'Low_Waist' =>$this->input->post('txtLowWaist'),
            'Heap' =>$this->input->post('txtHeap'),
            'Sleeves_Length' =>$this->input->post('txtSleevesLength'),
            'Arm_Hole' =>$this->input->post('txtArmHole'),
            'Biceps' =>$this->input->post('txtBiceps'),
            'Front_Croch' =>$this->input->post('txtFrontCroch'),
            'Back_Croch' =>$this->input->post('txtBackCroch'),
            'Lower_Length' =>$this->input->post('txtLowerLength'),
            'Thighs' =>$this->input->post('txtThighs'),
            'Knee' =>$this->input->post('txtKnee'),
            'Calf' =>$this->input->post('txtCalf'),
            'Bottom' =>$this->input->post('txtBottom'),
            'Croch' =>$this->input->post('txtCroch'),                        
            );//$this->db->set('$data');
        $this->Measurement_Model->insert_record($data);
        $this->index();
    }
    
    function get_details()
    {
     $data['clients']=$this->client_model->get_All();
     $data['category']=$this->Product_Category_Model->get_All();
     $this->load->view('measurements/Add_Measurement_View',$data);
    }
    
    function get_record_by_id()
    {
        
    }
    
    function delete()
    {
        $this->Measurement_Model->delete_record();
        $this->index();
    }
}