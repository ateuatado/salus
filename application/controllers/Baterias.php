<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Baterias extends CI_Controller {
        
        public function __construct(){
        
            parent::__construct();
            $this->load->model('Bateria');
            $this->load->library('table');
            $this->load->helper('html');
	    }
        
        public function index(){

		    $data['baterias'] = $this->consultar();
            $this->load->view('bateriaTelaInicial', $data);
        }

        public function criar(){
            
            $this->load->view('bateriaTelaCriar');
        }

        public function criar_page() {

            $bateria_obj = new Bateria();
            $bateria_obj->setNome_bateria($this->input->post('criar_nome_bateria'));
            $bateria_obj->setData_inicio($this->input->post('criar_data_inicio'));
            $bateria_obj->setData_fim($this->input->post('criar_data_fim'));
            $bateria_obj->setSemestre($this->input->post('criar_semestre'));
            $bateria_obj->setAno($this->input->post('criar_ano'));
            
            $msg['resultado'] = $bateria_obj->criar();
            $msg['bateria'] = $bateria_obj->consultarPorId($this->db->insert_id());

            if($msg['resultado'] == true) {
                $msg['resultado'] = "sucesso";
                $msg['mensagem'] = "Bateria criada com sucesso.";
                $this->load->view('bateriaTelaVisualizar', $msg);
            } 
            else {
                $msg['resultado'] = "erro";
                $msg['mensagem'] = "Não foi possível criar a bateria.";
                $this->load->view('bateriaTelaVisualizar', $msg);
            }
        }

        public function consultar($id_bateria = null){
            
            if(!empty($id_bateria)){
                $bateria_obj = new Bateria();
            
                $data['bateria'] = $bateria_obj->consultarPorId($id_bateria);
                $this->load->view('bateriaTelaVisualizar', $data);
            }
            else {
                $bateria_obj = new Bateria();
                return $baterias = $bateria_obj->consultar(); 
            }         
        }

        public function editar($id_bateria) {

            $bateria_obj = new Bateria();
            
            $data['bateria'] = $bateria_obj->consultarPorId($id_bateria);
            $this->load->view('bateriaTelaEditar', $data);
        }

        public function editar_page() {
            
            $bateria_obj = new Bateria();
            $bateria_obj->setId_bateria($this->input->post('editar_id_bateria'));
            $bateria_obj->setNome_bateria($this->input->post('editar_nome_bateria'));
            $bateria_obj->setData_inicio($this->input->post('editar_data_inicio'));
            $bateria_obj->setData_fim($this->input->post('editar_data_fim'));
            $bateria_obj->setSemestre($this->input->post('editar_semestre'));
            $bateria_obj->setAno($this->input->post('editar_ano'));
            
            $msg['resultado'] = $bateria_obj->editar();
            $msg['bateria'] = $bateria_obj->consultarPorId($bateria_obj->getId_bateria());

            if($msg['resultado'] == true) {
                $msg['resultado'] = "sucesso";
                $msg['mensagem'] = "Bateria atualizada com sucesso.";
                $this->load->view('bateriaTelaVisualizar', $msg);
            } 
            else {
                $msg['resultado'] = "erro";
                $msg['mensagem'] = "Não foi possível atualizar a bateria.";
                $this->load->view('bateriaTelaVisualizar', $msg);
            }
        }
        
        public function deletar($id_bateria){

            $bateria_obj = new Bateria();
            $bateria_obj->setId_bateria($id_bateria);
            $bateria_obj->deletar();

            $this->index();
        }

        public function search(){

            $this->input->get('some_data', TRUE);
        }
    }
?>