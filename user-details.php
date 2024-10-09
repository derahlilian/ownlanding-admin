<!DOCTYPE html>
<html lang="en">
    
    
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
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
	
	<title>Ownlanding Admin</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <link rel="icon" type="image/png" sizes="16x16" href="public/assets/images/favicon.png">

	
        <link href="public/assets/vendor/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css"/>	
		<link href="public/assets/vendor/nestable2/css/jquery.nestable.min.css" rel="stylesheet" type="text/css"/>	
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	
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
<div class="chatbox">
	<div class="chatbox-close"></div>
	<div class="custom-tab-1">
		<ul class="nav nav-tabs">
			<li class="nav-item">
				<a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
			</li>
			<li class="nav-item">
				<a class="nav-link active" data-bs-toggle="tab" href="#chat">Chat</a>
			</li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane fade active show" id="chat" role="tabpanel">
				<div class="card mb-sm-3 mb-md-0 contacts_card dlab-chat-user-box">
					<div class="card-header chat-list-header text-center">
						<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
						<div>
							<h6 class="mb-1">Chat List</h6>
							<p class="mb-0">Show All</p>
						</div>
						<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
					</div>
					<div class="card-body contacts_body p-0 dlab-scroll  " id="DLAB_W_Contacts_Body">
						<ul class="contacts">
							<li class="name-first-letter">A</li>
							<li class="active dlab-chat-user">
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="public/assets/images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
										<span class="online_icon"></span>
									</div>
									<div class="user_info">
										<span>Archie Parker</span>
										<p>Kalid is online</p>
									</div>
								</div>
							</li>
							<li class="dlab-chat-user">
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="public/assets/images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
										<span class="online_icon offline"></span>
									</div>
									<div class="user_info">
										<span>Alfie Mason</span>
										<p>Taherah left 7 mins ago</p>
									</div>
								</div>
							</li>
							<li class="dlab-chat-user">
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="public/assets/images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
										<span class="online_icon"></span>
									</div>
									<div class="user_info">
										<span>AharlieKane</span>
										<p>Sami is online</p>
									</div>
								</div>
							</li>
							<li class="dlab-chat-user">
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="public/assets/images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
										<span class="online_icon offline"></span>
									</div>
									<div class="user_info">
										<span>Athan Jacoby</span>
										<p>Nargis left 30 mins ago</p>
									</div>
								</div>
							</li>
							<li class="name-first-letter">B</li>
							<li class="dlab-chat-user">
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="public/assets/images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
										<span class="online_icon offline"></span>
									</div>
									<div class="user_info">
										<span>Bashid Samim</span>
										<p>Rashid left 50 mins ago</p>
									</div>
								</div>
							</li>
							<li class="dlab-chat-user">
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="public/assets/images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
										<span class="online_icon"></span>
									</div>
									<div class="user_info">
										<span>Breddie Ronan</span>
										<p>Kalid is online</p>
									</div>
								</div>
							</li>
							<li class="dlab-chat-user">
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="public/assets/images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
										<span class="online_icon offline"></span>
									</div>
									<div class="user_info">
										<span>Ceorge Carson</span>
										<p>Taherah left 7 mins ago</p>
									</div>
								</div>
							</li>
							<li class="name-first-letter">D</li>
							<li class="dlab-chat-user">
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="public/assets/images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
										<span class="online_icon"></span>
									</div>
									<div class="user_info">
										<span>Darry Parker</span>
										<p>Sami is online</p>
									</div>
								</div>
							</li>
							<li class="dlab-chat-user">
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="public/assets/images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
										<span class="online_icon offline"></span>
									</div>
									<div class="user_info">
										<span>Denry Hunter</span>
										<p>Nargis left 30 mins ago</p>
									</div>
								</div>
							</li>
							<li class="name-first-letter">J</li>
							<li class="dlab-chat-user">
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="public/assets/images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
										<span class="online_icon offline"></span>
									</div>
									<div class="user_info">
										<span>Jack Ronan</span>
										<p>Rashid left 50 mins ago</p>
									</div>
								</div>
							</li>
							<li class="dlab-chat-user">
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="public/assets/images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
										<span class="online_icon"></span>
									</div>
									<div class="user_info">
										<span>Jacob Tucker</span>
										<p>Kalid is online</p>
									</div>
								</div>
							</li>
							<li class="dlab-chat-user">
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="public/assets/images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
										<span class="online_icon offline"></span>
									</div>
									<div class="user_info">
										<span>James Logan</span>
										<p>Taherah left 7 mins ago</p>
									</div>
								</div>
							</li>
							<li class="dlab-chat-user">
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="public/assets/images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
										<span class="online_icon"></span>
									</div>
									<div class="user_info">
										<span>Joshua Weston</span>
										<p>Sami is online</p>
									</div>
								</div>
							</li>
							<li class="name-first-letter">O</li>
							<li class="dlab-chat-user">
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="public/assets/images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
										<span class="online_icon offline"></span>
									</div>
									<div class="user_info">
										<span>Oliver Acker</span>
										<p>Nargis left 30 mins ago</p>
									</div>
								</div>
							</li>
							<li class="dlab-chat-user">
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="public/assets/images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
										<span class="online_icon offline"></span>
									</div>
									<div class="user_info">
										<span>Oscar Weston</span>
										<p>Rashid left 50 mins ago</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="card chat dlab-chat-history-box d-none">
					<div class="card-header chat-list-header text-center">
						<a href="javascript:void(0);" class="dlab-chat-history-back">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"/><rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1"/><path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) "/></g></svg>
						</a>
						<div>
							<h6 class="mb-1">Chat with Khelesh</h6>
							<p class="mb-0 text-success">Online</p>
						</div>							
						<div class="dropdown">
							<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
							<ul class="dropdown-menu dropdown-menu-end">
								<li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i> View profile</li>
								<li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i> Add to btn-close friends</li>
								<li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i> Add to group</li>
								<li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Block</li>
							</ul>
						</div>
					</div>
					<div class="card-body msg_card_body dlab-scroll" id="DLAB_W_Contacts_Body3">
						<div class="d-flex justify-content-start mb-4">
							<div class="img_cont_msg">
								<img src="public/assets/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
							</div>
							<div class="msg_cotainer">
								Hi, how are you samim?
								<span class="msg_time">8:40 AM, Today</span>
							</div>
						</div>
						<div class="d-flex justify-content-end mb-4">
							<div class="msg_cotainer_send">
								Hi Khalid i am good tnx how about you?
								<span class="msg_time_send">8:55 AM, Today</span>
							</div>
							<div class="img_cont_msg">
						<img src="public/assets/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
							</div>
						</div>
						<div class="d-flex justify-content-start mb-4">
							<div class="img_cont_msg">
								<img src="public/assets/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
							</div>
							<div class="msg_cotainer">
								I am good too, thank you for your chat template
								<span class="msg_time">9:00 AM, Today</span>
							</div>
						</div>
						<div class="d-flex justify-content-end mb-4">
							<div class="msg_cotainer_send">
								You are welcome
								<span class="msg_time_send">9:05 AM, Today</span>
							</div>
							<div class="img_cont_msg">
						<img src="public/assets/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
							</div>
						</div>
						<div class="d-flex justify-content-start mb-4">
							<div class="img_cont_msg">
								<img src="public/assets/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
							</div>
							<div class="msg_cotainer">
								I am looking for your next templates
								<span class="msg_time">9:07 AM, Today</span>
							</div>
						</div>
						<div class="d-flex justify-content-end mb-4">
							<div class="msg_cotainer_send">
								Ok, thank you have a good day
								<span class="msg_time_send">9:10 AM, Today</span>
							</div>
							<div class="img_cont_msg">
								<img src="public/assets/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
							</div>
						</div>
						<div class="d-flex justify-content-start mb-4">
							<div class="img_cont_msg">
								<img src="public/assets/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
							</div>
							<div class="msg_cotainer">
								Bye, see you
								<span class="msg_time">9:12 AM, Today</span>
							</div>
						</div>
						<div class="d-flex justify-content-start mb-4">
							<div class="img_cont_msg">
								<img src="public/assets/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
							</div>
							<div class="msg_cotainer">
								Hi, how are you samim?
								<span class="msg_time">8:40 AM, Today</span>
							</div>
						</div>
						<div class="d-flex justify-content-end mb-4">
							<div class="msg_cotainer_send">
								Hi Khalid i am good tnx how about you?
								<span class="msg_time_send">8:55 AM, Today</span>
							</div>
							<div class="img_cont_msg">
						<img src="public/assets/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
							</div>
						</div>
						<div class="d-flex justify-content-start mb-4">
							<div class="img_cont_msg">
								<img src="public/assets/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
							</div>
							<div class="msg_cotainer">
								I am good too, thank you for your chat template
								<span class="msg_time">9:00 AM, Today</span>
							</div>
						</div>
						<div class="d-flex justify-content-end mb-4">
							<div class="msg_cotainer_send">
								You are welcome
								<span class="msg_time_send">9:05 AM, Today</span>
							</div>
							<div class="img_cont_msg">
						<img src="public/assets/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
							</div>
						</div>
						<div class="d-flex justify-content-start mb-4">
							<div class="img_cont_msg">
								<img src="public/assets/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
							</div>
							<div class="msg_cotainer">
								I am looking for your next templates
								<span class="msg_time">9:07 AM, Today</span>
							</div>
						</div>
						<div class="d-flex justify-content-end mb-4">
							<div class="msg_cotainer_send">
								Ok, thank you have a good day
								<span class="msg_time_send">9:10 AM, Today</span>
							</div>
							<div class="img_cont_msg">
								<img src="public/assets/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
							</div>
						</div>
						<div class="d-flex justify-content-start mb-4">
							<div class="img_cont_msg">
								<img src="public/assets/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
							</div>
							<div class="msg_cotainer">
								Bye, see you
								<span class="msg_time">9:12 AM, Today</span>
							</div>
						</div>
					</div>
					<div class="card-footer type_msg">
						<div class="input-group">
							<textarea class="form-control" placeholder="Type your message..."></textarea>
							<div class="input-group-append">
								<button type="button" class="btn btn-primary"><i class="fa fa-location-arrow"></i></button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="alerts" role="tabpanel">
				<div class="card mb-sm-3 mb-md-0 contacts_card">
					<div class="card-header chat-list-header text-center">
						<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
						<div>
							<h6 class="mb-1">Notications</h6>
							<p class="mb-0">Show All</p>
						</div>
						<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
					</div>
					<div class="card-body contacts_body p-0 dlab-scroll" id="DLAB_W_Contacts_Body1">
						<ul class="contacts">
							<li class="name-first-letter">SEVER STATUS</li>
							<li class="active">
								<div class="d-flex bd-highlight">
									<div class="img_cont primary">KK</div>
									<div class="user_info">
										<span>David Nester Birthday</span>
										<p class="text-primary">Today</p>
									</div>
								</div>
							</li>
							<li class="name-first-letter">SOCIAL</li>
							<li>
								<div class="d-flex bd-highlight">
									<div class="img_cont success">RU</div>
									<div class="user_info">
										<span>Perfection Simplified</span>
										<p>Jame Smith commented on your status</p>
									</div>
								</div>
							</li>
							<li class="name-first-letter">SEVER STATUS</li>
							<li>
								<div class="d-flex bd-highlight">
									<div class="img_cont primary">AU</div>
									<div class="user_info">
										<span>AharlieKane</span>
										<p>Sami is online</p>
									</div>
								</div>
							</li>
							<li>
								<div class="d-flex bd-highlight">
									<div class="img_cont info">MO</div>
									<div class="user_info">
										<span>Athan Jacoby</span>
										<p>Nargis left 30 mins ago</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="card-footer"></div>
				</div>
			</div>
			<div class="tab-pane fade" id="notes">
				<div class="card mb-sm-3 mb-md-0 note_card">
					<div class="card-header chat-list-header text-center">
						<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
						<div>
							<h6 class="mb-1">Notes</h6>
							<p class="mb-0">Add New Nots</p>
						</div>
						<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
					</div>
					<div class="card-body contacts_body p-0 dlab-scroll" id="DLAB_W_Contacts_Body2">
						<ul class="contacts">
							<li class="active">
								<div class="d-flex bd-highlight">
									<div class="user_info">
										<span>New order placed..</span>
										<p>10 Aug 2020</p>
									</div>
									<div class="ms-auto">
										<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
										<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
									</div>
								</div>
							</li>
							<li>
								<div class="d-flex bd-highlight">
									<div class="user_info">
										<span>Youtube, a video-sharing website..</span>
										<p>10 Aug 2020</p>
									</div>
									<div class="ms-auto">
										<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
										<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
									</div>
								</div>
							</li>
							<li>
								<div class="d-flex bd-highlight">
									<div class="user_info">
										<span>john just buy your product..</span>
										<p>10 Aug 2020</p>
									</div>
									<div class="ms-auto">
										<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
										<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
									</div>
								</div>
							</li>
							<li>
								<div class="d-flex bd-highlight">
									<div class="user_info">
										<span>Athan Jacoby</span>
										<p>10 Aug 2020</p>
									</div>
									<div class="ms-auto">
										<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
										<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
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
***********************************-->        <!--**********************************
	Content body start
***********************************-->
<div class="content-body">
	<!-- row -->
	<div class="container-fluid">
		<div class="row mt-4">
			<div class="col-xl-12">
				<div class="row">
					<div class="col-xl-12">
						<div class="card overflow-hidden">
							<div class="row m-0">
								<div class="col-xl-6 p-0">
									<div class="card-body">
										<div class="guest-profile">
											<div class="d-flex">
												<img src="public/assets/images/profile/pic1.jpg" alt="">
												<div>
													<h2 class="font-w600">Derah Derah</h2>
													<span class="text-secondary">#ABJ-00005</span>
													<div class="call d-flex align-items-center"> 
													<a href="javascript:void(0);"><i class="fas fa-phone-alt text-secondary"></i></a>
														<button class="btn btn-secondary ms-3">
															<svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24.18" viewBox="0 0 24 24.18">
																<g id="_032-speech-bubble" data-name="032-speech-bubble" transform="translate(-1.63 0)">
																<g id="Group_9" data-name="Group 9" transform="translate(1.63 0)">
																	<path id="Path_118" data-name="Path 118" d="M22.193,3.6A12,12,0,0,0,1.636,12.361a11.434,11.434,0,0,0,.82,4.015,11.885,11.885,0,0,0,1.7,2.969l-.99,2.347a1.778,1.778,0,0,0,1.951,2.46l4.581-.792A12.013,12.013,0,0,0,22.193,3.6ZM12.749,16.8H9.61a.9.9,0,1,1,0-1.81h3.139a.911.911,0,0,1,.9.9A.893.893,0,0,1,12.749,16.8Zm4.892-3.676H9.61a.911.911,0,0,1-.9-.9.893.893,0,0,1,.9-.9h8.031a.9.9,0,1,1,0,1.81Zm0-3.7H9.61a.9.9,0,1,1,0-1.81h8.031a.911.911,0,0,1,.9.9A.93.93,0,0,1,17.641,9.421Z" transform="translate(-1.63 0)" fill="#fff"/>
																</g>
																</g>
															</svg>
															Send Message
														</button>	
													</div>
												</div>
												<div class="dropdown dropend ms-auto">
													<a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>

													</a>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="edit-user.php">Edit</a>
														<a class="dropdown-item" href="javascript:void(0);" onclick="confirmDelete()">Delete</a>

													</div>
												</div>
											</div>
											<div class="d-flex">
												<div class="mt-4 check-status">
													<span class="d-block mb-2">Check In</span>	
													<span class="font-w500 fs-16">October 30th, 2021 | 08:23 AM</span>
												</div>
												<div class="mt-4">
													<!-- <span class="d-block mb-2">Check Out</span>	
													<span class="font-w500 fs-16">November 2th, 2021</span> -->
												</div>
											</div>
										</div>
										<div class="card-body">
											<div class="d-flex flex-wrap">
												<div class="mt-4 check-status">
													<span class="d-block mb-2">Package</span>	
													<h4 class="font-w500 fs-24">Diamond</h4>
												</div>
												<div class="mt-4 ms-3">
													<span class="d-block mb-2 text-black">Price</span>	
													<span class="font-w500 fs-24 text-black">$145<small class="fs-14 ms-2 text-secondary"></small></span>
												</div>
										 	</div>
											<p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
											<div class="facilities">
												<div class="mb-3 ">
													<span class="d-block mb-3">Facilities</span>
													<a href="javascript:void(0);" class="btn btn-secondary light btn-lg">
													<svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="28" height="20" viewBox="0 0 28 20">
														<g>
														<path  d="M27,14V7a1,1,0,0,0-1-1H6A1,1,0,0,0,5,7v7a3,3,0,0,0-3,3v8a1,1,0,0,0,2,0V24H28v1a1,1,0,0,0,2,0V17A3,3,0,0,0,27,14ZM7,8H25v6H24V12a2,2,0,0,0-2-2H19a2,2,0,0,0-2,2v2H15V12a2,2,0,0,0-2-2H10a2,2,0,0,0-2,2v2H7Zm12,6V12h3v2Zm-9,0V12h3v2ZM4,17a1,1,0,0,1,1-1H27a1,1,0,0,1,1,1v5H4Z" transform="translate(-2 -6)" fill="#135846"/>
														</g>
													</svg>
													Duplex</a>
													<a href="javascript:void(0);" class="btn btn-secondary light btn-lg">
													<svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="20" height="23.512" viewBox="0 0 20 23.512">
														<g id="_010-security" data-name="010-security" transform="translate(-310.326 -159.324)">
														<path id="Path_1958" data-name="Path 1958" d="M330.326,165.226a2.952,2.952,0,0,0-1.71-2.8l-7.5-2.951a2.139,2.139,0,0,0-1.581,0l-7.5,2.951a2.951,2.951,0,0,0-1.709,2.8v5.318a10.445,10.445,0,0,0,4.372,8.772l5.142,3.372a.871.871,0,0,0,.971,0l5.143-3.372a10.448,10.448,0,0,0,4.372-8.772Zm-2,0a.591.591,0,0,0-.342-.561l-7.5-2.951a.432.432,0,0,0-.317,0l-7.5,2.951a.59.59,0,0,0-.341.561v5.318a7.985,7.985,0,0,0,3.343,6.707l4.657,3.054,4.656-3.054a7.986,7.986,0,0,0,3.344-6.707Zm-8.657,7.273,4.949-5.843a.9.9,0,0,1,1.415,0,1.338,1.338,0,0,1,0,1.67L320.376,175a.9.9,0,0,1-1.414,0l-2.829-3.338a1.337,1.337,0,0,1,0-1.669.9.9,0,0,1,1.414,0Z" transform="translate(0 0)" fill="#135846" fill-rule="evenodd"/>
														</g>
													</svg>
													Twin Duplex</a>
													<a href="javascript:void(0);" class="btn btn-secondary light btn-lg">
													<svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="20" height="15.75" viewBox="0 0 20 15.75">
														<g id="internet" transform="translate(0 -2.15)">
														<g id="Group_22" data-name="Group 22">
															<path id="Path_1969" data-name="Path 1969" d="M18.3,7.6a11.709,11.709,0,0,0-16.6,0,.967.967,0,0,1-1.4,0,.967.967,0,0,1,0-1.4,13.641,13.641,0,0,1,19.4,0,.99.99,0,0,1-1.4,1.4Z" fill="#135846"/>
														</g>
														<g id="Group_23" data-name="Group 23">
															<path id="Path_1970" data-name="Path 1970" d="M15.4,10.4a7.667,7.667,0,0,0-10.7,0A.99.99,0,0,1,3.3,9,9.418,9.418,0,0,1,16.8,9a.99.99,0,0,1-1.4,1.4Z" fill="#135846"/>
														</g>
														<g id="Group_24" data-name="Group 24">
															<path id="Path_1971" data-name="Path 1971" d="M12.6,13.4a3.383,3.383,0,0,0-4.9,0,.967.967,0,0,1-1.4,0,1.087,1.087,0,0,1,0-1.5,5.159,5.159,0,0,1,7.7,0,1.088,1.088,0,0,1,0,1.5A.967.967,0,0,1,12.6,13.4Z" fill="#135846"/>
														</g>
														<circle id="Ellipse_10" data-name="Ellipse 10" cx="1.9" cy="1.9" r="1.9" transform="translate(8.2 14.1)" fill="#135846"/>
														</g>
													</svg>
													Bungalow</a>
												</div>	
												<a href="javascript:void(0);" class="btn btn-secondary light">2 Bathroom</a>
												<a href="javascript:void(0);" class="btn btn-secondary light">Boys Quarters</a>
												<a href="javascript:void(0);" class="btn btn-secondary light">Apartment</a>
											</div> 
										</div>
										
									</div>
								</div>
								<div class="col-xl-6 p-0">
								<div class="row">
									<div class="cool-12">
										<div class="card">
											<!-- <div class="card-header">
												<h4 class="card-title">User Downline</h4>
											</div> -->
											<div class="card-body">
												<div class="row">
													<!-- <div class="col-12">
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
													</div> -->
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
									<div class="card-body">
										<div class="guest-profile">
											<div class="d-flex">
												<!-- <div class="mt-4 check-status">
													<span class="d-block mb-2">Check In</span>	
													<span class="font-w500 fs-16">October 30th, 2021 | 08:23 AM</span>
												</div> -->
												<div class="mt-4">
													<!-- <span class="d-block mb-2">Check Out</span>	
													<span class="font-w500 fs-16">November 2th, 2021</span> -->
												</div>
											</div>
										</div>
										
									</div>
								</div>
								<div class="col-lg-12">
               
            </div>
								<!-- <div class="col-xl-6 p-0">
									<div class="guest-carousel owl-carousel owl-carousel owl-loaded owl-drag owl-dot">
										<div class="item">
											<div class="rooms">
												<img src="public/assets/images/gallery/hotel1.jpg" alt="">
												<div class="booked">
													<p class="fs-20 font-w500">BOOKED</p>
												</div>
												<div class="img-content">
													<h4 class="fs-24 font-w600 text-white">Bed Room</h4>
													<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerci</p>	
												</div>
											</div>
										</div>
										<div class="item">
											<div class="rooms">
												<img src="public/assets/images/gallery/hotel2.jpg" alt="">
												<div class="img-content">
													<h4 class="fs-24 font-w500 text-white">Bed Room</h4>
													<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerci</p>	
												</div>
											</div>
										</div>
										<div class="item">
											<div class="rooms">
												<img src="public/assets/images/gallery/hotel3.jpg" alt="">
												<div class="img-content">
													<h4 class="fs-24 font-w500 text-white">Bed Room</h4>
													<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerci</p>	
												</div>
											</div>
										</div>
									</div>
								</div> -->
							</div>
						</div>
					</div>
					<!-- <div class="col-xl-12">
						<div class="card">
							<div class="card-header border-0">
								<h4 class="fs-20">Purchase History</h4>
								<div class="newest ms-3">
									<select class="default-select">
										<option>Newest</option>
										<option>Oldest</option>
									</select>
								</div>	
							</div>
							<div class="card-body pt-0">
								<div class="row align-items-center">
									<div class="col-xl-4 col-sm-7">
										<div class="purchase-history d-flex align-items-center">
											<img src="public/assets/images/gallery/hotel1.jpg" alt="">
											<div class="ms-3">
												<h4 class="guest-text font-w500">Deluxe A-91234</h4>
												<span class="fs-14 d-block mb-2 text-secondary">#000123456</span>
												<span class="fs-16 text-nowrap">Oct 30th 2020 09:21 AM</span>
											</div>
										</div>
									</div>
									<div class="col-xl-2 col-sm-5 col-6">
										<div class="ms-0 ms-sm-2">
											<span class="d-block">Check In</span>
											<span class="guest-text font-w500">Nov 2th, 2020</span>
											<span class="fs-14 d-block">9.46 PM</span>
										</div>
									</div>
									<div class="col-xl-2 col-sm-4 col-6">
										<div>
											<span class="d-block">Check Out</span>
											<span class="guest-text font-w500">Nov 2th, 2020</span>
											<span class="fs-14 d-block">9.46 PM</span>
										</div>
									</div>
									<div class="col-xl-2 col-sm-4 col-6">
										<div class="mt-sm-0 mt-3">
											<span class="d-block mb-2 text-black">Price</span>	
											<span class="font-w500 fs-24 text-black">$145<small class="fs-14 ms-2 text-secondary">/night</small></span>
										</div>
									</div>
									<div class="col-xl-2 col-sm-4 col-6">
										<div class="d-flex align-items-center mt-sm-0 mt-3">
											<a href="javascript:void(0);" class="btn btn-secondary light">View Notes</a>
											<div class="dropdown dropend ms-auto">
												<a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>
												</a>
												<div class="dropdown-menu">
													<a class="dropdown-item" href="javascript:void(0);">Edit</a>
													<a class="dropdown-item" href="javascript:void(0);">Delete</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row align-items-center mt-5">
									<div class="col-xl-4 col-sm-7">
										<div class="purchase-history d-flex align-items-center">
											<img src="public/assets/images/gallery/hotel2.jpg" alt="">
											<div class="ms-3">
												<h4 class="guest-text font-w500">Deluxe A-91234</h4>
												<span class="fs-14 d-block mb-2 text-secondary">#000123456</span>
												<span class="fs-16 text-nowrap">Oct 30th 2020 09:21 AM</span>
											</div>
										</div>
									</div>
									<div class="col-xl-2 col-sm-5 col-6">
										<div class="ms-2">
											<span class="d-block">Check In</span>
											<span class="guest-text font-w500">Nov 2th, 2020</span>
											<span class="fs-14 d-block">9.46 PM</span>
										</div>
									</div>
									<div class="col-xl-2 col-sm-4 col-6">
										<div class="mt-sm-0 mt-2">
											<span class="d-block">Check Out</span>
											<span class="guest-text font-w500">Nov 2th, 2020</span>
											<span class="fs-14 d-block">9.46 PM</span>
										</div>
									</div>
									<div class="col-xl-2 col-sm-4 col-6">
										<div class="mt-sm-0 mt-3">
											<span class="d-block mb-2 text-black">Price</span>	
											<span class="font-w500 fs-24 text-black">$145<small class="fs-14 ms-2 text-secondary">/night</small></span>
										</div>
									</div>
									<div class="col-xl-2 col-sm-4 col-6">
										<div class="d-flex align-items-center mt-sm-0 mt-3">
											<a href="javascript:void(0);" class="btn btn-secondary light">View Notes</a>
											<div class="dropdown dropend ms-auto">
												<a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>
												</a>
												<div class="dropdown-menu">
													<a class="dropdown-item" href="javascript:void(0);">Edit</a>
													<a class="dropdown-item" href="javascript:void(0);">Delete</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>



    <div class="card">
											<div class="card-header">
												<h4 class="card-title">User Downline</h4>
											</div>
											<div class="card-body">
												<div class="row">
												<div class="col-md-6">
														<div class="card-content">
															<div class="nestable">
																<div class="dd" id="nestable2">
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
			<script src="public/assets/vendor/nestable2/js/jquery.nestable.min.js"></script>
            <script src="public/assets/js/plugins-init/nestable-init.js"></script>
    	
			<script src="public/assets/js/custom.min.js"></script>
			<script src="public/assets/js/dlabnav-init.js"></script>
			<script src="public/assets/js/demo.js"></script>
			<script src="public/assets/js/styleSwitcher.js"></script>
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
<script>
    function confirmDelete() {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Perform the delete action here
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                );
            }
        });
    }
</script>


    <!--**********************************
        Main wrapper end
    ***********************************-->
</body>

<!-- Mirrored from travl.dexignlab.com/codeigniter/demo/guest-details by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Sep 2024 16:05:45 GMT -->
</html>