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
                <h2 class="color-brand-1 mb-15 wow animate__animated animate__fadeIn" data-wow-delay=".0s">Create an account</h2>
                <p class="font-md color-grey-500 wow animate__animated animate__fadeIn" data-wow-delay=".0s">Create an account today and start using our platform</p>
                @include('frontend.include.message')
                <div class="line-register mt-25 mb-50"></div>
                  <form action="{{url('register')}}" method="post">
                    @csrf                 
                    <div class="row wow animate__animated animate__fadeIn" data-wow-delay=".0s">                 
                      <div class="col-lg-6 col-sm-6">
                        <div class="form-group mb-25">
                          <input type="name" class="form-control icon-name" placeholder="Name" name="name" value="{{ old('name') }}" required>
                            <i class="ik ik-user"></i>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror                          
                        </div>
                      </div>
                      <div class="col-lg-6 col-sm-6">
                        <div class="form-group mb-25">
                          <input type="email" class="form-control icon-email" placeholder="Email" name="email" value="{{ old('email') }}" required>
                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror                           
                        </div>
                      </div>
                      <div class="col-lg-6 col-sm-6">
                        <div class="form-group mb-25">
                          <input type="number" class="form-control" placeholder="Phone" name="phone" value="{{ old('phone') }}" required>
                          @error('phone')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror                           
                        </div>
                      </div>
                      <div class="col-lg-6 col-sm-6">
                        <div class="form-group mb-25">
                          <input type="text" class="form-control" placeholder="Username" name="username" value="{{ old('username') }}" required>
                          @error('username')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror                           
                        </div>
                      </div>
                      <div class="col-lg-6 col-sm-6">
                        <div class="form-group mb-25">
                          <input type="password" class="form-control icon-password" placeholder="Password" name="password" required>
                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror                           
                        </div>
                      </div>
                      <div class="col-lg-6 col-sm-6">
                        <div class="form-group mb-25">
                          <input type="password" class="form-control icon-password" placeholder="Confirm Password" name="password_confirmation" required>
                          @error('password_confirmation')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror                          
                        </div>
                      </div>
                      <div class="col-lg-12 mt-15">
                        <div class="form-group mb-25">
                          <label class="cb-container">
                            <input type="checkbox" checked="checked"><span class="text-small">I have read and agree to the Terms & Conditions and the Privacy Policy of this website.</span><span class="checkmark"></span>
                          </label>
                        </div>
                      </div>
                    </div>                  
                    <div class="row align-items-center mt-30 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                      <div class="col-xl-5 col-lg-5 col-md-5 col-sm-6 col-6">
                        <div class="form-group">
                          <button class="btn btn-brand-lg btn-full font-md-bold" type="submit">Sign up now</button>
                        </div>
                      </div>
                      <div class="col-xl-7 col-lg-7 col-md-7 col-sm-6 col-6"><span class="d-inline-block align-middle font-sm color-grey-500">Already have an account?</span><a class="d-inline-block align-middle color-success ml-3" href="{{ route('login') }}"> Sign In</a></div>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
@endsection