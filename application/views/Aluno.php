<?php $this->load->view("header.php"); ?>
<?php $this->load->view("menu.php"); ?>

<hr> 
 

      <a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/Home/AlunoNovo" role="button">Novo Aluno</a>
      <a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/Home/PDF" role="button">Gerar PDF</a>
      
      <h2>Alunos:</h2>
      <div class="table-responsive">
        <table class="table table-striped table-secondary table-sm">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Data de Nascimento</th>
              <th>Cep</th>
              <th>Logradouro</th>
              <th>Numero</th>
              <th>Bairro</th>
              <th>Cidade</th>
              <th>AM</th>
              <th>Data de Criação</th>
             
            </tr>
          </thead>
          <tbody>
           
            
            <?php foreach($aluno as $alu) { ?>
            <tr>
              <td> <?= $alu->nome; ?> </td>
              <td> <?= $alu->data_nascimento; ?> </td>
              <td> <?= $alu->cep; ?> </td>
              <td> <?= $alu->logradouro; ?> </td>
              <td> <?= $alu->numero; ?> </td>
              <td> <?= $alu->bairro; ?> </td>
              <td> <?= $alu->cidade; ?> </td>
              <td> <?= $alu->estado; ?> </td>
              <td> <?= $alu->data_criacao; ?> </td>
              <td> <a class="btn btn-primary" id="atualizar" href="<?php echo base_url("index.php/Home/atualizarAluno/".$alu->id_aluno); ?>" role="button">Atualizar</a>
                   <a class="btn btn-danger" href="<?php echo base_url("index.php/Home/excluirAluno/".$alu->id_aluno); ?>" role="button" onclick="return confirm('Deseja excluir usuario?');">Excluir</a> </td>
            </tr>
            <?php } ?>

          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

<?php $this->load->view('footer.php'); ?>