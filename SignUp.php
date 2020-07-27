<?php
    if (isset($_POST['submitted'])){ //if form submmited
?>
    <html lang="en">
    <head>
    <title>Sign Up Error</title>
    <?php
        include ('Header.php') 
    ?>

    <?php
        echo "<div id='content2'>";

        //declare variables 
        $submit =$_POST['submit'];
        $email =$_POST['email'];
        $id =$_POST['id'];
        $name =$_POST['name'];
        $password =$_POST['password'];
        $conPassword =$_POST['conPassword'];
        $phone =$_POST['phone'];

        // If any of the field is empty or contains error  
        if (empty($email) || empty($id) || empty($name)|| empty($password) || empty($conPassword) || empty($phone)||!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)||!ctype_alpha(str_replace(' ', '', $name))||strlen($password)<=5||((!preg_match('/[^A-Za-z]/', $password))||(is_numeric($password) == 1))||$conPassword !== $password||is_numeric($phone) == 0||(strlen($phone)>10) || (strlen($phone)<10)){

            echo "<div id='sign-up-form'>";
            echo "<img src='images/user.png' alt='user icon' width='70' height='70'><p>&nbsp;</p>";
            echo "<h1>Sign Up</h1>";
                echo "<form action='SignUp.php' method='post'>";
            
                            echo "<input type='text' READONLY id='input-box' placeholder='Email Address '>";//Will not accept any input

                                if (empty($email)) { //If email is empty
                                    echo "<p id='error' ><b>*Email not filled up. Please fill in Email*</b></font></p>";
                                }

                                else if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) { //If email is invalid
                                    echo "<p id='error' ><b>*Email is not valid*</b></font></p>";
                                }

                            echo "<input type='text' READONLY id='input-box' placeholder='User ID'>";//Will not accept any input

                                if (empty($id)) { //If id is empty
                                    echo "<p id='error' ><b>*ID not filled up. Please fill in ID*</b></font></p>";
                                }


                            echo "<input type='name' READONLY id='input-box' placeholder='User Name'>";//Will not accept any inpu

                                if (empty($name)) { //if user name is empty
                                    echo "<p id='error' ><b>*User Name not filled up. Please fill in User Name*</b></font></p>";
                                }

                                else if (!ctype_alpha(str_replace(' ', '', $name))) {//if user name contain number
                                    echo "<p id='error' ><b>*User name cannot contain number*</b></font></p>";
                                }

                            echo "<input type='password' READONLY id='input-box' placeholder='New Password (8 or more characters)'>";//Will not accept any input

                                if (empty($password)) { //if password is empty
                                    echo "<p id='error' ><b>*Password not filled up. Please fill in Password*</b></font></p>";
                                }

                                else if (strlen($password)<=5) { //if password length less than 6
                                     echo "<p id='error' ><b>*Password cannot be lesser than 6 characters*</b></font></p>";
                                }

                                else if ((!preg_match('/[^A-Za-z]/', $password))||(is_numeric($password) == 1)){ //if password does not contain number or character
                                    echo "<p id='error' ><b>*Password must contain alphabet and number*</b></font></p>";
                                }

                            echo "<input type='password' READONLY id='input-box' placeholder='Confirm Password'>";//Will not accept any input

                                if (empty($conPassword)) { //if confirm password is empty
                                    echo "<p id='error' ><b>*Password Confirmation not filled up. Please fill in Password Confirmation *</b></font></p>";
                                }

                                else if ($conPassword !== $password) { //if password does not match with confrim password
                                    echo "<p id='error' ><b>*Password is not the same as new password*</b></font></p>";
                                    }

                            echo "<input type='phone' READONLY id='input-box' placeholder='Phone Number'>";//Will not accept any input

                                if (empty($phone)) { //if phone is empty
                                    echo "<p id='error' ><b>*Phone Number not filled up. Please fill in Phone Number*</b></font></p>";
                                }

                                else if (is_numeric($phone) == 0) { //if phone contains alphabet
                                    echo "<p id='error' ><b>*Phone Number must only be numbers*</b></font></p>";
                                }

                                else if ((strlen($phone)>10) || (strlen($phone)<10)) {//if phone length is less than 10 or more than 10
                                    echo "<p id='error' ><b>*Phone Number must contain only 10 numbers*</b></font></p>";
                                }

                            echo "<p>&nbsp;</p><hr>&nbsp;</p>";

                            echo "<button>Try Again ?</button>"; 
                        echo "</form> "; 
                        echo "</div>"; //end the css of the sign-up-form
                        echo "<p>&nbsp;</p><p>&nbsp;</p>"; 
                        include ('Footer.php');
        }

        //If login sucessful
        else {
		
                        echo "<div id='sign-up-form'>";
                        echo "<img src='images/user.png' alt='user icon' width='70' height='70'><p>&nbsp;</p>";
                        echo "<h1>You Have Been Successfully Registered !</h1>"; 
                        echo "</div>"; // end the css of the sign-up-form
						
						//connect database
						if($connect = mysqli_connect("localhost","root","")){
						
						// select the database
						$dbc = mysqli_select_db($connect,"bus_booking");  
						
						//insert data into table
						$sql = "INSERT INTO customer(Email_Address,User_ID,User_Name,Password,Confirm_password,phone)
											VALUES ('$email','$id','$name','$password','$conPassword','$phone')";
						
						if(mysqli_query($connect,$sql)){
							echo "<p></p>";
						}else{
							echo "<p style=\"color:red\">Could not insert table:<br>";
							echo mysqli_error($connect);
						}
						
						mysqli_close($connect);
						
						}
            }
                echo "</div>"; // end the css of the content2
                echo "</div>";// end the css for the container

    }
    else { //If form not submitted 
?>
    <html>
    <head>
    <title>Sign Up Page</title>
<?php
    include ('Header.php') 
?>
    </head>
    <body>
    <?php        
        echo "<div id='content2'>";
        echo "<div id='sign-up-form'>";
        echo "<img src='images/user.png' alt='user icon' width='70' height='70'><p>&nbsp;</p>";
        // Title for the page    
        echo "<h1><font face='Impact'>Sign Up</font></h1>";
            echo "<form action='SignUp.php' method='post'>";

                // input details of the Sign up page
                echo "<p>Email Address:</p>";
                echo "<input type='text' name='email' id='input-box' method='post'>";
                echo "<p>User ID:</p>";
                echo "<input type='text' name='id' id='input-box' method='post'>";
                echo "<p>User Name:</p>";
                echo "<input type='name' name='name' id='input-box' method='post'>";
                echo "<p>New Password (6 or more characters):";
                echo "<input type='password' name='password' id='input-box' method='post'>";
                echo "<p>Confirm Password:</p>";
                echo "<input type='confirm password' name='conPassword' id='input-box' method='post'>";
                echo "<p>Phone Number:</p>";
                echo "<input type='phone' name='phone' id='input-box' method='post'>"; 
                echo "<p>&nbsp;</p><hr><p>&nbsp;</p>";
                echo "<button type='submit' name='submit'>Sign Up</button>"; 
                echo "<input type='hidden' name='submitted' value='true'><br>"; 
                // hidden input type with value used to check if form submitted

            echo "</form> ";

        echo "</div>"; // end sign-up-form css
        include ('Footer.php');
        echo "</div>";// end the css of the content2
        echo "</div>";// end the container of the content2
?>
</body>
</html>
<?php
    }
?>
