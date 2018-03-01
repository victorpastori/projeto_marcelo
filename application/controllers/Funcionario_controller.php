<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionario_controller extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Questionario_model');
		$this->load->model('Funcionario_model');
		$this->load->library('Funcionario');
		$this->load->library('Questionario');
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function generatePDF($dados){
		$mpdf = new \Mpdf\Mpdf();
	 	$html = $this->load->view('html_to_pdf',$dados,true);
	 	$mpdf->SetHeader('Gerando PDF no CodeIgniter com a biblioteca mPDF');
	 	$mpdf->WriteHTML($html);
	 	$mpdf->Output();
	}

	public function salvarFormulario(){
		$funcionario = new Funcionario();
		$funcionario->nome = $this->input->post('nome');
		$funcionario->matricula = $this->input->post('matricula');
		$funcionario->funcao = $this->input->post('funcao');
		$idfuncionario = $this->Funcionario_model->cadastrarFuncionario($funcionario);
		$questionario = new Questionario();
		$questionario->conSindicalAnual = $this->input->post('conSindicalAnual');
		$questionario->conAssistencialMensal = $this->input->post('conAssistenciaMensal');
		$questionario->conAssociativa = $this->input->post('conAssociativa');
		$questionario->conQualquer = $this->input->post('conQualquer');
		$questionario->data = date("Y-m-d");
		$questionario->funcionario_idfuncionario = $idfuncionario;
		$this->Questionario_model->cadastrarQuestionario($questionario);
		$dados = array('funcionario' => $funcionario, 'questionario' => $questionario );
		$this->generatePDF($dados);
	}

	
}

