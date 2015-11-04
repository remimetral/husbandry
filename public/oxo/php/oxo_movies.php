<?php

$dateDepart = date("dmY", mktime(0, 0, 0, 3, 16, 2009)) ;

$mois = array("","Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre") ;
$first = true ;

/*if ( date("Hi", mktime()) <= "2030" ) {
	$jourDiff = $jourDiff - 1 ;
}*/

Header("content-type: application/xml");
echo "<videos>" ;
	
for ( $i=mktime(); $i>=mktime(0, 0, 0, 3, 16, 2009) ; $i -= 86400 )
//for ( $i=mktime(0, 0, 0, 5, 3, 2009); $i>=mktime(0, 0, 0, 3, 16, 2009) ; $i -= 86400 )
{ 
	
if ( $first == true ) {	
	
	if ( date("Hi", mktime()) >= "2030" ) {
		echo "<video titre=\"".date("d", $i )." ". $mois[date("n", $i)] ." " . date("Y", $i) ."\" url=\"http://nextedia.cache.coltfrance.com/fdjeux/oxo/videos/OXO_".date("d-m", $i).".swf\" type=\"sketch\" miniature=\"http://nextedia.cache.coltfrance.com/fdjeux/oxo/miniatures/OXO_".date("d-m", $i).".jpg\" position=\"32\" />" ;
		
	}
	$first = false ;
}else{
	echo "<video titre=\"".date("d", $i )." ". $mois[date("n", $i)] ." " . date("Y", $i) ."\" url=\"http://nextedia.cache.coltfrance.com/fdjeux/oxo/videos/OXO_".date("d-m", $i).".swf\" type=\"sketch\" miniature=\"http://nextedia.cache.coltfrance.com/fdjeux/oxo/miniatures/OXO_".date("d-m", $i).".jpg\" position=\"1\" />" ;
}

	
}

echo "<video titre=\"Spot TV\" url=\"http://nextedia.cache.coltfrance.com/fdjeux/oxo/videos/OXO-SpotTv.swf\" type=\"sketch\" miniature=\"http://nextedia.cache.coltfrance.com/fdjeux/oxo/miniatures/SpotTv.jpg\" position=\"0\"/>" ;
	
echo "<video titre=\"Spot TV\" url=\"http://nextedia.cache.coltfrance.com/fdjeux/oxo/videos/OXO-SpotTvp.swf\" type=\"spot\" miniature=\"http://nextedia.cache.coltfrance.com/fdjeux/oxo/miniatures/SpotTv.jpg\" position=\"0\"/>" ;
	
echo "<video type=\"sketch_tirage\" url=\"http://nextedia.cache.coltfrance.com/fdjeux/oxo/videos/OXO_".date("d-m", mktime()) .".swf\"/>" ;
	
echo "</videos>" ;
?>
