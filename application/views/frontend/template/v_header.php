<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home page| Pendaftaran PKL dan Skripsi</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/dist/css/skins/skin-green-light.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-green-light sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <a href="#" class="logo" style="background: linear-gradient( rgb(41, 143, 173), rgb(32, 109, 180));">
                <span class="logo-mini"><img src="<?php echo base_url('assets'); ?>/dist/img/logo1.png"></span>
                <span class="logo-lg"><img src="<?php echo base_url('assets'); ?>/dist/img/logo1.png"></span>
            </a>
            <nav class="navbar navbar-static-top" role="navigation" style=" background: linear-gradient( rgb(32, 109, 180), rgb(41, 143, 173)); ">
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                                <span class="sr-only">Toggle navigation</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="main-sidebar">
            <section class="sidebar">
                <div class="user-panel" align="center" style="background:rgba(231, 231, 231, 0.521);">
                    <div class="image">
                        <img src="<?php echo base_url('assets'); ?>/dist/img/logokecil.png">
                    </div>
                    <p></p>
                    <p><b>IST Annuqayah</b></p>
                </div>
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header" align="center">-------------- Daftar Menu --------------</li>
                    <li class="active"><a href="<?php echo base_url('') ?>"><i class="fa fa-dashboard text-blue"></i> <span>Home Page</span></a></li>
                    <li><a href="<?php echo base_url('home/pedoman/') ?>"><i class="fa fa-book text-blue"></i> <span>File Download</span></a></li>
                    <li><a href="<?php echo base_url('home/pengumuman/') ?>"><i class="fa fa-bell text-blue"></i> <span>Pengumuman</span></a></li>
                    <li><a href="<?php echo base_url('home/instansi/') ?>"><i class="fa fa-home text-blue"></i> <span>List Instansi</span></a></li>
                    <li class="header" align="center">-------------- Menu Lainnya --------------</li>
                    <li class="active"><a href="<?php echo base_url('login/') ?>"><i class="fa fa-sign-in text-blue"></i> <span>Login Admin</span></a></li>
                </ul>
            </section>
        </aside>