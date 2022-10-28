@extends('layouts.frontend')

@section('content')
<section class="splash about">
        <div class="container">
            <h1>Collaborate with us</h1>
        </div>
    </section>
    <section class="hill-cont-bg">
        <div class="container">
            <div class="row m-0">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="bg-light-cont">
                        <div class="add-det">
                            <h4>Contact Us</h4>
                            <h6>Hily Holding Headquarters</h6>
                        </div>
                        <div class="d-flex">
                            <div class="icon-cont">
                                <object data="{{ asset('frontend/asset/img/icon/call.svg')}}" type=""></object>
                            </div>
                            <div class="text-cont d-flex flex-column justify-content-center ms-4">
                                <h6>Phone Number</h6>
                                <h5>+971 2 673 1000</h5>
                            </div>
                        </div>
                        <div class="d-flex mt-3">
                            <div class="icon-cont">
                                <object data="{{ asset('frontend/asset/img/icon/fax.svg')}}" type=""></object>
                            </div>
                            <div class="text-cont d-flex flex-column justify-content-center ms-4">
                                <h6>Fax Number</h6>
                                <h5>+971 2 673 2100</h5>
                            </div>
                        </div>
                        <div class="d-flex mt-3">
                            <div class="icon-cont">
                                <object data="{{ asset('frontend/asset/img/icon/email.svg')}}" type=""></object>
                            </div>
                            <div class="text-cont d-flex flex-column justify-content-center ms-4">
                                <h6>Email</h6>
                                <h5>info@hilyholding.com</h5>
                            </div>
                        </div>
                        <div class="d-flex mt-3">
                            <div class="icon-cont">
                                <object data="{{ asset('frontend/asset/img/icon/address.svg')}}" type=""></object>
                            </div>
                            <div class="text-cont d-flex flex-column justify-content-center ms-4">
                                <h6>Address</h6>
                                <h5>Mena Zayed, Plot 4332, PO Box 2378, Abu Dhabi</h5>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light-cont map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d464639.97554770915!2d53.85627335!3d24.520088999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e66e1570f73ab%3A0xe2e6c91f52c93a8f!2sZayed%20Port!5e0!3m2!1sen!2sin!4v1663053689225!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="bg-light-cont h-100">
                        <form action="" class="cont-form w-50vw">
                            <div>
                                <label for="name">Full Name<sup>*</sup></label>
                                <input type="text" name="name" id="" placeholder="Input your full name in here">
                            </div>
                            <div>
                                <label for="name">Email Address<sup>*</sup></label>
                                <input type="email" name="Email" id="" placeholder="Input your email address in here">
                            </div>
                            <div>
                                <label for="name">Phone Number<sup>*</sup></label>
                                <input type="tel" name="Phone Number" id="" placeholder="Input your phone number in here">
                            </div>
                            <div>
                                <label for="name">Your Company<sup>*</sup></label>
                                <input type="text" name="Your Company" id="" placeholder="Input your company name in here">
                            </div>
                            <div>
                                <label for="name">Your Title<sup>*</sup></label>
                                <input type="text" name="Your Title" id="" placeholder="Input your title in here">
                            </div>
                            <div class="cuntory-select">
                                <label for="country">Country of Residence<sup>*</sup></label>
                                <select name="country" id="country-career" class="form-control">
                                    <option value="" selected="" disabled="">Country of Residence*</option>
                                    <option value="Afganistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
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
                                    <option value="Bonaire">Bonaire</option>
                                    <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                    <option value="Brunei">Brunei</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Canary Islands">Canary Islands</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Channel Islands">Channel Islands</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos Island">Cocos Island</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote DIvoire">Cote DIvoire</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Curaco">Curacao</option>
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
                                    <option value="Falkland Islands">Falkland Islands</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Ter">French Southern Ter</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Great Britain">Great Britain</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Hawaii">Hawaii</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="India">India</option>
                                    <option value="Iran">Iran</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Isle of Man">Isle of Man</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Korea North">Korea North</option>
                                    <option value="Korea Sout">Korea South</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Laos">Laos</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libya">Libya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macau">Macau</option>
                                    <option value="Macedonia">Macedonia</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Midway Islands">Midway Islands</option>
                                    <option value="Moldova">Moldova</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Nambia">Nambia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherland Antilles">Netherland Antilles</option>
                                    <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                    <option value="Nevis">Nevis</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau Island">Palau Island</option>
                                    <option value="Palestine">Palestine</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Phillipines">Philippines</option>
                                    <option value="Pitcairn Island">Pitcairn Island</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Republic of Montenegro">Republic of Montenegro</option>
                                    <option value="Republic of Serbia">Republic of Serbia</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russia">Russia</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="St Barthelemy">St Barthelemy</option>
                                    <option value="St Eustatius">St Eustatius</option>
                                    <option value="St Helena">St Helena</option>
                                    <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                    <option value="St Lucia">St Lucia</option>
                                    <option value="St Maarten">St Maarten</option>
                                    <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                                    <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                                    <option value="Saipan">Saipan</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="Samoa American">Samoa American</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syria">Syria</option>
                                    <option value="Tahiti">Tahiti</option>
                                    <option value="Taiwan">Taiwan</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania">Tanzania</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Erimates">United Arab Emirates</option>
                                    <option value="United States of America">United States of America</option>
                                    <option value="Uraguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Vatican City State">Vatican City State</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Vietnam">Vietnam</option>
                                    <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                    <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                    <option value="Wake Island">Wake Island</option>
                                    <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zaire">Zaire</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                            </div>
                            <div>
                                <label for="messages">Message<sup>*</sup></label>
                                <textarea name="messages" placeholder="Write your messages in here" id="" cols="30" rows="10"></textarea>
                            </div>
                            <div><button type="submit" class="submit">Send</button></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-12 col-md-4 col-lg-4 col-xl-3">
                    <div class="locations">
                        <h4>Foodco National Foodstuff</h4>
                        <div class="d-flex mt-3">
                            <div class="icon-cont">
                                <object data="{{ asset('frontend/asset/img/icon/web-dark.svg')}}" type=""></object>
                            </div>
                            <div class="text-cont d-flex flex-column justify-content-center ms-4">
                                <h6>Website</h6>
                                <h5>fnfuae.com</h5>
                            </div>
                        </div>
                        <div class="d-flex mt-3 align-items-center">
                            <div class="icon-cont">
                                <object data="{{ asset('frontend/asset/img/icon/address-dark.svg')}}" type=""></object>
                            </div>
                            <div class="text-cont d-flex flex-column justify-content-center ms-4">
                                <h6>Address</h6>
                                <h5>Mena Zayed, Plot 4332, PO Box 2378, Abu Dhabi</h5>
                            </div>
                        </div>
                        <div class="d-flex mt-3 hover-hide-show align-items-center">
                            <div class="icon-cont">
                                <object data="{{ asset('frontend/asset/img/icon/call-dark.svg')}}" type=""></object>
                            </div>
                            <div class="text-cont d-flex flex-column justify-content-center ms-4">
                                <h6>Phone Number</h6>
                                <h5>+971 2 673 1000</h5>
                            </div>
                        </div>
                        <div class="d-flex mt-3 hover-hide-show align-items-center">
                            <div class="icon-cont">
                                <object data="{{ asset('frontend/asset/img/icon/fax-dark.svg')}}" type=""></object>
                            </div>
                            <div class="text-cont d-flex flex-column justify-content-center ms-4">
                                <h6>Fax Number</h6>
                                <h5>+971 2 673 2100</h5>
                            </div>
                        </div>
                        <div class="d-flex mt-3 hover-hide-show align-items-center">
                            <div class="icon-cont">
                                <object data="{{ asset('frontend/asset/img/icon/email-dark.svg')}}" type=""></object>
                            </div>
                            <div class="text-cont d-flex flex-column justify-content-center ms-4">
                                <h6>Email</h6>
                                <h5>info@hilyholding.com</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 col-xl-3">
                    <div class="locations">
                        <h4>Abu Dhabi  National Foodstuff</h4>
                        <div class="d-flex mt-3">
                            <div class="icon-cont">
                                <object data="{{ asset('frontend/asset/img/icon/web-dark.svg')}}" type=""></object>
                            </div>
                            <div class="text-cont d-flex flex-column justify-content-center ms-4">
                                <h6>Website</h6>
                                <h5>fnfuae.com</h5>
                            </div>
                        </div>
                        <div class="d-flex mt-3 align-items-center">
                            <div class="icon-cont">
                                <object data="{{ asset('frontend/asset/img/icon/address-dark.svg')}}" type=""></object>
                            </div>
                            <div class="text-cont d-flex flex-column justify-content-center ms-4">
                                <h6>Address</h6>
                                <h5>Mena Zayed, Plot 4332, PO Box 2378, Abu Dhabi</h5>
                            </div>
                        </div>
                        <div class="d-flex mt-3 hover-hide-show align-items-center">
                            <div class="icon-cont">
                                <object data="{{ asset('frontend/asset/img/icon/call-dark.svg')}}" type=""></object>
                            </div>
                            <div class="text-cont d-flex flex-column justify-content-center ms-4">
                                <h6>Phone Number</h6>
                                <h5>+971 2 673 1000</h5>
                            </div>
                        </div>
                        <div class="d-flex mt-3 hover-hide-show align-items-center">
                            <div class="icon-cont">
                                <object data="{{ asset('frontend/asset/img/icon/fax-dark.svg')}}" type=""></object>
                            </div>
                            <div class="text-cont d-flex flex-column justify-content-center ms-4">
                                <h6>Fax Number</h6>
                                <h5>+971 2 673 2100</h5>
                            </div>
                        </div>
                        <div class="d-flex mt-3 hover-hide-show align-items-center">
                            <div class="icon-cont">
                                <object data="{{ asset('frontend/asset/img/icon/email-dark.svg')}}" type=""></object>
                            </div>
                            <div class="text-cont d-flex flex-column justify-content-center ms-4">
                                <h6>Email</h6>
                                <h5>info@hilyholding.com</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 col-xl-3">
                    <div class="locations">
                        <h4>Oasis National Foodstuff</h4>
                        <div class="d-flex mt-3">
                            <div class="icon-cont">
                                <object data="{{ asset('frontend/asset/img/icon/web-dark.svg')}}" type=""></object>
                            </div>
                            <div class="text-cont d-flex flex-column justify-content-center ms-4">
                                <h6>Website</h6>
                                <h5>fnfuae.com</h5>
                            </div>
                        </div>
                        <div class="d-flex mt-3 align-items-center">
                            <div class="icon-cont">
                                <object data="{{ asset('frontend/asset/img/icon/address-dark.svg')}}" type=""></object>
                            </div>
                            <div class="text-cont d-flex flex-column justify-content-center ms-4">
                                <h6>Address</h6>
                                <h5>Mena Zayed, Plot 4332, PO Box 2378, Abu Dhabi</h5>
                            </div>
                        </div>
                        <div class="d-flex mt-3 hover-hide-show align-items-center">
                            <div class="icon-cont">
                                <object data="{{ asset('frontend/asset/img/icon/call-dark.svg')}}" type=""></object>
                            </div>
                            <div class="text-cont d-flex flex-column justify-content-center ms-4">
                                <h6>Phone Number</h6>
                                <h5>+971 2 673 1000</h5>
                            </div>
                        </div>
                        <div class="d-flex mt-3 hover-hide-show align-items-center">
                            <div class="icon-cont">
                                <object data="{{ asset('frontend/asset/img/icon/fax-dark.svg')}}" type=""></object>
                            </div>
                            <div class="text-cont d-flex flex-column justify-content-center ms-4">
                                <h6>Fax Number</h6>
                                <h5>+971 2 673 2100</h5>
                            </div>
                        </div>
                        <div class="d-flex mt-3 hover-hide-show align-items-center">
                            <div class="icon-cont">
                                <object data="{{ asset('frontend/asset/img/icon/email-dark.svg')}}" type=""></object>
                            </div>
                            <div class="text-cont d-flex flex-column justify-content-center ms-4">
                                <h6>Email</h6>
                                <h5>info@hilyholding.com</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 col-xl-3">
                    <div class="locations">
                        <h4>Dana Plaza Real Estate</h4>
                        <div class="d-flex mt-3">
                            <div class="icon-cont">
                                <object data="{{ asset('frontend/asset/img/icon/web-dark.svg')}}" type=""></object>
                            </div>
                            <div class="text-cont d-flex flex-column justify-content-center ms-4">
                                <h6>Website</h6>
                                <h5>fnfuae.com</h5>
                            </div>
                        </div>
                        <div class="d-flex mt-3 align-items-center">
                            <div class="icon-cont">
                                <object data="{{ asset('frontend/asset/img/icon/address-dark.svg')}}" type=""></object>
                            </div>
                            <div class="text-cont d-flex flex-column justify-content-center ms-4">
                                <h6>Address</h6>
                                <h5>Mena Zayed, Plot 4332, PO Box 2378, Abu Dhabi</h5>
                            </div>
                        </div>
                        <div class="d-flex mt-3 hover-hide-show align-items-center">
                            <div class="icon-cont">
                                <object data="{{ asset('frontend/asset/img/icon/call-dark.svg')}}" type=""></object>
                            </div>
                            <div class="text-cont d-flex flex-column justify-content-center ms-4">
                                <h6>Phone Number</h6>
                                <h5>+971 2 673 1000</h5>
                            </div>
                        </div>
                        <div class="d-flex mt-3 hover-hide-show align-items-center">
                            <div class="icon-cont">
                                <object data="{{ asset('frontend/asset/img/icon/fax-dark.svg')}}" type=""></object>
                            </div>
                            <div class="text-cont d-flex flex-column justify-content-center ms-4">
                                <h6>Fax Number</h6>
                                <h5>+971 2 673 2100</h5>
                            </div>
                        </div>
                        <div class="d-flex mt-3 hover-hide-show align-items-center">
                            <div class="icon-cont">
                                <object data="{{ asset('frontend/asset/img/icon/email-dark.svg')}}" type=""></object>
                            </div>
                            <div class="text-cont d-flex flex-column justify-content-center ms-4">
                                <h6>Email</h6>
                                <h5>info@hilyholding.com</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 col-xl-3">
                    <div class="locations">
                        <h4>Abu Dhabi National Catering</h4>
                        <div class="d-flex mt-3">
                            <div class="icon-cont">
                                <object data="{{ asset('frontend/asset/img/icon/web-dark.svg')}}" type=""></object>
                            </div>
                            <div class="text-cont d-flex flex-column justify-content-center ms-4">
                                <h6>Website</h6>
                                <h5>fnfuae.com</h5>
                            </div>
                        </div>
                        <div class="d-flex mt-3 align-items-center">
                            <div class="icon-cont">
                                <object data="{{ asset('frontend/asset/img/icon/address-dark.svg')}}" type=""></object>
                            </div>
                            <div class="text-cont d-flex flex-column justify-content-center ms-4">
                                <h6>Address</h6>
                                <h5>Mena Zayed, Plot 4332, PO Box 2378, Abu Dhabi</h5>
                            </div>
                        </div>
                        <div class="d-flex mt-3 hover-hide-show align-items-center">
                            <div class="icon-cont">
                                <object data="{{ asset('frontend/asset/img/icon/call-dark.svg')}}" type=""></object>
                            </div>
                            <div class="text-cont d-flex flex-column justify-content-center ms-4">
                                <h6>Phone Number</h6>
                                <h5>+971 2 673 1000</h5>
                            </div>
                        </div>
                        <div class="d-flex mt-3 hover-hide-show align-items-center">
                            <div class="icon-cont">
                                <object data="{{ asset('frontend/asset/img/icon/fax-dark.svg')}}" type=""></object>
                            </div>
                            <div class="text-cont d-flex flex-column justify-content-center ms-4">
                                <h6>Fax Number</h6>
                                <h5>+971 2 673 2100</h5>
                            </div>
                        </div>
                        <div class="d-flex mt-3 hover-hide-show align-items-center">
                            <div class="icon-cont">
                                <object data="{{ asset('frontend/asset/img/icon/email-dark.svg')}}" type=""></object>
                            </div>
                            <div class="text-cont d-flex flex-column justify-content-center ms-4">
                                <h6>Email</h6>
                                <h5>info@hilyholding.com</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 col-xl-3">
                    <div class="locations">
                        <h4>Nurana Properties</h4>
                        <div class="d-flex mt-3">
                            <div class="icon-cont">
                                <object data="{{ asset('frontend/asset/img/icon/web-dark.svg')}}" type=""></object>
                            </div>
                            <div class="text-cont d-flex flex-column justify-content-center ms-4">
                                <h6>Website</h6>
                                <h5>fnfuae.com</h5>
                            </div>
                        </div>
                        <div class="d-flex mt-3 align-items-center">
                            <div class="icon-cont">
                                <object data="{{ asset('frontend/asset/img/icon/address-dark.svg')}}" type=""></object>
                            </div>
                            <div class="text-cont d-flex flex-column justify-content-center ms-4">
                                <h6>Address</h6>
                                <h5>Mena Zayed, Plot 4332, PO Box 2378, Abu Dhabi</h5>
                            </div>
                        </div>
                        <div class="d-flex mt-3 hover-hide-show align-items-center">
                            <div class="icon-cont">
                                <object data="{{ asset('frontend/asset/img/icon/call-dark.svg')}}" type=""></object>
                            </div>
                            <div class="text-cont d-flex flex-column justify-content-center ms-4">
                                <h6>Phone Number</h6>
                                <h5>+971 2 673 1000</h5>
                            </div>
                        </div>
                        <div class="d-flex mt-3 hover-hide-show align-items-center">
                            <div class="icon-cont">
                                <object data="{{ asset('frontend/asset/img/icon/fax-dark.svg')}}" type=""></object>
                            </div>
                            <div class="text-cont d-flex flex-column justify-content-center ms-4">
                                <h6>Fax Number</h6>
                                <h5>+971 2 673 2100</h5>
                            </div>
                        </div>
                        <div class="d-flex mt-3 hover-hide-show align-items-center">
                            <div class="icon-cont">
                                <object data="{{ asset('frontend/asset/img/icon/email-dark.svg')}}" type=""></object>
                            </div>
                            <div class="text-cont d-flex flex-column justify-content-center ms-4">
                                <h6>Email</h6>
                                <h5>info@hilyholding.com</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection