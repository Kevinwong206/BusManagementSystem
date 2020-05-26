<html lang="en">

<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Bus2u Sign In Page</title>
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
                echo "<li class='menuitem'><a href='SignIn.php'>Log In/Sign up</a></li>";
            echo "</ul>";
        echo "</div>";
        
        echo "<div id='content2'>";
		echo "<div id='sign-in-form'>";
                
        echo "<h1>Sign In</h1>";
            echo "<form>";
                // the details of the Sign in page 
                echo "<input type='email' id='input-box' placeholder='Your Email'>";
                echo "<input type='password' id='input-box' placeholder='Your Password'>";
                echo "<hr>";
                echo "<p id='or'>OR</p>";
    
                echo "<p>&nbsp;</p>";
                echo "<button type='button' id='facebook-btn'>Login with Facebook</button><br>"; // Log in using facebook
    
                echo "<p>&nbsp;</p>";
                echo "<p>Do you have an account? <a href='SignUp.php'>Sign up</a></p>"; // If user do not have account, this will direct them to sign up

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
