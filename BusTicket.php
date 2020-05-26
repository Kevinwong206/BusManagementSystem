<html lang="en">

<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Bus2u Bus Ticket Page</title>
<meta charset=utf-8>
</head>

<body a link="black" vlink="black">
    
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
                
                // Create a table of 4 rows for the content
                echo "<table cellspacing='15'border='0'>";
        	    echo "<tr>";// First table row     
                  
                  echo "<td><div id='busTicketBox'>"; // the first busTicketBox in first row 
                      echo "<img src='images/Selangor.jpg' alt='Selangor' height='240' width='300'>"; //image
                      echo "<p>&nbsp;</p>";
                      echo "<h1><a href='Selangor.php'>SELANGOR</a></h1>"; // title
                      echo "<p>&nbsp;</p>";
                      echo "<p id='busTicketAvailability'><font color='green'>Available</font></p>"; //busTicketAvailability
                      echo "<p>&nbsp;</p>";
                  echo "</div></td>";
                    
                  echo "<td><div id='busTicketBox'>"; // the second busTicketBox in first row
                      echo "<img src='images/Johor.jpg' alt='Johor' height='240' width='300'>";//image
                      echo "<p>&nbsp;</p>";
                      echo "<h1><a href='Johor.php'>JOHOR</a></h1>";//title
                      echo "<p>&nbsp;</p>";
                      echo "<p id='busTicketAvailability'><font color='green'>Available</font></p>"; //busTicketAvailability
                      echo "<p>&nbsp;</p>";
                  echo "</div></td>";
                    
                  echo "<td><div id='busTicketBox'>"; // the third busTicketBox in first row
                      echo "<img src='images/Negeri Sembilan.jpg' alt='Negeri Sembilan' height='240' width='300'>"; //image
                      echo "<p>&nbsp;</p>";
                      echo "<h1>NEGERI SEMBILAN</h1>"; //title
                      echo "<p>&nbsp;</p> "; 
                      echo "<p id='busTicketAvailability'>Coming Soon</p>"; //busTicketAvailability
                      echo "<p>&nbsp;</p>";
                  echo "</div></td>";
                          
                  echo "</tr>";
                
                echo "<tr> ";  //Second table row
    
                  echo "<td><div id='busTicketBox'>"; // the first busTicketBox in second row
                      echo "<img src='images/Perlis.jpg' alt='Perlis' height='240' width='300'>"; //image
                      echo "<p>&nbsp;</p>";
                      echo "<h1>PERLIS</h1>"; //title
                      echo "<p>&nbsp;</p>";
                      echo "<p id='busTicketAvailability'>Coming Soon</p>"; //busTicketAvailability
                      echo "<p>&nbsp;</p>";
                  echo "</div></td>";
                    
                  echo "<td><div id='busTicketBox'>"; // the second busTicketBox in second row
                      echo "<img src='images/Melaka.jpg' alt='Melaka' height='240' width='300'>"; //image
                      echo "<p>&nbsp;</p>";
                      echo "<h1><a href='Melaka.php'>MELAKA</a></h1>"; //title
                      echo "<p>&nbsp;</p>";
                      echo "<p id='busTicketAvailability'><font color='green'>Available</font></p>"; //busTicketAvailability
                      echo "<p>&nbsp;</p>";
                  echo "</div></td>";
                    
                  echo "<td><div id='busTicketBox'>"; // the third busTicketBox in second row
                      echo "<img src='images/Penang.jpg' alt='PENANG' height='240' width='300'>"; //image
                      echo "<p>&nbsp;</p>";
                      echo "<h1><a href='Penang.php'>PENANG</a></h1>"; //title
                      echo "<p>&nbsp;</p>";
                      echo "<p id='busTicketAvailability'><font color='green'>Available</font></p>"; //busTicketAvailability
                      echo " <p>&nbsp;</p>";
                  echo "</div></td>";
                    
                  echo "</tr>";
				  
				  echo "<tr> ";  //Third table row
    
                  echo "<td><div id='busTicketBox'>"; // the first busTicketBox in third row
                      echo "<img src='images/Perak.jpg' alt='Perak' height='240' width='300'>"; //image
                      echo "<p>&nbsp;</p>";
                      echo "<h1><a href='Perak.php'>PERAK</a></h1>"; //title
                      echo "<p>&nbsp;</p>";
                      echo "<p id='busTicketAvailability'><font color='green'>Available</font></p>"; //busTicketAvailability
                      echo "<p>&nbsp;</p>";
                  echo "</div></td>";
                    
                  echo "<td><div id='busTicketBox'>"; // the second busTicketBox in third row
                      echo "<img src='images/Terengganu.jpg' alt='Terengganu' height='240' width='300'>"; //image
                      echo "<p>&nbsp;</p>";
                      echo "<h1>TERENGGANU</h1>"; //title
                      echo "<p>&nbsp;</p>";
                      echo "<p id='busTicketAvailability'>Coming Soon</p>"; //busTicketAvailability
                      echo "<p>&nbsp;</p>";
                  echo "</div></td>";
                    
                  echo "<td><div id='busTicketBox'>"; // the third busTicketBox in third row
                      echo "<img src='images/Kelantan.jpg' alt='Kelantan' height='240' width='300'>"; //image
                      echo "<p>&nbsp;</p>";
                      echo "<h1>KELANTAN</h1>"; //title
                      echo "<p>&nbsp;</p>";
                      echo "<p id='busTicketAvailability'>Coming Soon</p>"; //busTicketAvailability
                      echo " <p>&nbsp;</p>";
                  echo "</div></td>";
                    
                  echo "</tr>";
				  
				  echo "<tr>";  //Fourth table row
				  
				  echo "<center>";
                  echo "<td><div id='busTicketBox'>"; // the first busTicketBox in fourth row
                      echo "<img src='images/Kedah.jpg' alt='Kedah' height='240' width='300'>"; //image
                      echo "<p>&nbsp;</p>";
                      echo "<h1>KEDAH</h1>"; //title
                      echo "<p>&nbsp;</p>";
                      echo "<p id='busTicketAvailability'>Coming Soon</p>"; //busTicketAvailability
                      echo "<p>&nbsp;</p>";
                  echo "</div></td>";
                  echo "</center>";
				  
                  echo "<td><div id='busTicketBox'>"; // the second busTicketBox in fourth row
                      echo "<img src='images/Pahang.jpg' alt='Pahang' height='240' width='300'>"; //image
                      echo "<p>&nbsp;</p>";
                      echo "<h1>PAHANG</h1>"; //title
                      echo "<p>&nbsp;</p>";
                      echo "<p id='busTicketAvailability'>Coming Soon</p>"; //busTicketAvailability
                      echo "<p>&nbsp;</p>";
                  echo "</div></td>";
                  
                  echo "</tr>";
                
                echo "</table>"; //end the table
                  
            
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
