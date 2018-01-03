<?php

$this->load->view("cabecalho");
?>


				
		<form id="form_cadastro2" name="cod" method="POST" action="<?php echo base_url();?>index.php/Idosos/eventos_editar">
		<fieldset> 
                <h1>Editar Evento</h1>
                <label for="nome"> Selecione o evento: </label> <br> 
				
				<select name="evento">
				<?php
					 if($eventos){
						  foreach($eventos->result() as $key){
							echo "<option value=\"{$key->id}\">{$key->nome_evento}</option>";
						}	
					 }
					 
				?>
				</select><br><br>
		 <input type="submit" class="btn-lime" name="editar_evento" value="Editar" />             
        </fieldset>   
         
       </form>
			<br>	
		<form id="form_cadastro" name="cod" method="POST" action="<?php echo base_url();?>/index.php/Idosos/eventos">
          <fieldset>
                
            <div id="pagina">   
                <h1>Informação do Evento</h1>
                <label for="nome"> Nome do evento: </label> <br> 
                <input id="nome" type="text" name="nome_evento" size="30" maxlength="40" required="required" title="somente letra" pattern="[a-z-A-Z\s]+$"/>
                <br>
                <label for="evento"> Local do evento: </label> <br>
                <input id="evento" type="text" name="local" size="30" maxlength="40" required="required" title="somente letra" pattern="[a-z-A-Z\s]+$"/>
                <br>
                <label for="telefone"> Telefone para contato:</label> <br>
                <input id="telefone" type="tel" name="contato" size="10" maxlength="9" placeholder="0000-0000" required="required" title="somente número" pattern="[0-9\s]+$"/>
                <br>
                Data: <br>
                <input id="Evento" type="text" name="data">
                <br>
                <label for="tempo"> Duração: </label><br>
                <input id="tempo" type="text" name="horario">
                <br>
                Descricao do evento:<br>
                <textarea name="descricao" id="descrição" cols="35" rows="5" placeholder="Descreva seu evento aqui!!!" ></textarea>
                <br>
            </div>
            
                    <input type="submit" class="btn-lime" name="cadastro_evento" value="ENVIAR" />
                           
        </fieldset>   
         
       </form>
<?php

	$this->load->view("rodape");
?>
