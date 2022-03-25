<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
function MM_nbGroup(event, grpName) { //v6.0
  var i,img,nbArr,args=MM_nbGroup.arguments;
  if (event == "init" && args.length > 2) {
    if ((img = MM_findObj(args[2])) != null && !img.MM_init) {
      img.MM_init = true; img.MM_up = args[3]; img.MM_dn = img.src;
      if ((nbArr = document[grpName]) == null) nbArr = document[grpName] = new Array();
      nbArr[nbArr.length] = img;
      for (i=4; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
        if (!img.MM_up) img.MM_up = img.src;
        img.src = img.MM_dn = args[i+1];
        nbArr[nbArr.length] = img;
    } }
  } else if (event == "over") {
    document.MM_nbOver = nbArr = new Array();
    for (i=1; i < args.length-1; i+=3) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = (img.MM_dn && args[i+2]) ? args[i+2] : ((args[i+1])? args[i+1] : img.MM_up);
      nbArr[nbArr.length] = img;
    }
  } else if (event == "out" ) {
    for (i=0; i < document.MM_nbOver.length; i++) {
      img = document.MM_nbOver[i]; img.src = (img.MM_dn) ? img.MM_dn : img.MM_up; }
  } else if (event == "down") {
    nbArr = document[grpName];
    if (nbArr)
      for (i=0; i < nbArr.length; i++) { img=nbArr[i]; img.src = img.MM_up; img.MM_dn = 0; }
    document[grpName] = nbArr = new Array();
    for (i=2; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = img.MM_dn = (args[i+1])? args[i+1] : img.MM_up;
      nbArr[nbArr.length] = img;
  } }
}
//-->
</script>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body onload="MM_preloadImages('happyface.jpg','syksy.gif','kesa.gif','kahvi.gif','kuppi.gif','transparent_smile.gif')">
<h1>Navigation bar</h1>
<table border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><a href="index.php" target="_top" onclick="MM_nbGroup('down','group1','Harjoitukset','syksy.gif',1)" onmouseover="MM_nbGroup('over','Harjoitukset','kesa.gif','syksy.gif',1)" onmouseout="MM_nbGroup('out')"><img src="Kuvat/kevat.gif" alt="Harjoituksiin" name="Harjoitukset" width="40" height="40" border="0" id="Harjoitukset" onload="" /></a></td>
    <td><a href="Vieraskirja/laheta.php" target="_top" onclick="MM_nbGroup('down','group1','Vieraskirja','kahvi.gif',1)" onmouseover="MM_nbGroup('over','Vieraskirja','kuppi.gif','transparent_smile.gif',1)" onmouseout="MM_nbGroup('out')"><img src="Kuvat/kahvi.gif" alt="Vieraskirjaan" name="Vieraskirja" width="79" height="79" border="0" id="Vieraskirja" onload="" /></a></td>
  </tr>
</table>
<p>&nbsp;</p>
<h1>&nbsp;</h1>
<h1>Rollover DW:ssä </h1>
<h1><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('syksy','','happyface.jpg',1)"><img src="Kuvat/syksy.gif" alt="SYksy" name="syksy" width="40" height="40" border="0" id="syksy" /></a></h1>
<h1>Flash button</h1>
<p>
  <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0','width','103','height','24','src','Kuvat/button1','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','bgcolor','','movie','Kuvat/button1' ); //end AC code
</script><noscript>
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
  <param name="BGCOLOR" value="" />
  <param name="movie" value="Kuvat/button1.swf" />
  <param name="quality" value="high" />
  <embed src="Kuvat/button1.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" ></embed>
</object>
</noscript>
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
