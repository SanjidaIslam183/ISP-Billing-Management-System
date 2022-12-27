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

    <button class="btn btn-outline-success" type="button" onclick="createInvoice()">Create Invoice</button>
    <button class="btn btn-outline-success" type="button" onclick="getDetails()">Edit</button>
    <button type="button" name="delete_all" id="delete_all" class="btn btn-outline-danger">Delete</button>

</nav>

</div>

<?php
$sql = "SELECT * FROM reseller where 1";
$result=mysqli_query($conn,$sql);
?>

<div class="table-responsive">  
    <div class="table-responsive">
                    <table class="table text-center">
                        <thead>
                        <tr>
                            <th>Select</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>NID</th>
                            <th>DOB</th>
                            <th>Mobile</th>
                            <th>Address</th>
                        </tr>
                        </thead>
                        <?php
                        foreach($result as $row)
                        {
                            echo '
                            <tr>
                                <td class="table-success">
                                    <input type="checkbox" class="delete_checkbox" value="'.$row["id"].'" />
                                </td>
                                <td class="table-success">'.$row["id"].'</td>
                                <td class="table-success">'.$row["name"].'</td>
                                <td class="table-success">'.$row["nid"].'</td>
                                <td class="table-success">'.$row["dob"].'</td>
                                <td class="table-success">'.$row["cell"].'</td>
                                <td class="table-success">'.$row["address"].'</td
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
    var checkboxer_value=$('.delete_checkbox:checked').val();
    console.log(checkboxer_value);
    $.post("edit.php", {checkboxer_value:checkboxer_value}, function(data,status){
    console.log(data);
    var uid=JSON.parse(data);
    $('#resName').val(uid.name);
    $('#resUser').val(uid.username);
    $('#resPass').val(uid.password);
    $('#resEmail').val(uid.email);
    $('#resMobile').val(uid.cell);
    $('#resAddress').val(uid.address);
    $('#resNID').val(uid.nid);
    $('#resDOB').val(uid.dob);
    $('#resID').val(uid.id);

    });

    $('#eresModal').modal("show");

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
function updateReseller() {

var resName=$('#resName').val();
var resUser=$('#resUser').val();
var resPass=$('#resPass').val();
var resEmail=$('#resEmail').val();
var resAddress=$('#resAddress').val();
var resMobile=$('#resMobile').val();
var resNID=$('#resNID').val();
var resDOB=$('#resDOB').val();
var resID=$('#resID').val();


$.post("edit.php",{
    
    resName:resName,
    resUser:resUser,
    resPass:resPass,
    resEmail:resEmail,
    resAddress:resAddress,
    resMobile:resMobile,
    resNID:resNID,
    resDOB:resDOB,
    resID:resID
    
    },function(data,status){

    $('#eresModal').modal("hide");
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
            var checkboxr_value = [];
            $(checkbox).each(function(){
                checkboxr_value.push($(this).val());
            });

            $.ajax({
                url:"delete.php",
                method:"POST",
                data:{checkboxr_value:checkboxr_value},
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
