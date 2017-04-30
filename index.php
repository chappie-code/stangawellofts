<!DOCTYPE html>
<html>
<head>
	<title>Stan Gawel's Site</title>
	<link rel="stylesheet" href="CSS/MyStyles.css" type="text/css">
	<script language="JavaScript1.2">
		function reapply(){
			setTimeout("slideit()",1000)
			return true
		}
		window.onerror=reapply
	</script>
	<script language="JavaScript1.1">
		var image1=new Image()
		image1.src="images/StanA.jpg"
		var image2=new Image()
		image2.src="images/Stan2.jpg"
		var image3=new Image()
		image3.src="images/Stan3.jpg"
		var image4=new Image()
		image4.src="images/Stan4.jpg"
		var image5=new Image()
		image5.src="images/Stan5.jpg"
		var image6=new Image()
		image6.src="images/Stan6.jpg"
	</script>
	<script language="JavaScript" src="scripts/sitemap.js"></script>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43074305-1', 'stangawellofts.ca');
  ga('send', 'pageview');

</script>
</head>

<body bgcolor="#C9E7F5" topmargin="0" leftmargin="33"  rightmargin="33" text="#000000" onLoad="">
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
	
	<center><img src="images/StanA.jpg" name="slide" border=0 style="" width="555" height="369" style="position:relative; left: 0px; top: 0px; z-index: 1"></center>
	<script>
		////change number of images below
		var number_of_images=6
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
	</script>
	<!--                         end of header                               -->

	<!--                     footer                           -->
	<script type="text/javascript" src="scripts/jsFooter.js"></script>

</body>
</html>
