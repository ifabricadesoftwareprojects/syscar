<!--my-vehicles-->
<section class="user_profile inner_pages">
    <div class="container">
        <!--<div class="user_profile_info gray-bg padding_4x4_40">
            <div class="upload_user_logo"> <img src="<?php echo link_assets('site/images/dealer-logo.jpg') ?>" alt="image">
                <div class="upload_newlogo">
                    <input name="upload" type="file">
                </div>
            </div>
            <div class="dealer_info">
                <h5>Autospot Used Cars Center </h5>
                <p>P.1225 N Broadway Ave <br>
                    Oklahoma City, OK  1234-5678-090</p>
            </div>
        </div>-->
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <?php if ($this->session->token) : ?>  
                    <div class="profile_nav user_login">
                        <ul>
                            <li class="active"><a href="<?php echo base_url('minha_conta/meus_dados') ?>">MEUS DADOS </a></li>
                            <li><a href="<?php echo base_url('minha_conta/meus_veiculos') ?>">MEUS VEÍCULOS</a></li>
                            <li><a href="<?php echo base_url('minha_conta/meus_veiculos/adicionar') ?>">ADICONAR NOVO VEÍCULO</a></li>
                            <li><a href="<?php echo base_url('minha_conta/logout') ?>">SAIR</a></li>
                        </ul>
                    </div>
                <?php endif; ?> 
            </div>


            <div class="col-md-6 col-sm-8">
                <div class="profile_wrap">
                    <h5 class="uppercase underline">Meus Dados</h5>
                    <h6><font color="#FF0000"><b><?php echo $alert_message ?></b></font></h6>
                    <form action="<?php echo base_url('minha_conta/meus_dados/editar') ?>" method="post">
                        <div class="form-group">
                            <label>Nome:</label>
                            <input type="text" name="nome" class="form-control" placeholder="Nome" value="<?php echo $usuario->nome ?>"<?php echo (isset($dados_usuario) ? $dados_usuario['nome'] : '') ?>>
                            <?php echo display_erros(isset($erros['nome']) ? $erros['nome'] : null) ?>
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="text" name="email" class="form-control" placeholder="Email" value="<?php echo $usuario->email ?>"<?php echo (isset($dados_usuario) ? $dados_usuario['email'] : '') ?>>
                            <?php echo display_erros(isset($erros['email']) ? $erros['email'] : null) ?>
                        </div>
                        <div class="form-group">
                            <label for="perfil">Perfil:</label>
                            <select name="perfil" class="form-control ">
                                <option value="Usuario"<?php echo $usuario->perfil == 'Usuario' ? ' selected' : '' ?>>Usuario</option>
                                <option value="Concessionaria"<?php echo $usuario->perfil == 'Concessionaria' ? ' selected' : '' ?>>Concessionária</option>
                            </select>
                        </div>
                        <div class="form-group">
                            
                            <label>Senha:</label>
                            <label class="aviso">Deixe os campos abaixo em branco para manter a senha atual!</label>
                            <input type="password" name="senha" class="form-control" placeholder="" value=""<?php echo (isset($dados_usuario) ? $dados_usuario['senha'] : '') ?>>
                            <?php echo display_erros(isset($erros['senha']) ? $erros['senha'] : null) ?>
                        </div>

                        <div class="form-group">
                            <label>Confirmar Senha:</label>
                            <input type="password" name="confirmar" class="form-control" placeholder="" value=""<?php echo (isset($dados_usuario) ? $dados_usuario['confirmar'] : '') ?>>
                            <?php echo display_erros(isset($erros['confirmar']) ? $erros['confirmar'] : null) ?>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn">Atualizar Dados <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/my-vehicles--> 
