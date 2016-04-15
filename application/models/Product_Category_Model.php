<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Product_Category_Model
 *
 * @author Viraj
 */
class Product_Category_Model extends CI_Model{
    function get_All()
    {
       $query=$this->db->get("product_category");
       return $query->result();
    }
    
    function get_record_by_id($id)
    {
       $this->db->select('*');
       $this->db->from('product_category');
       $this->db->where('ID',$id);
       $qry=$this->db->get();
       return $qry->result();
    }
    
    function update_record($data)
    {
        //$this->db->set($data);
        $this->db->update('product_category',$data);
        $this->db->where('ProductCategory_ID',$this->uri->segment(3));
        
       
    }
    
    function insert_record($data)
    {
        $this->db->set($data);
        $this->db->insert('product_category');
    }
    
    function delete_record()
    {
        $this->db->where('ProductCategory_ID',$this->uri->segment(3));
        $this->db->delete('product_category');
    }
}
