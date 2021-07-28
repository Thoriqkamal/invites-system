<!doctype html>
<html class="fixed">
  <head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Sign In | New TNPS Apps</title>
    <link rel = "icon" href = "{{ asset('/assets/images/icontsel.jpg') }}" type = "image/x-icon">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/vendor/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendor/font-awesome/css/font-awesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendor/magnific-popup/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendor/bootstrap-datepicker/css/datepicker3.css') }}" />

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
    <!-- start: page -->
    <section class="body-sign">
      <div class="center-sign">
        <a href="/" class="logo pull-left">
          <img src="{{ asset('assets/images/logotselnew.png') }}" height="54" alt="Porto Admin" />
        </a>

        <div class="panel panel-sign">
          <div class="panel-title-sign mt-xl text-right">
            <h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i>New TNPS Apps</h2>
          </div>
          <div class="panel-body">
            @if( base64_decode(Request::get('notifbox')) == 'false')
              <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <p class="m-none text-semibold h6"><?php echo preg_replace("/\r\n|\r|\n/","<br>",base64_decode(Request::get('reason')))?></p>
              </div>
            @endif
            <form action="{!! route('postlogin') !!}" method="post">
              {{csrf_field()}}
              <div class="form-group mb-lg">
                <label>Username</label>
                <div class="input-group input-group-icon">
                  <input name="username" type="text" class="form-control input-lg" />
                  <span class="input-group-addon">
                    <span class="icon icon-lg">
                      <i class="fa fa-user"></i>
                    </span>
                  </span>
                </div>
              </div>

              <div class="form-group mb-lg">
                <label>Password</label>
                <div class="input-group input-group-icon">
                  <input name="password" type="password" class="form-control input-lg" />
                  <span class="input-group-addon">
                    <span class="icon icon-lg">
                      <i class="fa fa-lock"></i>
                    </span>
                  </span>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-8">
                </div>
                <div class="col-sm-4 text-right">
                  <button type="submit" class="btn btn-primary hidden-xs">Sign In</button>
                </div>
              </div>

            </form>
          </div>
        </div>

        <p class="text-center text-muted mt-md mb-md">&copy; Copyright Telkomsel 2021. All rights reserved.
      </div>
    </section>
    <!-- end: page -->

    <!-- Vendor -->
    <script src="{{ asset('/assets/vendor/jquery/jquery.js') }}"></script>
    <script src="{{ asset('/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
    <script src="{{ asset('/assets/vendor/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/assets/vendor/nanoscroller/nanoscroller.js') }}"></script>
    <script src="{{ asset('/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('/assets/vendor/magnific-popup/magnific-popup.js') }}"></script>
    <script src="{{ asset('/assets/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>
    
    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('/assets/javascripts/theme.js') }}"></script>
    
    <!-- Theme Custom -->
    <script src="{{ asset('/assets/javascripts/theme.custom.js') }}"></script>
    
    <!-- Theme Initialization Files -->
    <script src="{{ asset('/assets/javascripts/theme.init.js') }}"></script>

  </body>
</html>
