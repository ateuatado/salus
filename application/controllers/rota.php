<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rota extends CI_Controller {

	public function index()
	{

		$vetor['teste'] 	= 'Valor 1'; 
		$vetor['outroteste'] 		= 'Valor 2'; 
		$vetor['p'] 		= array('fruta'=>'laranja', 'automovel'=>'fusca'); 



		$this->load->view('rota',$vetor); 
	}

	public function rota2()
	{
		$vetor['teste'] 	= 'estamos em rota 2'; 
		$vetor['outroteste'] 		= 'Valor 2'; 
		$vetor['p'] 		= array('fruta'=>'laranja', 'automovel'=>'fusca'); 
		$this->load->view('rota',$vetor); 
	}


}
