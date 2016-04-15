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
        <?php echo form_open('Product_Category/update'); ?>
        <?php foreach ($product_category as $row) : ?>
        <table>
            <tr>
                <td>
                    <label for="txtName">Name</label>
                </td>
                <td>
                    <input type="text" name="UptxtName" id="txtName" value="<?php echo $row->Name ;?>" required>
                </td>
                
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