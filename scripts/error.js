<!--


function stoperror(){
return true
}
window.onerror=stoperror
// -->

<!--


function newImage(arg) {
	if (document.images) {
		rslt = new Image();
		rslt.src = arg;
		return rslt;
	}
}


function changeImages() {
	if (document.images) {
		for (var i=0; i<changeImages.arguments.length; i+=2) {
			document[changeImages.arguments[i]].src = changeImages.arguments[i+1];
		}
	}
}


var preloadFlag = false;
function preloadImages() {
	if (document.images) {
		toss = newImage("http://www.stangawellofts.com/images/spacer.gif");
		arrow = newImage("http://www.stangawellofts.com/images/arrow1.gif");
		preloadFlag = true;
	}
}
// -->




<!--
if (self.parent.frames.length != 0)
        self.parent.location="http://www.stangawellofts.com";
// -->








<!-- Begin
function imgover(imgname){
imgname.src = "http://www.stangawellofts.com/images/arrow1.gif"
}
function imgout(imgname){
imgname.src = "http://www.stangawellofts.com/images/spacer.gif"
}
// End -->




