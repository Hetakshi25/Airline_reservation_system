<?php
include ('header.php');
include('connection.php');
Session_start();
error_reporting(0);
 ?>
<?php
//$trip=1;
if(isset($_POST['submit']))
{
	$trip=mysqli_real_escape_string($conn,$_POST['check']);
	//$dedate=mysqli_real_escape_string($conn,date('y-m-d',strtotime($_POST['dedate'])));
	//$ardate=mysqli_real_escape_string($conn,date('y-m-d',strtotime($_POST['ardate'])));
	$dedt=$_POST['dedate'];
	$ardt=$_POST['ardate'];
	if($dedt<$today){
		echo"<script>alert('departure date cannot be in the past');window.history.back();</script>";
		exit();
	}
	$ardt=$_POST['ardate'];
	if($ardt<$today){
		echo"<script>alert('departure date cannot be in the past');window.history.back();</script>";
		exit();
	}
	$dedate=mysqli_real_escape_string($conn,date('y-m-d',strtotime($_POST['dedate'])));
	$ardate=mysqli_real_escape_string($conn,date('y-m-d',strtotime($_POST['ardate'])));
	$source=mysqli_real_escape_string($conn,$_POST['decity']);
	$destination=mysqli_real_escape_string($conn,$_POST['arcity']);
	$fclass=mysqli_real_escape_string($conn,$_POST['fclass']);
	$passenger=mysqli_real_escape_string($conn,$_POST['passenger']);
	if (!is_numeric($passenger) || $passenger < 1) {
    echo "<script>alert('Number of passengers must be a positive number.'); window.history.back();</script>";
    exit();
}
	
	$select ="select * from bookflight where trip='$trip' && dedate='$dedate' && ardate='$ardate'&& source='$source' && destination='$destination' && fclass='$fclass' && passenger='$passenger' ";
//$select ="select * from bookflight where trip='$trip' && dedate='$dedate'&& ardate='$ardate' && source='$source' && destination='$destination' && adult='$adult' && fclass='$fclass' && passenger='$passenger' ";

/*Following 'if' is for data validation */
		$result=mysqli_query($conn,$select);
	        if($trip==1){ 
	            if($dedt >= $ardt) {
		            echo"<script>alert('Time travel is not possible')</script>";
                    //exit();              
                }
				}
            if($source == $destination){
		            echo"<script>alert('Source cannot be same as destination')</script>";
              exit();    
            }
            if($source == '0') {
              		echo"<script>alert('Select Source')</script>";
              exit(); 
            }
            if($destination == '0') {
		            echo"<script>alert('Select destination')</script>";
              exit();              
            } 
			if(mysqli_num_rows($result)>0)
			{
				$error[]='please fill up form';

			}

			else
			{
				$insert = "insert into bookflight(trip,dedate,ardate,source,destination,fclass,passenger) values('$trip','$dedate','$ardate','$source','$destination','$fclass','$passenger')";
				mysqli_query($conn,$insert);
				echo"<script>alert('data enter successfully')</script>";
				header('location: passenger.php');
			}
};


?>	



<html>
	<head>
		
		<title>	flightbooking form</title>
		 <link rel="stylesheet" href="homecss.css">
		
	</head>
	<body style="background:url('img1/background.jpg');
				background-repeat:no-repeat;
				background-size:100% 100%">
			</style>
		<style>
		*{
			box-sizing:border-box;
		}
		.btn{
			width:90px;
		}
		.form-container{
				width:370px;
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
		.radio-btn span{
			color: #fff;
			margin-right: 5px;
			font-size: 17px;
			checkchanged:none;
		}
		.pas{
			width:135px;
		}
		.custom-select{
			
			font-size: 16px;
			border: 1px solid #ced4da ;
			box-shadow: none;
			border-radius: 0!; 
			background: white;
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
			padding: 3px;
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
			<div class ="radio-btn">
		<form action="" method="POST">		
		 <center><br>
			<h2> Ticket Booking </h2>
			<br>
              
			<table>
			<div class ="radio-btn">
			
			<tr>
                  <input type="radio"  name="check" value="R" required><span>Roundtrip</span> 
				  <!--<a href="onewayform.php" </a>-->
				  <input type="radio"  name="check" value="O" required><span>one way</span>
				 
				 <!-- <input type="radio" value="2" name="check"> <a href="onewayform.php">one way</a>-->
				 
            </tr>
			<br><br>
			<tr>
				<td>
				</td>
			</tr>
			<div class="booking-form">
			<tr>
				<td>
				</td>
			</tr>
			<tr>
               <td>
                    <label1 for="flyingfrom">Source : </label1><?php $decity; ?>               
                 </td>
				 <td> &nbsp;&nbsp; <label1 for="flyingto">Destination: </label1><?php $arcity; ?>   </td>
				 <tr>
					<td>
						
						 <?php
								$sql = 'SELECT * FROM Cities ';
								$stmt = mysqli_stmt_init($conn);
								mysqli_stmt_prepare($stmt,$sql);         
								mysqli_stmt_execute($stmt);          
								$result = mysqli_stmt_get_result($stmt);    
								echo '<select class="" name="decity" id="w3_country1">
								<option value="0" selected disabled >city</option>';
								while ($row = mysqli_fetch_assoc($result)) {
								echo '<option value='. $row['city']  .'>'. 
									$row['city'] .'</option>';
								}
								?>
								</select>
					</td>
					
					<td>
					&nbsp;&nbsp; 
						<?php
								$sql = 'SELECT * FROM Cities ';
								$stmt = mysqli_stmt_init($conn);
								mysqli_stmt_prepare($stmt,$sql);         
								mysqli_stmt_execute($stmt);          
								$result = mysqli_stmt_get_result($stmt);    
								echo '<select value="0" name="arcity" id="w3_country1">
								<option selected disabled>city</option>';
								while ($row = mysqli_fetch_assoc($result)) {
								echo '<option value='. $row['city']  .'>'. 
									$row['city'] .'</option>';
								}
								/*if ($) {
									
								}*/
								?>
							</select>
					</td>
				</tr>
			</tr>
			<div class="input-grp">
			<tr>
				<td>
				</td>
			</tr>
			<tr>
               <td>
                    <label1 for="Departing">Departing Date: </label1>               
                 </td>
				 
				<td> &nbsp;&nbsp; <label1 for="Returning">Returning Date: </label1>   </td>
				 <tr>
					<td>
						<input type="date" id="select data" name="dedate" required>
					</td>
					<td>
<!--					
					<input type="date" id="select data" name="ardate" ; <?php //echo $disabled; ?> /> -->
					&nbsp;&nbsp;&nbsp;<input type="date" id="select data" name="ardate" >
					</td>
				</tr>
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
                     <label1 for="Flight class">Flight class: </label1>             
                 </td>
				 
				<td> &nbsp;&nbsp; <label1 for="Passengers">Passenger: </label1>      </td>
				 <tr>
					<td>
						 <select class="custom-select" name="fclass" onchange="change_country(this.value)" class="frm-field required">
					<option value="0" selected disabled >class</option>
					<option value="E"> economy class</option>
					<option value="B"> business class</option>
				</select>	
					</td>
					<td>
					&nbsp;&nbsp; <input type="number" id="name"  name="passenger" class="pas" min="1" required>
			
					</td>
				</tr>
				
			</tr>
						<!--<input type="number" class="form-control" value="0" required>-->
			
			<tr>
				<td>
				</td>
				
				<td>
		<br>
			&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="book flight" class="form-btn">
			</td>
		</form>
			
		 

	</body>
</html>
