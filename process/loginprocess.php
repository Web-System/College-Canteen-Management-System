<?php

include('../db/connection.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
	if(isset($_POST['user']) && !empty($_POST['user'])){
		$user=$_POST['user'];
	}else{
		$msg = "Please Enter your Email address.";
		errorMsg($msg);
	}

	if(isset($_POST['pass']) && !empty($_POST['pass'])){
		$pass=$_POST['pass'];
	}else{
		$msg = "Please Enter your Password.";
		errorMsg($msg);
	}

    $usertype=$_POST['usertype'];
	if(isset($msg)){
		errorMsg($msg);
	}else{
if($usertype =="Admin"){
	$q1 ="SELECT * FROM admin  " ;
	$result =$conn->query($q1);
	if($result->num_rows==1){
		$row=$result->fetch_assoc();
		if($row['pass']==$pass && $row['username']==$user){
			header('Location: ../adminhome.php');
		}else{
			echo "<script> alert('Check Your Credentials . ');  
			window.location.href='../login.php';</script> " ;
		}
	}
}else{
	$q2 = "SELECT * FROM students WHERE Email='$user' " ; 
	$result2 =$conn->query($q2);
	if($result2->num_rows==1){
		$row2=$result2->fetch_assoc();
		if($row2['Password']==$pass){
			$id2=$row2['id'];
			session_start();
			$_SESSION['loginuser'] = $id2;
			echo $conn->error;
			header('Location:../studenthome.php');
			
		}else{
			echo "<script> alert('Check Your Credentials . ');  
			window.location.href='../login.php';</script>
			";
		}
	

	}else{
				echo "<script> alert('No any register user with the Email.');  
			window.location.href='../login.php';</script> " ;
	}
}

	}
}
function errorMsg($msg){
	header('Location:../login.php?msg='.$msg);
}

?>