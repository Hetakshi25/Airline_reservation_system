<?php
//include ('header.php');
include('connection.php');
session_start();
if(isset($_POST['submit']))
{
	$fname=mysqli_real_escape_string($conn,$_POST['fname']);
	$lname=mysqli_real_escape_string($conn,$_POST['lname']);
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$username=mysqli_real_escape_string($conn,$_POST['username']);
	$password=mysqli_real_escape_string($conn,$_POST['password']);
	$mobno=mysqli_real_escape_string($conn,$_POST['mobno']);
	$city=mysqli_real_escape_string($conn,$_POST['city']);
//	$state=mysqli_real_escape_string($conn,$_POST['state']);
	
	/*$select ="select * from registration where firstname='$fname' && lastname='$lname' && email='$email' && username='$username' && password='$password' && mobileno='$mobno' && city='$city' && state='$state' ";
	*/
	$select ="select * from registration where firstname='$fname' && lastname='$lname' && email='$email' && username='$username' && password='$password' && mobileno='$mobno' && city='$city' ";
	
	$result=mysqli_query($conn,$select);
	
	/*$select="select * from registration where email='$email'";
			$result=mysqli_query($conn,$select);*/
			
			if(mysqli_num_rows($result)>0)
			{
					$error[]='This E-mail Address Has Been Already Exists!';
			}
			else
			{
				/* Password validation*/
				if(strlen($_POST['password'])<3)
				{
						$error[]='Password must be 3 character or more';	
					
				}
				elseif(strlen($_POST['mobno'])>10)
				{
						$error[]='Mobile number should be 10 digits.';			
				}
				elseif (strlen($_POST['mobno'])<10)
				{
					
						$error[]='Mobile number should be 10 digits.';			
				}
			
				else
				{
					$insert = "insert into registration(firstname,lastname,email,username,password,mobileno,city) values('$fname','$lname','$email','$username','$password','$mobno','$city')";
					mysqli_query($conn,$insert);
					echo "<script>alert('register successfully')</script>";
					//header('location: login.php');
					/*if(mysqli_query($conn,$insert)){
						echo"refister successfully";
					}
					else{
						echo"error".mysqli_error();
					}*/
					
				}
				
			}		
}			
?>
<html>
<head>
    <title>Registration Form</title>
</head>
<body style="background:url(../img/flight5.jpeg);
				background-repeat:no-repeat;
				background-size:100% 100%">
		<style>
			
		*{
		box-sizing:border-box;
		}
		.form-container{
				width:380px;
				margin:auto;
				border-radius:25;
				background-color:rgba(0,0,0,0.2);

		}
		.form-container form .error-msg{
			margin:10px 0;
			display:block;
			background:crimson;
			color:#fff;
			border-radius:5px;
			font-size:20px:
		}
		.form-container form select{
			width:100%
			padding:10px 15px;
			font-size:16px;
			margin:8px 0;
		}
		.header input,button{
			
			border:none;
			padding-left:5px;
			font-size:15px;
			color:#333;
		}
		.header label1{
			font-size:17px;
			color:white;
		}
		.radio-btn span{
			color: #fff;
			margin-right: 5px;
			font-size: 17px;
		}
		.bg-text{
			background-color: rgba(0,0,0);
			background-color: rgba(0,0,0,0.3);
			color: white;
			font-weight: bold;
			border: 3px solid #f1f1f1;
			position: absolute;
			top: 40%;
			left: 50%;
			transform: translate(-50%,-50%);
			z-index: 2;
			padding: 20px;
			text-align:center;
		}
		p{
			font-size:18px;
			color:white;
		}
		a{
			font-size:18px;
			color:white;
		}

			 
		
			</style>
			<div id="box">
			<div class="form-container">
			<div class ="header">
			<div class="bg-text">
			<div class ="radio-btn">
			<form action=" " method="POST">	
    <center><br>
	<h2>Register Here</h2>
	</center><br>
	<?php
	if(isset($error))
	{
		foreach($error as $error)
		{
			echo'<span class="error-msg">'.$error.'</span>';
		};
	};
	
	?>
	<center>
    <form id="register" method="post">
	<table>
             <tr>
                <td>
                    <label1 for="Firstname">First Name: </label1>               
                 </td>
                 <td>
                    <input type="text" id="text" name="fname" required>
                 </td>
            </tr>
			
			<tr>
                <td>
                    <label1 for="lastname">Last Name: </label1>               
                 </td>
                 <td>
                    <input type="text" id="text" name="lname" required>
                 </td>
            </tr>
			
			<tr>
                <td>
                    <label1 for="Email">Email: </label1>               
                 </td>
                 <td>
                    <input type="email" id="email" name="email" required>
                 </td>
            </tr>
			
			<tr>
                <td>
                    <label1 for="username">Username: </label1>               
                 </td>
                 <td>
                    <input type="text" id="username" name="username" required>
                 </td>
            </tr>
			
			<tr>
                <td>
                    <label1 for="password">Password: </label1>               
                 </td>
                 <td>
                    <input type="password" id="password" name="password" required>
                 </td>
            </tr>
			
			<tr>
                <td>
                    <label1 for="mobile No">Mobile No: </label1>               
                 </td>
                 <td>
                    <input type="numeric" id="number" name="mobno" required>
                 </td>
            </tr>
			<tr>
                <td>
                    <label1 for="city">city: </label1>               
                 </td>
                 <td>
                    <input type="text" id="text" name="city">
                 </td>
            </tr>
			<tr>
				<td>
				</td>
			</tr>
			
			<tr>
				<td>
				</td>
			</tr>
			
			<tr>
				<td>
				</td>
				<td>
                     <input type="submit" value="submit" name="submit" class="btn">
				 </td>
            </tr>
			
			
			<tr>
				<td>
				</td>
			</tr>
			
			<tr>
				<td>
				</td>
				<td>
				<p> already have an account? <a href="login.php"> login now </a></p>
				</td>
			</tr>     
</table>          
</div>
</div>
</div>
</div>
</div>
		
    </form>
</center>

</body>

</html>