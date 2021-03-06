<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">

<html>
	<head>
		<title>Breeding Catalogue</title>
		<link rel="stylesheet" href="CSS/MyStyles.css" type="text/css">
		<link title="prettyPhoto main stylesheet" href="CSS/prettyPhoto.css" rel="stylesheet" type="text/css" media="screen" charset="utf-8"/>
		<script type="text/javascript" src="scripts/sitemap.js"></script>
		<script language="JavaScript">
			var NS4 = (document.layers);
			var IE4 = (document.all);

			var win = this;
			var n = 0;

			function findInPage(str) {
				var txt, i, found;
				if (str == "")
					return false;
				if (NS4) {
					if (!win.find(str))
						while (win.find(str, false, true))
						n++;
					else
						n++;
					if (n == 0)
						alert(str + " was not found on this page.");
				}
				if (IE4) {
					txt = win.document.body.createTextRange();
					for ( i = 0; i <= n && ( found = txt.findText(str)) != false; i++) {
						txt.moveStart("character", 1);
						txt.moveEnd("textedit");
					}
					if (found) {
						txt.moveStart("character", -1);
						txt.findText(str);
						txt.select();
						txt.scrollIntoView();
						n++;
					} else {
						if (n > 0) {
							n = 0;
							findInPage(str);
						} else
							alert(str + " was not found on this page.");
					}
				}
				return false;
			}
		</script>
		<script LANGUAGE="JavaScript">
			function putFocus(formInst, elementInst) {
				if (document.forms.length > 0) {
					document.forms[formInst].elements[elementInst].focus();
				}
			}
		</script>
		
		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43074305-1', 'stangawellofts.ca');
  ga('send', 'pageview');

</script>

<style>
	table{
		min-width:800px;
	}
</style>
	</head>
	<body>
		<!-- Menu -->
		<div id="menubackground">
			&nbsp;
		</div>

		<script type="text/javascript">
			function Go() {
				return
			}
		</script>
		<script type="text/javascript" src="scripts/exmplmenu_var.js"></script>
		<script type="text/javascript" src="scripts/menu_com.js"></script>
		<!------------------------------------------------ ---------------------------------------------->
		<center>
			<a href="Overview.html" target="_self">
			<img src="images/arrow2.gif" width="10" height="10" border="0">
			Printable Version</a>
		</center>

		<!-- div style="background-color:#ddd;border-style:solid;border-width:1px; border-color:white;border-right-color:#333;border-bottom-color:#333;width:180px;">
			<div style="border-style:solid;border-width:1px; border-color:white;border-left-color:#333;border-top-color:#333;width:178px;">
				<div style="padding:1px;">
					<a href="sale.php">
					<img src="images/star1.gif" width="47" height="47" border="0">
					<img src="images/for-sale-clipart44.gif" width="69" height="55" border="0">
					<img src="images/star1.gif" width="47" height="47" border="0">
					</a>
				</div>
			</div>
		</div -->

		<table align="center">
			<tr>
				<td colspan="7">
				<img src="images/StanGawelLots.jpg" width="485" height="58" border="0">
				</td>
			</tr>
			<tr>
				<td>
				<img src="images/flags/flag_canada.png" />
				</td>
				<td>
				<img src="images/flags/flag_poland.png" />
				</td>
				<td>
				<img src="images/flags/flag_belgium.png" />
				</td>
				<td>
				<img src="images/flags/flag_england.png" />
				</td>
				<td>
				<img src="images/flags/flag_germany.png" />
				</td>
				<td>
				<img src="images/flags/flag_usa.png" />
				</td>
				<td>
				<img src="images/flags/flag_netherlands.png" />
				</td>
			</tr>
		</table>
		<div style="width:500px;height:100px;x-index:5;margin:0 auto;text-align:center;">
			<h1><i>Breeding Catalogue</i></h1>
		</div>

		<center>
			<div id="my_slideshow" class="slideshow" align='center'>
				<img src='images/StanA.jpg' border=0  width='555' height='369' style='position:relative; left: 0px; top: -60px; z-index: 1'>
			</div>
		</center>

		<script type="text/javascript">
			var browserName = navigator.appName;
			if (browserName == "Microsoft Internet Explorer") {
				document.write("<Div style=\"position:relative; left: 0px; top: -144px; z-index: 11\">")
			} else {
				document.write("<Div style=\"position:relative; left: 0px; top: -77px; z-index: 11\">")
			}
		</script>

		<p align="center">
			<center>
				<form name="search"
				onsubmit="return findInPage(this.string.value);">
					<input type="text" size="35" name="string" maxlength="256" value="search this page only" onFocus="clearText(this)" style="background-color: #EBF3F7">
					&nbsp;
					<input type="submit" value="Find on this page (for IE)"   style="background-color: #7BB8D4;">
				</form>
			</center>
		</p>
		<!------------------------------------------------ ---------------------------------------------->
		<table>
			<colgroup>
				<col style="width:111px;">
				</col>
				<col style="width:111px;">
				</col>
				<col style="width:111px;">
				</col>
				<col style="width:111px;">
				</col>
				<col style="width:111px;">
				</col>
			</colgroup>
			<tr>
				<td colspan="5">
				<center>
					<font size="4"><b><i>KAROL PASZEK</i></b></font>
				</center></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td><a title="04 PL 020-4108" href="bird_list/images/4108.jpg">
				<img src="bird_list/images/4108s.jpg" width="130"   border="0" alt="KAROL PASZEK">
				<center>
					04 PL 020-4108
				</center></a></td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td colspan="5">
				<center>
					<h1>Canadian Racing Pigeon Union Year Book 2011</h1>
					<h2>Stan Gawel - "Karol Paszek" - PL-020-03-808</h2>
					<a href="pages/Stan_gawell_lofts_red_4108.jpg"><img src="pages/Stan_gawell_lofts_red_4108_thumb.jpg" width="750" border="0"></a>
				</center></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><a title="09 PL 030-6098" href="bird_list/images/6098.jpg">
				<img src="bird_list/images/6098s.jpg" width="130"   border="0" alt="KAROL PASZEK">
				<center>
					09 PL 030-6098
				</center></a></td>
				<td>&nbsp;</td>
				<td><a title="CU 2011 2 <br/> Cock" href="bird_list/images/6098.jpg">
				<img src="bird_list/images/6098s.jpg" width="130"   border="0" alt="KAROL PASZEK">
				<center>
					CU 2011 2
					<br/>
					Cock
				</center></a></td>
				<td>&nbsp;</td>
			</tr>
		</table>

		<center>
			<img src="spacer.gif" width="1" height="44" border="0">
		</center>
		
		
		
		<table bordercolorlight="#f3f9fe" bordercolordark="#0a78ad" border="9" align="center" style=" background-repeat: no-repeat; background-attachment: scroll; background-position: center 0px;">
			<colgroup>
				<col style="width:111px;">
				</col>
				<col style="width:111px;">
				</col>
				<col style="width:111px;">
				</col>
				<col style="width:111px;">
				</col>
				<col style="width:111px;">
				</col>
			</colgroup>
			<tr height="333">
				<td colspan="5"  valign="bottom" align="center">
				<center>
					<img src="/Louis_van_Loon.jpg" />
					<h1><i>Original Van Loons</i></h1>
					<h2>(Direct from Mr. Van Loon)</h2>
				</center></td>
			</tr>
			
			<tr><td colspan="5"><h2>Cocks</h2></td></tr>
			<tr>
				<td><a title="2006 BELG 6413523" href="pigeons/sg_06B6413523.jpg">
					<img src="pigeons/sg_06B6413523.jpg" width="130"   border="0" alt="Van Loons">
					<center>
						2006 BELG 6413523 - Cock
						
					</center></a>
					<a href="profile.php?tag_id=6413523&yr=06&breed=B">Pedigree</a>
				
				</td>
				<td><a title="2007 BELG 6390865" href="pigeons/sg_07B6390865.jpg">
				<img src="pigeons/sg_07B6390865.jpg" width="130"   border="0" alt="Van Loons">
				<center>
					2007 BELG 6390865 - Cock
				</center></a>
				<a href="profile.php?tag_id=6390865&yr=07&breed=B">Pedigree</a>
				</td>
				<td><a title="2006 BELG 6412562" href="pigeons/sg_06B6412562.jpg">
				<img src="pigeons/sg_06B6412562.jpg" width="130"   border="0" alt="Van Loons">
				<center>
					2006 BELG 6412562 - Cock
				</center></a>
				<a href="profile.php?tag_id=6412562&yr=06&breed=B">Pedigree</a>
				</td>
				<td><a title="2006 BELG 6230993" href="pigeons/sg_06B6230993.jpg">
				<img src="pigeons/sg_06B6230993.jpg" width="130"   border="0" alt="Van Loons">
				<center>
					2006 BELG 6230993 - Cock
				</center></a>
				<a href="profile.php?tag_id=6230993&yr=06&breed=B">Pedigree</a>
				</td>
				<td><a title="2006 BELG 6413584" href="pigeons/sg_06B6413584.jpg">
				<img src="pigeons/sg_06B6413584.jpg" width="130"   border="0" alt="Van Loons">
				<center>
					2006 BELG 6413584 - Cock
				</center></a>
				<a href="profile.php?tag_id=6413584&yr=06&breed=B">Pedigree</a>
				</td>
			</tr>
			<tr>
				<td><a title="2011 BELG 6133605" href="pigeons/sg_11B6133605.jpg">
				<img src="pigeons/sg_11B6133605.jpg" width="130"   border="0" alt="Van Loons">
				<center>
					2011 BELG 6133605 - Cock
				</center></a>
				<a href="profile.php?tag_id=6133605&yr=11&breed=B">Pedigree</a>
				</td>
				<td><a title="2011 BELG 6340083" href="pigeons/sg_11B6340083.jpg">
				<img src="pigeons/sg_11B6340083.jpg" width="130"   border="0" alt="Van Loons">
				<center>
					2011 BELG 6340083 - Cock
				</center></a>
				<a href="profile.php?tag_id=6340083&yr=11&breed=B">Pedigree</a>
				</td>
				<td><a title="2011 BELG 6133749" href="pigeons/sg_11B6133749.jpg">
				<img src="pigeons/sg_11B6133749.jpg" width="130"   border="0" alt="Van Loons">
				<center>
					2011 BELG 6133749 - Cock
				</center></a>
				<a href="profile.php?tag_id=6133749&yr=11&breed=B">Pedigree</a>
				</td>
				<td><a title="2011 BELG 6133641" href="pigeons/sg_11B6133641.jpg">
				<img src="pigeons/sg_11B6133641.jpg" width="130"   border="0" alt="Van Loons">
				<center>
					2011 BELG 6133641 - Cock
				</center></a>
				<a href="profile.php?tag_id=6133641&yr=11&breed=B">Pedigree</a>
				</td>
				<td><a title="2011 BELG 6133634" href="pigeons/sg_11B6133634.jpg">
				<img src="pigeons/sg_11B6133634.jpg" width="130"   border="0" alt="Van Loons">
				<center>
					2011 BELG 6133634 - Cock
				</center></a>
				<a href="profile.php?tag_id=6133634&yr=11&breed=B">Pedigree</a>
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><a title="2006 BELG 6413593" href="bird_list/images/6413593.jpg">
				<img src="bird_list/images/6413593s.jpg" width="130"   border="0" alt="Van Loons">
				<center>
					2006 BELG 6413593 - Cock
				</center></a>
				<a href="profile.php?tag_id=6413593&yr=06&breed=B">Pedigree</a></td>
				<td></td>
				<td></td>
			</tr>
			<tr><td colspan="5"><h2>Hens</h2></td></tr>
			<tr>
				<td><a title="2009 BELG 6301985" href="pigeons/sg_09B6301985.jpg">
				<img src="pigeons/sg_09B6301985.jpg" width="130"   border="0" alt="Van Loons">
				<center>
					2009 BELG 6301985 - Hen
				</center></a>
				<a href="profile.php?tag_id=6301985&yr=09&breed=B">Pedigree</a>
				</td>
				<td><a title="2009 BELG 6301971" href="pigeons/sg_09B6301971.jpg">
				<img src="pigeons/sg_09B6301971.jpg" width="130"   border="0" alt="Van Loons">
				<center>
					2009 BELG 6301971 - Hen
				</center></a>
				<a href="profile.php?tag_id=6301971&yr=09&breed=B">Pedigree</a>
				</td>
				<td><a title="2009 BELG 6301990" href="pigeons/sg_09B6301990.jpg">
				<img src="pigeons/sg_09B6301990.jpg" width="130"   border="0" alt="Van Loons">
				<center>
					2009 BELG 6301990 - Hen
				</center></a>
				<a href="profile.php?tag_id=6301990&yr=09&breed=B">Pedigree</a>
				</td>
				<td><a title="2006 BELG 6334367" href="pigeons/sg_06B6334367.jpg">
				<img src="pigeons/sg_06B6334367.jpg" width="130"   border="0" alt="Van Loons">
				<center>
					2006 BELG 6334367 - Hen
				</center></a>
				<a href="profile.php?tag_id=6334367&yr=06&breed=B">Pedigree</a>
				</td>
				<td><a title="2006 BELG 6334367" href="pigeons/sg_06B6334367.jpg" >
				<img src="pigeons/sg_06B6334367.jpg" width="130"   border="0" alt="Van Loons">
				<center>
					2006 BELG 6334367 - Hen
					
				</center></a>
				<a href="profile.php?tag_id=6334367&yr=06&breed=B">Pedigree</a>
				</td>
			</tr>
			
			
			<tr>
				<td><a title="2011 Belg 6340090" href="pigeons/sg_11B6340090.jpg">
				<img src="pigeons/sg_11B6340090.jpg" width="130"   border="0" alt="Van Loons">
				<center>
					2011 Belg 6340090 - Hen
					
				</center></a>
				<a href="profile.php?tag_id=6340090&yr=11&breed=B">Pedigree</a>
				</td>
				<td></td>
				<td><a title="2011 Belg 6340085" href="pigeons/sg_11B6340085.jpg">
				<img src="pigeons/sg_11B6340085.jpg" width="130"   border="0" alt="Van Loons">
				<center>
					2011 Belg 6340085 - Hen
					
				</center></a>
				<a href="profile.php?tag_id=6340085&yr=11&breed=B">Pedigree</a>
				</td>
				<td>&nbsp;</td>
				<td><a title="2011 BELG 6133643" href="pigeons/sg_11B6133643.jpg">
				<img src="pigeons/sg_11B6133643.jpg" width="130"   border="0" alt="Van Loons">
				<center>
					2011 BELG 6133643 - Hen
					
				</center></a>
				<a href="profile.php?tag_id=6133643&yr=11&breed=B">Pedigree</a>
				</td>
				
			</tr>
			
			
		</table>
		<center>
			<img src="spacer.gif" width="1" height="44" border="0">
		</center>
		
		<table>
			<colgroup>
				<col style="width:111px;">
				</col>
				<col style="width:111px;">
				</col>
				<col style="width:111px;">
				</col>
				<col style="width:111px;">
				</col>
				<col style="width:111px;">
				</col>
			</colgroup>
			<tr>
				<td colspan="5">
				<center>
					<h1>Van Loon</h1>
				</center></td>
			</tr>
			<tr>
				<td><a title="2011 CU 171" href="pigeons/sg_11CU171.jpg">
				<img src="pigeons/sg_11CU171.jpg" width="130"   border="0" alt="Van Loons">
				<center>
					2011 CU 171 - Cock
				</center></a></td>
				<td>&nbsp;</td>
				<td><a title="2009 NL 1778284" href="pigeons/sg_09NL1778284.jpg">
				<img src="pigeons/sg_09NL1778284.jpg" width="130"   border="0" alt="Van Loons">
				<center>
					2009 NL 1778284 - Hen
					<br/>
				</center></a></td>
				<td>&nbsp;</td>
				<td><a title="AU 2007 GFL 910" href="bird_list/images/910.jpg" >
				<img src="bird_list/images/910s.jpg" width="130"   border="0" alt="Van Loons">
				<center>
					AU 2007 GFL 910 - Hen
					<br/>
				</center></a></td>
			</tr>
		</table>
		
		
		<center>
			<img src="spacer.gif" width="1" height="44" border="0">
		</center>
		
		<table bordercolorlight="#f3f9fe" bordercolordark="#0a78ad" border="9" align="center" style="background-repeat: no-repeat; background-attachment: scroll; background-position: center 0px;">
			<colgroup>
				<col style="width:111px;">
				</col>
				<col style="width:111px;">
				</col>
				<col style="width:111px;">
				</col>
				<col style="width:111px;">
				</col>
				<col style="width:111px;">
				</col>
				<col style="width:111px;">
				</col>
			</colgroup>
			<tr>
				<td colspan="7">
				<center>
					<h1>Van Loon</h1>
				</center></td>
			</tr>
			<tr>
				<td colspan="7">
					<h3 style="text-align: center;margin-bottom:0">Father</h3>
					<a title="1997 Belg 6270379" href="bird_list/images/6270379.jpg">
					
					<img src="bird_list/images/6270379s.jpg" width="130"   border="0" alt="Van Loons">
					
					<center>
						
						1997 Belg 6270379
						
					</center></a>
				</td>
			</tr>
			<tr>
				<td colspan="7">
				<center>
					<h3>Youngsters</h3>
				</center></td>
			</tr>
			<tr>
				<td><a title="CU 2009 154 <br /> Cock" href="bird_list/images/cu09154.jpg">
				<img src="bird_list/images/cu09154s.jpg" width="130"   border="0" alt="Van Loons">
				<center>
					CU 2009 154 - Cock
				</center></a></td>
				<td><a title="2010 CU 732" href="pigeons/sg_10CU732.jpg">
				<img src="pigeons/sg_10CU732.jpg" width="130"   border="0" alt="Van Loons">
				<center>
					2010 CU 732 <br/>
				<br/>
				</center></a></td>
				<td><a title="2009 CU 17" href="pigeons/sg_09CU17.jpg">
				<img src="pigeons/sg_09CU17.jpg" width="130"   border="0" alt="Van Loons">
				<center>
					2009 CU 17 <br/>
				<br/>
				</center></a></td>
				<td><a title="2009 CU 16" href="pigeons/sg_09CU16.jpg">
				<img src="pigeons/sg_09CU16.jpg" width="130"   border="0" alt="Van Loons">
				<center>
					2009 CU 16 <br/>
				<br/>
				</center></a></td>
				<td><a title="2011 CU 61" href="pigeons/sg_11CU61.jpg">
				<img src="pigeons/sg_11CU61.jpg" width="130"   border="0" alt="Van Loons">
				<center>
					2011 CU 61 <br/>
				<br/>
				</center></a></td>
				<td><a title="2011 CU 77" href="pigeons/sg_11CU77.jpg">
				<img src="pigeons/sg_11CU77.jpg" width="130"   border="0" alt="Van Loons">
				<center>
					2011 CU 77 <br/>
				<br/>
				</center></a></td>
				<td><a title="2011 CU 179" href="pigeons/sg_11CU179.jpg">
				<img src="pigeons/sg_11CU179.jpg" width="130"   border="0" alt="Van Loons">
				<center>
					2011 CU 179 <br/>
				<br/>
				</center></a></td>
			</tr>
		</table>

		

				<center><img src="spacer.gif" width="1" height="44" border="0"></center>
				<table>
				<colgroup><col style="width:111px;"></col><col style="width:111px;"></col><col style="width:111px;"></col><col style="width:111px;"></col><col style="width:111px;"></col></colgroup>
				<tr>
				<td colspan="5"><center><i><h2>Topo</h2></i></center></td>
				</tr>
				<tr>
				<td colspan="5"><a title="2001 GFL 568" href="pigeons/sg_01GFL568.jpg"><img src="images/topo_pic.jpg" width="555" height="420" border="0" alt="Mike Ganus"><center>2001 GFL 568</center></a></td>
				</tr>
				<tr>
				<td colspan="5">
				<div style="width:560px;margin:0 auto;">
				<p>
				1st National Ace W.H.Z.B. Middle Distance All Holland 1995
				</p>
				<p>
				I've had many super pigeons over the last 25 years like Champion 180, Continental Class,
				Champion 969, The Bull 777 and the champions pictured here in this Gallery of Champions
				book.  Now I want to mention a little about my favorites for the past 10 years, Topo.  One of
				the legendary breeders here in America and in Europe.  Why?  Because of the success of
				his offspring.  Like winning 1st National Etampes from 270 miles vs 16,335 birds on August
				11, 2001 in my own racing and breeding loft in Holland.  Now that is a thrill.  No other
				American has ever won a National race in Europe and I am proud to be the first.
				</p>
				<p>
				Topo's offspring bred the Vegas winner winning $74,000, the King Cup hen winning $27,000,
				the Viola Race Winner winning $55,000.  Plus over 150+ winners across the world with over
				30 winners just at our loft in Holland.  Topo has made me very happy many times.
				</p>
				</div>
				<div style="width:580px;text-align:left;">
				<table id="tblResults1">
				<tr><td> 1st Lommel</td><td>3,302 birds</td><td>250 miles </td></tr>
				<tr><td>1st Houdeng</td><td> 8,251 birds</td><td>250 miles</td></tr>
				<tr><td>1st Reims</td><td>4,246 birds</td><td>300 miles</td></tr>
				<tr><td>1st Chantilly</td><td>1,167 birds</td><td>200 miles</td></tr>
				<tr><td>2nd Roye</td><td>1,351 birds</td><td> 200 miles</td></tr>
				<tr><td>10th Heverlee</td><td>3,371 birds</td><td> 150 miles</td></tr>
				</table>
				<br />
				</div>
				</td>
				</tr>
				<tr>
					<td colspan="2">&nbsp;</td>
					<td><a title="" href="pigeons/sg_01GFL568.jpg"><img src="pigeons/sg_01GFL568.jpg" width="130"   border="0" alt="Topo"><center>2001 GFL 568<br /></center></a></td>
					<td colspan="2">&nbsp;</td>
				</tr>
				<tr>
					<td colspan="5"><center><h3>Youngsters</h3></center></td>
				</tr>
				<tr>
				<td><a title="CU 2011 30 <br /> Hen" href="pigeons/sg_11CU30.jpg"><img src="pigeons/sg_11CU30.jpg" width="130"   border="0" alt="Mike Ganus"><center>CU 2011 30 <br /> Hen</center></a></td>
				<td><a title="AU 2007 48 <br /> Hen" href="bird_list/images/AU0748.jpg"><img src="bird_list/images/AU0748s.jpg" width="130"   border="0" alt="Mike Ganus"><center>AU 2007 48 <br /> Hen</center></a></td>
				<td><a title="CU 2011 31 <br /> Hen" href="bird_list/images/CU1131.jpg"><img src="bird_list/images/CU1131s.jpg" width="130"   border="0" alt="Mike Ganus"><center>CU 2011 31 <br /> Hen</center></a></td>
				<td><a title="CU 2010 1494 <br /> Hen" href="bird_list/images/CU101494.jpg"><img src="bird_list/images/CU101494s.jpg" width="130"   border="0" alt="Mike Ganus"><center>CU 2010 1494 <br /> Hen</center></a></td>
				<td><a title="CU 2010 708 <br /> Hen" href="bird_list/images/CU10708.jpg"><img src="bird_list/images/CU10708.jpg" width="130"   border="0" alt="Mike Ganus"><center>CU 2010 708 <br /> Hen</center></a></td>
				</tr>
				<tr>
				<td><a title="CU 2012 30" href="pigeons/sg_12CU30.jpg"><img src="pigeons/sg_12CU30.jpg" width="130"   border="0" alt="Mike Ganus"><center>CU 2012 30 </center></a></td>
				<td><a title="CU 2012 31" href="pigeons/sg_12CU31.jpg"><img src="pigeons/sg_12CU31.jpg" width="130"   border="0" alt="Mike Ganus"><center>CU 2012 31 </center></a></td>
				<td><a title="CU 2012 33" href="pigeons/sg_12CU33.jpg"><img src="pigeons/sg_12CU33.jpg" width="130"   border="0" alt="Mike Ganus"><center>CU 2012 33 </center></a></td>
				<td><a title="CU 2012 34" href="pigeons/sg_12CU34.jpg"><img src="pigeons/sg_12CU34.jpg" width="130"   border="0" alt="Mike Ganus"><center>CU 2012 34 </center></a></td>
				<td><a title="CU 2012 36" href="pigeons/sg_12CU36.jpg"><img src="pigeons/sg_12CU36.jpg" width="130"   border="0" alt="Mike Ganus"><center>CU 2012 36 </center></a></td>
				</tr>
				</table>

				<center><img src="spacer.gif" width="1" height="44" border="0"></center>
				<table>
				<colgroup><col style="width:111px;"></col><col style="width:111px;"></col><col style="width:111px;"></col><col style="width:111px;"></col><col style="width:111px;"></col></colgroup>
				<tr>
				<td colspan="5"><center><i><h2>Super Champ</h2></i></center></td>
				</tr>
				<tr>
				<td colspan="5">
				<img src="images/superchamp.jpg" />
				</td>
				</tr>
				<tr>
				<td colspan="5">
				<div style="width:560px;margin:0 auto;">
				<p>
				1st Olympic Champion of the World - All Distances 2001
				1st Olympic Champion All  Holland - South Africa 2001
				1st National Ace Pigeon 1 Day Long Distance Vredesduif 1999
				</p>
				<p>
				Over the past 15 years I've been purchasing the 1st National Ace Champions of Holland,
				Belgium and Germany and had great success breeding top foundation breeders from
				these pigeons.  In 1996 I decided to start a loft in Holland racing youngsters back off
				children of these National Aces.  My first year was average but from then on the results
				went right up to the top.  We have placed in the top 3 lofts in all the championships with
				over 5000 lofts competing and 'Super Champion' children have bred us 5 - 1st prize winners
				with more than 10,000 birds competing. Also a 'Super Champion' son bred 'Mr. Verbree', a
				1st National Winner and a 2nd National Winner for Koopman and Son.  'Super Champion'
				children have been great breeders.  I've had over 50 phone calls from clients that bred
				winners off his offspring.  'Super Champion' was a great racer and now he is a great breeder!!
				Janssen  Family.
				</p>
				</div>
				<div style="width:550px;text-align:left;">
				<table id="tblResults2">
				<tr><td>1st St. Ghislain</td><td> 2,381 birds</td></tr>
				<tr><td>1st Niergnies</td><td>4,022 birds </td></tr>
				<tr><td>2nd Morlincourt</td><td>1,077 birds </td></tr>
				<tr><td>6th National Chateuroux NPO</td><td>5,758 birds</td></tr>
				<tr><td>9th National Bourges NPO</td><td>6,466 birds</td></tr>
				<tr><td>13th National Bourges NPO</td><td>13,000 birds</td></tr>
				</table>
				<br />
				</div>
				</td>
				</tr>
				<tr>
					<td colspan="5"><a title="GFL 2002 459 <br /> Cock" href="pigeons/sg_02GFL459.jpg"><img src="pigeons/sg_02GFL459.jpg" width="130"   border="0" alt="Mike Ganus"><center>GFL 2002 459 <br /> Cock</center></a></td>
				</tr>
				<tr>
					<td colspan="5">
						<center><h3>Youngsters</h3></center>
					</td>
				</tr>
				<tr>
				<td><a title="AU 2006 12 <br /> Hen" href="bird_list/images/AU0612.jpg"><img src="bird_list/images/AU0612s.jpg" width="130"   border="0" alt="Mike Ganus"><center>AU 2006 12 <br /> Hen <br/></td>
				<td><a title="AU 2007 115 <br /> Hen" href="bird_list/images/AU07115.jpg"><img src="bird_list/images/AU07115s.jpg" width="130"   border="0" alt="Mike Ganus"><center>AU 2007 115 <br /> Hen</center></a></td>
				<td>&nbsp;</td>
				<td><a title="AU 2006 16 <br /> Cock" href="bird_list/images/AU0616.jpg"><img src="bird_list/images/AU0616s.jpg" width="130"   border="0" alt="Mike Ganus"><center>AU 2006 16 <br /> Cock</center></a></td>
				<td><a title="AU 2007 16 <br /> Cock" href="bird_list/images/AU0716.jpg"><img src="bird_list/images/AU0716s.jpg" width="130"   border="0" alt="Mike Ganus"><center>AU 2007 16 <br /> Cock</center></a></td>
				</tr>
				</table>

				<center><img src="spacer.gif" width="1" height="44" border="0"></center>
				<table>
				<colgroup>
				<col style="width:111px;"></col>
				<col style="width:111px;"></col>
				<col style="width:111px;"></col>
				<col style="width:111px;"></col>
				<col style="width:111px;"></col>
				</colgroup>
				<tr>
				<td colspan="5">
				<center<img src="bird_list/images/Red_Page2.jpg"  width="555" height="838" border="0"></center>
				</td>
				</tr>
				<tr>
				<td><a title="99 PL 030  755 Cock" href="bird_list/images/755.jpg"><img src="bird_list/images/755s.jpg" width="130"   border="0" alt="The Polish Prince"><center>99 PL 030  755 Cock</center></a></td>
				<td colspan="3"><center><h2><i>The Polish Prince</i></h2></center></td>
				<td><a title="2005 NRA 1950 <br>Cock" href="bird_list/images/1950.jpg"><img src="bird_list/images/1950s.jpg" width="130"   border="0" align="center" alt="The Polish Prince"><center>2005 NRA 1950 <br>Cock</center></a></td>
				</tr>
				<tr>
				<td><a title="06 PL 030 4885<br>Cock" href="bird_list/images/4885.jpg"><img src="bird_list/images/4885s.jpg" width="130"   border="0" alt="The Polish Prince"><center>06 PL 030 4885<br>Cock</center></a></td>
				<td><a title="99 PL 030 2800 <br>Cock" href="bird_list/images/2800.jpg"><img src="bird_list/images/2800s.jpg" width="130"   border="0" alt="The Polish Prince"><center>99 PL 030 2800 <br>Cock</center></a></td>
				<td></td>
				<td><a title="99 PL 030 2721<br>Hen" href="bird_list/images/2721.jpg"><img src="bird_list/images/2721s.jpg" width="130"   border="0" alt="The Polish Prince"><center>99 PL 030 2721<br>Hen</center></a></td>
				<td><a title="2005 NRA 1995 <br>Cock" href="bird_list/images/1995.jpg"><img src="bird_list/images/1995s.jpg" width="130"   border="0" alt="The Polish Prince"><center>2005 NRA 1995 <br>Cock</center></a></td>
				</tr>
				<tr>
				<td><a title="05 PL 030  9243<br>Hen" href="bird_list/images/9243.jpg"><img src="bird_list/images/9243s.jpg" width="130"   border="0" alt="The Polish Prince"><center>05 PL 030  9243<br>Hen</center></a></td>
				<td><a title="05 PL 030 9251 <br>Hen" href="bird_list/images/9251.jpg"><img src="bird_list/images/9251s.jpg" width="130"   border="0" alt="The Polish Prince"><center>05 PL 030 9251 <br>Hen</center></a></td>
				<td><a title="02 PL 014 81<br>Hen" href="bird_list/images/81.jpg"><img src="bird_list/images/81s.jpg" width="130"   border="0" alt="The Polish Prince"><center>02 PL 014 81<br>Hen</center></a></td>
				<td><a title="06 PL 030 4893<br> Hen" href="bird_list/images/4893.jpg"><img src="bird_list/images/4893s.jpg" width="130"   border="0" alt="The Polish Prince"><center>06 PL 030 4893<br> Hen</center></a></td>
				<td><a title="2006 NRA 2161<br>Hen" href="bird_list/images/2161.jpg"><img src="bird_list/images/2161s.jpg" width="130"   border="0" alt="The Polish Prince"><center>2006 NRA 2161<br>Hen</center></a></td>
				</tr>
				</table>
<center>
			<img src="spacer.gif" width="1" height="44" border="0">
		</center>
		<table>
			<colgroup>
				<col style="width:111px;">
				</col>
				<col style="width:111px;">
				</col>
				<col style="width:111px;">
				</col>
				<col style="width:111px;">
				</col>
				<col style="width:111px;">
				</col>
			</colgroup>
			<tr>
				</td><td colspan="5">
				<center>
					<img src="spacer.gif" width="1" height="1" border="0">
				</center>
				<center>
					<i><h2>Mike Ganus</h2></i>
				</center></td>
			</tr>
			<tr>
				<td><a title="2007 GFL 525" href="bird_list/images/525.jpg">
				<img src="bird_list/images/525s.jpg" width="130"   border="0" alt="Mike Ganus">
				<center>
					2007 GFL 525
					<br />
					&nbsp;
				</center></a></td>
				<td><a title="2007 GFL 883" href="bird_list/images/883.jpg">
				<img src="bird_list/images/883s.jpg" width="130"   border="0" alt="Mike Ganus">
				<center>
					2007 GFL 883
					<br />
					&nbsp;
				</center></a></td>
				<td><a title="2007 GFL 910" href="bird_list/images/910.jpg">
				<img src="bird_list/images/910s.jpg" width="130"   border="0" alt="Mike Ganus">
				<center>
					2007 GFL 910
					<br />
					&nbsp;
				</center></a></td>
				<td><a title="2006 GFL 1331" href="bird_list/images/1331.jpg">
				<img src="bird_list/images/1331s.jpg" width="130"   border="0" alt="Mike Ganus">
				<center>
					2006 GFL 1331
					<br />
					&nbsp;
				</center></a></td>
				<td><a title="2006 GFL 1355" href="bird_list/images/1355.jpg">
				<img src="bird_list/images/1355s.jpg" width="130"   border="0" alt="Mike Ganus">
				<center>
					2006 GFL 1355
					<br />
					&nbsp;
				</center></a></td>
			</tr>
			<tr>
				<td><a title="2001 GFL 712" href="bird_list/images/712.jpg">
				<img src="bird_list/images/712s.jpg"  width="130" border="0" alt="Mike Ganus">
				<center>
					2001 GFL 712
					<br />
					&nbsp;
				</center></a></td>
				<td><a title="2005 GFL 403" href="bird_list/images/403.jpg">
				<img src="bird_list/images/403s.jpg" width="130"   border="0" alt="Mike Ganus">
				<center>
					2005 GFL 403
					<br />
					&nbsp;
				</center></a></td>
				<td><a title="2000 GFL 744" href="bird_list/images/744.jpg">
				<img src="bird_list/images/744s.jpg"  width="130" border="0" alt="Mike Ganus">
				<center>
					2000 GFL 744
					<br />
					&nbsp;
				</center></a></td>
				<td><a title="2004 GFL 1099" href="bird_list/images/1099.jpg">
				<img src="bird_list/images/1099s.jpg"  width="130" border="0" alt="Mike Ganus">
				<center>
					2004 GFL 1099
					<br />
					&nbsp;
				</center></a></td>
				<td><a title="1998 GFL 691" href="bird_list/images/1063.jpg">
				<img src="bird_list/images/1063s.jpg"  width="130" border="0" alt="Mike Ganus">
				<center>
					1998 GFL 691
					<br />
					&nbsp;
				</center></a></td>
			</tr>
			<tr>
				<td><a title="1998 GFL 691" href="bird_list/images/691.jpg">
				<img src="bird_list/images/691s.jpg"  width="130" border="0" alt="Mike Ganus">
				<center>
					1998 GFL 691
					<br />
					&nbsp;
				</center></a></td>
				<td><a title="AU 2006 GFL 768" href="bird_list/images/768.jpg">
				<img src="bird_list/images/768s.jpg" width="130"   border="0" alt="Mike Ganus">
				<center>
					AU 2006 GFL 768
					<br />
					&nbsp;
				</center></a></td>
				<td><a title="2004 GFL 1091" href="2005/1091.jpg">
				<img src="2005/1091s.jpg" width="130"   border="0" alt="Mike Ganus">
				<center>
					2004 GFL 1091
					<br />
					&nbsp;
				</center></a></td>
				<td><a title="2000 GFL 826" href="bird_list/images/826.jpg">
				<img src="bird_list/images/826s.jpg"  width="130" border="0" alt="Mike Ganus">
				<center>
					2000 GFL 826
					<br />
					&nbsp;
				</center></a></td>
				<td><a title="2000 GFL 716" href="bird_list/images/716.jpg">
				<img src="bird_list/images/716s.jpg"  width="130" border="0" alt="Mike Ganus">
				<center>
					2000 GFL 716
					<br />
					&nbsp;
				</center></a></td>
			</tr>
			<tr>
				<td><a title="2007 GFL 981" href="bird_list/images/981.jpg""><img src="bird_list/images/981s.jpg"  width="130" border="0" alt="Mike Ganus"><center>2007 GFL 981 <br />&nbsp;</center></a></td>
				<td><a title="2007 WPG 0798" href="bird_list/images/0798.jpg"><img src="bird_list/images/0798s.jpg" width="130"   border="0" alt="Mike Ganus"><center>2007 WPG 0798 <br />&nbsp;</center></a></td>
				<td><a title="2007 GFL 1019" href="bird_list/images/1019.jpg"><img src="bird_list/images/1019s.jpg" width="130"   border="0" alt="Mike Ganus"><center>2007 GFL 1019 <br />&nbsp;</center></a></td>
				<td><a title="CU 2005 SG 18" href="bird_list/images/18.jpg"><img src="bird_list/images/18s.jpg" width="130"   border="0" alt="Mike Ganus"><center>CU 2005 SG 18 <br />&nbsp;</center></a></td>
				<td><a title="2007 GFL 980" href="bird_list/images/980.jpg"><img src="bird_list/images/980s.jpg"  width="130" border="0" alt="Mike Ganus"><center>2007 GFL 980 <br />&nbsp;</center></a></td>
				</tr>
				<tr>
				<td><a title="AU 05 STAN 237" href="bird_list/images/237.jpg"><img src="bird_list/images/237s.jpg" width="130"   border="0" alt="Mike Ganus"><center>AU 05 STAN 237 <br />&nbsp;</center></a></td>
				<td><a title="CU 08 STAN 39" href="bird_list/images/39.jpg"><img src="bird_list/images/39s.jpg" width="130"   border="0" alt="Mike Ganus"><center>CU 08 STAN 39 <br />&nbsp;</center></a></td>
				<td>&nbsp;</td>
				<td><a title="2008 CU 6797" href="bird_list/images/6797.jpg"><img src="bird_list/images/6797s.jpg" width="130"   border="0" alt="Mike Ganus"><center>2008 CU 6797 <br />&nbsp;</center></a></td>
				<td><a title="2008 CU 6782" href="bird_list/images/6782.jpg"><img src="bird_list/images/6782s.jpg" width="130"   border="0" alt="Mike Ganus"><center>2008 CU 6782 <br />&nbsp;</center></a></td>
				</tr>
				<tr>
				<td colspan="5">&nbsp;</td>
				</tr>
				<tr>
				<td><center><i><h2>Hercules</h2></i></center></td>
				<td><a title="CU 2009 26384 <br /> Hercules Cock" href="bird_list/images/CU0926384.jpg"><img src="bird_list/images/CU0926384s.jpg" width="130"   border="0" alt="Mike Ganus"><center>CU 2009 26384 <br /> Hercules Cock</center></a></td>
				<td></td>
				<td><a title="CU 2008 36 <br /> Aviator X 699 Cock" href="bird_list/images/CU0836.jpg"><img src="bird_list/images/CU0836s.jpg" width="130"   border="0" alt="Mike Ganus"><center>CU 2008 36 <br /> Aviator X 699 Cock</center></a></td>
				<td><center><i><h2>Aviator X 699</h2></i></center></td>
				</tr>
				<tr>
				<td><center><i><h2>Hercules</h2></i></center></td>
				<td><a title="2008 CU 8319" href="pigeons/sg_08STAN8319.jpg"><img src="pigeons/sg_08STAN8319.jpg" width="130"   border="0" alt="Mike Ganus"><center>2008 CU 8319</center></a></td>
				<td></td>
				<td><a title="2008 CU 40" href="pigeons/sg_08CU40.jpg"><img src="pigeons/sg_08CU40.jpg" width="130"   border="0" alt="Mike Ganus"><center>2008 CU 40</center></a></td>
				<td><center><i><h2>Creator</h2></i></center></td>
				</tr>
				</table>
				
				<center><img src="spacer.gif" width="1" height="44" border="0"></center>
				<table>
				<colgroup>
				<col style="width:111px;"></col>
				<col style="width:111px;"></col>
				<col style="width:111px;"></col>
				<col style="width:111px;"></col>
				<col style="width:111px;"></col>
				</colgroup>
				<tr>
				<td colspan="5"><center><i><h2>Jozef Konior</h2></i></center></td>
				</tr>
				<tr>
				<td colspan="5">
				<img src="images/Konior.jpg" height="375" width="555" />
				</td>
				</tr>
				<tr>
				<td colspan="5"><div style="width:560px;text-align:left;margin:0 auto;" >
				Till 2007 he got 8 times the Champio of the club and 7 times v-ce champion of the club.  <br />
				1991 - His pigeon nr 34-140-86 represented Poland in Verona. <br />
				1992 - The Champion of Poland (there were 43 thousand of racers). <br />
				1994 - The Chapion - medium distance. <br />
				2003 - V place in general championships. <br />
				2004 - The Champian of the club - short distance  <br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- champion - medium distance - V place in long distance. <br />
				2005 - V - ce Champion - medium distance. <br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;V - ce Champion - long distance. <br />
				2006 - the Champion - short distance. <br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;V - ce Champion - medium distance. <br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the Champion - long distance. <br />
				2007 - the Champion - short distance. <br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;V - ce Champion - medium distance. <br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IV place - long distance. <br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Champion - Marathon category. <br />
				</div>
				</td>
				</tr>
				<tr>
				<td><a title="05 PL 30 - 1490" href="bird_list/images/1490.jpg"><img src="bird_list/images/1490s.jpg" width="130"   border="0" alt="Jozef Konior"><center>05 PL 30 - 1490</center></a></td>
				<td><a title="05 PL 030 - 1356" href="bird_list/images/1356.jpg"><img src="bird_list/images/1356s.jpg" width="130"   border="0" alt="Jozef Konior"><center>05 PL 030 - 1356</center></a></td>
				<td><a title="08 PL 0262-1256" href="bird_list/images/1256.jpg"><img src="bird_list/images/1256s.jpg" width="130"   border="0" alt="Jozef Konior"><center>08 PL 0262-1256</center></a></td>
				<td><a title="02 PL 060 - 3373" href="bird_list/images/3373.jpg"><img src="bird_list/images/3373s.jpg" width="130"   border="0" alt="Jozef Konior"><center>02 PL 060 - 3373</center></a></td>
				<td><a title="04 PL 030 - 10413" href="bird_list/images/10413.jpg"><img src="bird_list/images/10413s.jpg" width="130"   border="0" alt="Jozef Konior"><center>04 PL 030 - 10413</center></a></td>
				</tr>
				<tr>
				<td><a title="06 PL 060-1187" href="bird_list/images/1187.jpg"><img src="bird_list/images/1187s.jpg" width="130"   border="0" alt="Jozef Konior"><center>06 PL 060-1187</center></a></td>
				<td>&nbsp;</td>
				<td><a title="07 PL 0262-11056" href="bird_list/images/11056.jpg"><img src="bird_list/images/11056s.jpg" width="130"   border="0" alt="Jozef Konior"><center>07 PL 0262-11056</center></a></td>
				<td>&nbsp;</td>
				<td><a title="05 PL 030-1309" href="bird_list/images/1309.jpg"><img src="bird_list/images/1309s.jpg" width="130"   border="0" alt="Jozef Konior"><center>05 PL 030-1309</center></a></td>
				</tr>
				<tr>
				<td><a title="PL 2009 030-12656 <br /> Hen" href="bird_list/images/PL09030-12656.jpg"><img src="bird_list/images/PL09030-12656s.jpg" width="130"   border="0" alt="Jozef Konior"><center>PL 2009 030-12656 <br /> Hen</center></a></td>
				<td><a title="PL 2008 030-12494 <br /> Hen" href="bird_list/images/PL08030-12494.jpg"><img src="bird_list/images/PL08030-12494s.jpg" width="130"   border="0" alt="Jozef Konior"><center>PL 2008 030-12494 <br /> Hen</center></a></td>
				<td>&nbsp;</td>
				<td><a title="PL 2009 023-12800 <br /> Cock" href="bird_list/images/PL09023-12800.jpg"><img src="bird_list/images/PL09023-12800s.jpg" width="130"   border="0" alt="Jozef Konior"><center>PL 2009 023-12800 <br /> Cock</center></a></td>
				<td><a title="PL 2009 023-7169 <br /> Cock" href="bird_list/images/PL09023-7169.jpg"><img src="bird_list/images/PL09023-7169s.jpg" width="130"   border="0" alt="Jozef Konior"><center>PL 2009 023-7169 <br /> Cock</center></a></td>
				</tr>
				</table>

				<center><img src="spacer.gif" width="1" height="44" border="0"></center>
				
				<!-- Removing Andreas Drapa
				<table>
				<colgroup>
				<col style="width:111px;"></col>
				<col style="width:111px;"></col>
				<col style="width:111px;"></col>
				<col style="width:111px;"></col>
				<col style="width:111px;"></col>
				</colgroup>
				<tr>
				<td colspan="5"><center><i><h2>Andreas Drapa</h2></i></center></td>
				</tr>
				<tr>
				<td colspan="5">
				<div style="width:560px;">
				<p>
				Dear Sport-friends,
				for more than 30 years, pigeons determine the daily routine of the Drapa family. The head of the family is Andreas. Without no doubt, he is the boss. There is a clear division of tasks in the family, but it is Andreas who decides in which direction everything goes. For example, in general it's his father who is responsible for the transport of the pigeons at training- flights. Excellent pigeons are the basic for everything. Without them nothing would work. And exactly at this point one can call Andreas a little bit fanatic. Good is not good enough. It always has to be the best of the best. Otherwise it isn't possible to maintain the level of last years performances. We are always looking for the Best of the Best!
				That the feeding plays an important role for pigeons should be a natural course of action, as in every other kind of sport. And especially if you make mistakes with the feeding you will certainly recognize this at your next pricing flight. A care plan can give you a hand. How many room you have, the size of your colony and the therefore arisen needs for your pigeons play a much too important role. And therefore it's hard to assess these needs in general. Only from this reason, every breeder should decide on his own what is best for his or her pigeons.
				Championships 1997 - 2007
				</p>
				</div>
				<div style="text-align:left;width:520px;margin:0 auto;">
				'1st national Champion of Germany 1998, 2000, 2002, 2003, 2004, 2005, 2007 <br />
				'1st Olympic Champion, Middle-Distance, Blackpool 1999 <br />
				'1st Olympic Champion, Middle-Distance, Ostende 2007 <br />
				'1st Olympic Champion, Allround, Ostende 2007 <br />
				'3rd Olympic Champion, Middle-Distance, Ostende 2007 <br />
				'4th Olympic Champion, Middle-Distance, Lievin 2003 <br />
				'4th Olympic Champion, Allround, Lievin 2003 <br />
				'5th Olympic Champion, Middle-Distance, Porto 2005 <br />
				'10th Olympic Champion, Allround, Porto 2005 <br />
				'1st Worldchampion, Middle-Distance, Versele Laga 1998 <br />
				'3rd Worldchampion, Middle-Distance, Versele Laga 1997 <br />
				'6th Worldchampion, Middle-Distance, Versele Laga 1998 <br />
				'12th Worldchampion, Middle-Distance, Versele Laga 1998 <br />
				</div>
				</td>
				</tr>
				<tr>
				<td><a title="AU 2007 GFL 525" href="bird_list/images/525.jpg"><img src="bird_list/images/525s.jpg" width="130"   border="0" alt="Andreas Drapa"><center>AU 2007 GFL 525</center></a></td>
				<td><a title="06 DV 01769-306" href="bird_list/images/306.jpg"><img src="bird_list/images/306s.jpg" width="130"   border="0" alt="Andreas Drapa"><center>06 DV 01769-306</center></a></td>
				<td><a title="03 DV 01769-250" href="bird_list/images/250.jpg"><img src="bird_list/images/250s.jpg" width="130"   border="0" alt="Andreas Drapa"><center>03 DV 01769-250</center></a></td>
				<td><a title="07 DV 01769-1147" href="bird_list/images/1147.jpg"><img src="bird_list/images/1147s.jpg" width="130"   border="0" alt="Andreas Drapa"><center>07 DV 01769-1147</center></a></td>
				<td><a title="07 DV 01769-1146" href="bird_list/images/1146.jpg"><img src="bird_list/images/1146s.jpg" width="130"   border="0" alt="Andreas Drapa"><center>07 DV 01769-1146</center></a></td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td><a title="06 DV 01769 - 313" href="bird_list/images/313.jpg" ><center><img src="bird_list/images/313s.jpg" width="130"   border="0"></center><center>06 DV 01769 - 313</center></a>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				</td>
				</tr></table>
				
				-->

				<center><img src="spacer.gif" width="1" height="44" border="0"></center>
				<table>
				<colgroup><col style="width:111px;"></col><col style="width:111px;"></col><col style="width:111px;"></col><col style="width:111px;"></col><col style="width:111px;"></col></colgroup>
				<tr>
				<td colspan="5"><center><i><h2>The Creator</i></h2></center></td>
				</tr>
				<tr>
				<td colspan="5">
				<center><img src="creatordata.jpg" width="574" height="683" border="0"></center>
				</td>
				</tr>
				<tr>
				<td><a title="AU 2006 GFL 1331" href="bird_list/images/1331.jpg"><img src="bird_list/images/1331s.jpg" width="130"   border="0" alt="The Creator"><center>AU 2006 GFL 1331</center></a></td>
				<td><a title="AU 2007 GFL 883" href="bird_list/images/883.jpg"><img src="bird_list/images/883s.jpg" width="130"   border="0" alt="The Creator"><center>AU 2007 GFL 883<br />&nbsp;</center></a></td>
				<td><a title="2008 CU 40" href="pigeons/sg_08CU40.jpg"><img src="pigeons/sg_08CU40.jpg" width="130"   border="0" alt="Mike Ganus"><center>2008 CU 40<br />&nbsp;</center></a></td>
				<td><a title="2008 CU 6774" href="bird_list/images/6774.jpg"><img src="bird_list/images/6774s.jpg" width="130"   border="0" alt="The Creator"><center>2008 CU 6774<br />&nbsp;</center></a></td>
				<td><a title="AU 2007 GFL 910" href="bird_list/images/910.jpg"><img src="bird_list/images/910s.jpg" width="130"   border="0" alt="The Creator"><center>AU 2007 GFL 910<br />&nbsp;</center></a></td>
				</tr>
				</table>

				<center><img src="spacer.gif" width="1" height="44" border="0"></center>
				<table>
				<colgroup>
				<col style="width:111px;"></col>
				<col style="width:111px;"></col>
				<col style="width:111px;"></col>
				<col style="width:111px;"></col>
				<col style="width:111px;"></col>
				</colgroup>
				<tr>
				<td colspan="5"><center><img src="spacer.gif" width="1" height="11"></center><center><h2><i>Hofkens</i></h2></center></td>
				</tr>
				<tr>
				<td><a title="AU 2006 GFL 768" href="bird_list/images/768.jpg"><img src="bird_list/images/768s.jpg" width="130"   border="0" alt="Hofkens"><center>AU 2006 GFL 768 <br />&nbsp;</center></a></td>
				<td><a title="2004 GFL 1099" href="bird_list/images/1099.jpg"><img src="bird_list/images/1099s.jpg" width="130"   border="0" alt="Hofkens"><center>2004 GFL 1099 <br />&nbsp;</center></a></td>
				<td>&nbsp;</td>
				<td><a title="AU 2009 60549 <br /> Hen" href="bird_list/images/AU0960549.jpg"><img src="bird_list/images/AU0960549s.jpg" width="130"   border="0" alt="Hofkens"><center>AU 2009 60549 <br /> Hen</center></a></td>
				<td><a title="2004 GFL 1091" href="bird_list/images/1091.jpg"><img src="bird_list/images/1091s.jpg" width="130"   border="0" alt="Hofkens"><center>2004 GFL 1091 <br />&nbsp;</center></a></td>
				</tr>
				</table>

				<center><img src="spacer.gif" width="1" height="44" border="0"></center>
				<table>
				<tr>
				<td><a title="2004 BELG 3230891" href="bird_list/images/3230891.jpg"><img src="bird_list/images/3230891s.jpg"  width="130" border="0" alt="Gaby Vandenabeele"><center>2004 BELG 3230891</center></a></td>
				<td width="333" colspan="3"><img src="gaby4.jpg" /><center><i><h2>Gaby Vandenabeele</i></h2></center></td>
				<td><a title="2003 BELG 3003337" href="bird_list/images/3003337.jpg"><img src="bird_list/images/3003337s.jpg"  width="130" border="0" alt="Gaby Vandenabeele"><center>2003 BELG 3003337</center></a></td>
				</tr>
				</table>

				<center><img src="spacer.gif" width="1" height="44" border="0"></center>
				<table>
				<colgroup><col style="width:111px;"></col><col style="width:111px;"></col><col style="width:111px;"></col><col style="width:111px;"></col><col style="width:111px;"></col></colgroup>
				<tr>
				<td colspan="5"><center><img src="spacer.gif" width="1" height="11"></center><center><h2><i>Jan Arden</i></h2></center></td>
				</tr>
				<tr>
				<td><a title="2005 NL 1554287" href="bird_list/images/1554287.jpg"><img src="bird_list/images/1554287s.jpg" width="130"   border="0" alt="Jan Arden"><center>2005 NL 1554287<br />&nbsp;</center></a></td>
				<td>&nbsp;</td>
				<td><a title="AU 2006 GFL 1355" href="bird_list/images/1355.jpg"><img src="bird_list/images/1355s.jpg" width="130"   border="0" alt="Jan Arden"><center>AU 2006 GFL 1355</center></a></td>
				<td>&nbsp;</td>
				<td><a title="2004 NL 2209849" href="bird_list/images/2209849.jpg"><img src="bird_list/images/2209849s.jpg" width="130"   border="0" alt="Jan Arden"><center>2004 NL 2209849<br />&nbsp;</center></a></td>
				</tr>
				</table>

				<center><img src="spacer.gif" width="1" height="44" border="0"></center>
				<table>
				<colgroup><col style="width:111px;"></col><col style="width:111px;"></col><col style="width:111px;"></col><col style="width:111px;"></col><col style="width:111px;"></col></colgroup>
				<tr>
				<td colspan="5"><center><img src="spacer.gif" width="1" height="11"></center><center><h2><i>Long Distance</i></h2></center></td>
				</tr>
				<tr>
				<td><a title="2009 IF 1461" href="bird_list/images/1461.jpg"><img src="bird_list/images/1461s.jpg" width="130"   border="0" alt="Long Distance"><center>2009 IF 1461</center></a></td>
				<td><a title="2009 CU 22881" href="bird_list/images/22881.jpg"><img src="bird_list/images/22881s.jpg" width="130"   border="0" alt="Long Distance"><center>2009 CU 22881</center></a></td> <td>&nbsp;</td><td><a title="2009 IF 1598" href="bird_list/images/1598.jpg">
				<img src="bird_list/images/1598s.jpg" width="130"   border="0" alt="Long Distance">
				<center>
					2009 IF 1598
				</center></a></td><td><a title="CU 2009 Stan 2" href="bird_list/images/2.jpg">
				<img src="bird_list/images/2s.jpg" width="130"   border="0" alt="Long Distance">
				<center>
					CU 2009 Stan 2
				</center></a></td>
			</tr>
			<tr>
				<td><a title="2009 BELG 6154400" href="bird_list/images/6154400.jpg">
				<img src="bird_list/images/6154400s.jpg" width="130"   border="0" alt="Long Distance">
				<center>
					2009 BELG 6154400
				</center></a></td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td><a title="2009 BELG 6154570" href="bird_list/images/6154570.jpg">
				<img src="bird_list/images/6154570s.jpg" width="130"   border="0" alt="Long Distance">
				<center>
					2009 BELG 6154570
				</center></a></td>
			</tr>
		</table>

		<center>
			<img src="spacer.gif" width="1" height="44" border="0">
		</center>
		<table>
			<colgroup>
				<col style="width:111px;">
				</col>
				<col style="width:111px;">
				</col>
				<col style="width:111px;">
				</col>
				<col style="width:111px;">
				</col>
				<col style="width:111px;">
				</col>
			</colgroup>
			<tr>
				<td colspan="5">
				<center>
					<h2><i>Long Distance Black (PL-294)</i></h2>
				</center></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td><a title="99 PL 030 294 <br>Cock" href="bird_list/images/294.jpg">
				<img src="bird_list/images/294s.jpg" width="130"   border="0" alt="The Polish Prince">
				<center>
					99 PL 030 294
					<br>
					Cock
				</center></a></td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td><a title="CU 2010 - 1 <br /> Son Cock" href="bird_list/images/CU101.jpg">
				<img src="bird_list/images/CU101s.jpg" width="130"   border="0" alt="Long Distance Black">
				<center>
					CU 2010 1
					<br />
					Cock
				</center></a></td>
				<td>&nbsp;</td>
				<td><a title="CU 2009 - 2 <br /> Son Cock" href="bird_list/images/CU092.jpg">
				<img src="bird_list/images/CU092s.jpg" width="130"   border="0" alt="Long Distance Black">
				<center>
					CU 2009 2
					<br />
					Cock
				</center></a></td>
				<td>&nbsp;</td>
				<td><a title="CU 2010 833 <br /> Daughter Hen" href="bird_list/images/CU10833.jpg">
				<img src="bird_list/images/CU10833s.jpg" width="130"   border="0" alt="Long Distance Black">
				<center>
					CU 2010 833
					<br />
					Hen
				</center></a></td>
			</tr>
		</table>

		<center>
			<img src="spacer.gif" width="1" height="44" border="0">
		</center>
		<table>
			<colgroup>
				<col style="width:111px;">
				</col>
				<col style="width:111px;">
				</col>
				<col style="width:111px;">
				</col>
				<col style="width:111px;">
				</col>
				<col style="width:111px;">
				</col>
			</colgroup>
			<tr>
				<td colspan="5">
				<center>
					<img src="spacer.gif" width="1" height="11">
				</center>
				<center>
					<h2><i>Janssen Brothers</i></h2>
				</center></td>
			</tr>
			<tr>
				<td><a title="2004 GFL 1091" href="bird_list/images/1091.jpg">
				<img src="bird_list/images/1091s.jpg" width="130"   border="0" alt="Janssen Brothers">
				<center>
					2004 GFL 1091
				</center></a></td>
				<td><a title="00 Belg 6317423" href="bird_list/images/6317423.jpg">
				<img src="bird_list/images/6317423s.jpg" width="130"   border="0" alt="Janssen Brothers">
				<center>
					00 Belg 6317423
				</center></a></td>
				<td><a title="02 Belg 6477316" href="bird_list/images/6477316.jpg">
				<img src="bird_list/images/6477316s.jpg" width="130"   border="0" alt="Janssen Brothers">
				<center>
					02 Belg 6477316
				</center></a></td>
				<td><a title="2001 GFL 1063" href="bird_list/images/1063.jpg">
				<img src="bird_list/images/1063s.jpg" width="130"   border="0" alt="Janssen Brothers">
				<center>
					2001 GFL 1063
				</center></a></td>
				<td><a title="2001 GFL 712" href="bird_list/images/712.jpg">
				<img src="bird_list/images/712s.jpg" width="130"   border="0" alt="Janssen Brothers">
				<center>
					2001 GFL 712
				</center></a></td>
			</tr>
			<tr>
				<td valign="top"><a title="AU 98 CBS 0636" href="bird_list/images/636.jpg">
				<img src="bird_list/images/636s.jpg" width="130"   border="0" alt="Janssen Brothers">
				<center>
					AU 98 CBS 06


				</center></a></td>
				<td valign="top"><a title="AU 06 BIECHE<br> 6222" href="bird_list/images/6222.jpg">
				<img src="bird_list/images/6222s.jpg" width="130"   border="0" alt="Janssen Brothers">
				<center>
					AU 06 BIECHE
					<br>
					6222
				</center></a></td>
				<td><a title="AU 2003 106 <br /> J.B Cock" href="bird_list/images/AU03106.jpg">
				<img src="bird_list/images/AU03106s.jpg" width="130"   border="0" alt="Mike Ganus">
				<center>
					AU 2003 106
					<br />
					J.B Cock
				</center></a></td>
				<td valign="top"><a title="2000 GFL 744" href="bird_list/images/744.jpg">
				<img src="bird_list/images/744s.jpg" width="130"   border="0" alt="Janssen Brothers">
				<center>
					2000 GFL 744
				</center></a></td>
				<td valign="top"><a title="2006 EDM 1957" href="bird_list/images/1957.jpg">
				<img src="bird_list/images/1957s.jpg" width="130"   border="0" alt="Janssen Brothers">
				<center>
					2006 EDM 1957
				</center></a></td>
			</tr>
		</table>

		<center>
			<img src="spacer.gif" width="1" height="44" border="0">
		</center>
		<table>
			<colgroup>
				<col style="width:111px;">
				</col>
				<col style="width:111px;">
				</col>
				<col style="width:111px;">
				</col>
				<col style="width:111px;">
				</col>
				<col style="width:111px;">
				</col>
			</colgroup>
			<tr>
				<td colspan="5">
				<center>
					<img src="spacer.gif" width="1" height="11">
				</center>
				<center>
					<h2><i>Apollo</i></h2>
				</center></td>
			</tr>
			<tr>
				<td><a title="CU 2002 3464 <br /> Cock PIET" href="bird_list/images/CU023464.jpg">
				<img src="bird_list/images/CU023464s.jpg" width="130"   border="0" alt="The Protagonators">
				<center>
					CU 2002 3464
					<br />
					Cock PIET
				</center></a></td>
				<td>&nbsp;</td>
				<td><a title="CU 2006 7308 <br /> Cock" href="bird_list/images/CU067308.jpg">
				<img src="bird_list/images/CU067308s.jpg" width="130"   border="0" alt="The Protagonators">
				<center>
					CU 2006 7308
					<br />
					Cock
				</center></a></td>
				<td>&nbsp;</td>
				<td><a title="CU 2002 3470 <br /> Cock" href="bird_list/images/CU023470.jpg">
				<img src="bird_list/images/CU023470s.jpg" width="130"   border="0" alt="The Protagonators">
				<center>
					CU 2002 3470
					<br />
					Cock
				</center></a></td>
			</tr>
		</table>

		<center>
			<img src="spacer.gif" width="1" height="44" border="0">
		</center>
		<table>
			<colgroup>
				<col style="width:111px;">
				</col>
				<col style="width:111px;">
				</col>
				<col style="width:111px;">
				</col>
				<col style="width:111px;">
				</col>
				<col style="width:111px;">
				</col>
			</colgroup>
			<tr>
				<td colspan="5">
				<img src="images/karlvon.jpg" />
				<center>
					<h2><i>The Protagonators</i></h2>
				</center></td>
			</tr>
			<tr>
				<td><a title="2003 Apollo 4413 <br>Hen" href="bird_list/images/4413.jpg">
				<img src="bird_list/images/4413s.jpg" width="130"   border="0" alt="The Protagonators">
				<center>
					2003 Apollo 4413
					<br>
					Hen
				</center></a></td>
				<td><a title="2005 Apollo 6165 <br>Cock" href="bird_list/images/6165.jpg">
				<img src="bird_list/images/6165s.jpg" width="130"   border="0" alt="The Protagonators">
				<center>
					2005 Apollo 6165
					<br>
					Cock
				</center></a></td>
				<td>&nbsp;</td>
				<td><a title="2005 Apollo 6232 <br>Cock" href="bird_list/images/6232.jpg">
				<img src="bird_list/images/6232s.jpg" width="130"   border="0" alt="The Protagonators">
				<center>
					2005 Apollo 6232
					<br>
					Cock
				</center></a></td>
				<td><a title="2005 Apollo 6117 <br>Hen" href="bird_list/images/6117.jpg">
				<img src="bird_list/images/6117s.jpg" width="130"   border="0" alt="The Protagonators">
				<center>
					2005 Apollo 6117
					<br>
					Hen
				</center></a></td>
			</tr>
			<tr>
				<td><a title="CU 2006 Apollo 7303" href="bird_list/images/7303.jpg">
				<img src="bird_list/images/7303s.jpg" width="130"   border="0" alt="The Protagonators">
				<center>
					CU 2006 Apollo 7303
				</center></a></td>
				<td><a title="CU 2008 Apollo 9106" href="bird_list/images/9106.jpg">
				<img src="bird_list/images/9106s.jpg" width="130"   border="0" alt="The Protagonators">
				<center>
					CU 2008 Apollo 9106
				</center></a></td>
				<td><a title="CU 2008 Apollo 9108" href="bird_list/images/9108.jpg">
				<img src="bird_list/images/9108s.jpg" width="130"   border="0" alt="The Protagonators">
				<center>
					CU 2008 Apollo 9108
				</center></a></td>
				<td><a title="CU 2005 Apollo 6293" href="bird_list/images/6293.jpg">
				<img src="bird_list/images/6293s.jpg" width="130"   border="0" alt="The Protagonators">
				<center>
					CU 2005 Apollo 6293
				</center></a></td>
				<td><a title="CU 2008 Apollo 9104" href="bird_list/images/9104.jpg">
				<img src="bird_list/images/9104s.jpg" width="130"   border="0" alt="The Protagonators">
				<center>
					CU 2008 Apollo 9104
				</center></a></td>
			</tr>
			<tr>
				<td><a title="CU 2003 Apollo 4550" href="bird_list/images/4550.jpg">
				<img src="bird_list/images/4550s.jpg" width="130"   border="0" alt="The Protagonators">
				<center>
					CU 2003 Apollo 4550
				</center></a></td>
				<td><a title="CU 2001 Apollo 2235" href="bird_list/images/2235.jpg">
				<img src="bird_list/images/2235s.jpg" width="130"   border="0" alt="The Protagonators">
				<center>
					CU 2001 Apollo 2235
				</center></a></td>
				<td>&nbsp;</td>
				<td><a title="CU 2008 Apollo 9085" href="bird_list/images/9085.jpg">
				<img src="bird_list/images/9085s.jpg" width="130"   border="0" alt="The Protagonators">
				<center>
					CU 2008 Apollo 9085
				</center></a></td>
				<td><a title="2003 CU 8182" href="bird_list/images/8182.jpg">
				<img src="bird_list/images/8182s.jpg" width="130"   border="0" alt="The Protagonators">
				<center>
					2003 CU 8182
				</center></a></td>
			</tr>
		</table>

		<center>
			<img src="spacer.gif" width="1" height="44" border="0">
		</center>
		<table>
			<colgroup>
				<col style="width:111px;">
				</col>
				<col style="width:111px;">
				</col>
				<col style="width:111px;">
				</col>
				<col style="width:111px;">
				</col>
				<col style="width:111px;">
				</col>
			</colgroup>
			<tr>
				<td colspan="5">
				<center>
					<img src="spacer.gif" width="1" height="11">
				</center>
				<center>
					<h2><i>Spanjaard</i></h2>
				</center></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><a title="ZA 2006 27023 <br/> Hen" href="bird_list/images/ZA0627023.jpg">
				<img src="bird_list/images/ZA0627023s.jpg" width="130"   border="0" alt="The Protagonators">
				<center>
					ZA 2006 27023
					<br/>
					Hen
				</center></a></td>
				<td>&nbsp;</td>
				<td><a title="AU 2006 110 <br> Cock" href="bird_list/images/AU06110.jpg">
				<img src="bird_list/images/AU06110s.jpg" width="130"   border="0" alt="The Protagonators">
				<center>
					AU 2006 110
					<br>
					Cock
				</center></a></td>
				<td>&nbsp;</td>
			</tr>
		</table>

		<!--                     footer                           -->
		<script type="text/javascript" src="scripts/jsFooter.js"></script>

		<script type="text/javascript" src="scripts/jquery.1.6.2.min.js"></script>
		<script type="text/javascript" src="scripts/jquery.prettyPhoto.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$("a").unbind("click");
				$("a").removeAttr("onclick");
				$("a[rel^='prettyPhoto']").prettyPhoto({
					animation_speed : 'slow',
					opacity : 0.5,
					theme : 'facebook',
					showTitle : true,
					social_tools : false,
					changepicturecallback : function() {
						var sLoc = $("#fullResImage").attr("src");
						$("div.pp_nav").show();
						$("div.pp_nav a").hide();
						$("div.pp_nav p").hide();
						$("div.pp_nav").append("<a id='cmdprintimage' href='#' style='color:blue;'>Print</a>");

						$("#cmdprintimage").click(function() {
							window.open("PrintImage.html?img=" + sLoc + "', 'PrintImage', 'width=600,height=400,left=1,top=1,toolbar,menubar,scrollbars,resizable,directories,status,location,copyhistory,");
						});
					}
				});

				if ($("table").length > 0) {
					$("table:gt(0)").removeAttr("bordercolorlight").removeAttr("bordercolordark").removeAttr("border").removeAttr("align").css({
						"margin" : "0 auto",
						"border" : "9px outset #f3f9fe",
						"text-align" : "center"
					});
					$("table:gt(0) tr td").css({
						"border" : "1px solid black"
					});
					// style topo results sub table
					$("#tblResults1").css({
						"border" : "none",
						"text-align" : "left"
					});
					$("#tblResults1 tr td").css({
						"border" : "none",
						"width" : "100px"
					});
					$("#tblResults2").css({
						"border" : "none",
						"text-align" : "left"
					});
					$("#tblResults2 tr td").css({
						"border" : "none",
						"width" : "200px"
					});

				}
			});
		</script>

	</body>
</html>

