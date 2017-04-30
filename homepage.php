<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">

<html>
<head>
	<title>Home page</title>
	<LINK REL="stylesheet" HREF="CSS/MyStyles.css" TYPE="text/css" />
	<script language="JavaScript" src="scripts/sitemap.js"></script>
	<script language="JavaScript" src="scripts/jquery.1.6.2.min.js"></script>
</head>

<body>
<!-- Menu -->
<div id="menubackground">&nbsp;</div>

<script type="text/javascript">function Go(){return}</script>
<script type="text/javascript" src="scripts/exmplmenu_var.js"></script>
<script type="text/javascript" src="scripts/menu_com.js"></script>
<center><img src="spacer.gif" width="1" height="22" border="0"></center>

<table align="center">
	<tr>
	   <td colspan="7">
		   <img src="images/StanGawelLots.jpg" width="485" height="58" border="0">
	   </td>
   </tr>
   <tr>
	   <td><img src="images/flags/flag_canada.png" /></td>
		 <td><img src="images/flags/flag_poland.png" /></td>
	   <td><img src="images/flags/flag_belgium.png" /></td>
	   <td><img src="images/flags/flag_england.png" /></td>
	   <td><img src="images/flags/flag_germany.png" /></td>
	   <td><img src="images/flags/flag_usa.png" /></td>
	   <td><img src="images/flags/flag_netherlands.png" /></td>
   </tr>
</table>
<table id="imagetable" width="935" height="666" align="center" style='background-image: url(http://www.stangawellofts.ca/images/GawelResidence1.jpg);  background-position: center 0px; background-repeat: no-repeat;'>
	<tr>
		<td></td>
	</tr>
</table>

<div  align="center">Clicking on an image below will enlarge it for you.<br>
   <a id="image1" href="#" style="width:100px;height:65px;">
	   <img border="0" src="images/GawelResidence1.jpg" alt="Stan's Residence" width="100" height="65" style="border:2px solid blue;"></a>
   <a id="image2" href="#" style="width:100px;height:65px;">
	   <img border="0" src="images/small_loft1.jpg" alt="Stan's loft" width="100" height="65"></a>
	<a id="image3" href="#" style="width:100px;height:65px;">
		<img border="0" src="images/small_stan_mike.jpg" alt="Ganus Family Loft Birds &amp; Vita King Products in Canada" width="110" height="67"></a>
</div>
<!--                         end of header                               -->

<!--                     footer                           -->
<script type="text/javascript" src="scripts/jsFooter.js"></script>

<script>
	$(document).ready(function(){
		var sMsg;
		var j_imagetable = $("#imagetable");
	/**
		sMsg ="doc ready";
		if (j_imagetable.length <= 0)
			sMsg = " - No Table";
		
		if ($("#image1").length <= 0)
			sMsg = " - No Image 1";
	
		alert(sMsg);
	**/
		$("#image1").click(function(){
			fnClear();
			$(this).find("img").css({"border":"2px solid blue"});
			
			j_imagetable.css({"background-image":"url('http://www.stangawellofts.ca/images/GawelResidence1.jpg')"});
		});
		$("#image2").click(function(){
			fnClear();
			$(this).find("img").css({"border":"2px solid blue"});
		
			j_imagetable.css({"background-image":"url('http://www.stangawellofts.ca/images/loft1.jpg')"});
		});
		$("#image3").click(function(){
			fnClear();
			$(this).find("img").css({"border":"2px solid blue"});
		
			j_imagetable.css({"background-image":"url('http://www.stangawellofts.ca/images/stan_mike.jpg')"});
		});
	
		function fnClear(){
			$("#image1").find("img").css({"border":"none"});
			$("#image2").find("img").css({"border":"none"});
			$("#image3").find("img").css({"border":"none"});
			
			return true
		}
		
	})
</script>

</BODY>
</HTML>





