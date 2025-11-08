<?php
include('connection.php');
include('header.php');
?>
<?php
$query="select * from bookflight";
$result=mysqli_query($conn,$query);
?>
<html>
	<head>
		
		
		<title>	bookflight </title>
		
	</head>
	<body style="background:url(flight5.jpeg);
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
			<form action="" method="POST">
			<center>
			<h2> bookflight </h2>
			
			<table align="center" border="1px solid black" style="width:600px; line-height:40px;"
              <thead>
			  <tr>
				  <th scope="col">flight no</th>
                  <th scope="col">Name</th>
                  <th scope="col">date/time</th>
				  <th scope="col">source</th>
				  <th scope="col">destination</th>
				  <th scope="col">duration</th>
				  <th scope="col">price</th>
			</tr> 
			<tr>
				<?php
						while($row=mysqli_fetch_assoc($result))
						{
							?>
							<tr>
							<td><?php echo $row['flightno'];?></td>
							<td><?php echo $row['name'];?></td>
							<td><?php echo $row['date/time'];?></td>
							<td><?php echo $row['source'];?></td>
							<td><?php echo $row['destination'];?></td>
							<td><?php echo $row['duration'];?></td>
							<td><?php echo $row['price'];?></td>
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
	
