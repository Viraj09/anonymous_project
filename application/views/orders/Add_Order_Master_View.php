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
        <h2>Add Order</h2>
        <?php echo form_open('Order_Master/create'); ?>
        <table>
            <tr>
                <td>
                   Order Number
                </td>
                <td>
                    <input type="text" name="txtOrderNumber" id="txtOrderNumber" required>
                </td>
                
            </tr>
            <tr>
                <td>
                   Client Name
                </td>
                <td>
                    <select id="SelectClient" name="SelectClient">
                        <option value="none" selected="selected">--Select Client--</option>
                        <?php if(isset($clientRecords)) : foreach ($clientRecords as $client) : ?>
                        <option value="<?php echo $client->Client_ID?>"><?php echo $client->Name?></option>
                        
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                   Total Amount
                </td>
                <td>
                    <input type="text" name="txtTotalAmount" id="txtTotalAmount" >
                </td>
                
            </tr>
            <tr>
                
                <td colspan="2" align="center">
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </table>
        <?php echo form_close(); ?>
        
        
        
    </center>
    <?php $this->load->view('Footer') ?>
    </body>
</html>
