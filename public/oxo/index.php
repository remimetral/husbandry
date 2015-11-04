<?php
if(isset($_GET["p"]))
{
	$p = $_GET["p"] ;
}else{
	$p = "" ;
}

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Jeux de tirage en ligne, Jouer à OXO, OXO.fr</title>
<META name="description" content="Retrouver le jeu de tirage OXO sur le site de la Française des Jeux et jouer en ligne. Voir les tirages et les derniers résultats. Retrouvez les derniers gagnants.">
<META name="keywords" content="Jeu en ligne,Jouer en ligne,Jeu d’argent,Jeu d’argent en ligne,Pari en ligne,Jeu de tirage,Jeu de hasard, Jouer à Oxo, Gagnants,Tirage loterie,Résultats loterie,Oxo, Résultats Oxo,Tirages Oxo, Gagnants Oxo, Numéros Oxo, Tirage immédiat, Tirage national, Tirage soir,Jackpot roulant, Oxo joker">
<script src="scripts/scripts.js"></script>
<script language="JavaScript" type="text/javascript">
<!--
// -----------------------------------------------------------------------------
// Globals
// Major version of Flash required
var requiredMajorVersion = 8;
// Minor version of Flash required
var requiredMinorVersion = 0;
// Minor version of Flash required
var requiredRevision = 0;
// the version of javascript supported
var jsVersion = 1.0;
// -----------------------------------------------------------------------------
// -->
</script>
<script language="VBScript" type="text/vbscript">
<!-- // Visual basic helper required to detect Flash Player ActiveX control version information
Function VBGetSwfVer(i)
  on error resume next
  Dim swControl, swVersion
  swVersion = 0
  
  set swControl = CreateObject("ShockwaveFlash.ShockwaveFlash." + CStr(i))
  if (IsObject(swControl)) then
    swVersion = swControl.GetVariable("$version")
  end if
  VBGetSwfVer = swVersion
End Function
// -->
</script>
<script language="JavaScript1.1" type="text/javascript">
<!-- // Detect Client Browser type
var isIE  = (navigator.appVersion.indexOf("MSIE") != -1) ? true : false;
var isWin = (navigator.appVersion.toLowerCase().indexOf("win") != -1) ? true : false;
var isOpera = (navigator.userAgent.indexOf("Opera") != -1) ? true : false;
jsVersion = 1.1;
// JavaScript helper required to detect Flash Player PlugIn version information
function JSGetSwfVer(i){
	// NS/Opera version >= 3 check for Flash plugin in plugin array
	if (navigator.plugins != null && navigator.plugins.length > 0) {
		if (navigator.plugins["Shockwave Flash 2.0"] || navigator.plugins["Shockwave Flash"]) {
			var swVer2 = navigator.plugins["Shockwave Flash 2.0"] ? " 2.0" : "";
      		var flashDescription = navigator.plugins["Shockwave Flash" + swVer2].description;
			descArray = flashDescription.split(" ");
			tempArrayMajor = descArray[2].split(".");
			versionMajor = tempArrayMajor[0];
			versionMinor = tempArrayMajor[1];
			if ( descArray[3] != "" ) {
				tempArrayMinor = descArray[3].split("r");
			} else {
				tempArrayMinor = descArray[4].split("r");
			}
      		versionRevision = tempArrayMinor[1] > 0 ? tempArrayMinor[1] : 0;
            flashVer = versionMajor + "." + versionMinor + "." + versionRevision;
      	} else {
			flashVer = -1;
		}
	}
	// MSN/WebTV 2.6 supports Flash 4
	else if (navigator.userAgent.toLowerCase().indexOf("webtv/2.6") != -1) flashVer = 4;
	// WebTV 2.5 supports Flash 3
	else if (navigator.userAgent.toLowerCase().indexOf("webtv/2.5") != -1) flashVer = 3;
	// older WebTV supports Flash 2
	else if (navigator.userAgent.toLowerCase().indexOf("webtv") != -1) flashVer = 2;
	// Can't detect in all other cases
	else {
		
		flashVer = -1;
	}
	return flashVer;
} 
// When called with reqMajorVer, reqMinorVer, reqRevision returns true if that version or greater is available
function DetectFlashVer(reqMajorVer, reqMinorVer, reqRevision) 
{
 	reqVer = parseFloat(reqMajorVer + "." + reqRevision);
   	// loop backwards through the versions until we find the newest version	
	for (i=25;i>0;i--) {	
		if (isIE && isWin && !isOpera) {
			versionStr = VBGetSwfVer(i);
		} else {
			versionStr = JSGetSwfVer(i);		
		}
		if (versionStr == -1 ) { 
			return false;
		} else if (versionStr != 0) {
			if(isIE && isWin && !isOpera) {
				tempArray         = versionStr.split(" ");
				tempString        = tempArray[1];
				versionArray      = tempString .split(",");				
			} else {
					versionArray      = versionStr.split(".");
			}
			versionMajor      = versionArray[0];
			versionMinor      = versionArray[1];
			versionRevision   = versionArray[2];
			
			versionString     = versionMajor + "." + versionRevision;   // 7.0r24 == 7.24
			versionNum        = parseFloat(versionString);
        	// is the major.revision >= requested major.revision AND the minor version >= requested minor
			if ( (versionMajor > reqMajorVer) && (versionNum >= reqVer) ) {
				return true;
			} else {
				return ((versionNum >= reqVer && versionMinor >= reqMinorVer) ? true : false );	
			}
		}
	}	
}

// -->
</script>





</head>


<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div id="main" style="width:100%; height:100%; overflow:hidden">
<script language="JavaScript" type="text/javascript">
<!-- 
// Version check based upon the values entered above in "Globals"
var hasReqestedVersion = DetectFlashVer(requiredMajorVersion, requiredMinorVersion, requiredRevision);

// Check to see if the version meets the requirements for playback
if (hasReqestedVersion) {  // if we've detected an acceptable version
  } else {  // flash is too old or we can't detect the plugin
	location.replace( "noflash.html" );
  }
// -->
</script>



<div align="center">
	<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td align="center">
			<script>writeFlash("index.swf?d=<?php echo date("Hi", mktime()) ?>&j=<?php echo date("dmY", mktime()) ?>&p=<? echo $p ?>&che=http://nextedia.cache.coltfrance.com/fdjeux/oxo/V2/preprod/");</script>
            
		</tr>
	</table>
</div>
<script type="text/javascript">
<!--
xtnv = document;        //parent.document or top.document or document         
xtsd = "http://logi3";
xtsite = "85873";
xtn2 = "77";        // level 2 site 
xtpage = "";        //page name (with the use of :: to create chapters)
xtdi = "";        //implication degree
//-->
</script>
<script type="text/javascript" src="scripts/xtcore.js"></script>
<noscript>
<img width="1" height="1" alt="" src="http://logi3.xiti.com/hit.xiti?s=85873&s2=77&p=&di=&" >
</noscript>

<!-- Tag for Activity Group: Lancement Oxo Mars 09, Activity: Home Page -->

<!-- Start of DoubleClick Spotlight Tag: Please do not remove-->
<!-- Activity Name for this tag is:Home Page -->
<!-- Web site URL where tag should be placed: http://fdj-oxo-pp.nextedia.com/ -->
<!-- Creation Date:03/11/09 -->
<SCRIPT language="JavaScript">
var axel = Math.random()+"";
var a = axel * 10000000000000;
document.write('<IFRAME SRC="http://fls.doubleclick.net/activityi;src=2213627;type=oxo2;cat=hpoxo2;ord='+ a + '?" WIDTH=1 HEIGHT=1 FRAMEBORDER=0></IFRAME>');
</SCRIPT>
<NOSCRIPT>
<IFRAME SRC="http://fls.doubleclick.net/activityi;src=2213627;type=oxo2;cat=hpoxo2;ord=ns1?" WIDTH=1 HEIGHT=1 FRAMEBORDER=0></IFRAME>
</NOSCRIPT>
<!-- End of DoubleClick Spotlight Tag: Please do not remove-->
</div>
</body>
</html>

