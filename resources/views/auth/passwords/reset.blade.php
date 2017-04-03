@extends('layouts.app')

@section('content')
<section id="contact" style="background-color:#daa250">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">change/reset password</h2>
                    <h3 class="section-subheading text-muted">enter the new password you desire</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form role="form" method="POST" action="{{url('password/reset')}}" novalidate>
                        {{ csrf_field() }}
                        <div class="row">
                        <input type="hidden" name="token" value="{{ $token }}">  
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input type="text" class="form-control" placeholder="Email Address *" name="email" id="email" value="{{$email}}" readonly>
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input type="password" class="form-control" name="password" placeholder="new password *">
                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm your password *">
                                    @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">   <i class="fa fa-btn fa-refresh"></i> Reset Password</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

                
@endsection
