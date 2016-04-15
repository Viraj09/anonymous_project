<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Order_Details
 *
 * @author Viraj
 */
class Order_Details extends CI_Controller{
   function index()
   {
       $this->get_Detailed_List();
   }
   
   function getOrder_Details_View()
    {
       $data['order']=$this->Order_Master_Model->get_All();
       $data['products']=$this->Product_Details_Model->get_All();
       $this->load->view('orders/Add_Order_Details_View', $data);
       // $this->load->view('orders/Add_Order_Details_View');
    }
    
    function get_Client_Order_Details()
    {
       $client=$this->input->post('txtName');
       $data['order']=$this->Order_Detail_Model->get_Client_Order($client);
       $this->load->view('orders/Client_Order_Search_View', $data);
       // $this->load->view('orders/Add_Order_Details_View');
    }
   
    function get_Detailed_List()
    {
        $data['records']=$this->Order_Detail_Model->get_All();
        $this->load->view('orders/Order_Detail_Index_View',$data);
    }
    
   function create()
   {
       
       $data = array(
            'Order_id'=>$this->input->post('SelectOrder'),
            'Trial_date' => $this->input->post('TrialDate'),
            'Delivery_date' => $this->input->post('DeliveryDate'),
            'Product_id' => $this->input->post('SelectProduct'),
            'Estimated_Cost' => $this->input->post('txtEstimatedCost'),
            'Note1' =>$this->input->post('txtNote1'),
            'Note2' =>$this->input->post('txtNote2'),
            'Order_Status'=>$this->input->post('status')           
            );
            
        //$this->db->set('$data');
        $this->Order_Detail_Model->insert_record($data);
        $this->index();
   }
   
   function get_Undelivered_Order()
   {
       $data['undeliveredList']=$this->Order_Detail_Model->get_Undelivered_Order_List();
       $this->load->view('orders/Undelivered_Order_Details_View',$data);
   }
   
   function delete()
   {
        $this->Order_Detail_Model->delete_record();
        $this->index();
   }

}
