<html lang="en">

<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Bus2u Bus Ticket Page</title>
<meta charset=utf-8>
</head>

<body a link="black" vlink="black">
    
        <?php 
        include ('Header.php');
        
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
				  echo "<img src='images/Melaka.jpg' alt='Melaka' height='240' width='300'>"; //image
                      echo "<p>&nbsp;</p>";
                      echo "<h1><a href='Melaka.php'>MELAKA</a></h1>"; //title
                      echo "<p>&nbsp;</p>";
                      echo "<p id='busTicketAvailability'><font color='green'>Available</font></p>"; //busTicketAvailability
                      echo "<p>&nbsp;</p>";
                  echo "</div></td>";
                          
                  echo "</tr>";
                
                echo "<tr> ";  //Second table row
    
                  echo "<td><div id='busTicketBox'>"; // the first busTicketBox in second row
				  echo "<img src='images/Penang.jpg' alt='PENANG' height='240' width='300'>"; //image
                      echo "<p>&nbsp;</p>";
                      echo "<h1><a href='Penang.php'>PENANG</a></h1>"; //title
                      echo "<p>&nbsp;</p>";
                      echo "<p id='busTicketAvailability'><font color='green'>Available</font></p>"; //busTicketAvailability
                      echo " <p>&nbsp;</p>";
                  echo "</div></td>";
                    
                  echo "<td><div id='busTicketBox'>"; // the second busTicketBox in second row
					  echo "<img src='images/Perak.jpg' alt='Perak' height='240' width='300'>"; //image
                      echo "<p>&nbsp;</p>";
                      echo "<h1><a href='Perak.php'>PERAK</a></h1>"; //title
                      echo "<p>&nbsp;</p>";
                      echo "<p id='busTicketAvailability'><font color='green'>Available</font></p>"; //busTicketAvailability
                      echo "<p>&nbsp;</p>";	
                  echo "</div></td>";
                    
                  echo "<td><div id='busTicketBox'>"; // the third busTicketBox in second row
				      echo "<img src='images/Negeri Sembilan.jpg' alt='Negeri Sembilan' height='240' width='300'>"; //image
                      echo "<p>&nbsp;</p>";
                      echo "<h1>NEGERI SEMBILAN</h1>"; //title
                      echo "<p>&nbsp;</p> "; 
                      echo "<p id='busTicketAvailability'>Coming Soon</p>"; //busTicketAvailability
                      echo "<p>&nbsp;</p>";  				  
                  echo "</div></td>";
                    
                  echo "</tr>";
				  
				  echo "<tr> ";  //Third table row
    
                  echo "<td><div id='busTicketBox'>"; // the first busTicketBox in third row
					  echo "<img src='images/Perlis.jpg' alt='Perlis' height='240' width='300'>"; //image
                      echo "<p>&nbsp;</p>";
                      echo "<h1>PERLIS</h1>"; //title
                      echo "<p>&nbsp;</p>";
                      echo "<p id='busTicketAvailability'>Coming Soon</p>"; //busTicketAvailability
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
        	include ('Footer.php');
            
            
        echo "</div>";// end the css of the content
        echo "</div>";// end the container of the content
?>
</body>
</html>
