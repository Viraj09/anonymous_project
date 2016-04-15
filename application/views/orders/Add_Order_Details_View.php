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
        <h2>Add Order Details</h2>
          <?php echo form_open('Order_Details/create'); ?>
        <table>
            <tr>
                <td>
                   Order Number
                </td>
                <td>
                    <select id="SelectOrder" name="SelectOrder">
                        <option value="none" selected="selected">--Select Order--</option>
                        <?php if(isset($order)) : foreach ($order as $order) : ?>
                        <option value="<?php echo $order->OrderMaster_ID?>"><?php echo $order->Order_No?></option>
                        
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </td>
                
            </tr>
            <tr>
                <td>
                   Trial Date
                </td>
                <td>
                    <input type="date" name="TrialDate" id="TrialDate" required>
                </td>
                
            </tr>
            <tr>
                <td>
                   Delivery Date
                </td>
                <td>
                    <input type="date" name="DeliveryDate" id="DeliveryDate" required>
                </td>
                
            </tr>
            <tr>
                <td>
                   Product Name
                </td>
                <td>
                    <select id="SelectProduct" name="SelectProduct">
                        <option value="none" selected="selected">--Select Product--</option>
                        <?php if(isset($products)) : foreach ($products as $product) : ?>
                        <option value="<?php echo $product->Product_ID?>"><?php echo $product->Product_Name?></option>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                   Estimated Cost
                </td>
                <td>
                    <input type="text" name="txtEstimatedCost" id="txtEstimatedCost" >
                </td>
                
            </tr>   
            <tr>
                <td>
                   Note1
                </td>
                <td>
                    <textarea name="txtNote1" id="txtNote1" required></textarea>
                </td>
                
            </tr>
            <tr>
                <td>
                    Note 2
                </td>
                <td>
                    <textarea name="txtNote2" id="txtNote2"></textarea>
                </td>
                
            </tr>
            <tr>
                <td>
                   Order Status
                </td>
                <td>
                    <input type="radio" name="status" value="1"  id="RdbDelivered">Delivered
                    <input type="radio" name="status" value="2" checked id="RdbUndelivered">Un Delivered
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
