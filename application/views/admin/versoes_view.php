<div class="row">
    <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <div class="row">
                            <div class="col-md-12">
                                <?php echo $alert_message ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9">
                                <a href="<?php echo admin_link('versoes/adicionar') ?>" class="btn btn-primary" title="">Adicionar versão</a>
                            </div>
                             <div class="col-md-3">
                                 <form class="form-inline">
                                    <div class="form-group">
                                        <input type="text" class="form-control input-sm" name="q">
                                    </div>
                                     <button type="submit" class="btn btn-default">Pesquisar</button>
                                  </form>
                            </div>
                        </div>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>#</th>
                                <th>Descrição</th>
                                <th>Motor</th>
                                <th>Combustivel</th>
                                <th>Portas</th>
                                <th>Cambio</th>
                            </thead>
                            <tbody>
                                <?php foreach ($versoes as $versao) : ?>
                                <tr>
                                    <td><?php echo $versao->idversao ?></td>
                                    <td><?php echo $versao->descricaoversao ?></td>
                                    <td><?php echo $versao->motor ?></td>
                                    <td><?php echo $versao->combustivel ?></td>
                                    <td><?php echo $versao->portas ?></td>
                                    <td><?php echo $versao->cambio ?></td>
                                    <td><a href="<?php echo admin_link('versoes/editar/' . $versao->idversao) ?>" class="btn">Editar</a></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
</div>