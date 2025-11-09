<?php
include('connection.php');
include ('header.php');
session_start();
if(isset($_POST['submit']))
{
	$name=mysqli_real_escape_string($conn,$_POST['name']);
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$review=mysqli_real_escape_string($conn,$_POST['review']);
	
	$select="select * from feedback where name='$name' && email='$email' && review='$review' ";
	
	$result=mysqli_query($conn,$select);
	
	if(mysqli_num_rows($result)>0)
	{
		$error[]='invalid name or email'; 
	}
	else
	{
		$insert = "insert into feedback(name,email,review) values('$name','$email','$review')";
		echo"<script>alert('Thank you for your Feedback')</script>";
		mysqli_query($conn,$insert);
	}
};



?>
	
	
<html>
<head>
    <meta charset="UTF-8">
		<meta http="content">
		<meta name="viewport" content=>

        <title>Feedback Form</title>
		<link rel="stylesheet" href="homecss.css">

</head>
<body style="background:url('img1/background.jpg');
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
		#dob{
			width:100%;
		}
		#button{
			margin: 8px;
			font-size: 15px;
			text-transform: capitalize;
			color: black;
			border: none;
			padding: 5px;
			border-radius: 2px;
		}
		*{
			box-sizing:border-box;
		}
		
		.form-container{
				width:400px;
				margin:auto;
				border-radius:30;
				background-color:rgba(0,0,0,0.2);

		}
		
		.header label1{
			font-size:17px;
			color:white;
		}
		.bg-text{
			background-color: rgba(0,0,0);
			background-color: rgba(0,0,0,0.3);
			color: white;
			font-weight: bold;
			border: 3px solid #f1f1f1;
			position: absolute;
			top: 42%;
			left: 50%;
			transform: translate(-50%,-50%);
			z-index: 2;
			padding: 20px;
			text-align:center;
		}
		
		.bg-text legend{
			text-align:center;
		}
					
 </style>
 
			<div id="box">
			<div class="form-container">
			<div class ="header">
			<div class ="radio-btn">
			<div class="bg-text">
<form method="POST" action="">
<center>
    <h1>Feedback Form</h1>
	
    <fieldset>
        <legend> personal information</legend>
        <table>
            <tr>
                <td>
                    <label1 for="name">Name: </label1>               
                 </td>
                 <td>
                    <input type="text" id="name" name="name" required>
                 </td>
            </tr>
            <tr>
                <td>
                    <label1 for="email">Email: </label1>               
                 </td>
                 <td>
                    <input type="email" id="email" name="email" required>
                 </td>
            </tr>
			</table>
			</fieldset>
			<fieldset>
			
			<tr>
			<td>	
            <fieldset>
				<legend>Your Feedback</legend>
				<div>
					<textarea name="review" id="msg" cols="40" rows="8" placeholder="Enter Your Feedback Here"></textarea>
				</div>
            </fieldset>
				 <input type="submit" value="submit" name="submit" class="form-btn">
			</td>
			</tr>
        </table>

    </fieldset>
</center>

</form>
<div>
</div>
</div>
</div>
</div>
    
</body>

</html>