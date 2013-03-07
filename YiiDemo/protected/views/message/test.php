<style>
 #OpLimits_Menu ul li:hover, #OpLimits_Menu ul li .active
{
    background-color:#EFF4FA;
    text-decoration:none;
}
</style>
<?php

function type() {
    return substr(strrchr($HTTP_POST_FILES['file']['name'], '.'), 1);
}

if (isset($HTTP_POST_FILES['file']['name'])) {
    $picName = type();
    echo $picName;
} else {
    ?>
    <form method="post">
        请选择图片：
        <input id="bgpic" runat="server" name="UpLoadFile" type="file" /> 
        <input type="submit" value="提交">
    </form>
    <div id="OpLimits_Menu">
        <ul>
            <li value="0" class="rightMenu"><a href="www.yiidemo.com">右键菜单查看</a></li>
            <li value="1" class="rightMenu"><a href="www.yiidemo.com">右键菜单查看</a></li>
            <li value="2" class="rightMenu"><a href="www.yiidemo.com">右键菜单查看</a></li>
            <li value="3" class="rightMenu"><a href="www.yiidemo.com">右键菜单查看</a></li>
            
        </ul>
    </div>
    <?php
}
?>