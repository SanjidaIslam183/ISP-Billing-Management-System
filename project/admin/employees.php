<?php
include("dashboard.php");
include("database.php");
include("modal.php");
?>

<form action="invoice.php" name="invoiceid" method="post">
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
$sql = "SELECT * FROM user WHERE 1";
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
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>User Type</th>
                        </tr>
                        </thead>
                        <?php
                        foreach($result as $row)
                        {
                            echo '
                            <tr>
                                <td class="table-success">
                                    <input type="checkbox" class="delete_checkbox" value="'.$row["uid"].'" />
                                </td>
                                <td class="table-success">'.$row["uid"].'</td>
                                <td class="table-success">'.$row["username"].'</td>
                                <td class="table-success">'.$row["password"].'</td>
                                <td class="table-success">'.$row["name"].'</td>
                                <td class="table-success">'.$row["email"].'</td>
                                <td class="table-success">'.$row["cell"].'</td>
                                <td class="table-success">'.$row["type"].'</td>
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

//Edit
function getDetails(checkbox_value) {

var checkbox = $('.delete_checkbox:checked');
if(checkbox.length == 1)
{
    var checkbox_value=$('.delete_checkbox:checked').val();
    console.log(checkbox_value);
    $.post("edit.php", {checkbox_value:checkbox_value}, function(data,status){
    
    var id=JSON.parse(data);
    $('#edituser').val(id.username);
    $('#editPassword').val(id.password);
    $('#editName').val(id.name);
    $('#editMobile').val(id.cell);
    $('#editEmail').val(id.email);
    $('#editType').val(id.type);
    $('#urid').val(id.uid);

    console.log(data);


    });
    
    $('#editModal').modal("show");

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
function updateUser() {

var edituser=$('#edituser').val();
var editPassword=$('#editPassword').val();
var editName=$('#editName').val();
var editMobile=$('#editMobile').val();
var editEmail=$('#editEmail').val();
var editType=$('#editType').val();
var urid=$('#urid').val();


$.post("edit.php",{
    
    edituser:edituser,
    editPassword:editPassword,
    editName:editName,
    editMobile:editMobile,
    editEmail:editEmail,
    editType:editType,
    urid:urid
    
    },function(data,status){

        console.log(data);
        console.log(status);

    $('#editModal').modal("hide");
    location.reload(true);

});




}

//Create Invoice
function createInvoice(checkbox_value) {

var checkbox = $('.delete_checkbox:checked');

if(checkbox.length == 1)
{
    var checkbox_value=$('.delete_checkbox:checked').val();
    console.log(checkbox_value);
    $('#inputCheckedValue').val(checkbox_value);
    document.invoiceid.submitForInvoice.click();

    



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

//Function For Add User

function add() {

            var nameInsert=$('#insertName').val();
            var userInsert=$('#insertUName').val();
            var passwordInsert=$('#insertPassword').val();
            var emailInsert=$('#insertEmail').val();
            var mobileInsert=$('#insertMobile').val();
            var addressInsert=$('#insertAddress').val();

$.ajax({
    url:"insert.php",
    type:'post',
    data:{
        nameSend:nameInsert,
        userSend:userInsert,
        passwordSend:passwordInsert,
        emailSend:emailInsert,
        mobileSend:mobileInsert,
        addressSend:addressInsert,
    },
    success:function(data,status) {
        console.log(status);
        
        $('#addModal').modal("hide");
        location.reload(true);
        //$('#addModal').modal("hide");
        //$('#addModal').modal("hide");
    }
});
}
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
            var checkbox_value = [];
            $(checkbox).each(function(){
                checkbox_value.push($(this).val());
            });

            $.ajax({
                url:"delete.php",
                method:"POST",
                data:{checkbox_value:checkbox_value},
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
