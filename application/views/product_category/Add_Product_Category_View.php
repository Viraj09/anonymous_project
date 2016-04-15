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
        <h2>Add Product Category</h2>
          <?php echo form_open('Product_Category/create'); ?>
        <table>
            <tr>
                <td>
                   Category Name
                </td>
                <td>
                    <input type="text" name="txtName" id="txtName" required>
                </td>
                
            </tr>
            
            <tr>
                
                <td colspan="2" align="center">
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </table>
        <?php echo form_close(); ?>
        
        
        <hr/>
    </center>
    <?php $this->load->view('Footer') ?>
    </body>
</html>
