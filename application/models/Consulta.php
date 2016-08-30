<?php
class  Consulta extends CI_Model
{
    private $id_consulta;
    private $id_usuario;
    private $id_paciente;
    private $data;
    private $hora;
    private $comparecimento_paciente;
    private $comparecimento_estagiario;
    private $observacao_paciente;
    private $observacao_estagiario;
    
    public function getId_consulta(){ return $this->id_consulta; }
    public function setId_consulta($id_consulta){ $this->id_consulta = $id_consulta; }

    public function getId_usuario(){ return $this->getId_usuario; }
    public function setId_usuario($id_usuario){ $this->getId_usuario = $id_usuario; }

    public function getId_paciente(){ return $this->getId_paciente; }
    public function setId_paciente($id_paciente){ $this->getId_paciente = $id_paciente; }

    public function getData(){ return $this->getData; }
    public function setData($data){ $this->data = $data; }

    public function getHora(){ return $this->getHora; }
    public function setHora($hora){ $this->hora = $hora; }

    public function getComparecimento_paciente(){ return $this->getComparecimento_paciente; }
    public function setComparecimento_paciente($comparecimento_paciente){ $this->comparecimento_paciente = $comparecimento_paciente; }

    public function getComparecimento_estagiario(){ return $this->getComparecimento_estagiario; }
    public function setComparecimento_estagiario($comparecimento_estagiario){ $this->getComparecimento_estagiario = $comparecimento_estagiario; }

    public function getObservacao_paciente(){ return $this->getObservacao_paciente; }
    public function setObservacao_paciente($observacao_paciente){ $this->observacao_paciente = $observacao_paciente; }

    public function getObservacao_estagiario(){ return $this->getObservacao_estagiario; }
    public function setObservacao_estagiario($observacao_estagiario){ $this->observacao_estagiario = $observacao_estagiario; }


    public function criar(){
        $query = "INSERT INTO consulta VALUES ($this->id_consulta)"; 
    }

    public function consultar(){
        $query = $this->db->get('consulta')->custom_result_object('Consulta');
        return $query;
    }

    public function consultarAtivos(){
        $query = $this->db->query("SELECT * FROM usuarios WHERE login_desativado = 'n'")->result_array();
        return $query;
    }
    
    public function editar(){}

    public function deletar(){}
    
}