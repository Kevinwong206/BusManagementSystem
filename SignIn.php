<?php
    if (isset($_POST['submitted'])){ //if form submmited
?>
    <html lang="en">
    <head>
    <title>Sign In Error</title> 
    </head>
    <body>
    <?php
        include ('Header.php'); // include contents from header.php

        echo "<div id='content2'>";
       
        //declare variables
        $email =$_POST['email'];
        $password =$_POST['password'];

        // If any of the field is empty
        if (empty($email) || empty($password)){
            echo "<div id='sign-in-form'>";
            echo "<img src='images/user.png' alt='user icon' width='70' height='70'><p>&nbsp;</p>";
            echo "<h1>Sign In</h1>"; 
            echo "<form action='SignIn.php' method='post'>"; //create a post method form

            echo"<input type='text' READONLY id='input-box' method='post' name='id' >"; //Will not accept any input

                if (empty($email)) { // if id is empty
                    echo"<p id='error'>*You did not fill in ID*</p>";
                }

            echo"<input type='password' READONLY id='input-box' method='post' name='pass' >"; //Will not accept any input

                if (empty($password)) { // if password is empty
                    echo"<p id='error' >*You did not fill in Password*</p>";
                }

            echo "<p>&nbsp;</p><hr><p>&nbsp;</p>";
            echo "<p id='or'>OR</p>";
            echo "<p>&nbsp;</p>";
            echo "<button>Try Again ?</button>"; // this button will direct user back to sign in page
            echo "<p>&nbsp;</p>";

            // If user do not have account, this will direct them to sign up
            echo "<p>Do you have an account? <a href='SignUp.php'>Sign up</a></p>";

            echo "</form> "; //end form
            echo "</div>"; // end css of the sign in form
        }

        // If any of the field is incorrect input
        else if ($email != "Superman" || $password != "Wonderwoman"){
            echo "<div id='sign-in-form'>";
            echo "<img src='images/user.png' alt='user icon' width='70' height='70'><p>&nbsp;</p>";
            echo "<h1>Sign In</h1>"; 
            echo "<form action='SignIn.php' method='post'>"; //create a post method form

            echo"<input type='text' READONLY id='input-box' method='post' name='id' >"; //Will not accept any input

                if ($email != "Superman") { // If the user enters different ID will have error
                    echo"<p id='error' >*Incorrect ID*</p>";
                }

            echo"<input type='password' READONLY id='input-box' method='post' name='pass' >"; //Will not accept any input

                if ($password != "Wonderwoman") { // If the user enters different password will have error
                    echo"<p id='error' >*Incorrect Password*</p>";
                }
            
            echo "<p>&nbsp;</p><hr><p>&nbsp;</p>";
            echo "<p id='or'>OR</p>";
            echo "<p>&nbsp;</p>";
            echo "<button>Try Again ?</button>"; // this button will direct user back to sign in page
            echo "<p>&nbsp;</p>";

            // If user do not have account, this will direct them to sign up
            echo "<p>Do you have an account? <a href='SignUp.php'>Sign up</a></p>";

            echo "</form> "; // end form
            echo "</div>"; // end css of the sign-in-form
        }

        //Succesful Login
        else{
            echo "<div id='sign-in-form'>";
            echo "<h1>Login Successful!</h1>";
            echo "<h1>Welcome $email</h1>";
            echo "</div>"; // end the css of the sign-in-from
        }
        echo "<p>&nbsp;</p>";
        include ('Footer.php');
        echo "</div>";// end the css of the content4
        echo "</div>";// end the css for the container
?>
        </body>
        </html>
<?php
    }
    else { //If form not submitted 
?>
    <html>
    <head>
    <title>Sign In Page</title>
    <?php
        include ('Header.php') // include contents from header.php
    ?>
    </head>
    <body>
    <?php 
        echo "<div id='content2'>";
        echo "<div id='sign-in-form'>";
        echo "<img src='images/user.png' alt='user icon' width='70' height='70'><p>&nbsp;</p>";
       
        // Title for the page      
        echo "<h1><font face='Impact'>Sign In</font></h1>";
        echo "<form action='SignIn.php' method='post'>";

                //input details
                echo "<p>Email:</p>";
                echo "<input type='text' name = 'email' id='input-box'>";
                echo "<p>Password:</p>";
                echo "<input type='password' name = 'password' id='input-box'>";
                echo "<p>&nbsp;</p>";
                echo "<button type='submit' name='submit'>Sign In</button>"; 
                echo "<input type='hidden' name='submitted' value='true'><br>";
                echo "<p>&nbsp;</p><hr><p>&nbsp;</p>";
                echo "<p>Do you have an account? <a href='SignUp.php'>Sign up</a></p>"; 
                // If user do not have account, this will direct them to sign up

        echo "</form> ";
        echo "</div>"; // end sign-in-form css

        include ('Footer.php'); // include contents from footer.php

        echo "</div>";// end content css
        echo "</div>";// end container css
    ?>
    </body>
    </html>
<?php
}
?>
