<?php
    if(!isset($this->session->userLogin))
    {
        redirect("index.php/userController/logout");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Restaurant Management System</title>
    <style type="text/css">
        body {
              padding-top: 50px;
            }
            .starter-template {
              padding: 40px 15px;
              text-align: center;
            }
        @-moz-document url-prefix() {
          fieldset { display: table-cell; }
        }
    </style>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url()?>assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/dist/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url()?>assets/bower_components/bootstrap/dist/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/dist/css/bootstrap-datetimepicker.css">
    <script src="<?php echo base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/tinymce/tinymce.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/dist/js/moment-with-locals.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/dist/js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/dist/js/angular.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/dist/js/angular-route.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
        .border:hover{border:solid 1px blue;}
        .borders{border:solid 1px blue;}
    </style>       
</head>

<body>