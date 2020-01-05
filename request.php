<?php

require_once 'Atompay.php';

if(isset($_POST['save']))
{
	$name = $_POST['name_field'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$mobile = $_POST['mobile'];
	$amount = $_POST['amount'];


	$env = "live"; 
	$login = 121120; //change your login
	$password = 'abc@555'; //change your password
	$product = "abcdemo";//change your product name
	$currency = "INR";
	$returnUrl = 'http://www.example.com/response.php';//change your response URL here
	$clientCode = '45554'; //change your reg no or table id
	$account = '63524'; 
	$requestHashKey = 'adaddfsa'; //change your request hash key here


	$atompay = new Atompay();
	$atompay->atom_request($env, $login, $password, $product, $amount, $currency, $returnUrl, $clientCode, $name, $email, $mobile, $address, $account, $requestHashKey);
}