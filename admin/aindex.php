<?php


?>
<html>
	<head>
		
		
		
	</head>
	<body style="background:url(flight4.jpg);
				background-repeat:no-repeat;
				background-size:100% 100%">
			</style>
			<style>
		*{
                    margin:0px;
                    padding:0px;
                    box-sizing:border-box;
                }
                nav{
                        width:100%;
                        height: 75px;
                        line-height: 75px;
                        padding: 0px 100px;
                        position: fixed;
                        background-image: linear-gradient(#2454b2,#2454b2);
                    }
                    
                    nav .logo p{
                        font-size: 28px;
                        font-weight: bold;
                        float: left;
                        color: white;
                        text-transform: uppercase;
                        letter-spacing: 1.5px;
                        cursor: pointer; 
                    }
                    nav ul{
                            float: right;
                    }
                    nav li{
                        display: inline-block;
                        list-style: none;
                    }
                    nav li a{
						
                        font-size: 15px;
                        text-transform: uppercase;
                        padding: 0px 20px;
                        color: white;
                        text-decoration: none;
						border:1px solid transparent;
                    }
					ul li a:hover {
						background-color:#fff;
						color:#000;
					}
					ul li.active a{
						background-color: #fff;
						color:#000;
					}
				 .image img{
                        width: 100%;
                        height: 100vh;
                        background-size: cover;
                        background-position: center;
                    }
					 .title{
                        position: absolute;
                        top: 40%;
                        left: 40%;
                        transform: translate(-50%,-50%);

                    }
                    .title h1{
                        color: black;
                        font-size: 70px;
                    }
       </style>
<nav>
            <div class="logo">
                <p>Admin Panel</p>
            </div>
            <ul>
               
				<li><a href="flightdetails.php">Manage Flight</a></li>
				<li><a href="addflight.php">Flight Schedule</a></li>
                <li><a href="review.php">View Feedback</a></li>
                <li><a href="bookedflight.php"> bookedflight</a></li>
				<li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
	 </body>

</html>