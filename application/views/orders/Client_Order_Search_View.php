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
        <h2>Client Order Details</h2>
        
        <table border="1" class='table table-hover' style="width: 1000px">
            
            <tr>
            <th> 
                Client Name
            </th>
            <th> 
                Order Number
            </th>
            <th>
                Product Name
            </th>
            <th>
                Trial Date
            </th>
            <th>
                Delivery Date
            </th>
            <th>
                Estimated Cost
            </th>
            <th>
                Note1
            </th>
            <th>
                Note2
            </th>
            <th>
                Order Status
            </th>
            
            
            <th>Action</th>
            </tr>
            <?php if(isset($order)) : foreach ($order as $row) :  ?>
            <tr>
            <td><?php echo $row->Name ;?></td>
            <td><?php echo $row->Order_No ;?></td>
            <td><?php echo $row->Product_Name; ?> </td>
            <td><?php echo $row->Trial_Date; ?> </td>
            <td><?php echo $row->Delivery_Date; ?> </td>
            <td><?php echo $row->Estimated_Cost; ?> </td>
            <td><?php echo $row->Note1; ?> </td>
            <td><?php echo $row->Note2; ?> </td>
            <td>
                <?php if ($row->Order_Status == 1) :{
                         echo 'Delivered';
                       }
                      else :{
                         echo'Undelivered';   
                      }
                endif;  ?>
            </td>
        
            <td><?php echo anchor("Order_Details/delete/$row->OrderDetail_ID",'Delete') ?>
                <?php echo anchor("Clients/get_record_id/$row->OrderDetail_ID",'Update') ?>
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
