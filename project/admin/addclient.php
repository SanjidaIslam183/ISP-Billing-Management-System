<?php
include("dashboard.php");
include("database.php");
?>
<!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>
            <div class="container">
                <div class="row">
                    <div class="container">

<div class="d-flex justify-content-center">
<from>
<div class="row">
    <div class="col my-2">
      <lebel>User Name </lebel>
      <input type="text" class="form-control" name="username" id="username" placeholder="User Name">
    </div>
    <div class="col my-2">
    <lebel>Password </lebel>
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
  </div>

  <div class="row">
    <div class="col my-2">
    <lebel>Full Name </lebel>
      <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name">
    </div>
  </div>

  <div class="row">
    <div class="col my-2">
    <lebel>NID</lebel>
      <input type="text" class="form-control" id="nid" name="nid" placeholder="NID">
    </div>
  </div>

  <div class="row">
  <div class="col my-2">
  <lebel>Date Of Birth</lebel>
      <input type="date" class="form-control" name="dob" id="dob" placeholder="DOB">
  </div>
  </div>

  <div class="row">
    <div class="col my-2">
    <lebel>Address </lebel>
      <input type="text" class="form-control" id="address" name="address" placeholder="Address">
    </div>
  </div>

  <div class="row">
  <div class="col my-2">
  <lebel>Email </lebel>
      <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
  </div>
  </div>

  <div class="row">
    <div class="col my-2">
    <lebel>Mobile No </lebel>
      <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile">
    </div>
  </div>


  <div class="row">
  <div class="col my-2">
  <lebel>Activation Date </lebel>
      <input type="date" class="form-control" name="activedate" id="actdate" placeholder="Activation Date">
  </div>
  </div>


  <div class="row">
  <div class="col my-2">
  <lebel>Due Date</lebel>
      <input type="text" class="form-control" name="duedate" id="duedate" placeholder="Due Date" value="">
  </div>
  </div>

  <div class="row">
  <div class="col my-2">
  <lebel>Package </lebel>

  <select class="form-control form-select text-center" id="package" name="package" style="">
    <option selected>Select Package</option>
    
    <?php

    $sql = "SELECT id,name FROM plan";
    $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
    while( $rows = mysqli_fetch_assoc($resultset) ) { 
    
    ?>
   <option id="P<?php echo $rows["id"]; ?>" value="<?php echo $rows["id"]; ?>"> <?php echo $rows["name"]; ?> </option>
   <?php }	?>
  </select>

  </div>
  </div>

  <div class="row">
  <div class="col my-2">
  <lebel>Package Rate</lebel>
      <input type="text" class="form-control" name="prate" id="prate" value="" placeholder="Package Rate">
  </div>
  </div>

  <div class="row">
  <div class="col my-2">
  <lebel>One Time Cost</lebel>
      <input type="text" class="form-control" name="otc" id="otc" value="" placeholder="OTC CHARGE">
  </div>
  </div>


  <div class="row">
  <div class="col my-2">
  <lebel>Due Balance</lebel>
      <input type="text" class="form-control" name="dueBalance" id="dueBalance" value="" placeholder="Due Balance">
  </div>
  </div>

  <div class="row">
  <div class="col my-2">
  <lebel>Paid Balance</lebel>
      <input type="text" class="form-control" name="paidBalance" id="paidBalance" value="" placeholder="Paid Balance">
  </div>
  </div>


  <div class="text-center my-2">
<button type="button" class="btn btn-primary" onclick="add()">Insert</button>
</div>
</div>
</div>

</from>




                    </div>
                </div>
            </div>
        </div>
<!-- /#page-content-wrapper -->

        
    
    
    
    </div>



    <script>
    //Function For Add User
    function add() {

            var username=$('#username').val();
            var password=$('#password').val();
            var fullname=$('#fullname').val();
            var nid=$('#nid').val();
            var address=$('#address').val();
            var email=$('#email').val();
            var mobile=$('#mobile').val();
            var actdate=$('#actdate').val();
            var duedate=$('#duedate').val();
            var package=$('#package'+' option:selected').val();
            var prate=$('#prate').val();
            var otc=$('#otc').val();
            var dueBalance=$('#dueBalance').val();
            var paidBalance=$('#paidBalance').val();
            var dob=$('#dob').val();
            
            
$.ajax({
    url:"insert.php",
    type:'post',
    data:{
        username:username,
        password:password,
        fullname:fullname,
        nid:nid,
        address:address,
        email:email,
        mobile:mobile,
        actdate:actdate,
        duedate:duedate,
        package:package,
        prate:prate,
        otc:otc,
        dueBalance:dueBalance,
        paidBalance:paidBalance,
        dob:dob
    },
    success:function(data,status) {
        console.log(status);
        
        //$('#addModal').modal("hide");
        window.location = "clients.php";
        //$('#addModal').modal("hide");
        //$('#addModal').modal("hide");
    }
});
}

$(document).ready(function () {

  $('#otc').keyup(function(){

               var price = $('#prate').val();
               var otc = parseInt($('#otc').val());
               var activedate = $('#actdate').val();
               var dt = new Date(activedate);

               console.log(dt);
               console.log(price);

               var month=dt.getMonth();
               var year=dt.getFullYear();
               
               var lastday=new Date(year, month+1, 0).getDate();

               console.log(lastday);

               var dt2 =new Date(year, month, lastday);

               console.log(dt2);

               var time_difference = dt.getTime() - dt2.getTime();
               var days = time_difference / (1000*3600*24);
               
               var day=Math.round(Math.abs(days)+1);

               //var day=days+1;

               console.log(day);


               var total=parseInt((price/lastday)*day);
              
              
               console.log(total);
               console.log(otc);

               $('#dueBalance').val(total+otc);
              
         });

$('#package').change(function(){


    var packageid=$('#package'+' option:selected').val();
    console.log(packageid);
    
    $.post("edit.php", {packageid:packageid}, function(data,status){
    var id=JSON.parse(data);
    
    $('#prate').val(id.rate);
    console.log(data);

});

});


});
    </script>

    </body>
</html>
