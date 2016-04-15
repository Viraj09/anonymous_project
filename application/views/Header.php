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
        <link href="<?php echo base_url("/assets/css/bootstrap-theme.css") ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("/assets/css/bootstrap-theme.min.css") ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url("/assets/css/bootstrap.css"); ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url("/assets/css/bootstrap.min.css"); ?>" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
    <center>
        <h1 class="pager" style="color: deeppink ; font: inherit ; font-family: sans-serif; font-size: xx-large">Anonymous</h1>
        <ul class='nav nav-pills' style="margin-left: 190px">
            <li> <a class='active' href="<?php echo site_url('Welcome') ?>">Home</a> </li>
            <li> <a  href="<?php echo site_url('Product_Details') ?>">Products</a></li> 
            <li> <a  href="<?php echo site_url('Product_Category') ?>">Products Category</a></li> 
            <li> <a  href="<?php echo site_url('Clients') ?>">Clients</a> </li>
            <li> <a  href="<?php echo site_url('Order_Master') ?>">Generate Order</a> </li> 
            <li> <a  href="<?php echo site_url('Order_Details') ?>">Order Details</a> </li>
            <li> <a  href="<?php echo site_url('Measurements') ?>">Client Measurements</a> </li>
            <li> <a  href="<?php echo site_url('Payment') ?>">Payments</a> </li>
        </ul>
    </center>
    <hr/>
    </body>
</html>