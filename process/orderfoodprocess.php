<?php

include('../db/connection.php');

$oname=$_POST['name'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];
$order=$_POST['order'];
$photo=$_POST['photo'];

session_start();
$id=$_SESSION['loginuser'];
$bill = $price * $order;

$sql = " INSERT INTO stuorder(Oname,Price,Quantity,studentOrder,Photo,sid,total_bill) VALUES('$oname','$price',
'$quantity','$order','$photo','$id','$bill')" ;


if($conn->query($sql)){

	echo "<script> alert('Ordered Successfully. ');  
			window.location.href='../studentmenu.php';</script> " ;

}else{
	echo ("Error occur" . $conn -> error);
}


?>