@extends('layouts.app')

@section('content')
 <section id="contact" style="background-color:#daa250">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Register</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form role="form" method="POST" action="{{url('/register')}}" id="contactForm" novalidate>
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <input type="text" class="form-control" placeholder="name *" name="name" id="name" value="{{old('name')}}">
                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input type="password" class="form-control" placeholder="Your Password *" name="password" >
                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" value="{{old('email')}}">
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('confirmpassword') ? ' has-error' : '' }}">
                                    <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm your password *">
                                    @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl"><i class="fa fa-btn fa-user"></i>Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
 
@endsection
