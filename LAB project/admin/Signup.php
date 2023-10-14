
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>MedicLab Diagnostic Admin panel</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
			<div class="account-center">
				<div class="account-box">
                    <form  method="POST" action="signupform.php"  class="form-signin">
						<div class="account-logo">
                        <img src="images/logo.png" style="width: 30%;height:200px;" alt="">
                        </div>
             <div class="form-group">
                            <label>Username</label>
                            <input type="text" autofocus="" class="form-control" name="name">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" autofocus="" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        
                        <div class="form-group text-center">
                          <a href="Signup.php"><button type="submit" class="btn  account-btn" name="signup" style="background-color: #0d59a7; color:white;">Submit</button></a>  
                        </div>


                        
                    </form>
 
                   
                </div>
			</div>
        </div>
    </div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- login23:12-->
</html>