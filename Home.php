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
       
        echo "<h1 align='center'>";
        echo "<p>&nbsp;</p>";
        echo "<p>&nbsp;</p> ";
		
				echo "<h1>Enjoy Shopping With Joy Capture</h1>";
			
        echo "</h1>";

	echo "<br /><br />";

        echo "<table cellspacing='25'border='0' width='72%' style='background-image: url(images/homeback2.jpg)'>";
        echo "<tr>";
            echo "<td><img src='images/bg.jpg' height='300' width='500'></td>";
            echo "<td>Convenience at your fingertips. Shop online with <a href='Products.php'>JoyCapture</a> and we'll deliver groceries to your doorstep.</td>";

        echo "</tr>";
        
        echo "<tr>";
            echo "<td>We, at JoyCapture would like to hear from you as your feedback is valuable to us for further improvement and to provide you a better service. Kindly use any of the <a href='ContactUs.php'>details</a> to contact us and we will answer you</td>";
         echo "<td><img src='images/service.png' height='400' width='400'></td>";
       echo "</tr>";
            
        echo "<tr>";
            echo "<td><img src='images/store.PNG' height='300' width='500'></td>";
            echo "<td><a href='AboutUs.php'>Click Here</a> to learn more about our brand   </td>";
        echo "</tr>";
        echo "</table>";
	
       	
        echo "</div>";// end the css of the content
        echo "</div>";// end the container of the content
?>        
</body>
</html>
