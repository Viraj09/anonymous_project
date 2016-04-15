<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Order_Master
 *
 * @author Viraj
 */
class Order_Master extends CI_Controller{
    //put your code here
    function index()
    {
        $this->getAll_Details();
    }
    function create()
    {
        $data = array(
            'Order_No'=>$this->input->post('txtOrderNumber'),
            'Client_id' => $this->input->post('SelectClient'),
            'Total_Amount' => $this->input->post('txtTotalAmount'),
            
            );
       
       $this->Order_Master_Model->insert_record($data); 
       $this->getOrder_Details_View();
       //$data['records']=$this->Order_Detail_Model->get_All();
       //$this->load->view('orders/Add_Order_Details_View', $data);
    }
    function getOrder_Details_View()
    {
       $data['order']=$this->Order_Detail_Model->get_All();
       $data['products']=$this->Product_Details_Model->get_All();
       $this->load->view('orders/Add_Order_Details_View', $data);
       // $this->load->view('orders/Add_Order_Details_View');
    }
    
    function getAll_Details()
    {
        $data['AllDetails']=$this->Order_Master_Model->getList();
        $this->load->view('orders/Order_Master_Index_View',$data);
    }
    
    function delete()
    {
        $this->Order_Master_Model->delete_record();
        $this->index();
    }
     
    function get_clients()
    {
       $data['clientRecords']=$this->Order_Master_Model->get_AllClient();
       $this->load->view('orders/Add_Order_Master_View', $data);
    }
    
}