<?php 
include("dashboard.php");
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


<?php
$user=$_SESSION['username'];
$sql="select * from `client` where username='$user'";
$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($result)){
    $id=$row["id"];
    $username=$row["username"];
    $password=$row["password"];
    $fullname=$row["fullname"];
    $nid=$row["nid"];
    $cell=$row["cell"];
    $dob=$row["dob"];
    $address=$row["address"];
    $email=$row["email"];
    $packageid=$row["package"];
    $balance=$row["duebalance"];
   // $response=$row;
}

$sql="SELECT id,name,rate FROM plan WHERE id=$packageid";
$result=mysqli_query($conn,$sql);
$r=mysqli_fetch_assoc($result);
$packagename=$r["name"];


?>

<div class="row">
<h1 class="display-1 center">Welcome <?php echo $fullname; ?> </h1>
<div>




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
        window.location = "client.php";
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


  
