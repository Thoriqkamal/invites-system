@extends('layouts.master')

@section('content')

<header class="page-header">
	<h2>Restricted Page</h2>

	<div class="right-wrapper pull-right">
		<ol class="breadcrumbs">
			<li>
				<a href="#">
					<i class="fa fa-list-alt"></i>
				</a>
			</li>
			<li><span>Restricted Page</span></li>
		</ol>

		<a class="sidebar-right-toggle"><i class="fa fa-chevron-left"></i></a>
	</div>
</header>

<section class="body-error error-inside">
    <div class="center-error">

        <div class="row">
            <div class="col-md-8">
                <div class="main-error mb-xlg">
                    <h2 class="error-code text-dark text-center text-semibold m-none" style="font-size: 5rem; line-height: 5rem; letter-spacing: 0px;">Restricted Page <i class="fa fa-times-circle"></i></h2>
                    <p class="error-explanation text-center">Sorry, you don't have privilege for access this page.</p>
                </div>
            </div>
            <div class="col-md-4">
                <h4 class="text">Back to Homepage :</h4>
                <ul class="nav nav-list primary">
                    <li>
                        <a href="{{url('home')}}"><i class="fa fa-caret-right text-dark"></i> Homepage</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection