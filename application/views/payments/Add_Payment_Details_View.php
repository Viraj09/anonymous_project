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
        
        <h5>Add Payment Details</h5>
        <?php echo form_open('Payment/get_create_view'); ?>
        <table>
            <tr>
                <td>
                    <label  for="SelectClient" >Client Name</label>
                </td>
                <td>
                    <select id="SelectClient" name="SelectClient">
                        <option value="none" selected="selected">--Select Client--</option>
                        <?php if(isset($clients)) : foreach ($clients as $client) : ?>
                        <option value="<?php echo $client->Client_ID?>"><?php echo $client->Name?></option>
                        
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for='SelectOrder'>Order Number</label>
                </td>
                <td>
                    <select id="SelectOrder" name="SelectOrder" onchange="drpchange();">
                        <option value="none" selected="selected">-- Select Order No --</option>
                        <?php if(isset($orders)) : foreach ($orders as $order) : ?>
                        <option value="<?php echo $order->OrderMaster_ID?>"><?php echo $order->Order_No?></option>
                        
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for='SelectProduct'>Product Name </label>
                </td>
                <td>
                    <select id="SelectProduct" name="SelectProduct" onchange="drpchange();">
                        <option value="none" selected="selected">--Select Category--</option>
                        <?php if(isset($products)) : foreach ($products as $product) : ?>
                        <option value="<?php echo $product->Product_ID?>"><?php echo $product->Product_Name?></option>
                        
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for='txtTotalAmount'>Total Amount</label>
                </td>
                <td>
                    <input type="text" name="txtTotalAmount" id="txtTotalAmount" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for='txtAmountPaid'>Amount Paid</label>
                </td>
                <td>
                    <input type="text" name="txtAmountPaid" id="txtAmountPaid" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for='txtAmountLeft'>Amount Left</label>
                </td>
                <td>
                    <input type="text" name="txtAmountLeft" id="txtAmountLeft" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for='txtPaymentType'> Payment Type</label>
                </td>
                <td>
                    <input type="radio" name="PaymentType" id="txtPaymentType" value='cash'>Cash
                    <input type="radio" name="PaymentType" id="txtPaymentType1" value="credit card">Credit Card
                    <input type="radio" name="PaymentType" id="txtPaymentType2" value="cheque">Cheque
                    
                </td>
            </tr>
             <tr>
                <td>
                    <label for='txtAmountPaid'>Transaction id</label>
                </td>
                <td>
                    <input type="text" name="txtTransactionid" id="txtTransactionid" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for='txtPaymentStatus1'>Payment Status</label>
                </td>
                <td>
                    <input type="radio" name="PaymentStatus" id="txtPaymentStatus1" value='cash'>Paid
                    <input type="radio" name="PaymentStatus" id="txtPaymentStatus2" value="credit card">Left
                    
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
