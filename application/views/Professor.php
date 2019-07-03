<?php $this->load->view("header.php"); ?>
<?php $this->load->view("menu.php"); ?>

<hr>  <?php if(isset($msgAlert)): echo  $msgAlert; endif?>

    <a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/Home/NovoProfessor" role="button">Novo Professor</a>
    <a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/Home/NovoAluno" role="button">Gerar PDF</a>
      
      <h2>Professor:</h2>
      <div class="table-responsive">
        <table class="table table-striped table-secondary table-sm">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Data de Nascimento</th>
              <th>Data de Criação</th>
              
             
            </tr>
          </thead>
          <tbody>
           
            
          <?php foreach ($dados as $prof) { ?>
            <tr>
              <td> <?= $prof->nome; ?> </td>
              <td> <?= $prof->data_nascimento; ?> </td>
              <td> <?= $prof->data_criacao; ?> </td>
              <td> <a class="btn btn-primary" href="<?php echo base_url("index.php/Home/atualizarProfessor/".$prof->id_professor); ?>" role="button">Atualizar</a>
               <a class="btn btn-danger" href="<?php echo base_url("index.php/Home/excluirProfessor/".$prof->id_professor); ?>" role="button"  onclick="return confirm('Deseja excluir usuario?');">Excluir</a> </td>
            </tr>
            <?php } ?>


          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

<?php $this->load->view('footer.php'); ?>