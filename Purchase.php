<html lang="en">

<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Joy Capture</title>
<meta charset=utf-8>
</head>

<body>
    
        <?php 
        echo "<div id='container'>";
        echo "<div id='mainpic'>";  
        //creating a table in the main pain to insert logo picture and the slogan 
        echo "<table width = '100%' align='left' border='0' >";
		echo "<tr align = 'left'>";
            echo "<td width='20%' align='center' ><img src='images/logo.png' width='250' height='145.5' ></td>"; //the image
            echo "<td width='70%' align='center' ><big><font color='#FFFFFF' size='200px' face='arial black'><b>Great Food, Great Value</b></font></big></td>"; // the slogan
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
        
       echo "<div id='content'>";
            echo "<p>&nbsp;</p>";
                echo "<p>&nbsp;</p>";
                echo "<p>&nbsp;</p>";
                echo "<p>&nbsp;</p>";
                echo "<p>&nbsp;</p>";
                echo "<p>&nbsp;</p>";
    
		//FOOTER
		echo "<div id='footer'>";
		echo "<p>Call Us Now : 0123456789 </p>";
		echo "</div>";//end of footer
		
        echo "</div>";// end the css of the content
        echo "</div>";// end the container of the content
?>
</body>
</html>
