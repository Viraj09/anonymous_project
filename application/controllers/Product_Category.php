<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Product_Category
 *
 * @author Viraj
 */
class Product_Category extends CI_Controller{
   function index()
   {
       $this->displayAll();
   }
   
   function load_create_view()
   {
       $this->load->view('product_category/Add_Product_Category_View');
   }
   
   
   function Create()
   {
        $data = array('Category_Name'=>$this->input->post('txtName'));
        $this->Product_Category_Model->insert_record($data);
        $this->displayAll();
   }
   function get_by_id()
   {
        $id=$this->uri->segment(3);
        $data['product_category']=$this->Product_Category_Model->get_record_by_id($id);
        $this->load->view('product_category/Product_Category_Update_View',$data);
   }
   
   function update()
   {
            //$id=$this->uri->segment(3);
            $data = array('Name'=>$this->input->post('UptxtName'));
            $this->Product_Category_Model->update_record($data);
            $this->displayAll();
   }
   
   function displayAll()
   {
       $data=array();
       $data['CategoryRecords']=$this->Product_Category_Model->get_All();
       $this->load->view('product_category/Product_Category_Index_View', $data);
   }
   
   function delete()
   {
        $this->Product_Category_Model->delete_record();
        $this->displayAll();
   }
}
