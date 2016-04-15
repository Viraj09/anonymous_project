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
        
        <a href="<?php echo site_url('Product_Category/load_create_view') ?>">ADD Category</a> 
        <h5>Category List</h5>
        <div class="container">
            <table border="1" class="table table-hover">
            
            <tr>
            
            <th>Category Name</th>
            
            <th>Action</th>
            </tr>
        <?php if(isset($CategoryRecords)) : foreach ($CategoryRecords as $row) :  ?>
        <tr>
            <td><?php echo $row->Category_Name ;?></td>
            <td><?php echo anchor("Product_Category/delete/$row->ProductCategory_ID",'Delete') ?>
                <?php echo anchor("Product_Category/get_by_id/$row->ProductCategory_ID",'Update') ?>
            </td>
            
        </tr> 
        
        <?php endforeach; ?>
        </table>
        </div>
        <?php else : ?>
        <h2>No Records Found</h2>
        <?php endif; ?>
    </center>
    <?php $this->load->view('Footer') ?>
    </body>    
</html>
