<?php
include('connection.php');
include('aindex.php');
?>
<?php
$query="select * from passenger str,bookflight sr where str.pid=sr.bid";
//$query="select * from bookflight";
$result=mysqli_query($conn,$query);
?>
<html>
	<head>
		
		<title>	view booked flights </title>
		
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
			background-color: rgba(0,0,0,0.4);
			color: white;
			font-weight: bold;
			border: 3px solid #f1f1f1;
			position: absolute;
			top: 50%;
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
			 <center>
			<h2> Booked Tickets </h2>
			
			<table align="center" border="1px solid black" style="width:600px; line-height:40px;"
              <thead>
			  <tr>
				  <th scope="col">pname</th>
				  <th scope="col">Departure Date</th>
                  <th scope="col">Arrival Date</th>
                  <th scope="col">Source</th>
				  <th scope="col">Destination</th>
				  <th scope="col">Class</th>
				  <th scope="col">Passenger</th>
			</tr> 
			<tr>
				<?php
						while($row=mysqli_fetch_assoc($result))
						{
							?>
							<tr>
							<td><?php echo $row['fname'];?></td>
							<td><?php echo $row['dedate'];?></td>
							<td><?php echo $row['ardate'];?></td>
							<td><?php echo $row['source'];?></td>
							<td><?php echo $row['destination'];?></td>
							<td><?php echo $row['fclass'];?></td>
							<td><?php echo $row['passenger'];?></td>
							</tr>
					<?php
						}	
					?>
				</table>
			<tr>
				<td>
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
