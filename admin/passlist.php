<?php
include('aindex.php');
include('connection.php');
session_start();
?>
<?php
$query="select * from pessanger";
$result=mysqli_query($conn,$query);
?>
<html>
	<head>
		
		<title>	payment</title>
		
	</head>
	<body style="background:url('img1/flight5.jpeg');
				background-repeat:no-repeat;
				background-size:100% 100%">
			</style>
<style>
.form-container{
				width:380px;
				margin:auto;
				border-radius:25;
				background-color:rgba(0,0,0,0.1);

		}
		
		label1{
			font-size:17px;
			color:white;
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
		
		.header input,button{
			border:none;
			padding-left:5px;
			font-size:15px;
			color:#333;
		}
		..cards img{
			width:50px;
			height:50px;
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
			<form action="" method="post" >
		
		<table align="center" border="1px solid black" style="width:600px; line-height:40px;"
              <thead>
			  <tr>
				  <th scope="col">fname</th>
                  <th scope="col">mname</th>
                  <th scope="col">lname</th>
				  <th scope="col">mobno</th>
				  <th scope="col">dob</th>
			</tr> 
			<tr>
				<?php
						while($row=mysqli_fetch_assoc($result))
						{
							?>
							<tr>
							<td><?php echo $row['fname'];?></td>
							<td><?php echo $row['mname'];?></td>
							<td><?php echo $row['lname'];?></td>
							<td><?php echo $row['mobileno'];?></td>
							<td><?php echo $row['dob'];?></td>
							</tr>
					<?php
						}	
					?>
				</table>
       
              </tbody>
            </table>

          </div>
		   </div>
    </div>
	</center>
					</form>
	 </body>
</html>
        
