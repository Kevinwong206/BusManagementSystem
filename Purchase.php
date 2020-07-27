<html lang="en">

<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Purchase History</title>
<meta charset=utf-8>
</head>

<body a link="black" vlink="black">
    
        <?php 
       include('Header.php');
        
       echo "<div id='content'>";
    
       echo "<div id='pageTitle'>";
       echo "<p>&nbsp;</p>";
       echo "<h3>Purchase History</h3>"; // print title of page
       echo "<p>&nbsp;</p>";
       echo "</div>";
       echo "<hr>";
       echo "<p>&nbsp;</p>";
       echo "<p>&nbsp;</p>"; 
        
       if($connect = mysqli_connect("localhost","root","")){ // connect to databse  
            $db = mysqli_select_db($connect,"bus_booking"); // select database
            $sql = 'SELECT purchase_history.*, bus.*, ticket.* FROM purchase_history JOIN bus ON purchase_history.bus_id = bus.bus_id JOIN ticket ON purchase_history.ticket_id = ticket.ticket_id';
           //combines the ticketIid of ticket table and busid of bus table to the purchase_history table
           
            $result = mysqli_query($connect,$sql);
            
            echo "<div id='tickettable'>";
            echo "<form action='AddRecord.php' method='post'>";
            //use while loop to access the content of the table
            echo"<table cellspacing='0'border='0'>";
                echo"<tr>";
                        echo"<th>Bus Details<br/>
                        (Car Plate,Driver)</th>";
                        echo"<th>Name</th>";
                        echo"<th>From</th>";
                        echo"<th>To</th>";
                        echo"<th>Date</th>";
                        echo"<th>Max Baggage Weight</th>";
                        echo"<th colspan='2'>Actions</th>";
                echo"</tr>"; 
           
            //use while loop to print the data of the purchase_history table 
            while ($row = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td>
                    <p1><?php echo $row ['carplate'];?></p1>
                    <p1><?php echo $row ['driver_name'];?></p1>
                    <p><?php echo $row ['company'];?></p>
                    </td>  
                    
                    <td style='width:200px;'><p><?php echo $row ['ticket_name'];?></p></td>
                    
                    <td style='width:170px;'><p1><?php echo $row ['departure_city'];?></p1>
                    <p><?php echo $row ['leave_time'];?></p></td>
                    
                    <td style='width:200px;'><p1><?php echo $row ['destination_city'];?></p1>
                    <p><?php echo $row ['arrive_time'];?></p></td>
                    
                    <td style='width:170px;'><p><?php echo $row ['date'];?></p></td>
                    
                    <td style='width:170px;'><p><?php echo $row ['baggage_weight'];?></p></td>
                                       
                    <td style='width:100px;'><a href="PurchaseUpdate.php?purchaseid=<?php echo $row['purchase_id'] ?>">Edit</a></td>
                    
                    <td style='width:100px;'><a href="PurchaseDelete.php?id=<?php echo $row['purchase_id'] ?>">Delete</a></td>
                <?php
                echo"</tr>";
            }
        echo"</table>";
        //FOOTER
		include ('Footer.php'); 
       }
        echo "</div>";// end the css of the content
        echo "</div>";// end the container of the content
?>
</body>
</html>
