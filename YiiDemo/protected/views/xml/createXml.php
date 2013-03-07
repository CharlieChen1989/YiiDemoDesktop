<style>
     #tab td{
        border-bottom:1px #e6e6e6 solid;
        text-align:center;
    }
    #tab1{
        margin-left: 160px;
    }
    #tab1 td{
        border-bottom:1px #e6e6e6 solid;
        text-align:center;
    }
    table tbody tr td{
        padding:10px 0px;
    }
    .form{
        text-align: center;
        background-color: #00FF00;
    }
    .row{
        margin: 10px;
    }
    .row label{
        text-align: right;
        margin-right: 10px;
        font-weight:bold;
    }
    .errorMessage{
       color: red;
       font-weight: bold;
       margin-left: 200px;
    }
    
</style>
<?php echo CHtml::scriptFile('/js/jquery/jquery.js') ?>
<script language="JavaScript">
    $('document').ready(function(){
        if($('#placementXml_operate').val()=="QRY"){
                $('#tab').hide();
                $('#tab1').show();
            }else{
                $('#tab1').hide();
                $('#tab').show();
            }
        function doChange(){
            if($('#placementXml_operate').val()=="QRY"){
                $('#tab').hide();
                $('#tab1').show();
            }else{
                $('#tab1').hide();
                $('#tab').show();
            }  
        }
       $("#placementXml_operate").change(function(){
           doChange();
       });
    });
    var i =1;
    function addQRYRow(){        
        var Tbl = $("#tab1");
        Tbl.append('<tr>'+
            '<td>'+(i+1)+'</td>'+
            '<td><input size=15 type="text" class="memberID" id="vendor_memberIDs_'+i+'"></td>'+
            '<td><label><input type="button" value="Add  Line" onclick="addQRYRow()" id="button" name="button'+i+'"></label></td>'+
            '</tr>');
        i++;
    }
    //新一行的Table的TR模板
    function addRow(){        
        var Tbl = $("#tab");
        Tbl.append('<tr>'+
            '<td>'+(i+1)+'</td>'+
            '<td width=100><input size=15 type="text" class="memberID" id="vendor_memberID_'+i+'"></td>'+
            '<td width=80><input size=15 type="text" class="sponsorID"  maxlength="11" id="vendor_sponsorID_'+i+'"></td>'+
            '<td width=100><input size=15 type="text" class="parentID"  maxlength="250" id="vendor_parentID_'+i+'"></td>'+
            '<td width=100><input size=15 type="text" class="position"  maxlength="250" id="position_'+i+'"></td>'+
            '<td><label><input type="button" value="Add  Line" onclick="addRow()" id="button" name="button'+i+'"></label></td>'+
            '</tr>');
        i++;
    }
    function getDatas(){
        var tab1 = document.getElementById("tab1") ;
        //获取表格的行数
        var row_lengths = tab1.rows.length;
        //获取第二列的所有vendor_memberID组成数组并拼成字符串
        var arr = new Array();
        for(var j=0;j<row_lengths;j++){
            var inputs1 =$('#vendor_memberIDs_'+j).val();
            arr[j]= inputs1; 
        }
        var str = arr.join(",").toString();
        $('#placementXml_vendor_memberID').val(str) ;
    }
    //获取表格数据
    function getAllDatas(){
        var tab = document.getElementById("tab") ;
        //获取表格的行数
        var row_length = tab.rows.length;
        //获取第二列的所有vendor_memberID组成数组并拼成字符串
        var arr1 = new Array();
        for(var j=0;j<row_length;j++){
            var inputs =$('#vendor_memberID_'+j).val();
            arr1[j]= inputs; 
        }
        var str1 = arr1.join(",").toString();
        $('#placementXml_vendor_memberID').val(str1) ;
        //获取第三列的所有vendor_sponsorID组成数组并拼成字符串
        var arr2 = new Array();
        for(var j=0;j<row_length;j++){
            var inputs =$('#vendor_sponsorID_'+j).val();
            arr2[j]= inputs; 
        }        
        var str2 = arr2.join(",").toString();
        $('#placementXml_vendor_sponsorID').val(str2);
        //获取第三列的所有vendor_sponsorID组成数组并拼成字符串
        var arr3 = new Array();
        for(var j=0;j<row_length;j++){
            var inputs =$('#vendor_parentID_'+j).val();
            arr3[j]= inputs; 
        }
        var str3 = arr3.join(",").toString();
        $('#placementXml_vendor_parentID').val(str3);
        //获取第三列的所有vendor_sponsorID组成数组并拼成字符串
        var arr4 = new Array();
        for(var j=0;j<row_length;j++){
            var inputs =$('#position_'+j).val();
            arr4[j]= inputs; 
        }
        var str4 = arr4.join(",").toString();
        $('#placementXml_position').val(str4);  
    }    
</script>

<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<div class="form">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'xml-create-form',
        'enableClientValidation' => true,
        'enableAjaxValidation' => true, // 提示Incorrect username or password信息
        'clientOptions' => array(
            'validateOnSubmit' => true,)
       ));
    ?>   
    <div class="row">
        <?php echo $form->labelEx($model, 'function_name'); ?>
        <?php echo $form->dropDownList($model, 'function_name',array('placement'=>'placement')); ?>
        <?php echo $form->error($model, 'function_name'); ?>
  
        <?php echo $form->labelEx($model, 'operate',array('style'=>'margin-left:62px;')); ?>
        <?php echo $form->dropDownList($model, 'operate',array('ADD'=>'ADD','QRY'=>'QRY'),array('style'=>'width:100px;')); ?>
        <?php echo $form->error($model, 'operate'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model, 'txn_seqno',array('style'=>'margin-left:20px;')); ?>
        <?php echo $form->textField($model, 'txn_seqno'); ?>       
  
        <?php echo $form->labelEx($model, 'txn_time',array('style'=>'margin-left:56px;')); ?>         
        <?php echo $form->textField($model, 'txn_time'); ?>
        <?php echo $form->error($model, 'txn_seqno',array('style'=>'margin-left:-220px;')); ?>
        <?php echo $form->error($model, 'txn_time',array('style'=>'margin:-16px auto 10px 400px;')); ?>
    </div>
        <?php echo $form->hiddenField($model, 'vendor_memberID'); ?>
        <?php echo $form->hiddenField($model, 'vendor_sponsorID'); ?>
        <?php echo $form->hiddenField($model, 'vendor_parentID'); ?>    
        <?php echo $form->hiddenField($model, 'position'); ?>
<table id='tab1' name="mytable" width="60%" border="2" cellpadding="1" cellspacing="1"  style="border:#aaa 3px solid" >
    <tr>
       <td><strong>NO.</strong></td>
       <td><strong>vendor_memberID</strong></td>
       <td> <?php echo CHtml::submitButton( 'QUERY', array('class' => 'btnsubmit1','onclick'=>'getDatas()', 'id' => 'submitButton',)); ?></td>
       
    </tr>
    
    <tr>
        <td>1</td>
        <td width="80%" style="margin-left:10px;"><input size=15 type="text" class="memberID" id="vendor_memberIDs_0"></td>
        <td><label><input type="button" value="Add  Line" onclick="addQRYRow()" id="button" name="button"></label></td>
   </tr>
</table>
<table id='tab' name="mytable" width="100%" border="2" cellpadding="1" cellspacing="1"  style="border:#aaa 3px solid" >
    <tr>
        <td><strong>NO.</strong></td>
        <td><strong><?php echo Yii::t('view_Admin', 'vendor_memberID'); ?></strong></td>
        <td><strong><?php echo Yii::t('view_Admin', 'vendor_sponsorID'); ?></strong></td>
        <td><strong><?php echo Yii::t('view_Admin', 'vendor_parentID'); ?></strong></td>
        <td><strong><?php echo Yii::t('view_Admin', 'position'); ?></strong></td>
        <td><strong><?php echo CHtml::submitButton( 'ADD', array('class' => 'btnsubmit','onclick'=>'getAllDatas()', 'id' => 'submitButton', )); ?></strong></td>
    </tr>
    <tr>
        <td>1</td>
        <td><input size=15 type="text" id="vendor_memberID_0" class="memberID" value="" /></td>
        <td><input size=15 type="text" id="vendor_sponsorID_0" class="sponsorID" maxlength="11" value="" /></td>
        <td><input size=15 type="text" id="vendor_parentID_0" class="parentID"  maxlength="250"  value="" /></td>
        <td><input size=15 type="text" id="position_0" class="position"  maxlength="250"  value="" /></td>
        <td><label><input type="button" name="buttonAdd" id="button" onclick="addRow()" value="<?php echo Yii::t('view_Admin', 'Add  Line'); ?>" ></label></td>
    </tr>   
</table>
    <?php $this->endWidget();?>
</div>
