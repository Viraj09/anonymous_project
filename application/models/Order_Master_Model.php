<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Order_Master_Model
 *
 * @author Viraj
 */
class Order_Master_Model extends CI_Model{
    
    function get_AllClient()
    {
       $query=$this->db->get("clients");
       return $query->result();
    }
    
    function insert_record($data)
    {
       $this->db->set($data);
       $this->db->insert('order_master');
       return; 
    }
    
    function getList()
    {
        $this->db->select('*');
        $this->db->from('order_master');
        $this->db->join('clients','clients.Client_ID = order_master.Client_id');
        $query=$this->db->get();
        return $query->result();
    }
    
    function delete_record()
    {
       $this->db->where('OrderMaster_ID',$this->uri->segment(3));
       $this->db->delete('order_master'); 
    }
    
    function get_All()
    {
        $qry=$this->db->get('order_master');
        return $qry->result();
    }
}
