// Affichage SWF
function writeFlash(fichier) {
	document.write('<object type="application/x-shockwave-flash" data="'+fichier+'" width="100%" height="100%">');
	document.write('	<param name="movie" value="'+fichier+'" />');
	document.write('	<param name="quality" value="high" />');
	document.write('	<param name="scale" value="noscale" />');
	document.write('	<param name="menu" value="false" />');
	document.write(' 	<embed src="'+fichier+'" quality="high" width="100%" height="100%" scale="noscale" menu="false"></embed>');
	document.write('</object>');	
}