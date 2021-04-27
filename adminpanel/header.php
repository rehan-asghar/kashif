<!DOCTYPE html>
<html lang="en">
<?php
include("../connection.php");
?>
<!--   Tue, 07 Jan 2020 03:33:27 GMT -->
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>Dashboard</title>

<!-- General CSS Files -->
<link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
<!-- <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- CSS Libraries -->
<link rel="stylesheet" href="assets/modules/jqvmap/dist/jqvmap.min.css">
<link rel="stylesheet" href="assets/modules/summernote/summernote-bs4.css">
<link rel="stylesheet" href="assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
<link rel="stylesheet" href="assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">

<link rel="stylesheet" href="assets/modules/datatables/datatables.min.css">
<link rel="stylesheet" href="assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
<!-- Template CSS -->
<link rel="stylesheet" href="assets/css/style.min.css">
<link rel="stylesheet" href="assets/css/components.min.css">

</head>
<body class="layout-4">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div>

<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        
        <!-- Start app top navbar -->
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fa fa-bars"></i></a></li>
                </ul>
            </form>
            <ul class="navbar-nav navbar-right">
               <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                    <div class="d-sm-none d-lg-inline-block">Admin</div></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="logout.php" class="dropdown-item has-icon text-danger"><i class="fa fa-sign-out-alt"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </nav>

        <!-- Start main left sidebar menu -->
        <div class="main-sidebar sidebar-style-3">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="index.php">Admin Panel</a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="index.php">Admin Panel</a>
                </div>
                <ul class="sidebar-menu">
                    <li class="menu-header">Account</li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown round"><i class="fa fa-user"></i> <span>Account</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="useraccount.php">User Accounts</a></li> 
                            <li><a href="userstatus.php">User Status List</a></li> 
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown round"><i class="fa fa-user"></i> <span>Utilities</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="commentslist.php">Comments List</a></li> 
                            <li><a href="contactlist.php">Contact Users List</a></li> 
                        </ul>
                    </li>
                </ul>
                <ul class="sidebar-menu">
                    <li class="menu-header">Pages</li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown round"><i class="fa fa-user"></i> <span>Crud</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="news.php">News</a></li> 
                            <li><a href="category.php">Category</a></li> 
                            <li><a href="states.php">States</a></li> 
                            <li><a href="city.php">Cities</a></li> 
                        </ul>
                    </li>
                </ul>
            </aside>
        </div>

    </div>
</div>

<!-- General JS Scripts -->
<script src="assets/bundles/lib.vendor.bundle.js"></script>
<script src="js/CodiePie.js"></script>

<!-- JS Libraies -->
<script src="assets/modules/jquery.sparkline.min.js"></script>
<script src="assets/modules/chart.min.js"></script>
<script src="assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
<script src="assets/modules/summernote/summernote-bs4.js"></script>
<script src="assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

<script src="assets/modules/datatables/datatables.min.js"></script>
<script src="assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
<script src="assets/modules/jquery-ui/jquery-ui.min.js"></script>
<script src="js/page/modules-datatables.js"></script>


<!-- Template JS File -->
<script src="js/scripts.js"></script>
<script src="js/custom.js"></script>
<script src="js/main.js"></script>
<!-- Page Specific JS File -->
<!-- <script src="js/page/index.js"></script> -->
</body>

<!--   Tue, 07 Jan 2020 03:35:12 GMT -->
</html>