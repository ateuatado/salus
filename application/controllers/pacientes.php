<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pacientes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model( 'paciente' );
		$this->load->model( 'prontuario' );
	}
	
	public function index()
	{
		$data['pacientes'] = $this->paciente->consultarPaciente();
		$this->load->view( 'paciente-consultar', $data ); 
	}

	public function consultar( $id_paciente = null, $mensagem = null) 
	{

		$paciente = $this->paciente->consultarPaciente( $id_paciente );
		
		if( $id_paciente != null ) {

			if( !empty($paciente) ) {

				$data['paciente'] = $paciente;
				$data['prontuarios'] = $this->prontuario->consultar( null, $paciente );
				$data['mensagem'] = $mensagem;

				$this->load->view( 'paciente-consultar-unico', $data );

			} else {

				show_404();

			}
		} else {

			$data['pacientes'] = $this->paciente->consultarPaciente();
			$this->load->view( 'pacientes', $data );

		}

	}

}
