<?php
include('connection.php');
SESSION_start();
error_reporting(0);
if(isset($_POST['submit']))
{
	$cardno=mysqli_real_escape_string($conn,$_POST['cardno']);
	$ccexp=mysqli_real_escape_string($conn,$_POST['ccexp']);
	$tp=mysqli_real_escape_string($conn,$_GET['$ticketprice']);
	
	$select="select * from payment where cardno='$cardno' && expirydate='$ccexp' && amount='$tp' ";
	
	$result=mysqli_query($conn,$select);
	
	if(mysqli_num_rows($result)>0)
	{
		$error[]='user already exist';
	}
	else
	{
		$insert = "insert into payment(cardno,expirydate,amount) values('$cardno','$ccexp','$tp')";
		mysqli_query($conn,$insert);
		echo"<script>alert('payment successfully')</script>";
	}
	
	
	/*$cardno=mysqli_real_escape_string($conn,$_POST['cardno']);
	$ccexp=mysqli_real_escape_string($conn,$_POST['ccexp']);
	//$ccexp=mysqli_real_escape_string($conn,$_GET['ccyea']);
	//$amount=mysqli_real_escape_string($conn,$_POST['amount']);
	
	$select="select * from payment where cardno='$cardno' && ccexp='$ccexp' ";
	
	$result=mysqli_query($conn,$select);
	
	if(mysqli_num_rows($result)>0)
	{
		$error[]='user already exist';
	}
	else
	{
		$insert = "insert into payment(cardno,expirydate) values('$cardno','$ccexp')";
		mysqli_query($conn,$insert);
		echo"<script>alert('payment successfully')</script>";
	}*/
};
?>

<?php
//$last="select * from getlastRecord order by bid DESC LIMIT 1";
$qry_src_dest="select * from bookflight getlastRecord order by bid DESC LIMIT 1";
//$row="select * from bookflight where record='$last'";
//$qry_src_dest="select * from bookflight where record='$last'";
$result1=mysqli_query($conn,$qry_src_dest);
while($row=mysqli_fetch_assoc($result1))
{
//$row=mysqli_fetch_assoc($qry_src_dest);
$trip=$row['check'];
$src=$row['source'];
$dest=$row['destination'];
$class=$row['fclass'];
$pnum=$row['passenger'];
}
 if ($src=='ahmedabad' && $dest=='bhavnagar')
 {
	 $fid = 3000;
 }
 else if ($src=='ahmedabad' && $dest=='indore')
 {
	 $fid = 7000;
 }
 else if ($src=='ahmedabad' && $dest=='mumbai')
 {
	 $fid = 6000;
 }
 else if ($src=='bhavnagar' && $dest=='indore')
 {
	 $fid = 8000;
 }
 else  if ($src=='bhavnagar' && $dest=='mumbai')
 {
	 $fid = 5000;
 }
 else if ($src=='bhavnagar' && $dest=='ahmedabad')
 {
	 $fid = 3000;
 }
 else if ($src=='mumbai' && $dest=='ahmedabad')
 {
	 $fid = 6000;
 }
 else if ($src=='mumbai' && $dest=='indore')
 {
	 $fid = 4000;
 }
 else if ($src=='mumbai' && $dest=='bhavnagar')
 {
	 $fid = 5000;
 }
 else if ($src=='indore' && $dest=='bhavnagar')
 {
	 $fid = 8000;
 }
 else if ($src=='indore' && $dest=='mumbai')
 {
	 $fid = 4000;
 }
 else // ($src=='indore' && $dest=='ahmedabad')
 {
	 $fid = 7000;
 }
 if ($class='B') {
	 $price=$fid*1.5;
 }
 else {
	 
	 $price=$fid;
 }
 //$totalprice=$price*$pnum;
 
 if ($trip='R') 
 {
	 $price=$fid*2;
 }
 else {
	 
	 $price=$fid;
 }
 $totalprice=$price*$pnum;
 
 

/*$query="select * from flight1 where flightid='1'";//$fl_id
$result=mysqli_query($conn,$query);*/
?>


<html>
	<head>
		
		<title>	payment</title>
		
	</head>
	<body style="background:url('img1/background.jpg');
				background-repeat:no-repeat;
				background-size:100% 100%">
			</style>
<style>
.form-container{
				width:350px;
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
		.cards img{
			width:50px;
			height:50px;
			display:center;
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
	
		 <center><br>
			<h2> Card Payment </h2>
			<table>
			<tr>
			    
				<td>
				
				</td>
				<td>
				
				<tr>
					<td>		
					</td>
					<td>
					<div class="cards">					
					<img src="viza.png" name="1"  alt="" >
					<img src="amex.png"  alt="" >
					<!--<img src="discover.jpeg"  alt="" >-->
					<img src="img1/master.png"  alt="" >
					</td>
				
				</tr>
					</div>
				</td>
			</tr>
			
			<div class="col-md-6"> </div>
			<div class="form-grp">
			<tr>
			
			<td><label1 for="cc-number" class="control-label">Amount:</label1> 
			
			
				<?php   ?>

							<td><?php echo $totalprice;?> </td>
							
					
						
					
			<?php		
	//			$query="select * from flight1 where flightid='$fid'";
		//		$result=mysqli_query($conn,$query);
				/*$result=mysqli_query($conn,$select);
	        if($trip==1){ 
	            if($dedt >= $ardt) {
		            echo"<script>alert('Time travel is not possible')</script>";
                    //exit();              
                }*/
			?>
			
			
<?php	
			/*			while($row=mysqli_fetch_assoc($result))
						//{
							//?>
							<!--<tr>
							<td><?php// echo $row['name'];?></td>-->
							<?php
//$price=	$row['price'];
$cp=1.5*$fid;
$pasp=$price*$passenger;	


$price = (int)$row['Price']*(int)$passenger;
                  if($type == 'round') {
                    $price = $price*2;
                  }
                  if($fclass == 'B') {
                      $price = 1.5*$price;
                  }
                  if($row['status'] === '') {
                      $status = "Not yet Departed";
                      $alert = 'alert-primary';
				  } 
		$sql="select*from bookflight where source='$source' && destination='$destination'";
		$res=mysqli_query($conn,$sql);
					  if($source='ahmedabad' && $dest='vadodara')
					  {
						  echo"$price";
					  }
					  else if($source='indore' && $dest='ahmedabad')
					  {
						  echo"";
					  }
					  else if($source='mumbai' && $dest='bhavnagar')
					  {
						  echo"";
					  }
			*/			  
?>
			<?php/*if(isset($_POST['search']))
			{
				//$fid=$_POST['flightid'];
				//$query=select * from flight1 
				//$qrun=mysqli_query($conn,$query);
				while($row=mysqli_fetch_array($result))
				{
					*/
					
					?>
					<tr>
					<td><?php //echo$row['price'];?></td>
		

			</td>
				<td>
				</td>
				</tr>
			<tr>
						
				<td>
					<label1 for="cc-number" class="control-label">Card No: </label1>
				</td>
				<td>
					<input type="cc-number" width="100%"  id="cc-number"  class="input-lg form-control cc-number" autocomplete="cc-number" placeholder="**** **** **** ****" name="cardno" required>
				</td>
			</tr>
			<tr>
				<td>
				</td>
			</tr>
			<div class="row"> </div> 
			<div class="col-md-6"> 
			<div class="form-group">
			<tr>
				<td>
					<label1 for="cc-exp" class="control-label">Card Expiry: </label1>
				</td>

				<td>
					<!--<input type="tel" id="cc-number"  class="input-lg form-control cc-exp" autocomplete="cc-exp" placeholder="MM/YY" name="ccexp" required>-->
					<select name="ccexp" id="months">
					<option value="0" selected disabled >Mon</option>
					<option value="jan">jan</option>
					<option value="feb">feb</option>
					<option value="mar">mar</option>
					<option value="apr">apr</option>
					<option value="may">may</option>
					<option value="jun">jun</option>
					<option value="july">july</option>
					<option value="aug">aug</option>
					<option value="sep">sep</option>
					<option value="oct">oct</option>
					<option value="nov">nov</option>
					<option value="dec">dec</option>
					</select>
					
					<select name="ccexp" id="years">
					<option value="0" selected disabled >Year</option>
					<option value="2023">2023</option>
					<option value="2024">2024</option>
					<option value="2025">2025</option>
					<option value="2026">2026</option>
					<option value="2027">2027</option>
					<option value="2028">2028</option>
					<option value="2029">2029</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
				</td>
			</tr>
			<div class="col-md-6"> </div>
			<div class="form-group">
			<tr>
				<td>
					<label1 for="cc-cvv" class="control-label">Card CVV: </label1>
				</td>
				<td>
					<input type="password" id="cc-number"  class="input-lg form-control cc-cvc" autocomplete="off" placeholder="***" name="" required>
				</td>
			</tr>
			<tr>
				<td>
				</td>
			</tr>
			</div>
			</div>
			</div>
			
			<div class="form-group">
			<tr>
				<td>
					<label1 for="numeric" class="control-label">Card Holder Name: </label1>
				</td>
				<td>
					<input type="text"  id="cc-number"  class="input-lg form-control">
				</td>
			</tr>
			<tr>
				<td>
				</td>
			</tr>
			<tr>
				<td>
				</td>
			</tr>
			<div class="form-group">
			<tr>
				<td>
					
				</td>
				<td>
					 <input type="submit" value="confirm" name="submit" class="form-btn">
				</td>
			</tr>
			</table>
            </div>         
                     
    </div>
    </div>
	<script type="text/javascript">
	$(function($){
		$('.cc-number').payment('formatcardnumber');
		$('.cc-exp').payment('formatcardexpiry');
		$('.cc-cvc').payment('formatcardcvc');
		$('form').submit(function(e){
			
			e.preventdefault();
			var cardtype=$.payment.cardtype($('.cc-number').val());
			$('.cc-number').toggleinputerror(!$payment.validatecardnumber($(.cc-number).val()));
			$('.cc-exp').toggleinputerror(!$payment.validatecardexpiry($payment.validatecardexpiry($(.cc-number).payment('cardexpiryval')));
			$('.cc-cvc').toggleinputerror(!$payment.validatecardcvc($('.cc-cvc').val(),cardtype));
			
			$('.validation').removeclass('text-danger text-success');
			$('.validation').addclass($('.has-error').length? 'text-danger' : 'text-success');
			
		});
		
	});
	</script>
	
	</center>
					</form>
	 </body>
</html>
			
			
	

