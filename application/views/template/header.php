<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>css/core.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>css/components.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>css/colors.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/plugins/visualization/d3/d3.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/plugins/forms/styling/switchery.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/plugins/forms/styling/uniform.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/plugins/ui/moment/moment.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/plugins/pickers/daterangepicker.js"></script>

    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/core/app.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/pages/dashboard.js"></script>

    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/plugins/ui/ripple.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/'); ?>ckeditor/ckeditor.js"></script>
    <!-- /theme JS files -->

</head>

<body>

    <!-- Main navbar -->
    <div class="navbar navbar-default header-highlight">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.html"><img src="<?= base_url('assets/'); ?>images/logo_light.png" alt=""></a>

            <ul class="nav navbar-nav visible-xs-block">
                <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
                <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
            </ul>
        </div>

        <div class="navbar-collapse collapse" id="navbar-mobile">
            <ul class="nav navbar-nav">
                <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>


            </ul>


        </div>
    </div>
    <!-- /main navbar -->


    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">