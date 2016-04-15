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
        
    <center>
        <?php $this->load->view('Header') ?>
        <h2>Create</h2>
        <?php echo form_open('Clients/create'); ?>
        <table>
            <tr>
                <td>
                   Name
                </td>
                <td>
                    <input type="text" name="txtName" id="txtName" required>
                </td>
                
            </tr>
            <tr>
                <td>Date of Birth</td>
                <td><input type="date" name="DOB" id="DOB" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="Email" id="Email" required></td>
            </tr>
            
             <tr>
                <td>Primary Contact</td>
                <td><input type="tel" name="PrimaryContact" id="PrimaryContact" required></td>
            </tr>
            
             <tr>
                <td>Secondary Contact</td>
                <td><input type="tel" name="SecondaryContact" id="SecondaryContact"></td>
            </tr>
            
             <tr>
                <td>Address Line 1</td>
                <td><input type="text" name="AddLine1" id="AddLine1" required></td>
            </tr>
            
             <tr>
                <td>Address Line 2</td>
                <td><input type="text" name="AddLine2" id="AddLine2" ></td>
            </tr>
            <tr>
                
                <td colspan="2" align="center">
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </table>
        <?php echo form_close(); ?>
        <?php $this->load->view('Footer') ?>
    </center>
    </body>
</html>
