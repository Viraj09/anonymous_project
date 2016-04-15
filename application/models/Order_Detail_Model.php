<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Order_Detail_Model
 *
 * @author Viraj
 */
class Order_Detail_Model extends CI_Model{
    
    function insert_record($data)
    {
        $this->db->set($data);
        $this->db->insert('order_detail');
        return;
    }
    
    function get_OrderNo()
    {
        $this->db->order_by('OrderMaster_ID','desc');
        $this->db->select("Order_No");
        $query=$this->db->get('order_master',1);
        return $query->result();
    }
    
    
    function get_Undelivered_Order_List()
    {
        $this->db->select('*');
        $this->db->from('order_detail');
        $this->db->join('order_master','order_master.OrderMaster_ID = order_detail.Order_id');
        $this->db->join('product_details','product_details.Product_ID = order_detail.Product_id');
        $this->db->join('clients','clients.Client_ID=order_master.Client_id');
        $this->db->where('Order_Status',2);
        $query=$this->db->get();
        return $query->result();
    }
    
    function get_All()
    {
        $this->db->select('*');
        $this->db->from('order_detail');
        $this->db->join('order_master','order_master.OrderMaster_ID = order_detail.Order_id');
        $this->db->join('product_details','product_details.Product_ID = order_detail.Product_id');
        $this->db->join('clients','clients.Client_ID=order_master.Client_id');
        $query=$this->db->get();
        return $query->result();
    }
    
    function delete_record()
    {
       $this->db->where('OrderDetail_ID',$this->uri->segment(3));
       $this->db->delete('order_detail'); 
    }
    
    function get_Client_Order($str)
    {
        $this->db->select('*');
        $this->db->from('order_detail');
        $this->db->join('order_master','order_master.OrderMaster_ID = order_detail.Order_id');
        $this->db->join('product_details','product_details.Product_ID = order_detail.Product_id');
        $this->db->join('clients','clients.Client_ID=order_master.Client_id');
        $this->db->like('clients.Name',$str);
        $query=$this->db->get();
        return $query->result();
    }
}