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
          <h5 class="uppercase underline">Meus Veículos <span>(20 Carros)</span></h5>
          <div class="my_vehicles_list">
            <ul class="vehicle_listing">
            <?php foreach ($anuncios as $anuncio) : ?>
              <li>
                  <div class="vehicle_img"> <a href="<?php echo base_url('minha_conta/meus_veiculos/editar/' . $anuncio->idanuncio) ?>" title="Editar esse anúncio"><img src="<?php echo link_assets('site/images/recent-car-1.jpg') ?>" alt="image"></a> </div>
                <div class="vehicle_title">
                    <h6><a href="<?php echo base_url('minha_conta/meus_veiculos/editar/' . $anuncio->idanuncio) ?>" title="Editar esse anúncio"><?php echo $anuncio->nomemarca . ' ' . $anuncio->nomemodelo . ' ' . $anuncio->descricaoversao . ', ' . $anuncio->anofab . '/' . $anuncio->anomodelo ?> </a></h6>
                </div>
                <div class="vehicle_status"> <a href="<?php echo base_url('minha_conta/meus_veiculos/fotos/' . $anuncio->idanuncio) ?>" class="btn outline btn-xs active-btn" title="Gerenciar fotos desse anúncio">Fotos</a>
                  <div class="clearfix"></div>
                  <a href="<?php echo base_url('minha_conta/meus_veiculos/editar/' . $anuncio->idanuncio) ?>" title="Editar esse anúncio"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a> </div>
              </li>
              <?php endforeach; ?>
              <li class="deactive_vehicle">
                <div class="vehicle_img"> <a href="#"><img src="<?php echo link_assets('site/images/recent-car-2.jpg') ?>" alt="image"></a> </div>
                <div class="vehicle_title">
                  <h6><a href="#">Mazda CX-5 SX, V6, ABS, Sunroof </a></h6>
                </div>
                <div class="vehicle_status"> <a href="#" class="btn outline btn-xs">Deactive</a>
                  <div class="clearfix"></div>
                  <a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a> </div>
              </li>
            </ul>
            <div class="pagination">
              <ul>
                <li class="current">1</li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/my-vehicles--> 
