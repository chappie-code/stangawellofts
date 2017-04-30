   var NoOffFirstLineMenus = 6;
/*   var LowBgColor = '#DFEFF7';
   var LowSubBgColor = '#DFEFF7';
   var HighBgColor = '#4686A6';
   var HighSubBgColor = '#4686A6';
   var FontLowColor = '#081916';
   var FontSubLowColor = '#081916';
   var FontHighColor = '#ffffff';
   var FontSubHighColor = '#ffffff';
   var BorderColor = '#663300';
   var BorderSubColor = '#663300';*/
	var LowBgColor='#C9E7F5';			
	var LowSubBgColor='#C9E7F5';			
	var HighBgColor='#B3E0F5';			
	var HighSubBgColor='#B3E0F5';
	var FontLowColor='#0D2E3D';			
	var FontSubLowColor='#0D2E3D';			
	var FontHighColor='#FFFFFF';			
	var FontSubHighColor='#FFFFFF';			
	var BorderColor='#0D2E3D';			
	var BorderSubColor='#0D2E3D';			
	var BorderWidth=1;				
	var BorderBtwnElmnts=1;			
	var FontFamily="arial,comic sans ms,technical"	
	var FontSize=9;				
	var FontBold=1;				
	var FontItalic=0;				
	var MenuTextCentered='left';			
	var MenuCentered='center';			
	var MenuVerticalCentered='top';		
	var ChildOverlap=0;				
	var ChildVerticalOverlap=0;			
	var StartTop=3;				
	var StartLeft=0;				
	var VerCorrect=0;				
	var HorCorrect=0;				
	var LeftPaddng=7;				
	var TopPaddng=2;				
	var FirstLineHorizontal=1;			
	var MenuFramesVertical=1;			
	var DissapearDelay=1000;			
	var TakeOverBgColor=1;			
	var FirstLineFrame='self';			
	var SecLineFrame='self';			
	var DocTargetFrame='self';			
	var TargetLoc='';				
	var HideTop=0;				
	var MenuWrap=1;				
	var RightToLeft=0;				
	var UnfoldsOnClick=0;			
	var WebMasterCheck=0;			
	var ShowArrow=1;				
	var KeepHilite=1;
	var Arrws = ['images/tri.gif', 5, 10, 'images/tridown.gif', 10, 5, 'images/trileft.gif', 5, 10];

function BeforeStart(){return}
function AfterBuild(){return}
function BeforeFirstOpen(){return}
function AfterCloseAll(){return}

Menu1 = new Array(" <img src='images/email.gif'/> Send Mail", "mail.php", "", 0, 20, 120);

Menu2 = new Array("Stan Gawel Lofts ", "index.php", "", 4,20,150);
   Menu2_1 = new Array("Homepage ", "homepage.php", "", 0, 20, 150);
   Menu2_2 = new Array("Breeding Catalogue ", "Overview.php", "", 0);
   Menu2_3 = new Array("Private Page ", "pedigree.php", "", 0);
   Menu2_4 = new Array("2006 Alberta Classic ", "2006/2006champions.html", "", 0);

Menu3=new Array("The Polish Prince","index.php","",2,20,150);
   Menu3_1 = new Array("The Polish Prince ", "ThePolishPrince.html", "", 0, 20, 150);
   Menu3_2 = new Array("His Race Record ", "RaceRecord.html", "", 0);

Menu4 = new Array("Mike Ganus Lofts", "javascript:{window.open('http://www.ganusfamilyloft.com/','new_page1','width=600,height=400,left=1,top=1,toolbar,menubar,scrollbars,resizable,directories,status,location,copyhistory,');}", "", 0, 20, 120);

Menu5=new Array("Friends ","index.php","",8,20,150);
   Menu5_1 = Array("Karl von Gardony ", "Karl.php", "", 0, 20, 122);
   Menu5_2 = new Array("Ed Zielinski ", "FrankZielinski.html", "", 0, 20, 155);
   Menu5_3 = new Array("Bob Duhra Lofts ", "javascript:{window.open('http://www.bobduhralofts.com/','new_page1','width=600,height=400,left=1,top=1,toolbar,menubar,scrollbars,resizable,directories,status,location,copyhistory,');}", "", 0);
   Menu5_4 = new Array("F & D Lofts ", "javascript:{window.open('http://www.fdlofts.albertaclassic.net/','new_page1','width=600,height=400,left=1,top=1,toolbar,menubar,scrollbars,resizable,directories,status,location,copyhistory,');}", "", 0);
   Menu5_5 = new Array("Edmonton Classic ", "javascript:{window.open('http://www.goodchildlofts.com/index.php','new_page1','width=600,height=400,left=1,top=1,toolbar,menubar,scrollbars,resizable,directories,status,location,copyhistory,');}", "", 0);
   Menu5_6 = new Array("Harvey Singer Lofts ", "javascript:{window.open('http://www.singerlofts.com/','new_page1','width=600,height=400,left=1,top=1,toolbar,menubar,scrollbars,resizable,directories,status,location,copyhistory,');}", "", 0);
   Menu5_7 = new Array("Alex Bieche Lofts ", "javascript:{window.open('http://www.biechelofts.com/','new_page1','width=600,height=400,left=1,top=1,toolbar,menubar,scrollbars,resizable,directories,status,location,copyhistory,');}", "", 0);
   // Menu5_8 = new Array("Le Tour Des Maritimes ", "javascript:{window.open('http://www.tourdesmaritimes.com/','new_page1','width=600,height=400,left=1,top=1,toolbar,menubar,scrollbars,resizable,directories,status,location,copyhistory,');}", "", 0);
   Menu5_8 = new Array("Zenon Skuba ", "ZenonSkuba.php", "", 0);

Menu6 = new Array("For Sale", "sale.php", "", 0, 20, 122);

// Menu6_2=new Array("Alberta Classic ","javascript:{window.open('http://www.albertaclassic.com/','new_page2','width=600,height=400,left=1,top=1,toolbar,menubar,scrollbars,resizable,directories,status,location,copyhistory,');}","",0);
// Menu4_1=new Array("Master Breeder ","/Karl.php","",0,20,150);
// Menu4_2=new Array("The Protagonators ","/protagonators.php","",0);	
// Menu4_3=new Array("Reported in ","/Karl.php","",2);
// Menu4_3_1=new Array("American Racing Pigeon News ","/news.php","",0,20,166);
// Menu4_3_2 = new Array("The Racing Pigeon Digest ", "/digest.php", "", 0); 			