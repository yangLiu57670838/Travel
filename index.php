    <?php
//require("connect.php");




              ?>
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Booking</title>
    <link rel="stylesheet" href="../book/asset/stylesheets/css/style.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="../book/asset/stylesheets/css/bootstrap-datepicker3.css">
    <link rel="stylesheet" href="../book/asset/stylesheets/css/style-flat-ui.css">

<!--    <link rel="stylesheet" href="../asset/stylesheets/css/formValidation.css">-->
    <style>
        body {
            padding-top: 20px;
        }
    </style>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>


    <script src="app.js"></script>
    <script>
$(document).ready(function(){
    $("#toggle1").click(function(){
        var x=document.getElementById("other2");
        x.value = '';
        var y=document.getElementById("memberno2");
        y.value = '';
        var z=document.getElementById("nameas2");
        z.value = '';
        var a=document.getElementById("expiry2");
        a.value = '';
        var b=document.getElementById("status2");
        b.value = '';
        var c=document.getElementById("other3");
        c.value = '';
        var d=document.getElementById("memberno3");
        d.value = '';
        var e=document.getElementById("nameas3");
        e.value = '';
        var f=document.getElementById("expiry3");
        f.value = '';
        var g=document.getElementById("status3");
        g.value = '';
       
        var tt1=document.getElementById("toggle1");
        if (tt1.innerHTML == 'Add more memberships')
            {
                tt1.innerHTML = 'Hide';
            }else
                {
                    tt1.innerHTML = 'Add more memberships';
                }

        
        $("#t1").toggle();
    });
});
</script>
    
<script>
$(document).ready(function(){
    $("#toggle2").click(function(){
          var h=document.getElementById("other3");
        h.value = '';
        var i=document.getElementById("memberno3");
        i.value = '';
        var j=document.getElementById("nameas3");
        j.value = '';
        var k=document.getElementById("expiry3");
        k.value = '';
        var l=document.getElementById("status3");
        l.value = '';
        
        var tt2=document.getElementById("toggle2");
        if (tt2.innerHTML == 'Add more memberships')
            {
                tt2.innerHTML = 'Hide';
            }else
                {
                    tt2.innerHTML = 'Add more memberships';
                }
        
        $("#t2").toggle();
        
    });
});
</script>
<script>
function validateForm() {
    var x = document.forms["myForm"]["dor"].value;
    if (x == null || x == "") {
       document.getElementById("demo").innerHTML = "Date of return is required.";
        return false;
    }
}
</script>
    <script>
function validateForm() {
    var y = document.forms["myForm"]["dod"].value;
    if (y == null || y == "") {
       document.getElementById("demo2").innerHTML = "Date of departure is required.";
        return false;
    }
}
</script>


 
    <!--[if IE]>
<script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body ng-app="myApp" ng-controller="mainCtrl">
<!--
   <div class="loader-container">
        <div class="loader-box">
            <div class="loader-lable">Loading...</div>
            <div class="loader">
                <div class="element-animation">
                    <img src="../asset/images/loader.png" width="1089" height="90";>
                </div>
            </div>
            <div class="loader-lable">Get ready to pack your bags.</div>
        </div>
    </div>
-->
    <section id="section-container">
        <div class="container">
           <div class="row">
               <div class="col-md-3 col-xs-6 column">
                   <div class="logo"></div>
               </div>
               <div class="col-md-9 col-xs-6 column" id="#top">
                   <div class="tel-progress" data-placement="bottom" data-toggle="tooltip" data-original-title="Need help? Call us now!"></div>
               </div>
           </div>
           <div class="row">

                <div class="col-lg-3 col-md-3 col-sm-4 hidden-xs column">
                    <ul class="prog-bar">
                      <li>
                         
                                <div class="icon icon-welcome"></div>
                                <div class="description">
                                    <span class="first">My Travel Profile</span>
                                    <span class="second" style="text-transform: none;">Let's get you out of here!</span>
                                </div>
                                <span class="checking"></span>
                            
                        </li>
                    </ul>
                </div>

                <div class="col-lg-9 col-md-9 col-sm-8 column">
                <div class="tab-content">
                      <div class="" id="travel">
                            <form action="welcome.php" id="travel-form" method="post" name="myForm" onsubmit="return validateForm()" novalidate>
 
<!--                            <form id="travel-form" name="myForm" ng-submit="submitForm(formName)" novalidate>    -->
                            <div class="row">
                                <div class="col-lg-4 column">
                                    <div class="form-group">
                                        <label for="fname">First Name As Per Passport</label>
                                        <input id="fname" data-validation="mand" name="fname" type="text" class="form-control" tabindex="1" ng-model="fname" required>
  <span style="color:red" ng-show="myForm.fname.$dirty && myForm.fname.$invalid">
  <span style="display: none;" ng-class="{'has-error': myForm.fname.$error.required}">First name is required.</span>
  </span>
                                    </div>

                                </div>
                                                                <div class="col-lg-4 column">
                                    <div class="form-group">
                                        <label for="lname">Middle Name/s As Per Passport</label>
                                        <input id="mname" data-validation="mand" name="mname" type="text" class="form-control" tabindex="1" ng-model="mname">
                                        
                                    </div>
                                </div>
                                <div class="col-lg-4 column">
                                    <div class="form-group">
                                        <label for="lname">Last Name As Per Passport</label>
                                        <input id="lname" data-validation="mand" name="lname" type="text" class="form-control" tabindex="1" ng-model="lname" required><span style="color:red" ng-show="myForm.lname.$dirty && myForm.lname.$invalid">
  <span style="display: none;" ng-class="{'has-error': myForm.lname.$error.required}">Last name is required.</span>
  </span>
                                        
                                    </div>
                                </div>
                            </div>
                                
                     
                                
                            <div class="row">
                                <div class="col-lg-8 column">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" data-validation="mand" name="email" type="email" class="form-control" tabindex="2" ng-model="email" required> <span style="color:red" ng-show="myForm.email.$dirty && myForm.email.$invalid">
  <span style="display: none;" ng-class="{'has-error': myForm.email.$error.required}">Email is required.</span>
  <span style="display: none;" ng-class="{'has-error': myForm.email.$error.email}">Invalid email address.</span>
  </span>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-5 column">
                                    <div class="form-group">
                                        <label for="destination">Destination City & Country</label>
                                        <input id="destination" data-validation="mand" name="destination" type="text" class="form-control" tabindex="3" ng-model="destination" required>
                                        <span style="color:red" ng-show="myForm.destination.$dirty && myForm.destination.$invalid">
  <span style="display: none;" ng-class="{'has-error': myForm.destination.$error.required}">Destination is required.</span>
  </span>
                                    </div>
                                </div>
                                <div class="col-lg-5 column">
                                    <div class="form-group">
                                        <label for="length">Intended Length Of Stay</label>
                                        <input id="length" data-validation="mand" name="length" type="text" class="form-control" tabindex="3" ng-model="length" required> 
   <span style="color:red" ng-show="myForm.length.$dirty && myForm.length.$invalid">
  <span style="display: none;" ng-class="{'has-error': myForm.length.$error.required}">Length of stay is required.</span>
  </span>
                                    </div>
                                </div>
                            </div>

                                
                                
                            <div class="row">
                             
                                
                                   <div class="col-lg-4 column">
                                    <div class="form-group">
                                        <label for="dob">  Approximate Date Of Departure</label>
                                        <div class="input-group date">
                                            <input id="dod" name="dod" data-validation="mand" type="text" class="form-control" placeholder="dd/mm/yyyy" tabindex="4" ng-model="dod"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                                        </div><span id="demo2" style="color:red;"></span>
                                    </div>
                                </div>
                           <div class="col-lg-4 column" id="dateofreturn">
                                    <div class="form-group">
                                        <label for="dor">Approximate Date Of Return</label>
                                        <div class="input-group date">
                                            <input id="dor" name="dor" data-validation="mand" type="text" class="form-control" placeholder="dd/mm/yyyy" tabindex="4" ng-model="dor"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                                        </div>  
                                        <span id="demo" style="color:red;"></span>
                                    </div>
                                </div>
                                <div class="col-lg-4 column">

                                    <div class="form-group">
                                         <label></label>
                                        <div class="checkbox">
                                            <input id="oneway" name="oneway" type="checkbox" class="checkbox-custom" value="yes" tabindex="4" onchange="myFunction()" ng-model="oneway">
                                            <label id="tc-1-lb" for="oneway" class="checkbox-custom-label">One Way Airfare Only</label>
                                          
                                        </div>
                                    </div>
                                </div>
                                
                                
                                </div>
                            <div class="row">
                              <div class="col-lg-5 column">
                                    <div class="form-group">
                                        <label for="dcountry">Departure Country</label>
                                        <select id="dcountry" name="dcountry" class="form-control" tabindex="5">
                                        <option value=""></option>
                                        <option value="Australia">Australia</option>
                                        <option value="Canada">Canada</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="Seprator">-------------------------------------</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="The Bahamas">The Bahamas</option>
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
                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="Brunei">Brunei</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="Peoples Republic of China">People's Republic of China</option>
                                        <option value="Republic of China">Republic of China</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Republic of the Congo">Republic of the Congo</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cote dIvoire">Côte d'Ivoire</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Republic of Cyprus">Republic of Cyprus</option>
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
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="The Gambia">The Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran">Iran</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Ivory Coast">Ivory Coast</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Korea">Korea</option>
                                        <option value="Korea, North">Korea, North</option>
                                        <option value="Korea, South">Korea, South</option>
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
                                        <option value="Republic of Macedonia">Republic of Macedonia</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Federated States of Micronesia">Federated States of Micronesia</option>
                                        <option value="Moldova">Moldova</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montenegro">Montenegro</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="North Korea">North Korea</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Palestine">Palestine</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russia">Russia</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                        <option value="Saint Lucia">Saint Lucia</option>
                                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="São Tomé and Príncipe">São Tomé and Príncipe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Serbia">Serbia</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="South Korea">South Korea</option>
                                        <option value="South Sudan">South Sudan</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syria">Syria</option>
                                        <option value="Taiwan">Taiwan</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania">Tanzania</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Tibet">Tibet</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Vatican City (Holy See)">Vatican City (Holy See)</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Western Sahara">Western Sahara</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zaire">Zaire</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                    </div>
                                </div>

                               <div class="col-lg-5 column">
                                    <div class="form-group">
                                        <label for="city">Departing From Which City</label>
                                        <input id="city" data-validation="mand" name="city" type="text" class="form-control" tabindex="5" ng-model="city" required>
                                        <span style="color:red" ng-show="myForm.city.$dirty && myForm.city.$invalid">
  <span style="display: none;" ng-class="{'has-error': myForm.city.$error.required}">City is required.</span>
  </span>
                                    </div>
                                </div>
                                
                                </div>
                             <div class="row">
                                    <div class="col-md-6 column">
                                        <div class="form-group">
                                            <label id="travel-before-work-lb">Preferred Seat?</label>
                                            <div class="radio">
                                               
                                                <input id="ps-no" class="radio-custom" name="ps" ng-model="ps" type="radio" value="No" tabindex="6" ng-click="checkps()">
                                                <label class="radio-custom-label" for="ps-no">No</label>
                                                 <input id="ps-yes" class="radio-custom" name="ps" ng-model="ps" type="radio" value="Yes" tabindex="6" ng-click="checkps()">
                                                <label class="radio-custom-label" for="ps-yes">Yes</label>
                                                <label>
                                                    
                                                    
                           <select id="psinput" style="width:200%;" name="psinput" class="form-control" tabindex="6" ng-disabled="disableps">
                                        <option value=""></option>
                                        <option value="Aisle">Aisle</option>
                                        <option value="Centre">Centre</option>
                                        <option value="Window">Window</option>

                                    </select>     
                                                    
<!--                                                    <input id="psinput" size="21" name="psinput" type="text" class="form-control" tabindex="6" ng-disabled="disableps">-->
                                                </label>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 column">
                                    <div class="form-group">
                                    <label >Special Meal Request?</label>
                                        <div class="radio">
                                             <input id="smr-no" class="radio-custom" name="smr" ng-model="smr" type="radio" value="No" ng-click="checksmr()">
                                           
                                            <label class="radio-custom-label" for="smr-no">No</label>
                                             <input id="smr-yes" class="radio-custom" name="smr" ng-model="smr" type="radio" value="Yes" tabindex="7" ng-click="checksmr()">
                                            <label class="radio-custom-label" for="smr-yes">Yes</label>
                                           
                                            <label for="smrinput">
                                                <input id="smrinput" size="21" data-validation="mand" name="smrinput" type="text" class="form-control" tabindex="7" ng-disabled="disablesmr"></label>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <h6>Passport</h6>
                            <div class="row">
                             <div class="col-lg-4 column">
                                    <div class="form-group">
                                        <label for="pnation">Passport Nation</label>
                                        <select id="pnation" name="pnation" class="form-control" tabindex="8">
                                        <option value=""></option>
                                        <option value="Afghan">Afghan</option>
                                        <option value="Albanian">Albanian</option>
                                        <option value="Algerian">Algerian</option>
                                        <option value="American">American</option>
                                        <option value="Andorran">Andorran</option>
                                        <option value="Angolan">Angolan</option>
                                        <option value="Antiguans">Antiguans</option>
                                        <option value="Argentinean">Argentinean</option>
                                        <option value="Armenian">Armenian</option>
                                        <option value="Australian">Australian</option>
                                        <option value="Austrian">Austrian</option>
                                        <option value="Azerbaijani">Azerbaijani</option>
                                        <option value="Bahamian">Bahamian</option>
                                        <option value="Bahraini">Bahraini</option>
                                        <option value="Bangladeshi">Bangladeshi</option>
                                        <option value="Barbadian">Barbadian</option>
                                        <option value="Barbudans">Barbudans</option>
                                        <option value="Batswana">Batswana</option>
                                        <option value="Belarusian">Belarusian</option>
                                        <option value="Belgian">Belgian</option>
                                        <option value="Belizean">Belizean</option>
                                        <option value="Beninese">Beninese</option>
                                        <option value="Bhutanese">Bhutanese</option>
                                        <option value="Bolivian">Bolivian</option>
                                        <option value="Bosnian">Bosnian</option>
                                        <option value="Brazilian">Brazilian</option>
                                        <option value="British">British</option>
                                        <option value="Bruneian">Bruneian</option>
                                        <option value="Bulgarian">Bulgarian</option>
                                        <option value="Burkinabe">Burkinabe</option>
                                        <option value="Burmese">Burmese</option>
                                        <option value="Burundian">Burundian</option>
                                        <option value="Cambodian">Cambodian</option>
                                        <option value="Cameroonian">Cameroonian</option>
                                        <option value="Canadian">Canadian</option>
                                        <option value="Cape Verdean">Cape Verdean</option>
                                        <option value="Central African">Central African</option>
                                        <option value="Chadian">Chadian</option>
                                        <option value="Chilean">Chilean</option>
                                        <option value="Chinese">Chinese</option>
                                        <option value="Colombian">Colombian</option>
                                        <option value="Comoran">Comoran</option>
                                        <option value="Congolese">Congolese</option>
                                        <option value="Costa Rican">Costa Rican</option>
                                        <option value="Croatian">Croatian</option>
                                        <option value="Cuban">Cuban</option>
                                        <option value="Cypriot">Cypriot</option>
                                        <option value="Czech">Czech</option>
                                        <option value="Danish">Danish</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominican">Dominican</option>
                                        <option value="Dutch">Dutch</option>
                                        <option value="East Timorese">East Timorese</option>
                                        <option value="Ecuadorean">Ecuadorean</option>
                                        <option value="Egyptian">Egyptian</option>
                                        <option value="Emirian">Emirian</option>
                                        <option value="Equatorial Guinean">Equatorial Guinean</option>
                                        <option value="Eritrean">Eritrean</option>
                                        <option value="Estonian">Estonian</option>
                                        <option value="Ethiopian">Ethiopian</option>
                                        <option value="Fijian">Fijian</option>
                                        <option value="Filipino">Filipino</option>
                                        <option value="Finnish">Finnish</option>
                                        <option value="French">French</option>
                                        <option value="Gabonese">Gabonese</option>
                                        <option value="Gambian">Gambian</option>
                                        <option value="Georgian">Georgian</option>
                                        <option value="German">German</option>
                                        <option value="Ghanaian">Ghanaian</option>
                                        <option value="Greek">Greek</option>
                                        <option value="Grenadian">Grenadian</option>
                                        <option value="Guatemalan">Guatemalan</option>
                                        <option value="Guinea-Bissauan">Guinea-Bissauan</option>
                                        <option value="Guinean">Guinean</option>
                                        <option value="Guyanese">Guyanese</option>
                                        <option value="Haitian">Haitian</option>
                                        <option value="Herzegovinian">Herzegovinian</option>
                                        <option value="Honduran">Honduran</option>
                                        <option value="Hungarian">Hungarian</option>
                                        <option value="I-Kiribati">I-Kiribati</option>
                                        <option value="Icelander">Icelander</option>
                                        <option value="Indian">Indian</option>
                                        <option value="Indonesian">Indonesian</option>
                                        <option value="Iranian">Iranian</option>
                                        <option value="Iraqi">Iraqi</option>
                                        <option value="Irish">Irish</option>
                                        <option value="Israeli">Israeli</option>
                                        <option value="Italian">Italian</option>
                                        <option value="Ivorian">Ivorian</option>
                                        <option value="Jamaican">Jamaican</option>
                                        <option value="Japanese">Japanese</option>
                                        <option value="Jordanian">Jordanian</option>
                                        <option value="Kazakhstani">Kazakhstani</option>
                                        <option value="Kenyan">Kenyan</option>
                                        <option value="Kittian and Nevisian">Kittian and Nevisian</option>
                                        <option value="Kuwaiti">Kuwaiti</option>
                                        <option value="Kyrgyz">Kyrgyz</option>
                                        <option value="Laotian">Laotian</option>
                                        <option value="Latvian">Latvian</option>
                                        <option value="Lebanese">Lebanese</option>
                                        <option value="Liberian">Liberian</option>
                                        <option value="Libyan">Libyan</option>
                                        <option value="Liechtensteiner">Liechtensteiner</option>
                                        <option value="Lithuanian">Lithuanian</option>
                                        <option value="Luxembourger">Luxembourger</option>
                                        <option value="Macedonian">Macedonian</option>
                                        <option value="Malagasy">Malagasy</option>
                                        <option value="Malawian">Malawian</option>
                                        <option value="Malaysian">Malaysian</option>
                                        <option value="Maldivan">Maldivan</option>
                                        <option value="Malian">Malian</option>
                                        <option value="Maltese">Maltese</option>
                                        <option value="Marshallese">Marshallese</option>
                                        <option value="Mauritanian">Mauritanian</option>
                                        <option value="Mauritian">Mauritian</option>
                                        <option value="Mexican">Mexican</option>
                                        <option value="Micronesian">Micronesian</option>
                                        <option value="Moldovan">Moldovan</option>
                                        <option value="Monacan">Monacan</option>
                                        <option value="Mongolian">Mongolian</option>
                                        <option value="Moroccan">Moroccan</option>
                                        <option value="Mosotho">Mosotho</option>
                                        <option value="Motswana">Motswana</option>
                                        <option value="Mozambican">Mozambican</option>
                                        <option value="Namibian">Namibian</option>
                                        <option value="Nauruan">Nauruan</option>
                                        <option value="Nepalese">Nepalese</option>
                                        <option value="New Zealander">New Zealander</option>
                                        <option value="Nicaraguan">Nicaraguan</option>
                                        <option value="Nigerian">Nigerian</option>
                                        <option value="Nigerien">Nigerien</option>
                                        <option value="North Korean">North Korean</option>
                                        <option value="Northern Irish">Northern Irish</option>
                                        <option value="Norwegian">Norwegian</option>
                                        <option value="Omani">Omani</option>
                                        <option value="Pakistani">Pakistani</option>
                                        <option value="Palauan">Palauan</option>
                                        <option value="Panamanian">Panamanian</option>
                                        <option value="Papua New Guinean">Papua New Guinean</option>
                                        <option value="Paraguayan">Paraguayan</option>
                                        <option value="Peruvian">Peruvian</option>
                                        <option value="Polish">Polish</option>
                                        <option value="Portuguese">Portuguese</option>
                                        <option value="Qatari">Qatari</option>
                                        <option value="Romanian">Romanian</option>
                                        <option value="Russian">Russian</option>
                                        <option value="Rwandan">Rwandan</option>
                                        <option value="Saint Lucian">Saint Lucian</option>
                                        <option value="Salvadoran">Salvadoran</option>
                                        <option value="Samoan">Samoan</option>
                                        <option value="San Marinese">San Marinese</option>
                                        <option value="Sao Tomean">Sao Tomean</option>
                                        <option value="Saudi">Saudi</option>
                                        <option value="Scottish">Scottish</option>
                                        <option value="Senegalese">Senegalese</option>
                                        <option value="Serbian">Serbian</option>
                                        <option value="Seychellois">Seychellois</option>
                                        <option value="Sierra Leonean">Sierra Leonean</option>
                                        <option value="Singaporean">Singaporean</option>
                                        <option value="Slovakian">Slovakian</option>
                                        <option value="Slovenian">Slovenian</option>
                                        <option value="Solomon Islander">Solomon Islander</option>
                                        <option value="Somali">Somali</option>
                                        <option value="South African">South African</option>
                                        <option value="South Korean">South Korean</option>
                                        <option value="Spanish">Spanish</option>
                                        <option value="Sri Lankan">Sri Lankan</option>
                                        <option value="Sudanese">Sudanese</option>
                                        <option value="Surinamer">Surinamer</option>
                                        <option value="Swazi">Swazi</option>
                                        <option value="Swedish">Swedish</option>
                                        <option value="Swiss">Swiss</option>
                                        <option value="Syrian">Syrian</option>
                                        <option value="Taiwanese">Taiwanese</option>
                                        <option value="Tajik">Tajik</option>
                                        <option value="Tanzanian">Tanzanian</option>
                                        <option value="Thai">Thai</option>
                                        <option value="Togolese">Togolese</option>
                                        <option value="Tongan">Tongan</option>
                                        <option value="Trinidadian or Tobagonian">Trinidadian or Tobagonian</option>
                                        <option value="Tunisian">Tunisian</option>
                                        <option value="Turkish">Turkish</option>
                                        <option value="Tuvaluan">Tuvaluan</option>
                                        <option value="Ugandan">Ugandan</option>
                                        <option value="Ukrainian">Ukrainian</option>
                                        <option value="Uruguayan">Uruguayan</option>
                                        <option value="Uzbekistani">Uzbekistani</option>
                                        <option value="Venezuelan">Venezuelan</option>
                                        <option value="Vietnamese">Vietnamese</option>
                                        <option value="Welsh">Welsh</option>
                                        <option value="Yemenite">Yemenite</option>
                                        <option value="Zambian">Zambian</option>
                                        <option value="Zimbabwean">Zimbabwean</option>
                                    </select>
                                    </div>
                                </div>
                             <div class="col-lg-4 column">
                                    <div class="form-group">
                                        <label for="passportno">Passport Number</label>
                                        <input id="passportno" data-validation="mand" name="passportno" type="text" class="form-control" tabindex="8" ng-model="passportno" required>
                                            <span style="color:red" ng-show="myForm.passportno.$dirty && myForm.passportno.$invalid">
  <span style="display: none;" ng-class="{'has-error': myForm.passportno.$error.required}">Passport number is required.</span>
  </span>
              
                                    </div>
                                </div>

                            </div>
                                
                            <dir class="row" style="padding-left: 0px;">
                                <div class="col-lg-4 column">
                                    <div class="form-group">
                                        <label for="placeOfIssue">Place Of Issue</label>
                                        <input id="placeOfIssue" data-validation="mand" name="placeOfIssue" type="text" class="form-control" tabindex="9" ng-model="placeOfIssue" required>  <span style="color:red" ng-show="myForm.placeOfIssue.$dirty && myForm.placeOfIssue.$invalid">
  <span style="display: none;" ng-class="{'has-error': myForm.placeOfIssue.$error.required}">Issue place is required.</span>
  </span>
                                    </div>
                                </div>
                                <div class="col-lg-4 column">
                                    <div class="form-group">
                                        <label for="issueDate">Date Issued</label>
                                        <input id="issueDate" data-validation="mand" name="issueDate" type="text" class="form-control" tabindex="9" ng-model="issueDate" required>      <span style="color:red" ng-show="myForm.issueDate.$dirty && myForm.issueDate.$invalid">
  <span style="display: none;" ng-class="{'has-error': myForm.issueDate.$error.required}">Issue date is required.</span>
  </span>
                                    </div>
                                </div>
                                <div class="col-lg-4 column">
                                    <div class="form-group">
                                        <label for="passportEx">Passport Expiry Date</label>
                                        <input id="passportEx" data-validation="mand" name="passportEx" type="text" class="form-control" tabindex="9" ng-model="passportEx" required>
     <span style="color:red" ng-show="myForm.passportEx.$dirty && myForm.passportEx.$invalid">
  <span style="display: none;" ng-class="{'has-error': myForm.passportEx.$error.required}">Expiry date is required.</span>
  </span>
                                    </div>
                                </div>
                            </dir>
                                <h6>Memberships (ie. Frequent Flyer Programs)</h6>
                            <dir class="row" style="padding-left: 0px;">
                                 <div class="col-lg-4 column">
                                    <div class="form-group">
                                        <label for="other1">Airline/Hotel/Car Rental/Other</label>
                                        <input id="other1" data-validation="mand" name="other1" type="text" class="form-control" tabindex="10">
                                    </div>
                                </div>
                                     <div class="col-lg-4 column">
                                    <div class="form-group">
                                        <label for="memberno1">Membership No.</label>
                                        <input id="memberno1" data-validation="mand" name="memberno1" type="text" class="form-control" tabindex="10">
                                    </div>
                                </div>
                                
                                </dir>
                            <dir class="row" style="padding-left: 0px;">
                                 <div class="col-lg-4 column">
                                    <div class="form-group">
                                        <label for="nameas1">Name Of Member</label>
                                        <input id="nameas1" data-validation="mand" name="nameas1" type="text" class="form-control" tabindex="11">
                                    </div>
                                </div>
                                     <div class="col-lg-4 column">
                                    <div class="form-group">
                                        <label for="expiry1">Expiry Date</label>
                                        <input id="expiry1" data-validation="mand" name="expiry1" type="text" class="form-control" tabindex="11">
                                    </div>
                                </div>
                                <div class="col-lg-4 column">
                                    <div class="form-group">
                                        <label for="status1">Status</label>
                                        <input id="status1" data-validation="mand" name="status1" type="text" class="form-control" tabindex="11">
                                    </div>
                                </div>
                                
                                </dir>
                             <a id="toggle1" style="cursor:pointer">Add more memberships...</a>
                                <div id="t1" style="display: none;">
                            <div class="row" style="padding-left: 0px;">
                                 <div class="col-lg-4 column">
                                    <div class="form-group">
                                        <label for="other2">Airline/Hotel/Car/Other</label>
                                        <input id="other2" data-validation="mand" name="other2" type="text" class="form-control" tabindex="12">
                                    </div>
                                </div>
                                     <div class="col-lg-4 column">
                                    <div class="form-group">
                                        <label for="memberno2">Membership NO.</label>
                                        <input id="memberno2" data-validation="mand" name="memberno2" type="text" class="form-control" tabindex="12">
                                    </div>
                                </div>
                                
                                </div>
                            <div class="row" style="padding-left: 0px;">
                                 <div class="col-lg-4 column">
                                    <div class="form-group">
                                        <label for="nameas2">Name As Per Membership</label>
                                        <input id="nameas2" data-validation="mand" name="nameas2" type="text" class="form-control" tabindex="13">
                                    </div>
                                </div>
                                     <div class="col-lg-4 column">
                                    <div class="form-group">
                                        <label for="expiry2">Expiry</label>
                                        <input id="expiry2" data-validation="mand" name="expiry2" type="text" class="form-control" tabindex="13">
                                    </div>
                                </div>
                                <div class="col-lg-4 column">
                                    <div class="form-group">
                                        <label for="status2">Status</label>
                                        <input id="status2" data-validation="mand" name="status2" type="text" class="form-control" tabindex="13">
                                    </div>
                                </div>
                                
                                </div>
                                    
                           <a id="toggle2" style="cursor:pointer">Add more memberships...</a>
                                <div id="t2" style="display: none;">
                            <dir class="row" style="padding-left: 0px;">
                                 <div class="col-lg-4 column">
                                    <div class="form-group">
                                        <label for="other3">Airline/Hotel/Car/Other</label>
                                        <input id="other3" data-validation="mand" name="other3" type="text" class="form-control" tabindex="14">
                                    </div>
                                </div>
                                     <div class="col-lg-4 column">
                                    <div class="form-group">
                                        <label for="memberno3">Membership NO.</label>
                                        <input id="memberno3" data-validation="mand" name="memberno3" type="text" class="form-control" tabindex="14">
                                    </div>
                                </div>
                                
                                </dir>
                            <dir class="row" style="padding-left: 0px;">
                                 <div class="col-lg-4 column">
                                    <div class="form-group">
                                        <label for="nameas3">Name As Per Membership</label>
                                        <input id="nameas3" data-validation="mand" name="nameas3" type="text" class="form-control" tabindex="15">
                                    </div>
                                </div>
                                     <div class="col-lg-4 column">
                                    <div class="form-group">
                                        <label for="expiry3">Expiry</label>
                                        <input id="expiry3" data-validation="mand" name="expiry3" type="text" class="form-control" tabindex="15">
                                    </div>
                                </div>
                                <div class="col-lg-4 column">
                                    <div class="form-group">
                                        <label for="status3">Status</label>
                                        <input id="status3" data-validation="mand" name="status3" type="text" class="form-control" tabindex="15">
                                    </div>
                                </div>
                                
                                </dir>
                                </div>
          </div>
                            <div class="row next text-center">
                                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3  column">
                                    <button type="submit" id="travel-btn" class="btn btn-primary btn-hg step btn-prv" tabindex="16" disabled>
                                       Submit
                                    </button>
                               
                                </div>

                            </div>
                                
                            </form>
                        </div>


                    
                </div>
            </div>

        </div>
        </div>
</section>
<!--
        <script>
$('#dor').on('input', function() { 
    
        
    console.log('123');
//    $(this).val() 
});
</script>
-->
    <script>
    $("input[name='dor']").on("click keyup",function() {
        if($(this).val() == "" ) {
            
        }
//    if ($('#personalCheck').hasClass("has-success")) {
//        $('#personal-btn').removeClass("disabled");
//    }else {
//        $('#personal-btn').addClass("disabled");
//    }#program input[data-validation='mand']
        
        console.log('aa');
});
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="../book/asset/javascripts/init.js"></script>
    <script src="../book/asset/javascripts/flat-ui-pro.js"></script>
    <script src="../book/asset/javascripts/prettify.js"></script>
    <script src="../book/asset/javascripts/application.js"></script>
    <script src="../book/asset/javascripts/bootstrap-datepicker.js"></script>
    <script src="../book/asset/javascripts/jquery.card.js"></script>
    <script src="main.js"></script>
    <script src="../book/asset/javascripts/tell-top.js"></script>
    <!-- FormValidation plugin and the class supports validating Bootstrap form -->
<!--
    <script src="../asset/javascripts/validation/formValidation.min.js"></script>
    <script src="../asset/javascripts/validation/framework/bootstrap.min.js"></script>
-->
<!--    <script src="../asset/javascripts/validation/mandatoryIcon.min.js"></script>-->
</body>

</html>
