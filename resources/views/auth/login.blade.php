<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>DORYBOOK LOGIN</title>

  <meta content="We are Cloud House&trade; Technologies, actively participating in the market with IT Services and Business Solutions since 2017." name="description">
  <meta content="Cloud House, Best IT Company, Web Development, Web Design, Cheap eCommerce Website Design, Best Website Design, Digital marketing, Internet marketing, Digital marketing agency, Digital marketing services, Digital marketing Company, Social media marketing, SEO digital marketing, Online marketing, Social media marketing in Bangladesh, Full stack digital marketing agency" name="keywords">
  <meta name="theme-color" content="#18505f">
 <meta  name="simpledcver"  content="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkb21haW4iOiJjbG91ZGhvdXNlYmQuY29tIiwiZXhwIjoxNjY4OTg4ODAwfQ.nkk7TGrdpAvaOHVdWNIthhmjTNiKayTW3xaYptYG0QU">


  <meta property="og:url"                content="https://cloudhousebd.com" />
  <meta property="og:type"               content="website" />
  <meta property="og:title"              content="Cloud House&trade; Technologies Bangladesh - Complete IT Service and Business Solution" />
  <meta property="og:description"        content="We are actively participating in the market with IT Services and Business Solutions since 2017."/>
  <meta property="og:image"              content="https://cloudhousebd.com/logo.png" />
  <meta property="og:image:alt"          content="Cloud House&trade;" />
  <meta property="fb:app_id"             content="223274071563650" />

  <link rel="canonical" href="https://cloudhousebd.com" />

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">


  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ url('build/assets/app-D-sv12UV.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/login.css') }}">
</head>
<body>
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 login-section-wrapper">
          <div class="brand-wrapper">
           <a href="{{ url('/') }}"><img src="assets/images/logo.svg" alt="logo" class="logo"></a>
          </div>
          <div class="login-wrapper my-auto">
            <h3 class="login-title">LOG IN</h3>
            <form action="{{ route('login') }}" method="POST">
                @csrf
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="email@example.com">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group mb-4 pt-2">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="enter your passsword">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="d-grid gap-2">
                  <input name="login" id="login" class="btn btn-block login-btn" type="submit" value="Login">
              </div>
            </form>
            @if (Route::has('password.request'))
                <a class="forgot-password-link" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
            @endif

            <p class="login-wrapper-footer-text">Don't have an account? <a href="{{ route('register') }}" class="text-reset">Register here</a></p>
          </div>
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="{{ url('assets/images/login.jpg') }}" alt="login image" class="login-img">
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="{{ url('build/assets/app-BkDPDVeP.js') }}"></script>
</body>
</html>
