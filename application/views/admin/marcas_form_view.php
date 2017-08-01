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
                                        <label>Nome da Marca</label>
                                        <input type="text" name="nomemarca" class="form-control" placeholder="Nome da Marca" value="<?php echo $marca->nomemarca ?>">
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

