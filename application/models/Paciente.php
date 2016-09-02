<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paciente extends CI_Model {

    public function __construct(){
        parent::__construct();
    }

    private $id_paciente;
    private $nome_completo;
    private $data_nascimento;
    private $sexo;
    private $hipotese_diagnostico;
    private $cid;
    private $nome_responsavel;
    private $parentesco_resp;
    private $documento_resp;
    private $tipo_doc_resp;
    private $tipo_doc_resp_obs;
    private $endereco;
    private $telefone;
    private $celular;
    private $queixa_principal;
    private $deficit_funcional;
    private $medico_resp;
    private $hospital_procedencia;
    private $tratamento_previo;
    private $adnpm;
    private $adnpm_motivo;
    private $sindrome_de_down;
    private $sindrome_de_down_obs;
    private $encefalopatia;
    private $class_topografia;
    private $class_clinica;
    private $nivel;
    private $gmfcs_nivel;
    private $historia_molestia;
    private $historia_molestia_obs;
    private $paciente_ativo;
    private $patol_disturbio_assoc;
    private $medicamento_uso;
    private $exames_complementares;
    private $orteses_proteses_adaptacoes;
    private $caracteristicas_sindromicas;

    public function get_id_paciente() {
        return $this->id_paciente;
    }
    public function set_id_paciente($id_paciente) {
        $this->id_paciente = $id_paciente;
    }
    public function get_nome_completo() {
        return $this->nome_completo;
    }
    public function set_nome_completo($nome_completo) {
        $this->nome_completo = $nome_completo;
    }
    public function get_data_nascimento() {
        $date_ob = new DateTime($this->data_nascimento);
        return $date_ob->format("d-m-Y");
    }
    public function set_data_nascimento($data_nascimento) {
        $this->data_nascimento = $data_nascimento;
    }
    public function get_sexo() {
        return $this->sexo;
    }
    public function set_sexo($sexo) {
        $this->sexo = $sexo;
    }
    public function get_hipotese_diagnostico() {
        return $this->hipotese_diagnostico;
    }
    public function set_hipotese_diagnostico($hipotese_diagnostico) {
        $this->hipotese_diagnostico = $hipotese_diagnostico;
    }
    public function get_cid() {
        return $this->cid;
    }
    public function set_cid($cid) {
        $this->cid = $cid;
    }
    public function get_nome_responsavel() {
        return $this->nome_responsavel;
    }
    public function set_nome_responsavel($nome_responsavel) {
        $this->nome_responsavel = $nome_responsavel;
    }
    public function get_parentesco_resp() {
        return $this->parentesco_resp;
    }
    public function set_parentesco_resp($parentesco_resp) {
        $this->parentesco_resp = $parentesco_resp;
    }
    public function get_documento_resp() {
        return $this->documento_resp;
    }
    public function set_documento_resp($documento_resp) {
        $this->documento_resp = $documento_resp;
    }
    public function get_tipo_doc_resp() {
        return $this->tipo_doc_resp;
    }
    public function set_tipo_doc_resp($tipo_doc_resp) {
        $this->tipo_doc_resp = $tipo_doc_resp;
    }
    public function get_tipo_doc_resp_obs() {
        return $this->tipo_doc_resp_obs;
    }
    public function set_tipo_doc_resp_obs($tipo_doc_resp_obs) {
        $this->tipo_doc_resp_obs = $tipo_doc_resp_obs;
    }
    public function get_endereco() {
        return $this->endereco;
    }
    public function set_endereco($endereco) {
        $this->endereco = $endereco;
    }
    public function get_telefone() {
        return $this->telefone;
    }
    public function set_telefone($telefone) {
        $this->telefone = $telefone;
    }
    public function get_celular() {
        return $this->celular;
    }
    public function set_celular($celular) {
        $this->celular = $celular;
    }
    public function get_queixa_principal() {
        return $this->queixa_principal;
    }
    public function set_queixa_principal($queixa_principal) {
        $this->queixa_principal = $queixa_principal;
    }
    public function get_deficit_funcional() {
        return $this->deficit_funcional;
    }
    public function set_deficit_funcional($deficit_funcional) {
        $this->deficit_funcional = $deficit_funcional;
    }
    public function get_medico_resp() {
        return $this->medico_resp;
    }
    public function set_medico_resp($medico_resp) {
        $this->medico_resp = $medico_resp;
    }
    public function get_hospital_procedencia() {
        return $this->hospital_procedencia;
    }
    public function set_hospital_procedencia($hospital_procedencia) {
        $this->hospital_procedencia = $hospital_procedencia;
    }
    public function get_tratamento_previo() {
        return $this->tratamento_previo;
    }
    public function set_tratamento_previo($tratamento_previo) {
        $this->tratamento_previo = $tratamento_previo;
    }
    public function get_adnpm() {
        return $this->adnpm;
    }
    public function set_adnpm($adnpm) {
        $this->adnpm = $adnpm;
    }
    public function get_adnpm_motivo() {
        return $this->adnpm_motivo;
    }
    public function set_adnpm_motivo($adnpm_motivo) {
        $this->adnpm_motivo = $adnpm_motivo;
    }
    public function get_sindrome_de_down() {
        return $this->sindrome_de_down;
    }
    public function set_sindrome_de_down($sindrome_de_down) {
        $this->sindrome_de_down = $sindrome_de_down;
    }
    public function get_sindrome_de_down_obs() {
        return $this->sindrome_de_down_obs;
    }
    public function set_sindrome_de_down_obs($sindrome_de_down_obs) {
        $this->sindrome_de_down_obs = $sindrome_de_down_obs;
    }
    public function get_encefalopatia() {
        return $this->encefalopatia;
    }
    public function set_encefalopatia($encefalopatia) {
        $this->encefalopatia = $encefalopatia;
    }
    public function get_class_topografia() {
        return $this->class_topografia;
    }
    public function set_class_topografia($class_topografia) {
        $this->class_topografia = $class_topografia;
    }
    public function get_class_clinica() {
        return $this->class_clinica;
    }
    public function set_class_clinica($class_clinica) {
        $this->class_clinica = $class_clinica;
    }
    public function get_nivel() {
        return $this->nivel;
    }
    public function set_nivel($nivel) {
        $this->nivel = $nivel;
    }
    public function get_gmfcs_nivel() {
        return $this->gmfcs_nivel;
    }
    public function set_gmfcs_nivel($gmfcs_nivel) {
        $this->gmfcs_nivel = $gmfcs_nivel;
    }
    public function get_historia_molestia() {
        return $this->historia_molestia;
    }
    public function set_historia_molestia($historia_molestia) {
        $this->historia_molestia = $historia_molestia;
    }
    public function get_historia_molestia_obs() {
        return $this->historia_molestia_obs;
    }
    public function set_historia_molestia_obs($historia_molestia_obs) {
        $this->historia_molestia_obs = $historia_molestia_obs;
    }
    public function get_paciente_ativo() {
        return $this->paciente_ativo;
    }
    public function set_paciente_ativo($paciente_ativo) {
        $this->paciente_ativo = $paciente_ativo;
    }
    public function get_patol_disturbio_assoc() {
        return $this->patol_disturbio_assoc;
    }
    public function set_patol_disturbio_assoc($patol_disturbio_assoc) {
        $this->patol_disturbio_assoc = $patol_disturbio_assoc;
    }
    public function get_medicamento_uso() {
        return $this->medicamento_uso;
    }
    public function set_medicamento_uso($medicamento_uso) {
        $this->medicamento_uso = $medicamento_uso;
    }
    public function get_exames_complementares() {
        return $this->exames_complementares;
    }
    public function set_exames_complementares($exames_complementares) {
        $this->exames_complementares = $exames_complementares;
    }
    public function get_orteses_proteses_adaptacoes() {
        return $this->orteses_proteses_adaptacoes;
    }
    public function set_orteses_proteses_adaptacoes($orteses_proteses_adaptacoes) {
        $this->orteses_proteses_adaptacoes = $orteses_proteses_adaptacoes;
    }
    public function get_caracteristicas_sindromicas() {
        return $this->caracteristicas_sindromicas;
    }
    public function set_caracteristicas_sindromicas($caracteristicas_sindromicas) {
        $this->caracteristicas_sindromicas = $caracteristicas_sindromicas;
    }

    public function consultarPaciente($id_paciente = null)
    {   
        if( $id_paciente == null ) {
            $resultado = $this->db->get_where('paciente', array('paciente_ativo' => 1))->custom_result_object('Paciente');
        } else {
            $resultado = $this->db->get_where('paciente', array('id_paciente' => $id_paciente))->custom_result_object('Paciente');
        }
        return ( !empty($resultado) && $id_paciente != null ) ? $resultado[0] : $resultado;
    }

    

}
