<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge; chrome=1">
<meta name="description" content="JavaScript desktop environment built with jQuery.">
<title>jquery在线模拟linux系统桌面效果</title>
<!--[if lt IE 7]>
<script>
window.top.location = 'http://desktop.sonspring.com/ie.html';
</script>
<![endif]-->
<?php echo CHtml::cssFile('/css/linuxhtml.css'); ?>
<?php echo CHtml::cssFile('/css/linuxDesktop.css'); ?>
<!--[if lt IE 9]>
<link rel="stylesheet" href="assets/stylesheets/ie.css" />
<![endif]-->
<style type="text/css" charset="utf-8">/* See license.txt for terms of usage */
/** reset styling **/
.firebugResetStyles {
    z-index: 2147483646 !important;
    top: 0 !important;
    left: 0 !important;
    display: block !important;
    border: 0 none !important;
    margin: 0 !important;
    padding: 0 !important;
    outline: 0 !important;
    min-width: 0 !important;
    max-width: none !important;
    min-height: 0 !important;
    max-height: none !important;
    position: fixed !important;
    transform: rotate(0deg) !important;
    transform-origin: 50% 50% !important;
    border-radius: 0 !important;
    box-shadow: none !important;
    background: transparent none !important;
    pointer-events: none !important;
    white-space: normal !important;
}

.firebugBlockBackgroundColor {
    background-color: transparent !important;
}

.firebugResetStyles:before, .firebugResetStyles:after {
    content: "" !important;
}
/**actual styling to be modified by firebug theme**/
.firebugCanvas {
    display: none !important;
}

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
.firebugLayoutBox {
    width: auto !important;
    position: static !important;
}

.firebugLayoutBoxOffset {
    opacity: 0.8 !important;
    position: fixed !important;
}

.firebugLayoutLine {
    opacity: 0.4 !important;
    background-color: #000000 !important;
}

.firebugLayoutLineLeft, .firebugLayoutLineRight {
    width: 1px !important;
    height: 100% !important;
}

.firebugLayoutLineTop, .firebugLayoutLineBottom {
    width: 100% !important;
    height: 1px !important;
}

.firebugLayoutLineTop {
    margin-top: -1px !important;
    border-top: 1px solid #999999 !important;
}

.firebugLayoutLineRight {
    border-right: 1px solid #999999 !important;
}

.firebugLayoutLineBottom {
    border-bottom: 1px solid #999999 !important;
}

.firebugLayoutLineLeft {
    margin-left: -1px !important;
    border-left: 1px solid #999999 !important;
}

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
.firebugLayoutBoxParent {
    border-top: 0 none !important;
    border-right: 1px dashed #E00 !important;
    border-bottom: 1px dashed #E00 !important;
    border-left: 0 none !important;
    position: fixed !important;
    width: auto !important;
}

.firebugRuler{
    position: absolute !important;
}

.firebugRulerH {
    top: -15px !important;
    left: 0 !important;
    width: 100% !important;
    height: 14px !important;
    background: url("data:image/png,%89PNG%0D%0A%1A%0A%00%00%00%0DIHDR%00%00%13%88%00%00%00%0E%08%02%00%00%00L%25a%0A%00%00%00%04gAMA%00%00%D6%D8%D4OX2%00%00%00%19tEXtSoftware%00Adobe%20ImageReadyq%C9e%3C%00%00%04%F8IDATx%DA%EC%DD%D1n%E2%3A%00E%D1%80%F8%FF%EF%E2%AF2%95%D0D4%0E%C1%14%B0%8Fa-%E9%3E%CC%9C%87n%B9%81%A6W0%1C%A6i%9A%E7y%0As8%1CT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AATE9%FE%FCw%3E%9F%AF%2B%2F%BA%97%FDT%1D~K(%5C%9D%D5%EA%1B%5C%86%B5%A9%BDU%B5y%80%ED%AB*%03%FAV9%AB%E1%CEj%E7%82%EF%FB%18%BC%AEJ8%AB%FA'%D2%BEU9%D7U%ECc0%E1%A2r%5DynwVi%CFW%7F%BB%17%7Dy%EACU%CD%0E%F0%FA%3BX%FEbV%FEM%9B%2B%AD%BE%AA%E5%95v%AB%AA%E3E5%DCu%15rV9%07%B5%7F%B5w%FCm%BA%BE%AA%FBY%3D%14%F0%EE%C7%60%0EU%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5JU%88%D3%F5%1F%AE%DF%3B%1B%F2%3E%DAUCNa%F92%D02%AC%7Dm%F9%3A%D4%F2%8B6%AE*%BF%5C%C2Ym~9g5%D0Y%95%17%7C%C8c%B0%7C%18%26%9CU%CD%13i%F7%AA%90%B3Z%7D%95%B4%C7%60%E6E%B5%BC%05%B4%FBY%95U%9E%DB%FD%1C%FC%E0%9F%83%7F%BE%17%7DkjMU%E3%03%AC%7CWj%DF%83%9An%BCG%AE%F1%95%96yQ%0Dq%5Dy%00%3Et%B5'%FC6%5DS%95pV%95%01%81%FF'%07%00%00%00%00%00%00%00%00%00%F8x%C7%F0%BE%9COp%5D%C9%7C%AD%E7%E6%EBV%FB%1E%E0(%07%E5%AC%C6%3A%ABi%9C%8F%C6%0E9%AB%C0'%D2%8E%9F%F99%D0E%B5%99%14%F5%0D%CD%7F%24%C6%DEH%B8%E9rV%DFs%DB%D0%F7%00k%FE%1D%84%84%83J%B8%E3%BA%FB%EF%20%84%1C%D7%AD%B0%8E%D7U%C8Y%05%1E%D4t%EF%AD%95Q%BF8w%BF%E9%0A%BF%EB%03%00%00%00%00%00%00%00%00%00%B8vJ%8E%BB%F5%B1u%8Cx%80%E1o%5E%CA9%AB%CB%CB%8E%03%DF%1D%B7T%25%9C%D5(%EFJM8%AB%CC'%D2%B2*%A4s%E7c6%FB%3E%FA%A2%1E%80~%0E%3E%DA%10x%5D%95Uig%15u%15%ED%7C%14%B6%87%A1%3B%FCo8%A8%D8o%D3%ADO%01%EDx%83%1A~%1B%9FpP%A3%DC%C6'%9C%95gK%00%00%00%00%00%00%00%00%00%20%D9%C9%11%D0%C0%40%AF%3F%EE%EE%92%94%D6%16X%B5%BCMH%15%2F%BF%D4%A7%C87%F1%8E%F2%81%AE%AAvzr%DA2%ABV%17%7C%E63%83%E7I%DC%C6%0Bs%1B%EF6%1E%00%00%00%00%00%00%00%00%00%80cr%9CW%FF%7F%C6%01%0E%F1%CE%A5%84%B3%CA%BC%E0%CB%AA%84%CE%F9%BF)%EC%13%08WU%AE%AB%B1%AE%2BO%EC%8E%CBYe%FE%8CN%ABr%5Dy%60~%CFA%0D%F4%AE%D4%BE%C75%CA%EDVB%EA(%B7%F1%09g%E5%D9%12%00%00%00%00%00%00%00%00%00H%F6%EB%13S%E7y%5E%5E%FB%98%F0%22%D1%B2'%A7%F0%92%B1%BC%24z3%AC%7Dm%60%D5%92%B4%7CEUO%5E%F0%AA*%3BU%B9%AE%3E%A0j%94%07%A0%C7%A0%AB%FD%B5%3F%A0%F7%03T%3Dy%D7%F7%D6%D4%C0%AAU%D2%E6%DFt%3F%A8%CC%AA%F2%86%B9%D7%F5%1F%18%E6%01%F8%CC%D5%9E%F0%F3z%88%AA%90%EF%20%00%00%00%00%00%00%00%00%00%C0%A6%D3%EA%CFi%AFb%2C%7BB%0A%2B%C3%1A%D7%06V%D5%07%A8r%5D%3D%D9%A6%CAu%F5%25%CF%A2%99%97zNX%60%95%AB%5DUZ%D5%FBR%03%AB%1C%D4k%9F%3F%BB%5C%FF%81a%AE%AB'%7F%F3%EA%FE%F3z%94%AA%D8%DF%5B%01%00%00%00%00%00%00%00%00%00%8E%FB%F3%F2%B1%1B%8DWU%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*UiU%C7%BBe%E7%F3%B9%CB%AAJ%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5*%AAj%FD%C6%D4%5Eo%90%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5%86%AF%1B%9F%98%DA%EBm%BBV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%AD%D6%E4%F58%01%00%00%00%00%00%00%00%00%00%00%00%00%00%40%85%7F%02%0C%008%C2%D0H%16j%8FX%00%00%00%00IEND%AEB%60%82") repeat-x !important;
    border-top: 1px solid #BBBBBB !important;
    border-right: 1px dashed #BBBBBB !important;
    border-bottom: 1px solid #000000 !important;
}

.firebugRulerV {
    top: 0 !important;
    left: -15px !important;
    width: 14px !important;
    height: 100% !important;
    background: url("data:image/png,%89PNG%0D%0A%1A%0A%00%00%00%0DIHDR%00%00%00%0E%00%00%13%88%08%02%00%00%00%0E%F5%CB%10%00%00%00%04gAMA%00%00%D6%D8%D4OX2%00%00%00%19tEXtSoftware%00Adobe%20ImageReadyq%C9e%3C%00%00%06~IDATx%DA%EC%DD%D1v%A20%14%40Qt%F1%FF%FF%E4%97%D9%07%3BT%19%92%DC%40(%90%EEy%9A5%CB%B6%E8%F6%9Ac%A4%CC0%84%FF%DC%9E%CF%E7%E3%F1%88%DE4%F8%5D%C7%9F%2F%BA%DD%5E%7FI%7D%F18%DDn%BA%C5%FB%DF%97%BFk%F2%10%FF%FD%B4%F2M%A7%FB%FD%FD%B3%22%07p%8F%3F%AE%E3%F4S%8A%8F%40%EEq%9D%BE8D%F0%0EY%A1Uq%B7%EA%1F%81%88V%E8X%3F%B4%CEy%B7h%D1%A2E%EBohU%FC%D9%AF2fO%8BBeD%BE%F7X%0C%97%A4%D6b7%2Ck%A5%12%E3%9B%60v%B7r%C7%1AI%8C%BD%2B%23r%00c0%B2v%9B%AD%CA%26%0C%1Ek%05A%FD%93%D0%2B%A1u%8B%16-%95q%5Ce%DCSO%8E%E4M%23%8B%F7%C2%FE%40%BB%BD%8C%FC%8A%B5V%EBu%40%F9%3B%A72%FA%AE%8C%D4%01%CC%B5%DA%13%9CB%AB%E2I%18%24%B0n%A9%0CZ*Ce%9C%A22%8E%D8NJ%1E%EB%FF%8F%AE%CAP%19*%C3%BAEKe%AC%D1%AAX%8C*%DEH%8F%C5W%A1e%AD%D4%B7%5C%5B%19%C5%DB%0D%EF%9F%19%1D%7B%5E%86%BD%0C%95%A12%AC%5B*%83%96%CAP%19%F62T%86%CAP%19*%83%96%CA%B8Xe%BC%FE)T%19%A1%17xg%7F%DA%CBP%19*%C3%BA%A52T%86%CAP%19%F62T%86%CA%B0n%A9%0CZ%1DV%C6%3D%F3%FCH%DE%B4%B8~%7F%5CZc%F1%D6%1F%AF%84%F9%0F6%E6%EBVt9%0E~%BEr%AF%23%B0%97%A12T%86%CAP%19%B4T%86%CA%B8Re%D8%CBP%19*%C3%BA%A52huX%19%AE%CA%E5%BC%0C%7B%19*CeX%B7h%A9%0C%95%E1%BC%0C%7B%19*CeX%B7T%06%AD%CB%5E%95%2B%BF.%8F%C5%97%D5%E4%7B%EE%82%D6%FB%CF-%9C%FD%B9%CF%3By%7B%19%F62T%86%CA%B0n%D1R%19*%A3%D3%CA%B0%97%A12T%86uKe%D0%EA%B02*%3F1%99%5DB%2B%A4%B5%F8%3A%7C%BA%2B%8Co%7D%5C%EDe%A8%0C%95a%DDR%19%B4T%C66%82fA%B2%ED%DA%9FC%FC%17GZ%06%C9%E1%B3%E5%2C%1A%9FoiB%EB%96%CA%A0%D5qe4%7B%7D%FD%85%F7%5B%ED_%E0s%07%F0k%951%ECr%0D%B5C%D7-g%D1%A8%0C%EB%96%CA%A0%A52T%C6)*%C3%5E%86%CAP%19%D6-%95A%EB*%95q%F8%BB%E3%F9%AB%F6%E21%ACZ%B7%22%B7%9B%3F%02%85%CB%A2%5B%B7%BA%5E%B7%9C%97%E1%BC%0C%EB%16-%95%A12z%AC%0C%BFc%A22T%86uKe%D0%EA%B02V%DD%AD%8A%2B%8CWhe%5E%AF%CF%F5%3B%26%CE%CBh%5C%19%CE%CB%B0%F3%A4%095%A1%CAP%19*Ce%A8%0C%3BO*Ce%A8%0C%95%A12%3A%AD%8C%0A%82%7B%F0v%1F%2FD%A9%5B%9F%EE%EA%26%AF%03%CA%DF9%7B%19*Ce%A8%0C%95%A12T%86%CA%B8Ze%D8%CBP%19*Ce%A8%0C%95%D1ae%EC%F7%89I%E1%B4%D7M%D7P%8BjU%5C%BB%3E%F2%20%D8%CBP%19*Ce%A8%0C%95%A12T%C6%D5*%C3%5E%86%CAP%19*Ce%B4O%07%7B%F0W%7Bw%1C%7C%1A%8C%B3%3B%D1%EE%AA%5C%D6-%EBV%83%80%5E%D0%CA%10%5CU%2BD%E07YU%86%CAP%19*%E3%9A%95%91%D9%A0%C8%AD%5B%EDv%9E%82%FFKOee%E4%8FUe%A8%0C%95%A12T%C6%1F%A9%8C%C8%3D%5B%A5%15%FD%14%22r%E7B%9F%17l%F8%BF%ED%EAf%2B%7F%CF%ECe%D8%CBP%19*Ce%A8%0C%95%E1%93~%7B%19%F62T%86%CAP%19*Ce%A8%0C%E7%13%DA%CBP%19*Ce%A8%0CZf%8B%16-Z%B4h%D1R%19f%8B%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1%A2%A52%CC%16-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2EKe%98-Z%B4h%D1%A2EKe%D02%5B%B4h%D1%A2EKe%D02%5B%B4h%D1%A2E%8B%96%CA0%5B%B4h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%16-%95a%B6h%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-Z*%C3l%D1%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z%B4T%86%D9%A2E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4h%A9%0C%B3E%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%D1R%19f%8B%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1%A2%A52%CC%16-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2EKe%98-Z%B4h%D1%A2EKe%D02%5B%B4h%D1%A2EKe%D02%5B%B4h%D1%A2E%8B%96%CA0%5B%B4h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%16-%95a%B6h%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-Z*%C3l%D1%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z%B4T%86%D9%A2E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4h%A9%0C%B3E%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%D1R%19f%8B%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1%A2%A52%CC%16-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2EKe%98-Z%B4h%D1%A2EKe%D02%5B%B4h%D1%A2EKe%D02%5B%B4h%D1%A2E%8B%96%CA0%5B%B4h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%16-%95a%B6h%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-Z*%C3l%D1%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z%B4T%86%D9%A2E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4%AE%A4%F5%25%C0%00%DE%BF%5C'%0F%DA%B8q%00%00%00%00IEND%AEB%60%82") repeat-y !important;
    border-left: 1px solid #BBBBBB !important;
    border-right: 1px solid #000000 !important;
    border-bottom: 1px dashed #BBBBBB !important;
}

.overflowRulerX > .firebugRulerV {
    left: 0 !important;
}

.overflowRulerY > .firebugRulerH {
    top: 0 !important;
}

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
.fbProxyElement {
    position: fixed !important;
    pointer-events: auto !important;
}
</style></head>
<body style="cursor: auto;"><img id="wallpaper" class="abs" src="../images/linuxdesktop/wallpaper.jpg">
<div class="abs" id="wrapper">
  <div class="abs" id="desktop"> <a class="abs icon ui-draggable" style="left:20px;top:20px;" href="#icon_dock_computer"> <img src="../images/linuxdesktop/icon_32_computer.png"> Computer </a> <a class="abs icon ui-draggable" style="left:20px;top:100px;" href="#icon_dock_drive"> <img src="../images/linuxdesktop/icon_32_drive.png"> Hard Drive </a> <a class="abs icon ui-draggable" style="left:20px;top:180px;" href="#icon_dock_disc"> <img src="../images/linuxdesktop/icon_32_disc.png"> Audio CD </a> <a class="abs icon ui-draggable" style="left:20px;top:260px;" href="#icon_dock_network"> <img src="../images/linuxdesktop/icon_32_network.png"> Network </a>
    <div style="display: none; left: 309px; top: 168px; position: absolute; width: 744px; height: 331px;" id="window_computer" class="abs window ui-draggable ui-resizable window_stack">
      <div class="abs window_inner">
        <div class="window_top"> <span class="float_left"> <img src="../images/linuxdesktop/icon_16_computer.png"> Computer </span> <span class="float_right"> <a href="#" class="window_min"></a> <a href="#" class="window_resize"></a> <a href="#icon_dock_computer" class="window_close"></a> </span> </div>
        <div class="abs window_content">
          <div class="window_aside"> Hello. You look nice today! </div>
          <div class="window_main">
            <table class="data">
              <thead>
                <tr>
                  <th class="shrink">&nbsp; </th>
                  <th> Name </th>
                  <th> Date Modified </th>
                  <th> Date Created </th>
                  <th> Size </th>
                  <th> Kind </th>
                </tr>
              </thead>
              <tbody>
                <tr class="">
                  <td><img src="../images/linuxdesktop/icon_16_drive.png"> </td>
                  <td> Hard Drive </td>
                  <td> Today </td>
                  <td>— </td>
                  <td> 200 GB </td>
                  <td> Volume </td>
                </tr>
                <tr class="zebra">
                  <td><img src="../images/linuxdesktop/icon_16_disc.png"> </td>
                  <td> Audio CD </td>
                  <td>— </td>
                  <td>— </td>
                  <td> 2.92 GB </td>
                  <td> Media </td>
                </tr>
                <tr class="">
                  <td><img src="../images/linuxdesktop/icon_16_network.png"> </td>
                  <td> Network </td>
                  <td>— </td>
                  <td>— </td>
                  <td>— </td>
                  <td> LAN </td>
                </tr>
                <tr class="zebra">
                  <td><img src="../images/linuxdesktop/icon_16_folder_remote.png"> </td>
                  <td> Shared Project Files </td>
                  <td> Yesterday </td>
                  <td> 12/29/08 </td>
                  <td> 524 MB </td>
                  <td> Folder </td>
                </tr>
                <tr class="">
                  <td><img src="../images/linuxdesktop/icon_16_documents.png"> </td>
                  <td> Documents </td>
                  <td> Yesterday </td>
                  <td> 12/29/08 </td>
                  <td> 524 MB </td>
                  <td> Folder </td>
                </tr>
                <tr class="zebra">
                  <td><img src="../images/linuxdesktop/icon_16_system.png"> </td>
                  <td> Preferences </td>
                  <td>— </td>
                  <td>— </td>
                  <td>— </td>
                  <td> System </td>
                </tr>
                <tr class="">
                  <td><img src="../images/linuxdesktop/icon_16_trash.png"> </td>
                  <td> Trash </td>
                  <td> Today </td>
                  <td>— </td>
                  <td>— </td>
                  <td> Bin </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="abs window_bottom"> Build: TK421 </div>
      </div>
      <span style="-moz-user-select: none;" unselectable="on" class="abs ui-resizable-handle ui-resizable-se"></span> <div unselectable="on" style="display: block; -moz-user-select: none;" class="ui-resizable-handle ui-resizable-e"></div><div unselectable="on" style="display: block; -moz-user-select: none;" class="ui-resizable-handle ui-resizable-s"></div><div unselectable="on" style="z-index: 1001; display: block; -moz-user-select: none;" class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div></div>
    <div style="display: none;" id="window_drive" class="abs window ui-draggable ui-resizable">
      <div class="abs window_inner">
        <div class="window_top"> <span class="float_left"> <img src="../images/linuxdesktop/icon_16_drive.png"> Hard Drive </span> <span class="float_right"> <a href="#" class="window_min"></a> <a href="#" class="window_resize"></a> <a href="#icon_dock_drive" class="window_close"></a> </span> </div>
        <div class="abs window_content">
          <div class="window_aside"> Storage in use: 119.1 GB </div>
          <div class="window_main">
            <table class="data">
              <thead>
                <tr>
                  <th class="shrink">&nbsp; </th>
                  <th> Name </th>
                  <th> Date Modified </th>
                  <th> Date Created </th>
                  <th> Size </th>
                  <th> Kind </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><img src="../images/linuxdesktop/icon_16_page.png"> </td>
                  <td> .DS_Store </td>
                  <td> Yesterday </td>
                  <td>— </td>
                  <td> 6 KB </td>
                  <td> Hidden </td>
                </tr>
                <tr class="zebra">
                  <td><img src="../images/linuxdesktop/icon_16_folder_home.png"> </td>
                  <td> Default User </td>
                  <td> Today </td>
                  <td>— </td>
                  <td>— </td>
                  <td> Folder </td>
                </tr>
                <tr>
                  <td><img src="../images/linuxdesktop/icon_16_folder.png"> </td>
                  <td> Applications </td>
                  <td> Yesterday </td>
                  <td>— </td>
                  <td>— </td>
                  <td> Folder </td>
                </tr>
                <tr class="zebra">
                  <td><img src="../images/linuxdesktop/icon_16_folder.png"> </td>
                  <td> Developer </td>
                  <td> 12/29/08 </td>
                  <td>— </td>
                  <td>— </td>
                  <td> Folder </td>
                </tr>
                <tr>
                  <td><img src="../images/linuxdesktop/icon_16_folder.png"> </td>
                  <td> Library </td>
                  <td> 09/11/09 </td>
                  <td>— </td>
                  <td>— </td>
                  <td> Folder </td>
                </tr>
                <tr class="zebra">
                  <td><img src="../images/linuxdesktop/icon_16_folder.png"> </td>
                  <td> System </td>
                  <td> Yesterday </td>
                  <td>— </td>
                  <td>— </td>
                  <td> Folder </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="abs window_bottom"> Free: 80.9 GB </div>
      </div>
      <span style="-moz-user-select: none;" unselectable="on" class="abs ui-resizable-handle ui-resizable-se"></span> <div unselectable="on" style="display: block; -moz-user-select: none;" class="ui-resizable-handle ui-resizable-e"></div><div unselectable="on" style="display: block; -moz-user-select: none;" class="ui-resizable-handle ui-resizable-s"></div><div unselectable="on" style="z-index: 1001; display: block; -moz-user-select: none;" class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div></div>
    <div style="display: none;" id="window_disc" class="abs window ui-draggable ui-resizable">
      <div class="abs window_inner">
        <div class="window_top"> <span class="float_left"> <img src="../images/linuxdesktop/icon_16_disc.png"> Audio CD - Title of Album </span> <span class="float_right"> <a href="#" class="window_min"></a> <a href="#" class="window_resize"></a> <a href="#icon_dock_disc" class="window_close"></a> </span> </div>
        <div class="abs window_content">
          <div class="window_aside align_center"> <img src="../images/linuxdesktop/album_cover.jpg"> <br>
            <em>Title of Album</em> </div>
          <div class="window_main">
            <table class="data">
              <thead>
                <tr>
                  <th class="shrink">&nbsp; </th>
                  <th class="shrink"> Track </th>
                  <th> Song Name </th>
                  <th class="shrink"> Length </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><img src="../images/linuxdesktop/icon_16_music.png"> </td>
                  <td class="align_center"> 01 </td>
                  <td> Track One </td>
                  <td class="align_right"> 3:50 </td>
                </tr>
                <tr class="zebra">
                  <td><img src="../images/linuxdesktop/icon_16_music.png"> </td>
                  <td class="align_center"> 02 </td>
                  <td> Track Two </td>
                  <td class="align_right"> 3:50 </td>
                </tr>
                <tr>
                  <td><img src="../images/linuxdesktop/icon_16_music.png"> </td>
                  <td class="align_center"> 03 </td>
                  <td> Track Three </td>
                  <td class="align_right"> 4:02 </td>
                </tr>
                <tr class="zebra">
                  <td><img src="../images/linuxdesktop/icon_16_music.png"> </td>
                  <td class="align_center"> 04 </td>
                  <td> Track Four </td>
                  <td class="align_right"> 3:47 </td>
                </tr>
                <tr>
                  <td><img src="../images/linuxdesktop/icon_16_music.png"> </td>
                  <td class="align_center"> 05 </td>
                  <td> Track Five </td>
                  <td class="align_right"> 4:38 </td>
                </tr>
                <tr class="zebra">
                  <td><img src="../images/linuxdesktop/icon_16_music.png"> </td>
                  <td class="align_center"> 06 </td>
                  <td> Track Six </td>
                  <td class="align_right"> 3:16 </td>
                </tr>
                <tr>
                  <td><img src="../images/linuxdesktop/icon_16_music.png"> </td>
                  <td class="align_center"> 07 </td>
                  <td> Track Seven </td>
                  <td class="align_right"> 3:53 </td>
                </tr>
                <tr class="zebra">
                  <td><img src="../images/linuxdesktop/icon_16_music.png"> </td>
                  <td class="align_center"> 08 </td>
                  <td> Track Eight </td>
                  <td class="align_right"> 1:41 </td>
                </tr>
                <tr>
                  <td><img src="../images/linuxdesktop/icon_16_music.png"> </td>
                  <td class="align_center"> 09 </td>
                  <td> Track Nine </td>
                  <td class="align_right"> 3:40 </td>
                </tr>
                <tr class="zebra">
                  <td><img src="../images/linuxdesktop/icon_16_music.png"> </td>
                  <td class="align_center"> 10 </td>
                  <td> Track Ten </td>
                  <td class="align_right"> 4:33 </td>
                </tr>
                <tr>
                  <td><img src="../images/linuxdesktop/icon_16_music.png"> </td>
                  <td class="align_center"> 11 </td>
                  <td> Track Eleven </td>
                  <td class="align_right"> 3:49 </td>
                </tr>
                <tr class="zebra">
                  <td><img src="../images/linuxdesktop/icon_16_music.png"> </td>
                  <td class="align_center"> 12 </td>
                  <td> Track Twelve </td>
                  <td class="align_right"> 1:11 </td>
                </tr>
                <tr>
                  <td class="shrink"><img src="../images/linuxdesktop/icon_16_music.png"> </td>
                  <td class="align_center"> 13 </td>
                  <td> Track Thirteen </td>
                  <td class="align_right"> 6:17 </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="abs window_bottom"> Genre: Rock/Rap </div>
      </div>
      <span style="-moz-user-select: none;" unselectable="on" class="abs ui-resizable-handle ui-resizable-se"></span> <div unselectable="on" style="display: block; -moz-user-select: none;" class="ui-resizable-handle ui-resizable-e"></div><div unselectable="on" style="display: block; -moz-user-select: none;" class="ui-resizable-handle ui-resizable-s"></div><div unselectable="on" style="z-index: 1001; display: block; -moz-user-select: none;" class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div></div>
    <div style="display: none; position: absolute; top: 30px; left: 120px; width: 1082px; height: 579px;" id="window_network" class="abs window ui-draggable ui-resizable">
      <div class="abs window_inner">
        <div class="window_top"> <span class="float_left"> <img src="../images/linuxdesktop/icon_16_network.png"> Network </span> <span class="float_right"> <a href="#" class="window_min"></a> <a href="#" class="window_resize"></a> <a href="#icon_dock_network" class="window_close"></a> </span> </div>
        <div class="abs window_content">
          <div class="window_aside"> Local Network Resources </div>
          <div class="window_main">
            <table class="data">
              <thead>
                <tr>
                  <th class="shrink">&nbsp; </th>
                  <th> Name </th>
                  <th class="shrink"> Operating System </th>
                  <th class="shrink"> Version </th>
                </tr>
              </thead>
              <tbody>
                <tr class="">
                  <td><img src="../images/linuxdesktop/icon_16_server.png"> </td>
                  <td> Urban Terror - <em>Game Server</em> </td>
                  <td> Linux </td>
                  <td> Ubuntu </td>
                </tr>
                <tr class="zebra">
                  <td><img src="../images/linuxdesktop/icon_16_folder_remote.png"> </td>
                  <td> Shared Project Files </td>
                  <td> Linux </td>
                  <td> Red Hat </td>
                </tr>
                <tr class="">
                  <td><img src="../images/linuxdesktop/icon_16_vpn.png"> </td>
                  <td> Remote Desktop VPN </td>
                  <td> Windows </td>
                  <td> XP </td>
                </tr>
                <tr class="zebra">
                  <td><img src="../images/linuxdesktop/icon_16_computer.png"> </td>
                  <td> Michael Scott </td>
                  <td> Mac OS </td>
                  <td> 10.5 </td>
                </tr>
                <tr class="">
                  <td><img src="../images/linuxdesktop/icon_16_computer.png"> </td>
                  <td> Dwight Schrute </td>
                  <td> Mac OS </td>
                  <td> 10.6 </td>
                </tr>
                <tr class="zebra">
                  <td><img src="../images/linuxdesktop/icon_16_computer.png"> </td>
                  <td> Jim Halpert </td>
                  <td> Mac OS </td>
                  <td> 10.6 </td>
                </tr>
                <tr class="">
                  <td><img src="../images/linuxdesktop/icon_16_computer.png"> </td>
                  <td> Pam Beesly </td>
                  <td> Mac OS </td>
                  <td> 10.5 </td>
                </tr>
                <tr class="zebra">
                  <td><img src="../images/linuxdesktop/icon_16_computer.png"> </td>
                  <td> Ryan Howard </td>
                  <td> Mac OS </td>
                  <td> 10.5 </td>
                </tr>
                <tr>
                  <td><img src="../images/linuxdesktop/icon_16_computer.png"> </td>
                  <td> Jan Levinson </td>
                  <td> Mac OS </td>
                  <td> 10.5 </td>
                </tr>
                <tr class="zebra">
                  <td><img src="../images/linuxdesktop/icon_16_computer.png"> </td>
                  <td> Roy Anderson </td>
                  <td> Windows </td>
                  <td> 7 </td>
                </tr>
                <tr class="">
                  <td><img src="../images/linuxdesktop/icon_16_computer.png"> </td>
                  <td> Stanley Hudson </td>
                  <td> Windows </td>
                  <td> Vista </td>
                </tr>
                <tr class="zebra">
                  <td><img src="../images/linuxdesktop/icon_16_computer.png"> </td>
                  <td> Kevin Malone </td>
                  <td> Windows </td>
                  <td> Vista </td>
                </tr>
                <tr>
                  <td><img src="../images/linuxdesktop/icon_16_computer.png"> </td>
                  <td> Angela Martin </td>
                  <td> Windows </td>
                  <td> Vista </td>
                </tr>
                <tr class="zebra">
                  <td><img src="../images/linuxdesktop/icon_16_computer.png"> </td>
                  <td> Oscar Martinez </td>
                  <td> Windows </td>
                  <td> Vista </td>
                </tr>
                <tr class="">
                  <td><img src="../images/linuxdesktop/icon_16_computer.png"> </td>
                  <td> Phyllis Lapin </td>
                  <td> Windows </td>
                  <td> Vista </td>
                </tr>
                <tr class="zebra">
                  <td><img src="../images/linuxdesktop/icon_16_computer.png"> </td>
                  <td> Creed Bratton </td>
                  <td> Windows </td>
                  <td> 7 </td>
                </tr>
                <tr>
                  <td><img src="../images/linuxdesktop/icon_16_computer.png"> </td>
                  <td> Meredith Palmer </td>
                  <td> Windows </td>
                  <td> Vista </td>
                </tr>
                <tr class="zebra">
                  <td><img src="../images/linuxdesktop/icon_16_computer.png"> </td>
                  <td> Toby Flenderson </td>
                  <td> Windows </td>
                  <td> Vista </td>
                </tr>
                <tr>
                  <td><img src="../images/linuxdesktop/icon_16_computer.png"> </td>
                  <td> Darryl Philbin </td>
                  <td> Windows </td>
                  <td> Vista </td>
                </tr>
                <tr class="zebra">
                  <td><img src="../images/linuxdesktop/icon_16_computer.png"> </td>
                  <td> Kelly Kapoor </td>
                  <td> Windows </td>
                  <td> Vista </td>
                </tr>
                <tr>
                  <td><img src="../images/linuxdesktop/icon_16_computer.png"> </td>
                  <td> Andy Bernard </td>
                  <td> Windows </td>
                  <td> Vista </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="abs window_bottom"> LAN: Corporate Intranet </div>
      </div>
      <span style="-moz-user-select: none;" unselectable="on" class="abs ui-resizable-handle ui-resizable-se"></span> <div unselectable="on" style="display: block; -moz-user-select: none;" class="ui-resizable-handle ui-resizable-e"></div><div unselectable="on" style="display: block; -moz-user-select: none;" class="ui-resizable-handle ui-resizable-s"></div><div unselectable="on" style="z-index: 1001; display: block; -moz-user-select: none;" class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div></div>
  </div>
  <div class="abs" id="bar_top">
      <?
  $size_small=1;//液晶宽度
  $size_big=5;//液晶长度
  $distance=2;//间距
  $color_back="#DDDDDD";
  $color_light="#000000";
  $color_dark="#dde";  
  $number=0;
?>
      <div class="clock"><? require_once '/protected/views/windows/clock.php'; ?></div>
<!--      <span title="January 22, 2013" class="float_right" id="clock">Tuesday 2:56 PM</span>-->
    <ul>
      <li> <a class="menu_trigger" href="#">jQuery Desktop</a>
        <ul style="display: none;" class="menu">
          <li> <a target="_blank" href="http://www.lanrenzhijia.com">jQuery Cookbook</a> </li>
          <li> <a href="http://www.lanrenzhijia.com">jQuery Enlightenment</a> </li>
          <li> <a href="http://www.lanrenzhijia.com/">jQuery Home</a> </li>
          <li> <a href="http://www.lanrenzhijia.com">jQuery Mobile</a> </li>
          <li> <a href="http://www.lanrenzhijia.com">jQuery UI</a> </li>
          <li> <a href="http://www.lanrenzhijia.com/">Learning jQuery</a> </li>
        </ul>
      </li>
      <li> <a class="menu_trigger" href="#">HTML5 Resources</a>
        <ul style="display: none;" class="menu">
          <li> <a href="http://www.lanrenzhijia.com">Dive Into HTML5</a> </li>
          <li> <a href="http://www.lanrenzhijia.com/">Get Ready for HTML5</a> </li>
          <li> <a href="http://www.lanrenzhijia.com/">HTML5 Boilerplate</a> </li>
          <li> <a href="http://www.lanrenzhijia.com">HTML5 Doctor</a> </li>
          <li> <a href="http://www.lanrenzhijia.com/">HTML5 Intro</a> </li>
          <li> <a href="http://www.lanrenzhijia.com/">HTML5 Super Friends</a> </li>
        </ul>
      </li>
      <li> <a class="menu_trigger" href="#">Code</a>
        <ul style="display: none;" class="menu">
          <li> <a target="_blank" href="assets/stylesheets/desktop.css">Desktop - CSS</a> </li>
          <li> <a href="assets/javascripts/jquery.desktop.js">Desktop - JavaScript</a> </li>
          <li> <a href="http://www.lanrenzhijia.com">GitHub Repository</a> </li>
        </ul>
      </li>
      <li> <a class="menu_trigger" href="#">Credits</a>
        <ul style="display: none;" class="menu">
          <li> <a href="http://www.lanrenzhijia.com">Demo built by Nathan Smith</a> </li>
          <li> <a href="http://www.lanrenzhijia.com/">Wallpaper by Adrian Rodriguez</a> </li>
          <li> <a href="http://www.lanrenzhijia.com">Icons - Tango Desktop Project</a> </li>
        </ul>
      </li>
    </ul>
  </div><br>

<!--  <div style="width:960px; height:auto; margin:0 auto; padding:10px 0px;">-->
<!--<script type="text/javascript">/*预览底部代码*/ var cpro_id = 'u961809';</script>-->
<!--<script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script><script type="text/javascript" charset="utf-8" src="http://pos.baidu.com/ecom?di=u961809&amp;tm=BAIDU_CPRO_SETJSONADSLOT&amp;fn=BAIDU_CPRO_SETJSONADSLOT&amp;baidu_id="></script><div style="display:none">-</div> <iframe id="cproIframe1" src="http://cpro.baidu.com/cpro/ui/uijs.php?rs=0&amp;tu=u961809&amp;tn=text_default_960_90&amp;n=69070008_cpr&amp;adn=4&amp;rsi1=90&amp;rsi0=960&amp;rad=&amp;rss0=%23FFFFFF&amp;conBW=0&amp;rss1=%23FFFFFF&amp;conOP=0&amp;rss2=%23000000&amp;titFF=%25E5%25AE%258B%25E4%25BD%2593&amp;titFS=12&amp;titTA=left&amp;rss3=%23444444&amp;rss4=%23008000&amp;rss5=&amp;rss6=%23e10900&amp;rsi5=4&amp;ts=1&amp;at=103&amp;ch=0&amp;cad=1&amp;aurl=&amp;rss7=&amp;cpa=1&amp;fv=0&amp;cn=1&amp;if=16&amp;word=http%3A%2F%2Fwww.lanrenzhijia.com%2Fdemo%2F2013%2F0110%2Fd%2F&amp;refer=http%3A%2F%2Fleishiwo31.blog.163.com%2Fblog%2Fstatic%2F48489715201301625527280%2F&amp;ready=1&amp;jk=3fec6a4cb8893812&amp;jn=3&amp;lmt=1357781144&amp;csp=1440,900&amp;csn=1440,870&amp;ccd=24&amp;chi=2&amp;cja=true&amp;cpl=8&amp;cmi=62&amp;cce=true&amp;csl=zh-CN&amp;did=1&amp;rt=24&amp;dt=1358837176&amp;ev=67108864&amp;c01=0&amp;prt=1358837175875&amp;i3=f&amp;anatp=0&amp;styid=0" marginwidth="0" marginheight="0" allowtransparency="true" scrolling="no" align="center,center" frameborder="0" height="90" width="960"></iframe>-->
<!--</div>-->
  <div class="abs" id="bar_bottom"> <a class="float_left" href="#" id="show_desktop" title="Show Desktop"> <img src="../images/linuxdesktop/icon_22_desktop.png"> </a>
    <ul id="dock">
      
      
      
      
    <li style="display: none;" id="icon_dock_drive"> <a href="#window_drive"> <img src="../images/linuxdesktop/icon_22_drive.png"> Hard Drive </a> </li><li style="display: none;" id="icon_dock_disc"> <a href="#window_disc"> <img src="../images/linuxdesktop/icon_22_disc.png"> Audio CD </a> </li><li style="display: none;" id="icon_dock_network"> <a href="#window_network"> <img src="../images/linuxdesktop/icon_22_network.png"> Network </a> </li><li style="display: none;" id="icon_dock_computer"> <a href="#window_computer"> <img src="../images/linuxdesktop/icon_22_computer.png"> Computer </a> </li></ul>
    <a class="float_right" href="http://www.firehost.com/?ref=spon_nsmith_desktop-sonspring" title="Secure Hosting"> <img src="../images/linuxdesktop/firehost.png"> </a> 


<!--<span style="display:none;"><script src="http://s94.cnzz.com/stat.php?id=4106941&amp;web_id=4106941" language="JavaScript"></script><script src="http://c.cnzz.com/cnzz_core.php?web_id=4106941&amp;l=none" charset="utf-8" type="text/javascript"></script><a href="http://www.cnzz.com/stat/website.php?web_id=4106941" target="_blank" title="站长统计">站长统计</a></span>-->
    </div>
</div>
<?php echo CHtml::scriptFile('/js/jquery/jquery.js') ?>
 <?php echo CHtml::scriptFile('/js/jquery/jquery.ui.js') ?>
 <?php echo CHtml::scriptFile('/js/jquery/jquery.desktop.js') ?>
<!--<script src="assets/javascripts/jquery.ui.js"></script>-->
<!--<script src="assets/javascripts/jquery.desktop.js"></script>-->
</body>