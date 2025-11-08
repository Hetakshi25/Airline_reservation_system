<?php
include('connection.php');
include('aindex.php');
?>
<?php
$query="select * from feedback";
$result=mysqli_query($conn,$query);
?>
<html>
	<head>
		
		
		<title>	Review </title>
		
	</head>
	<body style="background:url(flight4.jpg);
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
			<h2> Review </h2>
			
			<table align="center" border="1px solid black" style="width:600px; line-height:40px;"
              <thead>
			  <tr>
				  <th scope="col">name</th>
                  <th scope="col">email</th>
                  <th scope="col">review</th>
			</tr> 
			<tr>
				<?php
						while($row=mysqli_fetch_assoc($result))
						{
							?>
							<tr>
							<td><?php echo $row['name'];?></td>
							<td><?php echo $row['email'];?></td>
							<td><?php echo $row['review'];?></td>
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
	
