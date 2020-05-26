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
            echo "<h3>Melaka</h3>";
            echo "<p>&nbsp;</p>";// space a line
            echo "</div>";
            echo "<hr>"; // draw a line 
            echo "<p>&nbsp;</p>";
            echo "<p>&nbsp;</p>";
    
                // Create a table of 2 rows with 3 columns for the content
                echo "<div id='stateTable'>";
    
                    echo"<table cellspacing='0'border='0'>";
                        echo"<tr>";
                            echo"<td colspan='3'>Alor Gajah</td>"; //Make 3 column span
                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<td><img src='images/images_melaka/images_AlorGajah/alorgajah1.JPG' alt='Dataran Keris Alor Gajah' height='300' width='300'></td>";
                            echo"<td colspan='2'><img src='images/images_Melaka/images_AlorGajah/alorgajah2.JPG' alt='A'Famosa Outlet' height='300' width='700'></td>"; //make 2 column span
                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<td><img src='images/images_melaka/images_AlorGajah/alorgajah3.JPG' alt='A'Famosa Brands Outlet' height='300' width='300'></td>";
                            echo"<td><img src='images/images_melaka/images_AlorGajah/alorgajah4.JPG' alt='Machap Street' height='300' width='300'></td>";
                            echo"<td><img src='images/images_melaka/images_AlorGajah/AlorGajahMap.PNG' alt='Alor Gajah Map' height='300' width='400'></td>";
                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<td colspan='3'><a href='Home.php'><p><button>View Ticket</button></a></p>"; //Make 3 column span
                        echo"</tr>";
                    echo"</table>"; 
                 
                    echo "<p>&nbsp;</p>"; //space line to make it organise
                    echo "<p>&nbsp;</p>";
                    echo "<p>&nbsp;</p>";
                    echo "<p>&nbsp;</p>";
                    
                    // Create a table of 2 rows with 3 columns for the content
                    echo"<table cellspacing='0'border='0'>";
                        echo"<tr>";
                            echo"<td colspan='3'>Ayeh Keroh</td>"; //Make 3 column span
                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<td><img src='images/images_melaka/images_AyerKeroh/ayehkeroh1.JPG' alt='Malacca Zoo' height='300' width='300'></td>";
                            echo"<td><img src='images/images_melaka/images_AyerKeroh/ayehkeroh2.JPG' alt='Malacca Wonderland Theme Park & Resort' height='300' width='300'></td>";
                            echo"<td><img src='images/images_melaka/images_AyerKeroh/ayehkeroh3.JPG' alt='Malacca Botanical Garden' height='300' width='400'></td>";
                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<td><img src='images/images_melaka/images_AyerKeroh/ayehkeroh4.JPG' alt='Malacca Planetarium' height='300' width='300'></td>";
                            echo"<td><img src='images/images_melaka/images_AyerKeroh/ayehkeroh5.JPG' alt='Malacca Taman Rama-Rama' height='300' width='300'></td>";
                            echo"<td><img src='images/images_melaka/images_AyerKeroh/AyehKerohMap.PNG' alt='Ayeh Keroh Map' height='300' width='400'></td>";
                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<td colspan='3'><a href='Home.php'><p><button>View Ticket</button></a></p>"; //Make 3 column span
                        echo"</tr>"; 
                    echo"</table>"; 
                 
                    echo "<p>&nbsp;</p>"; //space line to make it organise
                    echo "<p>&nbsp;</p>";
                    echo "<p>&nbsp;</p>"; 
                    echo "<p>&nbsp;</p>";
                    
                    // Create a table of 2 rows with 3 columns for the content
                    echo"<table cellspacing='0'border='0'>";
                        echo"<tr>";
                            echo"<td colspan='3'>Melaka Raya</td>"; //Make 3 column span
                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<td><img src='images/images_melaka/images_MelakaRaya/melakaraya1.JPG' alt='The Stadthuys of Malacca' height='300' width='300'></td>";
                            echo"<td colspan='2'><img src='images/images_melaka/images_MelakaRaya/melakaraya2.JPG' alt='Mahkota Parade' height='300' width='700'></td>";//Make 2 column span

                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<td><img src='images/images_melaka/images_MelakaRaya/melakaraya3.JPG' alt='Kota A Famosa' height='250' width='300'></td>";
                            echo"<td><img src='images/images_melaka/images_MelakaRaya/melakaraya4.JPG' alt='Jonker Street' height='250' width='300'></td>";
                            echo"<td><img src='images/images_melaka/images_MelakaRaya/MelakaRayaMap.PNG' alt='Melaka Raya Map' height='250' width='400'></td>";
                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<td colspan='3'><a href='Home.php'><p><button>View Ticket</button></a></p>"; //Make 3 column span
                        echo"</tr>";
                    echo"</table>";                   
                 
                    echo "<p>&nbsp;</p>"; //space line to make it organise
                    echo "<p>&nbsp;</p>";
                    echo "<p>&nbsp;</p>";
                    echo "<p>&nbsp;</p>";
                    
                    // Create a table of 2 rows with 3 columns for the content
                    echo"<table cellspacing='0'border='0'>";
                        echo"<tr>";
                            echo"<td colspan='3'>Jasin</td>"; //Make 3 column span
                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<td><img src='images/images_melaka/images_Jasin/jasin1.JPG' alt='Jasin Waterfall' height='300' width='300'></td>";
                            echo"<td colspan='2'><img src='images/images_melaka/images_Jasin/jasin2.JPG' alt='Jasin Water Park' height='300' width='700'></td>"; //Make 2 column span

                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<td><img src='images/images_melaka/images_Jasin/jasin3.JPG' alt='Pulau Besar' height='300' width='300'></td>";
                            echo"<td><img src='images/images_melaka/images_Jasin/jasin4.JPG' alt='Masjid Al-Ghaffar Daerah Jasin' height='300' width='300'></td>";
                            echo"<td><img src='images/images_melaka/images_Jasin/JasinMap.PNG' alt='Jasin Map' height='300' width='400'></td>";
                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<td colspan='3'><a href='Home.php'><p><button>View Ticket</button></a></p>"; //Make 3 column span
                        echo"</tr>";
                    echo"</table>"; 
                 
                    echo "<p>&nbsp;</p>"; //space line to make it organise
                    echo "<p>&nbsp;</p>";
                    echo "<p>&nbsp;</p>";
                    echo "<p>&nbsp;</p>";
                    echo"</table>"; 
                    
                    echo "<p>&nbsp;</p>"; //space line to make it organise
                    echo "<p>&nbsp;</p>";
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
