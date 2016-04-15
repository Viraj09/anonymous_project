<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Product_Details_Model
 *
 * @author Viraj
 */
class Product_Details_Model extends CI_Model{
    
    function insert_record($data)
    {
        $this->db->set($data);
        $this->db->insert('product_details');
        return;
    }
    function delete_record()
    {
        $this->db->where('Product_ID',$this->uri->segment(3));
        $this->db->delete('product_details');
    }
    function getAll()
    {
        $this->db->select('*');
        $this->db->from('product_details');
        $this->db->join('product_category','product_category.ProductCategory_ID = product_details.Category_id');
        //$this->db->join('product_category','product_category.ID = client_measurements.Order_Category');
        $query=$this->db->get();
        return $query->result();
      
    }
    function get_All()
    {
        $qry=$this->db->get('product_details');
        return $qry->result();
    }
}
