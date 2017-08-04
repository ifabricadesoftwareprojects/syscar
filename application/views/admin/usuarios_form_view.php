<div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title"><?php echo $sub_title ?></h4>
                    </div>
                    <div class="content">
                        <div class="row">
                            <div class="col-md-6">
                                <form method="post">
                                    <div class="form-group">
                                        <label>Nome do Usuario</label>
                                        <input type="text" name="nome" class="form-control" placeholder="Nome do usuario" value="<?php echo $usuario->nome ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" class="form-control" placeholder="fulano@???????.com" value="<?php echo $usuario->email ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Senha</label>
                                        <input type="password" name="senha" class="form-control" placeholder="************" value="<?php echo $usuario->senha ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Confirmar Senha</label>
                                        <input type="password" <!--name="senha" class="form-control" placeholder="************" value="<?php echo $usuario->senha ?>"-->
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill"><?php echo $action ?></button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
