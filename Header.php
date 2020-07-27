<meta charset=utf-8>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<style>
<?php
	if(isset($_POST['submittedd'])) {
			setcookie('colour',$_POST['colour']);
		}
		
		if(isset($_COOKIE['colour'])) {
			$colour = $_COOKIE['colour'];
			
			//set the background colour according to the users preferences
			echo "body {
				  background-color: $colour;
				  background-size: 1600px 950px;
				  }";
		}
		
		else {
			//else the background colour will be pink colour
			echo "body {
				  background-color: #fdd5de; 
				  background-size: 1600px 950px;
				  }";
		}
?>
</style>
</head>

<body>
    <?php 
	
	//start the session
	session_start ();
		
	if (isset($_SESSION['id'])) {
	    $id = $_SESSION['id'];
	}	
		
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
	
	if (isset($_SESSION['id'])) {
	    $id = $_SESSION['id'];
		//show user id on the header if the user has logged in
		echo"<p2>Welcome to BUS2U, $id !</p2>";
	}
        echo "<ul>";
            //List all the content in the menu and the link of the content
            echo "<li class='menuitem'><a href='Home.php'>Home</a></li>";
            echo "<li class='menuitem'><a href='BusTicket.php'>Bus Ticket</a></li>";
            echo "<li class='menuitem'><a href='Purchase.php'>Purchase History</a></li>";
            echo "<li class='menuitem'><a href='AboutUs.php'>About Us</a></li>";
            echo "<li class='menuitem'><a href='SignIn.php'>Log In/Sign up</a></li>";

        echo "</ul>";
		
     //Log out option
	 if (isset($_SESSION['id'])){
        echo "<p3><a href='Home.php?logout=1'><font color='red'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Log Out</font></a></p3>"; 
     }
	 
	 //the session will be destroyed if the users clicked log out
	 if(isset($_GET['logout'])){
			header("refresh:1; url=home.php");
			session_unset();
			session_destroy();
		}
		
    echo "</div>";
