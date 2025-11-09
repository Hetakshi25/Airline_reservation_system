
<?php
include('connection.php');
//include ('header.php');
session_start();
if(isset($_POST['submit']))
{
	$username=mysqli_real_escape_string($conn,$_POST['username']);
	$password=mysqli_real_escape_string($conn,$_POST['password']);
	
	$select="select * from registration where username='$username' && password='$password' ";
	
	$result=mysqli_query($conn,$select);
	
	if(mysqli_num_rows($result)>0)
	{
		$row=mysqli_fetch_array($result);
		if($row['usertype']=='admin'){
			
			$_SESSION['admin']=$row['name'];
			header('location: admin/aindex.php');
		}
	elseif($row['usertype']=='user'){
		$_SESSION['username']=$row['name'];
		header('location: homepage.php');
		
	}
	else
	{
		$error[]='incorrect email or password';
		/*$insert = "insert into login(username,password) values('$username','$password')";
		mysqli_query($conn,$insert);*/
		echo"<script>alert('login successfully')</script>";
	}
	
	}	
};
	

?>
<html>
	<head>
		<title>	Login Here </title>
	</head>
	<body style="background:url('img1/flight5.jpeg');
				background-repeat:no-repeat;
				background-size:100% 100%">
			</style>
			
			<style>
		#text{
			height: 25px;
			border-radius: 5px;
			padding: 4px;
			border: solid thin #aaa;
			width: 60%;
		}
		#password{
			height: 25px;
			border-radius: 5px;
			padding: 4px;
			border: solid thin #aaa;
			width: 60%;
		}
		#button{
			margin:1px;
			font-size: 15px;
			text-transform: capitalize;
			color: black;
			border: none;
			padding: 5px;
			border-radius: 2px;
			button-align:center;
		}
		*{
			box-sizing:border-box;
		}
		.form-container{
				width:380px;
				margin:auto;
				border-radius:25;
				background-color:rgba(0,0,0,0.2);

		}
		.header input,button{
			
			border:none;
			padding-left:5px;
			font-size:16px;
			color:#333;
			
			
		}
		.header label1{
			font-size:18px;
			color:white;
		}
		.bg-text{
			background-color: rgba(0,0,0);
			background-color: rgba(0,0,0,0.3);
			color: white;
			font-weight: bold;
			border: 3px solid #f1f1f1;
			position: absolute;
			top: 30%;
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
	<form action="" method="POST">
			<center>
			<h2>Login Here</h2>
			<?php
			if(isset($error))
			{
				foreach($error as $error)
				{
					echo'<span class="error-msg">'.$error.'</span>';
				};
			};
			?>
		
        <table>
             <tr>
                <td>
                    <label1 for="username">Username: </label1>               
                 </td>
                 <td>
                    <input type="text" id="name" name="username" required>
                 </td>
            </tr>
			
			<tr>
				<td>
				</td>
			</tr>
			
			<tr>
                <td>
                    <label1 for="Password">Password: </label1>               
                 </td>
                 <td>
                    <input type="password" id="name" name="password"  required>
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
                    <input type="submit" value="submit" name="submit" class="form-btn">
				
                 </td>
            </tr>
			<tr>
				<td>
				</td>
				<td>
				<p> Don't have an account? <a href="index.php"> Register Now </a></p>
				</td>
			</tr>

			</table>
			
			</center>
            </form>
</div>
</div>
</div>
</div>
		 

	</body>
</html>

