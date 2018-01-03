<?php

$this->load->view("cabecalho");


?>


				
			
		<form id="form_cadastro2" name="cod" method="POST" action="<?php echo base_url();?>index.php/Idosos/eventos_editar/<?php echo $evento->id;?>">
          <fieldset>
                
            <div id="pagina">   
                <h1>Informação do Evento</h1>
                <label for="nome"> Nome do evento: </label> <br> 
                <input id="nome" type="text" name="nome_evento" size="30" value="<?php echo $evento->nome_evento;?>" maxlength="40" required="required" title="somente letra" pattern="[a-z-A-Z\s]+$"/>
                <br>
                <label for="evento"> Local do evento: </label> <br>
                <input id="evento" value="<?php echo $evento->local;?>" type="text" name="local" size="30" maxlength="40" required="required" title="somente letra" pattern="[a-z-A-Z\s]+$"/>
                <br>
                <label for="telefone"> Telefone para contato:</label> <br>
                <input id="telefone" type="tel" value="<?php echo $evento->contato;?>" name="contato" size="10" maxlength="9" placeholder="0000-0000" required="required" title="somente número" pattern="[0-9\s]+$"/>
                <br>
                Data: <br>
                <input id="Evento" value="<?php echo $evento->data;?>" type="text" name="data">
                <br>
                <label for="tempo"> Duração: </label><br>
                <input id="tempo" type="text" value="<?php echo $evento->horario;?>" name="horario">
                <br>
                Descricao do evento:<br>
                <textarea name="descricao" id="descrição" cols="35" rows="5" placeholder="Descreva seu evento aqui!!!" ><?php echo $evento->descricao;?> </textarea>
                <br>
            </div>
            
                    <input type="submit" class="btn-lime" name="atualizar_evento" value="atualizar" />
                           
        </fieldset>   
         
       </form>
<?php

	$this->load->view("rodape");
?>
