<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of client_model
 *
 * @author Viraj
 */
class client_model extends CI_Model
{
   function get_All()
   {
       $query=$this->db->get("clients");
       return $query->result();
   }
   
   function add_records($data)
   {
       $this->db->set($data);
       $this->db->insert('clients');
       return;      
   }
   
   function get_record_by_id($id)
   {
       $this->db->select('*');
       $this->db->from('clients');
       $this->db->where('Client_ID',$id);
       $qry=$this->db->get();
       return $qry->result();
   }
   
   function update_record($id,$data)
   {
           $this->db->update('clients',$data);
           $this->db->where('Client_ID',$id);
   }
   
   function delete_record()
   {
       $this->db->where('Client_ID',$this->uri->segment(3));
       $this->db->delete('clients');
   }
  
}
