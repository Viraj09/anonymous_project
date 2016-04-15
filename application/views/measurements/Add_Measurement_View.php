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
        <script type="text/javascript">
        function drpchange()
        {
            echo'helloooo';
            var drp=document.getElementById("SelectCat");
            var txtUpperLength=document.getElementById("txtUpperLength");
            var txtShoulder=document.getElementById("txtShoulder");
            var txtUpperchest=document.getElementById("txtUpperChest");
            var txtMiddlechest=document.getElementById("txtMiddleChest");
            var txtLowerchest=document.getElementById("txtLowerChest");
            var txtWaist=document.getElementById("txtWaist");
            var txtLowerwaist=document.getElementById("txtLowerWaist");
            var txtHeap=document.getElementById("txtHeap");
            var txtSleeveslength=document.getElementById("txtSleevesLength");
            var txtArmhole=document.getElementById("txtArmHole");
            var txtBiceps=document.getElementById("txtBiceps");
            var txtFrontcroch=document.getElementById("txtFrontCroch");
            var txtBackcroch=document.getElementById("txtBackCroch");
            var txtLowerlength=document.getElementById("txtLowerLength");
            var txtThighs=document.getElementById("txtThighs");
            
            if(drp.selected === 'Salwar' )
            {
                txtUpperLength.style.display='block';
            }
        }
        </script>
    </head>
    <body>
        <?php $this->load->view('Header') ?>
    <center>
        
        <h5>Add Measurement</h5>
        <?php echo form_open('Measurements/create'); ?>
        <table>
            <tr>
                <td>
                    <label  for="SelectClient" >Client Name</label>
                </td>
                <td>
                    <select id="SelectClient" name="SelectClient">
                        <option value="none" selected="selected">--Select Client--</option>
                        <?php if(isset($clients)) : foreach ($clients as $cat) : ?>
                        <option value="<?php echo $cat->Client_ID?>"><?php echo $cat->Name?></option>
                        
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for='SelectCat'>Order Category</label>
                </td>
                <td>
                    <select id="SelectCat" name="SelectCat" onchange="drpchange();">
                        <option value="none" selected="selected">--Select Category--</option>
                        <?php if(isset($category)) : foreach ($category as $cat) : ?>
                        <option value="<?php echo $cat->ProductCategory_ID?>"><?php echo $cat->Category_Name?></option>
                        
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for='txtUpperLength'>Upper Length </label>
                </td>
                <td>
                    <input type="text" name="txtUpperLength" id="txtUpperLength" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for='txtShoulder'>Shoulder</label>
                </td>
                <td>
                    <input type="text" name="txtShoulder" id="txtShoulder" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for='txtUpperChest'>Upper Chest</label>
                </td>
                <td>
                    <input type="text" name="txtUpperChest" id="txtUpperChest" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for='txtMiddleChest'>Middle Chest</label>
                </td>
                <td>
                    <input type="text" name="txtMiddleChest" id="txtMiddleChest" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for='txtLowerChest'> Lower Chest</label>
                </td>
                <td>
                    <input type="text" name="txtLowerChest" id="txtLowerChest" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for='txtWaist'>Waist</label>
                </td>
                <td>
                    <input type="text" name="txtWaist" id="txtWaist" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for='txtLowerWaist'>Lower Waist</label>
                </td>
                <td>
                    <input type="text" name="txtLowerWaist" id="txtLowerWaist" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for='txtHeap'>Heap</label>
                </td>
                <td>
                    <input type="text" name="txtHeap" id="txtHeap" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for='txtSleevesLength'>Sleeves Length</label>
                </td>
                <td>
                    <input type="text" name="txtSleevesLength" id="txtSleevesLength" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for='txtArmHole'> Arm Hole</label>
                </td>
                <td>
                    <input type="text" name="txtArmHole" id="txtArmHole" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for='txtBiceps'> Biceps </label>
                </td>
                <td>
                    <input type="text" name="txtBiceps" id="txtBiceps" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for='txtFrontCroch'>Front Crotch</label>
                </td>
                <td>
                    <input type="text" name="txtFrontCroch" id="txtFrontCroch" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for='txtBackCroch'>Back Crotch</label>
                </td>
                <td>
                    <input type="text" name="txtBackCroch" id="txtBackCroch" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for='txtLowerLength'>Lower Length</label>
                </td>
                <td>
                    <input type="text" name="txtLowerLength" id="txtLowerLength" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for='txtThighs'>Thighs</label>
                </td>
                <td>
                    <input type="text" name="txtThighs" id="txtThighs" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for='txtKnee'>Knee</label>
                </td>
                <td>
                    <input type="text" name="txtKnee" id="txtKnee" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for='txtCalf'>Calf</label>
                </td>
                <td>
                    <input type="text" name="txtCalf" id="txtCalf" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for='txtBottom'>Bottom</label>
                </td>
                <td>
                    <input type="text" name="txtBottom" id="txtBottom" placeholder="Enter Ankle Measurement" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for='txtCroch'>Crotch</label>
                </td>
                <td>
                    <input type="text" name="txtCroch" id="txtCroch" required>
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