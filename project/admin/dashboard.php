<?php 
include("session.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <link rel="stylesheet" href="dashboardcss.css"/>
    <title>Dashboard</title>

  </head>
  <body>

  <div id="wrapper">
   <div class="overlay"></div>
    
        <!-- Sidebar -->
    <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">

    <div id="bottom">
        <button type="button" class="btn btn-danger" onclick="window.location.href = '../logout.php';">Logout</button>
    </div>

     <ul class="nav sidebar-nav">
       <div class="sidebar-header">
       <div class="sidebar-brand">
      <a href="">AK Networks</a></div></div>
       
      <li><a href="home.php">Home</a></li> 
       
       <li class="dropdown">
       <a href="#retail" class="dropdown-toggle"  data-toggle="dropdown">Retail Clients<span class="caret"></span></a>
     <ul class="dropdown-menu animated fadeInLeft" role="menu">
      <div class="dropdown-header">Retail Menu</div>
      <li><a href="addclient.php">Add Client</a></li>
      <li><a href="clients.php">View Client</a></li>
      <!-- <li><a href="clientsinvoice.php">View Client</a></li> -->

      </ul>
      </li>

      <li class="dropdown">
       <a href="#reseller" class="dropdown-toggle"  data-toggle="dropdown">Resellers <span class="caret"></span></a>
     <ul class="dropdown-menu animated fadeInLeft" role="menu">
      <div class="dropdown-header">Reseller Menu</div>
      <li><a href="addreseller.php">Add Reseller</a></li>
      <li><a href="resellers.php">View Resellers</a></li>
      </ul>
      </li>

      <li><a href="manageinvoice.php">Invoice</a></li>
      <li><a href="plans.php">Packages</a></li>

      <li class="dropdown">
       <a href="#admin" class="dropdown-toggle"  data-toggle="dropdown">Admins<span class="caret"></span></a>
     <ul class="dropdown-menu animated fadeInLeft" role="menu">
      <div class="dropdown-header">Add Menu</div>
      <li><a href="addemployee.php">Add Employee</a></li>
      <li><a href="employees.php">View Employee</a></li>
      </ul>
      </li>

      </ul>
  </nav>
    

        <!-- /#sidebar-wrapper -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
            <span class="hamb-top"></span>
    			  <span class="hamb-middle"></span>
				    <span class="hamb-bottom"></span>
            </button>

            

  
   

        

    
    <!-- /#wrapper -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>



    <script>

$(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});
  </script>

  
