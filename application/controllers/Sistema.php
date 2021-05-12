<?php
 defined('BASEPATH') OR exit ('Ação não permitida');
 
 class Sistema extends CI_Controller{
     
    public function __construct() {
        parent::__construct();
         
        if (!$this->ion_auth->logged_in()) {
            $this->session->set_flashdata('info', 'Sua sessão expirou!');
            redirect('login');
        }
        
        if(!$this->ion_auth->is_admin()){
           $this->session->set_flashdata('info', 'Você não pode acessar esta opção!');
           redirect('/'); 
        }
    }
    
    public function index() {
        
       $data = array(
           'titulo' => 'Editar informações do sistema',
           'scripts' => array(
               'vendor/mask/jquery.mask.min.js',
               'vendor/mask/app.js',
           ),
           
           'sistema' => $this->core_model->get_by_id('sistema', array('sistema_id' => 1)),
       );
       
        $this->form_validation->set_rules('sistema_razao_social', 'Razão Social', 'required|min_length[10]|max_length[145]');
        $this->form_validation->set_rules('sistema_nome_fantasia', 'Nome Fantasia', 'required|min_length[10]|max_length[145]');
        $this->form_validation->set_rules('sistema_cnpj', 'CNPJ', 'required|exact_length[18]');
        $this->form_validation->set_rules('sistema_ie', 'Inscrição Estadual', 'required|max_length[25]');
        $this->form_validation->set_rules('sistema_telefone_fixo', 'Telefone Fixo', 'required|max_length[25]');
        $this->form_validation->set_rules('sistema_telefone_movel', 'Telefone Móvel', 'required|max_length[25]');
        $this->form_validation->set_rules('sistema_email', 'E-mail', 'required|valid_email|max_length[100]');
        $this->form_validation->set_rules('sistema_site_url', 'URL do site', 'required|valid_url|max_length[100]');
        $this->form_validation->set_rules('sistema_cep', 'CEP', 'required|exact_length[9]');
        $this->form_validation->set_rules('sistema_endereco', 'Endereço', 'required|max_length[145]');
        $this->form_validation->set_rules('sistema_numero', 'Número', 'required|max_length[25]');
        $this->form_validation->set_rules('sistema_cidade', 'Cidade', 'required|max_length[45]');
        $this->form_validation->set_rules('sistema_estado', 'Estado', 'required|exact_length[2]');
        $this->form_validation->set_rules('sistema_txt_ordem_servico', 'Odem de serviços e vendas', 'max_length[500]');
        
        
       
        if($this->form_validation->run()){
            
            /*
                [sistema_razao_social] => Mart System
                [sistema_nome_fantasia] => Sistema de vendas
                [sistema_cnpj] => 04.160.686/0001-39
                [sistema_ie] => 338.083.954.620
                [sistema_telefone_fixo] => 1163598-4721
                [sistema_telefone_movel] => 11457896321
                [sistema_email] => martsystem@gmail.com.br
                [sistema_site_url] => http://localhost/sistema-vendas/
                [sistema_endereco] => Rua Novo Horizonte
                [sistema_cep] => 04864-010
                [sistema_numero] => 1277
                [sistema_cidade] => São Paulo
                [sistema_estado] => SP
                [sistema_txt_ordem_servico] => akskdjfj
             */
            
            $data = elements(
                    array(
                        'sistema_razao_social',
                        'sistema_nome_fantasia',
                        'sistema_cnpj',
                        'sistema_ie',
                        'sistema_telefone_fixo',
                        'sistema_telefone_movel',
                        'sistema_email',
                        'sistema_site_url',
                        'sistema_endereco',
                        'sistema_cep',
                        'sistema_numero',
                        'sistema_cidade',
                        'sistema_estado',
                        'sistema_txt_ordem_servico',       
                    ), $this->input->post()    
            );
            
            $data = html_escape($data);
            
            $this->core_model->update('sistema', $data, array('sistema_id' => 1));
            redirect('sistema');
            
        }else{

             //Erro de validação

            $this->load->view('layout/header', $data);
            $this->load->view('sistema/index');
            $this->load->view('layout/footer');
        }
               
      
        
    }
     
 }
