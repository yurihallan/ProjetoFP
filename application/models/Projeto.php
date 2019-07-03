<?php

	class Projeto extends CI_Model{
    function __construct(){
		  parent::__construct();
    }
    
	
	
    function getUsuario($nome,$senha){
		return  $this->db->query("SELECT * FROM aluno where nome = '$nome' &&  senha = '$senha'  limit 1");
		
	}
	
	 function Usuario($matricula,$senha, $usuario){
		return  $this->db->query("INSERT INTO usuario(usuario,matricula,senha) VALUES('$usuario','$matricula','$senha') ");
	
	}
	function getBuscar(){
		$this->db->get("aluno")->result_array();
		
		
		// $this->db->query("SELECT * FROM aluno ");
		// $query = $this->db->get()->result_array();
		// return $query->result();
	}
	function cadastrar_NovoProfessor($nome,$data_nascimento){
		return $this->db->query("INSERT INTO `professor`( `nome`,`data_nascimento`,`id_professor`) 
											VALUES ('$nome','$data_nascimento',4) ");
	}

	function cadastrar_NovoCurso($nome){
		return $this->db->query("INSERT INTO `curso`( `nome`) 
											VALUES ('$nome') ");
	}

	function AtualizacaoAluno($Nome,$data_nascimento,$cep,$Logradouro,$numero,$Bairro,$Cidade,$UF,$id_aluno){
		return $this->db->query("UPDATE `aluno` set  `nome` = '$Nome', `data_nascimento` = '$data_nascimento', `cep` = '$cep', `logradouro` = '$Logradouro', `numero` = '$numero',  `bairro` = '$Bairro', `cidade` = '$Cidade', `estado` = '$UF', `id_curso` = 2 where `id_aluno` = $id_aluno");
	}

	function AtualizacaoCurso($Nome,$id_curso){
		return $this->db->query("UPDATE `aluno` set  `nome` = '$Nome' where `id_curso` = $id_curso");
	}

	function AtualizacaoProfessor($Nome,$data_nascimento,$id_professor){
		return $this->db->query("UPDATE `aluno` set  `nome` = '$Nome', `data_nascimento` = '$data_nascimento' where `id_aluno` = $id_professor");
	}


	// function cadastrar_NovoAluno($Nome,$data_nascimento,$cep,$Logradouro,$numero,$Bairro,$Cidade,$UF){
	// 	return $this->db->query("INSERT INTO `aluno`( `nome`, `data_nascimento`, `cep`, `logradouro`, `numero`, `bairro`, `cidade`, `estado`, `id_curso`) 
	// 										VALUES ('$Nome','$data_nascimento','$cep','$Logradouro','$numero','$Bairro','$Cidade','$UF',2) ");
	// }
 }






?>