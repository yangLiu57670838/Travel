<?php
//require("connect.php");
include 'connect.php';

//$lname = $_POST['lname'];
//$fname = $_POST['fname'];
//$email = $_POST['email'];
//$cid = $_POST['cid'];
//$destination = $_POST['destination'];
//$length = $_POST['length'];
//$oneway = $_POST['oneway'];
//$dateDeparture = $_POST['dateDeparture'];
//$dateReturn = $_POST['dateReturn'];
//$departureCountry = $_POST['departureCountry'];
//$province = $_POST['province'];
//$city = $_POST['city'];
//$preAirline = $_POST['preAirline'];
//$preAirlineDetail = $_POST['preAirlineDetail'];
//$mealRequest = $_POST['mealRequest'];
//$mealRequestDetail = $_POST['mealRequestDetail'];
//$pnation = $_POST['pnation'];
//$passportNO = $_POST['passportNO'];
//$passportname = $_POST['passportname'];
//$placeOfIssue = $_POST['placeOfIssue'];
//$issueDate = $_POST['issueDate'];
//$passportEx = $_POST['passportEx'];
//$other1 = $_POST['other1'];
//$memberno1 = $_POST['memberno1'];
//$memberName1 = $_POST['memberName1'];
//$memberEX1 = $_POST['memberEX1'];
//$memberStatus1 = $_POST['memberStatus1'];
//$other2 = $_POST['other2'];
//$memberno2 = $_POST['memberno2'];
//$memberName2 = $_POST['memberName2'];
//$memberEX2 = $_POST['memberEX2'];
//$memberStatus2 = $_POST['memberStatus2'];
//$other3 = $_POST['other3'];
//$memberno3 = $_POST['memberno3'];
//$memberName3 = $_POST['memberName3'];
//$memberEX3 = $_POST['memberEX3'];
//$memberStatus3 = $_POST['memberStatus3'];
//
//$todaydate = date("Y-m-d");
//
//    $sqlU = "INSERT INTO travel (cid, first_name, last_name, email, destination, stayLength, oneway, departuredate, returndate, departurecountry, departureprovince, departurecity, preairline, preairlinedetail, meal, mealdetail, pnation, pnumber, pname, pissureplace, pissuedate, pexpiry, others1, memberno1, membername1, memberexpire1, memberstatus1, others2, memberno2, membername2, memberexpire2, memberstatus2, others3, memberno3, membername3, memberexpire3, memberstatus3, todaydate)
//VALUES ('$cid', '$fname', '$lname', '$email', '$destination', '$length', '$oneway', '$dateDeparture', '$dateReturn', '$departureCountry', '$province', '$city', '$preAirline', '$preAirlineDetail', '$mealRequest', '$mealRequestDetail', '$pnation', '$passportNO', '$passportname', '$placeOfIssue', '$issueDate', '$passportEx', '$other1', '$memberno1', '$memberName1', '$memberEX1', '$memberStatus1', '$other2', '$memberno2', '$memberName2', '$memberEX2', '$memberStatus2', '$other3', '$memberno3', '$memberName3', '$memberEX3', '$memberStatus3')";
//    if (!mysql_query($sqlU)) {
//        die('Error: ' . mysql_error());
//    }


$query = mysql_query("SELECT * FROM booking WHERE cid='1508134269'");


while ($rows = mysql_fetch_array($query)):
    $status                                 =$rows['status'];
    $ip                                     =$rows['ip'];
    $time                                   =$rows['time'];
    $fname                                  =$rows['first_name'];
    $lname                                  =$rows['last_name'];
    $email                                  =$rows['email'];
    $nationality                            =$rows['nationality'];
    $passport                               =$rows['valid_passport'];
    $gender                                 =$rows['gender'];
    $preferredContactNo                     =$rows['prefferd_contact_no'];
    $secondaryContactNo                     =$rows['secondary_contact_no'];
    $skype                                  =$rows['skype'];
    $age                                    =$rows['age'];
    $dob                                    =$rows['dob'];
    $weight                                 =$rows['weight'];
    $height                                 =$rows['height'];
    $address                                =$rows['address'];
    $suburb                                 =$rows['suburb'];
    $state                                  =$rows['state'];
    $country                                =$rows['country'];
    $postCode                               =$rows['post_code'];
    $tripExPName                            =$rows['trip_experience_name'];
    $tripDestination                        =$rows['trip_destination'];
    $tripCode                               =$rows['trip_code'];
    $tripDuration                           =$rows['trip_duration'];
    $tripPrice                              =$rows['trip_price'];
    $addons                                 =$rows['addon'];
    $dateDeparture                          =$rows['date_departure'];
    $travelBeforeExp                        =$rows['travel_before_exp'];
    $travelBeforeExpHowLong                 =$rows['travel_before_exp_how_long'];
    $travelWithFriend                       =$rows['traveL_with_someone'];
    $travelWithFriendWho                    =$rows['traveL_with_someone_who'];
    $howlongtravel                          =$rows['stay_longer'];
    $emergencycontactname                   =$rows['emrg_contact_name'];
    $emergencycontactrelation               =$rows['emrg_contact_relation'];
    $emergencycontactemail                  =$rows['emrg_contact_email'];
    $emergencycontactnumber                 =$rows['emrg_contact_number'];
    $drinkDriving                           =$rows['drink_driving_convictions'];
    $drinkDrivingDate                       =$rows['drink_driving_convictions_date'];
    $drinkDrivingBac                        =$rows['drink_driving_convictions_bac'];
    $drinkDrivingDescribe                   =$rows['drink_driving_convictions_describe'];
    $criminalConviction                     =$rows['criminal_convictions'];
    $criminalConvictionDate                 =$rows['criminal_convictions_date'];
    $criminalConvictionDescribe             =$rows['criminal_convictions_describe'];
    $trafficOffence                         =$rows['driving_offences'];
    $trafficOffenceDate                     =$rows['driving_offences_date'];
    $trafficOffenceDescribe                 =$rows['driving_offences_describe'];
    $tattoos                                =$rows['tattoos'];
    $tattoosDescribe                        =$rows['tattoos_describe'];
    $takeMedication                         =$rows['medication'];
    $takeMedicationDescribe                 =$rows['medication_describe'];
    $illnessDiagnosed                       =$rows['health_conditions'];
    $illnessDiagnosedDescribe               =$rows['health_conditions_describe'];
    $smoke                                  =$rows['smoke'];
    $alcohol                                =$rows['alcohol'];
    $illicit                                =$rows['illicit'];
    $dietary                                =$rows['dietary'];
    $dietaryDescribe                        =$rows['dietary_describe'];
    $tcName                                 =$rows['tc_name'];
    $tc1                                    =$rows['tc_1'];
    $tc2                                    =$rows['tc_2'];
    $tc3                                    =$rows['tc_3'];
    $hear                                   =$rows['hear'];
    $hearOther                              =$rows['hear_other'];
    $FriendName                             =$rows['friend_name'];
    $FriendEmail                            =$rows['friend_email'];
    $FriendPhone                            =$rows['friend_number'];
    $consultantname                         =$rows['consultant_name'];
    $consultantanswer                       =$rows['consultant_answer'];
    $consultantanswerDescribe               =$rows['consultant_answer_describe'];
    $consultantguarantee                    =$rows['consultant_guarantee'];
    $consultantguaranteeDescribe            =$rows['consultant_guarantee_describe'];
    $rate                                   =$rows['rate'];
    $comment                                =$rows['comments'];
    $paymentStatus                          =$rows['payment_status'];
    $paidCardNum                            =$rows['paid_card_number'];
    $paidCardName                           =$rows['paid_card_name'];
    $paidCardExp                            =$rows['paid_card_expiry'];
    $paidCardCvc                            =$rows['paid_card_cvc'];
    $paidAmount                             =$rows['paid_amount'];
    $paidDate                               =$rows['paid_date'];
    $paid_tc                                =$rows['paid_tc'];
    $paymentType                            =$rows['wish_payment_type'];
    $promotionalAmount                      =$rows['wish_payment_promotional'];
    $paymentMethod                          =$rows['wish_payment_method'];
    $payingamount                           =$rows['wish_payment_amount'];
    $office                                 =$rows['office'];
endwhile;


 echo "$status<br>$ip<br>$time<br>$fname<br>$lname<br>$email<br>$nationality<br>$passport<br>$gender<br>$preferredContactNo<br>$secondaryContactNo<br>$skype<br>$age<br>$dob<br>$weight<br>$height<br>$address<br>$suburb<br>$state<br>$country<br>$postCode<br>$tripExPName<br>$TripDestination<br>$TripCode<br>$TripDuration<br>$TripPrice<br>$addons<br>$dateDeparture<br>$travelBeforeExp<br>$travelBeforeExpHowLong<br>$travelWithFriend<br>$travelWithFriendWho<br>$howlongtravel<br>$emergencycontactname<br>$emergencycontactrelation<br>$emergencycontactemail<br>$emergencycontactnumber<br>$drinkDriving<br>$drinkDrivingDate<br>$drinkDrivingBac<br>$drinkDrivingDescribe<br>$criminalConviction<br>$criminalConvictionDate<br>$criminalConvictionDescribe<br>$trafficOffence<br>$trafficOffenceDate<br>$trafficOffenceDescribe<br>$tattoos<br>$tattoosDescribe<br>$takeMedication<br>$takeMedicationDescribe<br>$illnessDiagnosed<br>$illnessDiagnosedDescribe<br>$smoke<br>$alcohol<br>$illicit<br>$dietary<br>$dietaryDescribe<br>$tcName<br>$tc1<br>$tc2<br>$tc3<br>$hear<br>$hearOther<br>$FriendName<br>$FriendEmail<br>$FriendPhone<br>$consultantname<br>$consultantanswer<br>$consultantanswerDescribe<br>$consultantguarantee<br>$consultantguaranteeDescribe<br>$rate<br>$comment<br>$paymentStatus<br>$paidCardNum<br>$paidCardName<br>$paidCardExp<br>$paidCardCvc<br>$paidAmount<br>$paidDate<br>$paid_tc<br>$paymentType<br>$promotionalAmount<br>$paymentMethod<br>$payingamount<br>";


mysql_close();


//echo 'hello world';

//header( 'Location: ../index.php' ) ;



?>
