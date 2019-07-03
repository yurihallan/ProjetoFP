<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form', 'functions', 'form_validation');
		$this->load->model('projeto');
		$this->load->database();
		$this->load->helper('url','form', 'file');
		
	}

	

	public function login(){
		$this->load->view('v_login');
	} 
	
	public function logar(){
	
		
		if(!isset($_SESSION)){ 
			session_start(); 
		} 
	
		$this->load->library('form_validation');
	
		$dados['msgAlert'] = "";
		$this->form_validation->set_rules('nome','nome', 'required');
		$this->form_validation->set_rules('senha','Senha', 'required');
		
				
			$_SESSION['logado'] = null;
		if($this->form_validation->run() == TRUE){
					
				
				$nome  = $_POST['nome'];
				$senha = $_POST['senha'];
				

		
				    
				$res = !$this->projeto->getUsuario($nome,$senha) ? null :  $this->projeto->getUsuario($nome,$senha);
				// $dados['msgAlert'] = $res->row() ? $res->row() : null;
				if ($res->num_rows() > 0){
					 $rowtotal = $res->num_rows();
					   foreach ($res->result() as $row)
					   {
						$rowtotal = strval($rowtotal);
						   
						  if($row->nome == $nome){
							  $_SESSION['logado'] = true;
							
						  }else{
							   $_SESSION['logado'] = false;
							
						  }
					   }
					}	

					
				
					
					
			
						
						if($_SESSION['logado']){
							
						 // header("location:Principal"); 
						   $dados['msgAlert'] = "<div class='alert alert-success' role='alert'>
									Logado com sucesso!  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
								   <span aria-hidden='true'>&times;</span>
								   </button></div>";

								$listar = !$this->projeto->getBuscar() ? null :  $this->projeto->getBuscar();
								$dados = array("dados" => $listar);
								// foreach($dados as $row ){
								// 	echo "lista ". $row;	
								// }
								$this->load->view('Aluno',$dados);
								 //header("Location:Principal"); 
						}else{
							   $dados['msgAlert'] = "<div class='alert alert-warning' role='alert'>
									Login Invalido!   <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
								   <span aria-hidden='true'>&times;</span>
								   </button></div>";
						
							
								$this->load->view('v_login',$dados);
						}

			} else{
			$dados['msgAlert'] = "<div class='alert alert-warning' role='alert'>
									Usuario Invalido!   
	   							   <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
								   </button>
								   </div>";
			 session_destroy();
			$this->load->view('v_login',$dados);
			}		
			
			
          
	} 

	public function index()
	{
		 
		
		redirect('index.php/Home/Aluno');
	}


	
	public function Aluno($indice=null)
	{	
		if($indice == 1){
			$data['msg'] = "Usuario cadastrado!";
			$this->load->view('msg_sucesso',$data);
		}else if($indice ==2){
			$data['msg'] = "Não foi possivel cadastrar!";
			$this->load->view('msg_erro',$data);
		}else if($indice == 3){
			$data['msg'] = "Usuario excluido!";
			$this->load->view('msg_sucesso',$data);
		}else if($indice == 4){
			$data['msg'] = "Não foi possivel Excluir!";
			$this->load->view('msg_erro',$data);
		}


		$this->db->select('*');
		$data['aluno'] = $this->db->get('aluno')->result();
		
		$this->load->view('Aluno',$data);
		
		
		
	}
	
	public function ExcluirAluno($id=null){
		$this->db->where('id_aluno',$id);
		if($this->db->delete('aluno')){
			redirect('index.php/Home/Aluno/3');
		}else{
			redirect('index.php/Home/Aluno/4');
		}
	}

	
	public function ExcluirProfessor($id=null){
		$this->db->where('id_professor',$id);
		if($this->db->delete('professor')){
			redirect('index.php/Home/Professor/5');
		}else{
			redirect('index.php/Home/Professor/6');
		}
	}

	
	public function ExcluirCurso($id=null){
		$this->db->where('id_curso',$id);
		if($this->db->delete('curso')){
			redirect('index.php/Home/Curso/7');
		}else{
			redirect('index.php/Home/Curso/8');
		}
	}


	public function AlunoNovo(){
		$this->load->view('NovoAluno');
	}

	public function NovoAluno()
	{
			$dados['msgAlert'] = "";			
		if(isset($_POST['Submit'])){
		
		
	        $this->load->library('form_validation');
			$this->form_validation->set_rules('Nome','Nome', 'required');
			$this->form_validation->set_rules('data_nascimento','data_nascimento', 'required|date');
			$this->form_validation->set_rules('cep', 'cep', 'required');
			$this->form_validation->set_rules('Logradouro', 'Logradouro', 'required');
			$this->form_validation->set_rules('Numero', 'Numero', 'required');
			$this->form_validation->set_rules('Bairro', 'Bairro', 'required');
			$this->form_validation->set_rules('Cidade', 'Cidade', 'required');
			$this->form_validation->set_rules('UF', 'UF','required');	
	
			// if($this->form_validation->run() == TRUE){
				
				$data['nome'] = $this->input->post('Nome');
				$data['numero'] = $this->input->post('Numero');
				$data['data_nascimento'] = $this->input->post('data_nascimento');
				$data['cep'] = $this->input->post('cep');
				$data['Logradouro'] =	$this->input->post('Logradouro');
				$data['Bairro'] = $this->input->post('Bairro');
				$data['cidade'] = $this->input->post('Cidade');
				$data['estado'] = $this->input->post('UF');
			
		
				if($this->db->insert('aluno',$data)){
					redirect('index.php/Home/Aluno/1');
				}else{
					redirect('index.php/Home/Aluno/2');
				}
		
				
			// }
			

		
				
			// $res = $this->projeto->cadastrar_NovoAluno($Nome,$data_nascimento,$cep,$Logradouro,$numero,$Bairro,$Cidade,$UF);
			// 			if($res){
			// 				$dados['msgAlert'] = "<div class='alert alert-success' role='alert'>
			// 				Dados cadastrado com sucesso!  
			// 				<a href='#' class='close'>&times;</a>
			// 				</div>";
							
			// 			}else{
			// 				$dados['msgAlert'] = "Erro ao salvar evento no banco de dados!";
			// 			}
					
		}
		
	}


	
	public function AtualizacaoAluno($id=null)
	{
			$dados['msgAlert'] = "";			
		if(isset($_POST['Submit'])){
		
		
	        $this->load->library('form_validation');
			$this->form_validation->set_rules('Nome','Nome', 'required');
			$this->form_validation->set_rules('data_nascimento','data_nascimento', 'required|date');
			$this->form_validation->set_rules('cep', 'cep', 'required');
			$this->form_validation->set_rules('Logradouro', 'Logradouro', 'required');
			$this->form_validation->set_rules('Numero', 'Numero', 'required');
			$this->form_validation->set_rules('Bairro', 'Bairro', 'required');
			$this->form_validation->set_rules('Cidade', 'Cidade', 'required');
			$this->form_validation->set_rules('UF', 'UF','required');
			
	
			// if($this->form_validation->run() == TRUE){
				
				$Nome = $this->input->post('Nome');
				$id_aluno = $this->input->post('id_aluno');
				$numero = $this->input->post('Numero');
				$data_nascimento = $this->input->post('data_nascimento');
				$cep = $this->input->post('cep');
				$Logradouro =	$this->input->post('Logradouro');
				$Bairro = $this->input->post('Bairro');
				$Cidade = $this->input->post('Cidade');
				$UF = $this->input->post('UF');
				
			
			// }
			

		
				
			$res = $this->projeto->AtualizacaoAluno($Nome,$data_nascimento,$cep,$Logradouro,$numero,$Bairro,$Cidade,$UF,$id_aluno);
						if($res){
							$dados['msgAlert'] = "<div class='alert alert-success' role='alert'>
							Dados cadastrado com sucesso!  
							<a href='#' class='close'>&times;</a>
							</div>";
							
						}else{
							$dados['msgAlert'] = "Erro ao salvar evento no banco de dados!";
						}
					
		}
			
		$this->load->view('Aluno',$dados);
		
	}

	public function AtualizacaoCurso($id=null)
	{
			$dados['msgAlert'] = "";			
		if(isset($_POST['Submit'])){
		
		
	        $this->load->library('form_validation');
			$this->form_validation->set_rules('Nome','Nome', 'required');
		
			
	
			// if($this->form_validation->run() == TRUE){
				
				$Nome = $this->input->post('Nome');
				$id_curso = $this->input->post('id_curso');
				
				
			
			// }
			

		
				
			$res = $this->projeto->AtualizacaoCurso($Nome,$id_curso);
			if($res != null){
				redirect('index.php/Home/Curso/9');
				
			}else{
				redirect('index.php/Home/Curso/10');
			}
			
					
		}
			
		$this->load->view('Aluno',$dados);
		
	}


	// public function AtualizacaoCurso($id=null){
	// 	// $this->db->update('id_curso',$id);
	// 	// $data['curso'] = $this->db->get('aluno')->result();
		
	// 	if($this->db->update('aluno')){
	// 		redirect('index.php/Home/Aluno/7');
	// 	}else{
	// 		redirect('index.php/Home/Aluno/8');
	// 	}
	// }


	public function atualizarAluno($id=null){

		$this->db->where('id_aluno',$id);
		$data['aluno'] = $this->db->get('aluno')->result();

		$this->load->view('AtualizarAluno',$data);


	}


	public function atualizarProfessor($id=null){

		$this->db->where('id_professor',$id);
		$data['professor'] = $this->db->get('professor')->result();

		$this->load->view('AtualizarProfessor',$data);
	}

	public function atualizarCurso($id=null){

		$this->db->where('id_curso',$id);
		$data['curso'] = $this->db->get('curso')->result();

		$this->load->view('AtualizarCurso',$data);

	}

	public function Professor(){

        $this->db->select('*');
		$data['dados'] = $this->db->get('professor')->result();

		$this->load->view('Professor',$data);
	}

	public function Curso($indice=null){
		$this->db->select('*');
		$dados['curso'] = $this->db->get('curso')->result();

		if($indice == 9){
			$data['msg'] = "Usuario alterado!";
			$this->load->view('msg_sucesso',$data);
		}else if($indice ==10){
			$data['msg'] = "Não foi possivel alterar!";
			$this->load->view('msg_erro',$data);
		}
		$this->load->view('Curso',$dados);
	}
	
	public function NovoProfessor()
	{
		$dados['msgAlert'] = "";		
		if(isset($_POST['Submit'])){
		
			
	        $this->load->library('form_validation');
			$this->form_validation->set_rules('Nome','Nome', 'required');
			
			
			// if($this->form_validation->run() == TRUE){
				
				$Nome = ($_POST['Nome']);
				$data_nascimento = ($_POST['data_nascimento']);
				
				
			
			
			// }
	
				
			$res = $this->projeto->cadastrar_NovoProfessor($Nome,$data_nascimento);
						if($res){
							$dados['msgAlert'] = "<div class='alert alert-success' role='alert'>
							Dados cadastrado com sucesso!  
							<a href='#' class='close'>&times;</a>
							</div>";
							
						}else{
							$dados['msgAlert'] = "Erro ao salvar evento no banco de dados!";
						}
					
		}
			
		
		$this->load->view('Professor');
		
	}


	public function NovoCurso()
	{
		$dados['msgAlert'] = "";		
		if(isset($_POST['Submit'])){
		
			
	        $this->load->library('form_validation');
			$this->form_validation->set_rules('Nome','Nome', 'required');
			
			
			// if($this->form_validation->run() == TRUE){
				
				$Nome = ($_POST['nome']);
				
				
			
			
			// }
			
			$res = $this->projeto->cadastrar_NovoCurso($Nome);
						if($res){
							$dados['msgAlert'] = "<div  class='alert alert-warning alert-dismissible fade show' role='alert'>
							Dados cadastrado com sucesso!  
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
								<span aria-hidden='true'>&times;</span>
		    				</button>
						
							</div>";
							
						}else{
							$dados['msgAlert'] = "<div class='alert alert-danger' role='alert'>
							Erro ao salvar evento no banco de dados!";
						}
					
		}
			
		$this->load->view('NovoCurso',$dados);
		
	}

}