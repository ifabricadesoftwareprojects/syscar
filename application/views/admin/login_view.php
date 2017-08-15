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
</head>
<body>    

<div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Formulário de Login</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Esqueci minha senha</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                        <form method="post" id="loginform" class="form-horizontal" role="form">
                            <p><?php echo $msg; ?></p>
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="login-email" type="text" class="form-control" name="email" value="" placeholder="email">                                        
                            </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="login-senha" type="password" class="form-control" name="senha" placeholder="senha">
                            </div>

                            <div class="input-group">
                                <div class="checkbox">
                                  <label>
                                    <input id="login-remember" type="checkbox" name="remember" value="1"> Lembrar-me
                                  </label>
                                </div>
                            </div>

                            <div style="margin-top:10px" class="form-group">
                                <!-- Button -->

                                <div class="col-sm-12 controls">
                                    <button type="submit" id="btn-login" class="btn btn-success">Login</button>
                                </div>
                            </div>  
                        </form>     
                    </div>                     
            </div>  
        </div>
    </div>
</body>

<!--   Core JS Files   -->
<script src="<?php echo link_assets('admin/js/jquery-1.10.2.js') ?>" type="text/javascript"></script>
<script src="<?php echo link_assets('admin/js/bootstrap.min.js') ?>" type="text/javascript"></script>
</html>
