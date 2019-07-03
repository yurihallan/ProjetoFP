<?php $this->load->view("header.php"); ?>
<?php $this->load->view("menu.php"); ?>

  <h2>Cadastar novo Professor</h2><hr>
	<form action="<?php echo base_url(); ?>index.php/Home/AtualizacaoProfessor" method="post" class="border border-dark alert-primary" enctype="multipart/form-data" >
		
				
				<input type="hidden" name="id_professor" id="id_professor" value="<?= $professor[0]->id_professor?>">
							<label for="Nome">Nome:</label>
							<input type="text"  class="form-control" name="Nome"  value="<?= $professor[0]->nome?>">

							<label for="data_nascimento">Data de nascimento:</label>
							<input type="date" class="form-control" name="data_nascimento"  value="<?= $professor[0]->data_nascimento?>">
										
							<button type="submit" name="Submit" class="btn btn-dark" style=" float:right; position:relative; right: 10px; ">Salvar</button>

	</form>		
	<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
	<?php if(isset($msgAlert)): echo  $msgAlert; endif?>



<?php $this->load->view('footer.php') ?>