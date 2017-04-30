<?php
session_start(); // Start a new session
// checkLogin.php
if ($_SESSION['loggedIn'] != "true") {
	header("Location: sale.php"); // Wherever you want the user to go when they fail the login
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">

<html>
<head>
	<title>For Sale</title>
	<LINK REL="stylesheet" HREF="CSS/MyStyles.css" TYPE="text/css">
	<link href="../css/cssPrettyLoader.css" rel="stylesheet" type="text/css" />
	
	<style type="text/css">
	   body{width:100%;height:100%;padding:0;margin:0;background-color:#C9E7F5;color:Black;}
		textarea {background-color:white; font-family:Helvetica, Arial, "Sans-serif";font-weight:normal;}
	
		#forsale {font-family:Helvetica, Arial, "Sans-serif";font-weight:normal;font-size:20pt;}
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
   <div>
      <table style="width:800px;margin:10px auto;border:1px solid black;vertical-align:top;">
         <tr>
            <td>Desc</td>
            <td><textarea id="txtDesc" type="text" cols="80" rows="3"></textarea></td>
            <td>Cost</td>
            <td><input id="txtCost" type="text" /></td>
            <td></td>
            <td><button id="cmdSave" >Save</button></td>
         </tr>
      </table>
   </div>	
   <div style="width:700px;margin:0 auto;min-height:300px;">
	   <table id="tblSales" cellpadding="1" cellspacing="0">
	      <colgroup>
		      <col style="width:500px;text-align:center;"></col>
		      <col style="width:100px;text-align:left;"></col>
		      <col style="width:100px;text-align:center;"></col>
	      </colgroup>
	      <tr>
		      <th>Desc</th>
		      <th>Cost&nbsp;</th>
		      <th>&nbsp;</th>
	      </tr>
	   </table>
   </div>

   <!--                     footer                           -->
   <script type="text/javascript" src="scripts/jsFooter.js"></script>
	
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
		
	      // load sale items
	      fnLoad_fgSale();

			
	      // save button
	      $("#cmdSave").click(function () {
	         fnSave_Sale();
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
							// format currency column
							if ( $(this).find("td").length > 2 ){
								var dVal = parseFloat($(this).find("td:eq(2)").html());
								$(this).find("td:eq(2)").html(fnFormatDollar(dVal));
							}
							// update col align
							$(this).find("td").css({"text-align":"left"});
							$(this).find("td:eq(2)").css({"text-align":"center"});
	               });
					
						$("#tblSales").find("textarea").each(function () {
							$(this).css({ "height": this.scrollHeight, "overflow":"auto"});
							$(this).attr("readonly", true);
						});
						
						$("#tblSales").find("tr:odd").addClass("odd");

	               // attach delete button click
	               $("#tblSales tr td a").click(function () {
	                  if (confirm("Are you sure you want to delete selected item?")) {
	                     fnDelete_Sale($(this).attr("rel"));

	                  }
	               });
	            }
	         },
	         error: function (err) {
	            alert("fnLoad_fgSale - failed");
	         }
	      });

	      return true;
	   }

	   ///<summary>Delete Sale Item</summary>
	   function fnDelete_Sale(v_nSaleID) {
         $.ajax({
	         type: "POST",
	         url: "php/fnDelete_Sale.php",
	         data: { nSaleID : v_nSaleID },
	         async: false,
	         success: function (data, textStatus, XMLHttpRequest) {
	            // alert("fnJTest - ID:" + v_nSaleID + " Data:" + data);

               // clear existing data rows
	            $("#tblSales").find("tr:gt(0)").remove();
               // re-load data
	            fnLoad_fgSale();
	         },
	         error: function (err) {
	            alert("fnDelete_Sale - failed");
	         }
	      });

	      return true;
	   }

	   ///<summary>Save Sale Item</summary>
	   function fnSave_Sale() {
	      $.ajax({
	         type: "POST",
	         url: "php/fnSave_Sale.php",
	         data: { sDesc: $("#txtDesc").val(), dCost: $("#txtCost").val() },
	         async: false,
	         success: function (data, textStatus, XMLHttpRequest) {
	            if (data != "") {
                  // erorr message  
	               alert("fnSave_Sale - Data:" + data);
	            } else {
	               // clear existing data rows
	               $("#tblSales").find("tr:gt(0)").remove();
	               // re-load data
	               fnLoad_fgSale();
						// clear
						$("#txtDesc").val("");
						$("#txtCost").val("");
               }
	         },
	         error: function (err) {
	            alert("fnSave_Sale - failed");
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
