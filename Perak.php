<html lang="en">

<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Bus2u Perak Bus Ticket</title>
<meta charset=utf-8>
</head>

<body>
    
        <?php 
       include ('Header.php');
        
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
                        
						echo "<form action='ViewTicket.php' method='post'>"; 
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
                            echo"<input type='hidden' method='post' name='location' value='Teluk Intan - Perak' >";
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

                     //TAMBUN

                        echo"<tr>";
                            echo"<td colspan='3'>Tambun</td>"; //Make 3 column span
                        echo"</tr>";
                        
						echo "<form action='ViewTicket.php' method='post'>"; 
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
                            echo"<input type='hidden' method='post' name='location' value='Tambun - Perak' >";
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

                    //TAIPING

                        echo"<tr>";
                            echo"<td colspan='3'>Taiping</td>"; //Make 3 column span
                        echo"</tr>";
						
						echo "<form action='ViewTicket.php' method='post'>"; 
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
                            echo"<input type='hidden' method='post' name='location' value='Taiping - Perak' >";
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

                    //LUMUT

                        echo"<tr>";
                            echo"<td colspan='3'>Lumut</td>"; //Make 3 column span
                        echo"</tr>";
						
						echo "<form action='ViewTicket.php' method='post'>"; 
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
                            echo"<input type='hidden' method='post' name='location' value='Lumut - Perak' >";
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

                    //IPOH

                        echo"<tr>";
                            echo"<td colspan='3'>Ipoh</td>"; //Make 3 column span
                        echo"</tr>";
						
						echo "<form action='ViewTicket.php' method='post'>";
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
                            echo"<input type='hidden' method='post' name='location' value='Ipoh - Perak' >";
                            echo"<td colspan='3'><p><button>View Ticket</button></a></p>"; //Make 3 column span
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
						
						echo "<form action='ViewTicket.php' method='post'>";
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
                            echo"<input type='hidden' method='post' name='location' value='Gopeng - Perak' >";
                            echo"<td colspan='3'><p><button>View Ticket</button></a></p>"; //Make 3 column span
                        echo"</tr>";
                    echo"</table>"; 
					echo"</form>";
                 
                    echo "<p>&nbsp;</p>"; //space line to make it organise
                    echo "<p>&nbsp;</p>";
                    echo "<p>&nbsp;</p>";
    
                echo"</div>";// end the css of the stateTable
                include ('Footer.php');
		
        echo "</div>";// end the css of the content
        echo "</div>";// end the container of the content
?>
</body>
</html>
