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
	   //title
       echo "<h3>Website Settings</h3>"; // print title of page
       echo "<p>&nbsp;</p>";
       echo "</div>";
       echo "<hr>";
       echo "<p>&nbsp;</p>";
       echo "<p>&nbsp;</p>"; 
	   
	   echo "<div id='settingtable'>";
	   echo"<table cellspacing='0'border='0'>";
	   echo "<tr>";
	   //setting title 
	   echo "<th><h1>Language</h1></th>";
	   echo "<th></th>";
	   echo "<th><h1>Country</h1></th>";
	   echo "<th></th>";
	   echo "<th><h1>Currency</h1></th>";
	   echo "<th></th>";
	   echo "<th><h1>Colour</h1></th>";
	   echo "</tr>";
	   
	   echo "<tr>";
	   //images
	   echo "<td><img src='images/language.jpeg' width='300' height='200'></td>";
	   echo "<td></td>";
	   echo "<td><img src='images/global.png' width='200' height='200'></td>";
	   echo "<td></td>";
	   echo "<td><img src='images/currency.jpg' width='200' height='200'></td>";
	   echo "<td></td>";
	   echo "<td><img src='images/colour.jfif' width='200' height='200'></td>";
	   echo "</tr>";
	   

	   echo "<tr>";
	   //dropdown list to let users to choose the language
	   echo "<form action='setting.php' method='post'>";
	   echo "<td><select name='language' id='input-box'>";
			echo "<option value='English'>English</option>";
			echo "<option value='Bahasa Malaysia'>Bahasa Malaysia</option>";
			echo "<option value='Mandarin'>Mandarin</option>";
			echo "<option value='Japanese'>Japanese</option>";
			echo "<option value='Korean'>Korean</option>";
	   echo "</select>";
	   echo "</td>";
	   
	   echo "<td></td>";
	   //dropdown list to let users to choose the country
	   echo "<td><select name='country' id='input-box'>";
			echo "<option value='Malaysia'>Malaysia</option>";
			echo "<option value='Singapore'>Singapore</option>";
			echo "<option value='United States'>United States</option>";
			echo "<option value='China'>China</option>";
			echo "<option value='Korea'>Korea</option>";
			echo "<option value='Japan'>Japan</option>";
	   echo "</select>";
	   echo "</td>";
	   

	   echo "<td></td>";
	   //dropdown list to let users to choose the currency
	   echo "<td><select name='currency' id='input-box'>";
			echo "<option value='MYR'>MYR</option>";
			echo "<option value='SGD'>SGD</option>";
			echo "<option value='USD'>USD</option>";
			echo "<option value='RMB'>RMB</option>";
			echo "<option value='SKW'>SKW</option>";
			echo "<option value='YEN'>YEN</option>";
	   echo "</select>";
	   echo "</td>";
	   
	   echo "<td></td>";
	   //dropdown list to let users to choose the colour for the website background
	   echo "<td><select name='colour' id='input-box'>";
			echo "<option value='#ADD8E6'>Blue</option>";
			echo "<option value='#D0F0C0'>Green</option>";
			echo "<option value='#D7BA89'>Brown</option>";
			echo "<option value='#C684F6'>Purple</option>";
			echo "<option value='#FFFFFF'>White</option>";
	   echo "</select>";
	   echo "</td>";
	   echo "</tr>";
	   
	   echo "<tr>";
	   echo"<td></td><td></td><td></td><td><br><button>Submit</button></td>";
	   echo"<input type='hidden' name='submittedd' value='true'><br></tr>";
	   
	   //store the user settings in the cookies
	   if(isset($_POST['submittedd'])) {
		   
			setcookie('country',$_POST['country']);
			setcookie('language',$_POST['language']);
			setcookie('currency',$_POST['currency']);	
			setcookie('colour',$_POST['colour']);
			
		//direct users to the homepage
		header('Location: home.php');
		exit();			
		}