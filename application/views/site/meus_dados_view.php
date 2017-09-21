<!--my-vehicles-->
<section class="user_profile inner_pages">
  <div class="container">
    <div class="user_profile_info gray-bg padding_4x4_40">
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
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-3">
         <?php if ($this->session->token) : ?>  
        <div class="profile_nav user_login">
          <ul>
            <li><a href="<?php echo base_url('minha_conta/meus_dados') ?>">Meus Dados</a></li>
            <li class="active"><a href="<?php echo base_url('minha_conta/meus_veiculos') ?>">Meus Veículos</a></li>
            <li><a href="<?php echo base_url('minha_conta/meus_veiculos/adicionar') ?>">Adicionar novo veículo</a></li>
            <li><a href="<?php echo base_url('minha_conta/logout') ?>">Sair</a></li>
          </ul>
        </div>
        <?php endif; ?> 
      </div>
        
        
      <div class="col-md-6 col-sm-8">
        <div class="profile_wrap">
          <h5 class="uppercase underline">Meus Dados</h5>
          <p><?php echo $msg ?></p>
          <form method="post">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="nome" class="form-control" placeholder="Nome" value="<?php echo $usuario->nome ?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" placeholder="Email" value="<?php echo $usuario->email ?>">
            </div>
            <div class="form-group">
                <label>Perfil</label>
                <input type="text" name="perfil" class="form-control" placeholder="Perfil" value="<?php echo $usuario->perfil ?>" readonly>
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
