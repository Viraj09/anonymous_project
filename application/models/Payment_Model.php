<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Payment_Model
 *
 * @author Viraj
 */
class Payment_Model extends CI_Model{
    function getList()
    {
        $this->db->select('*');
        $this->db->from('payment_master');
        $this->db->join('order_master','order_master.OrderMaster_ID = payment_master.Order_id');
        $this->db->join('product_details','product_details.Product_ID = payment_master.Product_id');
        $this->db->join('clients','clients.Client_ID=payment_master.Client_id');
        $query=$this->db->get();
        return $query->result();
    }
    
    function insert_record($data)
    {
        $this->db->set($data);
        $this->db->insert('payment_master');
        return;
    }
    
    function delete_record()
    {
       $this->db->where('Payment_ID',$this->uri->segment(3));
       $this->db->delete('payment_master'); 
    }
    
    function update_record()
    {
        
    }
}
