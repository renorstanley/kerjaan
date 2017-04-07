@extends('layouts.app')
@section('title')
register to invest
@endsection
@section('content')
<section id="contact" style="background-color:#daa250">
    <div class="container" >
        @if(Auth::user()->name!="administrator")
        <div class="row">
              <div class="col-lg-12 text-center">
                <h2 class="section-heading">Hey!</h2>
                <h3 class="section-subheading text-muted">Sorry you are restricted to open this page</h3>
            </div>
        </div>    
        @else
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Lists Of Clients</h2>
                <h3 class="section-subheading text-muted">it's from users who fills the form on getfunded navigatiom</h3>
            </div>
        </div> 
       <div style="overflow-x:auto">
              <table class="table table-hover">
    <thead>
      <tr>
        <th>name</th>
        <th>email</th>
        <th>mobile number</th>
        <th>country</th>
        <th>currency</th>
        <th>company</th>
        <th>industry</th>
        <th>year established</th>
        <th>funding ammount requirements</th>
        <th>assets to be purchased</th>
        <th>funding period</th>
        <th>est_annual_revenue</th>
        <th>has purchases order?</th>
        <th>financial report</th>

        <th>
      </tr>
    </thead>
    <tbody>
      @foreach($clients as $clients)
      <tr>
        <th>{{$clients->full_name}}</th>
        <th>{{$clients->email}}</th>
        <th>{{$clients->mobile_number}}</th>
        <th>{{$clients->country}}</th>
        <th>{{$clients->currency}}</th>
        <th>{{$clients->company}}</th>
        <th>{{$clients->industry}}</th>
        <th>{{$clients->year_established}}</th>
        <th>{{$clients->funding_amount_req}}</th>
        <th>{{$clients->assets_to_be_purchased}}</th>
        <th>{{$clients->funding_period}}</th>
        <th>{{$clients->est_annual_revenue}}</th>
        <th>{{$clients->purchases_order}}</th>
        <th><a href="{{ URL::to( '/files/' . $clients->financial_report)  }}" class="btn btn-xl" download> download</th>
        <th>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
          
        @endif
    </div>
</section>
@endsection
