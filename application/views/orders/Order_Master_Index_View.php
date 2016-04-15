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
         
        <a href="<?php echo site_url('Order_Master/get_clients') ?>">Add Order</a>
        <h5>Order List</h5>
    
    <table class='table table-hover' border='1' style="width: 500px">
            
            <tr>
            
            <th> Order Number</th>
            
            <th>
                Client Name
            </th>
            <th>
                Total Amount
            </th>
            
            <th>Action</th>
            </tr>
        <?php if(isset($AllDetails)) : foreach ($AllDetails as $row) :  ?>
        <tr>
            <td><?php echo $row->Order_No ;?></td>
         
            <td><?php echo $row->Name; ?> </td>
         
            <td><?php echo $row->Total_Amount; ?> </td>
        
            <td><?php echo anchor("Order_Master/delete/$row->OrderMaster_ID",'Delete') ?>
                <?php echo anchor("Clients/get_record_id/$row->OrderMaster_ID",'Update') ?>
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