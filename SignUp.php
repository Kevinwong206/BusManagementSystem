<html lang="en">

<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Bus2u Home Page</title>
<meta charset=utf-8>
</head>

<body>
    
        <?php 
        echo "<div id='container'>";
        echo "<div id='mainpic'>";  
        //creating a table in the main pain to insert logo picture and the slogan 
        echo "<table width = '100%' align='left' border='0' >";
		echo "<tr align = 'left'>";
            echo "<td width='20%' align='center' ><img src='images/logo.PNG' width='270' height='170.5' ></td>"; //the image
            echo "<td width='70%' align='right' ><big><font color='#FFFFFF' size='200px' face='arial black'><b>A To B Worry Free&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></font></big></td>"; // the slogan
        echo "</tr>";
		echo "</table>";   
        echo "</div>";
        
        echo "<div id='menu'>";
        	echo "<ul>";//List all the content in the menu and the link of the content
            	echo "<li class='menuitem'><a href='Home.php'>Home</a></li>";
                echo "<li class='menuitem'><a href='BusTicket.php'>Bus Ticket</a></li>";
                echo "<li class='menuitem'><a href='Purchase.php'>Purchase History</a></li>";
                echo "<li class='menuitem'><a href='AboutUs.php'>About Us</a></li>";
                echo "<li class='menuitem'><a href='SignIn.php'>Log In/Sign up</a></li>";;
            echo "</ul>";
        echo "</div>";
        
		echo "<div id='content2'>";
		echo "<div id='sign-up-form'>";
                
        echo "<h1>Sign Up</h1>";
            echo "<form>";
                // the details of the Sign up page 
                echo "<input type='email' id='input-box' placeholder='Email Address '>";
                echo "<input type='name' id='input-box' placeholder='First Name '>";
                echo "<input type='name' id='input-box' placeholder='Last Name '>";
                echo "<input type='password' id='input-box' placeholder='New Password (6 or more characters)'>";
                echo "<input type='confirm password' id='input-box' placeholder='Confirm Password'>";
                echo "<input type='phone' id='input-box' placeholder='Phone Number'>";
                
                echo "<p>&nbsp;</p>";
                echo "<p><span><input type='checkbox'></span>I agree to terms of services</p><br>";
                echo "<hr>"; // to draw a line
    
                echo "<p>&nbsp;</p> ";
                echo "<input type='submit'>"; //submit button
    
            echo "</form> ";
               
        echo "</div>";
		echo "<p>&nbsp;</p>";
		echo "<p>&nbsp;</p>";
		
		//FOOTER
		echo "<div id='footer'>";
		echo "<p>Bus2U Hotline : 0123456789 </p>";
		echo "</div>";//end of footer
		
        echo "</div>";// end the css of the content
        echo "</div>";// end the container of the content
?>
</body>
</html>
