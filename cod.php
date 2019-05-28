<?php

include("db.php");

if(isset($_POST['submit'])){
$nm=addslashes($_POST['nm']);
$dob=addslashes($_POST['dob']);
$wt=addslashes($_POST['wt']);
$ht=addslashes($_POST['ht']);
$no=addslashes($_POST['no']);
$em=addslashes($_POST['em']);
$occu=addslashes($_POST['occu']);
$gen=addslashes($_POST['gen']);
$med=addslashes($_POST['med']);
$alg=addslashes($_POST['allergies']);
$pur=addslashes($_POST['pur']);
$add=addslashes($_POST['add']);
$pnm=addslashes($_POST['pnm']);
$pri=addslashes($_POST['pri']);

date_default_timezone_set("Asia/Calcutta");
$dt=date('d-m-y H:i:s');
GLOBAL $pnm;
GLOBAL $pri;

$insert="INSERT INTO register(nm,dob,weight,height,em,no,med,allergies,des,adds,occu,gen,pnm,pri,dt,status,payment) VALUES ('$nm','$dob','$wt','$ht','$em','$no','$med','$alg','$pur','$add','$occu','$gen','$pnm','$pri','$dt','pending','Due')";

$query=mysqli_query($con,$insert)or die(mysqli_error($con));
global $nm;
global $no;
global $em;




if($query){

include 'GWAY/src/instamojo.php';

$api = new Instamojo\Instamojo('test_4efdc3b161129b177134e360fad', 'test_0b3cfdbc92d71729449e96c9bba','https://test.instamojo.com/api/1.1/');   

try {
    $response = $api->paymentRequestCreate(array(
        "purpose" =>  $pnm,
        "amount" => $pri,
        "buyer_name" => $nm,
        "phone" => $no,
        "send_email" => true,
        "send_sms" => true,

        "email" => $em,
        'allow_repeated_payments' => false,
        
        "redirect_url" => "https://www.jharkhanddiet.com/display.php?idp=$no",
        "webhook" => "https://www.jharkhanddiet.com/GWAY/webhook.php"
        ));
    //print_r($response);

    $pay_ulr = $response['longurl'];
    
    //Redirect($response['longurl'],302); //Go to Payment page

    header("Location: $pay_ulr");
    exit();

}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}     
 
  } 
 }
   else{
       echo "error";
   }
    echo $em;       
?>