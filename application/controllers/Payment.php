<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Payment
 *
 * @author Viraj
 */
class Payment extends CI_Controller {
    function index()
    {
        $this->getList();
    }
    
    function getList()
    {
        $data['list']=$this->Payment_Model->getList();
        $this->load->view('payments/Payment_Index_View',$data);
    }
    function get_create_view()
    {
        $data['clients']=$this->client_model->get_All();
        $data['orders']=$this->Order_Master_Model->get_All();
        $data['products']=$this->Product_Details_Model->get_All();
        $this->load->view('payments/Add_Payment_Details_View',$data);
    }
    function create()
    {
        $data = array(
            'Order_id'=>$this->input->post('SelectOrder'),
            'Amount_Paid' => $this->input->post('txtAmountPaid'),
            'Amount_Left' => $this->input->post('txtAmountLeft'),
            'Product_id' => $this->input->post('SelectProduct'),
            'Payment_Type' => $this->input->post('PaymentType'),
            'Payment_Status' =>$this->input->post('PaymentStatus'),
            'Transaction_id' =>$this->input->post('txtTransactionid'),
            'Client_id'=>$this->input->post('SelectClient')           
            );
            
        //$this->db->set('$data');
        $this->Payment_Model->insert_record($data);
        $this->index();
    }
    
    function delete()
    {
        $this->Payment_Model->delete_record();
        $this->index();
    }
}
