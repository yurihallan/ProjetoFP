<?php $this->load->view("header.php"); ?>
<?php $this->load->view("menu.php"); ?>

<hr>  <?php if(isset($msgAlert)): echo  $msgAlert; endif?>


    <a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/Home/NovoCurso" role="button">Novo Curso</a>
    <a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/Home/NovoAluno" role="button">Gerar PDF</a>
     
      
      <h2>Cursos:</h2>
      <div class="table-responsive">
        <table class="table table-striped table-secondary table-sm">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Data de criação</th>
            
            </tr>
          </thead>
          <tbody>
           
               
          <?php foreach ($curso as $curs) { ?>
            <tr>
              <td> <?= $curs->nome; ?> </td>
              <td> <?= $curs->data_criacao; ?> </td>
              <td> <a class="btn btn-primary" href="<?php echo base_url("index.php/Home/atualizarCurso/".$curs->id_curso); ?>" role="button">Atualizar</a>
              <a class="btn btn-danger" href="<?php echo base_url("index.php/Home/excluirCurso/".$curs->id_curso); ?>" role="button">Excluir</a> </td>
            </tr>
            <?php } ?>

          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

<?php $this->load->view('footer.php'); ?>