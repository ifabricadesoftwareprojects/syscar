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
                                <a href="<?php echo admin_link('modelos/adicionar') ?>" class="btn btn-primary" title="">Adicionar modelo</a>
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
                                <th>Modelo</th>
                                <th>Marca</th>
                            </thead>
                            <tbody>
                                <?php foreach ($modelos as $modelo) : ?>
                                <tr>
                                    <td><?php echo $modelo->idmodelo ?></td>
                                    <td><?php echo $modelo->nomemodelo ?></td>
                                    <td><?php echo $modelo->nomemarca ?></td>
                                    <td><a href="<?php echo admin_link('modelos/editar/' . $modelo->idmodelo) ?>" class="btn">Editar</a></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
</div>