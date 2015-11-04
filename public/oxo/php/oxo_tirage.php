<?php

function read_body($curl_handle, $string)
{
	echo $string;

}

$curl_handle=curl_init();
curl_setopt($curl_handle, CURLOPT_URL, 'http://www2.integ.fdjeux.com/jeux/oxo/swf/oxo_resultat.swf');
//curl_setopt($curl_handle, CURLOPT_POST, 1);
curl_setopt($curl_handle, CURLOPT_PORT, 80);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($curl_handle, CURLOPT_USERPWD, "partoxo:res!oxo");

echo curl_exec($curl_handle);

curl_close($curl_handle);
			
			

?>