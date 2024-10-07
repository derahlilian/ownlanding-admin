<!DOCTYPE html>
<html lang="en">
    
    
<!-- Mirrored from travl.dexignlab.com/codeigniter/demo/uc-nestable by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Sep 2024 16:06:16 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="Travl - CodeIgniter Hotel Admin Dashboard Bootstrap Template" />
	<meta property="og:title" content="Travl - CodeIgniter Hotel Admin Dashboard Bootstrap Template" />
	<meta property="og:description" content="Travl - CodeIgniter Hotel Admin Dashboard Bootstrap Template" />
	<meta property="og:image" content="../social-image.html" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>Travl - CodeIgniter Hotel Admin Dashboard Bootstrap Template</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <link rel="icon" type="image/png" sizes="16x16" href="public/assets/images/favicon.png">

	
        <link href="public/assets/vendor/nestable2/css/jquery.nestable.min.css" rel="stylesheet" type="text/css"/>	
	
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
<div class="header">
	<div class="header-content">
		<nav class="navbar navbar-expand">
			<div class="collapse navbar-collapse justify-content-between">
				<div class="header-left">
					<div class="dashboard_bar">
					Downlines					</div>
				</div>
				
				
			</div>
		</nav>
	</div>
</div>
<?php include "header.php" ?>
<!--**********************************
	Header end
***********************************-->        <!--**********************************
    Sidebar start
***********************************-->
<?php include "sidebar.php" ?>
<!--**********************************
    Sidebar end
***********************************-->        <!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <div class="container-fluid">
        
        <!-- row -->

        <!-- Nestable -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">User Downline</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card-content">
                                    <div class="nestable">
                                        <div class="dd" id="nestable">
                                            <ol class="dd-list">
                                                <li class="dd-item" data-id="1">
                                                    <div class="dd-handle">Direct Downline</div>
                                                </li>
                                                <li class="dd-item" data-id="2">
                                                    <div class="dd-handle">Direct Downline</div>
                                                    <ol class="dd-list">
                                                        <li class="dd-item" data-id="3">
                                                            <div class="dd-handle">First Generation Downline</div>
                                                        </li>
                                                        <li class="dd-item" data-id="4">
                                                            <div class="dd-handle">First Generation Downline</div>
                                                        </li>
                                                        <li class="dd-item" data-id="5">
                                                            <div class="dd-handle">First Generation Downline</div>
                                                            <ol class="dd-list">
                                                                <li class="dd-item" data-id="6">
                                                                    <div class="dd-handle">Second Generation Downline</div>
                                                                </li>
                                                                <li class="dd-item" data-id="7">
                                                                    <div class="dd-handle">Second Gereation Downline</div>
                                                                </li>
                                                                <li class="dd-item" data-id="8">
                                                                    <div class="dd-handle">Second Generation Downline</div>
                                                                </li>
                                                            </ol>
                                                        </li>
                                                        <li class="dd-item" data-id="9">
                                                            <div class="dd-handle">First Generation Downline</div>
                                                        </li>
                                                        <li class="dd-item" data-id="10">
                                                            <div class="dd-handle">First Generation Downline</div>
                                                        </li>
                                                    </ol>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-md-6">
                                <div class="card-content">
                                    <div class="nestable">
                                        <div class="dd" id="nestable2">
                                            <ol class="dd-list">
                                                <li class="dd-item" data-id="13">
                                                    <div class="dd-handle">Item 13</div>
                                                </li>
                                                <li class="dd-item" data-id="13">
                                                    <div class="dd-handle">Item 13</div>
                                                </li>
                                                <li class="dd-item" data-id="14">
                                                    <div class="dd-handle">Item 14</div>
                                                </li>
                                                <li class="dd-item" data-id="15">
                                                    <div class="dd-handle">Item 15</div>
                                                    <ol class="dd-list">
                                                        <li class="dd-item" data-id="16">
                                                            <div class="dd-handle">Item 16</div>
                                                        </li>
                                                        <li class="dd-item" data-id="17">
                                                            <div class="dd-handle">Item 17</div>
                                                        </li>
                                                        <li class="dd-item" data-id="18">
                                                            <div class="dd-handle">Item 18</div>
                                                        </li>
                                                        <li class="dd-item" data-id="18">
                                                            <div class="dd-handle">Item 19</div>
                                                        </li>
                                                        <li class="dd-item" data-id="18">
                                                            <div class="dd-handle">Item 20</div>
                                                        </li>
                                                        <li class="dd-item" data-id="18">
                                                            <div class="dd-handle">Item 21</div>
                                                        </li>
                                                    </ol>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
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
        <!--**********************************
    Footer start
***********************************-->
<div class="footer">
    <div class="copyright">
        <p>Copyright © Designed &amp; Developed by <a href="https://jamaconcept.com/" target="_blank">Jamasoft</a> 2024</p>
    </div>
</div>
<!--**********************************
    Footer end
***********************************-->        
		
	</div>
			<script src="public/assets/vendor/global/global.min.js"></script>
			<script src="public/assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
		

	        <script src="public/assets/vendor/nestable2/js/jquery.nestable.min.js"></script>
            <script src="public/assets/js/plugins-init/nestable-init.js"></script>
    	
			<script src="public/assets/js/custom.min.js"></script>
			<script src="public/assets/js/dlabnav-init.js"></script>
			<script src="public/assets/js/demo.js"></script>
			<script src="public/assets/js/styleSwitcher.js"></script>
		

    <!--**********************************
        Main wrapper end
    ***********************************-->
</body>

</html>