<?php

class Prontuario extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('usuario');
        $this->load->model('paciente');
    }

    private $id_prontuario;
    private $id_paciente;
    private $id_usuario;
    private $adm_visao;
    private $adm_audicao;
    private $adm_linguagem;
    private $adm_cognitivo;
    private $adm_cognitivo_obs;
    private $adm_reflexos_prim;
    private $adm_reflexos_prim_obs;
    private $supino_simetria;
    private $supino_alinhamento;
    private $supino_movimentacao_ativa;
    private $supino_obs;
    private $prono_controle_cervical;
    private $prono_controle_escapular;
    private $prono_simetria;
    private $prono_alinhamento;
    private $prono_movimentacao_ativa;
    private $prono_obs;
    private $rolar;
    private $rolar_obs;
    private $sentado_controle_cervical;
    private $sentado_controle_tronco;
    private $sentando_simetria;
    private $sentado_alinhamento;
    private $sentado_movimentacao_ativa;
    private $sentado_obs;
    private $sentado_troca_postural;
    private $sentado_postura_quadril;
    private $sentado_deformidade_coluna;
    private $sentado_deformidade_quadril;
    private $engatinhar;
    private $engatinhar_obs;
    private $arrastar;
    private $arrastar_obs;
    private $ortostatismo;
    private $ortostatismo_obs;
    private $marcha;
    private $marcha_obs;
    private $observacao;
    private $tonus_base_hipertonia_elastica;
    private $tonus_base_hipertonia_elastica_obs;
    private $tonus_base_hipertonia_elastica_sinais_clinicos;
    private $tonus_base_asworth;
    private $tonus_base_hipertonia_plastica;
    private $tonus_base_hipertonia_plastica_obs;
    private $tonus_base_hipertonia_plastica_sinais_clinicos;
    private $tonus_base_discinesias;
    private $tonus_base_discinesias_obs;
    private $tonus_base_hipotonia;
    private $tonus_base_hipotonia_obs;
    private $tonus_base_incordenacao_movimentos;
    private $tonus_dinamico;
    private $encurtamento_musculares_deformidades;
    private $forca_muscular_mms_gm;
    private $forca_muscular_mms_d;
    private $forca_muscular_mms_e;
    private $forca_muscular_mmii_gm;
    private $forca_muscular_mmii_d;
    private $forca_muscular_mmii_e;
    private $mrp_reacoes_endireitamento_postura_sentada;
    private $mrp_reacoes_endireitamento_bipede;
    private $mrp_reacoes_equilibrio_postura_sentada;
    private $mrp_reacoes_equilibrio_bipede;
    private $mrp_reacoes_protecao_postura_sentada;
    private $mrp_reacoes_protecao_bipede;
    private $atividades_vida_diaria_alimentacao;
    private $atividades_vida_diaria_alimentacao_obs;
    private $atividades_vida_diaria_higiene;
    private $atividades_vida_diaria_higiene_obs;
    private $atividades_vida_diaria_vestuario;
    private $atividades_vida_diaria_vestuario_obs;
    private $atividades_vida_diaria_locomocao;
    private $atividades_vida_diaria_locomocao_obs;
    private $sistema_respiratorio;
    private $objetivos;
    private $condutas;
    private $evolucao_periodo;

    public function get_id_prontuario() {
        return $this->id_prontuario;
    }
    public function set_id_prontuario($id_prontuario) {
        $this->id_prontuario = $id_prontuario;
    }
    public function get_paciente() {
        return $this->id_paciente;
    }
    public function set_paciente($id_paciente) {
        $this->id_paciente = $id_paciente;
    }
    public function get_usuario() {
        return $this->id_usuario;
    }
    public function set_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }
    public function get_adm_visao() {
        return $this->adm_visao;
    }
    public function set_adm_visao($adm_visao) {
        $this->adm_visao = $adm_visao;
    }
    public function get_adm_audicao() {
        return $this->adm_audicao;
    }
    public function set_adm_audicao($adm_audicao) {
        $this->adm_audicao = $adm_audicao;
    }
    public function get_adm_linguagem() {
        return $this->adm_linguagem;
    }
    public function set_adm_linguagem($adm_linguagem) {
        $this->adm_linguagem = $adm_linguagem;
    }
    public function get_adm_cognitivo() {
        return $this->adm_cognitivo;
    }
    public function set_adm_cognitivo($adm_cognitivo) {
        $this->adm_cognitivo = $adm_cognitivo;
    }
    public function get_adm_cognitivo_obs() {
        return $this->adm_cognitivo_obs;
    }
    public function set_adm_cognitivo_obs($adm_cognitivo_obs) {
        $this->adm_cognitivo_obs = $adm_cognitivo_obs;
    }
    public function get_adm_reflexos_prim() {
        return $this->adm_reflexos_prim;
    }
    public function set_adm_reflexos_prim($adm_reflexos_prim) {
        $this->adm_reflexos_prim = $adm_reflexos_prim;
    }
    public function get_adm_reflexos_prim_obs() {
        return $this->adm_reflexos_prim_obs;
    }
    public function set_adm_reflexos_prim_obs($adm_reflexos_prim_obs) {
        $this->adm_reflexos_prim_obs = $adm_reflexos_prim_obs;
    }
    public function get_supino_simetria() {
        return $this->supino_simetria;
    }
    public function set_supino_simetria($supino_simetria) {
        $this->supino_simetria = $supino_simetria;
    }
    public function get_supino_alinhamento() {
        return $this->supino_alinhamento;
    }
    public function set_supino_alinhamento($supino_alinhamento) {
        $this->supino_alinhamento = $supino_alinhamento;
    }
    public function get_supino_movimentacao_ativa() {
        return $this->supino_movimentacao_ativa;
    }
    public function set_supino_movimentacao_ativa($supino_movimentacao_ativa) {
        $this->supino_movimentacao_ativa = $supino_movimentacao_ativa;
    }
    public function get_supino_obs() {
        return $this->supino_obs;
    }
    public function set_supino_obs($supino_obs) {
        $this->supino_obs = $supino_obs;
    }
    public function get_prono_controle_cervical() {
        return $this->prono_controle_cervical;
    }
    public function set_prono_controle_cervical($prono_controle_cervical) {
        $this->prono_controle_cervical = $prono_controle_cervical;
    }
    public function get_prono_controle_escapular() {
        return $this->prono_controle_escapular;
    }
    public function set_prono_controle_escapular($prono_controle_escapular) {
        $this->prono_controle_escapular = $prono_controle_escapular;
    }
    public function get_prono_simetria() {
        return $this->prono_simetria;
    }
    public function set_prono_simetria($prono_simetria) {
        $this->prono_simetria = $prono_simetria;
    }
    public function get_prono_alinhamento() {
        return $this->prono_alinhamento;
    }
    public function set_prono_alinhamento($prono_alinhamento) {
        $this->prono_alinhamento = $prono_alinhamento;
    }
    public function get_prono_movimentacao_ativa() {
        return $this->prono_movimentacao_ativa;
    }
    public function set_prono_movimentacao_ativa($prono_movimentacao_ativa) {
        $this->prono_movimentacao_ativa = $prono_movimentacao_ativa;
    }
    public function get_prono_obs() {
        return $this->prono_obs;
    }
    public function set_prono_obs($prono_obs) {
        $this->prono_obs = $prono_obs;
    }
    public function get_rolar() {
        return $this->rolar;
    }
    public function set_rolar($rolar) {
        $this->rolar = $rolar;
    }
    public function get_rolar_obs() {
        return $this->rolar_obs;
    }
    public function set_rolar_obs($rolar_obs) {
        $this->rolar_obs = $rolar_obs;
    }
    public function get_sentado_controle_cervical() {
        return $this->sentado_controle_cervical;
    }
    public function set_sentado_controle_cervical($sentado_controle_cervical) {
        $this->sentado_controle_cervical = $sentado_controle_cervical;
    }
    public function get_sentado_controle_tronco() {
        return $this->sentado_controle_tronco;
    }
    public function set_sentado_controle_tronco($sentado_controle_tronco) {
        $this->sentado_controle_tronco = $sentado_controle_tronco;
    }
    public function get_sentando_simetria() {
        return $this->sentando_simetria;
    }
    public function set_sentando_simetria($sentando_simetria) {
        $this->sentando_simetria = $sentando_simetria;
    }
    public function get_sentado_alinhamento() {
        return $this->sentado_alinhamento;
    }
    public function set_sentado_alinhamento($sentado_alinhamento) {
        $this->sentado_alinhamento = $sentado_alinhamento;
    }
    public function get_sentado_movimentacao_ativa() {
        return $this->sentado_movimentacao_ativa;
    }
    public function set_sentado_movimentacao_ativa($sentado_movimentacao_ativa) {
        $this->sentado_movimentacao_ativa = $sentado_movimentacao_ativa;
    }
    public function get_sentado_obs() {
        return $this->sentado_obs;
    }
    public function set_sentado_obs($sentado_obs) {
        $this->sentado_obs = $sentado_obs;
    }
    public function get_sentado_troca_postural() {
        return $this->sentado_troca_postural;
    }
    public function set_sentado_troca_postural($sentado_troca_postural) {
        $this->sentado_troca_postural = $sentado_troca_postural;
    }
    public function get_sentado_postura_quadril() {
        return $this->sentado_postura_quadril;
    }
    public function set_sentado_postura_quadril($sentado_postura_quadril) {
        $this->sentado_postura_quadril = $sentado_postura_quadril;
    }
    public function get_sentado_deformidade_coluna() {
        return $this->sentado_deformidade_coluna;
    }
    public function set_sentado_deformidade_coluna($sentado_deformidade_coluna) {
        $this->sentado_deformidade_coluna = $sentado_deformidade_coluna;
    }
    public function get_sentado_deformidade_quadril() {
        return $this->sentado_deformidade_quadril;
    }
    public function set_sentado_deformidade_quadril($sentado_deformidade_quadril) {
        $this->sentado_deformidade_quadril = $sentado_deformidade_quadril;
    }
    public function get_engatinhar() {
        return $this->engatinhar;
    }
    public function set_engatinhar($engatinhar) {
        $this->engatinhar = $engatinhar;
    }
    public function get_engatinhar_obs() {
        return $this->engatinhar_obs;
    }
    public function set_engatinhar_obs($engatinhar_obs) {
        $this->engatinhar_obs = $engatinhar_obs;
    }
    public function get_arrastar() {
        return $this->arrastar;
    }
    public function set_arrastar($arrastar) {
        $this->arrastar = $arrastar;
    }
    public function get_arrastar_obs() {
        return $this->arrastar_obs;
    }
    public function set_arrastar_obs($arrastar_obs) {
        $this->arrastar_obs = $arrastar_obs;
    }
    public function get_ortostatismo() {
        return $this->ortostatismo;
    }
    public function set_ortostatismo($ortostatismo) {
        $this->ortostatismo = $ortostatismo;
    }
    public function get_ortostatismo_obs() {
        return $this->ortostatismo_obs;
    }
    public function set_ortostatismo_obs($ortostatismo_obs) {
        $this->ortostatismo_obs = $ortostatismo_obs;
    }
    public function get_marcha() {
        return $this->marcha;
    }
    public function set_marcha($marcha) {
        $this->marcha = $marcha;
    }
    public function get_marcha_obs() {
        return $this->marcha_obs;
    }
    public function set_marcha_obs($marcha_obs) {
        $this->marcha_obs = $marcha_obs;
    }
    public function get_observacao() {
        return $this->observacao;
    }
    public function set_observacao($observacao) {
        $this->observacao = $observacao;
    }
    public function get_tonus_base_hipertonia_elastica() {
        return $this->tonus_base_hipertonia_elastica;
    }
    public function set_tonus_base_hipertonia_elastica($tonus_base_hipertonia_elastica) {
        $this->tonus_base_hipertonia_elastica = $tonus_base_hipertonia_elastica;
    }
    public function get_tonus_base_hipertonia_elastica_obs() {
        return $this->tonus_base_hipertonia_elastica_obs;
    }
    public function set_tonus_base_hipertonia_elastica_obs($tonus_base_hipertonia_elastica_obs) {
        $this->tonus_base_hipertonia_elastica_obs = $tonus_base_hipertonia_elastica_obs;
    }
    public function get_tonus_base_hipertonia_elastica_sinais_clinicos() {
        return $this->tonus_base_hipertonia_elastica_sinais_clinicos;
    }
    public function set_tonus_base_hipertonia_elastica_sinais_clinicos($tonus_base_hipertonia_elastica_sinais_clinicos) {
        $this->tonus_base_hipertonia_elastica_sinais_clinicos = $tonus_base_hipertonia_elastica_sinais_clinicos;
    }
    public function get_tonus_base_asworth() {
        return $this->tonus_base_asworth;
    }
    public function set_tonus_base_asworth($tonus_base_asworth) {
        $this->tonus_base_asworth = $tonus_base_asworth;
    }
    public function get_tonus_base_hipertonia_plastica() {
        return $this->tonus_base_hipertonia_plastica;
    }
    public function set_tonus_base_hipertonia_plastica($tonus_base_hipertonia_plastica) {
        $this->tonus_base_hipertonia_plastica = $tonus_base_hipertonia_plastica;
    }
    public function get_tonus_base_hipertonia_plastica_obs() {
        return $this->tonus_base_hipertonia_plastica_obs;
    }
    public function set_tonus_base_hipertonia_plastica_obs($tonus_base_hipertonia_plastica_obs) {
        $this->tonus_base_hipertonia_plastica_obs = $tonus_base_hipertonia_plastica_obs;
    }
    public function get_tonus_base_hipertonia_plastica_sinais_clinicos() {
        return $this->tonus_base_hipertonia_plastica_sinais_clinicos;
    }
    public function set_tonus_base_hipertonia_plastica_sinais_clinicos($tonus_base_hipertonia_plastica_sinais_clinicos) {
        $this->tonus_base_hipertonia_plastica_sinais_clinicos = $tonus_base_hipertonia_plastica_sinais_clinicos;
    }
    public function get_tonus_base_discinesias() {
        return $this->tonus_base_discinesias;
    }
    public function set_tonus_base_discinesias($tonus_base_discinesias) {
        $this->tonus_base_discinesias = $tonus_base_discinesias;
    }
    public function get_tonus_base_discinesias_obs() {
        return $this->tonus_base_discinesias_obs;
    }
    public function set_tonus_base_discinesias_obs($tonus_base_discinesias_obs) {
        $this->tonus_base_discinesias_obs = $tonus_base_discinesias_obs;
    }
    public function get_tonus_base_hipotonia() {
        return $this->tonus_base_hipotonia;
    }
    public function set_tonus_base_hipotonia($tonus_base_hipotonia) {
        $this->tonus_base_hipotonia = $tonus_base_hipotonia;
    }
    public function get_tonus_base_hipotonia_obs() {
        return $this->tonus_base_hipotonia_obs;
    }
    public function set_tonus_base_hipotonia_obs($tonus_base_hipotonia_obs) {
        $this->tonus_base_hipotonia_obs = $tonus_base_hipotonia_obs;
    }
    public function get_tonus_base_incordenacao_movimentos() {
        return $this->tonus_base_incordenacao_movimentos;
    }
    public function set_tonus_base_incordenacao_movimentos($tonus_base_incordenacao_movimentos) {
        $this->tonus_base_incordenacao_movimentos = $tonus_base_incordenacao_movimentos;
    }
    public function get_tonus_dinamico() {
        return $this->tonus_dinamico;
    }
    public function set_tonus_dinamico($tonus_dinamico) {
        $this->tonus_dinamico = $tonus_dinamico;
    }
    public function get_encurtamento_musculares_deformidades() {
        return $this->encurtamento_musculares_deformidades;
    }
    public function set_encurtamento_musculares_deformidades($encurtamento_musculares_deformidades) {
        $this->encurtamento_musculares_deformidades = $encurtamento_musculares_deformidades;
    }
    public function get_forca_muscular_mms_gm() {
        return $this->forca_muscular_mms_gm;
    }
    public function set_forca_muscular_mms_gm($forca_muscular_mms_gm) {
        $this->forca_muscular_mms_gm = $forca_muscular_mms_gm;
    }
    public function get_forca_muscular_mms_d() {
        return $this->forca_muscular_mms_d;
    }
    public function set_forca_muscular_mms_d($forca_muscular_mms_d) {
        $this->forca_muscular_mms_d = $forca_muscular_mms_d;
    }
    public function get_forca_muscular_mms_e() {
        return $this->forca_muscular_mms_e;
    }
    public function set_forca_muscular_mms_e($forca_muscular_mms_e) {
        $this->forca_muscular_mms_e = $forca_muscular_mms_e;
    }
    public function get_forca_muscular_mmii_gm() {
        return $this->forca_muscular_mmii_gm;
    }
    public function set_forca_muscular_mmii_gm($forca_muscular_mmii_gm) {
        $this->forca_muscular_mmii_gm = $forca_muscular_mmii_gm;
    }
    public function get_forca_muscular_mmii_d() {
        return $this->forca_muscular_mmii_d;
    }
    public function set_forca_muscular_mmii_d($forca_muscular_mmii_d) {
        $this->forca_muscular_mmii_d = $forca_muscular_mmii_d;
    }
    public function get_forca_muscular_mmii_e() {
        return $this->forca_muscular_mmii_e;
    }
    public function set_forca_muscular_mmii_e($forca_muscular_mmii_e) {
        $this->forca_muscular_mmii_e = $forca_muscular_mmii_e;
    }
    public function get_mrp_reacoes_endireitamento_postura_sentada() {
        return $this->mrp_reacoes_endireitamento_postura_sentada;
    }
    public function set_mrp_reacoes_endireitamento_postura_sentada($mrp_reacoes_endireitamento_postura_sentada) {
        $this->mrp_reacoes_endireitamento_postura_sentada = $mrp_reacoes_endireitamento_postura_sentada;
    }
    public function get_mrp_reacoes_endireitamento_bipede() {
        return $this->mrp_reacoes_endireitamento_bipede;
    }
    public function set_mrp_reacoes_endireitamento_bipede($mrp_reacoes_endireitamento_bipede) {
        $this->mrp_reacoes_endireitamento_bipede = $mrp_reacoes_endireitamento_bipede;
    }
    public function get_mrp_reacoes_equilibrio_postura_sentada() {
        return $this->mrp_reacoes_equilibrio_postura_sentada;
    }
    public function set_mrp_reacoes_equilibrio_postura_sentada($mrp_reacoes_equilibrio_postura_sentada) {
        $this->mrp_reacoes_equilibrio_postura_sentada = $mrp_reacoes_equilibrio_postura_sentada;
    }
    public function get_mrp_reacoes_equilibrio_bipede() {
        return $this->mrp_reacoes_equilibrio_bipede;
    }
    public function set_mrp_reacoes_equilibrio_bipede($mrp_reacoes_equilibrio_bipede) {
        $this->mrp_reacoes_equilibrio_bipede = $mrp_reacoes_equilibrio_bipede;
    }
    public function get_mrp_reacoes_protecao_postura_sentada() {
        return $this->mrp_reacoes_protecao_postura_sentada;
    }
    public function set_mrp_reacoes_protecao_postura_sentada($mrp_reacoes_protecao_postura_sentada) {
        $this->mrp_reacoes_protecao_postura_sentada = $mrp_reacoes_protecao_postura_sentada;
    }
    public function get_mrp_reacoes_protecao_bipede() {
        return $this->mrp_reacoes_protecao_bipede;
    }
    public function set_mrp_reacoes_protecao_bipede($mrp_reacoes_protecao_bipede) {
        $this->mrp_reacoes_protecao_bipede = $mrp_reacoes_protecao_bipede;
    }
    public function get_atividades_vida_diaria_alimentacao() {
        return $this->atividades_vida_diaria_alimentacao;
    }
    public function set_atividades_vida_diaria_alimentacao($atividades_vida_diaria_alimentacao) {
        $this->atividades_vida_diaria_alimentacao = $atividades_vida_diaria_alimentacao;
    }
    public function get_atividades_vida_diaria_alimentacao_obs() {
        return $this->atividades_vida_diaria_alimentacao_obs;
    }
    public function set_atividades_vida_diaria_alimentacao_obs($atividades_vida_diaria_alimentacao_obs) {
        $this->atividades_vida_diaria_alimentacao_obs = $atividades_vida_diaria_alimentacao_obs;
    }
    public function get_atividades_vida_diaria_higiene() {
        return $this->atividades_vida_diaria_higiene;
    }
    public function set_atividades_vida_diaria_higiene($atividades_vida_diaria_higiene) {
        $this->atividades_vida_diaria_higiene = $atividades_vida_diaria_higiene;
    }
    public function get_atividades_vida_diaria_higiene_obs() {
        return $this->atividades_vida_diaria_higiene_obs;
    }
    public function set_atividades_vida_diaria_higiene_obs($atividades_vida_diaria_higiene_obs) {
        $this->atividades_vida_diaria_higiene_obs = $atividades_vida_diaria_higiene_obs;
    }
    public function get_atividades_vida_diaria_vestuario() {
        return $this->atividades_vida_diaria_vestuario;
    }
    public function set_atividades_vida_diaria_vestuario($atividades_vida_diaria_vestuario) {
        $this->atividades_vida_diaria_vestuario = $atividades_vida_diaria_vestuario;
    }
    public function get_atividades_vida_diaria_vestuario_obs() {
        return $this->atividades_vida_diaria_vestuario_obs;
    }
    public function set_atividades_vida_diaria_vestuario_obs($atividades_vida_diaria_vestuario_obs) {
        $this->atividades_vida_diaria_vestuario_obs = $atividades_vida_diaria_vestuario_obs;
    }
    public function get_atividades_vida_diaria_locomocao() {
        return $this->atividades_vida_diaria_locomocao;
    }
    public function set_atividades_vida_diaria_locomocao($atividades_vida_diaria_locomocao) {
        $this->atividades_vida_diaria_locomocao = $atividades_vida_diaria_locomocao;
    }
    public function get_atividades_vida_diaria_locomocao_obs() {
        return $this->atividades_vida_diaria_locomocao_obs;
    }
    public function set_atividades_vida_diaria_locomocao_obs($atividades_vida_diaria_locomocao_obs) {
        $this->atividades_vida_diaria_locomocao_obs = $atividades_vida_diaria_locomocao_obs;
    }
    public function get_sistema_respiratorio() {
        return $this->sistema_respiratorio;
    }
    public function set_sistema_respiratorio($sistema_respiratorio) {
        $this->sistema_respiratorio = $sistema_respiratorio;
    }
    public function get_objetivos() {
        return $this->objetivos;
    }
    public function set_objetivos($objetivos) {
        $this->objetivos = $objetivos;
    }
    public function get_condutas() {
        return $this->condutas;
    }
    public function set_condutas($condutas) {
        $this->condutas = $condutas;
    }
    public function get_evolucao_periodo() {
        return $this->evolucao_periodo;
    }
    public function set_evolucao_periodo($evolucao_periodo) 
    {
        $this->evolucao_periodo = $evolucao_periodo;
    }

    public function consultar($id_prontuario = null, Paciente $paciente = null, Usuario $usuario = null)
    {
        if( $id_prontuario != null ) {
            $resultado = $this->db->get_where( 'prontuario', array( 'id_prontuario' => $id_prontuario) )->custom_result_object( 'Prontuario' );
        } else if ( $paciente != null ) {
            $resultado = $this->db->get_where( 'prontuario', array( 'id_paciente' => $paciente->get_id_paciente() ) )->custom_result_object( 'Prontuario' );
        } else if ( $usuario != null ) {
            $resultado = $this->db->get_where( 'prontuario', array( 'id_usuario' => $usuario->get_id_usuario() ) )->custom_result_object( 'Prontuario' );
        } else {
            $resultado = array();
        }
         
        if( !empty( $resultado ) ) {
            for ($i=0; $i < count( $resultado ); $i++) {

                if($paciente == null) {

                    $consultarPaciente = $this->paciente->consultarPaciente( $resultado[$i]->get_paciente() );
                    $resultado[$i]->set_paciente($consultarPaciente);

                } else {
                    $resultado[$i]->set_paciente($paciente);
                }

                if($usuario == null) {

                    $consultarUsuario = $this->usuario->consultarUsuario( $resultado[$i]->get_usuario() );
                    $resultado[$i]->set_usuario($consultarUsuario);

                } else {
                    $resultado[$i]->set_usuario($usuario);
                }

            }
            
        }
        return ( count($resultado) == 1 ) ? $resultado[0] : $resultado;
    }

    public function editar()
    {
        
        $fields = $this->input->post();

        $data = array();

        foreach($fields as $field => $value) {
            if( method_exists('Prontuario', 'set_' . $field) && $field != 'id_prontuario' ) {
                $data[$field] = $value;
            }
        }

        $this->db->where('id_prontuario', $fields['id_prontuario']);
        return $this->db->update('prontuario', $data);

    }

    public function pegarOpcoesParaProntuario($campo = null) 
    {

        if( $campo != null ) {
            $resultado = $this->db->get_where('opcoes', array('campo' => $campo))->result_array();
            return $resultado;
        }
        return array();

    }

    public function pegarOpcaoUnica($id_opcoes) 
    {
        $resultado = $this->db->get_where('opcoes', array('id_opcoes' => $id_opcoes))->result_array();
        return ( !empty($resultado) ) ? $resultado[0]['opcao'] : '';
    }

}