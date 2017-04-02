@extends('layouts.app')
<!-- Main Content -->
@section('title')
login to invest
@endsection
@section('content')
 <section id="contact" style="background-color:#daa250">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">reset password</h2>
                    <h3 class="section-subheading text-muted">enter your email</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form role="form" method="POST" action="{{url('/register')}}" id="contactForm" novalidate>
                        {{ csrf_field() }}
                        <div class="row">
                          
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <input type="text" class="form-control" placeholder="Email Address *" name="name" id="name" value="{{old('name')}}">
                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            
                            <div class="clearfix"></div>
                            
                           
                        </div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">send password reset link</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
 
@endsection
