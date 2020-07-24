<meta charset=utf-8>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <?php 
    echo "<div id='container'>";
    echo "<div id='mainpic'>";  
    
    //creating a table in the main pain to insert logo picture and the slogan 
    echo "<table width = '100%' align='left' border='0' >";
        echo "<tr align = 'left'>";
            echo "<td width='20%' align='center' ><img src='images/logo.PNG' width='270' height='170.5' ></td>"; 
            echo "<td width='70%' align='right' ><big><font color='#FFFFFF' size='200px' face='arial black'><b>A To B Worry Free&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></font></big></td>";
        echo "</tr>";
    echo "</table>";   
    echo "</div>";
        
    echo "<div id='menu'>";
        echo "<ul>";
            //List all the content in the menu and the link of the content
            echo "<li class='menuitem'><a href='Home.php'>Home</a></li>";
            echo "<li class='menuitem'><a href='BusTicket.php'>Bus Ticket</a></li>";
            echo "<li class='menuitem'><a href='Purchase.php'>Purchase History</a></li>";
            echo "<li class='menuitem'><a href='AboutUs.php'>About Us</a></li>";
            echo "<li class='menuitem'><a href='SignIn.php'>Log In/Sign up</a></li>";
        echo "</ul>";
    echo "</div>";