@extends('layouts.app')
@section('title')
login to invest
@endsection
@section('content')
 <section id="contact" style="background-color:#daa250">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Login</h2>
                    <h3 class="section-subheading text-muted">Please Login now to proceed</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form role="form" method="POST" action="{{url('/register')}}" id="contactForm" novalidate>
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <input type="text" class="form-control" placeholder="Email Address *" name="name" id="name" value="{{old('name')}}">
                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                
                            </div>
                             <div class="col-md-6">
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input type="password" class="form-control" placeholder="Your Password *" name="password" >
                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me

                                    </label>
                                </div>
                            </div>
                        </div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl"><i class="fa fa-btn fa-user"></i>Login</button>
                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
 
@endsection

