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
        <h2>Add Product</h2>
          <?php echo form_open('Product_Details/create'); ?>
           
        <table>
            <tr>
                <td>
                   Product Code
                </td>
                <td>
                    <input type="text" name="txtProductCode" id="txtProductCode" required>
                </td>
                
            </tr>
            <tr>
                <td>
                   Product Name
                </td>
                <td>
                    <input type="text" name="txtName" id="txtName" required>
                </td>
                
            </tr>
            <tr>
                <td>
                   Product Category
                </td>
                <td>
                    
                    <select id="SelectCat" name="SelectCat">
                        <option value="none" selected="selected">--Select Category--</option>
                        <?php if(isset($Records)) : foreach ($Records as $cat) : ?>
                        <option value="<?php echo $cat->ProductCategory_ID?>"><?php echo $cat->Category_Name?></option>
                        
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </td>
                
            </tr>
            <tr>
                <td>
                   Price
                </td>
                <td>
                    <input type="text" name="txtPrice" id="txtPrice" required>
                </td>
                
            </tr>
            <tr>
                <td>
                   Quantity
                </td>
                <td>
                    <input type="text" name="txtQuantity" id="txtQuantity" required>
                </td>
                
            </tr>
            <tr>
                <td>
                   Color
                </td>
                <td>
                    <input type="text" name="txtColor" id="txtColor" required>
                </td>
                
            </tr>
            <tr>
                <td>
                   Material
                </td>
                <td>
                    <input type="text" name="txtMaterial" id="txtMaterial" required>
                </td>
                
            </tr>
            <tr>
                <td>
                   Description
                </td>
                <td>
                    <textarea name="txtDescription" id="txtDescription" required ></textarea>
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
