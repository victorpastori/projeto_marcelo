<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('index');
	}

	public function generatePDF(){
		$mpdf = new \Mpdf\Mpdf();
	 	$html = $this->load->view('html_to_pdf',[],true);
	 	$mpdf->SetHeader('Gerando PDF no CodeIgniter com a biblioteca mPDF');
	 	$mpdf->WriteHTML($html);
	 	$mpdf->Output();
	}

	
}

