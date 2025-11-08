<?php
include('connection.php');
include ('header.php');
?>
<?php
//$query="select * from passenger str,bookflight sr where str.pid=sr.bid";
$query="select * from passenger str,bookflight sr where str.pid=sr.bid";
$result=mysqli_query($conn,$query);
//$sql="select * from bookflight";
//$res=mysqli_query($conn,$sql);

?>
<html>
	<head>
		
		
		<title>	Ticket </title>
		
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
			<h2> Tickets </h2>
			
			<table align="center" border="1px solid black" style="width:600px; line-height:40px;"
              <thead>
			  <tr>
				   <!--<th scope="col">pname</th>-->
                  <!--<th scope="col">mobile no</th>-->
                  
				   <th scope="col">source</th>
                  <th scope="col">destination</th>
                  <th scope="col">fclass</th>
				  <th scope="col">trip</th>
				  <th scope="col">pass no</th>
				  <!--<th scope="col">age</th>-->
				  <!--<th scope="col">age</th>
				  <th scope="col">age</th>-->
			</tr> 
			<tr>
				<?php
						while($row=mysqli_fetch_assoc($result))
						{
							?>
							<tr>
							<!--<<td><?php// echo $row['fname'];?></td>-->
							<!--<td><?php// echo $row['mobile no'];?></td>-->
							
							<td><?php echo $row['source'];?></td>
							<td><?php echo $row['destination'];?></td>
							<td><?php echo $row['fclass'];?></td>
							<td><?php echo $row['trip'];?></td>
							<td><?php echo $row['passenger'];?></td>
							<!--<td><?php// echo $row['age'];?></td>-->
							</tr>
					<?php
						}	
					?>
					<tr>
				 
				  <!--<th scope="col">age</th>
				  <th scope="col">age</th>-->
			</tr> 
			<tr>
				<?php
						//while($row=mysqli_fetch_assoc($res))
						//{
							?>
							
					<?php
						//}	
					?>
					<tr>
				</table>
		</center>
      </form>
</div>
</div>
</div>
</div>
</body>
</html>            
	
