<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Product_Details
 *
 * @author Viraj
 */
class Product_Details extends CI_Controller{
    function index()
    {
        $this->getAll();
        //$this->load->view('product_details/Product_Details_Index_View');
    }
    
    function get_all_product_category()
    {
       $data['Records']=$this->Product_Category_Model->get_All();
       $this->load->view('product_details/Add_Product_View', $data);
    }
   
    function create()
    {
     $data = array(
            'Product_Code'=>$this->input->post('txtProductCode'),
            'Product_Name'=>$this->input->post('txtName'),
            'Category_id' => $this->input->post('SelectCat'),
            'Price' => $this->input->post('txtPrice'),
            'Quantity' => $this->input->post('txtQuantity'),
            'Color' =>$this->input->post('txtColor'),
            'Material' =>$this->input->post('txtMaterial'),
            'Description' =>$this->input->post('txtDescription'),
            
            );
        //$this->db->set('$data');
        $this->Product_Details_Model->insert_record($data);
        $this->index();
    }
    
    function getAll()
    {
        $data['product_details']=$this->Product_Details_Model->getAll();
        $this->load->view('product_details/Product_Details_Index_View', $data);
    }
    
    function delete()
    {
        $this->Product_Details_Model->delete_record();
        $this->index();
    }
}
