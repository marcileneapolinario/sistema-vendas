
<?php $this->load->view('layout/sidebar'); ?>

<!-- Main Content -->
<div id="content">

    <?php $this->load->view('layout/navbar'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">


        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('servicos');?>">Serviços</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
            </ol>
        </nav>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <form class="user" method="POST" name="form_edit">
                    
                    <p><strong><i class="far fa-clock"></i>&nbsp;&nbsp;Última alteração:&nbsp;&nbsp;</strong><?php echo formata_data_banco_com_hora($servico->servico_data_alteracao); ?></p>
                    
                    <fieldset class="mt-3 mb-4 border  pl-3 pr-3 pb-2">
                        <legend class="font-small pt-3 pb-3"><i class="fas fa-tools"></i>&nbsp;&nbsp;Informações do serviço</legend>
                        
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label>Nome do serviço</label>
                                <input type="text" class="form-control form-control-user" name="servico_nome" value="<?php echo $servico->servico_nome; ?>">
                                <?php echo form_error('servico_nome','<small class="form-text text-danger">','</small>');?>
                            </div>
                            <div class="col-md-3">
                                <label>Preço</label>
                                <input type="text" class="form-control form-control-user money" name="servico_preco" value="<?php echo $servico->servico_preco; ?>">
                                <?php echo form_error('servico_preco','<small class="form-text text-danger">','</small>');?>
                            </div>
                            <div class="col-md-2">
                                <label>Serviço Ativo</label>
                                <select class="custom-select "name="servico_ativo">
                                    <option value="0" <?php echo($servico->servico_ativo == 0 ? 'selected' : ''); ?>>Não</option>
                                    <option value="1" <?php echo($servico->servico_ativo == 1 ? 'selected' : ''); ?>>Sim</option>
                                </select>
                                <?php echo form_error('servico_estado','<small class="form-text text-danger">','</small>');?>
                            </div> 
                            <div class="col-md-4">
                                <label>Descrição do serviço</label>
                                <textarea class="form-control form-control-user" style="min-height: 100px!important" name="servico_descricao"><?php echo $servico->servico_descricao; ?></textarea>
                                <?php echo form_error('servico_descricao','<small class="form-text text-danger">','</small>');?> 
                            </div> 
                        </div>
                            <div class="form-group-row">    
                               <input type="hidden" name="servico_id" value="<?php echo $servico->servico_id; ?>"/>
                            </div>
                    </fieldset>
                    <div>
                         <button type="submit" class="btn btn-primary btn-sm ml-2">Salvar</button>
                         <a title="Voltar" href="<?php echo base_url($this->router->fetch_class());?>" class="btn btn-success btn-sm">Voltar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

