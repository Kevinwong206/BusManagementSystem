<html lang="en">

<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Bus2u Home Page</title>
<meta charset=utf-8>
</head>

<body a link="black" vlink="black">
    
        <?php 
		
		include ('Header.php');
		
		//store the users preference into cookies 
	    if(isset($_POST['submittedd'])) {
			setcookie('country',$_POST['country']);
			setcookie('language',$_POST['language']);
			setcookie('currency',$_POST['currency']);
		}
		
		if(isset($_COOKIE['country'])) {
			$country = $_COOKIE['country'];
		}
		
		if(isset($_COOKIE['currency'])) {
			$currency = $_COOKIE['currency'];
		}

		if(isset($_COOKIE['language'])) {
			$language = $_COOKIE['language'];
		}
		
		echo "<div id='content'>";
       
        echo "<h1 align='center'>";
        echo "<p>&nbsp;</p>";
        echo "<p>&nbsp;</p> ";
		
		echo "<h1><center><font face = 'Showcard Gothic'><big>Popular Places to go in Malaysia</center></big></font></h1>";
			
        echo "</h1>";

		echo "<br /><br />";
	

		//Side Bar Row
        echo "<div id='home-columnRight'>";
		echo "<div id='home-card'>";
		echo "<div id='home-container'>";
		echo "<p>&nbsp;</p>";

		//Side Bar Title
		echo "<h1 align = 'center'><a href = 'https://www.worldometers.info/coronavirus/'><font face = 'Serif'>Covid-19 Updates</font></a></h1>";
		echo "<center><img src='images/Corona.jpeg' height='300' width='300'></center>";

		//Sidebar Content
		//Corona in the whole world
		echo "<center>";
		echo "<h2>Coronavirus Cases in the world:</h2></br>";
		echo "<h2>16,420,289</h2></br>";

		//All corona death
		echo "<h2>Death: </h2></br>";
		echo "<h2 style='color:red;'>652,434</h2></br>";

		//All corona recovered
		echo "<h2>Recovered: </h2></br>";
		echo "<h2 style='color:green;'>10,056,249</h2></br>";

		//Malaysia Corona Cases
		echo "<h2>Coronavirus Cases in <b>MALAYSIA</b>: </h2></br>";
		echo "<h2>8,897</h2></br>";

		//Malaysia Death
		echo "<h2>Death: </h2></br>";
		echo "<h2 style='color:red;'>124</h2></br>";

		//Malaysia Recovered
		echo "<h2>Recovered: </h2></br>";
		echo "<h2 style='color:green;'>8,600</h2></br>";
		echo "</center>";

		echo "<p>&nbsp;</p>";
		echo "</div>"; // end of container 
		echo "</div>"; // end of card
		echo "</div>"; // end of column
		
		//Langkawi row
		echo "<div id='home-row'>"; 
        echo "<div id='home-column'>";
		echo "<div id='home-card'>";
		echo "<div id='home-container'>";
		echo "<p>&nbsp;</p>";
		
			echo "<h1 align = 'center'><a href = 'http://www.langkawi-info.com/'><font face = 'Showcard Gothic'>Langkawi</font></a></h1>";
			echo "<br/><br/>";
			echo "<center><img src='images/Langkawi.jpg' height='300' width='500'></center>";
			//address
			echo "<h1 align='center'><font face = 'comic sans ms'><b>Address:</b> 07000 Langkawi, Kedah</font></h1>";
			echo "<br/>";
			//phone
			echo "<h1 align='center'><font face = 'comic sans ms'><b>Phone:</b> 04-828 3317</font></h1>";
			echo "<br/>";
			//description
            echo "<h1><font face = 'comic sans ms'>Langkawi, officially known as Langkawi, the Jewel of Kedah, is a district and an archipelago of 99 islands in the Andaman Sea some 30 km off the mainland coast of northwestern Malaysia.
					  The islands are a part of the state of Kedah, which is adjacent to the Thai border.</font></h1>";
			
		echo "<p>&nbsp;</p>";
		echo "</div>"; // end of container 
		echo "</div>"; // end of card
		echo "</div>"; // end of column
		
		
		//Pangkor row
		echo "<div id='home-row'>"; 
        echo "<div id='home-column'>";
		echo "<div id='home-card'>";
		echo "<div id='home-container'>";
		echo "<p>&nbsp;</p>";
		
			echo "<h1 align = 'center'><a href = 'https://www.tripadvisor.com.my/Attraction_Review-g298300-d12526389-Reviews-Pangkor_Island-Pangkor_Pulau_Pangkor_Manjung_District_Perak.html'><font face = 'Showcard Gothic'>Pulau Pangkor</font></a></h1>";
			echo "<br/><br/>";
			echo "<center><img src='images/PulauPangkor.jpg' height='300' width='500'></center>";
			//address
			echo "<h1 align='center'><font face = 'comic sans ms'><b>Address: </b>Strait of Malacca</font></h1>";
			echo "<br/>";
			//description
            echo "<h1><font face = 'comic sans ms'>Pangkor Island lies just off the west coast of Peninsular Malaysia. It’s known for beaches like Teluk Nipah, Coral Bay and Pasir Giam, which connects to coral-ringed Giam Island at low tide.
					Dating back to 1670, the ruined Dutch Fort demonstrates the island’s strategic colonial importance. Nearby, the Sacred Rock is inscribed with the Dutch East India Company symbol and a picture of a tiger carrying away a child.</font></h1>";
			
		echo "<p>&nbsp;</p>";
		echo "</div>"; // end of container 
		echo "</div>"; // end of card
		echo "</div>"; // end of column
		
		
		//Side Bar Row
        echo "<div id='home-columnRight'>";
		echo "<div id='home-card'>";
		echo "<div id='home-container'>";
		echo "<br>";
		echo "<p>&nbsp;</p>";
	
		
		//Side Bar Title
		echo "<h1 align = 'center'><u><font face = 'Serif'>Personalize Settings</font></u></a></h1>";
		echo "<center><img src='images/setting.png' height='300' width='300'></center>";
		
		//Show the preferences that set by the users
		if(isset($_COOKIE['language']) && (isset($_COOKIE['currency'])) && (isset($_COOKIE['country']))) {
			echo "<h1><center>You have chosen: </center></h1>
			<h2><center><font color='blue'><br> Country: $country  <br> Currency: $currency <br> Language: $language </center></font></h2></p>";
		}
		
		//Sidebar Content
		echo "<br><br><br><center>";
		echo "<h2>Would you like to personalize the website?</h2></br>";
		//Link users to go to the setting page
		echo "<h2><a href = 'setting.php'><font color='red'>CLICK HERE</font></a></h2></br>";
		
		echo "<p>&nbsp;</p>";
		echo "</div>"; // end of container 
		echo "</div>"; // end of card
		echo "</div>"; // end of column
		
		//Genting row
		echo "<div id='home-row'>";
        echo "<div id='home-column'>";
		echo "<div id='home-card'>";
		echo "<div id='home-container'>";
		echo "<p>&nbsp;</p>";
		
			echo "<h1 align = 'center'><a href = 'http://www.kuala-lumpur.ws/genting-highland/'><font face = 'Showcard Gothic'>Genting Highlands</font></a></h1>";
			echo "<br/><br/>";
			echo "<center><img src='images/genting.jpg' height='300' width='500'></center>";
			//address
			echo "<h1 align='center'><font face = 'comic sans ms'><b>Address:</b> Genting Highlands, 69000 Genting Highlands, Pahang</font></h1>";
			echo "<br/>";
			//description
            echo "<h1><font face = 'comic sans ms'>Genting is acknowledged as Malaysia’s premier hillside station; this Kuala Lumpur mountain peak getaway is Malaysia’s 
												  Asian-style Las Vegas. Renowned for its casino, nightlife and luxury hotels, it features the First World Hotel – which was 
												  listed as the world's largest hotel in 2006 by the Guinness World Book of Records.</font></h1>";
			
		echo "<p>&nbsp;</p>";
		echo "</div>"; // end of container 
		echo "</div>"; // end of card
		echo "</div>"; // end of column
		
		//Cameron row
		echo "<div id='home-row'>"; 
        echo "<div id='home-column'>";
		echo "<div id='home-card'>";
		echo "<div id='home-container'>";
		echo "<p>&nbsp;</p>";
		
			echo "<h1 align = 'center'><a href = 'https://www.thecrazytourist.com/25-things-to-do-in-the-cameron-highlands-malaysia/'><font face = 'Showcard Gothic'>Cameron Highlands</font></a></h1>";
			echo "<br/><br/>";
			echo "<center><img src='images/cameron.jpg' height='300' width='500'></center>";
			//address
			echo "<h1 align='center'><font face = 'comic sans ms'><b>Address:</b> The Cameron Highlands is a district in Pahang. To the north, its boundary touches that of Kelantan; to the west, it shares part 
																				of its border with Perak.</font></h1>";
			echo "<br/>";
			//description
            echo "<h1><font face = 'comic sans ms'>Cameron Highlands is the most popular of the highland retreats in Malaysia. Located at almost 2,000 meters at its highest point, it offers 
													visitors a moderate climate with daytime temperatures averaging around 25°C and 18°C at night. This makes the environment conducive for growing 
													continental plants, fruits and vegetables while providing a cool escape for city-dwellers.</font></h1>";
			
		echo "<p>&nbsp;</p>";
		echo "</div>"; // end of container 
		echo "</div>"; // end of card
		echo "</div>"; // end of column
		echo "</div>"; // end of row

		
		//FOOTER
		echo "<div id='footer'>";
		echo "<p>Bus2U Hotline : 0123456789 </p>";
		echo "</div>";// end of footer
       	
        echo "</div>";// end the css of the content
        echo "</div>";// end the container of the content
?>        
</body>
</html>

