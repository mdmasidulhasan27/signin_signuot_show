<!DOCTYPE html>
<html lang="en">
<?php
include_once("config.php");
if(isset($_POST['Submit'])) {
	$name      =  $_POST['user_name'];
	$user_email      =  $_POST['user_email'];
	$user_pass       =  $_POST['user_pass'];

	$result = mysqli_query($mysqli, "INSERT INTO reg_user(user_name ,user_email,user_pass) VALUES('$name','$user_email','$user_pass')");
    if ($result== true) {
      header("Location: index.php");
    }else {
      echo "you have an error";
    }		
}
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Register</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	 </head>

<body>
    <div class="top-content">
        <div class="inner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                        <h1><strong>Login Register Form</strong></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-1 middle-border"></div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-5">
                        <div class="form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3><strong>Sign up</strong></h3>
                                </div>
                                <div class="form-top-right"> <i class="fa fa-pencil"></i> </div>
                            </div>
                            <div class="form-bottom">
                                <form role="form" action="registration.php" method="post">
                                    <div class="form-group">
                                        <label class="sr-only" for="name">Name</label>
                                        <input type="text" name="name" placeholder="Name..." class="form-username form-control"/>
																			</div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-email">Email</label>
                                        <input type="text" name="user_email" placeholder="Email..." class="form-username form-control"/>
																			</div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-about-yourself">Password</label>
																				<input type="password" name="user_pass" placeholder="passworf..." class="form-username form-control"/>
                                    </div>
                                    <button type="submit" class="btn" name="Submit"><strong>Sign up</strong></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
