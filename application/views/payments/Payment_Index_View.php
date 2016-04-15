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
        <h5>Payment Section</h5>
               <a href="<?php echo site_url('Payment/get_create_view') ?>">Add Payment Details</a>
   
      
               <table class="table table-hover">
            
            <tr>
            
            <th align='center'> Client Name</th>
            
            <th>
                Order No
            </th>
            <th>
                Product Name
            </th>
            <th>
                Product Code
            </th>
            <th>
                Product Price
            </th>
            <th>
                Amount Paid
            </th>
            <th>
                Amount Left
            </th>
            <th>
                Payment Type
            </th>
            <th>
                Transaction ID
            </th>
            <th>
                Created_at
            </th>
            
            
            <th>Action</th>
            </tr>
        <?php if(isset($Details)) : foreach ($Details as $row) :  ?>
        <tr>
            <td><?php echo $row->Name ;?></td>
            <td><?php echo $row->Order_No; ?> </td>         
            <td><?php echo $row->Product_Name; ?> </td>        
            <td><?php echo $row->Product_Code; ?> </td>
            <td><?php echo $row->Product_Price; ?> </td>
            <td><?php echo $row->Amount_Paid; ?> </td>
            <td><?php echo $row->Amount_Left; ?> </td>
            <td><?php echo $row->Payment_Type; ?> </td>
            <td><?php echo $row->Transaction_id; ?> </td>
            <td><?php echo $row->Created_at; ?> </td>
            
            <td><?php echo anchor("Payment/delete/$row->Payment_ID",'Delete') ?>
                <?php echo anchor("Payment/get_record_by_id/$row->Payment_ID",'Update') ?>
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
