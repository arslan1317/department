<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <title>Admin Login</title>
  <link rel="apple-touch-icon" href="">
  <link rel="shortcut icon" type="image/x-icon" href="">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/icheck.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/icheck-custom.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/bootstrap.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/bootstrap-extended.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/colors.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/components.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vertical-menu-modern.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/palette-gradient.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/login-register.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/style.css') }}">
</head>

<body class="vertical-layout vertical-menu-modern 1-column  bg-cyan bg-lighten-2 blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
  <div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <section class="row flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
              <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0">
                  <div class="card-title text-center">
                    <div class="p-1">
                      <img src="{{ asset('admin/images/6456439_preview.png') }}" alt="branding logo" style="width: 25%;">
                    </div>
                  </div>
                </div>
                <div class="card-content">
                  <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2">
                    <span>Using Account Details</span>
                  </p>
                  <div class="card-body pt-0">
                    <form method="POST" action="{{ route('login') }}" class="form-horizontal">
                      @csrf
                      <fieldset class="form-group floating-label-form-group">
                        <label for="user-name">Your E-Mail Address</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="user-name" placeholder="Your E-Mail Address" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                          <p class="badge-danger block-tag text-center"><small class="block-area white">{{ $message }}</small></p>
                        @enderror
                      </fieldset>
                      <fieldset class="form-group floating-label-form-group mb-1">
                        <label for="user-password">Enter Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="user-password" placeholder="Enter Password" required autocomplete="current-password" name="password">
                        @error('password')
                          <p class="badge-danger block-tag text-center"><small class="block-area white">{{ $message }}</small></p>
                        @enderror
                      </fieldset>
                      <div class="form-group row">
                        <div class="col-md-6 col-12 text-center text-sm-left">
                          <fieldset>
                            <input type="checkbox" id="remember-me" name="remember" class="chk-remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember-me"> Remember Me</label>
                          </fieldset>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-outline-info btn-block"><i class="ft-unlock"></i> Login</button>
                    </form>
                  </div>
                  <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1">
                    <span>New to Admin Portal ?</span>
                  </p>
                  <div class="card-body">
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <script src="{{ asset('admin/js/vendors.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('admin/js/icheck.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('admin/js/app-menu.js') }}" type="text/javascript"></script>
  <script src="{{ asset('admin/js/app.js') }}" type="text/javascript"></script>
  <script src="{{ asset('admin/js/form-login-register.js') }}" type="text/javascript"></script>
</body>
</html>
