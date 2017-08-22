<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>SYSCAR - Painel de Controle</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="<?php echo link_assets('admin/css/bootstrap.min.css') ?>" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo link_assets('admin/css/animate.min.css') ?>" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo link_assets('admin/css/light-bootstrap-dashboard.css') ?>" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo link_assets('admin/css/demo.css') ?>" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo link_assets('admin/css/pe-icon-7-stroke.css') ?>" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="black">
    <!--
        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag
    -->
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    #SYSCAR
                </a>
            </div>
            <ul class="nav">
                <li<?php echo ($active == 'home' ? ' class="active"' : '') ?>>
                    <a href="<?php echo admin_link() ?>">
                        <i class="pe-7s-graph"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li<?php echo ($active == 'marcas' ? ' class="active"' : '') ?>>
                    <a href="<?php echo admin_link('marcas') ?>">
                        <i class="pe-7s-car"></i>
                        <p>Marcas</p>
                    </a>
                </li>
                <li<?php echo ($active == 'modelos' ? ' class="active"' : '') ?>>
                    <a href="<?php echo admin_link('modelos') ?>">
                        <i class="pe-7s-box2"></i>
                        <p>Modelos</p>
                    </a>
                </li>
                <li<?php echo ($active == 'opcionais' ? ' class="active"' : '') ?>>
                    <a href="<?php echo admin_link('opcionais') ?>">
                        <i class="pe-7s-diamond"></i>
                        <p>Opcionais</p>
                    </a>
                </li>
                <li<?php echo ($active == 'versoes' ? ' class="active"' : '') ?>>
                    <a href="<?php echo admin_link('versoes') ?>">
                        <i class="pe-7s-config"></i>
                        <p>Versões</p>
                    </a>
                </li>
                <li<?php echo ($active == 'usuarios' ? ' class="active"' : '') ?>>
                    <a href="<?php echo admin_link('usuarios') ?>">
                        <i class="pe-7s-users"></i>
                        <p>Usuarios </p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"><?php echo $title ?></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               Account
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    SYSCAR
                                    <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="<?php echo admin_link('logout') ?>">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">
                <?php echo $contents ?>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-right">
                    &copy; 2016 <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>
    </div>
</div>
</body>

    <!--   Core JS Files   -->
    <script src="<?php echo link_assets('admin/js/jquery-1.10.2.js') ?>" type="text/javascript"></script>
    <script src="<?php echo link_assets('admin/js/bootstrap.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo link_assets('admin/js/admin.js') ?>" type="text/javascript"></script>
    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="<?php echo link_assets('admin/js/bootstrap-checkbox-radio-switch.js') ?>"></script>

    <!--  Charts Plugin -->
    <script src="<?php echo link_assets('admin/js/chartist.min.js') ?>"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo link_assets('admin/js/bootstrap-notify.js') ?>"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="<?php echo link_assets('admin/js/light-bootstrap-dashboard.js') ?>"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="<?php echo link_assets('admin/js/demo.js') ?>"></script>
    <script type="text/javascript">
    	$(document).ready(function(){
        	demo.initChartist();
    	});
    </script>
</html>