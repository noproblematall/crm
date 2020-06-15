<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="author" content="Yuyuan">

    <title>Login</title>

    <!-- vendor css -->
    <link href="{{asset('lib/_fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{asset('css/bracket.css')}}">
    <link rel="stylesheet" href="{{asset('css/bracket.oreo.css')}}">
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center bg-primary ht-100v" id="app">

      <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> ECO ENERGY <span class="tx-primary">CRM</span> <span class="tx-normal">]</span></div>
        <div class="tx-center mg-b-30 mg-t-20">Sign in to your account</div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control @error('name') is-invalid @enderror"  value="{{ old('name') }}"  required autofocus name="name" placeholder="Enter your name">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div><!-- form-group -->
            <div class="form-group">
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Enter your password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div><!-- form-group -->
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </form>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

    <script src="{{asset('js/app.js')}}"></script>
    {{-- <script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script> --}}

  </body>
</html>
