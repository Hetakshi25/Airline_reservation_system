
<html>
    <head>
       
       
        <link rel="stylesheet" href="homecss.css">

    </head>
	<body>
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
                        background-image: linear-gradient(#0c73ea,#309fea);
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
					</style>
   
		<nav>
            <div class="logo">
                <p>Airline Reservation</p>
            </div>
            <ul>
                <li><a href="homepage.php">Home</a></li>
				<!--<li><a href="register.php">Registration</a></li>
				<li><a href="login.php">Login</a></li>-->
                <li><a href="bookingform.php">Book Tickets</a></li>
				<li><a href="ticket.php">My Booking</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
				<li><a href="feedbackform.php">Feedback</a></li>
				<li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </body>

</html>