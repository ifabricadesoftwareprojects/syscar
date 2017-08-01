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
                                        <label>Nome da Versão</label>
                                        <input type="text" name="nomeversao" class="form-control" placeholder="Nome da versão" value="<?php echo $versao->nomeversao ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Descrição</label>
                                        <input type="text" name="descricaoversao" class="form-control" placeholder="Descrição da versão" value="<?php echo $versao->descricaoversao ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Motor</label>
                                        <input type="text" name="motor" class="form-control" placeholder="Motor da versão" value="<?php echo $versao->motor ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Combustivel</label>
                                        <input type="text" name="combustivel" class="form-control" placeholder="Tipo do combustivel" value="<?php echo $versao->combustivel ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Portas</label>
                                        <input type="text" name="portas" class="form-control" placeholder="Quantidade de portas" value="<?php echo $versao->portas ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Cambio</label>
                                        <input type="text" name="cambio" class="form-control" placeholder="Cambio" value="<?php echo $versao->cambio ?>">
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