<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <title>CarForYou</title>
        <!--Bootstrap -->
        <link href="<?php echo link_assets('site/css/bootstrap.min.css') ?>" rel="stylesheet" />
        <!--Custome Style -->
        <link href="<?php echo link_assets('site/css/style.css') ?>" rel="stylesheet" />
        <!--OWL Carousel slider-->
        <link href="<?php echo link_assets('site/css/owl.carousel.css') ?>" rel="stylesheet" />
        <link href="<?php echo link_assets('site/css/owl.transitions.css') ?>" rel="stylesheet" />
        <!--slick-slider -->
        <link href="<?php echo link_assets('site/css/slick.css') ?>" rel="stylesheet" />
        <!--bootstrap-slider -->
        <link href="<?php echo link_assets('site/css/bootstrap-slider.min.css') ?>" rel="stylesheet" />
        <!--FontAwesome Font Style -->
        <link href="<?php echo link_assets('site/css/font-awesome.min.css') ?>" rel="stylesheet" />

        <!-- Google-Font-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->  
    </head>
    <body>

        <!--Header-->
        <header>
            <div class="default-header">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3 col-md-2">
                            <div class="logo"> <a href="<?php echo base_url('home') ?>"><img src="<?php echo link_assets('site/images/logo.png') ?>" alt="image"/></a> </div>
                        </div>
                        <div class="col-sm-9 col-md-10">
                            <?php if (!$this->session->token) : ?>
                                <div class="header_info">
                                    <div class="login_btn"> <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Área Restrita</a> </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation -->
            <nav id="navigation_bar" class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button id="menu_slide" data-target="#navigation"  aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    </div>
                    <div class="header_wrap">
                        <?php if ($this->session->token) : ?>
                            <div class="user_login">
                                <ul>
                                    <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i> <?php echo $this->session->nome ?> <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href=" <?php echo base_url('minha_conta/meus_dados') ?>">Meus Dados</a></li>
                                            <li><a href=" <?php echo base_url('minha_conta/meus_veiculos') ?>">Meus Veículos</a></li>
                                            <li><a href=" <?php echo base_url('minha_conta/meus_veiculos/adicionar') ?>">Adicionar novo veículo</a></li>
                                            <li><a href=" <?php echo base_url('minha_conta/logout') ?>">Sair</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        <?php endif; ?>
                        <div class="header_search">
                            <div id="search_toggle"><i class="fa fa-search" aria-hidden="true"></i></div>
                            <form action="#" method="get" id="header-search-form">
                                <input type="text" placeholder="Pesquisar..." class="form-control">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="nav navbar-nav">
                            <li class="dropdown"><a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.html">Home Page 1</a></li>
                                    <li><a href="index-2.html">Home Page 2</a></li>
                                </ul>
                            </li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li class="dropdown"><a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Inventory</a>
                                <ul class="dropdown-menu">
                                    <li class="active"><a href="listing-grid.html">Grid Style</a></li>
                                    <li><a href="listing-classic.html">Classic Style</a></li>
                                    <li><a href="listing-detail.html">Detail Page Style 1</a></li>
                                    <li><a href="listing-detail-2.html">Detail Page Style 2</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dealers</a>
                                <ul class="dropdown-menu">
                                    <li><a href="dealers-list.html">List View</a></li>
                                    <li><a href="dealers-profile.html">Detail Page</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                <ul class="dropdown-menu">
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="contact-us.html">Contact Us</a></li>
                                    <li><a href="compare.html">Compare Vehicles</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="404.html">404 Error</a></li>
                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">News</a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                    <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                    <li><a href="blog-detail.html">Blog Detail</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Navigation end --> 

        </header>
        <!-- /Header -->
        <?php echo $contents ?>
        <!--Footer -->
        <footer>
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <h6>Top Categores</h6>
                            <ul>
                                <li><a href="#">Crossovers</a></li>
                                <li><a href="#">Hybrids</a></li>
                                <li><a href="#">Hybrid Cars</a></li>
                                <li><a href="#">Hybrid SUVs</a></li>
                                <li><a href="#">Concept Vehicles</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <h6>About Us</h6>
                            <ul>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Hybrid Cars</a></li>
                                <li><a href="#">Cookies</a></li>
                                <li><a href="#">Trademarks</a></li>
                                <li><a href="#">Terms of use</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <h6>Useful Links</h6>
                            <ul>
                                <li><a href="#">Our Partners</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Sitemap</a></li>
                                <li><a href="#">Investors</a></li>
                                <li><a href="#">Request a Quote</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <h6>Subscribe Newsletter</h6>
                            <div class="newsletter-form">
                                <form action="#">
                                    <div class="form-group">
                                        <input type="email" class="form-control newsletter-input" required placeholder="Enter Email Address" />
                                    </div>
                                    <button type="submit" class="btn btn-block">Subscribe <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
                                </form>
                                <p class="subscribed-text">*We send great deals and latest auto news to our subscribed users very week.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-push-6 text-right">

                            <div class="footer_widget">
                                <p>Fale Conosco:</p>
                                <ul>
                                    <li><a href="http://www.ifspcapivari.com.br/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                                    <li><a href="https://www.instagram.com/explore/locations/354443833/ifsp-campus-capivari/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li>Telefone: 55 (19) 3492-8585</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-md-pull-6">
                            <p class="copy-right">Copyright &copy; 2017 SysCar. Todos os Direitos Reservados</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /Footer--> 

        <!--Back to top-->
        <div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>Topo</div>
        <!--/Back to top--> 

        <!--Login-Form -->
        <div class="modal fade" id="loginform">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3 class="modal-title">Login</h3>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="login_wrap">
                                <div class="col-md-12 col-sm-12">
                                    <form action="<?php echo base_url('login') ?>" method="post">
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="senha" class="form-control" placeholder="Senha">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" value="Login" class="btn btn-block">
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer text-center">
                        <p>Não possui uma conta? <a href="#signupform" data-toggle="modal" data-dismiss="modal">Cadastre-se aqui</a></p>
                        <p><a href="#forgotpassword" data-toggle="modal" data-dismiss="modal">Esqueceu a senha ?</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!--/Login-Form --> 

        <!--Register-Form -->
        <div class="modal fade" id="signupform">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3 class="modal-title">Cadastrar</h3>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="signup_wrap">
                                <div class="col-md-12 col-sm-12">
                                    <form action="#" method="get">
                                        <div class="form-group">
                                            <input type="text" name="nome" class="form-control" placeholder="Nome completo" value=""<?php echo (isset($dados_usuario) ? $dados_usuario['nome'] : '') ?>>
                                            <?php echo display_erros(isset($erros['nome']) ? $erros['nome'] : null) ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control" placeholder="Email" value=""<?php echo (isset($dados_usuario) ? $dados_usuario['email'] : '') ?>>
                                            <?php echo display_erros(isset($erros['email']) ? $erros['email'] : null) ?>
                                        </div>
                                        <div class="form-group">

                                            <select name="perfil" class="form-control ">
                                                <option value="Usuario">Usuario</option>
                                                <option value="Concessionaria">Concessionária</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="senha" class="form-control" placeholder="Senha" value=""<?php echo (isset($dados_usuario) ? $dados_usuario['senha'] : '') ?>>
                                            <?php echo display_erros(isset($erros['senha']) ? $erros['senha'] : null) ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="confirmar" class="form-control" placeholder="Confirmar Senha" value=""<?php echo (isset($dados_usuario) ? $dados_usuario['confirmar'] : '') ?>>
                                            <?php echo display_erros(isset($erros['confirmar']) ? $erros['confirmar'] : null) ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" value="Cadastrar" class="btn btn-block">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer text-center">
                        <p>Já possui uma conta? <a href="#loginform" data-toggle="modal" data-dismiss="modal">Login</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!--/Register-Form --> 

        <!--Forgot-password-Form -->
        <div class="modal fade" id="forgotpassword">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3 class="modal-title">Recuperar Senha</h3>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="forgotpassword_wrap">
                                <div class="col-md-12">
                                    <form action="#" method="get">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Digite seu Email*">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" value="Alterar Senha" class="btn btn-block">
                                        </div>
                                    </form>
                                    <div class="text-center">
                                        <p class="gray_text">Por razões de segurança nós não guardaremos sua senha. Sua senha será apagada e uma nova será enviada.</p>
                                        <p><a href="#loginform" data-toggle="modal" data-dismiss="modal"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Voltar para o Login</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/Forgot-password-Form --> 

        <!-- Scripts -->
        <script src="<?php echo link_assets('admin/js/jquery-1.10.2.js') ?>" type="text/javascript"></script>
        <script src="<?php echo link_assets('site/js/jquery.min.js') ?>"></script>
        <script src="<?php echo link_assets('site/js/bootstrap.min.js') ?>"></script>
        <script src="<?php echo link_assets('site/js/interface.js') ?>"></script>
        <script src="<?php echo link_assets('admin/js/ajax.js') ?>" type="text/javascript"></script>
        <!--bootstrap-slider-JS-->
        <script src="<?php echo link_assets('site/js/bootstrap-slider.min.js') ?>"></script>
        <!--Slider-JS--> 
        <script src="<?php echo link_assets('site/js/slick.min.js') ?>"></script>
        <script src="<?php echo link_assets('site/js/owl.carousel.min.js') ?>"></script>

    </body>
</html>