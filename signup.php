<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
	h1{
			top:5px;
			text-align: center;
			color: white;
			background:rgb(26, 135, 199);


		}
		.A{
			height: 100%;
			width: 100%;
		}
		img{
			max-width: 100%;
			height: 100%;

		}

		body{
			background-image:url(img/q11.png); 
			background-position:unset;
            background-repeat: no-repeat;
			  background-size:cover ;
			  position:relative;
			
			
			
		}
		
		/* form{
			color: black;
			font-style: bold;
			font-size: 19px;
			width: 40%;
			height: 50%;
	        position:fixed;
	        left: 455px;
	        top:55px;
	       
	         

		} */
		/* fieldset{
			width: 80%;
			color: black;
			border:100;
		} */

		.mydiv{
			top: 50px;
			margin-left:800px;
			background-color: rgba(0,0,0,0.3);
			color: white;
			width: 30%;
		}

	.error{
		background:red;
		padding:10px;
		width:30%;
		color:white;
		border-radius:10px;
	}
	
		
	</style>
</head>
<body>

		
	<h1>College Canteen Management System</h1>
	
	<?php 
	if(isset($_GET['msg'])){ ?>
	<div class="error">
		<?php echo $_GET['msg']; ?>
	</div>
	<?php } ?>

 <div class="mydiv">
	<form action='process/insertstudent.php' method="post">
<fieldset border="6px" border-color="black">
	<legend><h2>Sign Up </h2></legend>
    Fullname:<input type="text" name="Fullname" placeholder="Enter your Fullname" id="name" ><br><br>
    Contact:<input type="integer" name="Contact" id="number" placeholder="Enter your contact number" ><br><br>
    E-mail:<input type="email" name="Email" placeholder="Enter your Gmail" id="name" ><br><br>
    Password:<input type=password name='password' placeholder="Enter your password" ><br><br>

<label for ="Subjects">Choose your semester:</label>
	<select name="semester" >
	       	<optgroup label="BCA" >
	       		<option value="BCA 1st">BCA 1st</option>
	       		<option value="BCA 2nd">BCA 2nd</option>
	       		<option value="BCA 3rd">BCA 3rd</option>
	       		<option value="BCA 3rd">BCA 4th</option>
	       		<option value="BCA 5th">BCA 5th</option>
	       		<option value="BCA 6th">BCA 6th</option>
	       		<option value="BCA 7th">BCA 7th</option>
	       		<option value="BCA 8th">BCA 8th</option>
	       	 </optgroup>

	       	 	<optgroup label="Bsc Csit" >
	       		<option value="Bsc Csit 1st">Bsc Csit 1st</option>
	       		<option value="Bsc Csit 2nd">Bsc Csit 2nd</option>
	       		<option value="Bsc Csit 3rd">Bsc Csit 3rd</option>
	       		<option value="Bsc Csit 4th">Bsc Csit 4th</option>
	       		<option value="Bsc Csit 5th">Bsc Csit 5th</option>
	       		<option value="Bsc Csit 6th">Bsc Csit 6th</option>
	       		<option value="Bsc Csit 7th">Bsc Csit 7th</option>
	       		<option value="Bsc Csit 8th">Bsc Csit 8th</option>
	       	 </optgroup>

	       	 <optgroup label="BIM" >
	       		<option value="BIM 1st">BIM 1st</option>
	       		<option value="BIM 2nd">BIM 2nd</option>
	       		<option value="BIM 3rd">BIM 3rd</option>
	       		<option value="BIM 4th">BIM 4th</option>
	       		<option value="BIM 5th">BIM 5th</option>
	       		<option value="BIM 6th">BIM 6th</option>
	       		<option value="BIM 7th">BIM 7th</option>
	       		<option value="BIM 8th">BIM 8th</option>
	       	 </optgroup> 
	       	 <optgroup label="BBM" >
	       		<option value="BBM 1st">BBM 1st</option>
	       		<option value="BBM 2nd">BBM 2nd</option>
	       		<option value="BBM 3rd">BBM 3rd</option>
	       		<option value="BBM 4th">BBM 4th</option>
	       		<option value="BBM 5th">BBM 5th</option>
	       		<option value="BBM 6th">BBM 6th</option>
	       		<option value="BBM 7th">BBM 7th</option>
	       		<option value="BBM 8th">BBM 8th</option>
	       	 </optgroup> 
	       	</select>
	       	<br><br>
	       	Security Question:<select name="Security" value="Security Question">
	       		<option> What is your Nickname??  </option>
	       		<option>What is your Father's name?? </option>
	       		<option> What is your Favourite Game?? </option>
	       		
	       		<option> What is your Mother's name?? </option>
	       	</select> <br><br>
	       

	       Your Answer: <input type="text" name="ans" > <br><br>
		   Choose a Profile : <input type="file" name="img"><br><br>
    <input type="submit"  name="btnlogin" value='Sign up'><br>

</fieldset>
</div>
</body>

</html>