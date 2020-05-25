<html lang="en">

<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Bus2u Home Page</title>
<meta charset=utf-8>
</head>

<body  a link="black" vlink="black">
    
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
        
		echo "<div id='content'>";
    
                echo "<div id='busTicketTitle'>";
                echo "<p>&nbsp;</p>";// space a line
                echo "<h3>Bus Ticket</h3>";
                echo "<p>&nbsp;</p>";// space a line
                echo "</div>";
                
                // Create a table of 2 rows with 4 columns for the content
                echo "<table cellspacing='15'border='0'>";
        	    echo "<tr>";// first table row     
                  
                  echo "<td><div id='busTicketBox'>"; // the first busTicketBox in first row 
                      echo "<img src='images/product1.jpg' alt='Kinder Bueno' height='250' width='250'>"; //image
                      echo "<p>&nbsp;</p>";
                      echo "<h1><a href='product1.php'>Kinder Bueno Milk Hazelnuts</a></h1>"; // title
                      echo "<p>&nbsp;</p>";
                      echo "<p id='busTicketAvailability'>RM 8.99</p>"; //busTicketAvailability
                      echo "<p>&nbsp;</p>";
                  echo "</div></td>";
                    
                  echo "<td><div id='busTicketBox'>"; // the second busTicketBox in first row
                      echo "<img src='images/product2.jpg' alt='Cadbury Dairy' height='250' width='250'>";//image
                      echo "<p>&nbsp;</p>";
                      echo "<h1><a href='product2.php'>Cadbury Dairy Milk Chocolate Mini Bites</a></h1>";//title
                      echo "<p>&nbsp;</p>";
                      echo "<p id='busTicketAvailability'>RM 8.29</p>"; //busTicketAvailability
                      echo "<p>&nbsp;</p>";
                  echo "</div></td>";
                    
                  echo "<td><div id='busTicketBox'>"; // the third busTicketBox in first row
                      echo "<img src='images/product3.jpg' alt='Kashmir Beras' height='250' width='250'>"; //image
                      echo "<p>&nbsp;</p>";
                      echo "<h1><a href='product3.php'>Kashmir Beras Faiza Basmathi Rice</a></h1>"; //title
                      echo "<p>&nbsp;</p> "; 
                      echo "<p id='busTicketAvailability'>RM 30.00</p>"; //busTicketAvailability
                      echo "<p>&nbsp;</p>";
                  echo "</div></td>";
                    
                  echo "<td><div id='busTicketBox'>"; // the fourth busTicketBox in first row
                      echo "<img src='images/product4.jpg' alt='Jasmine Beras' height='250' width='250'>"; //image
                      echo "<p>&nbsp;</p>";
                      echo "<h1><a href='product4.php'>Jasmine Basmathi King Beras Basmathi</a></h1>"; //title
                      echo "<p>&nbsp;</p>";
                      echo "<p id='busTicketAvailability'>RM 45.00</p>"; //busTicketAvailability
                      echo "<p>&nbsp;</p>";
                      echo "</div></td>";       
                  echo "</tr>";
                
                echo "<tr> ";  //Second table row
    
                  echo "<td><div id='busTicketBox'>"; // the first busTicketBox in second row
                      echo "<img src='images/product5.jpg' alt='Sunsweet Prunes' height='250' width='250'>"; //image
                      echo "<p>&nbsp;</p>";
                      echo "<h1><a href='product5.php'>Sunsweet California Grown Pitted Prunes</a></h1>"; //title
                      echo "<p>&nbsp;</p>";
                      echo "<p id='busTicketAvailability'>RM 15.00</p>"; //busTicketAvailability
                      echo "<p>&nbsp;</p>";
                  echo "</div></td>";
                    
                  echo "<td><div id='busTicketBox'>"; // the second busTicketBox in second row
                      echo "<img src='images/product6.jpg' alt='Chips More' height='250' width='250'>"; //image
                      echo "<p>&nbsp;</p>";
                      echo "<h1><a href='product6.php'>Chips More Double Choc Chocolate Chip Cookies</a></h1>"; //title
                      echo "<p>&nbsp;</p>";
                      echo "<p id='busTicketAvailability'>RM 3.00</p>"; //busTicketAvailability
                      echo "<p>&nbsp;</p>";
                  echo "</div></td>";
                    
                  echo "<td><div id='busTicketBox'>"; // the third busTicketBox in second row
                      echo "<img src='images/product7.jpg' alt='Jacob's Weetameal Wheat Crackers' height='250' width='250'>"; //image
                      echo "<p>&nbsp;</p>";
                      echo "<h1><a href='product7.php'>Jacob's Weetameal Wheat Crackers</a></h1>"; //title
                      echo "<p>&nbsp;</p>";
                      echo "<p id='busTicketAvailability'>RM 11.99</p>"; //busTicketAvailability
                      echo " <p>&nbsp;</p>";
                  echo "</div></td>";
                    
                  echo "<td><div id='busTicketBox'>"; // the fourth busTicketBox in second row
                      echo "<img src='images/product8.jpg' alt='Maggi Curry' height='250' width='250'>"; //image
                      echo "<p>&nbsp;</p>";
                      echo "<h1><a href='product8.php'>Maggi Curry Flavour Noodles</a></h1>"; //title
                      echo "<p>&nbsp;</p>";
                      echo "<p id='busTicketAvailability'>RM 3.50</p>"; //busTicketAvailability
                      echo "<p>&nbsp;</p>";
                      echo "</div></td>";
                  echo "</tr>";
                
                echo "</table>"; // end the table
                  
            
            echo "<p>&nbsp;</p>"; // space a line
        	echo "<p>&nbsp;</p>";
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

