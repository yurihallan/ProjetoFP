<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

?>

<!DOCTYPE html>
<html>
    
   <head>
      <title>Cadastro do Idoso</title>
      <meta charset="UTF-8">
      <meta name="description" content="Uma pagina para cadastro de idosos">
      <meta name="author" content="Equipe">
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url("extras/css/");?>estilo.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url("extras/css/").$estilo;?>">
      <script src="<?php echo base_url("extras/js/");?>funcoes.js"></script>
	  <script src="<?php echo base_url("extras/js/");?>jquery.js"></script>
	  <script src="<?php echo base_url("extras/js/");?>cycle.js"></script>
      
     
        
   </head>
   
     <body >
	 
        
          <div id="slides">
			<img src="<?php echo base_url("extras/img/");?>foto1.jpg" alt="Essa imagem não pode ser exibida">
			<img src="<?php echo base_url("extras/img/");?>foto2.jpg" alt="Essa imagem não pode ser exibida">
			<img src="<?php echo base_url("extras/img/");?>foto3.jpg" alt="Essa imagem não pode ser exibida">
			<img src="<?php echo base_url("extras/img/");?>foto4.jpg" alt="Essa imagem não pode ser exibida">
			<img src="<?php echo base_url("extras/img/");?>foto5.jpg" alt="Essa imagem não pode ser exibida">
			<img src="<?php echo base_url("extras/img/");?>foto6.jpg" alt="Essa imagem não pode ser exibida">
			<img src="<?php echo base_url("extras/img/");?>foto7.jpg" alt="Essa imagem não pode ser exibida">
			<img src="<?php echo base_url("extras/img/");?>foto8.jpg" alt="Essa imagem não pode ser exibida">
		  </div>
		  
		  
			<script>$("#slides").cycle();</script>
			<div id="menu">
				<ul>
					<li><a href="<?php echo base_url("index.php");?>/Idosos">Cadastro Idosos</a></li>
					
					<li><a href="<?php echo base_url("index.php");?>/Idosos/gerenciar_estoque">Gerenciar Estoque</a></li>
					
					<li><a href="<?php echo base_url("index.php");?>/Idosos/eventos">Eventos</a></li>
				</ul>
				</div>
			
			<?php
				if(isset($msgAlert)){
					echo msgAlert($msgAlert);
				}
				
			?>
			