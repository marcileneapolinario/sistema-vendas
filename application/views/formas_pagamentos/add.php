
<?php $this->load->view('layout/sidebar'); ?>

<!-- Main Content -->
<div id="content">

    <?php $this->load->view('layout/navbar'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">


        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('modulo');?>">Formas de pagamento</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
            </ol>
        </nav>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <form class="user" method="POST" name="form_add">

                    <fieldset class="mt-3 mb-4 border  pl-3 pr-3 pb-2">
                        <legend class="font-small pt-3 pb-3"><i class="fas fa-credit-card"></i>&nbsp;&nbsp;Dados da forma de pagamento</legend>
                        
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label>Tipo de pagamento</label>
                                <input type="text" class="form-control form-control-user" name="forma_pagamento_nome" value="<?php echo set_value('forma_pagamento_nome'); ?>">
                                <?php echo form_error('forma_pagamento_nome','<small class="form-text text-danger">','</small>');?>
                            </div>
                            <div class="col-md-3">
                                <label>Forma de pagamento ativa</label>
                                <select class="custom-select "name="forma_pagamento_ativa">
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                                <?php echo form_error('forma_estado','<small class="form-text text-danger">','</small>');?>
                            </div> 
                            <div class="col-md-3">
                                <label>Parcelamento</label>
                                <select class="custom-select "name="forma_pagamento_aceita_parc">
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                                <?php echo form_error('forma_estado','<small class="form-text text-danger">','</small>');?>
                            </div> 
                        </div>
                           
                    </fieldset>
                    <div>
                         <button type="submit" class="btn btn-primary btn-sm ml-2">Salvar</button>
                         <a title="Voltar" href="<?php echo base_url('modulo');?>" class="btn btn-success btn-sm">Voltar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

