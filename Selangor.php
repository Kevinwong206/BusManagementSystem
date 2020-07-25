<html lang="en">

<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Bus2u Selangor Bus Ticket</title>
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
            echo "<h3>Selangor</h3>";
            echo "<p>&nbsp;</p>";// space a line
            echo "</div>";
            echo "<hr>"; // draw a line 
            echo "<p>&nbsp;</p>";
            echo "<p>&nbsp;</p>";
    
                // Create a table of 2 rows with 3 columns for the content
                echo "<div id='stateTable'>";
    
                    echo"<table cellspacing='0'border='0'>";
                        echo"<tr>";
                            echo"<td colspan='3'>Bukit Bintang</td>"; //Make 3 column span
                        echo"</tr>";
						
						echo "<form action='ViewTicket.php' method='post'>"; 
                        echo"<tr>";
                            echo"<td><img src='images/images_selangor/images_BukitBintang/JalanBukitBintang.jpg' alt='Bukit Bintang Road' height='300' width='300'></td>";
                            echo"<td><img src='images/images_selangor/images_BukitBintang/KL_Tower.jpg' alt='KL Tower' height='300' width='300'></td>";
                            echo"<td><img src='images/images_selangor/images_BukitBintang/klcc.jpg' alt='KLCC' height='300' width='400'></td>";
                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<td><img src='images/images_selangor/images_BukitBintang/pavillion.jpg' alt='Pavillion' height='300' width='300'></td>";
                            echo"<td><img src='images/images_selangor/images_BukitBintang/AlorStreet.jpg' alt='Alor Street' height='300' width='300'></td>";
                            echo"<td><img src='images/images_selangor/images_BukitBintang/BukitBintang_map.jpg' alt='Bukit Bintang Map' height='300' width='400'></td>";
                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<input type='hidden' method='post' name='location' value='Bukit Bintang - Selangor' >";
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
                            echo"<td colspan='3'>Bandar Sunway</td>"; //Make 3 column span
                        echo"</tr>";
						
						echo "<form action='ViewTicket.php' method='post'>"; 
                        echo"<tr>";
                            echo"<td><img src='images/images_selangor/images_BandarSunway/SunwayPyramid.jpg' alt='Sunway Pyramid' height='300' width='300'></td>";
                            echo"<td><img src='images/images_selangor/images_BandarSunway/PutraMall.jpg' alt='Putra Mall' height='300' width='300'></td>";
                            echo"<td><img src='images/images_selangor/images_BandarSunway/lagoon1.jpg' alt='Sunway Lagoon' height='300' width='400'></td>";
                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<td><img src='images/images_selangor/images_BandarSunway/lagoon2.jpg' alt='Sunway Lagoon' height='300' width='300'></td>";
                            echo"<td><img src='images/images_selangor/images_BandarSunway/ResortSuites.jpg' alt='Resort Suites' height='300' width='300'></td>";
                            echo"<td><img src='images/images_selangor/images_BandarSunway/BandarSunwayMap.jpg' alt='Bandar Sunway Map' height='300' width='400'></td>";
                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<input type='hidden' method='post' name='location' value='Bandar Sunway - Selangor' >";
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
                            echo"<td colspan='3'>Sepang</td>"; //Make 3 column span
                        echo"</tr>";
						
						echo "<form action='ViewTicket.php' method='post'>"; 
                        echo"<tr>";
                            echo"<td><img src='images/images_selangor/images_Sepang/automobile_museum.jpg' alt='Automobile Museum' height='300' width='300'></td>";
                            echo"<td><img src='images/images_selangor/images_Sepang/PayaIndah.jpg' alt='Paya Indah Wetlands' height='300' width='300'></td>";
                            echo"<td><img src='images/images_selangor/images_Sepang/KLIA2.jpg' alt='KLIA 2' height='300' width='400'></td>";

                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<td><img src='images/images_selangor/images_Sepang/Sepang_Circuit.jpg' alt='Sepang International Circuit' height='300' width='300'></td>";
                            echo"<td><img src='images/images_selangor/images_Sepang/BukitMelati.jpg' alt='Bukit Melati Nilai' height='300' width='300'></td>";
                            echo"<td><img src='images/images_selangor/images_Sepang/Sepang_Map.jpg' alt='Sepang Map' height='300' width='400'></td>";
                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<input type='hidden' method='post' name='location' value='Sepang - Selangor' >";
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
                            echo"<td colspan='3'>Bandar Utama</td>"; //Make 3 column span
                        echo"</tr>";
						
						echo "<form action='ViewTicket.php' method='post'>"; 
                        echo"<tr>";
                            echo"<td><img src='images/images_selangor/images_BandarUtama/utama1.jpg' alt='One Utama Mall interior' height='300' width='300'></td>";
                            echo"<td colspan='2'><img src='images/images_selangor/images_BandarUtama/utama2.jpg' alt='One Utama Mall' height='300' width='700'></td>"; //Make 2 column span

                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<td><img src='images/images_selangor/images_BandarUtama/golf.jpg' alt='Golf Course' height='300' width='300'></td>";
                            echo"<td><img src='images/images_selangor/images_BandarUtama/port.JPG' alt='ThePort.my ' height='300' width='300'></td>";
                            echo"<td><img src='images/images_selangor/images_BandarUtama/BandarUtama_map.jpg' alt='Bandar Utama Map' height='300' width='400'></td>";
                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<input type='hidden' method='post' name='location' value='Bandar Utama - Selangor' >";
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
                            echo"<td colspan='3'>Klang</td>"; //Make 3 column span
                        echo"</tr>";
						
						echo "<form action='ViewTicket.php' method='post'>"; 
                        echo"<tr>";
                            echo"<td><img src='images/images_selangor/images_Klang/iCity1.jpg' alt='iCity 1' height='300' width='300'></td>";
                            echo"<td colspan='2'><img src='images/images_selangor/images_Klang/Laman_Seni.jpg' alt='Laman Seni' height='300' width='700'></td>"; //Make 2 column span

                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<td><img src='images/images_selangor/images_Klang/iCity2.jpg' alt='iCity 2' height='300' width='300'></td>";
                            echo"<td><img src='images/images_selangor/images_Klang/istana_alam_shah.jpg' alt='Istana Alam Shah' height='300' width='300'></td>";
                            echo"<td><img src='images/images_selangor/images_Klang/Klang_map.jpg' alt='Klang Map' height='300' width='400'></td>";
                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<input type='hidden' method='post' name='location' value='Klang - Selangor' >";
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
                            echo"<td colspan='3'>Cheras</td>"; //Make 3 column span
                        echo"</tr>";
						
						echo "<form action='ViewTicket.php' method='post'>"; 
                        echo"<tr>";
                            echo"<td><img src='images/images_selangor/images_Cheras/Silka.jpg' alt='Cheras Central' height='300' width='300'></td>";
                            echo"<td colspan='2'><img src='images/images_selangor/images_Cheras/IKEA.jpg' alt='IKEA' height='300' width='700'></td>"; //Make 2 column span

                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<td><img src='images/images_selangor/images_Cheras/ikon.jpg' alt='iKon Cheras Mall' height='300' width='300'></td>";
                            echo"<td><img src='images/images_selangor/images_Cheras/leisure_mall.jpg' alt='Cheras Leisure Mall' height='300' width='300'></td>";
                            echo"<td><img src='images/images_selangor/images_Cheras/cheras_map.jpg' alt='Cheras Map' height='300' width='400'></td>";
                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<input type='hidden' method='post' name='location' value='Klang - Selangor' >";
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
