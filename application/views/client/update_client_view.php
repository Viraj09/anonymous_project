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
        
        <?php echo form_open('Clients/update'); ?>
        <?php foreach ($client as $row) : ?>
        <table>
            <tr>
                <td>
                   Name
                </td>
                <td>
                    <input type="text" name="UptxtName" id="txtName" value="<?php echo $row->Name ;?>" required>
                </td>
                
            </tr>
            <tr>
                <td>Date of Birth</td>
                <td><input type="date" name="UpDOB" id="DOB" value="<?php echo $row->Date_of_Birth ; ?>" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="UpEmail" id="Email" value="<?php echo $row->Email ;?>" required></td>
            </tr>
            
             <tr>
                <td>Primary Contact</td>
                <td><input type="tel" name="UpPrimaryContact" id="PrimaryContact" value="<?php echo $row->Primary_Contact ;?>" required></td>
            </tr>
            
             <tr>
                <td>Secondary Contact</td>
                <td><input type="tel" name="UpSecondaryContact" id="SecondaryContact" value="<?php echo $row->Secondary_Contact ;?>"></td>
            </tr>
            
             <tr>
                <td>Address Line 1</td>
                <td><input type="text" name="UpAddLine1" id="AddLine1" value="<?php echo $row->Address_Line1 ;?>" required></td>
            </tr>
            
             <tr>
                <td>Address Line 2</td>
                <td><input type="text" name="UpAddLine2" id="AddLine2" value="<?php echo $row->Address_Line2 ;?>" ></td>
            </tr>
            <tr>
                
                <td colspan="2" align="center">
                    <input type="submit" value="Update">
                </td>
            </tr>
        </table>
        <?php endforeach; ?>
        <?php echo form_close(); ?>
    </center>
    <?php $this->load->view('Footer') ?>
    </body>
</html>
