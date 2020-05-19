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
        	echo "<ul align = 'center'>";
            	echo "<li class='menuitem'><a href='Home.php'>Home</a></li>";
                echo "<li class='menuitem'><a href='BusTicket.php'>Bus Ticket</a></li>";
                echo "<li class='menuitem'><a href='Purchase.php'>Purchase History</a></li>";
                echo "<li class='menuitem'><a href='AboutUs.php'>About Us</a></li>";
                echo "<li class='menuitem'><a href='SignIn.php'>Log In/Sign up</a></li>";
            echo "</ul>";
        echo "</div>";
        
        echo "<div id='content2'>";
		echo "<div id='sign-in-form'>";
                
        echo "<h1>Sign In</h1>";
        echo "<form>";
        echo "<input type='email' id='input-box' placeholder='Your Email'>";
        echo "<input type='password' id='input-box' placeholder='Your Password'>";
        echo "<hr>";
        echo "<p id='or'>OR</p>";
        echo "<p>&nbsp;</p>";
        echo "<button type='button' id='facebook-btn'>Login with Facebook</button><br>";
        echo "<p>&nbsp;</p>";
        echo "<p>Do you have an account? <a href='SignUp.php'>Sign up</a></p>";
        echo "</form> ";
               
        echo "</div>";
echo "</div>";
   echo "</div>";
    ?>
</body>
</html>
