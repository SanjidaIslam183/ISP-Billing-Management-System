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
    <button class="btn btn-outline-success" data-toggle="modal" data-target="#addPlan">Add</button>
    <button class="btn btn-outline-success" name="edit" id="edit" type="button" onclick="getDetails()">Edit</button>
    <button type="button" name="delete_all" id="delete_all" class="btn btn-outline-danger">Delete</button>
</nav>

</div>

<?php
$sql = "SELECT id,name,rate,speed FROM plan";
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
                            <th>Speed</th>
                            <th>Rate</th>
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
                                <td class="table-success">'.$row["speed"].'</td>
                                <td class="table-success">'.$row["rate"].'</td>
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

//Function For Plan
function addPlan() {

var pname=$('#pname').val();
var pspeed=$('#pspeed').val();
var pkrate=$('#pkrate').val();


$.ajax({
url:"insert.php",
type:'post',
data:{
    pname:pname,
    pspeed:pspeed,
    pkrate:pkrate
},
success:function(data,status) {
console.log(status);

$('#addPlan').modal("hide");
location.reload(true);
//$('#addModal').modal("hide");
//$('#addModal').modal("hide");
}
});
}

//Edit
function getDetails(checkbox_value) {

var checkbox = $('.delete_checkbox:checked');
if(checkbox.length == 1)
{
    var checkbox_value=$('.delete_checkbox:checked').val();
    console.log(checkbox_value);
    $.post("editplan.php", {checkbox_value:checkbox_value}, function(data,status){
    
    var id=JSON.parse(data);

    $('#ename').val(id.name);
    $('#espeed').val(id.speed);
    $('#erate').val(id.rate);
    $('#pid').val(id.id);

    console.log(data);


    });
    
    $('#editPlan').modal("show");

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
function updatePlan() {

            var ename=$('#ename').val();
            var espeed=$('#espeed').val();
            var erate=$('#erate').val();
            var pid=$('#pid').val();

            console.log(pid);

$.post("editplan.php",{
    
    ename:ename,
    espeed:espeed,
    erate:erate,
    pid:pid
    
    },function(data,status){

    $('#editPlan').modal("hide");
    location.reload(true);

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
            var checkboxp_value = [];
            $(checkbox).each(function(){
                checkboxp_value.push($(this).val());
            });

            $.ajax({
                url:"delete.php",
                method:"POST",
                data:{checkboxp_value:checkboxp_value},
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
