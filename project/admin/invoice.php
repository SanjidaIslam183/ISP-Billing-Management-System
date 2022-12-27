<?php
include 'database.php';
include("session.php");
$month=date('m');
$year=date('y');

if (isset($_POST['inputCheckedValue'])) {
    $cid=$_POST['inputCheckedValue'];
    //echo $cid;
    
    $idgen="insert into `invoice_seq` values (0)";
    $result0=mysqli_query($conn,$idgen);
    $lastid = mysqli_insert_id($conn);
    $invno=str_pad($lastid,4,"0",STR_PAD_LEFT);
    //echo $invno;


    $sql="SELECT * FROM reseller WHERE id='$cid'";
    $result=mysqli_query($conn,$sql);
    $response=array();

    while($row=mysqli_fetch_assoc($result)){
        $name=$row["name"];
        $email=$row["email"];
        $address=$row["address"];
        $mobile=$row["cell"];
        $user=$row["username"];
       // $response=$row;
    }
    
    //$Mobile=substr($mobile,8);
    //$invoiceNum="INV_".$year."_".$cid."_".$month."_".$Mobile;
    $invoiceNum="INV_".$invno;

    //echo json_encode($response);
}

else{
$response['status']=200;
$response['message']="Invalid or data Not Found";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cash In</title>



    
</head>
<body>


<link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="css/custom.css">


<div class="container my-3" id="displayCard"></div>


<div class="container my-3">

    <div class="row">

    <div class="col">
    <h1 class="display-5 text-left font-weight-bold">LOGO</h1>
    </div>

    </div>
    
    <div class="row">
    <div class="col">

    
      
    <input class="form-control form-control-sm font-weight-bold" type="text" placeholder="Company Name" value="AK Networks" style="border:none">
    <input class="form-control form-control-sm" type="text" placeholder="Your Name" value="Baktir MD Jewel" style="border:none">
    <input class="form-control form-control-sm" type="text" placeholder="Address" value="Holding No 175/12,Bhanga Town,Bhanga,Faridpur" style="border:none">
    <input class="form-control form-control-sm" type="text" placeholder="Email" value="support@aknetworksbd.com" style="border:none">
    <input class="form-control form-control-sm" type="text" placeholder="Mobile" value="+8809636000786" style="border:none">
    

      
    
    <!-- <div class="shadow-none p-3 mb-1 bg-light rounded col-sm-4">Full Name:</div>

    <div class="shadow-none p-3 mb-1 bg-light rounded col-sm-4">Email: </div>

    <div class="shadow-none p-3 mb-1 bg-light rounded col-sm-4 ">Mobile: </div>

    <div class="shadow-none p-3 mb-1 bg-light rounded col-sm-4">Address: </div> -->

    </div>
    <div class="col">
    <h1 class="display-5 text-right font-weight-bold">INVOICE</h1>
    </div>
  </div> 



    
    <div class="row">
    <div class="col">
      
    <input class="form-control form-control-sm font-weight-bold" type="text" placeholder="Bill TO" value="Bill To:" style="border:none">
    <input class="form-control form-control-sm" type="text" placeholder="Your Name" id="name" value="<?php echo $name;?>" style="border:none">
    <input class="form-control form-control-sm" type="text" placeholder="Address" id="address"value="<?php echo $address;?>" style="border:none">
    <input class="form-control form-control-sm" type="text" placeholder="Email" id="email" value="<?php echo $email;?>" style="border:none">
    <input class="form-control form-control-sm" type="text" placeholder="Mobile" id="mobile" value="<?php echo $mobile;?>" style="border:none">
    <input class="form-control form-control-sm" type="hidden" placeholder="user" id="user" value="<?php echo $user;?>" style="border:none">

      
    
    <!-- <div class="shadow-none p-3 mb-1 bg-light rounded col-sm-4">Full Name:</div>

    <div class="shadow-none p-3 mb-1 bg-light rounded col-sm-4">Email: </div>

    <div class="shadow-none p-3 mb-1 bg-light rounded col-sm-4 ">Mobile: </div>

    <div class="shadow-none p-3 mb-1 bg-light rounded col-sm-4">Address: </div> -->

    </div>
    
  <div class="col">

    <div class="row justify-content-end">
        <div class="col-auto">
        <input class="form-control form-control-sm font-weight-bold text-right" type="text" placeholder="Invoice No" value="Invoice#:" style="border:none">
        <input class="form-control form-control-sm font-weight-bold text-right" type="text" placeholder="Invoice Date:" value="Invoice Date:" style="border:none">
        <input class="form-control form-control-sm font-weight-bold text-right" type="text" placeholder="Due Date" value="Due Date:" style="border:none">
    </div> 

    <div class="col-auto">
        <input class="form-control form-control-sm font-weight-bold text-right" type="text" placeholder="Invoice No" id="invoNo" value="<?php echo $invoiceNum;?>" style="border:none">
        <input class="form-control form-control-sm font-weight-bold text-right" type="date" placeholder="Invoice Date:" id="invoDate" value="" style="border:none">
        <input class="form-control form-control-sm font-weight-bold text-right" type="date" placeholder="Due Date" id="dueDate" value="" style="border:none">
    </div> 

  </div>
  </div>
    
  </div> 

<!-- 

<select class="form-select col-sm-4 mb-2 rounded border-light" aria-label="Default select example">
  <option selected>Select User </option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select> 

-->


<table class="table">
  <thead>
    <tr class="table-secondary rounded mb-2 font-weight-bold text-center">
      <th scope="col ">SL</th>
      <th scope="col">Item</th>
      <th scope="col">Start Date</th>
      <th scope="col">End Date</th>
      <th scope="col">QTY</th>
      <th scope="col">Price</th>
      <th scope="col">Total</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody id="tbody">

  </tbody>

  
</table>




<div class="row">
    <div class="col">
    <button class="btn btn-danger" id="addBtn"><span></span>Add Line Item</button>
    <button class="btn btn-success" id="Save" onclick="save()"><span></span>Save</button>
    </div>

    <div class="col">

    <div class="d-flex flex-row bd-highlight">
      <div class="p-2 bd-highlight">
        <input class="form-control form-control-lg font-weight-bold text-right" type="text" placeholder="Subtotal" value="Sub Total:" style="border:none">
      </div>

      <div class="p-2 bd-highlight">
        <input class="form-control form-control-lg font-weight-bold text-center" type="text" placeholder="Subtotal" id="total" value="" style="border:none">
      </div>
    </div>

    <div class="d-flex flex-row bd-highlight">
      <div class="p-2 bd-highlight">
      <input class="form-control form-control-lg font-weight-bold text-right" type="text" placeholder="Vat" id="vatvalue" value="Vat(0%)" style="border:none">
      </div>

      <div class="p-2 bd-highlight">
      <input class="form-control form-control-lg font-weight-bold text-center" type="text" placeholder="Vat" id="totalvat" value="" style="border:none">
      </div>
    </div>

    <div class="d-flex flex-row bd-highlight">
      <div class="p-2 bd-highlight">
      <input class="form-control form-control-lg font-weight-bold text-right" type="text" placeholder="Total" value="Total:" style="border:none">
      </div>

      <div class="p-2 bd-highlight">
      <input class="form-control form-control-lg font-weight-bold text-center" type="text" placeholder="Total" id="totalbill" value="" style="border:none">
      </div>
    </div>
        
    </div>

</div>


    <!-- Bostrap Css-->
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <!-- Java Script-->
    
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    
    <script>

function save() {

var n = $("table").find("tr").length;

//console.log(n);

for (var i = 1; i < n; i++) {

  var Item = $('#selectItem'+i+' option:selected').val();
  var fromdate = $('#FromDate'+i).val();
  var todate = $('#ToDate'+i).val();
  var qty = $('#qty'+i).val();
  var price = $('#price'+i).val();
  var total = $('#total'+i).val();
  var invoiceNo = $('#invoNo').val();
  var username = $('#user').val();

  $.ajax({
    url:"insert.php",
    type:'post',
    data:{
        itemSend:Item,
        fromdateSend:fromdate,
        todateSend:todate,
        qtySend:qty,
        priceSend:price,
        totalSend:total,
        invoicenoSend:invoiceNo,
        userSend:username
    },
    //  success:function(data,status) {
    //    console.log(data);
        
    // //     //$('#addModal').modal("hide");
    // //     //location.reload(true);
    // //     //$('#addModal').modal("hide");
    // //     //$('#addModal').modal("hide");
    // }
});
            
}
  var invoiceNo = $('#invoNo').val();
  var invoiceDate = $('#invoDate').val();
  var dueDate = $('#dueDate').val();
  var subtotal = $('#total').val();
  var totalvat = $('#totalvat').val();
  var totalbill = $('#totalbill').val();
  var username = $('#user').val();
  
  $.ajax({
    url:"insert.php",
    type:'post',
    data:{
        invoiceNoSend:invoiceNo,
        invoiceDateSend:invoiceDate,
        dueDateSend:dueDate,
        totalSend:subtotal,
        totalvatSend:totalvat,
        totalbillSend:totalbill,
        userSend:username,
    },
    success:function(data,status) {
        console.log(data);
        window.location = "manageinvoice.php";
        
        //$('#addModal').modal("hide");
        //location.reload(true);
        //$('#addModal').modal("hide");
        //$('#addModal').modal("hide");
    }
});


}

	$(document).ready(function () {

	// Denotes total number of rows
	var rowIdx = 0;

  //For Multiplication



	// jQuery button click event to add a row
	$('#addBtn').on('click', function () {

        var rowId= ++rowIdx;

        $(function(){
               $('#R'+rowId).keyup(function(){
               var fromdate = $('#FromDate'+rowId).val();
               var todate = $('#ToDate'+rowId).val();
               var dt1 = new Date(fromdate);
               var dt2 = new Date(todate);
               var time_difference = dt2.getTime() - dt1.getTime();
               var days = time_difference / (1000*3600*24);
               Math.round(Math.abs(days));

               var month=dt1.getMonth()+1;
               var year=dt1.getFullYear();
               var daysinmonth=new Date(year, month, 0).getDate();
               
               var acctualdays=days+1;
      
               $('#item'+rowId).val(acctualdays);
              //  var qty = parseFloat($('#qty'+rowId).val()) || 0;
              //  var price = parseFloat($('#price'+rowId).val()) || 0;

               var qty =$('#qty'+rowId).val();
               var price =$('#price'+rowId).val();
               var currency="BDT";

               var total=Math.round((qty*price/(daysinmonth)*(acctualdays)))
               $('#total'+rowId).val(total);
              
        
               var sum=0;
               $('.totalamt').each(function(){
                sum+=Number($(this).val());
               });
              $('#total').val(sum);

              var str = $('#vatvalue').val();
              var vat = str.match(/\d+/g);
              var totalvat=((sum*vat)/100);
              $('#totalvat').val(totalvat);

              var totalbill=(sum+totalvat);
              $('#totalbill').val(totalbill+" "+currency);
              
         });

        

         
});

  // $( function() {
  //   $('#FromDate'+rowId).datepicker();
  //   $('#ToDate'+rowId).datepicker();
  //   $("#invoDate").datepicker();
  //   $("#dueDate").datepicker();
    
  // });
  
// Adding a row inside the tbody.

		$('#tbody').append(`
    <tr id="R${rowId}">
    <td scope="row">${rowId}</td>
    <td><select class="form-select text-center" id="selectItem${rowId}" style="border:none">
    <option selected>Select Item</option>
    
    <?php

    $sql = "SELECT id,name FROM product";
    $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
    while( $rows = mysqli_fetch_assoc($resultset) ) { 
    
    ?>
  <option value="<?php echo $rows["name"]; ?>"> <?php echo $rows["name"]; ?> </option>
  <?php }	?>
  </select> 
  
  </td>
  <td><input type="date" placeholder="From Date" class="form-control text-center fromdate" id="FromDate${rowId}" value="" style="border:none"></td>
  <td><input type="date" placeholder="To Date" class="form-control text-center todate" id="ToDate${rowId}" value="" style="border:none"></td>
  <td><input type="text" placeholder="Quantity" class="form-control text-center qty" id="qty${rowId}" name="qty" value="" style="border:none"></td>
  <td><input type="text" placeholder="Price" class="form-control text-center price" id="price${rowId}" name="price" value="" style="border:none"></td>
  <td><input type="text" placeholder="Total" class="form-control text-center totalamt" id="total${rowId}" name="total" value="" style="border:none"></td>
  <td>
  <button type="button" class="btn-close remove red" aria-label="Close"></button>
  </td>
  </tr>

	`);
	});

	// jQuery button click event to remove a row.
	  $('#tbody').on('click', '.remove', function () {
		// Getting all the rows next to the row
		// containing the clicked button
		var child = $(this).closest('tr').nextAll();
		// Iterating across all the rows
		// obtained to change the index
		child.each(function () {
		// Getting <tr> id.
		var id = $(this).attr('id');
		// Getting the <p> inside the .row-index class.
		var idx = $(this).children('.row-index').children('p');
		// Gets the row number from <tr> id.
		var dig = parseInt(id.substring(1));
		// Modifying row index.
		idx.html(`Row ${dig - 1}`);
		// Modifying row id.
		$(this).attr('id', `R${dig - 1}`);
		});
		// Removing the current row.
		$(this).closest('tr').remove();
		// Decreasing total number of rows by 1.
		rowIdx--;
	});
	});
</script>

</body>
</html>