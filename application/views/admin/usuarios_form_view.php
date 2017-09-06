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
                                <input type="text" name="nome" class="form-control" placeholder="Nome do usuario" value="<?php echo $usuario->nome ?>"<?php echo (isset($dados_usuario) ? $dados_usuario['nome'] : '') ?>>
                                <?php echo display_erros(isset($erros['nome']) ? $erros['nome'] : null) ?>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" placeholder="fulano@???????.com" value="<?php echo $usuario->email ?>"<?php echo (isset($dados_usuario) ? $dados_usuario['email'] : '') ?>>
                                <?php echo display_erros(isset($erros['email']) ? $erros['email'] : null) ?>
                            </div>
                            <div class="form-group">
                                <label>Senha</label>
                                <input type="password" name="senha" class="form-control" placeholder="************" value=""<?php echo (isset($dados_usuario) ? $dados_usuario['senha'] : '') ?>>
                                <?php echo display_erros(isset($erros['senha']) ? $erros['senha'] : null) ?>
                            </div>
                            <div class="form-group">
                            <label for="perfil">Perfil:</label>
                            <select name="sexo" class="form-control input-lg">
                                <option value="Usuario"<?php echo $candidato->sexo == 'Usuario' ? ' selected' : '' ?>>Usuario</option>
                                <option value="Administrador"<?php echo $candidato->sexo == 'Administrador' ? ' selected' : '' ?>>Administrador</option>
                            </select>
                            </div>
                            <div class="form-group">
                                <label>Confirmar Senha</label>
                                <input type="password" name="confirmar" class="form-control" placeholder="************" value=""<?php echo (isset($dados_usuario) ? $dados_usuario['confirmar'] : '') ?>>
                                <?php echo display_erros(isset($erros['confirmar']) ? $erros['confirmar'] : null) ?>
                            </div>
                            <div class="form-group">
                                <label>Confirmar Senha</label>
                                <input type="password" name="confirmar" class="form-control" placeholder="************" value=""<?php echo (isset($dados_usuario) ? $dados_usuario['confirmar'] : '') ?>>
                                <?php echo display_erros(isset($erros['confirmar']) ? $erros['confirmar'] : null) ?>
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
