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

    <button type="button" name="delete_all" id="delete_all" class="btn btn-outline-danger">Delete</button>
    <!-- <button class="btn btn-outline-success" type="button" onclick="editinvoice()">Edit Invoice</button> -->

</nav>

</div>

<?php
$sql = "SELECT invnumber,username,date,duedate,subtotal,totalamount,vatamount,totaldue,totalpaid FROM `finalinvoice` ORDER BY invnumber DESC";
$result=mysqli_query($conn,$sql);
?>

<div class="table-responsive">  
    <div class="table-responsive">
                    <table class="table text-center">
                        <thead>
                        <tr>
                            <th>Select</th>
                            <th>Invoice Number</th>
                            <th>Invoice User</th>
                            <th>Date</th>
                            <th>Due Date</th>
                            <th>Sub Total</th>
                            <th>Vat</th>
                            <th>Total</th>
                            <th>Total Due</th>
                            <th>Total Paid</th>
                        </tr>
                        </thead>
                        <?php
                        foreach($result as $row)
                        {
                            echo '
                            <tr>
                                <td class="table-success">
                                    <input type="checkbox" class="delete_checkbox" value="'.$row["invnumber"].'" />
                                </td>
                                <td class="table-success">'.$row["invnumber"].'</td>
                                <td class="table-success">'.$row["username"].'</td>
                                <td class="table-success">'.$row["date"].'</td>
                                <td class="table-success">'.$row["duedate"].'</td>
                                <td class="table-success">'.$row["subtotal"].'</td>
                                <td class="table-success">'.$row["vatamount"].'</td>
                                <td class="table-success">'.$row["totalamount"].'</td>
                                <td class="table-success">'.$row["totaldue"].'</td>
                                <td class="table-success">'.$row["totalpaid"].'</td>
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
    console.log(data);
    var uid=JSON.parse(data);
    $('#editName').val(uid.name);
    $('#editUser').val(uid.user);
    $('#editPass').val(uid.pass);
    $('#editEmail').val(uid.email);
    $('#editMobile').val(uid.cell);
    $('#editAddress').val(uid.address);

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

//Create Invoice
function editInvoice(checkbox_value) {

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
            var checkboxi_value = [];
            $(checkbox).each(function(){
                checkboxi_value.push($(this).val());
            });

            $.ajax({
                url:"delete.php",
                method:"POST",
                data:{checkboxi_value:checkboxi_value},
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