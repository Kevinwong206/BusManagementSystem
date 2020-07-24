<?php
    if (isset($_POST['delete'])){ // if form submitted
?>
    <?php
        //include the header file
        include ('Header.php') 
    ?>
    <?php
        echo "<div id='content'>";

        //initialise variable
        $id = $_POST['id'];
        
            //if can connect to datebase
            if($connect = mysqli_connect("localhost","root","")){ // connect to database
                echo "<div id='action'>";
                //selecting database table
                $db = mysqli_select_db($connect,"bus_booking"); // select the database
        
                $query = "DELETE FROM purchase_history where purchase_id=$id"; // delete the content of purchase_history based on purchase_id

                $query_run = mysqli_query($connect,$query); // runs the delete command

                //If delete succesful 
                if($query_run){
                    echo "<div id='pageTitle'>";
                    echo "<p>&nbsp;</p>";
                    echo "<h3>Order Cancelled</h3>";
                    echo "<p>&nbsp;</p>";
                    echo "</div>";
                    echo "<hr>"; 
                    echo "<p>&nbsp;</p>";
                    echo "<p>&nbsp;</p>"; 
                }

                //If delete unsuccesful
                else{
                    echo "<p>&nbsp;</p><h1 id='error'>Data not Deleted</p><p>&nbsp;</p>"; 
                }
                //closes the database
                mysqli_close($connect); 
            }

                //If unable to connect to the MySQL
                else{
                    echo "<p id='error' >Could not connect to MySQL</p>";
                }	
            echo "</div>";
            include ('Footer.php');
            echo "</div>";// end the css for the table
            echo "</div>";// end the css for the content6      
    ?>

<?php
    }
    else { // if form not submitted 
?>
    <html lang="en">
    <head>
    <title>Cancel Order</title>
    <?php
        //include the header file
        include ('Header.php') ;
    ?>
    </head>
    <body>  
    <?php
            echo "<div id='content'>";
            $connect = mysqli_connect("localhost","root",""); // connect to the database
            $db = mysqli_select_db($connect,"bus_booking"); // select the database

            echo "<div id='pageTitle'>";
            echo "<p>&nbsp;</p>";
            echo "<h3>Purchase History</h3>"; // title of the page 
            echo "<p>&nbsp;</p>";
            echo "</div>";
            echo "<hr>";  
            echo "<p>&nbsp;</p>";
            echo "<p>&nbsp;</p>"; 
            echo "<div id='action'>";
        
            echo "<form action = 'PurchaseDelete.php' method = 'post'>";     
                    echo "<h1>Are you sure you want to delete this data?</h1>";
                    echo "<input type='hidden' name='id' value=".$_GET['id'].">";
                    echo "<br/><br/><button type='submit' name='delete' id='button2'>Delete</button><br>";
            echo "<p>&nbsp;</p>"; 
            echo "</div>";
            include ('Footer.php');
            echo "</div>"; // end css for content
            echo "</div>"; // end css for addProduct-error
    ?>
    </body>
    </html>
<?php
    }
?>






