
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
     
	public function index()
	{
		$this->load->view('v_login');
	}
	
	public function verificar_sessao(){
		if($this->session->userdata('logado') == false){
			$this->load->view('v_login');
		}
	}

    public function logar(){
           
       $btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);
		if($btnLogin){
			$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
			$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
			echo "$usuario - $senha";
			if((!empty($usuario)) AND (!empty($senha))){
				//Gerar a senha criptografa
				//echo password_hash($senha, PASSWORD_DEFAULT);
				//Pesquisar o usuário no BD
				
				$res = $this->portfolio->Usuario($usuario,$senha);
				
				
				if($res){
					$row_usuario = mysqli_fetch_assoc($res);
					if(password_verify($senha, $row_usuario['senha'])){
						$_SESSION['id'] = $row_usuario['id'];
						$_SESSION['nome'] = $row_usuario['nome'];
						$_SESSION['email'] = $row_usuario['email'];
						header("Location: principal.php");
					}else{
						$_SESSION['msg'] = "Login e senha incorreto!";
						header("Location: v_login.php");
					}
				}
			}else{
				$_SESSION['msg'] = "Login e senha incorreto!";
				header("Location: v_login.php");
			}
		}else{
			$_SESSION['msg'] = "Página não encontrada";
			header("Location: v_login.php");
		}
   }

    public function logout(){
        $this->session->unset_userdata("logado");
        redirect(base_url());
    
    }
}    