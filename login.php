<?php
require_once (__DIR__."/init.php");
//die(json_encode($_POST));
if(isset($_POST['email'])){
    $email = $_POST['email'] ?? "";
    $password = $_POST['password'] ?? "";
    $doLogin = $authClass->login($email,$password);
//    die(json_encode($doLogin));
    if($doLogin['flag']){
        header("Location: ./dashboard");
    }

}

?>
<!DOCTYPE html>
<html lang="en">
    
    
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="Ownlanding Admin" />
	<meta property="og:title" content="Ownlanding Admin" />
	<meta property="og:description" content="Ownlanding Admin" />
	<meta property="og:image" content="../assets/images/faviconn.pngl" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>Ownlanding Admin</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <link rel="icon" type="image/png" sizes="16x16" href="public/assets/images/faviconn.png">
    <link href="public/assets/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="public/assets/css/style.css" rel="stylesheet">
	
</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <?php
                                    if(@$doLogin['message']){
                                        ?>
                                        <div class="alert alert-danger text-center">
                                            <?= $doLogin['message'] ?>
                                        </div>
                                        <?php
                                    }
                                    ?>
									<div class="text-center mb-3">
										<a href="#"><img src="public/assets/images/ownlogo.png" width="100%" height="60%" alt=""></a>
									</div>
                                    <form method="post" action="./login">
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" name="email" class="form-control" value="admin@ownlanding.com">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input name="password" type="password" class="form-control" value="Password">
                                        </div>
                                        <div class="row d-flex justify-content-between mt-4 mb-2">

                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block" style="background-color:#800080; border:#fff;">Sign Me In</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="public/assets/vendor/global/global.min.js"></script>
<script src="public/assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<script src="public/assets/js/custom.min.js"></script>
<script src="public/assets/js/dlabnav-init.js"></script>
<script src="public/assets/js/styleSwitcher.js"></script>
</body>
</html>