﻿<?php
$uid = $_POST['uid'];
$avnumber = $_POST['avnumber'];
$aa=file_get_contents("http://api.bilibili.com/x/web-interface/card?mid=$uid");
$re = json_decode($aa,true);
?>
<!DOCTYPE html>
<html lang="zh-cn" style="width: 100%; height: 100%; overflow: hidden;">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


<title>我的粉丝数</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="full-screen" content="yes">
<meta name="x5-fullscreen" content="true">
<link rel="stylesheet" href="style/css/buttons.css">
<link href="style/css/font-awesome.min.css" rel="stylesheet">
<style type="text/css">
body {
	overflow-x: hidden;
	overflow-y: hidden;
}
</style>
<meta name="description" content="LET IT BE !!!">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
	background-color: #000000;
}
.covervid-wrapper {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}
.github-link {
	position: absolute;
rgba(255, 255, 255, 0.13)  top: 20px;
	right: 20px;
	opacity: 0.15;
	-webkit-transition: 0.4s all ease;
	-moz-transition: 0.4s all ease;
	transition: 0.4s all ease;
}
.github-link:hover {
	opacity: 0.4;
}
.fd {
	position: absolute;
	top: 30%;
	color: rgba(255, 255, 255, 0.78);
	font-size: 40px;
	width: 100%;
	text-align: center;
	font-family: Gotham, "Helvetica Neue", Helvetica, shojo, sans-serif;
}
.fd p {
	font-size: 14px;
}
@font-face {
	font-family: 'shoji';
	src: url('style/images/img/shoji.ttf')format('truetype');
}
@font-face {
	font-family: 'shojo';
	src: url('style/images/img/shojo.ttf')format('truetype');
}
</style>
<style type="text/css">
<!--
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
-->
</style>
<style>
.qq {
	width: 100px;
	height: 100px;
	border-radius: 100px
}


</style>
</head>
<body style="width: 100%; height: 100%; overflow: hidden;"  onselectstart="return false" >
<div class="covervid-wrapper">
<iframe style="width: 100%; height: 100%" src="http://www.1717yun.com/jx/ty.php?url=https://www.bilibili.com/video/av<?php echo $avnumber;?>" scrolling="no" border="0" frameborder="no" framespacing="0" allowfullscreen="false"> </iframe>
<div style="position:absolute;top:0;right:30px;height:100px;width:80px"><a onclick="guanbi()" style="color:rgba(55,140,198,0.3);font-family:'shojo'; font-weight:bold;" target="_blank" title="退出全屏">
  <P>退出全屏
  <P/>
  </a></div>
<div style="position:absolute;top:0;right:120px;height:100px;width:80px"><a onclick="kaishi()" style="color:rgba(55,140,198,0.3);font-family:'shojo'; font-weight:bold;" target="_blank" title="全屏">
  <P>全屏
  <P/>
  </a></div>
<div class="fd">
  <center>
    <br>
  </center>
  <a> <span style="color:rgba(55,140,198,0.8); font-family:'shojo'; font-size:72px; font-weight:bold;"><?php echo $re[data][card][name];?></span> <br>
  <br>
  <br>
  <a> <span style="color:rgba(55,140,198,0.8); font-family:'shoji'; font-size:92px;  font-weight:bold;"><?php echo $re[data][card][fans];?></span> <br>
</div>
<script src="style/js/jquery.min.js"></script> 
<script src="style/js/covervid.js"></script> 
<script type="text/javascript">
			$('.covervid-video').coverVid(1920, 1080);
		</script> 
<script src="style/js/jquery.js"></script> 
<script src="style/js/acgface.scrollPage.min.js"></script> 
<script src="style/js/index.min.js"></script> 
<script>  
    function kaishi()  
    {  
  
  
        var docElm = document.documentElement;  
        //W3C   
        if (docElm.requestFullscreen) {  
            docElm.requestFullscreen();  
        }  
            //FireFox   
        else if (docElm.mozRequestFullScreen) {  
            docElm.mozRequestFullScreen();  
        }  
            //Chrome等   
        else if (docElm.webkitRequestFullScreen) {  
            docElm.webkitRequestFullScreen();  
        }  
            //IE11   
        else if (elem.msRequestFullscreen) {  
            elem.msRequestFullscreen();  
        }  
    }  
  
    function guanbi() {  
  
  
        if (document.exitFullscreen) {  
            document.exitFullscreen();  
        }  
        else if (document.mozCancelFullScreen) {  
            document.mozCancelFullScreen();  
        }  
        else if (document.webkitCancelFullScreen) {  
            document.webkitCancelFullScreen();  
        }  
        else if (document.msExitFullscreen) {  
            document.msExitFullscreen();  
        }  
    }  
  
  
  
  
    document.addEventListener("fullscreenchange", function () {  
          
        fullscreenState.innerHTML = (document.fullscreen) ? "" : "not ";  
    }, false);  
     
  
      
    document.addEventListener("mozfullscreenchange", function () {  
         
        fullscreenState.innerHTML = (document.mozFullScreen) ? "" : "not ";  
    }, false);  
      
  
     
    document.addEventListener("webkitfullscreenchange", function () {  
          
        fullscreenState.innerHTML = (document.webkitIsFullScreen) ? "" : "not ";  
    }, false);  
      
    document.addEventListener("msfullscreenchange", function () {  
          
        fullscreenState.innerHTML = (document.msFullscreenElement) ? "" : "not ";  
    }, false);  
  
  
  
  
</script>
<script type="text/javascript" src="style/js/count.js"></script>
</body>
</html>