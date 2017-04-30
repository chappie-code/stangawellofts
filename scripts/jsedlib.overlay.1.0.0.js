/* SOF Overlay */
(function ($) {

   ///<summary>used to create a non-debug verson of the object</summary>
   $.fn.edlib_CreateOverlay = function () {
      return new cOverLay(null);
   }

   ///<summary>used to create a debug button to force the error dialog</summary>
   $.fn.edlib_CreateOverlay_Debug = function () {
      return new cOverLay(this.selector);
   }

   ///<summary>Used to test HTML part files. Also serves as a template for basic loading these files.</summary>
   $.fn.edlib_OpenHtmlPart = function (v_sFile) {
      // var oData = { };

      // Change message
      $.get(v_sFile, function (template) {
         // var sHtml = $.tmpl(template, oData);
         var sHtml = $.tmpl(template);
         if (sHtml != undefined) {
            m_oOverlay.fnCreate(sHtml);
            /* 
            $("#btnCancel").edlib_fnInitButton();
            $("#btnCancel").unbind("click");
            $("#btnCancel").click(function () {
            m_oOverlay.fnRemove();
            });
            $("#btnCancel").focus();
            $("#btnYes").edlib_fnInitButton();
            $("#btnYes").unbind("click");
            if ($.isFunction(evtOnClick_btnYes)) {
            $("#btnYes").click(evtOnClick_btnYes);
            }
            $("#btnYes").click(function () {
            if ($.isFunction(evtOnClick_btnYes)) {
            evtOnClick_btnYes.call();
            }
            }); */
         }
      })

      return true;
   }


   function cOverLay(v_sButtonSelector) {
      this.j_Btn = v_sButtonSelector == null ? $(v_sButtonSelector) : null;
      this.bVisible = false;
      this.bCreated = true;
      this.bDialog = false;
      this.sErrorTitle = "Error Stack";

      // function def's
      this.propVisible = propVisible;
      this.propDialog = propDialog;
      this.propCreated = propCreated;
      this.fnCreate = fnCreate;
      this.fnRemove = fnRemove;
      this.fnError_AddMessage = fnError_AddMessage;
      this.fnError = fnError;
      this.fnShowErrorStack = fnShowErrorStack

      // functions
      function propVisible(v_bValue) {
         /// <summary></summary>
         var oReturn = v_bValue;

         if (v_bValue == undefined) {
            oReturn = this.bVisible;
         } else {
            this.bVisible = v_bValue;
            if (v_bValue) {
               $("#Overlay").css({ height: $(document).height(), width: $(document).width(), display: "block" });
            } else {
               $("#Overlay").css({ height: "0px", width: "0px", display: "none" });
            }
         }

         return oReturn;
      }
      function propDialog() {
         /// <summary></summary>
         var bReturn = false;
         if (this.bDialog != undefined) {
            bReturn = this.bDialog;
         }
         return bReturn
      }
      function propCreated() {
         /// <summary></summary>
         var bReturn = false;
         if (this.bCreated != undefined) {
            bReturn = this.bCreated;
         }
         return bReturn
      }

      function fnCreate(sHtml) {
         /// <summary>Create an overlay</summary>
         var oDiv = $("#Overlay");
         if (oDiv.length <= 0) {
            $(document.body).append("<div id='Overlay'>&nbsp;</div>");
            oDiv = $("#Overlay");
            // oDiv.css({ height: "100%", width: "100%" });
            oDiv.css({ height: $(document).height(), width: $(document).width(), display: "block" });

            // set the body's overflow
            // $(document.body).css("overflow", "hidden");
            $(window).bind("resize.edlib_Overlay", function () {
               // alert("test");
               // var oDiv = $("#Overlay");
               // if (oDiv.length > 0 || oDiv.bVisible == true) {
               // var nHeight = $(document).height(); // -oDiv.outerHeight();
               // var nWidth = $(document).width(); // -oDiv.outerWidth();
               // $("#Overlay").css({ height: $(document).height(), width: $(document).width() });
               // }
            });

            // $(window).bind("scroll.edlib_Overlay", function () {
            // $(window).scroll(function () {
              // alert("scroll " + this.scrollLeft + "/" + this.scrollTop);

              // oDiv.css({ "margin": (-this.scrollLeft) + 'px' });
              // oDiv.css({ "margin": (-this.scrollTop) + 'px' });

               // if a horizontal scrollbar is present
               /*
               obj.find('.fht_fixed_header table').css('margin-left', (-this.scrollLeft) + 'px'); // scroll the fixed header equal to the table body's scroll offset
               if (options.footer && options.cloneHeaderToFooter) {
               // if a cloned footer is visible it needs to be scrolled too
               obj.find('.fht_fixed_footer_border').css('margin-left', (-this.scrollLeft) + 'px'); // scroll the fixed footer equal to the table body's scroll offset
               }
               */
            // });


            // Append the html
            if (sHtml != undefined) {
               // $(document.body).append(sHtml);
               oDiv.append(sHtml);
               this.bDialog = true;
            }
            // flag as created
            this.bCreated = true;

         }
         return true;
      }

      function fnRemove() {
         /// <summary> Remove the overlay </summary>
         $("#Overlay").remove();
         // $(document.body).css("overflow", "show");
         $(document).unbind("resize.edlib_Overlay");
         this.bDialog = false;
         this.bVisible = false;
         this.bCreated = false;

         return true;
      }

      function fnError_AddMessage(v_sError) {
         /// <summary> Show error in the overlay </summary>
         var $this = $(this);
         var oDefault = { oaError: null };
         var oOptions;
         var oaErrors = $.fn.oaErrors;
         var nLength = -1;

         // Ensure the array is initalized
         if (oaErrors == undefined) {
            oaErrors = new Array();
         } else {
            nLength = oaErrors.length - 1;
         }
         // Add new error item
         oaErrors[nLength + 1] = v_sError;
         // save the data
         $.fn.oaErrors = oaErrors;

         return true;
      }

      function fnError(v_sError, v_sTitle) {
         /// <summary>Add and error message and title then show the stack.</summary>
         this.sErrorTitle = v_sTitle;
         this.fnError_AddMessage(v_sError);
         this.fnShowErrorStack();
      }

      function fnShowErrorStack() {
         /// <summary>show error</summary>
         var oDiv = $("#Overlay");
         var sHtml = new Array();
         var nLength = 0;
         var oaError = $.fn.oaErrors;

         // Clear existing stack
         $("#btnCloseErrorStack").unbind("click");
         oDiv.find("div[id='error']").remove();

         if (oDiv.length == 0) {
            this.fnCreate();
            oDiv = $("#Overlay");
         }
         // Create HTML
         // position:relative;top:10px;left:10px;background-color:white;border:1px solid black;height:400px;width:400px;z-index:2;margin:50px auto;opacity:1;filter:Alpha(Opacity=100);
         // position:relative;top:10px;left:10px;background-color:white;border:1px solid black;height:300px;width:300px;z-index:2;margin:50px auto;opacity:1;filter:Alpha(Opacity=100);

         // sHtml[nLength] = "<div id='errorstack'>"
         // nLength++;
         sHtml[nLength] = "<table id='errorstack' cellspacing=0 cellpadding=0><tr" + ((oaError.length > 1) ? " colspan=2" : "") + "><td> <div id='errorstacktitle'>" + this.sErrorTitle + "</div> </td></tr>"
         nLength++;
         sHtml[nLength] = "<tr" + ((oaError.length > 1) ? " colspan=2" : "") + ">"
         nLength++;
         if (oaError.length > 1) {
            sHtml[nLength] = "<td><table cellspacing=0>"
            nLength++;
            for (nIndex = 0; nIndex < (oaError.length); nIndex++) {
               sHtml[nLength] = "<tr " + ((nIndex == 0) ? "class='SelectedError'" : "") + "  ><td>" + oaError[nIndex] + "</td></tr>";
               nLength++;
            }
            sHtml[nLength] = "</table></td>"
            nLength++;
         }
         // sHtml[nLength] = "<div id='errorstackmessage'>"
         sHtml[nLength] = "<td id='errortext'>"
         nLength++;
         sHtml[nLength] = oaError[0];
         nLength++;
         sHtml[nLength] = "</td></tr>"
         nLength++;
         sHtml[nLength] = "<tr><td id='errorstacksub1'>"
         nLength++;
         sHtml[nLength] = "<div id='pnlCloseErrorStack'><div id='btnCloseErrorStack' class='button' ><div></div>Close</div></div>"
         nLength++;
         sHtml[nLength] = "</td></tr>"
         nLength++;
         sHtml[nLength] = "</td></tr></table>"
         nLength++;

         // hide the first element
         // oDiv.first().hide();
         oDiv.children().hide();
         // compress and append
         oDiv.append(sHtml.join(""));
         // find and attach button event
         var Obj = this;
         $("#btnCloseErrorStack").click(function () {
            //return function () {
            //    function (Obj) {
            var oDiv = $("#Overlay");
            // flush the stack
            $.fn.oaErrors = undefined;
            // remove the button event
            $("#btnCloseErrorStack").unbind("click");
            // remove the html
            oDiv.find("table[id='errorstack']").remove();

            if (Obj.propDialog() == false) {
               // remove the entire overlay
               Obj.fnRemove();
            } else {
               // unhide the first element.
               oDiv.children().show();
            }
            //     } (Obj);
            // };
         });

         // $("#btnCloseErrorStack").click(function () {});
      }
   }




})(jQuery)
/* EOF Overlay */