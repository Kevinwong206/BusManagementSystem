<html lang="en">

<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Bus2u Penang Bus Ticket</title>
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
            echo "<h3>Penang</h3>";
            echo "<p>&nbsp;</p>";// space a line
            echo "</div>";
            echo "<hr>"; // draw a line 
            echo "<p>&nbsp;</p>";
            echo "<p>&nbsp;</p>";
    
                // Create a table of 2 rows with 3 columns for the content
                echo "<div id='stateTable'>";
    
                    echo"<table cellspacing='0'border='0'>";
                        echo"<tr>";
                            echo"<td colspan='3'>Georgetown</td>"; //Make 3 column span
                        echo"</tr>";
                    
                    echo "<form action='ViewTicket.php' method='post'>"; 
                        echo"<tr>";
                            echo"<td><img src='images/images_penang/images_Georgetown/george2.PNG' alt='Georgetown Road' height='300' width='300'></td>";
                            echo"<td><img src='images/images_penang/images_Georgetown/george1.JPG' alt='Kek Lok Si' height='300' width='300'></td>";
                            echo"<td><img src='images/images_penang/images_Georgetown/george3.JPG' alt='Little India' height='300' width='400'></td>";
                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<td><img src='images/images_penang/images_Georgetown/george4.JPG' alt='Street Art' height='300' width='300'></td>";
                            echo"<td><img src='images/images_penang/images_Georgetown/george5.JPG' alt='Komtar' height='300' width='300'></td>";
                            echo"<td><img src='images/images_penang/images_Georgetown/georgetownmap.PNG' alt='Georgetown Map' height='300' width='400'></td>";
                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<input type='hidden' method='post' name='location' value='Georgetown - Penang' >";
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
                            echo"<td colspan='3'>Bayan Lepas</td>"; //Make 3 column span
                        echo"</tr>";
    
                    echo "<form action='ViewTicket.php' method='post'>"; 
                        echo"<tr>";
                            echo"<td><img src='images/images_penang/images_BayanLepas/lepas1.JPG' alt='QueensbayMall' height='300' width='300'></td>";
                            echo"<td><img src='images/images_penang/images_BayanLepas/lepas2.JPG' alt='Super Tanker' height='300' width='300'></td>";
                            echo"<td><img src='images/images_penang/images_BayanLepas/lepas3.PNG' alt='Industrial Zone' height='300' width='400'></td>";
                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<td><img src='images/images_penang/images_BayanLepas/lepas4.JPG' alt='Airport' height='300' width='300'></td>";
                            echo"<td><img src='images/images_penang/images_BayanLepas/lepas5.JPG' alt='SPICE Arena' height='300' width='300'></td>";
                            echo"<td><img src='images/images_penang/images_BayanLepas/lepas.PNG' alt='Bayan Lepas Map' height='300' width='400'></td>";
                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<input type='hidden' method='post' name='location' value='Bayan Lepas - Penang' >";
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
                            echo"<td colspan='3'>Batu Ferringhi</td>"; //Make 3 column span
                        echo"</tr>";
						
						echo "<form action='ViewTicket.php' method='post'>"; 
                        echo"<tr>";
                            echo"<td><img src='images/images_penang/images_BatuFerringhi/beach.JPG' alt='Beach' height='300' width='300'></td>";
                            echo"<td><img src='images/images_penang/images_BatuFerringhi/beach1.JPG' alt='Beach Activities 1' height='300' width='300'></td>";
                            echo"<td><img src='images/images_penang/images_BatuFerringhi/beach4.JPG' alt='Night Market' height='300' width='400'></td>";

                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<td><img src='images/images_penang/images_BatuFerringhi/beach2.JPG' alt='Beach Activities 2' height='300' width='300'></td>";
                            echo"<td><img src='images/images_penang/images_BatuFerringhi/beach3.JPG' alt='Beach Activities 3' height='300' width='300'></td>";
                            echo"<td><img src='images/images_penang/images_BatuFerringhi/batu.PNG' alt='Batu Ferringhi Map' height='300' width='400'></td>";
                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<input type='hidden' method='post' name='location' value='Batu Ferringhi - Penang' >";
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
                            echo"<td colspan='3'>Tanjung Tokong</td>"; //Make 3 column span
                        echo"</tr>";
						
						echo "<form action='ViewTicket.php' method='post'>"; 
                        echo"<tr>";
                            echo"<td><img src='images/images_penang/images_TanjongTokong/tokong1.JPG' alt='Straits Quay' height='300' width='300'></td>";
                            echo"<td colspan='2'><img src='images/images_penang/images_TanjongTokong/tokong2.JPG' alt='Avatar Secret Garden' height='300' width='700'></td>"; //Make 2 column span

                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<td><img src='images/images_penang/images_TanjongTokong/tokong3.JPG' alt='Gurney Drive Hawker Center' height='300' width='300'></td>";
                            echo"<td><img src='images/images_penang/images_TanjongTokong/tokong4.JPG' alt='Gurney Paragon' height='300' width='300'></td>";
                            echo"<td><img src='images/images_penang/images_TanjongTokong/tokong.PNG' alt='Tanjung Tokong Map' height='300' width='400'></td>";
                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<input type='hidden' method='post' name='location' value='Tanjung Tokong - Penang' >";
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
                            echo"<td colspan='3'>Teluk Bahang</td>"; //Make 3 column span
                        echo"</tr>";
    
						echo "<form action='ViewTicket.php' method='post'>"; 
                        echo"<tr>";
                            echo"<td><img src='images/images_penang/images_TelukBahang/teluk1.JPG' alt='Escape' height='300' width='300'></td>";
                            echo"<td colspan='2'><img src='images/images_penang/images_TelukBahang/teluk2.JPG' alt='Taman Rimba' height='300' width='700'></td>"; //Make 2 column span

                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<td><img src='images/images_penang/images_TelukBahang/teluk3.JPG' alt='Penang National Park' height='300' width='300'></td>";
                            echo"<td><img src='images/images_penang/images_TelukBahang/teluk4.JPG' alt='Entopia Butterly Farm' height='300' width='300'></td>";
                            echo"<td><img src='images/images_penang/images_TelukBahang/telukmap.PNG' alt='Teluk Bahang Map' height='300' width='400'></td>";
                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<input type='hidden' method='post' name='location' value='Teluk Bahang - Penang' >";
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
                            echo"<td colspan='3'>Bukit Mertajam</td>"; //Make 3 column span
                        echo"</tr>";
    
						echo "<form action='ViewTicket.php' method='post'>"; 
                        echo"<tr>";
                            echo"<td><img src='images/images_penang/images_BukitMertajam/bukit1.JPG' alt='Frog Hill' height='300' width='300'></td>";
                            echo"<td colspan='2'><img src='images/images_penang/images_BukitMertajam/bukit3.JPG' alt='Recreational Forest' height='300' width='700'></td>"; //Make 2 column span

                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<td><img src='images/images_penang/images_BukitMertajam/bukit2.JPG' alt='St Anne Church' height='300' width='300'></td>";
                            echo"<td><img src='images/images_penang/images_BukitMertajam/bukit4.JPG' alt='Food' height='300' width='300'></td>";
                            echo"<td><img src='images/images_penang/images_BukitMertajam/bukit.PNG' alt='Bukit Mertajam Map' height='300' width='400'></td>";
                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<input type='hidden' method='post' name='location' value='Bukit Mertajam - Penang' >";
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
