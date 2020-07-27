    <html lang="en">
    <head>
    <title>Sign In Error</title>
    </head>
    <body>
    <?php
    include ('Header.php');
    echo "<form action='PurchaseUpdate.php' method='post'>"; 
    echo "<div id='content'>";
        
    echo "<div id='pageTitle'>";
    echo "<p>&nbsp;</p>";
    echo "<h3>BUS2U Tickets</h3>"; // title of the page
    echo "<p>&nbsp;</p>";
    echo "</div>";
    echo "<hr>";
    echo "<p>&nbsp;</p>";
    echo "<p>&nbsp;</p>";    
    
    //initialise varibale
    $name =$_POST['name'];
    $fromstate =$_POST['fromstate'];
    $tostate =$_POST['tostate'];
    $date =$_POST['date'];
    $id =$_POST['id'];
    $purchaseid =$_POST['purchaseid'];
            
            if($connect = mysqli_connect("localhost","root","")){ //connect to a database           
                
            $db = mysqli_select_db($connect,"bus_booking"); // select the database 
                
            $query = "UPDATE ticket SET ticket_name='$name',departure_city='$fromstate',destination_city='$tostate',date='$date' WHERE ticket_id=$id"; //update the empty columns of ticket tables with data based on ticket_id
                
            $query2 = "UPDATE purchase_history SET ticket_id = '$id',bus_id='$id' WHERE purchase_id = $purchaseid";

            $query_run = mysqli_query($connect,$query); // runs the update command
            $query_run = mysqli_query($connect,$query2); // runs the insert command

            //If update succesful
            if($query_run){
                echo "<div id='thankyou'>";
                echo "<p>&nbsp;</p>";
                echo "<h3>Your data was successfully updated!</h3>";
                echo "<p>Thank you for using Bus2U! </p>";
                echo "<p>&nbsp;</p>";
                echo "</div>";
                echo "<hr>"; 
                echo "<p>&nbsp;</p>";
                echo "<p>&nbsp;</p>";  
            }

            //If update unsuccesful
            else{
                echo "<p id='error'>Your data was not updated<br>".mysqli_error($connect);
            } 
                mysqli_close($connect);//close connection of database
            }
    echo "<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>";
    include ('Footer.php'); 
    ?>
</body>
</html>
