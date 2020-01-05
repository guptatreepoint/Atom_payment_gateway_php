<?php

require_once 'Atompay.php';

$atompay = new Atompay();
$response = $atompay->atomResponse('abcedaldffajljl'); // change your response has key

if(is_array($response))
{
	if(strtolower($response['f_code']) == 'ok')
	{
		echo "Success";
	}
	elseif(strtolower($response['f_code']) == 'c')
	{
		echo "Cancel";
	}
	else
	{
		echo "Failed";
	}
}