<?php $this->load->view("header.php"); ?>
<?php $this->load->view("menu.php"); ?>

<script>
  
  function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('Logradouro').value=("");
            document.getElementById('Bairro').value=("");
            document.getElementById('Cidade').value=("");
            document.getElementById('UF').value=("");
          
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
			
            //Atualiza os campos com os valores.
            document.getElementById('Logradouro').value=(conteudo.logradouro);
            document.getElementById('Bairro').value=(conteudo.bairro);
            document.getElementById('Cidade').value=(conteudo.cidade);
            document.getElementById('UF').value=(conteudo.uf);
            
        } //end if.
        else {
            //CEP não Encontrado.
            // limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace("-","");
		
        //Verifica se campo cep possui valor informado.
        if (cep != "") {
		
            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('Logradouro').value=("...");
                document.getElementById('Bairro').value=("...");
				document.getElementById('Cidade').value=("...");
                document.getElementById('UF').value=("...");
                // document.getElementById('ibge').value=("...");

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                urlStr = 'https://viacep.com.br/ws/'+ cep + '/json/';

                $.ajax({
					url: urlStr,
					type: "get",
					dataType: "json",
					success: function(data){
						console.log(data);

						document.getElementById('Logradouro').value=(data.logradouro);
						document.getElementById('Bairro').value=(data.bairro);
						document.getElementById('Cidade').value=(data.localidade);
						document.getElementById('UF').value=(data.uf);
						
          			
					},
					error: function(error){
						console.log(error);
					}
				})
				
				
				//Insere script no documento e carrega o conteúdo.
				//  document.body.appendChild(data);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };


</script>


  <h2>Atualizar Aluno</h2><hr>
	<form action="<?php echo base_url(); ?>index.php/Home/AtualizacaoAluno" method="post" class="border border-dark alert-primary" enctype="multipart/form-data" >
		
				
                            <input type="hidden" name="id_aluno" id="id_aluno" value="<?= $aluno[0]->id_aluno?>">
							<label for="Nome">Nome:</label>
							<input type="text"  class="form-control" name="Nome" value="<?= $aluno[0]->nome?>">


							
							<label for="data_nascimento">Data de nascimento:</label>
							<input type="date" placeholder="99999999" class="form-control" id="data_nascimento" value="<?= $aluno[0]->data_nascimento?>" name="data_nascimento">
										
							<label for="cep">Cep:</label>
							<input type="text" class="form-control" name="cep" value="<?= $aluno[0]->cep?>" onblur="pesquisacep(this.value)" >

							<label for="Logradouro">Logradouro:</label>
							<input type="text"  class="form-control" name="Logradouro" id="Logradouro" value="<?= $aluno[0]->logradouro?>">
					
							<label for="Numero">Numero:</label>
							<input type="text" class="form-control" name="Numero" id="Numero"  value="<?= $aluno[0]->numero?>">
			
							<label for="Bairro">Bairro:</label>
							<input type="text"  class="form-control" name="Bairro" id="Bairro" value="<?= $aluno[0]->bairro?>">
			
			
							<label for="Cidade">Cidade:</label><br>
							<input type="text" name="Cidade" id="Cidade"  class="form-control" value="<?= $aluno[0]->cidade?>">
			
							<label for="UF">UF:</label><br>
							<input type="text" name="UF" id="UF"  class="form-control" value="<?= $aluno[0]->estado?>">
			
							<button type="submit" name="Submit" class="btn btn-dark" style=" float:right; position:relative; right: 10px; ">Salvar</button>

	</form>		
	<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
	<?php if(isset($msgAlert)): echo  $msgAlert; endif?>



<?php $this->load->view('footer.php') ?>