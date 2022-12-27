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
<form>

<div class="row">
    <div class="col my-2">
      <input type="text" class="form-control" name="username" id="username" placeholder=" Enter User Name">
    </div>
    <div class="col my-2">
      <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
    </div>
  </div>



  <div class="row">
  <div class="col my-2">
      <input type="text" class="form-control" name="name" id="name" placeholder="Enter You Full Name">
  </div>
  </div>
  

  <div class="row">
  <div class="col my-2">
      <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
  </div>
  </div>

  <div class="row">
  <div class="col my-2">
      <input type="email" class="form-control" name="mobile" id="mobile" placeholder="Enter Your Mobile Number">
  </div>
  </div>


<div class="row">
  <div class="col my-2">
<div class="input-group">
  <select class="custom-select" name="type" id="type">
    <option selected>Choose...</option>
    <option value="admin">Admin</option>
    <option value="manager">Manager</option>
  </select>
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="button" onclick="add()">Submit</button>
  </div>
</div>
</div>

</div>
</div>




</form>
</div>




                    </div>
                </div>
            </div>
        </div>
<!-- /#page-content-wrapper -->

        
    
    
    
    </div>



    <script>
    //Function For Add User
    function add() {

            var nameInsert=$('#name').val();
            var userInsert=$('#username').val();
            var passwordInsert=$('#password').val();
            var emailInsert=$('#email').val();
            var mobileInsert=$('#mobile').val();
            var typeInsert=$('#type'+' option:selected').val();

$.ajax({
    url:"insert.php",
    type:'post',
    data:{
        nameSend:nameInsert,
        userSend:userInsert,
        passwordSend:passwordInsert,
        emailSend:emailInsert,
        mobileSend:mobileInsert,
        typeSend:typeInsert,
    },
    success:function(data,status) {
        console.log(status);
        
        //$('#addModal').modal("hide");
        window.location = "employees.php";
        //$('#addModal').modal("hide");
        //$('#addModal').modal("hide");
    }
});
}
    </script>

    </body>
</html>
