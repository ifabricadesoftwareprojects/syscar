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
                                        <label>Descrição</label>
                                        <input type="text" name="descricaoopcional" class="form-control" placeholder="Descrição opcional" value="<?php echo $opcional->descricaoopcional ?>">
                                        <?php echo display_erros(isset($erros['descricaoopcional']) ? $erros['descricaoopcional'] : null) ?>
                                                                                                              
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


