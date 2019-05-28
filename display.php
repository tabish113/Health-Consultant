
<html>
<head>
</head>
<body>  

<?php

$var1 = $_GET['payment_id'];
$var2 = $_GET['payment_request_id'];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/'.$var2);	//This is the Test API endpoint
//curl_setopt($ch, CURLOPT_URL, 'https://www.instamojo.com/api/1.1/payment-requests/'.$var2);  //This is the Live API endpoint
curl_setopt($ch, CURLOPT_HEADER, FALSE);               
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,array("X-Api-test_4efdc3b161129b177134e360fad", "X-Auth-Token:test_0b3cfdbc92d71729449e96c9bba"));
// eg: curl_setopt($ch, CURLOPT_HTTPHEADER,array("X-Api-Key:test_e92f2f1b554813ba81572a4ffh5", "X-Auth-Token:test_e9daf6854265ecd67d274k91t064"));
$response = curl_exec($ch);
curl_close($ch); 

$myArray = array(json_decode($response, true));


$respArray = json_decode($response, true);
 $item = $respArray['payment_request']['payments'][0]['status'];
       //The status that confirms your Payment. Credit = Successful transaction, Failed = Failed transaction. 
        
if($item=='Credit'){


	echo "<script>window.open('order_complete.php','_self')</script>";
}else{
	echo "<script>window.open('index.php','_self')</script>";
}

?>
</body>
</html>