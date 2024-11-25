<?php include "config/init.php"; ?>
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
	<meta property="og:image" content="../social-image.html" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>Ownlanding Admin</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <link rel="icon" type="image/png" sizes="16x16" href="public/assets/images/faviconn.png">

	
        <link href="public/assets/vendor/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css"/>	
	
        <link href="public/assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css"/>	
	
        <link href="public/assets/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet" type="text/css"/>		
	
        <link href="public/assets/css/style.css" rel="stylesheet" type="text/css"/>		

</head>
<body>

	<!--*******************
		Preloader start
	********************-->
	<div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
	</div>
	<!--*******************
		Preloader end
	********************-->
	
	<!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

		<!--**********************************
    Nav header start
***********************************-->
<div class="nav-header">
    <a href="index.html" class="brand-logo">
		<img src="public/assets/images/ownlogo.png" alt="" width="343" height="66.359" style="object-fit: contain;" />
    </a>
    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
</div>
<!--**********************************
    Nav header end
***********************************-->		<!--**********************************
	Chat box start
***********************************-->

<!--**********************************
	Chat box End
***********************************-->        <!--**********************************
	Header start
***********************************-->
<?php
include"header.php"
?>
<!--**********************************
	Header end
***********************************-->        <!--**********************************
    Sidebar start
***********************************-->
<?php
include"sidebar.php"
?>
<!--**********************************
    Sidebar end
***********************************-->       

<!--********Content body start*******-->
<div class="content-body">
	<!-- row -->
	<div class="container-fluid">
		<div class="row mt-4">
			<div class="col-xl-12">
				<div class="row">
					<div class="col-xl-12">
						<div class="card overflow-hidden">
							<div class="row m-0">
								
								<div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Profile</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form class="form-valide-with-icon needs-validation" method="post" action="/ownlanding-admin/controllers/Administrator.php">
                                <?php $user = $_SESSION["editUser"]; ?>
                                <div class="mb-3">
                                    <label class="text-label form-label" for="validationCustomUsername">Firstname</label>
                                    <div class="input-group">
                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                        <input type="text" class="form-control" id="validationCustomUsername" value="<?php echo $user["name"] ?>" name="first" required>
                                        <div class="invalid-feedback">
                                            Please Enter a firstname.
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="text-label form-label" for="validationCustomUsername">Lastname</label>
                                    <div class="input-group">
                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                        <input type="text" class="form-control" id="validationCustomUsername" value="<?php echo $user["last_name"] ?>" name="last" required>
                                        <div class="invalid-feedback">
                                            Please Enter a lastname.
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="text-label form-label" for="dlab-password">Email</label>
                                    <div class="input-group transparent-append">
                                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                                        <input type="email" class="form-control" id="dlab-password" value="<?php echo $user["email"] ?>" disabled>
                                    

                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="text-label form-label" for="dlab-password">Address</label>
                                    <div class="input-group transparent-append">
                                        <span class="input-group-text"> <i class="fa fa-location-arrow"></i> </span>
                                        <input type="text" class="form-control" id="dlab-password" value="<?php echo $user["address"] ?>" disabled>
                                        <span class="input-group-text ">
                                            <i class="fa fa-lock"></i>
                                        </span>

                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            I agree to change this details. where?
                                        </label>
                                    </div>
                                </div>
                                <input type="hidden" name="user_id" value="<?php echo $user["id"] ?>">
                                <button type="submit" name="editUserSubmit" class="btn me-2 btn-primary">Submit</button>
                                <button class="btn btn-light" onclick="history.back(); return false;">Cancel</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--**********************************
	Content body end
***********************************-->
 <!--**********************************Footer start***********************************-->
<div class="footer">
    <div class="copyright">
        <p>Copyright © Designed &amp; Developed by <a href="https://jamaconcept.com/" target="_blank">Jamasoft Concept</a> 2024</p>
    </div>
</div>
<!--**********************************
    Footer end
***********************************-->        
		
	</div>
			<script src="public/assets/vendor/global/global.min.js"></script>
			<script src="public/assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
		

	        <script src="public/assets/vendor/owl-carousel/owl.carousel.js"></script>
            <script src="public/assets/vendor/bootstrap-datetimepicker/js/moment.js"></script>
            <script src="public/assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
    	
			<script src="public/assets/js/custom.min.js"></script>
			<script src="public/assets/js/dlabnav-init.js"></script>
			<script src="public/assets/js/demo.js"></script>
			<script src="public/assets/js/styleSwitcher.js"></script>
		<script>
	function TravlCarousel()
		{

			/*  testimonial one function by = owl.carousel.js */
			jQuery('.guest-carousel').owlCarousel({
				loop:false,
				margin:15,
				nav:true,
				autoplaySpeed: 3000,
				navSpeed: 3000,
				paginationSpeed: 3000,
				slideSpeed: 3000,
				smartSpeed: 3000,
				autoplay: false,
				animateOut: 'fadeOut',
				dots:true,
				navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
				responsive:{
					0:{
						items:1
					},
					
					480:{
						items:1
					},			
					
					767:{
						items:1
					},
					1750:{
						items:1
					},
					1920:{
						items:1
					},
				}
			})
		}

		jQuery(window).on('load',function(){
			setTimeout(function(){
				TravlCarousel();
			}, 1000); 
		});
</script>


    <!--**********************************
        Main wrapper end
    ***********************************-->
</body>

<!-- Mirrored from travl.dexignlab.com/codeigniter/demo/guest-details by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Sep 2024 16:05:45 GMT -->
</html>