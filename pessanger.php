<?php
include('connection.php');
SESSION_start();
error_reporting(0);
if(isset($_POST['submit']))
{
	$fname=mysqli_real_escape_string($conn,$_POST['fname']);
	$mname=mysqli_real_escape_string($conn,$_POST['mname']);
	$lname=mysqli_real_escape_string($conn,$_POST['lname']);
	$mobno=mysqli_real_escape_string($conn,$_POST['mobno']);
	$age=mysqli_real_escape_string($conn,$_POST['age']);
	
	$select ="select * from pessanger where fname='$fname' && mname='$mname' && lname='$lname' && mobileno='$mobno' && age='$age' ";
	
	$result=mysqli_query($conn,$select);
	
	if(mysqli_num_rows($result)>0)
	{
		$error[]='user already exist';
	}
	else
	{
		$insert = "insert into pessanger(fname,mname,lname,mobileno,age) values('$fname','$mname','$lname','$mobno','$age')";
		mysqli_query($conn,$insert);
		echo"<script>alert('data enter successfully')</script>";
	}
};
	
?>

<?php
if(isset($_GET['error'])) {
        if($_GET['error'] === 'invdate') {
          echo '<script>alert("Invalid date of birth")</script>';
      } else if($_GET['error'] === 'moblen') {
          echo '<script>alert("Invalid contact info")</script>';
      } else if($_GET['error'] === 'sqlerror') {
          echo"<script>alert('Database error')</script>";
      }
    }
?>
<?php /*if(isset($_SESSION['userId']) && isset($_POST['bookbut'])) {   
    $flightid = $_POST['flightid'];
    $passenger = $_POST['passenger']; 
    $price = $_POST['price'];
    $class = $_POST['class'];
    $type = $_POST['type'];
    $ardate = $_POST['ardate'];
}*/
?>    
<html>
	<head>
		
		<title>	Pessanger </title>
		
	</head>
	<body style="background:url(background.jpg);
				background-repeat:no-repeat;
				background-size:100% 100%">
			</style>
			<style>
			*{
		box-sizing:border-box;
		}
		.form-container{
				width:380px;
				margin:auto;
				border-radius:25;
				background-color:rgba(0,0,0,0.1);

		}
		.header input,button{
			
			border:none;
			padding-left:5px;
			font-size:17px;
			color:#333;
		}
		.header label1{
			font-size:17px;
			color:white;
		}
		.input-grp{
			width:155px;
			display:inline-block;
		}
		
		.custom-select{
			color: #fff;
			font-size: 16px;
			border: 1px solid #ced4da ;
			box-shadow: none;
			border-radius: 0!; 
			background: transparent;
		}
		.select-date :: webkit-calender-picker-indicator
		{
			background: transparent;
		}
		.form-control{
			font-size: 13px;
			border-radius: 0;
			color: #fff;
			background: white;
			box-shadow: none ;
			height: 25px;
			border-radius: 5px;
			padding: 4px;
			border: solid thin #aaa;
			width: 66%;
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
		
		</style>
			<div id="box">
			<div class="form-container">
			<div class ="header">
			<div class="bg-text">
	<form action="payment.php " method="POST">		
		 <center><br>
			<h2> Pessanger Details </h2>
			<table>
			
			<tr>
				<td>
					<label1 for="fname">First Name: </label1>
				</td>
				<td>
					 <input type="text" id="fname"  name="fname" required>
				</td>
			</tr>
			<tr>
				<td>
					<label1 for="mname">Middle Name: </label1>
				</td>
				<td>
					 <input type="text" id="text" name="mname" required>
				</td>
			</tr>
			<tr>
				<td>
					<label1 for="lname">Last Name: </label1>
				</td>
				<td>
					 <input type="text" id="text" name="lname" required>
				</td>
			</tr>
			<tr>
				<td>
					<label1 for="cno">Mobile No: </label1>
				</td>
				<td>
					 <input type="text" id="number" name="mobno" required>
				</td>
			</tr>
			<tr>
				<td>
					<label1 for="dob">Age: </label1>
				</td>
				<td>
					<input type="text" id="number" name="age" required>
				</td>
			</tr><tr>
				<td>
					
				</td>
				<td>
					 <input type="submit" value="proceed" name="submit" class="form-btn">
				</td>
			</tr>
		</table>
		
            </div>         
                     
    </div>
    </div>
	</center>
					</form>
	 </body>
</html>
			
			