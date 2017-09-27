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
        <div class="profile_nav">
          <ul>
            <li><a href="<?php echo base_url('minha_conta/meus_dados') ?>">MEUS DADOS </a></li>
            <li class="active"><a href="<?php echo base_url('minha_conta/meus_veiculos') ?>">MEUS VEÍCULOS</a></li>
            <li><a href="<?php echo base_url('minha_conta/meus_veiculos/adicionar') ?>">ADICONAR NOVO VEÍCULO</a></li>
            <li><a href="<?php echo base_url('minha_conta/logout') ?>">SAIR</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 col-sm-8">
        <div class="profile_wrap">
          <h5 class="uppercase underline">Gerenciar Fotos </h5>
          <div class="my_vehicles_list">
            <form name="formUpload" id="formUpload" method="post" enctype="multipart/form-data">
                <input type="hidden" name="url" id="url" value="<?php echo site_url('ajax') ?>" />
                <input type="hidden" name="id" id="id" value="<?php echo $anuncio->idanuncio ?>" />
                <label>Selecione o arquivo: <input type="file" name="foto" id="foto" size="45" /></label>
                <br />
                <progress value="0" max="100"></progress><span id="porcentagem">0%</span>
                <br />
                <button type="button" id="btnEnviar">Enviar Foto</button>
            </form>
              <div id="resposta">
                  
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/my-vehicles--> 
