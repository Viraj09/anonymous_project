<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../../../assets/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    
    <body>
        <?php $this->load->view('Header') ?>
    <center>
        <h5>Measurement Section</h5>
        <a class="nav" href="<?php echo site_url('Measurements/get_details') ?>">Add Measurement</a>
   
      <h5>Client Measurement List</h5>
        <table class='table table-hover' border='1'>
            
            <tr>
            
            <th> Client Name</th>
            
            <th>
                Product Category
            </th>
            <th>
                Upper Length
            </th>
            <th>
                Shoulder
            </th>
            <th>
                Upper Chest
            </th>
            <th>
                Middle Chest
            </th>
            <th>
                Lower Chest
            </th>
            <th>
                Waist
            </th>
            <th>
                Lower Waist
            </th>
            <th>
                Heap
            </th>
            <th>
                Sleeves Length
            </th>
            <th>
                Arm Hole
            </th>
            <th>
                Biceps
            </th>
            <th>
                Front Crotch
            </th>
            <th>
                Back Crotch
            </th>
            <th>
                Lower Length
            </th>
            <th>
                Thighs
            </th>
            <th>
                Knee
            </th>
            <th>
                Calf
            </th>
            <th>
                Bottom
            </th>
            <th>
                Crotch
            </th>
            
            <th>Action</th>
            </tr>
        <?php if(isset($Details)) : foreach ($Details as $row) :  ?>
        <tr>
            <td><?php echo $row->Name ;?></td>
            <td><?php echo $row->Category_Name; ?> </td>         
            <td><?php echo $row->Upper_Length; ?> </td>        
            <td><?php echo $row->Shoulder; ?> </td>
            <td><?php echo $row->Upper_Chest; ?> </td>
            <td><?php echo $row->Middle_Chest; ?> </td>
            <td><?php echo $row->Lower_Chest; ?> </td>
            <td><?php echo $row->Waist; ?> </td>
            <td><?php echo $row->Low_Waist; ?> </td>
            <td><?php echo $row->Heap; ?> </td>
            <td><?php echo $row->Sleeves_Length; ?> </td>
            <td><?php echo $row->Arm_Hole; ?> </td>
            <td><?php echo $row->Biceps; ?> </td>
            <td><?php echo $row->Front_Croch; ?> </td>
            <td><?php echo $row->Back_Croch; ?> </td>
            <td><?php echo $row->Lower_Length; ?> </td>
            <td><?php echo $row->Thighs; ?> </td>
            <td><?php echo $row->Knee; ?> </td>
            <td><?php echo $row->Calf; ?> </td>
            <td><?php echo $row->Bottom; ?> </td>
            <td><?php echo $row->Croch; ?> </td>
            <td><?php echo anchor("Measurements/delete/$row->ClientMeasurement_ID",'Delete') ?>
                <?php echo anchor("Measurements/get_record_by_id/$row->ClientMeasurement_ID",'Update') ?>
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
