 <head>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("/assets/css/bootstrap.min.css");?>">
        

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <!-- title -->
        <title>Aplicaciones con verdadera Inteligencia Artificial</title>
        <meta name="description" content=" Phibot es el asistente virtual que hace todo lo que un asistente personal real puede hacer desde su smartphone" />
        <meta name="keywords" content="phibot, asistente virtual, inteligencia artificial, todo lo que un asistente personal real puede hacer" />
        <meta name="author" content="SOMOS Multimedia®">
        <!-- favicon -->
        <link rel="shortcut icon" href="<?php echo base_url("/assets/images/icon/favicon.png");?>">
        <!-- animation -->
        <link rel="stylesheet" href="<?php echo base_url("/assets/css/animate.css");?>">
        <!-- bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url("/assets/css/bootstrap.min.css");?>">
        <!-- font-awesome icon -->
        <link rel="stylesheet" href="<?php echo base_url("/assets/css/font-awesome.min.css");?>">
        <!-- themify-icons -->
        <link rel="stylesheet" href="<?php echo base_url("/assets/css/themify-icons.css");?>">
        <!-- owl carousel -->
        <link rel="stylesheet" href="<?php echo base_url("/assets/css/owl.transitions.css");?>">
        <link rel="stylesheet" href="<?php echo base_url("/assets/css/owl.carousel.css");?>"> 
        <!-- magnific popup -->
        <link rel="stylesheet" href="<?php echo base_url("/assets/css/magnific-popup.css");?>"> 
        <!-- base -->
        <link rel="stylesheet" href="<?php echo base_url("/assets/css/base.css?base=59");?>"> 
        <!-- elements -->
        <link rel="stylesheet" href="<?php echo base_url("/assets/css/elements.css");?>">
        <!-- responsive -->
        <link rel="stylesheet" href="<?php echo base_url("/assets/css/responsive.css");?>">
        <!--[if IE 9]>
        <link rel="stylesheet" type="text/css" href="css/ie.css" />
        <![endif]-->
        <!--[if IE]>
            <script src="js/html5shiv.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="page" class="page">
              <header class="header-style1" id="header-section4">
                <!-- nav -->
                <nav class="  bg-black black-header  navbar tz-header-bg no-margin alt-font navigation-menu dark-header">
                   
                    <div class="container navigation-menu">
                        <div class="row">
                            <!-- logo -->
                            <div class="col-md-3 col-sm-4 col-xs-9">
                                <a href="#home" class="inner-link"><img alt="" src="<?php echo base_url("/assets/images/bg-image/logo-header.png");?>" data-img-size="(W)163px X (H)40px"></a>
                            </div>
                            <!-- end logo -->
                            <div class="col-md-9 col-sm-8 col-xs-3 position-inherit">
                                <button data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse pull-right">
                                    <ul class="nav navbar-nav">
                                        <li class="propClone"><a class="inner-link" href="<?php echo base_url()?>Home2" >Inicio</a></li>
                                        <li class="propClone"><a class="inner-link" href="<?php echo base_url()?>Catalog2" >Catalogo</a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                                                <i class="fa fa-user fa-fw"></i><?=$this->session->userdata('username')?><b class="caret"></b>
                                            </a>
                                        <ul class="dropdown-menu text-black">
                                        <li class="propClone "><a class="inner-link" href="<?php echo base_url()?>Profile">Perfil</a></li>
                                        <li class="propClone"><a class="inner-link" href="<?php echo base_url()?>Home">Salir</a></li>
                                         </ul>
                                         </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav> 
            </header>