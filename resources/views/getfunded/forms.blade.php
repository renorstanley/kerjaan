@extends('layouts.app')
@section('title')
register to invest
@endsection
@section('content')
<section id="contact" style="background-color:#daa250">
    <div class="container">
        @if(!Auth::check())  
        <div class="row">
              <div class="col-lg-12 text-center">
                <h2 class="section-heading">Hey!</h2>
                <h3 class="section-subheading text-muted">Please register to our service first, thank you!</h3>
            </div>
        </div>
        @else 
        @if(Auth::user()->clients()->count()==1)
        <div class="row">
              <div class="col-lg-12 text-center">
                <h2 class="section-heading">Hey!</h2>
                <h3 class="section-subheading text-muted">You have been registered yourself to be funded, you only need to do it once!</h3>
            </div>
        </div>  
        @else
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Wanna Get Funded?</h2>
                <h3 class="section-subheading text-muted">fill your further information here, so you will really join us!</h3>
            </div>
        </div> 
        <div class="row">
            <div class="col-lg-12">
                <form role="form" method="POST" action="{{url('client')}}" enctype="multipart/form-data" novalidate>
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('full_name') ? ' has-error' : '' }}">
                                @if(Auth::check()) 
                                <input type="text" class="form-control" placeholder="name *" name="full_name" id="name" value="{{Auth::user()->name}}">
                                @else
                                <input type="text" class="form-control" placeholder="name *" name="full_name" id="name"> 
                                @endif
                                @if ($errors->has('full_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('full_name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                @if(Auth::check())
                                <input type="email" class="form-control" name="email" placeholder="Your Email *" id="email" value="{{Auth::user()->email}}">
                                @else
                                <input type="email" class="form-control" name="email" placeholder="Your Email *" id="email" >
                                @endif
                                @if ($errors->has('email'))
                                <span class="help-block">
                                     <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>      
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('mobile_number') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" name="mobile_number" placeholder="Your mobile number *" id="mobile_number" value="{{old('mobile_number')}}">
                                @if ($errors->has('mobile_number'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('mobile_number') }}</strong>
                                </span>
                                @endif
                            </div>      
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-6">
                                <div class="row">
                            <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}" >
                                <select class="form-control" name="country">
                                    <option value="" selected>Select your country *</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antartica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Congo">Congo, the Democratic Republic of the</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                                    <option value="Croatia">Croatia (Hrvatska)</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="East Timor">East Timor</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="France Metropolitan">France, Metropolitan</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories">French Southern Territories</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                                    <option value="Holy See">Holy See (Vatican City State)</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran">Iran (Islamic Republic of)</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
                                    <option value="Korea">Korea, Republic of</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Lao">Lao People's Democratic Republic</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon" >Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macau">Macau</option>
                                    <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia">Micronesia, Federated States of</option>
                                    <option value="Moldova">Moldova, Republic of</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russia">Russian Federation</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                                    <option value="Saint LUCIA">Saint LUCIA</option>
                                    <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia (Slovak Republic)</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                                    <option value="Span">Spain</option>
                                    <option value="SriLanka">Sri Lanka</option>
                                    <option value="St. Helena">St. Helena</option>
                                    <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syria">Syrian Arab Republic</option>
                                    <option value="Taiwan">Taiwan, Province of China</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania">Tanzania, United Republic of</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks and Caicos">Turks and Caicos Islands</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Vietnam">Viet Nam</option>
                                    <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                    <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                                    <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                                    <option value="Western Sahara">Western Sahara</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Yugoslavia">Yugoslavia</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                                @if ($errors->has('country'))
                                <span class="help-block">
                                    {{ $errors->first('country') }}
                                </span>
                                @endif
                            </div> 
                            </div>     
                        </div>
                         <div class="col-md-6">
                            <div class="row">
                            <div class="form-group{{ $errors->has('currency') ? ' has-error' : '' }}" >
                                <select class="form-control" name="currency">
                                    <option value="" selected> select your will-applied currency * </option>
                                    <option value="USD"> USD </option>
                                    <option value="IDR">IDR</option>
                                    <option value="JPY">JPY</option>
                                   
                                </select>
                                @if ($errors->has('currency'))
                                <span class="help-block">
                                    {{ $errors->first('currency') }}
                                </span>
                                @endif
                            </div>      
                        </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
                               
                                <input type="text" class="form-control" name="company" placeholder="Your Company *" id="mobile_number" value="{{old('company')}}">
                                @if ($errors->has('company'))
                                <span class="help-block">
                                    {{ $errors->first('company') }}
                                </span>
                                @endif
                            </div>      
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-6">
                                <div class="row">
                                <div class="form-group{{ $errors->has('industry') ? ' has-error' : '' }}">
                                    <input type="text" class="form-control" name="industry" placeholder="Your industry *" id="mobile_number" value="{{old('industry')}}">
                                    @if ($errors->has('industry'))
                                    <span class="help-block">
                                        {{ $errors->first('industry') }}
                                    </span>
                                    @endif
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                
                                <div class="form-group{{ $errors->has('year_established') ? ' has-error' : '' }}">
                                    <input type="text" class="form-control" name="year_established" placeholder="Year Established *" id="mobile_number" value="{{old('year_established')}}">
                                    @if ($errors->has('year_established'))
                                    <span class="help-block">
                                        {{ $errors->first('year_established') }}
                                    </span>
                                    @endif
                                </div>
                            </div> 
                            </div>           
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('funding_amount_req') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" name="funding_amount_req" placeholder="funding amount requirements *" id="mobile_number" value="{{old('funding_amount_req')}}">
                                @if ($errors->has('funding_amount_req'))
                                <span class="help-block">
                                    {{ $errors->first('funding_amount_req') }}
                                </span>
                                @endif
                            </div>      
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('assets_to_be_purchased') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" name="assets_to_be_purchased" placeholder="assets to be purchased *" id="mobile_number" value="{{old('assets_to_be_purchased')}}">
                                @if ($errors->has('assets_to_be_purchased'))
                                <span class="help-block">
                                     {{ $errors->first('assets_to_be_purchased') }}
                                </span>
                                @endif
                            </div>      
                        </div>
                     
                            <div class="col-md-6">
                               <div class="col-md-6">
                                <div class="row">
                                <div class="form-group{{ $errors->has('funding_period') ? ' has-error' : '' }}">
                                    <select class="form-control" name="funding_period" id="mobile_number">
                                        <option value="">Funding Period *</option>
                                        <option value="1"> 1 month </option>
                                        <option value="2"> 2 months </option>
                                        <option value="3"> 3 months </option>
                                        <option value="4"> 4 months </option>
                                        <option value="5"> 5 months </option>
                                        <option value="6"> 6 months </option>
                                        <option value="7"> 7 months </option>
                                        <option value="8"> 8 months </option>
                                        <option value="9"> 9 months </option>
                                        <option value="10"> 10 months </option>
                                        <option value="10"> 11 months </option>
                                        <option value="10"> 12 months </option>
                                    </select>
                                    @if ($errors->has('funding_period'))
                                    <span class="help-block">
                                        {{ $errors->first('funding_period') }}
                                    </span>
                                    @endif
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="form-group{{ $errors->has('purchases_order') ? ' has-error' : '' }}">
                                    <select class="form-control" name="purchases_order">
                                        <option value="0"> i don't have a purchase order </option>
                                        <option value="1"> i have  a purchase order </option>
                                    </select>
                                    @if ($errors->has('purchases_order'))
                                    <span class="help-block">
                                    </span>
                                    @endif
                                </div>     
                                </div>      
                            </div>
                        </div>
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('est_annual_revenue') ? ' has-error' : '' }}">
                                    <input type="text" class="form-control" name="est_annual_revenue" placeholder="est_annual_revenue *" id="mobile_number" value="{{old('est_annual_revenue')}}">
                                    @if ($errors->has('est_annual_revenue'))
                                    <span class="help-block">
                                         {{ $errors->first('est_annual_revenue') }}
                                    </span>
                                    @endif
                                </div>      
                            </div>
                          
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                 
                            <div class="form-group{{ $errors->has('financial_report') ? ' has-error' : '' }}">
                                <label class="form-label">attach your financial report here,(maximum file size will be 250 mb). don't worry, any of your privacy will be safe with us</label>
                                <input type="file" class="form-control" name="financial_report" placeholder="has purchases_order? *" id="mobile_number">
                                @if ($errors->has('financial_report'))
                                    <span class="help-block">
                                        {{ $errors->first('financial_report') }}
                                    </span>
                                    @endif
                            </div> 
                            </div>
                        </div>

                    <div class="clearfix"></div>
                    <div class="col-lg-12 text-center">
                        <div id="success"></div>
                        <button type="submit" class="btn btn-xl">I'm ready to Get Funded, Yeah!</button>
                    </div>
                </DIV>
                </form>
            </div>
        </div>
        @endif
        @endif
    </div>
</section>
@endsection
