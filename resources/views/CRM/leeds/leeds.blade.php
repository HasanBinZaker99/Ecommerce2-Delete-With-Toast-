@extends('CRM.layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="py-2 bg-white">
        <div class="card col-md-12 mx-auto bg-white">
            <h3 class="text-success text-center">{{Session::get('message')}}</h3>
        <div class="row">
            <div class="col-sm-6 bg-white">
            <div class="card bg-white">
                <div class="card-header">Company Details</div>
                <div class="card-body">
                    <form  action="{{route('newLeeds')}}" method="POST" enctype="multipart/form-data">
                       @csrf
                        <div class="form-group row mb-2">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Company/ClientName<span style='color: #ff0000;'>*</span></label>
                            <div class="col-sm-9 input-group">
                                <span class="input-group-text bg-white"><i class="fa-solid fa-hotel" style="color:#dc143c"></i></span>
                                <input id="text" type="text" required class="form-control bg-white extra" name="clientName" placeholder="Company">
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="name" class="col-sm-3 col-form-label">Leeds Group<span style='color: red;'>*</span></label>
                            <div class="col-sm-9 input-group">
                                <span class="input-group-text bg-white"><i class="fa-solid fa-group-arrows-rotate" style="color:#dc143c"></i></span>
                                <select class="form-control" required name="leedsGroupId">
                                    <option>Search Group</option>
                                    @foreach($groups as $group)
                                    <option value="{{$group->id}}">{{$group->leedsGroupName}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Phone<span style='color: red;'>*</span></label>
                            <div class="col-sm-9 input-group">
                                <span class="input-group-text bg-white"><i class="fa-solid fa-phone" style="color:#4666ff"></i></span>
                                <input id="phone" type="number" required class="form-control bg-white" name="phoneNo" placeholder="phone">
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9 input-group">
                                <span class="input-group-text bg-white"><i class="fa-solid fa-envelope" style="color:#4666ff"></i></span>
                                <input id="email" type="email" class="form-control bg-white" name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Street<span style='color: red;'>*</span></label>
                            <div class="col-sm-9 input-group">
                                <span class="input-group-text bg-white"><i class="fa-solid fa-address-card" style="color:#dc143c"></i></span>
                                <textarea id="street" required class="form-control bg-white" name="area" placeholder="address"></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">City</label>
                            <div class="col-sm-9 input-group">
                                <span class="input-group-text bg-white"><i class="fa-solid fa-city" style="color:#dc143c "></i></span>
                                <input id="city" type="text" class="form-control bg-white" name="address" placeholder="city">
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">State</label>
                            <div class="col-sm-9 input-group search_select_box">
                                <span class="input-group-text bg-white"><i class="fa-solid fa-earth-africa" style="color:#4666ff"></i> </span>
                                <select id="state" class="form-control bg-white" name="district" data-live-search="true">
                                <option value="select District" >select District</option>
                                    <option value="Dhaka" selected>Dhaka</option>
                                    <option value="AX">Rajshahi</option>
                                    <option value="AL">Bogra</option>
                                    <option value="AL">Naogoan</option>
                                    <option value="AL">Sylhet</option>
                                    <option value="AL">Rangpur</option>
                                    <option value="AL">Dinajpur</option>
                                    <option value="AL">Syedpur</option>
                                    <option value="AL">Lalmonirhat</option>
                                    <option value="AL">Joypurhat</option>
                                    <option value="AL">Chapai</option>
                                    <option value="AL">natore</option>
                                    <option value="AL">Thakurgoan</option>
                                    <option value="AL">Narsingdi</option>
                                    <option value="AL">Bhola</option>
                                    <option value="AL">Chattogram</option>
                                    <option value="AL">Rangamati</option>
                                    <option value="AL">Khagrachori</option>
                                    <option value="AL">Cumilla</option>
                                    <option value="AL">Borishal</option>
                                    <option value="AL">Khulna</option>
                                    <option value="AL">Jashore</option>
                                    <option value="AL">Kustia</option>
                                    <option value="AL">Munshigonj</option>
                                    <option value="AL">Kishoregonj</option>
                                    <option value="AL">Jamalpur</option>
                                    <option value="AL">Tangail</option>
                                    <option value="AL">Sirajgong</option>
                                    <option value="AL">Pabna</option>
                                    <option value="AL">Madaripur</option>
                                    <option value="AL">Foridpur</option>
                                    <option value="AL">Gopalgonj</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Zip Code</label>
                            <div class="col-sm-9 input-group">
                                <span class="input-group-text bg-white"><i class="fa-solid fa-code-fork" style="color:#4666ff  "></i></span>
                                <input id="zip" type="number" class="form-control bg-white" name="zipCode" placeholder="zipcode">
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Website</label>
                            <div class="col-sm-9 input-group">
                                <span class="input-group-text bg-white"><i class="icofont-ui-browser" style="color:#dc143c  "></i></span>
                                <input id="website" type="text" class="form-control bg-white" name="website" placeholder="website">
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Logo/Photo</label>
                            <div class="col-sm-9 input-group">
                                <span class="input-group-text bg-white"><i class="fa-brands fa-drupal fa-lg" style="color:#dc143c "></i></span>
                                <input id="logo" type="file" class="form-control bg-white" name="logo" accept="image/*">
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="country" class="col-sm-3 col-form-label">Country</label>
                            <div class="col-sm-9 input-group search_select_box">
                                <span class="input-group-text bg-white"><i class="fa-solid fa-flag " style="color:#4666ff  "></i></span>
                                <select id="country" class="form-control  bg-white" name="country" data-live-search="true">
                                    <option>select country</option>
                                    <option value="AF">Afghanistan</option>
                                    <option value="AX">Aland Islands</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AS">American Samoa</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AQ">Antarctica</option>
                                    <option value="AG">Antigua and Barbuda</option>
                                    <option value="AR">Argentina</option>
                                    <option value="AM">Armenia</option>
                                    <option value="AW">Aruba</option>
                                    <option value="AU">Australia</option>
                                    <option value="AT">Austria</option>
                                    <option value="AZ">Azerbaijan</option>
                                    <option value="BS">Bahamas</option>
                                    <option value="BH">Bahrain</option>
                                    <option value="BD">Bangladesh</option>
                                    <option value="BB">Barbados</option>
                                    <option value="BY">Belarus</option>
                                    <option value="BE">Belgium</option>
                                    <option value="BZ">Belize</option>
                                    <option value="BJ">Benin</option>
                                    <option value="BM">Bermuda</option>
                                    <option value="BT">Bhutan</option>
                                    <option value="BO">Bolivia</option>
                                    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                    <option value="BA">Bosnia and Herzegovina</option>
                                    <option value="BW">Botswana</option>
                                    <option value="BV">Bouvet Island</option>
                                    <option value="BR">Brazil</option>
                                    <option value="IO">British Indian Ocean Territory</option>
                                    <option value="BN">Brunei Darussalam</option>
                                    <option value="BG">Bulgaria</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="BI">Burundi</option>
                                    <option value="KH">Cambodia</option>
                                    <option value="CM">Cameroon</option>
                                    <option value="CA">Canada</option>
                                    <option value="CV">Cape Verde</option>
                                    <option value="KY">Cayman Islands</option>
                                    <option value="CF">Central African Republic</option>
                                    <option value="TD">Chad</option>
                                    <option value="CL">Chile</option>
                                    <option value="CN">China</option>
                                    <option value="CX">Christmas Island</option>
                                    <option value="CC">Cocos (Keeling) Islands</option>
                                    <option value="CO">Colombia</option>
                                    <option value="KM">Comoros</option>
                                    <option value="CG">Congo</option>
                                    <option value="CD">Congo, Democratic Republic of the Congo</option>
                                    <option value="CK">Cook Islands</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="CI">Cote D'Ivoire</option>
                                    <option value="HR">Croatia</option>
                                    <option value="CU">Cuba</option>
                                    <option value="CW">Curacao</option>
                                    <option value="CY">Cyprus</option>
                                    <option value="CZ">Czech Republic</option>
                                    <option value="DK">Denmark</option>
                                    <option value="DJ">Djibouti</option>
                                    <option value="DM">Dominica</option>
                                    <option value="DO">Dominican Republic</option>
                                    <option value="EC">Ecuador</option>
                                    <option value="EG">Egypt</option>
                                    <option value="SV">El Salvador</option>
                                    <option value="GQ">Equatorial Guinea</option>
                                    <option value="ER">Eritrea</option>
                                    <option value="EE">Estonia</option>
                                    <option value="ET">Ethiopia</option>
                                    <option value="FK">Falkland Islands (Malvinas)</option>
                                    <option value="FO">Faroe Islands</option>
                                    <option value="FJ">Fiji</option>
                                    <option value="FI">Finland</option>
                                    <option value="FR">France</option>
                                    <option value="GF">French Guiana</option>
                                    <option value="PF">French Polynesia</option>
                                    <option value="TF">French Southern Territories</option>
                                    <option value="GA">Gabon</option>
                                    <option value="GM">Gambia</option>
                                    <option value="GE">Georgia</option>
                                    <option value="DE">Germany</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GI">Gibraltar</option>
                                    <option value="GR">Greece</option>
                                    <option value="GL">Greenland</option>
                                    <option value="GD">Grenada</option>
                                    <option value="GP">Guadeloupe</option>
                                    <option value="GU">Guam</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="GG">Guernsey</option>
                                    <option value="GN">Guinea</option>
                                    <option value="GW">Guinea-Bissau</option>
                                    <option value="GY">Guyana</option>
                                    <option value="HT">Haiti</option>
                                    <option value="HM">Heard Island and Mcdonald Islands</option>
                                    <option value="VA">Holy See (Vatican City State)</option>
                                    <option value="HN">Honduras</option>
                                    <option value="HK">Hong Kong</option>
                                    <option value="HU">Hungary</option>
                                    <option value="IS">Iceland</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IR">Iran, Islamic Republic of</option>
                                    <option value="IQ">Iraq</option>
                                    <option value="IE">Ireland</option>
                                    <option value="IM">Isle of Man</option>
                                    <option value="IL">Israel</option>
                                    <option value="IT">Italy</option>
                                    <option value="JM">Jamaica</option>
                                    <option value="JP">Japan</option>
                                    <option value="JE">Jersey</option>
                                    <option value="JO">Jordan</option>
                                    <option value="KZ">Kazakhstan</option>
                                    <option value="KE">Kenya</option>
                                    <option value="KI">Kiribati</option>
                                    <option value="KP">Korea, Democratic People's Republic of</option>
                                    <option value="KR">Korea, Republic of</option>
                                    <option value="XK">Kosovo</option>
                                    <option value="KW">Kuwait</option>
                                    <option value="KG">Kyrgyzstan</option>
                                    <option value="LA">Lao People's Democratic Republic</option>
                                    <option value="LV">Latvia</option>
                                    <option value="LB">Lebanon</option>
                                    <option value="LS">Lesotho</option>
                                    <option value="LR">Liberia</option>
                                    <option value="LY">Libyan Arab Jamahiriya</option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LT">Lithuania</option>
                                    <option value="LU">Luxembourg</option>
                                    <option value="MO">Macao</option>
                                    <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
                                    <option value="MG">Madagascar</option>
                                    <option value="MW">Malawi</option>
                                    <option value="MY">Malaysia</option>
                                    <option value="MV">Maldives</option>
                                    <option value="ML">Mali</option>
                                    <option value="MT">Malta</option>
                                    <option value="MH">Marshall Islands</option>
                                    <option value="MQ">Martinique</option>
                                    <option value="MR">Mauritania</option>
                                    <option value="MU">Mauritius</option>
                                    <option value="YT">Mayotte</option>
                                    <option value="MX">Mexico</option>
                                    <option value="FM">Micronesia, Federated States of</option>
                                    <option value="MD">Moldova, Republic of</option>
                                    <option value="MC">Monaco</option>
                                    <option value="MN">Mongolia</option>
                                    <option value="ME">Montenegro</option>
                                    <option value="MS">Montserrat</option>
                                    <option value="MA">Morocco</option>
                                    <option value="MZ">Mozambique</option>
                                    <option value="MM">Myanmar</option>
                                    <option value="NA">Namibia</option>
                                    <option value="NR">Nauru</option>
                                    <option value="NP">Nepal</option>
                                    <option value="NL">Netherlands</option>
                                    <option value="AN">Netherlands Antilles</option>
                                    <option value="NC">New Caledonia</option>
                                    <option value="NZ">New Zealand</option>
                                    <option value="NI">Nicaragua</option>
                                    <option value="NE">Niger</option>
                                    <option value="NG">Nigeria</option>
                                    <option value="NU">Niue</option>
                                    <option value="NF">Norfolk Island</option>
                                    <option value="MP">Northern Mariana Islands</option>
                                    <option value="NO">Norway</option>
                                    <option value="OM">Oman</option>
                                    <option value="PK">Pakistan</option>
                                    <option value="PW">Palau</option>
                                    <option value="PS">Palestinian Territory, Occupied</option>
                                    <option value="PA">Panama</option>
                                    <option value="PG">Papua New Guinea</option>
                                    <option value="PY">Paraguay</option>
                                    <option value="PE">Peru</option>
                                    <option value="PH">Philippines</option>
                                    <option value="PN">Pitcairn</option>
                                    <option value="PL">Poland</option>
                                    <option value="PT">Portugal</option>
                                    <option value="PR">Puerto Rico</option>
                                    <option value="QA">Qatar</option>
                                    <option value="RE">Reunion</option>
                                    <option value="RO">Romania</option>
                                    <option value="RU">Russian Federation</option>
                                    <option value="RW">Rwanda</option>
                                    <option value="BL">Saint Barthelemy</option>
                                    <option value="SH">Saint Helena</option>
                                    <option value="KN">Saint Kitts and Nevis</option>
                                    <option value="LC">Saint Lucia</option>
                                    <option value="MF">Saint Martin</option>
                                    <option value="PM">Saint Pierre and Miquelon</option>
                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                    <option value="WS">Samoa</option>
                                    <option value="SM">San Marino</option>
                                    <option value="ST">Sao Tome and Principe</option>
                                    <option value="SA">Saudi Arabia</option>
                                    <option value="SN">Senegal</option>
                                    <option value="RS">Serbia</option>
                                    <option value="CS">Serbia and Montenegro</option>
                                    <option value="SC">Seychelles</option>
                                    <option value="SL">Sierra Leone</option>
                                    <option value="SG">Singapore</option>
                                    <option value="SX">Sint Maarten</option>
                                    <option value="SK">Slovakia</option>
                                    <option value="SI">Slovenia</option>
                                    <option value="SB">Solomon Islands</option>
                                    <option value="SO">Somalia</option>
                                    <option value="ZA">South Africa</option>
                                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                                    <option value="SS">South Sudan</option>
                                    <option value="ES">Spain</option>
                                    <option value="LK">Sri Lanka</option>
                                    <option value="SD">Sudan</option>
                                    <option value="SR">Suriname</option>
                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                    <option value="SZ">Swaziland</option>
                                    <option value="SE">Sweden</option>
                                    <option value="CH">Switzerland</option>
                                    <option value="SY">Syrian Arab Republic</option>
                                    <option value="TW">Taiwan, Province of China</option>
                                    <option value="TJ">Tajikistan</option>
                                    <option value="TZ">Tanzania, United Republic of</option>
                                    <option value="TH">Thailand</option>
                                    <option value="TL">Timor-Leste</option>
                                    <option value="TG">Togo</option>
                                    <option value="TK">Tokelau</option>
                                    <option value="TO">Tonga</option>
                                    <option value="TT">Trinidad and Tobago</option>
                                    <option value="TN">Tunisia</option>
                                    <option value="TR">Turkey</option>
                                    <option value="TM">Turkmenistan</option>
                                    <option value="TC">Turks and Caicos Islands</option>
                                    <option value="TV">Tuvalu</option>
                                    <option value="UG">Uganda</option>
                                    <option value="UA">Ukraine</option>
                                    <option value="AE">United Arab Emirates</option>
                                    <option value="GB">United Kingdom</option>
                                    <option value="US">United States</option>
                                    <option value="UM">United States Minor Outlying Islands</option>
                                    <option value="UY">Uruguay</option>
                                    <option value="UZ">Uzbekistan</option>
                                    <option value="VU">Vanuatu</option>
                                    <option value="VE">Venezuela</option>
                                    <option value="VN">Viet Nam</option>
                                    <option value="VG">Virgin Islands, British</option>
                                    <option value="VI">Virgin Islands, U.s.</option>
                                    <option value="WF">Wallis and Futuna</option>
                                    <option value="EH">Western Sahara</option>
                                    <option value="YE">Yemen</option>
                                    <option value="ZM">Zambia</option>
                                    <option value="ZW">Zimbabwe</option>
                                </select>
                            </div>
                        </div>


                </div>
            </div>
            </div>
                <div class="col-sm-6 bg-white">

                    <div class="col-sm-12">
                        <div class="card bg-white">
                        <div class="card-header">Leed Details</div>

                        <div class="card-body">
                       <div class="form-group row mb-2">
                           <label for="name" class="col-sm-3 col-form-label">Client Priority<span style='color: red;'>*</span></label>
                           <div class="col-sm-9 input-group search_select_box ">
                               <span class="input-group-text bg-white"><i class="fa-solid fa-anchor-circle-xmark fa-lg" style="color:#4666ff"></i></span>
                               <select class="form-control  bg-white" required name="clientPriority" placeholder="priority" data-live-search="true">
                                    <option selected>Select Priority</option>
                                    <option>Important</option>
                                    <option>Normal</option>
                                    <option>Emergency</option>
                                    <option>Rejected</option>
                                </select>
                           </div>
                       </div>
                       <div class="form-group row mb-2">
                           <label for="name" class="col-sm-3 col-form-label">Client Value<span style='color: red;'>*</span></label>
                           <div class="col-sm-9 input-group search_select_box">
                               <span class="input-group-text bg-white"><i class="fa-solid fa-hill-avalanche fa-lg" style="color:#dc143c"></i></span>
                               <select class="form-control  bg-white" required name="clientValue" placeholder="value" data-live-search="true">
                                    <option>Select Value</option>
                                    <option>Low</option>
                                    <option>Medium</option>
                                    <option>High</option>
                                </select>
                           </div>
                       </div>
                    </div>
                </div>
            </div>
                    <div class="col-sm-12">
                        <div class="card">
                        <div class="card-body">
                            <div class="form-group row mb-2">
                                <label for="name" class="col-sm-3 col-form-label">Source<span style='color: red;'>*</span></label>
                                <div class="col-sm-9 input-group search_select_box">
                                    <span class="input-group-text bg-white"><i class="fa-brands fa-sourcetree fa-lg" style="color:#dc143c"></i></span>
                                    <select id="source" required class="form-control  bg-white" style="height: 50%" name="source" data-live-search="true">
                                        <option>select source</option>
                                        <option>Google</option>
                                        <option>Facebook</option>
                                        <option>Twitter</option>
                                        <option>LinkedIN</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                               <label for="" class="col-sm-3 col-form-label">AssignedTo<span style='color: red;'>*</span></label>
                                 <div class="col-sm-9 input-group search_select_box">
                                 <span class="input-group-text bg-white"><i class="fa-brands fa-atlassian fa-lg" style="color:#4666ff "></i></span>
                                     <select class="form-control" required name="assignedTo" data-live-search="true">
                                         <option>Select Value</option>
                                         @foreach($users as $user)
                                             <option value="{{$user->id}}">{{$user->name}}</option>
                                         @endforeach
                                     </select>
                                 </div>
                            </div>
                            <div class="form-group row mb-2">
                               <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Comment</label>
                                 <div class="col-sm-9 input-group">
                                 <span class="input-group-text bg-white"><i class="fa-solid fa-comment fa-lg" style="color:#4666ff"></i></span>
                                 <textarea type="text" id="description" class="form-control bg-white" name="comment" placeholder="comment"></textarea>
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="name" class="col-sm-3 col-form-label">Status</label>
                                <div class="col-sm-9 input-group search_select_box">
                                    <span class="input-group-text bg-white"><i class="fa-solid fa-arrow-up-from-water-pump fa-lg" style="color:#dc143c"></i></span>
                                    <select id="status" class="form-control " name="status" data-live-search="true">
                                        <option>select</option>
                                        <option value="AF">New</option>
                                        <option value="AX">Senior</option>

                                    </select>
                                </div>
                            </div>

                        </div>
                        </div>
                    </div>
                    </div>


            </div>
        </div>
        <div class="col-md-7 card-footer">
            <div class="">
                <button type="submit" class="btn btn-success float-right">Save</button>
            </div>
        </div>
        </form>




    </section>


  </div>
  <!-- /.content-wrapper -->

  @endsection
