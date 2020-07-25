<?php
    if (isset($_POST['submitted'])){ //If form is submitted 
?>
    <html>
    <head>
    <title>BUS2U Ticket Error</title>
    </head>
    <body>
    <?php
    include ('Header.php'); 
   
    echo "<div id='content'>";
    echo "<div id='pageTitle'>";
    echo "<p>&nbsp;</p>";
    echo "<h3>BUS2U Tickets</h3>"; // title of page
    echo "<p>&nbsp;</p>";
    echo "</div>";
    echo "<hr>";
    echo "<p>&nbsp;</p>";
    echo "<p>&nbsp;</p>";    
        
    echo "<div id='tickettable'>";
    //declare variables 
    $name =$_POST['name'];
    $fromstate =$_POST['fromstate'];
    $tostate =$_POST['tostate'];
    $date =$_POST['date'];
    $Ticketno =$_POST['Ticketno'];
    $dateRange='2020-07-17';
    $dateRange2='2020-07-31';
    $todayDate = $date;
    $required_start = strtotime($dateRange);
    $required_end = strtotime($dateRange2);
    $required_date= strtotime($todayDate);
        
    if(empty($name) || $fromstate=='novalue' || empty($tostate) || empty($date) || empty($Ticketno) || !ctype_alpha(str_replace(' ', '', $name)) || $required_date>$required_end || $required_date<$required_start || is_numeric($Ticketno) == 0){ // if any of the field is empty or contain error 
        
        echo "<form action='ViewTicket.php' method='post'>";
        include('ticketth.php');
        
            echo"<td><input type='name' READONLY name='name' id='input-box' method='post' placeholder='Full Name'><br/>";
                 if(empty($name)){ // if name is empty 
                    echo"<p id='error' >*Please fill up the name*</p>";
                 }
        
                 else if (!ctype_alpha(str_replace(' ', '', $name))) { //if name contain number, space is accepted 
                    echo "<p id='error' ><b>*Name must contain only alphabet*</b></font></p>";
                }
            echo"</td>";
        
            echo"<td>
            <input type='text' READONLY name='fromstate' id='input-box' method='post' placeholder='Departure City'><br/>";
            if($fromstate=='novalue'){ //if departure state is not selected
                echo"<p id='error' >*Please select Departure City*</p>";
            }
            echo"</td>";
        
            echo"<td>
            <select name='location' id='input-box' READONLY>
                    <option value='$tostate'>$tostate</option>
            </select>";
                if(empty($tostate)){ //if destination state is not selected 
                    echo"<p id='error' >*Please select Destination City*</p>";
                }
            echo"</td>";
        
            echo"<td><input type='date' id='input-box' min='2020-07-01' max='2020-07-31' method='post' name='date' READONLY >";
                if(empty($date)){ // if date is empty 
                    echo"<p id='error' >*Please fill up the date*</p>";
                }
        
                else{
                    
                    if ($required_date>$required_end || $required_date<$required_start) // if date selected is not within 2 weeks
                    {
                      echo"<p id='error' >*Can only prebook within 2 weeks*</p>";
                    }
                }
            echo"</td>";
            
            echo"<td><input type='number' id='input-box' name='Ticketno' READONLY placeholder='No Tickets'>";
                if(empty($Ticketno)){ // if ticket number is not filled
                    echo"<p id='error' >*Fill up number of tickets*</p>";
                }
        
                else if (is_numeric($Ticketno) == 0) { //if ticket number contains alphabet
                    echo "<p id='error' ><b>*Tickets Number must contain only numbers*</b></font></p>";
                }
            echo"</td>";
                
            echo"<td><button>Try Again</button></td>"; // this will direct her back to bus2u ticket page

    echo"</tr>";
    echo"</table>";
    echo "<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>";
    include ('Footer.php');
    echo"</form>";   
            
    }
    
    else{
        if($connect = mysqli_connect("localhost","root","")){ //connect to database          
            $db = mysqli_select_db($connect,"bus_booking"); // select the database
            $sql = 'SELECT bus.*, ticket.* FROM ticket JOIN bus ON bus.bus_id = ticket.bus_id ';
            //combine the bus table and ticket table by using bus id
            $result = mysqli_query($connect,$sql);
            
            echo "<div id='tickettable'>";
            echo "<form action='AddRecord.php' method='post'>";
            
            echo"<table cellspacing='0'border='0'>";
                echo"<tr>";
                        echo"<th>Bus Name</th>";
                        echo"<th>From</th>";
                        echo"<th>To</th>";
                        echo"<th>Max Baggage Weight</th>";
                        echo"<th>Price</th>";
                        echo"<th> </th>";
                echo"</tr>"; 
            
            //use while loop to access the content of the table
            while ($row = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><p><?php echo $row ['company'];?></p></td>  
                    <td style='width:200px;'><?php echo "<p1>$fromstate</p1><br/>";?><p>
                    <?php echo $row ['leave_time'];?></p></td>
                    <td style='width:250px;'><?php echo "<p1>$tostate</p1><br/>";?><p>
                    <?php echo $row ['arrive_time'];?></p></td>
                    <td style='width:200px;'><p><?php echo $row ['baggage_weight'];?></p></td>
                    <td style='width:170px;'><p><?php echo $row ['price'];?></p></td>                    
                    <td><button value="<?php echo $row['ticket_id'] ?>" name="id" method="post">Add To Cart</button></td>
                    <?php
                    echo"<input type='hidden' name ='name' value='$name' method='post'>";
                    echo"<input type='hidden' name ='fromstate' value='$fromstate' method='post'>";
                    echo"<input type='hidden' name ='tostate' value='$tostate' method='post'>";
                    echo"<input type='hidden' name ='date' value='$date' method='post'>";
                    ?>
                <?php
                echo"</tr>";
            }
            
        echo"</table>";
        echo"</div>";
        echo"</form>"; 
    }
    
    echo "<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>";
    include ('Footer.php');
    ?>
</body>
</html>
<?php
    }
    }
    else{ // If successful login
?>
    <html>
    <head>
    <title>BUS2U Ticket</title>
    </head>
    <body>
    <?php
    include ('Header.php');

    echo "<div id='content'>";
        
    echo "<div id='pageTitle'>";
    echo "<p>&nbsp;</p>";
    echo "<h3>BUS2U Tickets</h3>"; //title of page
    echo "<p>&nbsp;</p>";
    echo "</div>";
    echo "<hr>"; 
    echo "<p>&nbsp;</p>";
    echo "<p>&nbsp;</p>";    
        
    echo "<div id='tickettable'>";
    $location =$_POST['location'];
    
    echo "<form action='ViewTicket.php' method='post'>"; 
    include('ticketth.php');
        
        // input details for BUS2U ticket page 
        echo"<td><input type='name' name='name' id='input-box' method='post' ></td>";
        
        echo"<td>
        <select name='fromstate' id='input-box'>
                <option value='novalue'>Select Departure City</option>
                <option value='Selangor'>Selangor</option>
                <option value='Johor'>Johor</option>
                <option value='Melaka'>Melaka</option>
                <option value='Penang'>Penang</option>
                <option value='Perak'>Perak</option>
        </select>
        </td>";
        
        echo"<td>
            <select name='tostate' id='input-box'>
                    <option value='$location'>$location</option>
            </select>
            </td>";
        
        echo"<td><input type='date' id='input-box' min='2020-01-01' max='2020-12-31' method='post' name='date'></td>";
        //limit calender to show date only in this year
        echo"<td><input type='text' id='input-box' name='Ticketno'></td>";
        echo"<td><button>Click To See <br/>Available Time</button></td>";
        echo "<input type='hidden' name='submitted' value='true'><br>";
    echo"</tr>";
    echo"</table>";
    echo"</div>";
    echo"</form>";
    echo "<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>";
    include ('Footer.php');
    ?>
</body>
</html>
<?php
    }
?>
    