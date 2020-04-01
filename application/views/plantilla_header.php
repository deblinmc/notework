<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Startmin - Bootstrap Admin Theme</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?=base_url()?>assets/css/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="<?=base_url()?>assets/css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?=base_url()?>assets/css/startmin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="<?=base_url()?>assets/css/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?=base_url()?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php 
        if(isset($css_files))
foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>

    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?=base_url()?>">NoteWork</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>


                <ul class="nav navbar-right navbar-top-links">
                    
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> Usuario <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil Usuario</a>
                            </li>
                            
                            <li class="divider"></li>
                            <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="<?=base_url()?>" class="active"><i class="fa fa-dashboard fa-fw"></i> Inicio</a>
                            </li>
                            
                            <li>
                                <a href="<?=base_url()?>actividades"><i class="fa fa-table fa-fw"></i> Actividades</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>centros"><i class="fa fa-hospital-o fa-fw"></i> Centros</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>usuarios"><i class="fa fa-users fa-fw"></i> Usuarios</a>
                            </li>
                             <li>
                                <a href="<?=base_url()?>mensajes"><i class="fa fa-envelope fa-fw"></i> Mensajes</a>
                            </li>
                             <li>
                                <a href="<?=base_url()?>trabajos"><i class="fa fa-wrench fa-fw"></i> Trabajos</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>calendario"><i class="fa fa-calendar fa-fw"></i> Calendario</a>
                            </li>
                          
                           
                          
                        </ul>
                    </div>
                </div>
            </nav>

