<!-- Add Modal Start -->

<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addModalLabel">Reseller Registration From</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
    <div class="form-group">
        <label for="insertName">Reseller Name </label>
        <input type="text" class="form-control" id="insertName"  placeholder="Enter Reseller Name">
    </div>

    <div class="form-group">

        <label for="insertUName">User Name</label>
        <input type="text" class="form-control" id="insertUName"  placeholder="Enter User Name">

    </div>

    <div class="form-group">
        <label for="insertPassword">Password</label>
        <input type="text" class="form-control" id="insertPassword"  placeholder="Enter Password">
        
    </div>

    <div class="form-group">
        <label for="insertEmail">Email</label>
        <input type="text" class="form-control" id="insertEmail"  placeholder="Enter Email">
        
    </div>

    <div class="form-group">
        <label for="insertMobile">Mobile</label>
        <input type="text" class="form-control" id="insertMobile"  placeholder="Enter Mobile Number">
        
    </div>

    <div class="form-group">
        <label for="insertAddress">Address</label>
        <input type="text" class="form-control" id="insertAddress"  placeholder="Enter Full Address">
        
    </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-dark" onclick="add()">Submit</button>
      </div>
    </div>
  </div>
</div>

<!-- Add Modal END -->

<!-- Edit Modal Start -->

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addModalLabel">Update User Information From</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
    <div class="form-group">
        <label for="editName">User Name</label>
        <input type="text" class="form-control" id="edituser"  placeholder="Enter User Name">
    </div>

    <div class="form-group">

        <label for="editUser">Password</label>
        <input type="text" class="form-control" id="editPassword"  placeholder="Enter User Name">

    </div>

    <div class="form-group">
        <label for="editPass">Name</label>
        <input type="text" class="form-control" id="editName"  placeholder="Enter Name">
        
    </div>

   

    <div class="form-group">
        <label for="editMobile">Mobile</label>
        <input type="text" class="form-control" id="editMobile"  placeholder="Enter Mobile Number">
    </div>

    <div class="form-group">
        <label for="editMobile">Email</label>
        <input type="text" class="form-control" id="editEmail"  placeholder="Enter Mobile Number">
    </div>


    <div class="form-group">
        <label for="editType">Type</label>
        <select class="custom-select" name="type" id="editType">
        <option selected>Choose...</option>
        <option value="admin">Admin</option>
        <option value="manager">Manager</option>
        </select>
        
    </div>

    <input type="text" class="form-control d-none" id="urid">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-dark" onclick="updateUser()">Update</button>
      </div>
    </div>
  </div>
</div>

<!-- Edit Modal END -->

<!-- Edit Res Modal Start -->

<div class="modal fade" id="eresModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addModalLabel">Update Reseller Information From</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
    <div class="form-group">
        <label for="editName">User Name</label>
        <input type="text" class="form-control" id="resUser"  placeholder="Enter User Name">
    </div>

    <div class="form-group">

        <label for="editUser">Password</label>
        <input type="text" class="form-control" id="resPass"  placeholder="Enter User Name">

    </div>

    <div class="form-group">
        <label for="editPass">Name</label>
        <input type="text" class="form-control" id="resName"  placeholder="Enter Name">
        
    </div>

   

    <div class="form-group">
        <label for="editMobile">Mobile</label>
        <input type="text" class="form-control" id="resMobile"  placeholder="Enter Mobile Number">
    </div>

    <div class="form-group">
        <label for="editMobile">Email</label>
        <input type="text" class="form-control" id="resEmail"  placeholder="Enter Email Number">
    </div>

    <div class="form-group">
        <label for="editMobile">Address</label>
        <input type="text" class="form-control" id="resAddress"  placeholder="Enter Address">
    </div>

    
    <div class="form-group">
        <label for="editMobile">NID</label>
        <input type="text" class="form-control" id="resNID"  placeholder="Enter NID Number">
    </div>

    <div class="form-group">
        <label for="editMobile">DOB</label>
        <input type="date" class="form-control" id="resDOB"  placeholder="Enter Date Of Birth">
    </div>





    <input type="text" class="form-control d-none" id="resID">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-dark" onclick="updateReseller()">Update</button>
      </div>
    </div>
  </div>
</div>

<!-- Edit Modal END -->

<!-- Modal For Edit Client -->

<div class="modal fade" id="editClientModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addModalLabel">Update User Information From</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
    <div class="form-group">
        <label for="editName">User Name</label>
        <input type="text" class="form-control" name="username" id="username" placeholder="User Name">
    </div>

    <div class="form-group">

        <label for="editUser">Password</label>
        <input type="text" class="form-control" id="password" name="password"  placeholder="Password">

    </div>

    <div class="form-group">
        <label for="editPass">Full Name</label>
        <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name">
        
    </div>

    <div class="form-group">
        <label for="editEmail">NID</label>
        <input type="text" class="form-control" id="nid" name="nid" placeholder="NID">
        
    </div>

    <div class="form-group">
        <label for="editEmail">DOB</label>
        <input type="date" class="form-control" name="dob" id="dob" placeholder="DOB">
        
    </div>

    <div class="form-group">
        <label for="editMobile">Address</label>
        <input type="text" class="form-control" id="address" name="address" placeholder="Address">
    </div>

    <div class="form-group">
        <label for="editMobile">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
    </div>

    <div class="form-group">
        <label for="editMobile">Mobile</label>
        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile">
    </div>

    <div class="form-group">
        <label for="editMobile">Activation Date</label>
        <input type="date" class="form-control" name="activedate" id="actdate" placeholder="Activation Date">
    </div>

    <div class="form-group">
        <label for="editMobile">Due Date</label>
        <input type="text" class="form-control" name="duedate" id="duedate" placeholder="Due Date">
    </div>

    <div class="form-group">
        <label for="editMobile">Package</label>
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

    <div class="form-group">
        <label for="editAddress">Package Rate</label>
        <input type="text" class="form-control" name="prate" id="prate" placeholder="Package Rate">
    </div>

    <div class="form-group">
        <label for="editAddress">OTC</label>
        <input type="text" class="form-control" name="otc" id="otc" placeholder="OTC CHARGE">
    </div>

    <div class="form-group">
        <label for="editAddress">Due Balance</label>
        <input type="text" class="form-control" name="dueBalance" id="dueBalance" placeholder="Due Balance">
    </div>

    <div class="form-group">
        <label for="editAddress">Paid Balance</label>
        <input type="text" class="form-control" name="paidBalance" id="paidBalance"  placeholder="Paid Balance">
    </div>
    
    <input type="text" class="form-control d-none" id="cid">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-dark" onclick="updateClient()">Update</button>
      </div>
    </div>
  </div>
</div>

<!-- Edit Modal END -->

<!-- Modal For Add Package -->

<div class="modal fade" id="addPlan" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addModalLabel">Add Package From</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
    <div class="form-group">
        <label for="packagename">Package Name</label>
        <input type="text" class="form-control" name="pname" id="pname" placeholder="Package Name">
    </div>

    <div class="form-group">

        <label for="speed">Speed</label>
        <input type="text" class="form-control" id="pspeed" name="pspeed"  placeholder="Speed">

    </div>

    <div class="form-group">
        <label for="rate">Package Rate</label>
        <input type="text" class="form-control" id="pkrate" name="pkrate" placeholder="Rate">
        
    </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-dark" onclick="addPlan()">Submit</button>
      </div>
    </div>
  </div>
</div>

<!-- Add Plan Modal END -->

<!-- Modal For Edit Package -->

<div class="modal fade" id="editPlan" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addModalLabel">Add Package From</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
    <div class="form-group">
        <label for="packagename">Package Name</label>
        <input type="text" class="form-control" name="ename" id="ename" placeholder="Package Name">
    </div>

    <div class="form-group">

        <label for="speed">Speed</label>
        <input type="text" class="form-control" id="espeed" name="espeed"  placeholder="Speed">

    </div>

    <div class="form-group">
        <label for="rate">Package Rate</label>
        <input type="text" class="form-control" id="erate" name="erate" placeholder="Rate">
        
    </div>

    <input type="text" class="form-control d-none" id="pid">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-dark" onclick="updatePlan()">Submit</button>
      </div>
    </div>
  </div>
</div>

<!-- Plan Edit END -->
