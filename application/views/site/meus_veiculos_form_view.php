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
          <h5 class="uppercase underline">Post a New Vehicle</h5>
          <form action="#" method="get">
            <div class="form-group">
            <label>Marca</label>
                <?php echo form_dropdown('marca', array_merge(array('0' => 'Selecione uma marca'), $marcas), (isset($versao->marca_idmarca) ? $versao->marca_idmarca : ''), 'class="form-control" id="cmbMarcas"') ?>
            </div>
            <div class="form-group">
                <label>Modelo</label>
                <?php echo form_dropdown('modelo_idmodelo', array_merge(array('0' => 'Selecione um modelo'), $modelos), $versao->modelo_idmodelo, 'class="form-control" id="cmbModelos"') ?>
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
              
            <div class="form-group" align="left">
                <label for="aceitatrocal">Aceita troca?</label></br>
                
                <label class="radio-inline">
                    <input type="radio" name="aceitatrocal" value="Sim" /> Sim
                </label>
                <label class="radio-inline">
                    <input type="radio" name="aceitatrocal" value="Não" /> Não
                </label>
                <?php echo display_erros(isset($erros['aceitatrocal']) ? $erros['aceitatrocal'] : null) ?>
            </div>
              
            <div class="form-group" align="left">
                <label for="unicodono">Unico dono?</label></br>
                
                <label class="radio-inline">
                    <input type="radio" name="unicodono" value="Sim" /> Sim
                </label>
                <label class="radio-inline">
                    <input type="radio" name="unicodono" value="Não" /> Não
                </label>
                <?php echo display_erros(isset($erros['unicodono']) ? $erros['unicodono'] : null) ?>
            </div>  
              
             <div class="form-group">
                <label>Valor</label>
                <input type="text" name="valor" class="form-control" placeholder="Valor" value="<?php echo $anuncio->valor ?>">
                <?php echo display_erros(isset($erros['valor']) ? $erros['valor'] : null) ?>
            </div>         
     
            <div class="gray-bg field-title">
              <h6>Accessories</h6>
            </div>
            <div class="vehicle_accessories">
              <div class="form-group checkbox col-md-6 accessories_list">
                <input id="air_conditioner" type="checkbox">
                <label for="air_conditioner">Air Conditioner</label>
              </div>
              <div class="form-group checkbox col-md-6 accessories_list">
                <input id="door" type="checkbox">
                <label for="door">Power Door Locks</label>
              </div>
              <div class="form-group checkbox col-md-6 accessories_list">
                <input id="antiLock" type="checkbox">
                <label for="antiLock">AntiLock Braking System</label>
              </div>
              <div class="form-group checkbox col-md-6 accessories_list">
                <input id="brake" type="checkbox">
                <label for="brake">Brake Assist</label>
              </div>
              <div class="form-group checkbox col-md-6 accessories_list">
                <input id="steering" type="checkbox">
                <label for="steering">Power Steering</label>
              </div>
              <div class="form-group checkbox col-md-6 accessories_list">
                <input id="airbag" type="checkbox">
                <label for="airbag">Driver Airbag</label>
              </div>
              <div class="form-group checkbox col-md-6 accessories_list">
                <input id="windows" type="checkbox">
                <label for="windows">Power Windows</label>
              </div>
              <div class="form-group checkbox col-md-6 accessories_list">
                <input id="passenger_airbag" type="checkbox">
                <label for="passenger_airbag">Passenger Airbag</label>
              </div>
              <div class="form-group checkbox col-md-6 accessories_list">
                <input id="player" type="checkbox">
                <label for="player">CD Player</label>
              </div>
              <div class="form-group checkbox col-md-6 accessories_list">
                <input id="sensor" type="checkbox">
                <label for="sensor">Crash Sensor</label>
              </div>
              <div class="form-group checkbox col-md-6 accessories_list">
                <input id="seats" type="checkbox">
                <label for="seats">Leather Seats</label>
              </div>
              <div class="form-group checkbox col-md-6 accessories_list">
                <input id="engine_warning" type="checkbox">
                <label for="engine_warning">Engine Check Warning</label>
              </div>
              <div class="form-group checkbox col-md-6 accessories_list">
                <input id="locking" type="checkbox">
                <label for="locking">Central Locking</label>
              </div>
              <div class="form-group checkbox col-md-6 accessories_list">
                <input id="headlamps" type="checkbox">
                <label for="headlamps">Automatic Headlamps</label>
              </div>
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
