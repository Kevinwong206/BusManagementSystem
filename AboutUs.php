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
        
		echo "<div id='content'>";
	               echo "<p>&nbsp;</p>";
                       echo "<p>&nbsp;</p>";
			//About Us
		        echo "<h1><center><big><font face='Impact'> About Us</font></big></center></h1></br>";
			echo "<img src='images/OurTeam.jpg' width='1400' height='600' /></br></br>";
			echo "<p><big><font face = 'Georgia'>Bus2U is a well-respected bus service that is mainly based in Malaysia. Our founder, Kevin decided to start Bus2U as his new business venture as travelling from one place to another is essential to Malaysians. Hence, Bus2U was established in 1983. Today, our team mainly consists of 5 members who operate and help run Bus2U. Bus2U is proud to pride itself as one of Malaysia's top leading bus services and has been awarded numerous prestigious awards for our excellence.</font></big></p>";
			echo "</br></br></br>";
	                //History 
			echo "<h1><center><big><font face='Impact'>History Of Bus2U</font></big></center></h1></br>";
			echo "<img src='images/history.jpg' width='1400' height='600' /></br></br>";
			echo "<p><big><font face = 'Georgia'>Since its humble start in 22 January 1983, Bus2U Sdn. Bhd. has been dedicating express coach services to passengers. Bus2U Sdn. Bhd. is a fast growing express coach company. In the beginning, we had only one single unit of 44-passenger express bus and a few units of factory buses, but now we become one of the leading and largest companies of public bus transportation in Malaysia.</font></big></p></br>";
			echo "<p><big><font face = 'Georgia'>Today Bus2U Sdn. Bhd. owns more than 100′s express coaches including Super VIP air-conditioned express coaches, executive double-deck & single high-deck express buses, coupled with over two hundred experienced and well-trained drivers in order to provide our passengers with the safest and most comfortable journey which connects to main cities and channels them to their destinations. Besides, in meeting up to our customers’ demands, our top-notch management team has also been serving to its very best by providing our customers with a service of top quality. Therefore, we intend to acquire more express coaches and permits in order to have various bus routes and increase the number of trips to satisfy the demands of the public.</font></big></p>";
                       echo "</br></br></br>";
			
			echo "<div class='row'>"; // Split column for mission
                        echo "<div class='column'>";
			echo "<div class ='card'>";
			echo "<div class ='container'>";
			echo "<p>&nbsp;</p>";
			echo "<center><img src ='images/mission.jpg' width ='450' height ='300' /></center>";
			echo "<h1><big><center><font face='Impact'>Our Mission</font></center></big></h1></br>";
			echo "<p><ol= 'circle'>
			      <li><big><font face = 'Georgia'>Cater to the needs on transportation of the citizens who do not own a car.</font></big></li>
			      <li><big><font face = 'Georgia'>Gain our customers' trust by providing services that are friendly, respectful, safe, and dependable.</font></big></li>
				  <li><big><font face = 'Georgia'>Attain the lowest cost so that everyone can travel with Bus2u.</font></big></li>
				  <li><big><font face = 'Georgia'>Provide transportation service that ranked among the best in terms of safety, cleanliness and punctuality.</font></big></li></ol></p>";
			echo "<p>&nbsp;</p>";
			echo "</div>"; // end of container 
			echo "</div>"; // end of card
			echo "</div>"; // end of column
	
			echo "<div class='column'>"; //Split column for vision
			echo "<div class ='card'>";
			echo "<div class ='container'>";
			echo "<p>&nbsp;</p>";
			echo "<center><img src ='images/vision.jpg' width ='450' height ='300' /></center>";
			echo "<h1><center><big><font face ='Impact'>Our Vision</font></big></center></h1></br>";
			echo "<p><ol= 'circle'>
			      <li><big><font face = 'Georgia'>Easy Transportation Service for every Malaysian.</font></big></li>
			      <li><big><font face = 'Georgia'>Mobility For All.</font></big></li>
				  <li><big><font face = 'Georgia'>Becoming the Best Bus Service in the region of South East Asia.</font></big></li>
				  <li><big><font face = 'Georgia'>Ensuring our customers happiness and satisfactory rate.</font></big></li></ol></p>";
		    echo "<p>&nbsp;</p>";
			echo "<p>&nbsp;</p>";
			echo "<p>&nbsp;</p>";
			echo "</div>"; // end of container 
			echo "</div>"; // end of card
			echo "</div>"; // end of column
			echo "</div>"; // end of row
            
        echo "<p>&nbsp;</p>";
                echo "<p>&nbsp;</p>";
                echo "<p>&nbsp;</p>";
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
