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
                                        <label>Nome da Modelo</label><div class="form-group">
                                        <label>Marca</label>
                                        <?php echo form_dropdown('marca_idmarca', $marcas, $modelo->marca_idmarca, 'class="form-control"') ?>
                                    </div>
                                        <input type="text" name="nomemodelo" class="form-control" placeholder="Nome da Modelo" value="<?php echo $modelo->nomemodelo ?>">
                                        <?php echo display_erros(isset($erros['nomemodelo']) ? $erros['nomemodelo'] : null) ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Marca</label>
                                        <?php echo form_dropdown('marca_idmarca', $marcas, $modelo->marca_idmarca, 'class="form-control"') ?>
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
