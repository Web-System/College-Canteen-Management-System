<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			background-color:  #FFFEF2;
			background-image: url(img/chef.jpg);
			background-position: inherit;
            background-repeat: no-repeat;
            background-size: 100% 800px;
			
			font-size: 23px;
			max-height: 1345px;
			color: black;
			background-repeat: no-repeat;
		}
		/*form{
			width: 40%;
			height: 50%;
	        position:fixed;
	        left: 655px;
	        top:150px;
	        
		}*/
		.button{
			 height: 11%;
            width: 20%;
           float: right;
            border: black;
 			padding:0px 0px;
            
  			font-size: 23px;
  			cursor: pointer;
		}
		.A{
			height: 11%;
			width: 40%;
		}
		.btn {
		  
           background-color: #ff817e;
           color: #fff;
           font-size: 26px;
           text-transform: uppercase;
           padding: 20px 15px;
}
       a:hover{
         	background-color:black;
			 color: white;
         }
         .forgot{
         	font-size: 23px;
         }
         .field{
         	margin-left:63%;
         	margin-top: 50px;
         	width: 35%;
         	height: 350px;
         	background-color:  rgba(0,0,0,0.7);
			 color: white;
         }

       
		 a{
			 text-decoration: none;
			 color: black;
		 }
         
		 h2{
			text-align: center;
			color: white;
		 }
         .fieldset{
             height: 325px;
         }
         form{
             font-size: 18px;
         }

		 .error{
		background:red;
		/* padding:10px; */
		width:30%;
		color:white;
		border-radius:10px;
		height:30px;
		text-align:center;	
	}

	</style>
</head>
<body>


	<h2>College Canteen Management System</h2>

<?php 
	if(isset($_GET['msg'])){ ?>
	<div class="error">
		<?php echo $_GET['msg']; ?>
	</div>
	<?php } ?>


	<div class="field">
	<fieldset class="fieldset" border="6px" height="120px"   border-color="black">
		<legend class="legend"> <h2>Forgot Password</h2></legend>
    <form action='process/forgotprocess.php' method="post" >
        Enter Your Email: <input type="text" name="email" >
		<br>
		Your Security Question : <select name="Security" value="Security Question">
            <option> What is your Nickname??  </option>
            <option>What is your Father's name?? </option>
            <option> What is your Favourite Game?? </option>
            
            <option> What is your Mother's name?? </option>
        </select>
		<br>Answer : <input type=text class="A" name="ans" placeholder="Enter Your Answer" ><br>
		
		 <br>
		<input type="submit" name="Login" value="Retrieve Password">
    <p class="forgot">
		<br>
		Create New Account. <a href="signup.html">Click Me</a>
		</p>
	</form>
	</fieldset>
            </div>            

</body>
</html>