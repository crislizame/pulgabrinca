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
@endsection
