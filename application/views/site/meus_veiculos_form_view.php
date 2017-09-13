<!--Post-vehicle-->
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
            <li><a href="profile-settings.html">Profile Settings</a></li>
            <li><a href="my-vehicles.html">Meus Veículos</a></li>
            <li class="active"><a href="post-vehicle.html">Post a Vehicles</a></li>
            <li><a href="#">Sign Out</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 col-sm-8">
        <div class="profile_wrap">
          <h5 class="uppercase underline">Adicionar um novo veículo</h5>
          <form action="#" method="get">
              <input type="hidden" name="url" id="url" value="<?php echo site_url('ajax') ?>" />
            <div class="form-group">
            <label>Marca</label>
                <?php echo form_dropdown('marca', array_merge(array('0' => 'Selecione uma marca'), $marcas), '', 'class="form-control white_bg" id="cmbMarcas"') ?>
            </div>
            <div class="form-group">
                <label>Modelo</label>
                <?php echo form_dropdown('modelo_idmodelo', array_merge(array('0' => 'Selecione um modelo'), $modelos), '', 'class="form-control white_bg" id="cmbModelos"') ?>
            </div>
            <div class="form-group">
                <label>Versão</label>
                <?php echo form_dropdown('versao', array_merge(array('0' => 'Selecione uma versão'), $modelos), '', 'class="form-control white_bg" id="cmbVersoes"') ?>
            </div>
              
            <div class="form-group">
                <label>Descrição</label>
                <input type="text" name="descricaoanuncio" class="form-control" placeholder="Descrição do anuncio" value="">
                <?php echo display_erros(isset($erros['descricaoanuncio']) ? $erros['descricaoanuncio'] : null) ?>
            </div>
            <div class="form-group">
                <label>Quilometragem</label>
                <input type="text" name="km" class="form-control" placeholder="Quilometragem do veiculo" value="">
                <?php echo display_erros(isset($erros['km']) ? $erros['km'] : null) ?>
            </div> 
            <div class="form-group">
                <label>Ano de Fabricação</label>
                <input type="text" name="anofab" class="form-control" placeholder="Ano de Fabricação" value="">
                <?php echo display_erros(isset($erros['anofab']) ? $erros['anofab'] : null) ?>
            </div> 
              
            <div class="form-group">
                <label>Ano do Modelo</label>
                <input type="text" name="anomodelo" class="form-control" placeholder="Ano do Modelo" value="">
                <?php echo display_erros(isset($erros['anomodelo']) ? $erros['anomodelo'] : null) ?>
            </div>
              
            
            <div class="vehicle_type form-group" align="left">
                <label>Aceita troca?</label></br> 
                <div class="form-group radio col-md-6 accessories_list">
                    <input type="radio" name="aceitatrocal" value="sim" id="aceitatroca_sim" >
                    <label for="aceitatroca_sim">Sim</label>
                 </div>
                <div class="form-group radio col-md-6 accessories_list">
                    <input type="radio" name="aceitatrocal" value="nao" id="aceitatroca_nao">
                    <label for="aceitatroca_nao">Não</label>
                </div>
                <?php echo display_erros(isset($erros['aceitatrocal']) ? $erros['aceitatrocal'] : null) ?>
            </div>
            
             
            <div class="vehicle_type form-group" align="left">
                <label>Unico dono?</label></br>
                <div class="form-group radio col-md-6 accessories_list">
                    <input type="radio" name="unicodono" value="sim" id="unicodono_sim">
                    <label for="unicodono_sim">Sim</label>
                 </div>
                <div class="form-group radio col-md-6 accessories_list">
                    <input type="radio" name="unicodono" value="nao" id="unicodono_nao">
                    <label for="unicodono_nao">Não</label>
                </div>
                <?php echo display_erros(isset($erros['unicodono']) ? $erros['unicodono'] : null) ?>
            </div>
              
             <div class="form-group">
                <label>Valor</label>
                <input type="text" name="valor" class="form-control" placeholder="Valor" value="">
                <?php echo display_erros(isset($erros['valor']) ? $erros['valor'] : null) ?>
            </div>         
     
            <div class="gray-bg field-title">
              <h6>Accessories</h6>
            </div>
            <div class="vehicle_accessories">
                <?php foreach ($opcionais as $op ) : ?>
              <div class="form-group checkbox col-md-6 accessories_list">
                  <input id="<?php echo 'op_'.$op->idopcional ?>" type="checkbox[]" value="<?php echo $op->idopcional ?>">
                <label for="<?php echo 'op_'.$op->idopcional ?>"><?php echo $op->descricaoopcional ?></label>
              </div>
              
              <?php endforeach; ?>  
            </div>
            <div class="vehicle_type">
              <div class="form-group radio col-md-6 accessories_list">
                <input type="radio" name="vehicle_type" value="radio" id="newcar">
                <label for="newcar">New Car</label>
              </div>
              <div class="form-group radio col-md-6 accessories_list">
                <input type="radio" name="vehicle_type" value="radio" id="usedcar">
                <label for="usedcar">Used Car</label>
              </div>
            </div>
            <div class="form-group">
              <button type="submit" class="btn">Submit Vehicle <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/Post-vehicle--> 
