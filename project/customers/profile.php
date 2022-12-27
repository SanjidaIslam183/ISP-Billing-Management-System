<?php
include("dashboard.php");
?>

<?php
$user=$_SESSION['username'];
$sql="select * from `client` where username='$user'";
$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($result)){
          $cid=$row["id"];
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
          $act=$row["activationdate"];
          $duedate=$row["duedate"];
   // $response=$row;
}

$sql="SELECT id,name,rate FROM plan WHERE id=$packageid";
$result=mysqli_query($conn,$sql);
$r=mysqli_fetch_assoc($result);
$packagename=$r["name"];


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
      <label>User Name</label>
      <input type="text" class="form-control" name="username" id="username" placeholder="User Name" value="<?php echo $username;?>" disabled>
    </div>
    <div class="col my-2">
    <label>Password</label>
      <input type="text" class="form-control" id="password" name="password" placeholder="Password" value="<?php echo $password;?>">
    </div>
  </div>

  <div class="row">
    <div class="col my-2">
    <label>Client ID</label>
      <input type="text" class="form-control" id="cid" name="cid" placeholder="Full Name" value="<?php echo $cid;?>" disabled>
    </div>
  </div>

  <div class="row">
    <div class="col my-2">
    <label>Full Name</label>
      <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name" value="<?php echo $fullname;?>">
    </div>
  </div>

  <div class="row">
    <div class="col my-2">
    <label>NID NO</label>
      <input type="text" class="form-control" id="nid" name="nid" placeholder="NID" value="<?php echo $nid;?>">
    </div>
  </div>

  <div class="row">
  <div class="col my-2">
      <label>Date Of Birth</label>
      <input type="date" class="form-control" name="dob" id="dob" placeholder="DOB" value="<?php echo $dob;?>">
  </div>
  </div>

  <div class="row">
    <div class="col my-2">
      <label>Address</label>
      <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="<?php echo $address;?>">
    </div>
  </div>

  <div class="row">
  <div class="col my-2">
  <label>Email Address</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" value="<?php echo $email;?>">
  </div>
  </div>

  <div class="row">
    <div class="col my-2">
    <label>Mobile No</label>
      <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile" value="<?php echo $cell;?>">
    </div>
  </div>


  <div class="row">
  <div class="col my-2">
  <label>Activation Date</label>
      <input type="date" class="form-control" name="activedate" id="actdate" placeholder="Activation Date" disabled value="<?php echo $act;?>">
  </div>
  </div>


  <div class="row">
  <div class="col my-2">
  <label>Due Date</label>
      <input type="text" class="form-control" name="duedate" id="duedate" placeholder="Due Date" value="<?php echo $duedate;?>" disabled>
  </div>
  </div>

  <div class="row">
  <div class="col my-2">

  <label>Current Package</label>
      <input type="text" class="form-control" name="package" id="package" placeholder="Package" value="<?php echo $packagename;?>" disabled>
  </div>
  </div>

  <div class="row">
  <div class="col my-2">
    <label>Due Balance</label>
      <input type="text" class="form-control" name="dueBalance" id="dueBalance" placeholder="Due Balance" value="<?php echo $balance;?>" disabled>
  </div>
  </div>


  <div class="text-center my-2">
<button type="button" class="btn btn-primary" onclick="update()">Update</button>
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
    //on click update
function update() {

var username=$('#username').val();
var password=$('#password').val();
var fullname=$('#fullname').val();
var nid=$('#nid').val();
var address=$('#address').val();
var email=$('#email').val();
var mobile=$('#mobile').val();
var dob=$('#dob').val();
var cid=$('#cid').val();

console.log(cid);

$.post("editclient.php",{

username:username,
password:password,
fullname:fullname,
nid:nid,
address:address,
email:email,
mobile:mobile,
dob:dob,
cid:cid

},function(data,status){
location.reload(true);

});

}


    </script>

    </body>
</html>
