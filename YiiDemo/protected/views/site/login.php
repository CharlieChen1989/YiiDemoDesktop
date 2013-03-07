<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>YWCOS</title>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/login.css" type="text/css" title="no title" charset="utf-8" />	
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
        <?php echo CHtml::cssFile('/css/login.css'); ?> 
         <script type="text/javascript">       
            /* <![CDATA[ */ 
            /**
             *@ recognize the version of browser
             *                        
             */
            $(document).ready(function(){   
                var bro=$.browser;   
                var binfo="";   
                if(bro.msie) {binfo="Microsoft Internet Explorer "+bro.version;}   
                if(bro.mozilla) {binfo="Mozilla Firefox "+bro.version;}   
                if(bro.safari) {binfo="Apple Safari "+bro.version;}   
                if(bro.opera) {binfo="Opera "+bro.version;} 
                $("#browser").html(binfo);
            }).keyup( function (event){ 
                 /**
                * @method 监听键盘回车事件
                */
                if (event.keyCode == 13) {   
                    //js 监听对应的id   
                    document.getElementById("login-form").submit();
                }
            });   
            /* ]]> */ 
        </script> 
    </head>

    <body>
<!-- Baidu Button BEGIN -->
<div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare">
<a class="bds_qzone"></a>
<a class="bds_tsina"></a>
<a class="bds_tqq"></a>
<a class="bds_renren"></a>
<a class="bds_t163"></a>
<span class="bds_more"></span>
<a class="shareCount"></a>
</div>
<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6587784" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script>
<!-- Baidu Button END -->
        <div id ="login-area" align="center">
            <table width="1000" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td colspan="3" class="login-top" style="text-align:center;">   
                        <div class="login-header">
                            <ul>
                                <font style="font-family:Arial, Helvetica, sans-serif;FONT-SIZE: 25pt">
                                    <b><font color="#174D70" >Y</font>ii</b>
                                    <b><font color="#174D70">W</font>eb</b>
                                    <b><font color="#174D70">C</font>loud</b>
                                    <b><font color="#174D70">O</font>peration</b>
                                    <b><font color="#174D70">S</font>ystem</b>                                    
                                </font>
                            </ul>
                        </div>                    
                    </td>
                </tr>
                <tr>
                    <?php
                    $form = $this->beginWidget('CActiveForm', array(
                        'id' => 'login-form',
                        'enableClientValidation' => true,
                        'enableAjaxValidation' => true, // 提示Incorrect username or password信息
                        'clientOptions' => array(
                            'validateOnSubmit' => true,
                        ),
                        'htmlOptions' => array('class' => 'form label-inline'),
                            ));
                    ?>
                    <td class="login-box-background">
                        <div class="login-id"><?php echo Yii::t('site', 'Account'); ?></div>
                        <div class="login-box" style="text-align:left;">
                            <?php echo $form->textField($model, 'username', array('class' => 'login-field', 'size' => '25', 'maxlength' => '24', 'style' => 'width:200px;')); ?>
                            <?php echo $form->error($model, 'username', array('class' => 'login-error')); ?>
                        </div><br>
                        <div class="login-psw"><?php echo Yii::t('site', 'Password'); ?></div> 
                        <div class="login-box" style="text-align:left;">
                                <?php echo $form->passwordField($model, 'password', array('class' => 'login-field', 'size' => '25', 'style' => 'width:200px;')); ?>
                                <?php echo $form->error($model, 'password', array('class' => 'login-error')); ?>
                        </div><br>
                        <div class="setLang"><?php echo Yii::t('site', 'Language'); ?></div>
                         <div id ="setLang">                                    
                                    <select onChange="window.location='?setlang='+this.options[this.selectedIndex].value">
                                        <option value="zh_cn" <?php if (isset($_GET['setlang']) && $_GET['setlang'] == 'zh_cn')
                                            echo 'selected';?>>中文(简体)
                                        </option>			
                                        <option value="en" <?php if (isset($_GET['setlang']) && $_GET['setlang'] == 'en')
                                            echo 'selected'; ?>>English
                                        </option>
                                        <option value="zh_tw" <?php if (isset($_GET['setlang']) && $_GET['setlang'] == 'zh_tw')
                                            echo 'selected';?>>繁體
                                        </option>
                                    </select>
                         </div>
                        <div class="login-bottom">                         
                                 <input type="submit" value="<?php echo Yii::t('site', 'Login') ?>" class="login-button" />
                            </div>
                   </td>
               </tr> 
                    <tr>
                        <td colspan="3"></td>
                    </tr>
             </table>
         <?php $this->endWidget(); ?>      
         <!-- General Popup -->
         <div id="mask"></div>
         <div id="footer">
               <div style='text-align:center;font-size:12px; padding-top:20px; font:12px/1.7em arial,sans-serif'>
                   <?php echo Yii::t('site', 'hint of browser'); ?>
               </div> 
                    Copyright &copy; <?php echo date('Y'); ?> by My Company. All Rights Reserved.<br/>
                     <?php echo Yii::powered(); ?><br/>
                    <?php echo Yii::t('site', 'Your browser version'); ?>:<span id="browser" class="info">Browser Info</span>
        </div><!-- footer -->
</div>

    </body>
</html>