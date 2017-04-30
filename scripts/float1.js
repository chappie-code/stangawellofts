/***********************************************
* Floating image script- By Virtual_Max (http://www.geocities.com/siliconvalley/lakes/8620)
* Modified by Dynamic Drive for various improvements
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

//Step 1: Define unique variable names depending on number of flying images (ie:3):
var chip1, chip2, chip3, chip4, chip5, chip6
function pagestart(){
//Step 2: Using the same variable names as 1), add or delete more of the below lines (60=width, height=80 of image):
 chip1=new Chip("chip1",47,68);
 chip2=new Chip("chip2",47,68);
 chip3=new Chip("chip3",47,68);
 chip4=new Chip("chip4",47,68);
 chip5=new Chip("chip5",47,68);
 chip6=new Chip("chip6",47,68);
//Step 3: Using the same variable names as 1), add or delete more of the below lines:
movechip("chip1");
movechip("chip2");
movechip("chip3");
movechip("chip4");
movechip("chip5");
movechip("chip6");
}
if (window.addEventListener)
window.addEventListener("load", pagestart, false)
else if (window.attachEvent)
window.attachEvent("onload", pagestart)
else if (document.getElementById)
window.onload=pagestart