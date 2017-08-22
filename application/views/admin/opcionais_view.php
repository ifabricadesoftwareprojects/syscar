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
                                <a href="<?php echo admin_link('opcionais/adicionar') ?>" class="btn btn-primary" title="">Adicionar opcional</a>
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
                            </thead>
                            <tbody>
                                <?php foreach ($opcionais as $opcional) : ?>
                                <tr>
                                    <td><?php echo $opcional->idopcional ?></td>
                                    <td><?php echo $opcional->descricaoopcional ?></td>
                                    <td><a href="<?php echo admin_link('opcionais/editar/' . $opcional->idopcional) ?>" class="btn">Editar</a></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
</div>
