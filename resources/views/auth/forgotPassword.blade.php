{{-- @extends('layout')
  
@section('content') --}}


{{-- <main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Reset Password</div>
                  <div class="card-body">
  
                    @if (Session::has('message'))
                         <div class="alert alert-success" role="alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif
  
                      <form action="{{ route('forgot.password.post') }}" method="POST">
                          @csrf
                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                              <div class="col-md-12">
                                  <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                              </div>
                          </div>
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Send Password Reset Link
                              </button>
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main> --}}

<div class="">
    <!-- Theme-Layout -->

    <!-- CONTAINER OPEN -->
    <div class="col col-login mx-auto">
        <div class="text-center">
            <a href="/"><img src="../assets/images/brand/logo-white.png" class="header-brand-img m-0" alt=""></a>
        </div>
    </div>

    <!-- CONTAINER OPEN -->
    <div class="container-login100">
        <div class="wrap-login100 p-6">
            <form class="login100-form validate-form" method="POST" action="{{ route('forgot.password.post') }}" >
                @csrf
                <span class="login100-form-title pb-5">
                    Forgot Password
                </span>
                @if (Session::has('message'))
                         <div class="alert alert-success" role="alert">
                            {{ Session::get('message') }}
                        </div>
                @elseif ($errors->has('email'))
                <div class="alert alert-danger" role="alert">
                    {{ $errors->first('email') }}
                </div>
                
                 @endif
                
                <p class="text-muted">Enter the email address registered on your account</p>
                <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                        <i class="zmdi zmdi-email" aria-hidden="true"></i>
                    </a>
                    <input id="email_address" name="email" class="input100 border-start-0 ms-0 form-control" value="{{old('email')}}" type="email" placeholder="Email" required autofocus>
                    
                </div>
                {{-- @if ($errors->has('email'))
                        <span class="text-danger" style="margin-bottom: 20px;">{{ $errors->first('email') }}</span>
                    @endif --}}
                <div class="submit">
                    <button class="btn btn-primary d-grid" style="width: 100%" type="submit">Submit</button>
                </div>
                <div class="text-center mt-4">
                    <p class="text-dark mb-0 d-inline-flex"> Sign In Instead ?<a class="text-primary ms-1" href="/login">Sign In</a></p>
                </div>
                {{-- <label class="login-social-icon"><span>OR</span></label>
                <div class="d-flex justify-content-center">
                    <a href="javascript:void(0)">
                        <div class="social-login me-4 text-center">
                            <i class="fa fa-google"></i>
                        </div>
                    </a>
                    <a href="javascript:void(0)">
                        <div class="social-login me-4 text-center">
                            <i class="fa fa-facebook"></i>
                        </div>
                    </a>
                    <a href="javascript:void(0)">
                        <div class="social-login text-center">
                            <i class="fa fa-twitter"></i>
                        </div>
                    </a>
                </div> --}}
            </form>
        </div>
    </div>
</div>
{{-- @endsection --}}
