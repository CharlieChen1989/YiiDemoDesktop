<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<title>纯CSS3制作的Windows 7开始菜单</title>
<?php echo CHtml::cssFile('/css/winStartMenu.css'); ?>
</head>
<body>
<div style="width:480px;margin:0 auto">
  <div id="startmenu">
    <ul id="programs">
      <li><a href="#"><img src="/images/winstartmenu/firefox-32.png" alt="" />Mozilla Firefox</a></li>
      <li><a href="#"><img src="/images/winstartmenu/chrome.png" alt="" />Google Chrome</a></li>
      <li><a href="#"><img src="/images/winstartmenu/safari.png" alt="" />Safari</a></li>
      <li><a href="#"><img src="/images/winstartmenu/opera.png" alt="" />Opera</a></li>
      <li><a href="#"><img src="/images/winstartmenu/ie.png" alt="" />Internet Explorer</a></li>
      <li><a href="#"><img src="/images/winstartmenu/rss_32.png" alt="" />RSS Feeds</a></li>
      <li><a href="#"><img src="/images/winstartmenu/twitter_32.png" alt="" />Twitter</a></li>
      <li><a href="#"><img src="/images/winstartmenu/delicious_32.png" alt="" />Delicious</a></li>
    </ul>
    <ul id="links">
      <li class="icon"><img src="/images/winstartmenu/folder.png" alt="" /></li>
      <li><a href="#"><span>Documents</span></a></li>
      <li><a href="#"><span>Pictures</span></a></li>
      <li><a href="#"><span>Music</span></a></li>
      <li><a href="#"><span>Computer</span></a></li>
      <li><a href="#"><span>Network</span></a></li>
      <li><a href="#"><span>Connect to</span></a></li>
    </ul>
  </div>
</div>
</body>
</html>
