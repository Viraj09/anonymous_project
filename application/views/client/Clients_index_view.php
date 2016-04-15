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
        <h2>Client List</h2>
    <a href="<?php echo site_url('Clients/load_create_view') ?>">Add Client</a>
    <div class="container">
        <table border="1" style="width: 1000px" class="table table-hover">
            
            <tr>
            
                <th style="width: 60px"> Name</th>
            
            <th>
                Date of Birth
            </th>
            <th>
                Email
            </th>
            <th>
                Primary Contact
            </th>
            <th>
                Secondary Contact
            </th>
            <th>
                Address Line 1
            </th>
            <th>
                Address Line 2
            </th>
            <th>Action</th>
            </tr>
        <?php if(isset($client)) : foreach ($client as $row) :  ?>
        <tr>
            <td align='center'><?php echo $row->Name ;?></td>
         
            <td><?php echo $row->Date_of_Birth; ?> </td>
         
            <td><?php echo $row->Email; ?> </td>
        
            <td><?php echo  $row->Primary_Contact; ?> </td>
        
            <td><?php echo $row->Secondary_Contact; ?></td>
        
            <td><?php echo $row->Address_Line1; ?></td>
        
            <td><?php echo $row->Address_Line2; ?> </td>
            <td><?php echo anchor("Clients/delete/$row->Client_ID",'Delete') ?>
                <?php echo anchor("Clients/get_record_id/$row->Client_ID",'Update') ?>
            </td>
            
        </tr> 
        
        <?php endforeach; ?>
        </table>
    </div>    
        <?php else : ?>
        <h2>No Records Found</h2>
        <?php endif; ?>
        <?php $this->load->view('Footer') ?>
    
    </center>
    </body>
</html>