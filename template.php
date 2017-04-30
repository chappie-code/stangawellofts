<?php
$self=explode("/",$_SERVER['PHP_SELF']);
$numero=explode(".",$self[1]);
if (!file_exists("$numero[0].txt")){
$fp=fopen("$numero[0].txt", "a");//<!--     opens the file if it does not exist      -->
chmod("$numero[0].txt", 0766);
fclose($fp);
}

	$Lines=file("$numero[0].txt"); //<!--file() returns the entire contents of the file as an array. Each element in the array will correspond to a line of information in the file.-->
    $unique=array_unique($Lines); 
	$length = sizeof($unique);
	//print '<center><font color="#ffffff" size="-3">'.$length.'</font></center>';// <!--  Print size of the array-->
	
    $filename = "$numero[0].txt";// <!-- Name of the file that holds the addresses -->
    $fstring = file_get_contents($filename);// <!--  Read the contents of the file into a string  -->
    $address = "".$_SERVER['REMOTE_ADDR']."";// <!--  Get the address of the visitor -->
	$pos = strpos($fstring, $address);
    if ($pos === false)// <!--  If the file doesnt contain the new address   Is the needle $address in the haystack $fstring?   -->
    {
		$fp = fopen($filename,"a+");// <!--  Open the file -->
		$add = $address." \n";
		fwrite($fp, $add);
		fclose($fp);		
    }
	else{print"<center  style='visibility: hidden'>$pos</center>";}//<!-- my address  -->
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html>
<head>
<script language="JavaScript" src="../scripts/error.js"></script>
<style type="text/css">
<!--
a:link    {color: #ffffff; text-decoration:none;  font-family: times, serif; visibility: visible; font-style: italic; font-weight:bold;}
a:visited {color: #ffffff; text-decoration:none;  font-family: times, serif; visibility: visible; font-style: italic; font-weight:bold;}
a:active  {color: #ff0000;  text-decoration:none;  font-family: times, serif; visibility: visible; font-style: italic; font-weight:bold;}
a:hover   {color: #ff0000; text-decoration:none;   font-family: times, serif; visibility: visible; font-style: italic; font-weight:bold;}
body      {
		  scrollbar-face-color: #999999; 
		  scrollbar-shadow-color: #666666; 
          scrollbar-highlight-color: #ffffff; 
		  scrollbar-3dlight-color: #CCCCCC; 
		  scrollbar-darkshadow-color: #666666; 
		  scrollbar-track-color: #000000; 
		  scrollbar-arrow-color: #000000 
		  }
-->
</style>

<title> </title>
</head>
<body  bgcolor="#D2D2D2"  text="#000000">
<table bgcolor="#000000" bordercolorlight="#ebebeb" bordercolordark="#525252" align="center" border="11" cellpadding="7" width="666"><tr><td>
<?php print '<font color="#ffffff" size="-3">'.$length.'</font>';?>
<font color="#ffffff"><center><h1><i>
</i></h1></center></font><center>
<br>
<br>
<br> 
 <DIV style="position: relative; left: 266px; top: 0px; z-index: 1; font-weight: normal; font-style: italic; font-family: brush script mt, cursive, sans-serif; font-size: 14pt; color: #ffffff;">images by Karl Frank</DIV>
<br>

</center>
</td></tr></table>
</font><center><img src="../images/spacer.gif" width="1" height="22" border="0"></center>
<center><img src="../images/spacer.gif" width="1" height="22" border="0"></center>
<table border="4" cellpadding="3" bgcolor="#858585" bordercolorlight="#ebebeb" bordercolordark="#525252" align="center"><tr><td>
<A HREF="#" onclick="window.close(); return true"><font size="6">- Close this Window -</font> </A></td></tr></table>  



</body></html>


