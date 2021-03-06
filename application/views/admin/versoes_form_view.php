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
                                    <input type="hidden" name="url" id="url" value="<?php echo site_url('ajax') ?>" />
                                    <div class="form-group">
                                        <label>Marca</label>
                                        <?php echo form_dropdown('marca', my_array_merge(array('0' => 'Selecione uma marca'), $marcas), (isset($versao->marca_idmarca) ? $versao->marca_idmarca : ''), 'class="form-control" id="cmbMarcas"') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Modelo</label>
                                        <?php echo form_dropdown('modelo_idmodelo', my_array_merge(array('0' => 'Selecione um modelo'), $modelos), $versao->modelo_idmodelo, 'class="form-control" id="cmbModelos"') ?>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Descrição</label>
                                        <input type="text" name="descricaoversao" class="form-control" placeholder="Descrição da versão" value="<?php echo $versao->descricaoversao ?>">
                                        <?php echo display_erros(isset($erros['descricaoversao']) ? $erros['descricaoversao'] : null) ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Motor</label>
                                        <input type="text" name="motor" class="form-control" placeholder="Motor da versão" value="<?php echo $versao->motor ?>">
                                        <?php echo display_erros(isset($erros['motor']) ? $erros['motor'] : null) ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Combustivel</label>
                                        <input type="text" name="combustivel" class="form-control" placeholder="Tipo do combustivel" value="<?php echo $versao->combustivel ?>">
                                        <?php echo display_erros(isset($erros['combustivel']) ? $erros['combustivel'] : null) ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Portas</label>
                                        <input type="text" name="portas" class="form-control" placeholder="Quantidade de portas" value="<?php echo $versao->portas ?>">
                                        <?php echo display_erros(isset($erros['portas']) ? $erros['portas'] : null) ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Cambio</label>
                                        <input type="text" name="cambio" class="form-control" placeholder="Cambio" value="<?php echo $versao->cambio ?>">
                                        <?php echo display_erros(isset($erros['cambio']) ? $erros['cambio'] : null) ?>
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
