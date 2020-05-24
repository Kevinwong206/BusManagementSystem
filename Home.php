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
		
				echo "<h1><center><font face = 'Showcard Gothic'><big>Popular Places to go in Penang</center></big></font></h1>";
			
        echo "</h1>";

	echo "<br /><br />";

	//table
        echo "<table cellspacing='25'border='0' width='72%' style='background-image: url(images/homeback2.jpg)'>";
        echo "<tr>";
			
			//Keloksi
			//Keloksi Photo
            		echo "<td><img src='images/KekLokSi.jpg' height='300' width='500'></td>";
			echo "<td>";
			//title
			echo "<a href = 'http://www.penang.ws/penang-attractions/kek-lok-si.htm'><font face = 'Showcard Gothic'>Kek Lok Si</font></a>";
			echo "<br/><br/>";
			//address
			echo "<h5 align='left'><b>Address:</b> Pekan Ayer Itam, 11500 Air Itam, Penang</h5>";
			echo "<br/>";
			//phone
			echo "<h5 align='left'><b>Phone:</b> 04-828 3317</h5>";
			echo "<br/>";
			//description
            		echo "<h6>The Kek Lok Si Temple is a Buddhist temple situated in Air Itam, Penang, Malaysia. It is the largest Buddhist temple in Malaysia, 
				  and is also an important pilgrimage centre for Buddhists from Hong Kong, the Philippines, Singapore and other countries in Southeast Asia..";
			echo "</h6>";
			echo "</td>";
        echo "</tr>";
        
		echo "<tr>";
            echo "<td>";
			//Penang Hill
			//title
			echo "<a href = 'http://penanghill.gov.my/index.php/en/'><font face = 'Showcard Gothic'>Penang Hill</font></a>";
			echo "<br/><br/>";
			//address
			echo "<h5 align='left'> <b> Address: </b>Jalan Stesen Bukit Bendera,Air Itam, 11500 Pulau Pinang.</h5>";
			echo "<br/>";
			//Email Address
			echo "<h5 align='left'>Email:inquiries@penanghill.gov.my</h5>";
			echo "<br/>";
			//description
            		echo "<h6>Penang Hill is a hill resort comprising a group of peaks on Penang Island, Malaysia. It is located within the Air Itam suburb, 
				  9 km west of the center of George Town. Penang Hill is also known by the Malay name Bukit Bendera, which actually refers to Flagstaff Hill, the most developed peak";
			echo "</h6>";		
			echo "</td>";
			//Penang Hill photo
			echo "<td><img src='images/PenangHill.png' height='300' width='500'></td>";
        echo "</tr>";
            
        echo "<tr>";
			//Entopia
			//Entopia photo
            		echo "<td><img src='images/entopia.jpg' height='300' width='500'></td>";
			echo "<td>";
			//title
			echo "<a href = 'http://www.entopia.com'><font face = 'Showcard Gothic'>Entopia</font></a>";
			echo "<br/><br/>";
			//address
			echo "<h5 align='left'><b>Address:</b> No.830, Jalan Teluk Bahang, Teluk Bahang, 11050, Pulau Pinang </h5>";
			echo "<br/>";
			//phone
			echo "<h5 align='left'><b>Phone:</b> 04-888 8111 </h5>";
			echo "<br/>";
			//description
           		echo "<h6>Entopia, a tropical sanctuary for our planet's little denizens from those that fly freely in the sky to the ones that creep stealthily beneath the ground. 
				  Journey into a magical paradise that honours the unsung heroes of our natural world with plenty to discover from outdoor adventures to cavernous mysteries 
				  and a multi-storey Indoor Discovery Centre.";
			echo "</h6>";		
			echo "</td>";
        echo "</tr>";
		
		echo "<tr>";
            echo "<td>";
			//Penang heritage 
			//title
			echo "<a href = 'https://www.timetravelturtle.com/george-town-heritage-penang-malaysia/'><font face = 'Showcard Gothic'>Penang Heritage Area</font></a>";
			echo "<br/><br/>";
			//address
			echo "<h5 align='left'><b>Address:</b> Georgetown, 10200 George Town, Penang </h5>";
			echo "<br/>";
			//phone
			echo "<h5 align='left'><b>Phone:</b> 04-261 6606 </h5>";
			echo "<br/>";
			//description
            		echo "<h6>The George Town UNESCO World Heritage Site features Malaysia’s best restored and re-adaptive traditional architecture as well as a multitude of heritage trades and arts.
				  The world-renowned ‘Street of Harmony’ reflects the influence of the diverse communities that have made Penang their home. At only 2.5sq km, the George Town World Heritage 
				  Site is compact enough to be explored on foot, bicycle or trishaw.";
			echo "</h6>";		
			echo "</td>";
			//Penang Heritage photo
			echo "<td><img src='images/heritage.jpg' height='300' width='500'></td>";
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
