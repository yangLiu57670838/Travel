$('.input-group.date').datepicker({
    format: "dd/mm/yyyy",
    orientation: "top left",
    autoclose: true
});
//
////travel section
//$('#travel-btn').click(function(e) {
//    console.log('button clicked');
// 
//        $.post( "index.php", {
//        fname:                          $("input[name='fname']").val(),
//        lname:                          $("input[name='lname']").val(),
//        email:                          $("input[name='email']").val(),
//        cid:                            $("input[name='cid']").val(),
//        destination:                    $("input[name='destination']").val(),
//        length:                         $("input[name='length']").val(),
//        oneway:                         $('#oneway-yes:checked').val(),//??
//        dateDeparture:                  $("input[name='dod']").val(),    
//        dateReturn:                     $("input[name='dor']").val(),      
//        departureCountry:               $("select[name='dcountry']").val(),    
//        province:                       $("input[name='province']").val(),   
//        city:                           $("input[name='city']").val(),   
//        preAirline:                     $("input:radio[name='pa']:checked").val(),
//        preAirlineDetail:               $("input[name='painput']").val(),   
//        mealRequest:                    $("input:radio[name='smr']:checked").val(),
//        mealRequestDetail:              $("input[name='smrinput']").val(),  
//        pnation:                        $("select[name='pnation']").val(),
//        passportNO:                     $("input[name='passportno']").val(),     
//        passportname:                   $("input[name='passportname']").val(), 
//        placeOfIssue:                   $("input[name='placeOfIssue']").val(), 
//        issueDate:                      $("input[name='issueDate']").val(), 
//        passportEx:                     $("input[name='passportEx']").val(), 
//        other1:                         $("input[name='other1']").val(), 
//        memberno1:                      $("input[name='memberno1']").val(), 
//        memberName1:                    $("input[name='nameas1']").val(), 
//        memberEX1:                      $("input[name='expiry1']").val(), 
//        memberStatus1:                  $("input[name='status1']").val(), 
//        other2:                         $("input[name='other2']").val(), 
//        memberno2:                      $("input[name='memberno2']").val(), 
//        memberName2:                    $("input[name='nameas2']").val(), 
//        memberEX2:                      $("input[name='expiry2']").val(), 
//        memberStatus2:                  $("input[name='status2']").val(), 
//        other3:                         $("input[name='other3']").val(), 
//        memberno3:                      $("input[name='memberno3']").val(), 
//        memberName3:                    $("input[name='nameas3']").val(), 
//        memberEX3:                      $("input[name='expiry3']").val(), 
//        memberStatus3:                  $("input[name='status3']").val(),   
//    });
//});

 console.log('testing');

function myFunction() {
    var oneway = $("input[name='oneway']").is(':checked');

if (oneway == true)
 {
       
      console.log('checked');
     document.getElementById("dateofreturn").style.display = "none";
     var elem = document.getElementById("dor");
     elem.value = "NA";
 
 }
if (oneway == false)
 {
       
      console.log('unchecked');
     document.getElementById("dateofreturn").style.display = "block";
 
 }
    
}

//Program Validation
$('#travel').on("click keyup", function() {

     var valemptpr1 = true;
        var fname = document.forms["myForm"]["fname"].value;
        var lname = document.forms["myForm"]["lname"].value;
        var email = document.forms["myForm"]["email"].value;
        var destination = document.forms["myForm"]["destination"].value;
        var length = document.forms["myForm"]["length"].value;
        var city = document.forms["myForm"]["city"].value;
        var passportno = document.forms["myForm"]["passportno"].value;
        var placeOfIssue = document.forms["myForm"]["placeOfIssue"].value;
        var issueDate = document.forms["myForm"]["issueDate"].value;
        var passportEx = document.forms["myForm"]["passportEx"].value;
     
        var zz = document.forms["myForm"]["dor"].value;
        var yy = document.forms["myForm"]["dod"].value;
        var dcountry = document.forms["myForm"]["dcountry"].value;
        var pnation = document.forms["myForm"]["pnation"].value;
    if (zz == null || zz == "" || yy == null || yy == "" || dcountry == null || dcountry == "" || pnation == null || pnation == "" || dcountry == "Seprator" || fname == null || fname == "" || lname == null || lname == "" || email == null || email == "" || destination == null || destination == "" || length == null || length == "" || city == null || city == "" || passportno == null || passportno == "" || placeOfIssue == null || placeOfIssue == "" || issueDate == null || issueDate == "" || passportEx == null || passportEx== "") {
      valemptpr1 = false;
    }
    
    if ( valemptpr1 ) {
//        $('#travel-btn').removeClass("disabled");
        document.getElementById('travel-btn').disabled = false;
    }else {
//        $('#travel-btn').addClass("disabled");
         document.getElementById('travel-btn').disabled = true;
    }
    
});