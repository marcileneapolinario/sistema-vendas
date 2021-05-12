
<?php $this->load->view('layout/sidebar'); ?>

<!-- Main Content -->
<div id="content">

    <?php $this->load->view('layout/navbar'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">


        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('receber');?>">Contas a receber</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
            </ol>
        </nav>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <form class="user" method="POST" name="form_add">
                      
                    <fieldset class="mt-3 mb-4 border  pl-3 pr-3 pb-2">
                        <legend class="font-small pt-3 pb-3">Informações sobre a conta</legend>
                        
                        <div class="form-group row"> 
                            
                            <div class="col-md-4">
                                <label>Cliente</label>
                                <select class="custom-select contas_receber" name="conta_receber_cliente_id">
                                    <?php foreach ($clientes as $cliente):?>
                                        <option value="<?php echo $cliente->cliente_id?>"><?php echo $cliente->cliente_nome?></option>
                                    <?php endforeach;?>
                                </select>
                                <?php echo form_error('conta_receber_cliente_id','<small class="form-text text-danger">','</small>');?>
                            </div>
                            <div class="col-md-3">
                                <label>Data de vencimento</label>
                                <input type="date" class="form-control form-control-user-date" name="conta_receber_data_vencimento" value="<?php echo set_value('conta_receber_data_vencimento'); ?>">
                                <?php echo form_error('conta_receber_data_vencimento','<small class="form-text text-danger">','</small>');?>
                            </div>
                            <div class="col-md-3">
                                <label>Valor da conta</label>
                                <input type="text" class="form-control form-control-user money2" name="conta_receber_valor" value="<?php echo set_value('conta_receber_valor'); ?>">
                                <?php echo form_error('conta_receber_valor','<small class="form-text text-danger">','</small>');?>
                            </div>
                            <div class="col-md-2">
                                <label>Situação</label>
                                <select class="custom-select" name="conta_receber_status">
                                    <option value="1">Paga</option>
                                    <option value="0">Pendente</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row"> 
                            
                            <div class="col-md-7">
                                <label>Observações da conta</label>
                                <textarea class="form-control" name="conta_receber_obs"><?php echo set_value('conta_receber_obs'); ?></textarea>
                                <?php echo form_error('conta_receber_obs','<small class="form-text text-danger">','</small>');?>
                            </div>
                        </div>
                    </fieldset>
                    <div>
                        <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                       
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

