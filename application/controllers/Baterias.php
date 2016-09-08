<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Baterias extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('bateria');
        $this->load->helper('form');
    }
    
    public function index($mensagem = null){

        $data['baterias'] = $this->consultar();
        $data['mensagem'] = $mensagem;
        $this->load->view('bateria-consultar', $data);
    }

    public function cadastrar(){
        $this->load->view('bateria-cadastrar');
    }

    public function cadastrar_form() {

        $bateria_obj = new Bateria();
        $bateria_obj->setNome_bateria($this->input->post('criar_nome_bateria'));
        $bateria_obj->setData_inicio($this->input->post('criar_data_inicio'));
        $bateria_obj->setData_fim($this->input->post('criar_data_fim'));
        $bateria_obj->setSemestre($this->input->post('criar_semestre'));
        $bateria_obj->setAno($this->input->post('criar_ano'));

        $resultado = $bateria_obj->criar();

        if( $resultado == true ) {
            redirect('baterias/index/sucesso_cadastrar' );
        } else {
            redirect('baterias/index/erro' );
        }
        
    }

    public function consultar($id_bateria = null){
        
        if(!empty($id_bateria)){
            $bateria_obj = new Bateria();
        
            $data['bateria'] = $bateria_obj->consultarPorId($id_bateria);
            $this->load->view('bateria-consultar-unico', $data);
        }
        else {
            $bateria_obj = new Bateria();
            return $baterias = $bateria_obj->consultar(); 
        }         
    }

    public function editar($id_bateria = null, $mensagem = null) {

        $bateria_obj = new Bateria();
        $bateria  = $bateria_obj->consultarPorId($id_bateria);
        
        if( !empty($bateria) ) {

            $data['mensagem'] = $mensagem;
            $data['bateria'] = $bateria;
            
            $this->load->view( 'bateria-editar', $data );


        } else {
            show_404();
        }

    }

    public function editar_form() {
        
        $bateria_obj = new Bateria();
        $bateria_obj->setId_bateria($this->input->post('editar_id_bateria'));
        $bateria_obj->setNome_bateria($this->input->post('editar_nome_bateria'));
        $bateria_obj->setData_inicio($this->input->post('editar_data_inicio'));
        $bateria_obj->setData_fim($this->input->post('editar_data_fim'));
        $bateria_obj->setSemestre($this->input->post('editar_semestre'));
        $bateria_obj->setAno($this->input->post('editar_ano'));
        
        $resultado = $bateria_obj->editar();
        
        if( $resultado == true ) {
            redirect('baterias/editar/' . $this->input->post('editar_id_bateria') . '/sucesso' );
        } else {
            redirect('baterias/editar/' . $this->input->post('editar_id_bateria') . '/erro' );
        }

    }
    
    public function remover($id_bateria){

        $bateria_obj = new Bateria();
        $bateria_obj->setId_bateria($id_bateria);
        $resultado = $bateria_obj->deletar();

        if( $resultado == true ) {
            redirect('baterias/index/sucesso_remover' );
        } else {
            redirect('baterias/index/erro' );
        }
        
    }

    public function search(){

        $this->input->get('some_data', TRUE);
    }

}