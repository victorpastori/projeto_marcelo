<?php 


class Funcionario_model extends CI_Model {

		public function cadastrarFuncionario($funcionario){
			$this->db->insert('funcionario', $funcionario);
			return $this->db->insert_id();
		}
}