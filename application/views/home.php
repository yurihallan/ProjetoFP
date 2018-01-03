<?php

$this->load->view("cabecalho");
?>


        <form id="form_cadastro" name="cod" method="POST" action="<?php echo base_url();?>/index.php/Idosos">
          <fieldset style="background-color:turquoise ">
              <h1>Dados Cadastrais</h1>
                <p><b>*Campo Obrigatório</b></p>
                <b>Nome*</b><br>
                <input id="nome" type="text" name="nome" size="40" maxlength="50" required="required" title="somente letras" pattern="[a-z-A-Z\s]+$"/>
                <br>

                <b>RG*</b><br>
                <input id="RG" type="text" name="rg" size="20" maxlength="8" required="required" title="somente numeros" pattern="[0-9\s]+$"/>
                <br>
                
                <b>CPF*</b><br>
                <input id="CPF" type="text" name="cpf" size="20" maxlength="11" required="required" title="somente numeros" pattern="[0-9\s]+$"/>
                <br>
                
                <b>Telefone 1*</b><br>
                <input id="Telefone1" type="tel" name="telefone1" size="20" maxlength="8" required="required" title="somente numeros" pattern="[0-9\s]+$"/>
                <br>
                
                <b>Telefone 2:</b><br>
                <input id="Telefone2" type="tel" name="telefone2" size="20" maxlength="8" required="required" title="somente numeros" pattern="[0-9\s]+$"/>
                <br><br>
                
                <b>Endereço*</b><br>
               
                <b>Rua*</b><br>
                <input id="Rua" type="text" name="rua" size="40" maxlength="30" required="required" title="somente letras" pattern="[a-z-A-Z\s]+$"/><br>
                    
                <b>Número*</b><br>
                <input id="Numero" type="text" name="numero" size="20" maxlength="4" required="required" title="somente numeros" pattern="[0-9\s]+$"/><br>
                    
                <b>Complemento</b><br>
                
                <input type="text" name="complemento" size="40" maxlength="25" required="required" title="somente letras" pattern="[a-z-A-Z\s]+$"/><br>
                    
                <b>Sexo*</b><br>
                <input type="radio" name="sexo" value="masculino" checked>
                Masculino
                <br>
                <input type="radio" name="sexo" value="feminino">
                Feminino
                <br>
                
                <b>Dependentes*</b><br>
                <input type="radio" name="dep" value="0" >
                Não<br> 
                <input type="radio" name="dep" value="1" checked>
                Sim
                <br>
                Quantos?
                <input type="text" name="quantos">
                <br><br>
                <input type="submit" class="btn btn-lime"  name="cadastro_idoso" value="ENVIAR" />
        
            </fieldset>
		</form>
            <br><br>

<?php

$this->load->view("rodape");
?>
