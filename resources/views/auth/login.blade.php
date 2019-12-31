@extends('home')
@section('content')
    <div class="container">
        <div class="row">
            <div id="tg-content" class="tg-content">
                <div class="tg-loginsignup">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="tg-logingarea">
                            <h2>{{__('login.login_now')}}</h2>
                            <form class="tg-formtheme tg-formloging" method="POST" action="{{ route('login') }}">
                                @csrf
                                <fieldset>
                                    <div class="form-group">
                                        <input type="text" name="email" value="{{old('email')}}" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{__('login.email')}}">
                                                            @if ($errors->has('email'))
                                                                <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $errors->first('email') }}</strong>
                                                                            </span>
                                                            @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="password"  name="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{__('login.password')}}">
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $errors->first('password') }}</strong>
                                                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <div class="tg-checkbox">
                                            <input id="tg-rememberme" type="checkbox" name="rememberme" value="rememberme">
                                            <label for="tg-rememberme">{{__('login.mantenerme_logeado')}}</label>
                                        </div>
                                        <a class="tg-forgetpassword" href="javascript:void(0);">{{__('login.olvidaste_contrasena')}}</a>
                                    </div>
                                    <button class="tg-btn" type="submit">{{__('login.login')}}</button>
                                </fieldset>
                            </form>
                        </div>
                        <div class="tg-texbox">
{{--                            <p><strong>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit.</strong></p>--}}
{{--                            <p>Quis nostrud exercitation ullamcoaris nisiuate aliquip ex ea commodo consequat aute irure dolor atem reprehenderit in esse.</p>--}}
{{--                            <ul>--}}
{{--                                <li>Proident sunt in culpa qui officia</li>--}}
{{--                                <li>Deserunt mollit anim idestorum</li>--}}
{{--                                <li>Sedutana perspiciatis</li>--}}
{{--                                <li>Aunde omnis iste natus voluptatem</li>--}}
{{--                                <li>Cullamcoaris nisiutia aliquip</li>--}}
{{--                            </ul>--}}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
{{--                        <div class="tg-videobox">--}}
{{--                            <figure>--}}
{{--                                <img src="{{asset('assets/images/placeholder-02.jpg')}}" alt="image description">--}}
{{--                                <a class="tg-btnplayvideo" href="javascript:void(0);"><i class="icon-play3"></i></a>--}}
{{--                            </figure>--}}
{{--                        </div>--}}
                        <div class="tg-title">
                            <h2>{{__('login.registrate_ahora')}}</h2>
                        </div>
                        <div class="tg-haslayout">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                                    <form class="tg-formtheme tg-formregister">
                                        <fieldset>
                                            <div class="form-group tg-inputwithicon">
                                                <i class="icon-envelope"></i>
                                                <input type="email" name="email" class="form-control" placeholder="{{__('login.email')}}*">
                                            </div>
                                            <div class="form-group tg-inputwithicon">
                                                <i class="icon-lock"></i>
                                                <input type="password" name="password" class="form-control" placeholder="{{__('login.password')}}*">
                                            </div>
                                            <div class="form-group tg-inputwithicon">
                                                <i class="icon-lock"></i>
                                                <input type="password" name="retypepassword" class="form-control" placeholder="{{__('login.password_retype')}}*">
                                            </div>
                                            <div class="form-group">
                                                <div class="tg-checkbox">
                                                    <input id="tg-agree" type="checkbox" name="agree" value="agree">
                                                    <label for="tg-agree">{{__('login.accept_term')}}<a href="javascript:void(0);">{{__('login.term_condition')}}</a></label>
                                                </div>
                                            </div>
                                            <button class="tg-btn" type="button">{{__('login.register')}}</button>
                                        </fieldset>
                                    </form>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                                    <ul class="tg-sociallogingsignup">
                                        <li class="tg-googleplus">
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-google-plus"></i>
                                                <span>{{__('login.sign_in_with')}}<strong>“Google”</strong></span>
                                            </a>
                                        </li>
                                        <li class="tg-facebook">
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-facebook"></i>
                                                <span>{{__('login.sign_in_with')}}<strong>“Facebook”</strong></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--<div class="wrapper wrapper-login wrapper-login-full p-0">--}}
{{--    <div class="login-aside w-50 d-flex flex-column align-items-center justify-content-center text-center bg-white" >--}}
{{--        <h1 class="title fw-bold  mb-3">--}}
{{--            <img src="{{env('APP_URL').'/storage/'.setting('site.logo')}}" class="img-circle w-100" alt="">--}}
{{--        </h1>--}}
{{--        <p class="subtitle text-dark op-7 font-weight-bold">Powered by--}}
{{--        <br><img src="{{asset('assets/img/a.png')}}" class="img-circle w-25" alt=""></p>--}}
{{--    </div>--}}
{{--    <div class="login-aside w-50 d-flex align-items-center justify-content-center bg-secondary-gradient text-white">--}}
{{--        <div class="container container-login container-transparent animated fadeIn ">--}}
{{--            <h3 class="text-center">Ingresar al Panel de Control</h3>--}}
{{--            <div class="login-form">--}}
{{--                <form method="POST" action="{{ route('login') }}">--}}
{{--                    @csrf--}}
{{--                <div class="form-group te">--}}
{{--                    <label for="username" class="placeholder text-white"><b>{{ __('Nombre de Usuario') }}</b></label>--}}
{{--                    <input id="username" name="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" value="{{ old('username') }}" required autofocus>--}}
{{--                    @if ($errors->has('username'))--}}
{{--                        <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $errors->first('username') }}</strong>--}}
{{--                                    </span>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="password"  class="placeholder text-white"><b>{{ __('Contraseña') }}</b></label>--}}

{{--                    @if (Route::has('password.request'))--}}
{{--                        <a tabindex="-1" class="link float-right bg-white pl-1 pr-1 " style="border-radius: 10px" href="{{ route('password.request') }}">--}}
{{--                            {{ __('Olvidaste tu Contraseña?') }}--}}
{{--                        </a>--}}
{{--                    @endif--}}
{{--                    <div class="position-relative">--}}
{{--                        <input id="password" name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required>--}}
{{--                        <div class="show-password">--}}
{{--                            <i class="icon-eye"></i>--}}
{{--                        </div>--}}
{{--                        @if ($errors->has('password'))--}}
{{--                            <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $errors->first('password') }}</strong>--}}
{{--                                    </span>--}}
{{--                        @endif--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="form-group form-action-d-flex mb-3">--}}
{{--                    <div class="custom-control custom-checkbox">--}}
{{--                        <input type="checkbox" class="custom-control-input" id="rememberme">--}}
{{--                        <label class="custom-control-label m-0 text-white" for="rememberme">{{ __('Recuerdame') }}</label>--}}
{{--                    </div>--}}
{{--                    <button type="submit" href="#" class="btn btn-primary col-md-5 float-right mt-3 mt-sm-0 fw-bold">{{ __('Ingresar') }}</button>--}}
{{--                </div>--}}
{{--                <!--div class="login-account">--}}
{{--                    <span class="msg">Don't have an account yet ?</span>--}}
{{--                    <a href="#" id="show-signup" class="link">{{ __('Registrarme') }}</a>--}}
{{--                </div-->--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="container container-signup container-transparent animated fadeIn">--}}
{{--            <h3 class="text-center">Sign Up</h3>--}}
{{--            <div class="login-form">--}}
{{--                <div class="form-group">--}}
{{--                    <label for="fullname" class="placeholder"><b>Fullname</b></label>--}}
{{--                    <input  id="fullname" name="fullname" type="text" class="form-control" required>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="email" class="placeholder"><b>Email</b></label>--}}
{{--                    <input  id="email" name="email" type="email" class="form-control" required>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="passwordsignin" class="placeholder"><b>Password</b></label>--}}
{{--                    <div class="position-relative">--}}
{{--                        <input  id="passwordsignin" name="passwordsignin" type="password" class="form-control" required>--}}
{{--                        <div class="show-password">--}}
{{--                            <i class="icon-eye"></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="confirmpassword" class="placeholder"><b>Confirm Password</b></label>--}}
{{--                    <div class="position-relative">--}}
{{--                        <input  id="confirmpassword" name="confirmpassword" type="password" class="form-control" required>--}}
{{--                        <div class="show-password">--}}
{{--                            <i class="icon-eye"></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row form-sub m-0">--}}
{{--                    <div class="custom-control custom-checkbox">--}}
{{--                        <input type="checkbox" class="custom-control-input" name="agree" id="agree">--}}
{{--                        <label class="custom-control-label" for="agree">I Agree the terms and conditions.</label>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row form-action">--}}
{{--                    <div class="col-md-6">--}}
{{--                        <a href="#" id="show-signin" class="btn btn-danger btn-link w-100 fw-bold">Cancel</a>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6">--}}
{{--                        <a href="#" class="btn btn-secondary w-100 fw-bold">Sign Up</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--    a--}}
@endsection
