
<?php $this->load->view('layout/sidebar'); ?>

<!-- Main Content -->
<div id="content">

    <?php $this->load->view('layout/navbar'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">


        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('/');?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
            </ol>
        </nav>
        
        <?php if($message = $this->session->flashdata('sucesso')):?>
        
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong><i class="far fa-smile-wink"></i>&nbsp;&nbsp;<?php echo $message;?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
            </div> 
        </div>
        
        <?php endif;?>
        
        <?php if($message = $this->session->flashdata('error')):?>
        
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;<?php echo $message;?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
            </div> 
        </div>
        
        <?php endif;?>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">  
            <div class="card-body">
                <form class="user" method="POST" name="form_edit">
                    
                    <div class="form-group row mb-4">
                        
                        <div class="col-md-3">
                            <label>Raz??o Social</label>
                            <input type="text" class="form-control form-control-user" name="sistema_razao_social" placeholder="Raz??o Social" value="<?php echo $sistema->sistema_razao_social; ?>">
                            <?php echo form_error('sistema_razao_social','<small class="form-text text-danger">','</small>');?>
                        </div>
                        <div class="col-md-3">
                            <label>Nome Fantasia</label>
                            <input type="text" class="form-control form-control-user" name="sistema_nome_fantasia" placeholder="Nome Fantasia" value="<?php echo $sistema->sistema_nome_fantasia; ?>">
                            <?php echo form_error('sistema_nome_fantasia','<small class="form-text text-danger">','</small>');?>
                        </div>
                        <div class="col-md-3">
                            <label>CNPJ</label>
                            <input type="text" class="form-control form-control-user cnpj" name="sistema_cnpj" value="<?php echo $sistema->sistema_cnpj; ?>">
                            <?php echo form_error('sistema_cnpj','<small class="form-text text-danger">','</small>');?>
                        </div>
                        <div class="col-md-3">
                            <label>Inscri????o Estadual</label>
                            <input type="text" class="form-control form-control-user" name="sistema_ie" value="<?php echo $sistema->sistema_ie; ?>">
                            <?php echo form_error('sistema_ie','<small class="form-text text-danger">','</small>');?>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        
                        <div class="col-md-2">
                            <label>Telefone Fixo</label>
                            <input type="text" class="form-control form-control-user sp_celphones" name="sistema_telefone_fixo" value="<?php echo $sistema->sistema_telefone_fixo; ?>">
                            <?php echo form_error('sistema_telefone_fixo','<small class="form-text text-danger">','</small>');?>
                        </div>
                        <div class="col-md-2">
                            <label>Celular</label>
                            <input type="text" class="form-control form-control-user sp_celphones" name="sistema_telefone_movel" value="<?php echo $sistema->sistema_telefone_movel; ?>">
                            <?php echo form_error('sistema_telefone_movel','<small class="form-text text-danger">','</small>');?>
                        </div>
                        <div class="col-md-4">
                            <label>E-mail para contato</label>
                            <input type="email" class="form-control form-control-user" name="sistema_email" value="<?php echo $sistema->sistema_email; ?>">
                            <?php echo form_error('sistema_email','<small class="form-text text-danger">','</small>');?>
                        </div>
                        <div class="col-md-4">
                            <label>URL do site</label>
                            <input type="text" class="form-control form-control-user" name="sistema_site_url" value="<?php echo $sistema->sistema_site_url; ?>">
                            <?php echo form_error('sistema_site_url','<small class="form-text text-danger">','</small>');?>
                        </div>
                        </div>
                    <div class="form-group row">

                            <div class="col-md-4">
                                <label>Endere??o</label>
                                <input type="text" class="form-control form-control-user" name="sistema_endereco" value="<?php echo $sistema->sistema_endereco; ?>">
                                <?php echo form_error('sistema_endereco','<small class="form-text text-danger">','</small>');?>
                            </div>
                            <div class="col-md-2">
                                <label>CEP</label>
                                <input type="text" class="form-control form-control-user cep" name="sistema_cep" value="<?php echo $sistema->sistema_cep; ?>">
                                <?php echo form_error('sistema_cep','<small class="form-text text-danger">','</small>');?>
                            </div>
                            <div class="col-md-2">
                                <label>N??mero</label>
                                <input type="text" class="form-control form-control-user" name="sistema_numero" value="<?php echo $sistema->sistema_numero; ?>">
                                <?php echo form_error('sistema_numero','<small class="form-text text-danger">','</small>');?>
                            </div>
                            <div class="col-md-2">
                                <label>Cidade</label>
                                <input type="text" class="form-control form-control-user" name="sistema_cidade" value="<?php echo $sistema->sistema_cidade; ?>">
                                <?php echo form_error('sistema_cidade','<small class="form-text text-danger">','</small>');?>
                            </div>
                            <div class="col-md-2">
                                <label>Estado</label>
                                <input type="text" class="form-control form-control-user uf" name="sistema_estado" value="<?php echo $sistema->sistema_estado; ?>">
                                <?php echo form_error('sistema_estado','<small class="form-text text-danger">','</small>');?>
                            </div>
                        </div>
                    <div class="form-group row">

                            <div class="col-md-12">
                                <label>Ordem de servi??os e vendas</label>
                                <textarea class="form-control form-control-user" name="sistema_txt_ordem_servico" placeholder="Digite aqui os seus servi??os"><?php echo $sistema->sistema_txt_ordem_servico; ?></textarea>
                                <?php echo form_error('sistema_txt_ordem_servico','<small class="form-text text-danger">','</small>');?>
                            </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

