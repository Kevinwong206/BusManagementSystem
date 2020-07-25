<html lang="en">

<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Bus2u Johor Bus Ticket</title>
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
	
            echo "<div id='stateTitle'>";
            echo "<p>&nbsp;</p>";// space a line
            echo "<h3>Johor</h3>";
            echo "<p>&nbsp;</p>";// space a line
            echo "</div>";
            echo "<hr>"; // draw a line 
            echo "<p>&nbsp;</p>";
            echo "<p>&nbsp;</p>";
    
                // Create a table of 2 rows with 3 columns for the content
                echo "<div id='stateTable'>";
    
                    echo"<table cellspacing='0'border='0'>";
                        echo"<tr>";
                            echo"<td colspan='3'>Johor Bahru</td>"; //Make 3 column span
                        echo"</tr>";
						
						echo "<form action='ViewTicket.php' method='post'>";
                        echo"<tr>";
                            echo"<td><img src='images/images_johor/images_JohorBahru/JohorZoo.jpg' alt='Johor Zoo' height='300' width='300'></td>";
                            echo"<td><img src='images/images_johor/images_JohorBahru/IstanaBesar.jpg' alt='Istana Besar' height='300' width='300'></td>";
                            echo"<td><img src='images/images_johor/images_JohorBahru/mosque.jpg' alt='Sultan Abu Bakar Mosque' height='300' width='400'></td>";
                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<td><img src='images/images_johor/images_JohorBahru/legoland.jpg' alt='Legoland' height='300' width='300'></td>";
                            echo"<td><img src='images/images_johor/images_JohorBahru/GlassTemple.jpg' alt=' Arulmigu Sri Rajakaliamman Glass Temple' height='300' width='300'></td>";
                            echo"<td><img src='images/images_johor/images_JohorBahru/DangaBay.jpg' alt='Danga Bay' height='300' width='400'></td>";
                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<input type='hidden' method='post' name='location' value='Johor Bahru - Johor' >";
                            echo"<td colspan='3'><p><button>View Ticket</button></a></p>"; //Make 3 column span
                        echo"</tr>";
                    echo"</table>"; 
					echo"</form>";
                 
                    echo "<p>&nbsp;</p>"; //space line to make it organise
                    echo "<p>&nbsp;</p>";
                    echo "<p>&nbsp;</p>";
                    echo "<p>&nbsp;</p>";
                    
                    // Create a table of 2 rows with 3 columns for the content
                    echo"<table cellspacing='0'border='0'>";
                        echo"<tr>";
                            echo"<td colspan='3'>Muar</td>"; //Make 3 column span
                        echo"</tr>";
    
						echo "<form action='ViewTicket.php' method='post'>";
                        echo"<tr>";
                            echo"<td><img src='images/images_johor/images_Muar/JurassicGarden.jpg' alt='Donhu Jurassic Garden' height='300' width='300'></td>";
                            echo"<td><img src='images/images_johor/images_Muar/CulturalWalk.jpg' alt='Muar Cultural Walk' height='300' width='300'></td>";
                            echo"<td><img src='images/images_johor/images_Muar/TanjungEmas.jpg' alt='Dataran Tanjung Emas' height='300' width='400'></td>";
                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<td><img src='images/images_johor/images_Muar/StreetMural.jpg' alt='The Great Mural Of Muar' height='300' width='300'></td>";
                            echo"<td><img src='images/images_johor/images_Muar/MuarClockTower.jpg' alt='Muar Clock Tower' height='300' width='300'></td>";
                            echo"<td><img src='images/images_johor/images_Muar/NamThienTemple.jpg' alt='Nam Thien Temple' height='300' width='400'></td>";
                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<input type='hidden' method='post' name='location' value='Muar - Johor' >";
                            echo"<td colspan='3'><p><button>View Ticket</button></a></p>"; //Make 3 column span
                        echo"</tr>"; 
                    echo"</table>"; 
					echo"</form>";
                 
                    echo "<p>&nbsp;</p>"; //space line to make it organise
                    echo "<p>&nbsp;</p>";
                    echo "<p>&nbsp;</p>"; 
                    echo "<p>&nbsp;</p>";
                    
                    // Create a table of 2 rows with 3 columns for the content
                    echo"<table cellspacing='0'border='0'>";
                        echo"<tr>";
                            echo"<td colspan='3'>Mersing</td>"; //Make 3 column span
                        echo"</tr>";
						
						echo "<form action='ViewTicket.php' method='post'>";
                        echo"<tr>";
                            echo"<td><img src='images/images_johor/images_Mersing/RawaIsland.jpg' alt='Rawa Island' height='300' width='300'></td>";
                            echo"<td><img src='images/images_johor/images_Mersing/SibuIsland.jpg' alt='Sibu Island' height='300' width='300'></td>";
                            echo"<td><img src='images/images_johor/images_Mersing/TiomanDiveCentre.jpg' alt='Tioman Dive Centre' height='300' width='400'></td>";

                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<td><img src='images/images_johor/images_Mersing/GunungKajang.jpg' alt='Gunung Kajang' height='300' width='300'></td>";
                            echo"<td><img src='images/images_johor/images_Mersing/MersingEsplanade.jpg' alt='Mersing Esplanade' height='300' width='300'></td>";
                            echo"<td><img src='images/images_johor/images_Mersing/AliWaterfall.jpg' alt='Ali's Waterfall' height='300' width='400'></td>";
                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<input type='hidden' method='post' name='location' value='Mersing - Johor' >";
                            echo"<td colspan='3'><p><button>View Ticket</button></a></p>"; //Make 3 column span
                        echo"</tr>";
                    echo"</table>";  
					echo"</form>";					
                 
                    echo "<p>&nbsp;</p>"; //space line to make it organise
                    echo "<p>&nbsp;</p>";
                    echo "<p>&nbsp;</p>";
                    echo "<p>&nbsp;</p>";
                    
                    // Create a table of 2 rows with 3 columns for the content
                    echo"<table cellspacing='0'border='0'>";
                        echo"<tr>";
                            echo"<td colspan='3'>Pontian District</td>"; //Make 3 column span
                        echo"</tr>";
						
						echo "<form action='ViewTicket.php' method='post'>";
                        echo"<tr>";
                            echo"<td><img src='images/images_johor/images_PontianDistrict/KukupNationalPark.jpg' alt='Kukup National Park' height='300' width='300'></td>";
                            echo"<td colspan='2'><img src='images/images_johor/images_PontianDistrict/KukupResort.jpg' alt='Kukup Resort' height='300' width='700'></td>"; //Make 2 column span

                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<td><img src='images/images_johor/images_PontianDistrict/TamanNegaraJohor.jpg' alt='Taman Negara Johor' height='300' width='300'></td>";
                            echo"<td><img src='images/images_johor/images_PontianDistrict/BugisMuseum.jpg' alt='Bugis Museum' height='300' width='300'></td>";
                            echo"<td><img src='images/images_johor/images_PontianDistrict/ForestCity.jpg' alt='Forest City' height='300' width='400'></td>";
                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<input type='hidden' method='post' name='location' value='Pontian District - Johor' >";
                            echo"<td colspan='3'><p><button>View Ticket</button></a></p>"; //Make 3 column span
                        echo"</tr>";
                    echo"</table>"; 
					echo"</form>";
                 
                    echo "<p>&nbsp;</p>"; //space line to make it organise
                    echo "<p>&nbsp;</p>";
                    echo "<p>&nbsp;</p>";
                    echo "<p>&nbsp;</p>";
 
                    // Create a table of 2 rows with 3 columns for the content
                    echo"<table cellspacing='0'border='0'>";
                        echo"<tr>";
                            echo"<td colspan='3'>Pekan Nanas</td>"; //Make 3 column span
                        echo"</tr>";
						
						echo "<form action='ViewTicket.php' method='post'>";
                        echo"<tr>";
                            echo"<td><img src='images/images_johor/images_PekanNanas/HelloKittyTown.jpg' alt='Hello Kitty Town' height='300' width='300'></td>";
                            echo"<td colspan='2'><img src='images/images_johor/images_PekanNanas/LittleBigClub.jpg' alt='The Little Big Club' height='300' width='700'></td>"; //Make 2 column span

                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<td><img src='images/images_johor/images_PekanNanas/MountPulai.jpg' alt='Mount Pulai' height='300' width='300'></td>";
                            echo"<td><img src='images/images_johor/images_PekanNanas/ThomasTown.jpg' alt='Thomas Town' height='300' width='300'></td>";
                            echo"<td><img src='images/images_johor/images_PekanNanas/SeaLife.jpg' alt='Sea Life Centre' height='300' width='400'></td>";
                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<input type='hidden' method='post' name='location' value='Pekan Nanas - Johor' >";
                            echo"<td colspan='3'><p><button>View Ticket</button></a></p>"; //Make 3 column span
                        echo"</tr>";
                    echo"</table>"; 
					echo"</form>";
                    
                    echo "<p>&nbsp;</p>"; //space line to make it organise
                    echo "<p>&nbsp;</p>";
                    echo "<p>&nbsp;</p>";
                    echo "<p>&nbsp;</p>";
                    
                    // Create a table of 2 rows with 3 columns for the content
                    echo"<table cellspacing='0'border='0'>";
                        echo"<tr>";
                            echo"<td colspan='3'>Kluang</td>"; //Make 3 column span
                        echo"</tr>";
						
						echo "<form action='ViewTicket.php' method='post'>";
                        echo"<tr>";
                            echo"<td><img src='images/images_johor/images_Kluang/GunungLambak.jpg' alt='Gunung Lambak' height='300' width='300'></td>";
                            echo"<td colspan='2'><img src='images/images_johor/images_Kluang/GunungLambakWaterPark.jpg' alt='Gunung Lambak Water Park' height='300' width='700'></td>"; //Make 2 column span

                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<td><img src='images/images_johor/images_Kluang/KluangStreetArt.jpg' alt='Kluang Street Art' height='300' width='300'></td>";
                            echo"<td><img src='images/images_johor/images_Kluang/TropicalVillage.jpg' alt='Tropical Village' height='300' width='300'></td>";
                            echo"<td><img src='images/images_johor/images_Kluang/MountBelumut.jpg' alt='Mount Belumut' height='300' width='400'></td>";
                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<input type='hidden' method='post' name='location' value='Kluang - Johor' >";
                            echo"<td colspan='3'><p><button>View Ticket</button></a></p>"; //Make 3 column span
                        echo"</tr>";
                    echo"</table>"; 
					echo"</form>";
                 
                    echo "<p>&nbsp;</p>"; //space line to make it organise
                    echo "<p>&nbsp;</p>";
                    echo "<p>&nbsp;</p>";
    
                echo"</div>";// end the css of the stateTable
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
