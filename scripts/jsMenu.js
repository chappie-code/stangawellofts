var sHtml;

sHtml = "<div id='menubackground'><ul id='menu'>"
      + "<li id='mnuSendMain'><a href='mail.php'><img id='imgEmail' src='/images/email.gif'/> Send Mail</a></li>"
      + "<li id='mnuStanGawelLofts'><a href='index.php'>Stan Gawel Lofts</a>"
         + "<ul>"
            + "<li><a href='homepage.php'>Homepage</a></li>"
            + "<li><a href='Overview.php'>Breeding Catalogue</a></li>"
            + "<li><a href='pedigree.php'>Private Page</a></li>"
            + "<li><a href='2006/2006champions.html'>2006 Alberta Classic</a></li>"
            + "<li><a href='AlK.html'>Al Kuzyk's birds</a></li>"
         + "</ul>"
      + "</li>"
      + "<li id='mnuThePolishPrince'><a href='index.php'>The Polish Prince</a></li>"
      + "<li id='mnu'><a href='#'>Send Mail</a></li>"
      + "<li id='mnu'><a href='#'>Send Mail</a></li>"
      + "<li id='mnuAdmin'><a href='#'>Administration</a>"
            + "<ul>"
               + "<li><a href='wfrmAdministration.aspx'>Administration</a></li>"
               + "<li class='linebreak'>&nbsp;</li>"
               + "<li id='mnuLoginList' runat='server'><a href='wfrmLoginList.aspx'>Login List</a></li>"
            + "</ul>"
      + "</li>"
      
   + "</ul><div>"


document.write(sHtml);