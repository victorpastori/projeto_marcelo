<?php 


class Questionario_model extends CI_Model {

		public function cadastrarQuestionario($questionario){
			$this->db->insert('questionario', $questionario);
		}
		
}