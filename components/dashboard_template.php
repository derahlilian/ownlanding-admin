<?php
require_once __DIR__."/../init.php";
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


    <link href="public/assets/vendor/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css"/>

    <link href="public/assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>

    <link href="public/assets/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet" type="text/css"/>

    <link href="public/assets/css/style.css" rel="stylesheet" type="text/css"/>

    <Style>
        .concierge-bx:hover .profile-img {
            transform: scale(1.3);
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3);
        }


        .concierge-bx:hover .hover-text {
            transform: scale(1.2) !important;
            color: #007bff !important;

            .concierge-bx:hover {
                background-color: #f8f9fa;
            }

    </Style>
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
    <!--**********************************Nav header end ***********************************-->

    <!--**********************************Chat box start***********************************-->

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
    include "components/sidebar.php"
    ?>
    <!--**********************************
        Sidebar end
    ***********************************-->        <!--**********************************
	Content body start
***********************************-->
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">

            <div class="row mt-4">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <?php
                            include __DIR__."/../page_contents/".$pageFile;
                            ?>
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
            <p>Copyright © Designed &amp; Developed by <a href="https://Jamaconcept.com/" target="_blank">Jamasoft Concept Ltd</a> 2024</p>
        </div>
    </div>
    <!--**********************************
        Footer end
    ***********************************-->

</div>
<script src="public/assets/vendor/global/global.min.js"></script>
<script src="public/assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>


<script src="public/assets/vendor/moment/moment.min.js"></script>
<script src="public/assets/vendor/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="public/assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="public/assets/js/plugins-init/datatables.init.js"></script>

<script src="public/assets/js/custom.min.js"></script>
<script src="public/assets/js/dlabnav-init.js"></script>
<script src="public/assets/js/demo.js"></script>
<script src="public/assets/js/styleSwitcher.js"></script>
<script>
    $(function() {

        var start = moment().subtract(29, 'days');
        var end = moment();

        function cb(start, end) {
            $('#reportrange span').html(start.format('D MMMM YYYY') + ' &nbsp - &nbsp ' + end.format('D MMMM YYYY'));
        }

        $('#reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);

        cb(start, end);

    });
</script>


<!--**********************************
    Main wrapper end
***********************************-->
</body>

</html>