@extends('frontend.layout')

@section('content')
    <main class="main">
      <section class="section box-page-register">
        <div class="container">
          <div class="row">
            <div class="col-lg-5">
              <div class="box-steps-small">
                <div class="item-number hover-up active wow animate__animated animate__fadeInLeft" data-wow-delay=".0s">
                  <div class="num-ele">1</div>
                  <div class="info-num">
                    <h5 class="color-brand-1 mb-15">Register</h5>
                    <p class="font-md color-grey-500">All you need is your name, email and a strong password, Or use your social media accounts.</p>
                  </div>
                </div>
                <div class="item-number hover-up wow animate__animated animate__fadeInLeft" data-wow-delay=".1s">
                  <div class="num-ele">2</div>
                  <div class="info-num">
                    <h5 class="color-brand-1 mb-15">Activate</h5>
                    <p class="font-md color-grey-500">Use the code sent to your email to activate your account.</p>
                  </div>
                </div>
                <div class="item-number hover-up wow animate__animated animate__fadeInLeft" data-wow-delay=".2s">
                  <div class="num-ele">3</div>
                  <div class="info-num">
                    <h5 class="color-brand-1 mb-15">Open a trading account</h5>
                    <p class="font-md color-grey-500">Create a real or demo trading account on our platform. No credit card required.</p>
                  </div>
                </div>
                <div class="item-number hover-up wow animate__animated animate__fadeInLeft" data-wow-delay=".3s">
                  <div class="num-ele">4</div>
                  <div class="info-num">
                    <h5 class="color-brand-1 mb-15">Connect with investors</h5>
                    <p class="font-md color-grey-500">With a real-time analysis system you will become a professional investor.</p>
                  </div>
                </div>
                <div class="item-number hover-up wow animate__animated animate__fadeInLeft" data-wow-delay=".4s">
                  <div class="num-ele">5</div>
                  <div class="info-num">
                    <h5 class="color-brand-1 mb-15">Almost done</h5>
                    <p class="font-md color-grey-500">Start your amazing journey on our platform.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="box-register">
                <h2 class="color-brand-1 mb-15 wow animate__animated animate__fadeIn" data-wow-delay=".0s">Login</h2>
                <p class="font-md color-grey-500 wow animate__animated animate__fadeIn" data-wow-delay=".0s">Login to your account</p>
                <div class="line-register mt-25 mb-50"></div>
                  <form method="POST" action="{{ route('login') }}">
                    @csrf                   
                    <div class="col-lg-12">
                      <div class="form-group mb-25">
                          <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="admin@test.com" required autocomplete="email" autofocus>
                          <i class="ik ik-user"></i>
                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror                       
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group mb-25">
                            <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password"  value="1234" required>
                            <i class="ik ik-lock"></i>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                      </div>
                    </div>
                    <div class="col-lg-6 col-6 mt-15">
                      <div class="form-group mb-25">
                            <label class="cb-container">
                                <input type="checkbox" class="custom-control-input" id="item_checkbox" name="item_checkbox" value="option1">
                                <span class="text-small">&nbsp;Remember Me</span><span class="checkmark"></span>
                            </label>                        
                      </div>
                    </div>
                    <div class="col-lg-6 col-6 mt-15">
                      <div class="form-group mb-25 text-end"><a class="font-xs color-grey-500" href="{{url('password/forget')}}">Forgot password?</a></div>
                    </div>
                    <div class="col-lg-12 mb-25">
                      <button class="btn btn-brand-lg btn-full font-md-bold" type="submit">Sign in</button>
                    </div>
                    <div class="col-lg-12"><span class="color-grey-500 d-inline-block align-middle font-sm">
                        Don’t have an account?
                        </span><a class="d-inline-block align-middle color-success ml-3" href="{{url('register')}}">  Sign up now</a></div>
                  </form>
                </div>
                </div>
            </div>
          </div>
        </div>
      </section>
    </main>
@endsection