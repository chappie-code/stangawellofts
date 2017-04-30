<?php
$Bird_Files='Sales_Directory';
if (!file_exists($Bird_Files)){mkdir($Bird_Files, 0755);}

$name='Stan';
$title='Zenon Skuba';
$unique = '';
$end='end';// so that it does not read the previous last member.
$background_color_table='#E3E3E3';
$background_color_table_head='#CCCCCC';
$background_color_button='#A1A1A1';
$background_color_field='#F5F5F5';
$spacer='images/spacer.gif';
$arrow='images/arrow1.gif';
$bgcolor_body='#D2D2D2';  
$text_body='#000000';
$text_button='#ffffff';
$style ='
<script language="JavaScript">
function clearText(thefield){
if (thefield.defaultValue==thefield.value)
thefield.value = ""
} 
</script>
<style type="text/css">
<!--
a:link    {color: #000000; text-decoration:none;  font-family: times, serif; visibility: visible; font-style: italic; font-weight:bold;}
a:visited {color: #A1A1A1; text-decoration:none;  font-family: times, serif; visibility: visible; font-style: italic; font-weight:bold;}
a:active  {color: #ff0000;  text-decoration:none;  font-family: times, serif; visibility: visible; font-style: italic; font-weight:bold;}
a:hover   {color: #ff0000; text-decoration:none;   font-family: times, serif; visibility: visible; font-style: italic; font-weight:bold;}
body      {}
-->
</style>
';
$menu='
<div id="menubackground">&nbsp;</div>

<script type="text/javascript">
function Go(){return}
</script>
<script type="text/javascript" src="scripts/exmplmenu_var.js"></script>
<script type="text/javascript" src="scripts/menu_com.js"></script>
';

$top='
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html>
<head>
	<title>'.$title.'</title>
'.$style.'
<script language="JavaScript1.2">
function reapply(){
setTimeout("slideit()",1000)
return true
}
window.onerror=reapply
</script>
<script language="JavaScript1.1">
<!--
var image1=new Image()
image1.src="images/Skuba1.jpg"
var image2=new Image()
image2.src="images/Skuba2.jpg"
var image3=new Image()
image3.src="images/Skuba3.jpg"
var image4=new Image()
image4.src="images/Skuba4.jpg"
var image5=new Image()
image5.src="images/Skuba5.jpg"
var image6=new Image()
image6.src="images/Skuba6.jpg"
var image7=new Image()
image7.src="images/Skuba7.jpg"
var image8=new Image()
image8.src="images/Skuba8.jpg"
//-->
</script>
<script language="JavaScript" src="scripts/sitemap.js"></script>
</head>
<body  bgcolor="'.$bgcolor_body.'"  text="'.$text_body.'" topmargin="0" leftmargin="22"  onLoad="slideit();preloadImages()">
'.$menu.'

	<center style="position:relative; left: 0px; top: 33px; z-index: 2"><h1>Zenon Skuba</h1><hr size="2" width="333" color="'.$background_color_button.'">
	Brooklyn, NEW YORK, U.S.A.<br>
	E-mail: zenonskubal@wp.pl<br>
	Phone #: 1-718-837-0144</center>
<center><img src="images/Skuba8.jpg" name="slide" border=0 style="filter:blendTrans(duration=3)" width="555" height="555" style="position:relative; left: 0px; top: -66px; z-index: 1"></center>
<script>
<!--
////change number of images below
var number_of_images=8
//change speed below (in seconds)
var speed=2
var step=2
var whichimage=1
function slideit(){
if (!document.images)
return
if (document.all)
slide.filters.blendTrans.apply()
document.images.slide.src=eval("image"+step+".src")
if (document.all)
slide.filters.blendTrans.play()
whichimage=step
if (step<number_of_images)
step++
else
step=1
if (document.all)
setTimeout("slideit()",speed*1500+3000)
else
setTimeout("slideit()",speed*1000)
}
//-->
</script>
';
  
$footer='
</body>
</html>
';

	print $top;
	print'<center><img src="'.$spacer.'" width="1" height="44" border="0"></center>';
	print $footer;
   	exit();  

?>