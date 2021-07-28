@extends('layouts.master')

@section('content')

	<header class="page-header">
		<h2>Homepages</h2>
	
		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="#">
						<i class="fa fa-home"></i>
					</a>
				</li>
				<li><span>Homepages</span></li>
			</ol>
	
			<a class="sidebar-right-toggle"><i class="fa fa-chevron-left"></i></a>
		</div>
	</header>

	<div class="row">	
		<div class="col-md-12 col-lg-12 col-xl-4">
			<h5 class="text-semibold text-dark text-uppercase mb-md mt-lg">All Survey Status</h5>
			<div class="row">
				<div class="col-md-6 col-xl-12">
					<section class="panel">
						<div class="panel-body bg-primary">
							<div class="widget-summary">
								<div class="widget-summary-col widget-summary-col-icon">
									<div class="summary-icon">
										<i class="fa fa-life-ring"></i>
									</div>
								</div>
								<div class="widget-summary-col">
									<div class="summary">
										<h4 class="title">Active</h4>
										<div class="info">
											<strong class="amount"></strong>
										</div>
									</div>
									<div class="summary-footer">
										<a class="text-uppercase" href="{{ url('viewmonitoring').'#active' }}">(view detail)</a>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
				<div class="col-md-6 col-xl-12">
					<section class="panel">
						<div class="panel-body bg-secondary">
							<div class="widget-summary">
								<div class="widget-summary-col widget-summary-col-icon">
									<div class="summary-icon">
										<i class="fa fa-life-ring"></i>
									</div>
								</div>
								<div class="widget-summary-col">
									<div class="summary">
										<h4 class="title">Pending</h4>
										<div class="info">
											<strong class="amount"></strong>
										</div>
									</div>
									<div class="summary-footer">
										<a class="text-uppercase" href="{{ url('viewmonitoring').'#pending' }}">(view detail)</a>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
				<div class="col-md-6 col-xl-12">
					<section class="panel">
						<div class="panel-body bg-tertiary">
							<div class="widget-summary">
								<div class="widget-summary-col widget-summary-col-icon">
									<div class="summary-icon">
										<i class="fa fa-life-ring"></i>
									</div>
								</div>
								<div class="widget-summary-col">
									<div class="summary">
										<h4 class="title">Approve</h4>
										<div class="info">
											<strong class="amount"></strong>
										</div>
									</div>
									<div class="summary-footer">
										<a class="text-uppercase" href="{{ url('viewmonitoring').'#approve' }}">(view detail)</a>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
				<div class="col-md-6 col-xl-12">
					<section class="panel">
						<div class="panel-body bg-quartenary">
							<div class="widget-summary">
								<div class="widget-summary-col widget-summary-col-icon">
									<div class="summary-icon">
										<i class="fa fa-life-ring"></i>
									</div>
								</div>
								<div class="widget-summary-col">
									<div class="summary">
										<h4 class="title">Reject</h4>
										<div class="info">
											<strong class="amount"></strong>
										</div>
									</div>
									<div class="summary-footer">
										<a class="text-uppercase" href="{{ url('viewmonitoring').'#reject' }}">(view detail)</a>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
	</div>

@endsection