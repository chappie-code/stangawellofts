<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">

<html>
<head>
	<title>For Sale</title>
	<LINK REL="stylesheet" HREF="CSS/MyStyles.css" TYPE="text/css">
	<link href="css/cssPrettyLoader.css" rel="stylesheet" type="text/css" />
	
	<style type="text/css">
	   body{width:100%;height:100%;padding:0;margin:0;background-color:#C9E7F5;color:Black;}
	
		#forsale {font-family:Helvetica, Arial, "Sans-serif";font-weight:normal;font-size:20pt;}
		#pnlLoginForm {font-family:Helvetica, Arial, "Sans-serif";font-weight:normal;}
	   #tblSales {font-family:Helvetica, Arial, "Sans-serif";font-weight:normal;border:1px solid #666;}
		#tblSales tr {background-color:white;border-bottom:1px solid #D8F4FB;}
	   #tblSales tr.odd {background-color:#D8F4FB !important;border-bottom:1px solid white;}
	   #tblSales tr th {height:21px;font-size:14px;color:black;text-align:center;margin:0px auto;background-image:url('images/gridheaderblue.png');border-right:1px solid #C9E7F5;border-bottom:none;}
	   #tblSales tr td {height:21px;font-size:12px;color:#666;}
	   #tblSales tr td {font-size:12px;color: #476788 !important;}
	   #tblSales tr td a {color:blue;text-decoration:underline;}
		#tblSales tr td textarea {background-color:white; font-family:Helvetica, Arial, "Sans-serif";font-weight:normal;font-size:12px;}
		#tblSales tr.odd td textarea {background-color:#D8F4FB !important; font-family:Helvetica, Arial, "Sans-serif";font-weight:normal;font-size:12px;}
   </style>

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
	

	
   <div id="forsale" style="height:30px;width:125px;margin:20px auto;">
	   For Sale
   </div>
	
   <div style="width:600px;margin:0 auto;min-height:300px;">
	   <table id="tblSales" cellpadding="1" cellspacing="0">
	      <colgroup>
		      <col style="width:500px;text-align:center;"></col>
		      <col style="width:100px;text-align:left;"></col>
	      </colgroup>
	      <tr>
		      <th>Desc</th>
		      <th>Cost&nbsp;</th>
	      </tr>
	   </table>
   </div>
	
	<!--                     footer                           -->
   <script type="text/javascript" src="scripts/jsFooter.js"></script>
	
	<div id="pnlLogin" style="width:80px;height:30px;margin:10px auto;">
		<a id="cmdLogin" style="color:blue;">Login?</a>
	</div>
	<div id="pnlLoginForm" style="display:none;background-color:white;border:1px solid #666; width:300px;height:60px;margin:0px auto;">
		<form id="form1" action="php/checkLogin.php" method="post">
			<table style="width:300px;" cellpadding="1" cellspacing="0">
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td><button id="cmdPost">Submit</button></td>
				</tr>
			</table>
		</form>
	</div>
		
	<script src="scripts/jquery.1.6.2.min.js" type="text/javascript"></script>
	<script src="scripts/jquery.prettyLoader.js" type="text/javascript"></script>
	<script type="text/javascript">
	   $(document).ready(function () {
			$.prettyLoader({ bind_to_ajax: false, delay: 10, loader: "images/prettyloader/ajax-loader.gif" });
			$(document).ajaxStart(function () {
				$.prettyLoader.show(5000);
			}).ajaxStop(function () {
				$.prettyLoader.hide();
			});

			$("#pnlLoginForm").hide();
			$("#cmdLogin").click(function(){
				$("#pnlLoginForm").show();
				$("#pnlLogin").hide();
				return false;
			});
			
			// load sale items
	      fnLoad_fgSale();
			$("#tblSales").find("textarea").each(function () {
				// alert("found");
            $(this).css({ "height": this.scrollHeight, "overflow":"auto"});
				$(this).attr("readonly", true);
         });

	   });

	   ///<summary>Load Sale Item</summary>
	   function fnLoad_fgSale() {
	      $.ajax({
	         type: "POST",
	         url: "php/fnLoad_fgSales.php",
	         data: "",
	         contentType: "application/json; charset=utf-8",
	         datatype: "json",
	         async: false,
	         success: function (data, textStatus, XMLHttpRequest) {
	            if (data.length > 0) {
	               $("#tblSales").append(data);

	               // attach table links
	               $("#tblSales tr").each(function () {
							// hide ID column
	                  $(this).find(" td:eq(0)").css({ "display": "none" });
							$(this).find(" td:eq(3)").css({ "display": "none" });
							// format currency column
							if ( $(this).find("td").length > 2 ){
								var dVal = parseFloat($(this).find("td:eq(2)").html());
								$(this).find("td:eq(2)").html(fnFormatDollar(dVal));
							}
							// update col align
							$(this).find("td").css({"text-align":"left"});
							$(this).find("td:eq(2)").css({"text-align":"center"});
	               });  
						
						$("#tblSales").find("tr:odd").addClass("odd");
						
	            }
	         },
	         error: function (err) {
	            alert("fnLoad_fgSale - failed");
	         }
	      });

	      return true;
	   }
 
		  /// Added to format Currency. (Example: 1234.5678 -> $1,234.57)
		function fnFormatDollar(num) {

        if (!Array.prototype.reduce) {
            Array.prototype.reduce = function reduce(accumulator) {
                var i, l = this.length, curr;

                if (typeof accumulator !== "function") // ES5 : "If IsCallable(callbackfn) is false, throw a TypeError exception."  
                    throw new TypeError("First argument is not callable");

                if ((l == 0 || l === null) && (arguments.length <= 1))// == on purpose to test 0 and false.  
                    throw new TypeError("Array length is 0 and no second argument");

                if (arguments.length <= 1) {
                    curr = this[0]; // Increase i to start searching the secondly defined element in the array  
                    i = 1; // start accumulating at the second element  
                }
                else {
                    curr = arguments[1];
                }

                for (i = i || 0; i < l; ++i) {
                    if (i in this)
                        curr = accumulator.call(undefined, curr, this[i], i, this);
                }

                return curr;
            };
        }

        var p = num.toFixed(2).split(".");
        return "$" + p[0].split("").reverse().reduce(function (acc, num, i, orig) {
            return num + (i && !(i % 3) ? "," : "") + acc;
        }, "") + "." + p[1];
		}
	
	
	</script>
</body>
</html>
