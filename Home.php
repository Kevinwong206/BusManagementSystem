<html lang="en">

<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Bus2u Home Page</title>
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
       
        echo "<h1 align='center'>";
        echo "<p>&nbsp;</p>";
        echo "<p>&nbsp;</p> ";
		
				echo "<h1><center><font face = 'Showcard Gothic'><big>Popular Places to go in Malaysia</center></big></font></h1>";
			
        echo "</h1>";

	echo "<br /><br />";

	//table
        echo "<table cellspacing='25'border='0' width='72%' style='background-image: url(images/homeback2.jpg)'>";
        echo "<tr>";
			//Langkawi
			//Langkawi Photo
            echo "<td><img src='images/Langkawi.jpg' height='300' width='500'></td>";
			echo "<td>";
			//title
			echo "<a href = 'http://www.langkawi-info.com/'><font face = 'Showcard Gothic'>Langkawi</font></a>";
			echo "<br/><br/>";
			//address
			echo "<h5 align='left'><b>Address:</b> 07000 Langkawi, Kedah</h5>";
			echo "<br/>";
			//phone
			echo "<h5 align='left'><b>Phone:</b> 04-828 3317</h5>";
			echo "<br/>";
			//description
            echo "<h6>Langkawi, officially known as Langkawi, the Jewel of Kedah, is a district and an archipelago of 99 islands in the Andaman Sea some 30 km off the mainland coast of northwestern Malaysia.
					  The islands are a part of the state of Kedah, which is adjacent to the Thai border.";
			echo "</h6>";
			echo "</td>";
        echo "</tr>";
        
		echo "<tr>";
            echo "<td>";
			//Pulau Pangkor
			//title
			echo "<a href = 'https://www.tripadvisor.com.my/Attraction_Review-g298300-d12526389-Reviews-Pangkor_Island-Pangkor_Pulau_Pangkor_Manjung_District_Perak.html'><font face = 'Showcard Gothic'>Pulau Pangkor</font></a>";
			echo "<br/><br/>";
			//address
			echo "<h5 align='left'> <b> Address: </b>Strait of Malacca</h5>";
			echo "<br/>";
			//description
            		echo "<h6>Pangkor Island lies just off the west coast of Peninsular Malaysia. It’s known for beaches like Teluk Nipah, Coral Bay and Pasir Giam, which connects to coral-ringed Giam Island at low tide.
					Dating back to 1670, the ruined Dutch Fort demonstrates the island’s strategic colonial importance. Nearby, the Sacred Rock is inscribed with the Dutch East India Company symbol and a picture of a tiger carrying away a child.";
			echo "</h6>";		
			echo "</td>";
			//Pulau Pangkor photo
			echo "<td><img src='images/PulauPangkor.jpg' height='300' width='500'></td>";
        echo "</tr>";
            
        echo "<tr>";
			//Genting Highlands
			//Genting Highlands photo
            		echo "<td><img src='images/genting.jpg' height='300' width='500'></td>";
			echo "<td>";
			//title
			echo "<a href = 'http://www.kuala-lumpur.ws/genting-highland/'><font face = 'Showcard Gothic'>Genting Highlands</font></a>";
			echo "<br/><br/>";
			//address
			echo "<h5 align='left'><b>Address:</b> Genting Highlands, 69000 Genting Highlands, Pahang</h5>";
			echo "<br/>";
			//phone
			echo "<h5 align='left'><b>Phone:</b> 03-6101 1118 </h5>";
			echo "<br/>";
			//description
           		echo "<h6>Genting is acknowledged as Malaysia’s premier hillside station; this Kuala Lumpur mountain peak getaway is Malaysia’s 
					      Asian-style Las Vegas. Renowned for its casino, nightlife and luxury hotels, it features the First World Hotel – which was 
						  listed as the world's largest hotel in 2006 by the Guinness World Book of Records.";
			echo "</h6>";		
			echo "</td>";
        echo "</tr>";
		
		echo "<tr>";
            echo "<td>";
			//Cameron Highlands 
			//title
			echo "<a href = 'https://www.thecrazytourist.com/25-things-to-do-in-the-cameron-highlands-malaysia/'><font face = 'Showcard Gothic'>Cameron Highlands</font></a>";
			echo "<br/><br/>";
			//address
			echo "<h5 align='left'><b>Address:</b> The Cameron Highlands is a district in Pahang. To the north, its boundary touches that of Kelantan; to the west, it shares part 
												   of its border with Perak. </h5>";
			echo "<br/>";
			//description
            		echo "<h6>Cameron Highlands is the most popular of the highland retreats in Malaysia. Located at almost 2,000 meters at its highest point, it offers 
							  visitors a moderate climate with daytime temperatures averaging around 25°C and 18°C at night. This makes the environment conducive for growing 
							  continental plants, fruits and vegetables while providing a cool escape for city-dwellers.";
			echo "</h6>";		
			echo "</td>";
			//Cameron Highlands photo
			echo "<td><img src='images/cameron.jpg' height='300' width='500'></td>";
        echo "</tr>";
	   
        echo "</table>";
		
		//FOOTER
		echo "<div id='footer'>";
		echo "<p>Bus2U Hotline : 0123456789 </p>";
		echo "</div>";//end of footer
       	
        echo "</div>";// end the css of the content
        echo "</div>";// end the container of the content
?>        
</body>
</html>
