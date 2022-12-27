<?php
include("dashboard.php");
include("database.php");
include("modal.php");
?>

<form action="editclient.php" name="invoiceid" method="post">
  <input type="hidden" id="inputCheckedValue" name="inputCheckedValue">
  <input type="submit" value="" name="submitForInvoice" style="display:none">
</form>



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

<nav class="navbar navbar-light bg-light">
    <button class="btn btn-outline-success" name="edit" id="edit" type="button" onclick="getDetails()">Edit</button>
    <button type="button" name="delete_all" id="delete_all" class="btn btn-outline-danger">Delete</button>
</nav>

</div>

<?php
$sql = "SELECT id,username,password,fullname,nid,dob,address,email,cell,package,activationdate,duedate,duebalance,otc,status FROM client";
$result=mysqli_query($conn,$sql);
?>

<div class="table-responsive">  
    <div class="table-responsive">
                    <table class="table text-center">
                        <thead>
                        <tr>
                            <th>Select</th>
                            <th>ID</th>
                            <th>User</th>
                            <th>Password</th>
                            <th>Name</th>
                            <th>Package</th>
                            <th>Mobile</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <?php
                        foreach($result as $row)
                        {
                            $status=$row["status"];
                            $packageid=$row["package"];

                            $sql="SELECT id,name,rate FROM plan WHERE id=$packageid";
                            $result=mysqli_query($conn,$sql);

                            $r=mysqli_fetch_assoc($result);


                            if ($status==1) {

                                $status="Active";

                            }

                            else {

                                $status="Deactive";

                            }

                            echo '
                            <tr>
                                <td class="table-success">
                                    <input type="checkbox" class="delete_checkbox" value="'.$row["id"].'" />
                                </td>
                                <td class="table-success">'.$row["id"].'</td>
                                <td class="table-success">'.$row["username"].'</td>
                                <td class="table-success">'.$row["password"].'</td>
                                <td class="table-success">'.$row["fullname"].'</td>
                                <td class="table-success">'.$r["name"].'</td>
                                <td class="table-success">'.$row["cell"].'</td>
                                <td class="table-success">'.$status.'</td>
                            </tr>
                            ';
                        }
                        ?>
                    </table>
                </div>
   </div>  






                    </div>
                </div>
            </div>
        </div>
<!-- /#page-content-wrapper -->

        
    
    
    
    </div>


    <script>

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

//Edit
function getDetails(checkbox_value) {

var checkbox = $('.delete_checkbox:checked');
if(checkbox.length == 1)
{
    var checkbox_value=$('.delete_checkbox:checked').val();
    console.log(checkbox_value);
    $.post("editclient.php", {checkbox_value:checkbox_value}, function(data,status){
    
    var id=JSON.parse(data);

    $('#username').val(id.username);
    $('#password').val(id.password);
    $('#fullname').val(id.fullname);
    $('#nid').val(id.nid);
    $('#dob').val(id.dob);
    $('#address').val(id.address);
    $('#email').val(id.email);
    $('#mobile').val(id.cell);
    $('#actdate').val(id.activationdate);
    $('#duedate').val(id.duedate);
    $('#dueBalance').val(id.duebalance);
    $('#actdate').val(id.activationdate);
    $('#package').val(id.package);
    $('#cid').val(id.id);

    console.log(data);


    });
    
    $('#editClientModal').modal("show");

}
else if(checkbox.length>1)
{
    alert("Muliple Edit Not Possible");        
}

else
{
    alert("Select atleast one records");
}

}

//on click update
function updateClient() {

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
            actdate:actdate,
            duedate:duedate,
            package:package,
            prate:prate,
            otc:otc,
            dueBalance:dueBalance,
            paidBalance:paidBalance,
            dob:dob,
            cid:cid
    
    },function(data,status){

    $('#editModal').modal("hide");
    location.reload(true);

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

<style>
.removeRow
{
    background-color: #FF0000;
    color:#FFFFFF;
}
</style>
<script>  
$(document).ready(function(){ 

    $('.delete_checkbox').click(function(){
        if($(this).is(':checked'))
        {
            $(this).closest('tr').addClass('removeRow');
        }
        else
        {
            $(this).closest('tr').removeClass('removeRow');
        }
    });

    $('#delete_all').click(function(){
        var checkbox = $('.delete_checkbox:checked');
        if(checkbox.length > 0)
        {
            var checkboxc_value = [];
            $(checkbox).each(function(){
                checkboxc_value.push($(this).val());
            });

            $.ajax({
                url:"delete.php",
                method:"POST",
                data:{checkboxc_value:checkboxc_value},
                success:function()
                {
                    $('.removeRow').fadeOut(1500);
                }
            });
        }
        else
        {
            alert("Select atleast one records");
        }
    });

    // $('#edit').click(function(){
    //     var checkbox = $('.delete_checkbox:checked');
    //     if(checkbox.length == 1)
    //     {
    //         var checkbox_value=$('.delete_checkbox:checked').val();

    //         alert(checkbox_value);
    //         $.post("edit.php", {checkbox_value:checkbox_value}, function(data,status){
    //         var userid=JSON.parse(data);

    //     $('#editName').val(userid.name);
    //     $('#editUser').val(userid.user);
    //     $('#editPass').val(userid.pass);
    //     $('#editEmail').val(userid.email);
    //     $('#editMobile').val(userid.cell);
    //     $('#editAddress').val(userid.address);
       
    //         });

    //     $('#editModal').modal("show");
   
    //     }
    //     else if(checkbox.length>1)
    //     {
    //         alert("Muliple Edit Not Possible");        
    //     }

    //     else
    //     {
    //         alert("Select atleast one records");
    //     }
    // });

});

</script>
