 
<?php
include('aindex.php');
include('connection.php');
session_start();
if(isset($_POST['submit']))
{
	$fid=mysqli_real_escape_string($conn,$_POST['fid']);
	$dedate=$_POST['dedate'];
	$ardate=$_POST['ardate'];
	if($dedate<$today){
		echo"<script>alert('departure date cannot be in the past');window.history.back();</script>";
		exit();
	}
	$ardate=$_POST['ardate'];
	if($ardate<$today){
		echo"<script>alert('returning date cannot be in the past');window.history.back();</script>";
		exit();
	}
	$dedate=mysqli_real_escape_string($conn,date('y-m-d',strtotime($_POST['dedate'])));
	$ardate=mysqli_real_escape_string($conn,date('y-m-d',strtotime($_POST['ardate'])));
	$detime=mysqli_real_escape_string($conn,$_POST['detime']);
	$artime=mysqli_real_escape_string($conn,$_POST['artime']);
	$source=mysqli_real_escape_string($conn,$_POST['arcity']);
	$dest=mysqli_real_escape_string($conn,$_POST['decity']);
	$airline=mysqli_real_escape_string($conn,$_POST['aname']);
	$seats=mysqli_real_escape_string($conn,$_POST['seats']);
	$duration=mysqli_real_escape_string($conn,$_POST['duration']);
	$price=mysqli_real_escape_string($conn,$_POST['price']);
	
	
	$select="select * from flight1 where flightid='$fid' && dedate='$dedate' && ardate='$ardate' && detime='$detime' && artime='$artime' && source='$source' && destination='$dest'  && airline='$airline' && seats='$seats' && duration='$duration' && price='$price' ";
	
	
	$result=mysqli_query($conn,$select);
	
	if(mysqli_num_rows($result)>0)
	{
		$error[]='flight is already inserted';
	}
	else
	{
		$insert = "insert into flight1(flightid,dedate,ardate,detime,artime,source,destination,airline,seats,duration,price) values('$fid','$dedate','$ardate','$detime','$artime','$source','$dest','$airline','$seats','$duration','$price')";
		mysqli_query($conn,$insert);
		echo"<script>alert('flight added successfully')</script>";
		header("location:flightdetails.php");
	}
};
	
?>


<html>
	<head>
		
		<title>	Add Flights</title>
		
	</head>
	<body style="background:url('img1/flight4.jpg');
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
				background-color:rgba(0,0,0,0.2);

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
			background-color: rgba(0,0,0,0.4);
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
		table th{
			font-size:17px;
			color:white;
		}
		table td{
			font-size:17px;
			color:white;
		}
		.p {
			font-size:18px;
			color:white;
		}
		.row{
			font-size:18px;
			color:white;
		}


		</style>
			<div id="box">
			<div class="form-container">
			<div class ="header">
			<div class="bg-text">
	<form action=" " method="POST">		
		 <center><br>
			<h2> Flight Details </h2>
		 <table>
			
			<tr>
				<td>
				</td>
			</tr>
			<tr>
				<td>
				</td>
			</tr>
			<div class="booking-form">
			<tr>
                <td>
                    <label1 for="Flight Number">Flight Id: </label1>               
                 </td>
                 <td>
                    <input type="text" id="number" name="fid" required>
                 </td>
            </tr>
			<div class="input-grp">
			<tr>
               <td>
                    <label1 for="Departing">Departing Date: </label1>               
                 </td>
				 <td> <label1 for="Returning">Returning Date: </label1>   </td>
				 <tr>
					<td>
						<input type="date"  name="dedate"  class="form-control" required>
					</td>
					<td>
						<input type="date" name="ardate"  class="form-control"required>
					</td>
					</tr>
			</tr>
			<div class="input-grp">
			<tr>
               <td>
                    <label1 for="Departing">Departing Time: </label1>               
                 </td>
				 <td> <label1 for="Returning">Returning Time: </label1>   </td>
				 <tr>
					<td>
						<input type="time" id="select time" name="detime" required>
					</td>
					<td>
						<input type="time" id="select time" name="artime" required>
					</td>
					</tr>
			</tr>
			<tr>
				<td>
				</td>
			</tr>
			
			<tr>
               <td>
                    <label1 for="from">From: </label1>               
                 </td>
				 <td> <label1 for="to">To: </label1>   </td>
				 <tr>
					<td>
					 <?php
						$sql = 'SELECT * FROM Cities ';
						$stmt = mysqli_stmt_init($conn);
						mysqli_stmt_prepare($stmt,$sql);         
						mysqli_stmt_execute($stmt);          
						$result = mysqli_stmt_get_result($stmt);    
						echo '<select class="mt-4" name="decity" style="border: 0px; border-bottom: 
							2px solid #5c5c5c; background-color: whitesmoke !important;
							font-weight: bold !important;
							width:80%">
							<option selected>city</option>';
						while ($row = mysqli_fetch_assoc($result)) {
						echo '<option value='. $row['city'].'>'. $row['city'] .'</option>';
						}
					?>
					</select>
						
					</td>
					<td>
					<?php
						$sql = 'SELECT * FROM Cities ';
						$stmt = mysqli_stmt_init($conn);
						mysqli_stmt_prepare($stmt,$sql);         
						mysqli_stmt_execute($stmt);          
						$result = mysqli_stmt_get_result($stmt);    
						echo '<select class="mt-4" name="arcity" style="border: 0px; border-bottom: 
						2px solid #5c5c5c; background-color: whitesmoke !important;
						font-weight: bold !important;
						width:80%">
						<option selected>city</option>';
						while ($row = mysqli_fetch_assoc($result)) {
						echo '<option value='. $row['city']  .'>'. 
						$row['city'] .'</option>';
						}
					?>
					</select>
						
					</td>
				</tr>
			</tr>
			<tr>
				<td>
				</td>
			</tr>
			<tr>
               <td>
                    <label1 for="duration">Duration: </label1>               
                 </td>
				 <td> <label1 for="price">Price: </label1></td>
				 
				 <tr>
					<td>
						<input type="number" id="text" name="duration" min="1" required>
					</td>
					<td>
						<input type="number" id="text" name="price" min="1" required>
					</td>
				</tr>
			</tr>
			<tr>
				<td>
				</td>
			</tr>
	</div>
			<tr>
				<td>
					<label1 for="seats">Seats: </label1>
				</td>
				<td>
					<label1 for="airline">Select Airline: </label1>
				</td>
			<tr>
					<td>
						<input type="number" id="text" name="seats" min="1" required>
					</td>
				<td>
				 <?php
					$sql = 'SELECT * FROM airline ';
					$stmt = mysqli_stmt_init($conn);
					mysqli_stmt_prepare($stmt,$sql);         
					mysqli_stmt_execute($stmt);          
					$result = mysqli_stmt_get_result($stmt);    
					echo '<select class="airline col-md-3 mt-4" name="aname" style="border: 0px; border-bottom: 
						2px solid #5c5c5c; background-color: whitesmoke !important;">
						<option selected> Airline</option>';
					while ($row = mysqli_fetch_assoc($result))
						{
							echo '<option value='.$row['name'] .'>'. $row['name']  .'</option>';
						}
			?>
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
			</table>
				
			</center>	
			
			</div>
			</div>
			</div>
			</div>
				</form>
	 </body>
</html>
