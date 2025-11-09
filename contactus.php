<?php
include ('header.php');
?>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http="content">
		<meta name="viewport" content=>
		
		<title> Contact Us </title>
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
			align:center;
		}
			
		</style>
			<div id="box">
			<div class="form-container">
			<div class ="header">
			<div class="bg-text">
			<form action="login.php" method="POST">
			<center>
			<h2>Contact Us</h2>
			<?php
			if(isset($error))
			{
				foreach($error as $error)
				{
					echo'<span class="error-msg">'.$error.'</span>';
				};
			};
			?>
		<br>
        <table>
             <tr>
                <td>
                    <label1 for="email">Email: </label1>               
                 </td>
                 <td>
                   <p>ars123@gmail.com</p>
                 </td>
            </tr>
			
			<tr>
				<td>
				</td>
			</tr>
			
			
			<tr>
                <td>
                    <label1 for="phoneno">Phone No: </label1>               
                 </td>
                 <td>
                   <p>+911234567891</p>
                 </td>
            </tr>
			
			<tr>
				<td>
				<label1 for="address">Address: </label1> 
				</td>
				<td>
					<p>Q53+G97,Airport Road,Subhashnagar,Bhavnagar,Gujarat 364001.<p>
				</td>
			</tr>
			
			<tr>
				<td>
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

