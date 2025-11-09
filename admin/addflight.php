<?php
include('connection.php');
include('aindex.php');
error_reporting(0);
?>
<?php
$query="select * from flight1";
$result=mysqli_query($conn,$query);
?>
<?php
/*if(isset($_POST['update']))
{
	$fid=mysqli_real_escape_string($conn,$_POST['fid']);
	$dedate=mysqli_real_escape_string($conn,date('y-m-d',strtotime($_POST['dedate'])));
	$ardate=mysqli_real_escape_string($conn,date('y-m-d',strtotime($_POST['ardate'])));
	$detime=mysqli_real_escape_string($conn,$_POST['detime']);
	$artime=mysqli_real_escape_string($conn,$_POST['artime']);
	$dest=mysqli_real_escape_string($conn,$_POST['decity']);
	$source=mysqli_real_escape_string($conn,$_POST['arcity']);
	$airline=mysqli_real_escape_string($conn,$_POST['aname']);
	$seats=mysqli_real_escape_string($conn,$_POST['seats']);
	$duration=mysqli_real_escape_string($conn,$_POST['duration']);
	$price=mysqli_real_escape_string($conn,$_POST['price']);
	
	$select="select * from flight where flightid='$fid'";
	
	$result=mysqli_query($conn,$select);
	
	if(mysqli_num_rows($result)>0)
	{
		$error[]='flight is already inserted';
	}
	else
	{
		$update = "update flight set dedate='$dedate', ardate='$ardate', detime='$detime', artime='$artime', destination='$dest', source='$source', airline='$airline', seats='$seats', duration='$duration', price='$price' ";
		mysqli_query($conn,$update);
		echo"<script>alert('Record Updated')</script>";
		header("location:flightdetails.php");
	}
};*/
?>
<html>
	<head>
		<title>	addflight </title>
	</head>
	<body style="background:url('img/flight4.jpg');
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
			top: 53%;
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
			<form action="flightdetails.php" method="POST">
			<center>
			<h2> Flight Schedule</h2>
			
			<table align="center" border="1px solid black" style="width:900px; line-height:40px;"
              <thead>
			  <tr>
				  <th scope="col">Dedate</th>
                  <th scope="col">detime</th>
                  <!--<th scope="col">ardate</th>-->
				  <th scope="col">artime</th>
                  <th scope="col">Source</th>
                  <th scope="col">Destination</th>
				  <th scope="col">Airline</th>
                  <th scope="col">Seat</th>
                  <th scope="col">Price</th>
				 <!-- <th scope="col">Action</th>-->
			</tr> 
			<tr>
				<?php
						while($row=mysqli_fetch_assoc($result))
						{
							?>
							<tr>
							<td><?php echo $row['dedate'];?></td>
							<td><?php echo $row['detime'];?></td>
							<!--<td><?php //echo $row['ardate'];?></td>-->
							<td><?php echo $row['artime'];?></td>
							<td><?php echo $row['source'];?></td>
							<td><?php echo $row['destination'];?></td>
							<td><?php echo $row['airline'];?></td>
							<td><?php echo $row['seats'];?></td>
							<td><?php echo $row['price'];?></td>
							<!--<td><input type="submit" value="update" name="update" ></td>-->
							</tr>
					<?php
						}	
					?>
				</table>			
		</center>
      </form>
</div>
</div>
</div>
</div>
</body>
</html>            
	
