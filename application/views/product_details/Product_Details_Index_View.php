<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php $this->load->view('Header') ?>
    <center>
       
        <a class="nav pull-right" href="<?php echo site_url('Product_Details/get_all_product_category') ?>">Add Product</a> 
         <h5>Product List</h5>
    <table class='table table-hover' border='1' style="width: 1000px">
            
            <tr>
            
            <th> Product Code</th>
            <th>Product Name</th>
            <th>
                Product Category
            </th>
            <th>
                Price
            </th>
            <th>
                Quantity
            </th>
            <th>
                Color
            </th>
            <th>
                Material
            </th>
            <th>
                Description
            </th>
            <th>Action</th>
            </tr>
        
        <?php if(isset($product_details)) : foreach ($product_details as $row) :  ?>
        <tr>
            <td><?php echo $row->Product_Code ;?></td>
            <td><?php echo $row->Product_Name ;?></td>
            <td><?php echo $row->Category_Name; ?> </td>
         
            <td><?php echo $row->Price; ?> </td>
        
            <td><?php echo  $row->Quantity; ?> </td>
        
            <td><?php echo $row->Color; ?></td>
        
            <td><?php echo $row->Material; ?></td>
        
            <td><?php echo $row->Description; ?> </td>
            <td><?php echo anchor("Product_details/delete/$row->Product_ID",'Delete') ?>
                <?php echo anchor("Product_details/get_record_id/$row->Product_ID",'Update') ?>
            </td>
            
        </tr> 
        
        <?php endforeach; ?>
        
        
        </table>
        <?php else : ?>
        <h2>No Records Found</h2>
        <?php endif; ?>
        
    </center> 
    <?php $this->load->view('Footer') ?>
    </body>
</html> 