<html lang="en">

<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Bus2u Perak Bus Ticket</title>
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
            echo "<h3>Perak</h3>";
            echo "<p>&nbsp;</p>";// space a line
            echo "</div>";
            echo "<hr>"; // draw a line 
            echo "<p>&nbsp;</p>";
            echo "<p>&nbsp;</p>";
    
                // Create a table of 2 rows with 3 columns for the content
                echo "<div id='stateTable'>";

                //TELUK INTAN

                    echo"<table cellspacing='0'border='0'>";
                        echo"<tr>";
                            echo"<td colspan='3'>Teluk Intan </td>"; //Make 3 column span
                        echo"</tr>";
                        
                        echo"<tr>";
                            echo"<td><img src='images/images_perak/images_TelukIntan/Teluk1.jpg' alt='Teluk Intan Pagoda' height='300' width='300'></td>";
                            echo"<td><img src='images/images_perak/images_TelukIntan/Teluk2.jpg' alt='Teluk Intan Hotel' height='300' width='300'></td>";
                            echo"<td><img src='images/images_perak/images_TelukIntan/Teluk3.jpg' alt='Teluk Intan Bird View' height='300' width='400'></td>";
                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<td><img src='images/images_perak/images_TelukIntan/Teluk4.png' alt='Teluk Intan Library' height='300' width='300'></td>";
                            echo"<td><img src='images/images_perak/images_TelukIntan/Teluk5.jpeg' alt='Teluk Intan House' height='300' width='300'></td>";
                            echo"<td><img src='images/images_perak/images_TelukIntan/TelukIntanMap.png' alt='Teluk Intan Map' height='300' width='400'></td>";
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

                     //TAMBUN

                        echo"<tr>";
                            echo"<td colspan='3'>Tambun</td>"; //Make 3 column span
                        echo"</tr>";
                            
                        echo"<tr>";
                            echo"<td><img src='images/images_perak/images_Tambun/Tambun1.jpg' alt='Lost World Of Tambun' height='300' width='300'></td>";
                            echo"<td><img src='images/images_perak/images_Tambun/Tambun2.jpg' alt='Lost World Of Tambun Pool' height='300' width='300'></td>";
                            echo"<td><img src='images/images_perak/images_Tambun/Tambun5.jpeg' alt='Tambun Sauna' height='300' width='400'></td>";
                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<td><img src='images/images_perak/images_Tambun/Tambun4.jpg' alt='Tambun Kopitiam' height='300' width='300'></td>";
                            echo"<td><img src='images/images_perak/images_Tambun/Tambun3.jpg' alt='Lost World Of Tambun Night' height='300' width='300'></td>";
                            echo"<td><img src='images/images_perak/images_Tambun/TambunMap.png' alt='Tambun Map' height='300' width='400'></td>";
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

                    //TAIPING

                        echo"<tr>";
                            echo"<td colspan='3'>Taiping</td>"; //Make 3 column span
                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<td><img src='images/images_perak/images_Taiping/Taiping1.jpg' alt='Taiping River' height='300' width='300'></td>";
                            echo"<td><img src='images/images_perak/images_Taiping/Taiping2.jpg' alt='Taiping Phone Booth' height='300' width='300'></td>";
                            echo"<td><img src='images/images_perak/images_Taiping/Taiping4.jpg' alt='Taiping Garden' height='300' width='400'></td>";

                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<td><img src='images/images_perak/images_Taiping/Taiping3.jpg' alt='Taiping Sign' height='300' width='300'></td>";
                            echo"<td><img src='images/images_perak/images_Taiping/Taiping5.jpg' alt='Taiping Zoo' height='300' width='300'></td>";
                            echo"<td><img src='images/images_perak/images_Taiping/TaipingMap.png' alt='Taiping Map' height='300' width='400'></td>";
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

                    //LUMUT

                        echo"<tr>";
                            echo"<td colspan='3'>Lumut</td>"; //Make 3 column span
                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<td><img src='images/images_perak/images_Lumut/Lumut3.jpg' alt='Lumut Walkway' height='300' width='300'></td>";
                            echo"<td><img src='images/images_perak/images_Lumut/Lumut2.jpg' alt='Lumut Boat' height='300' width='300'></td>"; 
                            echo"<td><img src='images/images_perak/images_Lumut/Lumut1.jpg' alt='Lumut Beach' height='300' width='400'></td>"; //Make 3 column span
                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<td><img src='images/images_perak/images_Lumut/Lumut4.jpg' alt='Lumut Houseside' height='300' width='300'></td>";
                            echo"<td><img src='images/images_perak/images_Lumut/Lumut5.jpg' alt='Lumut House' height='300' width='300'></td>";
                            echo"<td><img src='images/images_perak/images_Lumut/LumutMap.png' alt='Lumut Map' height='300' width='400'></td>";
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

                    //IPOH

                        echo"<tr>";
                            echo"<td colspan='3'>Ipoh</td>"; //Make 3 column span
                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<td><img src='images/images_perak/images_Ipoh/Ipoh2.jpg' alt='Ipoh Street' height='300' width='300'></td>"; 
                            echo"<td colspan='2'><img src='images/images_perak/images_Ipoh/Ipoh1.jpg' alt='Ipoh Scenery' height='300' width='700'></td>"; //Make 2 Column Span
                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<td><img src='images/images_perak/images_Ipoh/Ipoh4.jpg' alt='Ipoh Place' height='300' width='300'></td>";
                            echo"<td><img src='images/images_perak/images_Ipoh/Ipoh5.jpg' alt='Ipoh River' height='300' width='300'></td>";
                            echo"<td><img src='images/images_perak/images_Ipoh/IpohMap.png' alt='Ipoh Map' height='300' width='400'></td>";
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

                    //Gopeng

                        echo"<tr>";
                            echo"<td colspan='3'>Gopeng</td>"; //Make 3 column span
                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<td><img src='images/images_perak/images_Gopeng/Gopeng1.jpg' alt='Gopeng Boat' height='300' width='300'></td>";
                            echo"<td><img src='images/images_perak/images_Gopeng/Gopeng2.jpg' alt='Gopeng Camp' height='300' width='300'></td>";
                            echo"<td><img src='images/images_perak/images_Gopeng/Gopeng3.jpg' alt='Gopeng Tea Valley' height='300' width='400'></td>";
                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<td><img src='images/images_perak/images_Gopeng/Gopeng4.jpg' alt='Gopeng Boat2' height='300' width='300'></td>";
                            echo"<td><img src='images/images_perak/images_Gopeng/Gopeng5.jpg' alt='Gopeng Street Art' height='300' width='300'></td>";
                            echo"<td><img src='images/images_perak/images_Gopeng/GopengMap.png' alt='Gopeng Map' height='300' width='400'></td>";
                        echo"</tr>";
    
                        echo"<tr>";
                            echo"<td colspan='3'><a href='Home.php'><p><button>View Ticket</button></a></p>"; //Make 3 column span
                        echo"</tr>";
                    echo"</table>"; 
                 
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
