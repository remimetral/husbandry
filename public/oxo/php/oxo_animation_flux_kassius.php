<?php

//header('Content-type: text/xml; charset=UTF-8');

function read_body($curl_handle, $string)
{
	//$length = strlen($string);
	echo $string;
	/*if ( strstr($string, 'La question a été envoyée') != false ){
		
		global $ligne;
		global $id_user;
		global $question;
		global $bd;
		
		$sms_nb = $ligne["sms_nb"]-1;
		$query2 = "update utilisateurs set sms_nb='" .$sms_nb. "' where id = '" .$id_user. "'";
		mysql_query( $query2 );
		
		if ( $ligne["pwd_valid"] == "" ){
			
			$query3 = "update utilisateurs set pwd_valid='ok' where id = '" .$id_user. "'";
			mysql_query( $query3 );
			
		}
		
		$query4 = "insert into histo_question ( id_user, question, date_insertion ) values (";
		$query4.= "'" .$id_user. "',";	
		$query4.= "'" .$question. "',";	
		$query4.= "'" . date("Y-m-d H:i:s") . "')";			
		@mysql_query( $query4 );
		
		echo "&msg=OK&sms_nb=" . $sms_nb;
		
		$bd->close();
		
		
	}else{
		echo "&msg=ERROR";
	}
	
	return $length;*/
}



/*$postParams = array(
		   "SERVICE"         	=>      "118218",
		   "ORIGIN"           	=>      $ligne["tel"],
		   "TEXT"            	=>      utf8_encode($question), //urlencode("test")
		   "ROUTE"           	=>      "websms", 
 )*/
$curl_handle=curl_init();
//curl_setopt($curl_handle, CURLOPT_URL, 'http://www.lenumero.fr/preview/toutsurtout/test.php');
curl_setopt($curl_handle, CURLOPT_URL, 'http://fdj-oxo-pp.nextedia.com/xml/movies.xml');
//curl_setopt($curl_handle, CURLOPT_POST, 1);
curl_setopt($curl_handle, CURLOPT_PORT, 80);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 10);
//curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $postParams);
//curl_setopt($curl_handle, CURLOPT_USERPWD, "partoxo:res!oxo");
//curl_setopt($curl_handle, CURLOPT_USERPWD, "kassius:kassiusairforce");
//curl_setopt($curl_handle, CURLOPT_WRITEFUNCTION, read_body);

echo curl_exec($curl_handle);

curl_close($curl_handle);
			
			

?>