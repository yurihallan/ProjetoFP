<?php $this->load->view("header.php"); ?>
        
  
    <div class="container">
		<?php if(isset($msgAlert)): echo  $msgAlert; endif?>

		  <form class="form-signin" role="form" method="post" action="<?php echo base_url(); ?>index.php/Home/logar">
				<h2 class="form-signin-heading">Projeto FlexPeak </h2>
				<input type="text" class="form-control" placeholder="Nome"  autofocus name="nome" id="nome">
				<input type="password" class="form-control" placeholder="Password"  name="senha" id="senha">
				<button class="btn btn-lg btn-primary btn-block" type="submit" name="login" id="login">Fazer login</button>
			  <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
			  <br>
			  
			<div> 
				Ainda não possui cadastro? Cadastre-se aqui<a href="<?php echo base_url(); ?>index.php/Home/cadastro" class="btn btn-primary">Cadastre-se</a>
			</div>
		  </form>
		  
	 
    </div> <!-- /container -->


<?php $this->load->view('footer.php') ?>