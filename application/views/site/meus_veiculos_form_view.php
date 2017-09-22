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
         <?php if ($this->session->token) : ?>  
        <div class="profile_nav user_login">
          <ul>
            <li><a href="<?php echo base_url('minha_conta/meus_dados') ?>"> Meus Dados</a></li>
            <li ><a href="<?php echo base_url('minha_conta/meus_veiculos') ?>">Meus Veículos</a></li>
            <li class="active"><a href="<?php echo base_url('minha_conta/meus_veiculos/adicionar') ?>">Adicionar novo veículo</a></li>
            <li><a href="<?php echo base_url('minha_conta/logout') ?>">Sair</a></li>
          </ul>
        </div>
        <?php endif; ?> 
      </div>
        
      <div class="col-md-6 col-sm-8">
        <div class="profile_wrap">
          <h5 class="uppercase underline">Adicionar um novo veículo</h5>
          <p><?php echo $msg ?></p>
          <form method="post">
            <input type="hidden" name="url" id="url" value="<?php echo site_url('ajax') ?>" />
            <div class="form-group">
            <label>Marca</label>
                <?php echo form_dropdown('marca', my_array_merge(array('0' => 'Selecione uma marca'), $marcas), (isset($anuncio->marca_idmarca) ? $anuncio->marca_idmarca : ''), 'class="form-control white_bg" id="cmbMarcas"') ?>
            </div>
            <div class="form-group">
                <label>Modelo</label>
                <?php echo form_dropdown('modelo_idmodelo', my_array_merge(array('0' => 'Selecione um modelo'), $modelos), (isset($anuncio->modelo_idmodelo) ? $anuncio->modelo_idmodelo : ''), 'class="form-control white_bg" id="cmbModelos"') ?>
            </div>
            <div class="form-group">
                <label>Versão</label>
                <?php echo form_dropdown('versao', my_array_merge(array('0' => 'Selecione uma versão'), $versoes), (isset($anuncio->versao_idversao) ? $anuncio->versao_idversao : ''), 'class="form-control white_bg" id="cmbVersoes"') ?>
            </div>
              
            <div class="form-group">
                <label>Descrição</label>
                <input type="text" name="descricaoanuncio" class="form-control" placeholder="Descrição do anuncio" value="<?php echo $anuncio->descricaoanuncio ?>">
                <?php echo display_erros(isset($erros['descricaoanuncio']) ? $erros['descricaoanuncio'] : null) ?>
            </div>
            <div class="form-group">
                <label>Quilometragem</label>
                <input type="text" name="km" class="form-control" placeholder="Quilometragem do veiculo" value="<?php echo $anuncio->km ?>">
                <?php echo display_erros(isset($erros['km']) ? $erros['km'] : null) ?>
            </div> 
            <div class="form-group">
                <label>Ano de Fabricação</label>
                <input type="text" name="anofab" class="form-control" placeholder="Ano de Fabricação" value="<?php echo $anuncio->anofab ?>">
                <?php echo display_erros(isset($erros['anofab']) ? $erros['anofab'] : null) ?>
            </div> 
              
            <div class="form-group">
                <label>Ano do Modelo</label>
                <input type="text" name="anomodelo" class="form-control" placeholder="Ano do Modelo" value="<?php echo $anuncio->anomodelo ?>">
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
                    <input type="radio" name="unicodono" value="sim" id="unicodono_sim"<?php echo ($anuncio->unicodono == 'sim' ? ' checked' : '') ?>>
                    <label for="unicodono_sim">Sim</label>
                 </div>
                <div class="form-group radio col-md-6 accessories_list">
                    <input type="radio" name="unicodono" value="nao" id="unicodono_nao"<?php echo ($anuncio->unicodono == 'nao' ? ' checked' : '') ?>>
                    <label for="unicodono_nao">Não</label>
                </div>
                <?php echo display_erros(isset($erros['unicodono']) ? $erros['unicodono'] : null) ?>
            </div>
              
             <div class="form-group">
                <label>Valor</label>
                <input type="text" name="valor" class="form-control" placeholder="Valor" value="<?php echo $anuncio->valor ?>">
                <?php echo display_erros(isset($erros['valor']) ? $erros['valor'] : null) ?>
            </div>         
     
            <div class="gray-bg field-title">
              <h6>Acessórios</h6>
            </div>
            <div class="vehicle_accessories">
              <?php foreach ($opcionais as $op ) : ?>
                <div class="form-group checkbox col-md-6 accessories_list">
                    <input name="opcionais[]" id="<?php echo 'op_'.$op->idopcional ?>" type="checkbox" value="<?php echo $op->idopcional ?>"<?php echo (isset($opcionais_anuncio) && in_array($op->idopcional, $opcionais_anuncio) ? ' checked' : '') ?>>     
                    <label for="<?php echo 'op_'.$op->idopcional ?>"><?php echo $op->descricaoopcional ?></label> 
                </div>
              
              <?php endforeach; ?>  
            </div>
            <div class="gray-bg field-title">
              <h6>Tipo de Carro</h6>
            </div>
            <div class="vehicle_type">
              <div class="form-group radio col-md-6 accessories_list">
                <input type="radio" name="vehicle_type" value="radio" id="newcar">
                <label for="newcar">Carro Novo</label>
              </div>
              <div class="form-group radio col-md-6 accessories_list">
                <input type="radio" name="vehicle_type" value="radio" id="usedcar">
                <label for="usedcar">Carro Usado</label>
              </div>
            </div>
            <div class="form-group">
              <button type="submit" class="btn">Postar Carro <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/Post-vehicle--> 
