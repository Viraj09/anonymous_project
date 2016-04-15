<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Measurement_Model
 *
 * @author Viraj
 */
class Measurement_Model extends CI_Model {
    function insert_record($data)
    {
        $this->db->set($data);
        $this->db->insert('client_measurements');
        return;
        //$query->result();
    }
    
    function delete_record()
    {
        $this->db->where('ClientMeasurement_ID',$this->uri->segment(3));
        $this->db->delete('client_measurements');
    }
    
    function getAll()
    {
        $this->db->select('*');
        $this->db->from('client_measurements');
        $this->db->join('clients','clients.Client_ID = client_measurements.Client_id');
        $this->db->join('product_category','product_category.ProductCategory_ID = client_measurements.Order_Category');
        $query=$this->db->get();
        return $query->result();
        //$query=$this->db->get('client_measurements');
        //return $query->result();
    }
    
}
