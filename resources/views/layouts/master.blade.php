<!doctype html>
<html class="fixed">

<head>

	<!-- Basic -->
	<meta charset="UTF-8">

	<title>New TNPS Apps</title>
	<link rel = "icon" href = "{{ asset('/assets/images/icontsel.jpg') }}" type = "image/x-icon"> 

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<!-- Web Fonts  -->
	<link href="{{ asset('/assets/vendor/font-awesome/fonts/font-googleapis.ttf') }}" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="{{ asset('/assets/vendor/bootstrap/css/bootstrap.css') }}" />
	<link rel="stylesheet" href="{{ asset('/assets/vendor/font-awesome/css/font-awesome.css') }}" />
	<link rel="stylesheet" href="{{ asset('/assets/vendor/magnific-popup/magnific-popup.css') }}" />
	<link rel="stylesheet" href="{{ asset('/assets/vendor/bootstrap-datepicker/css/datepicker3.css') }}" />

	<link rel="stylesheet" href="{{ asset('/assets/vendor/datatables/css/jquery.dataTables.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('/assets/vendor/datatables/css/rowReorder.dataTables.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('/assets/vendor/datatables/css/select.dataTables.min.css') }}" />

	{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css"> --}}
	<!-- Theme CSS -->
	<link rel="stylesheet" href="{{ asset('/assets/stylesheets/theme.css') }}" />

	<!-- Skin CSS -->
	<link rel="stylesheet" href="{{ asset('/assets/stylesheets/skins/default.css') }}" />

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="{{ asset('/assets/stylesheets/theme-custom.css') }}">

	<!-- Head Libs -->
	<script src="{{ asset('/assets/vendor/modernizr/modernizr.js') }}"></script>

</head>

<body>
	<section class="body">
		<div id="loading">
			<img id="loading-image" src="{{ asset('/assets/images/loader.gif') }}" alt="Loading..." />
		</div>

		<!-- start: header -->
		<header class="header">
			<div class="logo-container">
				<a href="{{ route('home') }}" class="logo">
					<img src="{{ asset('/assets/images/telkomsel2.png') }}" height="35" alt="Telkomsel" />
				</a>
				<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
					<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
				</div>
			</div>

			<!-- start: user box -->
			<div class="header-right">
				{{-- @if(in_array('approver', session()->get('roles'))) --}}
				<span class="separator"></span>
				
				<?php //if($count_pending != 0) { ?>
				<ul class="notifications">
					<li>
						<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
							<i class="fa fa-envelope"></i>
							<span class="badge"></span>
						</a>

						<div class="dropdown-menu notification-menu">
							<div class="notification-title">
								<span class="pull-right label label-default"></span>
								Approver Notification
							</div>

							<div class="content">
								{{-- @foreach($pending as $key => $val) --}}
									<a href="" class="clearfix view-modal-approve" data-selector_id="">
										<!-- <figure class="image">
											<img src="{{ asset('/assets/images/!sample-user.jpg') }}" class="img-circle" />
										</figure> -->
										<span class="title text-bold"></span>
										<span class="title"></span>
										<span class="message">
										</span>
									</a><br/>
								{{-- @endforeach --}}
								<hr/>
								<div class="text-right">
									<a href="{{url('viewapprovesurvey') . '#' . 'pending'}}" class="view-more">View All</a>
								</div>
							</div>
						</div> 
					</li>
				</ul>
				<?php //} else { ?>
				&ensp;
				
				<span class="separator"></span>
				{{-- @endif --}}

				<div id="userbox" class="userbox">
					<a href="#" data-toggle="dropdown">
						<figure class="profile-picture">
							<img src="{{ asset('/assets/images/!logged-user.jpg') }}" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
						</figure>
						<div class="profile-info">
							<span class="name">{{session()->get('username')}}</span>
						</div>

						<i class="fa custom-caret"></i>
					</a>

					<div class="dropdown-menu">
						<ul class="list-unstyled">
							<li class="divider"></li>
							<li>
								<a role="menuitem" tabindex="-1" href="{!! route('logout') !!}"><i class="fa fa-power-off"></i> Logout</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- end: search & user box -->
		</header>
		<!-- end: header -->

		<div class="inner-wrapper">
			<!-- start: sidebar -->
			<aside id="sidebar-left" class="sidebar-left">

				<div class="sidebar-header">
					<div class="sidebar-title">
						Navigation
					</div>
					<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>

				<div class="nano">
					<div class="nano-content">
						<nav id="menu" class="nav-main" role="navigation">
							<ul class="nav nav-main">
								
								<li>
									<a href="{{ route('home') }}" class="nav-link">
										<i class="fa fa-home" aria-hidden="true"></i>
										<span>Homepages</span>
									</a>
								</li>
								{{-- @if(in_array('admin', session()->get('roles')))
								<li class="nav-parent">
									<a>
										<i class="fa fa-copy" aria-hidden="true"></i>
										<span>Administrator</span>
									</a>
									<ul class="nav nav-children">
										<li>
											<a href="{{ route('users') }}" class="nav-link">
												<i class="fa fa-users" aria-hidden="true"></i>
												<span>User List</span>
											</a>
										</li>
										<li>
											<a href="{{ route('log-history-user') }}" class="nav-link">
												<i class="fa fa-history" aria-hidden="true"></i>
												<span>Log History User</span>
											</a>
										</li>
									</ul>
								</li>
								@endif --}}
								{{-- @if(in_array('requestor', session()->get('roles'))) --}}
								<li>
									<a href="{{ route('users') }}" class="nav-link">
										<i class="fa fa-users" aria-hidden="true"></i>
										<span>User List</span>
									</a>
								</li>
								<li>
									<a href="{{ route('event-instance') }}" class="nav-link">
										<i class="fa fa-calendar" aria-hidden="true"></i>
										<span>Event Instance</span>
									</a>
								</li>
								<li>
									<a href="{{ route('all-participant-list') }}" class="nav-link">
										<i class="fa fa-list" aria-hidden="true"></i>
										<span>All Participant List</span>
									</a>
								</li>
								<li>
									<a href="{{ route('report-event-instance') }}" class="nav-link">
										<i class="fa fa-file" aria-hidden="true"></i>
										<span>Report Event Instance</span>
									</a>
								</li>
								{{-- <li>
									<a href="{{ route('create') }}" class="nav-link">
										<i class="fa fa-list-alt" aria-hidden="true"></i>
										<span>Create Survey</span>
									</a>
								</li> --}}
								{{-- @endif --}}
								{{-- <li>
									<a href="{{ route('viewmonitoring') }}" class="nav-link">
										<i class="fa fa-table" aria-hidden="true"></i>
										<span>Monitoring</span>
									</a>
								</li>
								<li>
									<a href="{{ route('viewresponse') }}" class="nav-link">
										<i class="fa fa-bullhorn" aria-hidden="true"></i>
										<span>Survey Response</span>
									</a>
								</li> --}}
								{{-- <li class="nav-parent">
									<a>
										<i class="fa fa-copy" aria-hidden="true"></i>
										<span>Whitelist/Blacklist</span>
									</a>
									<ul class="nav nav-children">	
										<li>
											<a href="{{ route('whitelist-blacklist') }}" class="nav-link">
												<i class="fa fa-list" aria-hidden="true"></i>
												<span>Manual Whitelist/Blacklist</span>
											</a>
										</li>
										<li>
											<a href="{{ route('whitelist-blacklist-transferred') }}" class="nav-link">
												<i class="fa fa-link" aria-hidden="true"></i>
												<span>Integration Whitelist/Blacklist</span>
											</a>
										</li>
									</ul>
								</li>	 --}}
							</ul>
						</nav>
					</div>
				</div>
			</aside>
			<!-- end: sidebar -->

			<section role="main" class="content-body">
				@yield('content')
			</section>
		</div>

		<!-- Vendor -->
		<script src="{{ asset('/assets/vendor/jquery/jquery.js') }}"></script>
		<script src="{{ asset('/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
		<script src="{{ asset('/assets/vendor/bootstrap/js/bootstrap.js') }}"></script>
		<script src="{{ asset('/assets/vendor/nanoscroller/nanoscroller.js') }}"></script>
		<script src="{{ asset('/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
		<script src="{{ asset('/assets/vendor/magnific-popup/magnific-popup.js') }}"></script>
		<script src="{{ asset('/assets/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>

		<script src="{{ asset('/assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
		<script src="{{ asset('/assets/vendor/datatables/js/dataTables.rowReorder.min.js') }}"></script>
		<script src="{{ asset('/assets/vendor/datatables/js/dataTables.select.min.js') }}"></script>

		{{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
		<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script> --}}


		<!-- Plugins -->
		<script src="{{ asset('/assets/javascripts/plugins/notify.min.js') }}"></script>

		<!-- Specific Page Vendor -->

		<!-- Theme Base, Components and Settings -->
		<script src="{{ asset('/assets/javascripts/theme.js') }}"></script>

		<!-- Theme Custom -->
		<script src="{{ asset('/assets/javascripts/theme.custom.js') }}"></script>

		<!-- Theme Initialization Files -->
		<script src="{{ asset('/assets/javascripts/theme.init.js') }}"></script>

		<script>
			setTimeout(function() {
				// if request page done
				$(document).ready(function() {
					$('#loading').hide();
				});

			}, 800);
		</script>

		@include('layouts.user_js')

		@if((request()->route()->getAction()['as']) == 'viewmonitoring')
		@include('monitoring.js_survey_table')
		@include('monitoring.js_survey_modal')
		@include('monitoring.js_survey_list')
		@endif

		@if((request()->route()->getAction()['as']) == 'viewsubmitsurvey')
		@include('monitoring.js_survey_table')
		@include('monitoring.js_survey_modal')
		@include('monitoring.js_survey_submit')
		@endif

		@if((request()->route()->getAction()['as']) == 'viewapprovesurvey')
		@include('monitoring.js_survey_table')
		@include('monitoring.js_survey_modal')
		@include('monitoring.js_survey_approve')
		@endif

		@if((request()->route()->getAction()['as']) == 'log-history-user')
			@include('log-history-user.view_history_js')
			@include('log-history-user.js_log_history_list')
		@endif

		@if((request()->route()->getAction()['as']) == 'viewresponse')
			@include('survey_response.js_response')
		@endif
		
		@if((request()->route()->getAction()['as']) == 'users')
			@include('users.view_user_js')
		@endif

		@if((request()->route()->getAction()['as']) == 'whitelist-blacklist')
			@include('whitelist_blacklist.view_whitelist_blacklist_js')
			@include('whitelist_blacklist.js_whitelist_blacklist')
		@endif

		@if((request()->route()->getAction()['as']) == 'whitelist-blacklist-segmentation')
			@include('whitelist_blacklist_segmentation.js_whitelist_blacklist_segmentation')
			@include('whitelist_blacklist_segmentation.js_whitelist_blacklist_list')
		@endif

		@if((request()->route()->getAction()['as']) == 'whitelist-blacklist-transferred')
			@include('whitelist_blacklist_segmentation.js_whitelist_blacklist_segmentation')
			@include('whitelist_blacklist_segmentation.js_whitelist_blacklist_transferred')
		@endif

		@if((request()->route()->getAction()['as']) == 'whitelist-blacklist-defined')
			@include('whitelist_blacklist_segmentation.js_whitelist_blacklist_segmentation')
			@include('whitelist_blacklist_segmentation.js_whitelist_blacklist_defined')
			
		@endif

		@if((request()->route()->getAction()['as']) == 'all-participant-list')
			@include('participant_list.view_participant_js')	
		@endif

		@if((request()->route()->getAction()['as']) == 'event-instance')
			@include('event_instance.js_event_instance')	
		@endif

		@if((request()->route()->getAction()['as']) == 'report-event-instance')
			@include('report_event_instance.js_report_event_instance')	
		@endif
	</section>
</body>

</html>