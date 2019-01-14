<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = trim($_POST["username"]);

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }

    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){

        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <script src="https://code.jquery.com/jquery-1.7.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
     
       <style>
            body {
    background-color: rgb(195, 204, 204);
    font-family: "Segoe UI", Candara, "Bitstream Vera Sans", "DejaVu Sans", "Bitstream Vera Sans", "Trebuchet MS", Verdana, "Verdana Ref", sans serif;
    font-size:16px;
    color:#444;
}
ul, li {
    margin:0;
    padding:0;
    list-style-type:none;
}

#container {
    width:400px;
    padding:0px;
    background:#fefefe;
    margin:0 auto;
    border:1px solid #c4cddb;
    border-top-color:#d3dbde;
    border-bottom-color:#bfc9dc;
    box-shadow:0 1px 1px #ccc;
    border-radius:5px;
    position:relative;
}
h1 {
    margin:0;
    padding:10px 0;
    font-size:24px;
    text-align:center;
    background:#eff4f7;
    border-bottom:1px solid #dde0e7;
    box-shadow:0 -1px 0 #fff inset;
    border-radius:5px 5px 0 0; /* otherwise we get some uncut corners with container div */
    text-shadow:1px 1px 0 #fff;
}

form ul li {
    margin:10px 20px;

}
form ul li:last-child {
    text-align:center;
    margin:20px 0 25px 0;
}

input {
    padding:10px 10px;
    border:1px solid #d5d9da;
    border-radius:5px;
    box-shadow: 0 0 5px #e8e9eb inset;
    width:328px; /* 400 (#container) - 40 (li margins) -  10 (span paddings) - 20 (input paddings) - 2 (input borders) */
    font-size:1em;
    outline:0; /* remove webkit focus styles */
}
input:focus {
    border:1px solid #b9d4e9;
    border-top-color:#b6d5ea;
    border-bottom-color:#b8d4ea;
    box-shadow:0 0 5px #b9d4e9;
}
label {
    color:#555;
}
#container span {
    background:#f6f6f6;
    padding:3px 5px;
    display:block;
    border-radius:5px;
    margin-top:5px;
}

button {
    background: #57a9eb; /* Old browsers */
    background: -moz-linear-gradient(top, #57a9eb 0%, #3a76c4 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#57a9eb), color-stop(100%,#3a76c4)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top, #57a9eb 0%,#3a76c4 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top, #57a9eb 0%,#3a76c4 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top, #57a9eb 0%,#3a76c4 100%); /* IE10+ */
    background: linear-gradient(top, #57a9eb 0%,#3a76c4 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#57a9eb', endColorstr='#3a76c4',GradientType=0 ); /* IE6-9 */
    border:1px solid #f00f1a;
    border-top-color:#940d2f;
    border-bottom-color:#830a0a;
    color:#fff;
    text-shadow:0 1px 0 #1e3c5e;
    font-size:.875em;
    padding:8px 15px;
    width:150px;
    border-radius:20px;
    box-shadow:0 1px 0 #bbb, 0 1px 0 #9cccf3 inset;
}
button:active {
    background: #3a76c4; /* Old browsers */
    background: -moz-linear-gradient(top, #3a76c4 0%, #57a9eb 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#3a76c4), color-stop(100%,#57a9eb)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top, #3a76c4 0%,#57a9eb 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top, #3a76c4 0%,#57a9eb 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top, #3a76c4 0%,#57a9eb 100%); /* IE10+ */
    background: linear-gradient(top, #3a76c4 0%,#57a9eb 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3a76c4', endColorstr='#57a9eb',GradientType=0 ); /* IE6-9 */
    box-shadow:none;
    text-shadow:0 -1px 0 #1e3c5e;
}


#pswd_info {
    position:absolute;
    bottom:-75px;
    bottom: -115px\9; /* IE Specific */
    right:75px;
    width:250px;
    padding:15px;
    background:#fefefe;
    font-size:.875em;
    border-radius:5px;
    box-shadow:0 1px 3px #ccc;
    border:1px solid #ddd;
}
#pswd_info h4 {
    margin:0 0 10px 0;
    padding:0;
    font-weight:normal;
}
#pswd_info::before {
    content: "\25B2";
    position:absolute;
    top:-12px;
    left:45%;
    font-size:14px;
    line-height:14px;
    color:#ddd;
    text-shadow:none;
    display:block;
}

.invalid {
    background:url(cancel.png) no-repeat 0 50%;
    padding-left:22px;
    line-height:24px;
    color:#ec3f41;
}
.valid {
    background:url(valid.png) no-repeat 0 50%;
    padding-left:22px;
    line-height:27px;
    color:#3a7d34;
}
#pswd_info {
    display:none;
}
        </style>
</head>
<body>
    <div id="container">
        <h1>Sign Up</h1>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <ul>
             <li class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label for="username">Username:</label>
                <input type="text" name="username"id="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </li>
            <li class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label for="pswd">Password:</label>
                <input type="password" name="password" id ="paswd" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </li>
            <li class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
            <label for="pswd">Confirm Password</label>
                <input type="password" name="confirm_password"  class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </li>
            <li class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
       </li>
    
            
             </ul>
        </form>
        <div id="pswd_info">
                    <h4>Password must meet the following requirements:</h4>
                    <ul>
                        <li id="letter" class="invalid">At least <strong>one letter</strong></li>
                        <li id="capital" class="invalid">At least <strong>one capital letter</strong></li>
                        <li id="number" class="invalid">At least <strong>one number</strong></li>
                        <li id="length" class="invalid">Be at least <strong>8 characters</strong></li>
                    </ul>
                </div>
                <p>Already have an account? <a href="login.php">Login here</a>.</p>
</div>
                <script type="text/javascript">

    $( document ).ready( function ()
    {

      $( 'input[type=password]' ).keyup( function ()
        {
           // set password variable
          var pswd = $( this ).val();
          //validate the length
          if ( pswd.length < 8 )
          {
              $( '#length' ).removeClass( 'valid' ).addClass( 'invalid' );
          } else
          {
              $( '#length' ).removeClass( 'invalid' ).addClass( 'valid' );
          }
          //validate letter
          if ( pswd.match( /[A-z]/ ) )
          {
              $( '#letter' ).removeClass( 'invalid' ).addClass( 'valid' );
          } else
          {
              $( '#letter' ).removeClass( 'valid' ).addClass( 'invalid' );
          }

          //validate capital letter
          if ( pswd.match( /[A-Z]/ ) )
          {
              $( '#capital' ).removeClass( 'invalid' ).addClass( 'valid' );
          } else
          {
              $( '#capital' ).removeClass( 'valid' ).addClass( 'invalid' );
          }

          //validate number
          if ( pswd.match( /\d/ ) )
          {
              $( '#number' ).removeClass( 'invalid' ).addClass( 'valid' );
          } else
          {
              $( '#number' ).removeClass( 'valid' ).addClass( 'invalid' );
          }

        } ).focus( function ()
        {
            $( '#pswd_info' ).show();
        } ).blur( function ()
        {
            $( '#pswd_info' ).hide();
        } );

    } );

</script>

</body>
</html>