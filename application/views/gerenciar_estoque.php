<?php

$this->load->view("cabecalho");
?>

        <form id="form_cadastro2" name="cod" method="POST" action="<?php echo base_url();?>index.php/Idosos/gerenciar_estoque">
           
       
            
            <fieldset id="CorpoDoControle" style="background-color:turquoise ">
                
                
                <h1 id="gerenciar">Estoque De Materiais</h1>
                
                        <select name="material" >
                        <option  selected value ="Selecione">Selecione</option>
                        <option value ="Cadeira de Rodas">Cadeira de Rodas</option>
                        <option value ="Fralda Adulto">Fralda Adulto</option>
                        <option value ="Fralda Infantil">Fralda Infantil</option>
                        <option value ="Medicamentos Tarja Amarela">Medicamentos Tarja Amarela</option>
                        <option value ="Medicamentos Tarja Vermelha">Medicamentos Tarja Vermelha</option>
                        <option value ="Medicamentos Tarja Preta">Medicamentos Tarja Preta</option>
                        <option value ="Medicamentos Calmantes">Medicamentos Calmantes</option>
                        <option value ="Seringa">Seringa</option>
                        <option value ="Equipamento para Aferir Pressao">Equipamento para Aferir Pressao</option>
                        <option value ="Leite Nan">Leite Nan</option>
                        <option value ="Andador para Idoso">Andador para Idoso</option>
                        <option value ="Lencol">Lencol</option>
                        <option value ="Roupas">Roupas</option>
                        <option value ="Material Escolar">Material Escolar</option>
                        <option value ="Alimentos">Alimentos</option>
                        <option value ="Outros">Outros</option>
                        
                        
                    </select>              
                    <div>
                        <h3><b>Nome do Produto Recebido por Doação:</b></h3>
                <input type="text" name="produto" maxlength="50" size="50">
               <br>
                <b>Quantidade:</b><br>
                <input type="text" name="quant">
                <br>
                <b>Procedencia:</b><br>
                <input type="radio" name="procedencia" value="interno" checked>
                <label >Internos</label>
                <input type="radio"  name="procedencia" value="externo">
                <label >Externos</label>
                <br>
                
                </div><br>
                <input type="submit" class="btn btn-lime" name="material_estoque" value="ENVIAR" />
            </fieldset>
			<br>
			
           </form>
			<form id="form_cadastro" name="cod" method="POST" action="<?php echo base_url();?>/index.php/Idosos/gerenciar_estoque">
       
            <div>
			
                <br><br>
                <fieldset style="background-color:turquoise ">
                <h1><b>Doação em dinheiro</b></h1>
                <input id="doacao" type="text" name="doacao">
                Procedencia:
                <input type="radio" name="proced2" value="interno">
                <label for="proced2">Interno</label>
                <input type="radio" id="proced2" name="proced2" value="externo" checked >
                <label for="proced2">Externo</label><br><br>
				<input type="submit" class="btn btn-lime" name="dinheiro_estoque" value="ENVIAR" />
                </fieldset>
                <br>
            </div>
                
             
           </form>
   <?php

$this->load->view("rodape");
?>