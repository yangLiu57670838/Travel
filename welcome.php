<?php
//require("connect.php");

require_once('../book/asset/php/phpmailer/PHPMailerAutoload.php');
require_once("../book/asset/php/dompdf/dompdf_config.inc.php");

$lname = $_POST['lname'];
if (isset($_POST['mname']))
    {
   $mname = $_POST['mname'];
}else
    {
    $mname = "";
}
$fname = $_POST['fname'];
$email = $_POST['email'];
//$cid = $_POST['cid'];
$destination = $_POST['destination'];
$length = $_POST['length'];
if (isset($_POST['oneway']))
    {
    $oneway = $_POST['oneway'];
}else
    {
    $oneway = "";
}
$dateDeparture = $_POST['dod'];
$dateReturn = $_POST['dor'];
$departureCountry = $_POST['dcountry'];
//$province = $_POST['province'];
$city = $_POST['city'];
$preSeat = $_POST['ps'];
if (isset($_POST['psinput']))
    {
  $preSeatDetail = $_POST['psinput'];
}else
    {
    $preSeatDetail = "";
}
$mealRequest = $_POST['smr'];
if (isset($_POST['smrinput']))
    {
  $mealRequestDetail = $_POST['smrinput'];
}else
    {
    $mealRequestDetail = "";
}
$pnation = $_POST['pnation'];
$passportNO = $_POST['passportno'];
$passportname = $_POST['passportname'];
$placeOfIssue = $_POST['placeOfIssue'];
$issueDate = $_POST['issueDate'];
$passportEx = $_POST['passportEx'];
$other1 = $_POST['other1'];
$memberno1 = $_POST['memberno1'];
$memberName1 = $_POST['nameas1'];
$memberEX1 = $_POST['expiry1'];
$memberStatus1 = $_POST['status1'];
$other2 = $_POST['other2'];
$memberno2 = $_POST['memberno2'];
$memberName2 = $_POST['nameas2'];
$memberEX2 = $_POST['expiry2'];
$memberStatus2 = $_POST['status2'];
$other3 = $_POST['other3'];
$memberno3 = $_POST['memberno3'];
$memberName3 = $_POST['nameas3'];
$memberEX3 = $_POST['expiry3'];
$memberStatus3 = $_POST['status3'];

$todaydate = date("Y-m-d");


    
$link = mysqli_connect("107.6.188.154", "canadas3_glusrbook2015", "hTilfGLsT*hK", "canadas3_bookglwbrev2015");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}



    $sql = "INSERT INTO travel (first_name, middle_name, last_name, email, destination, stayLength, oneway, departuredate, returndate, departurecountry, departurecity, preseat, preseatdetail, meal, mealdetail, pnation, pnumber, pname, pissueplace, pissuedate, pexpiry, others1, memberno1, membername1, memberexpire1, memberstatus1, others2, memberno2, membername2, memberexpire2, memberstatus2, others3, memberno3, membername3, memberexpire3, memberstatus3, todaydate)
VALUES ('$fname', '$mname', '$lname', '$email', '$destination', '$length', '$oneway', '$dateDeparture', '$dateReturn', '$departureCountry', '$city', '$preSeat', '$preSeatDetail', '$mealRequest', '$mealRequestDetail', '$pnation', '$passportNO', '$passportname', '$placeOfIssue', '$issueDate', '$passportEx', '$other1', '$memberno1', '$memberName1', '$memberEX1', '$memberStatus1', '$other2', '$memberno2', '$memberName2', '$memberEX2', '$memberStatus2', '$other3', '$memberno3', '$memberName3', '$memberEX3', '$memberStatus3', '$todaydate')";



if(mysqli_query($link, $sql)){
   
    mysqli_close($link);
    

$html =
      "<!DOCTYPE html>
<html lang=''>
<head>
    <style>
        body {
            font-family: 'Lato', Helvetica, Arial, sans-serif;
            font-size: 18px;
            line-height: 1.72222;
            color: #34495e;
            background-color: #fff;
        }
        .overview-tile {
            border: 2px solid #00cf85;
            border-radius: 6px;
            margin: 0px 10px;
        }
        .overview-title {
            height: 30px;
            background-color: #ecf0f1;
            padding: 5px 30px 15px 30px !important;
            color: #7f8c8d;
            font-size: 18px;
            font-weight: 700;
            border-radius: 6px;
        }
        .overview-title span{
            color: #7f8c8d;
            font-size: 18px;
            font-weight: 700;
        }
        .overview-content {
            margin: 15px 30px;
            color: #6e7a87;
        }
        .seprator {
            width: 97%;
            height: 2px;
            background-color: #ecf0f1;
            margin: 15px 10px;
        }
        .pageBreak {
            page-break-after:always;
        }
        label {
            display: block;
            font-weight: 700;
            line-height: 25px;
            font-size: 13px;
            max-width: 100%;
            margin-bottom: 5px;
        }
        span {
            font-weight: 300;
            font-size: 13px;
        }
        table {
            width:100%;
            page-break-inside: avoid;
        }
        td{
            width:50%;
        }
        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        section {
            display:block;
        }
        img {
            float:left;
            padding-top: 8px;
            padding-right: 5px;
        }
        .header-text {
            font-weight: bold;
            font-size : 20px;
            color: #7f8c8d;
            float : left;
            width: 550px;
            padding : 15px;
        }
        .header-logo {
            text-align : right;
            padding-left:35px;
        }
        @page { margin: 100px 30px 75 30px; }
        #header {
            position: fixed;
            left: 0px;
            top: -75px;
            right: 0px;
/*            height: 85px;*/
/*            padding-bottom:100px;*/
        }
        #footer { position: fixed;
            left: 0px;
            bottom: -100px;
            right: 0px;
            height: 100px;
            border-top: 3px solid #fff;
            font-size : 8pt;
            color: #7f8c8d;
            padding: 0px 15px;
        }
        p {
            line-height : 0.7;
        }
        hr {
            border: 0;
            height: 0;
            border-top: 1px solid #ecf0f1;
            border-bottom: 1px solid #ecf0f1;
        }
    </style>
</head>
<body>
    <div id='header'>
        <div class='header-text'>
            Traveller Profile
        </div>
        <div class='header-logo'>
            <img width='127' height='39'  src='http://www.globalworkandtravel.com/book/asset/images/logo2.png'>
        </div>
    </div>

    <section>
        <div class='container'>
            <div class='row'>
                <div class='col-md-12 column'>
                    <div class='row overview-tile'>
                        <div class='overview-content'>
                        <table>
                            <tr>
                                <td>
                                    <img src='http://www.globalworkandtravel.com/book/asset/images/arrow-right.png'><label>First name:<span> $fname</span></label>
                                </td>
                                 <td>
                                    <img src='http://www.globalworkandtravel.com/book/asset/images/arrow-right.png'><label>Middle name:<span> $mname</span></label>
                                </td>
                            </tr>
                            <tr>
                            <td >
                                    <img src='http://www.globalworkandtravel.com/book/asset/images/arrow-right.png'><label>Last name:<span> $lname</span></label>
                                </td>
                                <td>
                                    <img src='http://www.globalworkandtravel.com/book/asset/images/arrow-right.png'><label>Email:<span> $email</span></label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src='http://www.globalworkandtravel.com/book/asset/images/arrow-right.png'><label>Destination:<span> $destination</span></label>
                                </td>
                                 <td>
                                    <img src='http://www.globalworkandtravel.com/book/asset/images/arrow-right.png'><label>Intended Length Of Stay:<span> $length</span></label>
                                </td>
                            </tr>
                            <tr>
                                <td colspan='2'>
                                    <img src='http://www.globalworkandtravel.com/book/asset/images/arrow-right.png'><label>Approximate Date Of Departure:<span> $dateDeparture</span></label>
                                </td>
                            </tr>
                            <tr>
                            <td colspan='2'>
                                    <img src='http://www.globalworkandtravel.com/book/asset/images/arrow-right.png'><label>Approximate Date Of Return:<span> $dateReturn </span></label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src='http://www.globalworkandtravel.com/book/asset/images/arrow-right.png'><label>Departure Country:<span> $departureCountry</span></label>
                                </td>
                                 <td>
                                    <img src='http://www.globalworkandtravel.com/book/asset/images/arrow-right.png'><label>Departing From Which City:<span> $city </span></label>
                                </td>
                            </tr>
                          <tr>
                                <td>
                                    <img src='http://www.globalworkandtravel.com/book/asset/images/arrow-right.png'><label>Preferred Seat?<span> $preSeat. $preSeatDetail</span></label>
                                </td>
                                 <td>
                                    <img src='http://www.globalworkandtravel.com/book/asset/images/arrow-right.png'><label>Special Meal Request?<span> $mealRequest. $mealRequestDetail </span></label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src='http://www.globalworkandtravel.com/book/asset/images/arrow-right.png'><label>Passport Nation:<span> $pnation</span></label>
                                </td>
                                 <td>
                                    <img src='http://www.globalworkandtravel.com/book/asset/images/arrow-right.png'><label>Passport Number:<span> $passportNO</span></label>
                                </td>   
                            </tr>
                               <tr>
                               <td>
                                    <img src='http://www.globalworkandtravel.com/book/asset/images/arrow-right.png'><label>Name Of Passport:<span> $passportname</span></label>
                                </td>
                                <td>
                                    <img src='http://www.globalworkandtravel.com/book/asset/images/arrow-right.png'><label>Place Of Issue:<span> $placeOfIssue</span></label>
                                </td>                             
                            </tr> 
                            <tr>
                            <td>
                                    <img src='http://www.globalworkandtravel.com/book/asset/images/arrow-right.png'><label>Date Issued:<span> $issueDate</span></label>
                                </td>
                               <td>
                                    <img src='http://www.globalworkandtravel.com/book/asset/images/arrow-right.png'><label>Passport Expiry:<span> $passportEx</span></label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src='http://www.globalworkandtravel.com/book/asset/images/arrow-right.png'><label>Airline/Hotel/Car/Other:<span> $other1</span></label>
                                </td>
                            </tr>
                            <tr>
                            <td > 
            <img src='http://www.globalworkandtravel.com/book/asset/images/arrow-right.png'><label>Membership NO:<span> $memberno1</span></label>
                                </td>
                                 <td >
                                    <img src='http://www.globalworkandtravel.com/book/asset/images/arrow-right.png'><label>Expiry:<span> $memberEX1</span></label>
                                </td>  
                            </tr>
                            <tr>
                                <td>
                                    <img src='http://www.globalworkandtravel.com/book/asset/images/arrow-right.png'><label>Name As Per Membership:<span> $memberName1</span></label>
                                </td>
                                <td>
                                    <img src='http://www.globalworkandtravel.com/book/asset/images/arrow-right.png'><label>Status:<span> $memberStatus1</span></label>
                                </td>
                                                          
                            </tr>                           
                            <tr>
                                <td>
                                    <img src='http://www.globalworkandtravel.com/book/asset/images/arrow-right.png'><label>Airline/Hotel/Car/Other:<span> $other2</span></label>
                                </td>
                            </tr>
                            <tr>
                            <td >
                                    <img src='http://www.globalworkandtravel.com/book/asset/images/arrow-right.png'><label>Membership NO:<span> $memberno2</span></label>
                                </td>
                                <td >
                                    <img src='http://www.globalworkandtravel.com/book/asset/images/arrow-right.png'><label>Expiry:<span> $memberEX2</span></label>
                                </td>
                                </tr>
                            <tr>
                                <td>
                                    <img src='http://www.globalworkandtravel.com/book/asset/images/arrow-right.png'><label>Name As Per Membership:<span> $memberName2</span></label>
                                </td>
                               <td>
      <img src='http://www.globalworkandtravel.com/book/asset/images/arrow-right.png'><label>Status:<span> $memberStatus2</span></label>
                                </td>  
                            </tr>
                            <tr>
                                <td>
                                    <img src='http://www.globalworkandtravel.com/book/asset/images/arrow-right.png'><label>Airline/Hotel/Car/Other:<span> $other3</span></label>
                                </td>
                            </tr>
                            <tr>
                         <td >
  <img src='http://www.globalworkandtravel.com/book/asset/images/arrow-right.png'><label>Membership NO:<span> $memberno3</span></label>
                                </td>
                                 <td >
                                    <img src='http://www.globalworkandtravel.com/book/asset/images/arrow-right.png'><label>Expiry:<span> $memberEX3</span></label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src='http://www.globalworkandtravel.com/book/asset/images/arrow-right.png'><label>Name As Per Membership:<span> $memberName3</span></label>
                                </td>
                               <td >
                                    <img src='http://www.globalworkandtravel.com/book/asset/images/arrow-right.png'><label>Status:<span> $memberStatus3</span></label>
                                </td> 
                            </tr>
                        </table>
                        </div>
                    </div>
            </div>
            </div>
        </div>
    </section>
</body>

</html>";


    $time = date("Y-m-d-His");
    $dompdf = new DOMPDF();
    $dompdf->load_html($html);
    $dompdf->render();
    $output = $dompdf->output();
    $file_to_save = 'uploads/'.$fname.'-'.$mname.'-'.$lname.'-'.$time.'.pdf';
    file_put_contents($file_to_save, $output);
    
  
    // email to customer
//$bodyem = '
//<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
//<html xmlns="http://www.w3.org/1999/xhtml">
//
//    <head>
//        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
//        <meta name="viewport" content="width=device-width">
//        <title>Global Work and Travel Co. - Mail Response</title>
//    </head>
//
//    <body style="width:100% !important;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;margin:0;padding:0;background-color:#ffffff">
//        <style type="text/css">
//            @font-face {
//                font-family: "gotham-book";
//                src: url("http://globalworkandtravel.com/edm/caff/fonts/gotham/Gotham-Book.otf") format("opentype");
//            }
//
//            @font-face {
//                font-family: "gotham-medium";
//                src: url("http://globalworkandtravel.com/edm/caff/fonts/gotham/Gotham-Medium.otf") format("opentype");
//            }
//
//            @font-face {
//                font-family: gotham-bold;
//                src: url("http://globalworkandtravel.com/edm/caff/fonts/gotham/Gotham-Bold.otf") format("opentype");
//            }
//
//            body {
//                width: 100% !important;
//                -webkit-text-size-adjust: 100%;
//                -ms-text-size-adjust: 100%;
//                margin: 0;
//                padding: 0;
//                background-color: #ffffff;
//                margin: 0;
//                padding: 0;
//            }
//
//            img {
//                outline: none;
//                text-decoration: none;
//                -ms-interpolation-mode: bicubic;
//                image-rendering: optimizeQuality;
//                display: block;
//                /*            max-width: 100%;*/
//            }
//
//            p {
//                margin: 0.8em 0;
//                color: #ffffff;
//                line-height: 20px;
//            }
//
//            table {
//                border-collapse: collapse;
//                mso-table-lspace: 0pt;
//                mso-table-rspace: 0pt;
//                color: #ECECEC;
//                font-family: Helvetica, Arial, sans-serif;
//                font-size: 11px;
//            }
//
//            table td {
//                border-collapse: collapse;
//                color: #ffffff;
//                line-height: 20px;
//            }
//
//            a,
//            a:link,
//            a:visited,
//            a:hover {
//                color: #707070;
//            }
//
//            .footer a,
//            .footer a:link,
//            .footer a:visited,
//            .footer a:hover {
//                color: #707070;
//            }
//
//            li {
//                list-style: none;
//                line-height: 20px;
//            }
//
//            ul,
//            ol {
//                margin-top: 20px;
//                margin-bottom: 20px;
//            }
//
//            td,
//            tr {
//                padding: 0;
//            }
//
//            a {
//                text-decoration: none;
//                padding: 2px 0px;
//            }
//
//            .bodytbl {
//                background-color: #ffffff;
//                margin: 0;
//                padding: 0;
//                -webkit-text-size-adjust: none;
//                width: 100% !important;
//            }
//
//            @media only screen and (max-width: 480px) {
//                table[class=bodytbl] .wrap {
//                    width: 320px !important;
//                }
//                table[class=bodytbl] .wrap .pa {
//                    font-size: 14px !important;
//                    line-height: 18px !important;
//                    width: 285px
//                }
//                table[class=bodytbl] .button {
//                    width: 280px !important;
//                    height: 38px !important;
//                }
//                table[class=bodytbl] .button a {
//                    font-size: 18px !important;
//                }
//                table[class=bodytbl] .hero {
//                    max-width: 310px !important;
//                }
//                table[class=bodytbl] .featured {
//                    max-width: 310px !important;
//                }
//                table[class=bodytbl] .thumb {
//                    max-width: 140px !important;
//                }
//                table[class=bodytbl] .gap {
//                    max-width: 50px !important;
//                }
//                table[class=bodytbl] .ft-cont {
//                    max-width: 300px !important;
//                }
//                table[class=bodytbl] .ft-gap {
//                    display: none;
//                }
//                table[class=bodytbl] .social img {
//                    max-width: 34px !important;
//                }
//                table[class=bodytbl] .wrap .contentpm {
//                    max-width: 300px !important;
//                }
//                table[id="canspamBar"] img {
//                    width: 33px !important;
//                }
//                table[id="canspamBar"] td {
//                    padding-left: 2px !important;
//                    padding-right: 2px !important;
//                }
//            }
//
//        </style>
//
//        <table class="bodytbl" width="100%" cellspacing="0" cellpadding="0" style="margin:0;padding:0;width:100% !important;border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;background-color:#FFFFFF;color:#ECECEC;-webkit-text-size-adjust:none;font-family:Helvetica,helvetica,sans-serif;font-size:11px">
//            <tr style="padding:0">
//                <td align="center" style="border-collapse:collapse;color:#8A8C8C;line-height:20px;padding:0">
//
//                    <!--/// PADDING ///-->
//                    <table width="640" cellspacing="0" cellpadding="0" class="wrap" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;">
//                        <tr style="padding:0">
//                            <td height="10" style="border-collapse:collapse;padding:0"></td>
//                        </tr>
//                    </table>
//
//                    <!--/// Logo ///-->
//                    <table width="640" cellpadding="0" cellspacing="0" class="wrap" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;">
//                        <tr style="padding:0">
//                            <td align="left" valign="top" style="border-collapse:collapse;line-height:20px;padding:0">
//                                <a href="http://www.globalworkandtravel.com/">
//                                    <img src="http://globalworkandtravel.com/book/asset/images/logoem.png" class="hero" alt="" title="" width="86" border="0" style="max-width:86px;text-align:left;display:block;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;image-rendering:optimizeQuality;display:block">
//                                </a>
//                            </td>
//                        </tr>
//                    </table>
//
//                    <!--/// PADDING ///-->
//                    <table width="640" cellspacing="0" cellpadding="0" class="wrap" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;">
//                        <tr style="padding:0">
//                            <td height="0" style="border-collapse:collapse;padding:0"> </td>
//                        </tr>
//                    </table>
//
//                    <!--/// Hero ///-->
//                    <table width="640" cellpadding="0" cellspacing="0" class="wrap" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;">
//                        <tr style="padding:0">
//                            <td align="center" valign="top" style="border-collapse:collapse;line-height:20px;padding:0">
//                                <img src="http://globalworkandtravel.com/book/asset/images/hero.png" class="hero" alt="" title="" width="640" border="0" style="max-width:640px;margin:0 auto;;text-align:center;display:block;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;image-rendering:optimizeQuality;display:block">
//                            </td>
//                        </tr>
//                    </table>
//
//                    <!--/// PADDING ///-->
//                    <table width="640" cellspacing="0" cellpadding="0" class="wrap" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;">
//                        <tr style="padding:0">
//                            <td height="10" style="border-collapse:collapse;padding:0;line-height:0px"> </td>
//                        </tr>
//                    </table>
//
//                    <!--/// CONTENT ///-->
//                    <table width="560" cellspacing="0" cellpadding="0" class="wrap" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;">
//                        <tr style="padding:0" class="contentpm">
//                            <td align="left" valign="top" style="border-collapse:collapse;">
//                                <p class="pa" style="border-collapse:collapse;color: #5f5f5f;font-family:gotham-bold,helvetica,sans-serif;font-size:26px;font-weight:bold;line-height:26px;padding:0;text-align:center">
//                                    Congratulations!
//                                </p>
//                                <p class="pa" style="border-collapse:collapse;color:#5f5f5f;font-family:gotham-medium,helvetica,sans-serif;font-size:16px;line-height:26px;padding:0;text-align:justify">
//                                    You&#39;re officially on your way overseas with the Work & Travel Experts!
//                                </p>
//                                <p class="pa" style="border-collapse:collapse;color:#5f5f5f;font-family:gotham-book,helvetica,sans-serif;font-size:16px;line-height:20px;padding:0;text-align:justify">
//                                    We&#39;re so glad to have you on board with us, and over 20,000 other Global Travellers who choose to see this world in a meaningful way!
//                                </p>
//                                <p class="pa" style="border-collapse:collapse;color:#5f5f5f;font-family:gotham-book,helvetica,sans-serif;font-size:16px;line-height:20px;padding:0;text-align:justify">Attached you&#39;ll find a copy of your Booking Details and Conditions to keep handy.
//                                </p>
//                                <p class="pa" style="border-collapse:collapse;color:#707070;font-family:gotham-book,helvetica,sans-serif;font-size:16px;line-height:20px;padding:0;text-align:justify">
//                                    Now you&#39;ve taken the first step, we&#39;ll be alongside you the entire way. Within 1 business day from now, we&#39;ll get in touch to confirm your booking, and then you&#39;ll have your very own Trip Coordinator who&#39;ll assist you with all your travel plans and arrangements, who you&#39;re free to call or email whenever you want, about whatever you want!
//
//                                </p>
//                                <p class="pa" style="border-collapse:collapse;color:#5f5f5f;font-family:gotham-book,helvetica,sans-serif;font-size:16px;line-height:20px;padding:0;text-align:justify">
//                                    And that&#39;s it for now! You&#39;re officially on your way overseas!
//                                </p>
//                                <p class="pa" style="border-collapse:collapse;color:#5f5f5f;font-family:gotham-book,helvetica,sans-serif;font-size:16px;line-height:20px;padding:0;text-align:justify">
//                                    Why not share it with your friends, join our Global Community or watch videos submitted by past travellers at our social channels below?
//                                </p>
//                                <p class="pa" style="border-collapse:collapse;color:#5f5f5f;font-family:gotham-book,helvetica,sans-serif;font-size:16px;line-height:20px;padding:0;text-align:left">
//                                    Get ready to pack your bags, because we&#39;re going travelling!
//                                </p>
//                                <p class="pa" style="border-collapse:collapse;color:#5f5f5f;font-family:gotham-bold,helvetica,sans-serif;font-size:26px;font-weight:bold;line-height:26px;padding:0;text-align:center;">
//                                    Get social with us.
//                                </p>
//                            </td>
//                        </tr>
//                    </table>
//
//                    <!--/// PADDING ///-->
//                    <table width="640" cellspacing="0" cellpadding="0" class="wrap" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;">
//                        <tr style="padding:0">
//                            <td height="10" style="border-collapse:collapse;color:#ECECEC;line-height:0px;padding:0"> </td>
//                        </tr>
//                    </table>
//
//                    <!--/// Social Icons ///-->
//                    <table width="640" cellspacing="0" cellpadding="0" class="wrap" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;">
//                        <tr style="padding:0">
//                            <td height="12" style="border-collapse:collapse;color:#ECECEC;line-height:0px;padding:0">
//
//                                <a href="https://www.facebook.com/turnmydreamintoreality">
//                                    <img src="http://globalworkandtravel.com/book/asset/images/fb.png" class="" alt="" title="" width="105" border="0" style="max-width:105px;margin:0 auto;;text-align:center;display:block;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;image-rendering:optimizeQuality;display:block">
//                                </a>
//
//                            </td>
//                            <td height="12" style="border-collapse:collapse;color:#ECECEC;line-height:0px;padding:0">
//
//                                <a href="https://www.youtube.com/user/gwatsup">
//                                    <img src="http://globalworkandtravel.com/book/asset/images/youtube.png" class="" alt="" title="" width="105" border="0" style="max-width:105px;margin:0 auto;;text-align:center;display:block;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;image-rendering:optimizeQuality;display:block">
//                                </a>
//
//                            </td>
//                            <td height="12" style="border-collapse:collapse;color:#ECECEC;line-height:0px;padding:0">
//
//                                <a href="https://instagram.com/globalworkandtravel/">
//                                    <img src="http://globalworkandtravel.com/book/asset/images/instagram.png" class="" alt="" title="" width="105" border="0" style="max-width:105px;margin:0 auto;;text-align:center;display:block;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;image-rendering:optimizeQuality;display:block">
//                                </a>
//
//                            </td>
//                            <td height="12" style="border-collapse:collapse;color:#ECECEC;line-height:0px;padding:0">
//
//                                <a href="https://twitter.com/thegwatco">
//                                    <img src="http://globalworkandtravel.com/book/asset/images/twitter.png" class="" alt="" title="" width="105" border="0" style="max-width:105px;margin:0 auto;;text-align:center;display:block;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;image-rendering:optimizeQuality;display:block">
//                                </a>
//
//                            </td>
//                            <td height="12" style="border-collapse:collapse;color:#ECECEC;line-height:0px;padding:0">
//
//                                <a href="http://www.consumeraffairs.com/travel/the-global-work-travel-co.html">
//                                    <img src="http://globalworkandtravel.com/book/asset/images/consumer.png" class="" alt="" title="" width="105" border="0" style="max-width:105px;margin:0 auto;;text-align:center;display:block;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;image-rendering:optimizeQuality;display:block">
//                                </a>
//
//                            </td>
//                        </tr>
//                    </table>
//
//                    <!--/// PADDING ///-->
//                    <table width="640" cellspacing="0" cellpadding="0" class="wrap" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;">
//                        <tr style="padding:0">
//                            <td height="24" style="border-collapse:collapse;color:#ECECEC;line-height:0px;padding:0"> </td>
//                        </tr>
//                    </table>
//
//                    <!--/// CONTACT DETAILS ///-->
//                    <table width="640" cellspacing="0" cellpadding="0" id="contact_block" class="wrap footer" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;">
//                        <tr style="padding:0">
//                            <td align="center" valign="top" style="border-collapse:collapse;color:#707070;font-family:gotham-medium,helvetica,sans-serif;font-size:9px;font-weight:normal;letter-spacing:1px;line-height:16px;padding:0">
//                                <span style="text-align:left;">
//
//                                    <u><a href="http://globalworkandtravel.com/contact/">Contact Us</a></u> |
//                                    <u><a href="http://globalworkandtravel.com/privacy-policy/">Privacy Policy</a></u>
//                                    <br>
//                                    © 2015 The Global Work & Travel Co. All Rights Reserved
//                                </span>
//                            </td>
//                        </tr>
//                    </table>
//
//                    <!--/// PADDING ///-->
//                    <table width="640" cellspacing="0" cellpadding="0" class="wrap" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;">
//                        <tr style="padding:0">
//                            <td height="42" style="border-collapse:collapse;color:#ECECEC;line-height:20px;padding:0"> </td>
//                        </tr>
//                    </table>
//                </td>
//            </tr>
//        </table>
//    </body>
//
//</html>
//
//';

    
if (($departureCountry == "Canada") || ($departureCountry == "United States")) {
        $smail = "andrew@globalworkandtravel.ca";
        $smail2 = "";
}else {
        $smail = "hem@globalworkandtravel.com.au";
        $smail2 = "ticketing@globalworkandtravel.com.au";
};

    

    
if (isset($_POST['mname']))
    {
   $subject = "Traveller Profile - ".$fname." ".$mname." ".$lname." - ".$email;
    $bodyem = "Hi,<br>Please find the attached traveller profile for ".$fname." ".$mname." ".$lname." ".$email."<br>Thanks";
}else
    {
   $subject = "Traveller Profile - ".$fname." ".$lname." - ".$email;
    $bodyem = "Hi, please find the attached traveller profile for ".$fname." ".$lname." ".$email."<br>Thanks";
}
//$smail2 = "yang@globalworkandtravel.com";

$mail = new PHPMailer();
$mail->From      = 'travel@globalworkandtravel.com';
$mail->FromName  = 'The Global Work & Travel Co.';
$mail->Subject   =  $subject;
$mail->Body      = $bodyem;
$mail->addAddress($smail, $fname);
//$mail->AddBCC($smail);
//$mail->AddBCC($smail2);
$mail->isHTML(true); 
//$booking_attach = "upload/$fname-$mname-$lname-$time.pdf";
$booking_attach = 'uploads/'.$fname.'-'.$mname.'-'.$lname.'-'.$time.'.pdf';   
//$tc_attach = "./tc/pdf/tc-$tcName.pdf";

    
$mail->AddAttachment($booking_attach);
//$mail->AddAttachment($tc_attach, "Booking-Terms-and-Conditions.pdf");

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
//    echo 'Message has been sent';
//    echo '<br>'.$tc_attach;
//    echo "Records added successfully.";
    header( 'Location: thankyou.php' ) ;
    exit();
}
   
  
   
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
     mysqli_close($link);
}
 
// Close connection

   

//    if (!mysql_query($sqlU)) {
//        die('Error: ' . mysql_error());
//    }


//mysql_close();


//echo $sqlU;


 


?>
