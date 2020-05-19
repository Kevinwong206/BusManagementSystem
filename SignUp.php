<html lang="en">

<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Joy Capture</title>
<meta charset=utf-8>
</head>

<body>
        <?php echo "<div id='container'>"; 
		      echo "<div id='mainpic'>"; 
        
        echo "<table width = '100%' align='left' border='0' >";
		echo "<tr align = 'left'>";
        echo "<td width='20%' align='center' ><img src='images/logo.PNG' width='270' height='170.5' ></td>";
        echo "<td width='70%' align='right' ><big><font color='#FFFFFF' size='200px' face='arial black'><b>A To B Worry Free&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></font></big></td>";
        echo "</tr>";
		echo "</table>";
            
        echo "</div>";
        
        echo "<div id='menu'>";
        	echo "<ul >";
            	echo "<li class='menuitem'><a href='Home.php'>Home</a></li>";
                echo "<li class='menuitem'><a href='BusTicket.php'>Bus Ticket</a></li>";
                echo "<li class='menuitem'><a href='Purchase.php'>Purchase History</a></li>";
                echo "<li class='menuitem'><a href='AboutUs.php'>About Us</a></li>";
                echo "<li class='menuitem'><a href='SignIn.php'>Log In/Sign up</a></li>";
            echo "</ul>";
        echo "</div>";
        
		echo "<div id='content2'>";
		echo "<div id='sign-up-form'>";
                
        echo "<h1>Sign Up</h1>";
        echo "<form>";
        echo "<input type='email' id='input-box' placeholder='Email Address '>";
        echo "<input type='name' id='input-box' placeholder='First Name '>";
        echo "<input type='name' id='input-box' placeholder='Last Name '>";
        echo "<input type='password' id='input-box' placeholder='New Password (6 or more characters)'>";
        echo "<input type='confirm password' id='input-box' placeholder='Confirm Password'>";
        echo "<input type='phone' id='input-box' placeholder='Phone Number'>";
        echo "<p>&nbsp;</p>";
        echo "<p><span><input type='checkbox'></span>I agree to terms of services</p><br>";
        echo "<hr>";
        echo "<p>&nbsp;</p> ";
        echo "<input type='submit'>";
    
        echo "</form> ";
               
      echo "</div>";
      echo "</div>";
      echo "</div>";
	   ?>
</body>
</html>
