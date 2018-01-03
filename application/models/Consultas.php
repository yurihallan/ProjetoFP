<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultas extends CI_Model {
	
	function __construct(){
		parent::__construct();
	}
	
	function atualizar_evento($nome,$local,$contato,$data,$horario,$descricao,$id){
		return $this->db->query("UPDATE evento_prin SET nome_evento='$nome',local='$local',contato='$contato',data='$data',horario='$horario',descricao='$descricao'	 WHERE id=$id ");
	}
	function  getEvento($key){
		return $this->db->query("SELECT * FROM evento_prin WHERE id=$key LIMIT 1 ");
	}
	function  getEventos(){
		return $this->db->query("SELECT id,nome_evento FROM evento_prin");
	}
	function registrar_evento($nome,$local,$contato,$data,$horario,$descricao){
		return $this->db->query("INSERT INTO evento_prin(nome_evento,local,contato,data,horario,descricao) VALUES('$nome','$local','$contato','$data','$horario','$descricao')");
	}
	
	function registrar_material($produto,$quant,$procedencia){
		return $this->db->query("INSERT INTO materiais(produto,quant,procedencia) VALUES('$produto',$quant,'$procedencia')");
	}
	
	function registrar_doacao($doacao,$proced2){
		return $this->db->query("INSERT INTO doacao(doacao,procedencia) VALUES($doacao,'$proced2')");
	}
	
	function cadastrar_idoso($nome,$rg,$cpf,$telefone1,$telefone2,$rua,$numero,$complemento,$sexo,$dependentes,$qts_dep){
		return $this->db->query("INSERT INTO cadastro(nome,rg,cpf,telefone1,telefone2,rua,numero,complemento,sexo,dependentes,qtddependentes)
		VALUES('$nome',$rg,$cpf,$telefone1,$telefone2,'$rua',$numero,'$complemento','$sexo',$dependentes,$qts_dep)");
	}
	
}

