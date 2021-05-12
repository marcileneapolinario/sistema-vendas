 <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion text-white" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('/'); ?>">
                <div class="sidebar-brand-icon rotate-n-15 ml-2">
                    <i class="fas fa-file-invoice-dollar"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Ordem de serviços</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/');?>">
                    <i class="fas fa-home"></i>
                    <span>Home</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
               Módulos
            </div>
            
             <!-- Nav Item - Pages Collapse Menu -->
             
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive"
                    aria-expanded="true" aria-controls="collapseFive">
                    <i class="fas fa-shopping-bag"></i>
                    <span>Vendas</span>
                </a>
                <div id="collapseFive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Opções:</h6>
                        <a title="Gerenciar vendas" class="collapse-item" href="<?php echo base_url('vendas');?>"><i class="fas fa-shopping-cart"></i>&nbsp;&nbsp;Vendas</a>
                        <a title="Gerenciar ordem de serviços" class="collapse-item" href="<?php echo base_url('os');?>"><i class="fas fa-tasks"></i>&nbsp;&nbsp;Ordem de serviços</a>
                        
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-address-card"></i>
                    <span>Cadastros</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Opções:</h6>
                        <a title="Gerenciar Clientes" class="collapse-item" href="<?php echo base_url('clientes');?>"><i class="fas fa-user-tie"></i>&nbsp;&nbsp;Clientes</a>
                        <a title="Gerenciar Fornecedores" class="collapse-item" href="<?php echo base_url('fornecedores');?>"><i class="fas fa-truck"></i>&nbsp;&nbsp;Fornecedores</a>
                        <a title="Gerenciar Vendedores" class="collapse-item" href="<?php echo base_url('vendedores');?>"><i class="fas fa-user-tag"></i>&nbsp;&nbsp;Vendedores</a>
                        <a title="Gerenciar Serviços" class="collapse-item" href="<?php echo base_url('servicos');?>"><i class="fas fa-tools"></i>&nbsp;&nbsp;Serviços</a>    
                    </div>
                </div>
            </li>
            
             <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="true" aria-controls="collapseThree">
                    <i class="fas fa-box-open"></i>
                    <span>Estoque</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Opções:</h6>
                        <a title="Gerenciar Marcas" class="collapse-item" href="<?php echo base_url('marcas');?>"><i class="fas fa-tags"></i>&nbsp;&nbsp;Marcas</a>
                        <a title="Gerenciar Produtos" class="collapse-item" href="<?php echo base_url('produtos');?>"><i class="fas fa-boxes"></i>&nbsp;&nbsp;Produtos</a>
                        <a title="Gerenciar Categorias" class="collapse-item" href="<?php echo base_url('categorias');?>"><i class="fab fa-buffer"></i>&nbsp;&nbsp;Categorias</a> 
                    </div>
                </div>
            </li>
        <?php if($this->ion_auth->is_admin()):?>
            
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
                    aria-expanded="true" aria-controls="collapseFour">
                    <i class="fas fa-dollar-sign"></i>
                    <span>Financeiro</span>
                </a>
                <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Opções:</h6>
                        <a title="Gerenciar contas a pagar" class="collapse-item" href="<?php echo base_url('pagar');?>"><i class="fas fa-donate"></i>&nbsp;&nbsp;Contas a pagar</a>
                        <a title="Gerenciar contas a receber" class="collapse-item" href="<?php echo base_url('receber');?>"><i class="fas fa-hand-holding-usd"></i>&nbsp;&nbsp;Contas a receber</a>
                        <a title="Gerenciar formas de pagamento" class="collapse-item" href="<?php echo base_url('modulo');?>"><i class="fas fa-credit-card"></i>&nbsp;&nbsp;Formas de pagamento</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCinco"
                    aria-expanded="true" aria-controls="collapseCinco">
                    <i class="far fa-clipboard"></i>
                    <span>Relatórios</span>
                </a>
                <div id="collapseCinco" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Opções:</h6>
                        <a title="Gerar relatórios de vendas" class="collapse-item" href="<?php echo base_url('relatorios/vendas');?>"><i class="fas fa-shopping-cart"></i>&nbsp;&nbsp;Vendas</a>
                        <a title="Gerar relatórios de serviços" class="collapse-item" href="<?php echo base_url('relatorios/os');?>"><i class="fas fa-tasks"></i>&nbsp;&nbsp;Serviços</a>
                        <a title="Gerar relatórios de contas a pagar" class="collapse-item" href="<?php echo base_url('relatorios/pagar');?>"><i class="fas fa-donate"></i>&nbsp;&nbsp;Contas a pagar</a>
                        <a title="Gerar relatórios de contas a receber" class="collapse-item" href="<?php echo base_url('relatorios/receber');?>"><i class="fas fa-hand-holding-usd"></i>&nbsp;&nbsp;Contas a receber</a>
                        
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
                
            <!-- Heading -->
            <div class="sidebar-heading">
                Configurações
            </div>
  
            <!-- Nav Item -->
            <li class="nav-item">
                <a title="Gerenciar usuários"class="nav-link" href="<?php echo base_url('usuarios');?>">
                    <i class="fas fa-users"></i>
                    <span>Usuários</span></a>
            </li>
            <li class="nav-item">
                <a title="Gerenciar dados do sistema"class="nav-link" href="<?php echo base_url('sistema');?>">
                    <i class="fas fa-cog"></i>
                    <span>Sistema</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            
        <?php endif;?>
            
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar --> 
        
          <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">