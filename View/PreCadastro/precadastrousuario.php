<!DOCTYPE html>
<html lang="pt-br">
<head>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/estilos/estilos.css">
    <link rel="stylesheet" href="/estilos/paletadecores.css">
    <link rel="stylesheet" href="/estilos/estiloformularios.css">
    <!--<link rel="stylesheet" href="/estilos/estilojanelasmodal.css">-->
    <title>Cadastro de Usuários</title>
   </head>
   <script src="/funcoes/funcaovalidadados.js" defer> </script>


<body class="bodyPrecadastro">
   <?php 
      define ('BASE_DIR',dirname(__FILE__,3));
      define ('VIEWS',BASE_DIR .'/View');
      include VIEWS .'\cabecalho\cabecalho.php';
      include VIEWS .'\menu\menu.php';  
      
      $limpadados = [
            'nome' => "",
            'cpf' => null,
            'telefone' => null,
            'email' => null,
            'cep' => null,
            'numero' => null,
            'complemento' => null,
            'logradouro' => null,
            'bairro' => null,
            'municipio' => null,
            'uf' => null,
            'modalidade' => null,

        ];
   ?>
      <div class="divpainel">     
         <form action="processaprecadastroa.php" method="post">
            <div class="inputBoxcabecalho">
               <label class="labelInputTitulo">Solicite seu Pré-Cadastro</label>
               <br>
            </div>
            
            <div class="inputBoxpainel">
               <div class="inputBox" id="inputBoxnome">
                  <span class="span" id="idspanNome">Campo Obrigatório</span>
                  <label class ="labelInput">Nome</label>
                  <input class ="campo" value="<?= $limpadados['nome']?>" type="text" name="nome" id="idnome" class="inputUser" autofocus="on" placeholder="Digite seu nome completo">
               </div>

               <div class="inputBox">
                  <span class="span" id="idspanCpf">CPF inválido</span>
                  <label class="labelInput">CPF</label>
                  <input class="campo" value="<?= $limpadados['cpf']?>" type="cpf" name="cpf" id="idcpf" class="inputUser" placeholder="Digite seu CPF" required maxlength="14">            
               </div>

            </div>
            
            <div class="inputBoxpainel">
               <div class="inputBox">
                  <span class="span" id="idspanTelefone">Telefone inválido</span>
                  <label class="labelInput">Telefone/Celular</label>
                  <input class="campo" value="<?= $limpadados['telefone']?>" type="text" name="telefone" id="idtelefone" class="inputUser" placeholder="(00)000000000" maxlength="14">
               </div>

               <div class="inputBox" id="inputBoxemail">
                  <span id="idspanEmail">Campo obrigatório</span>
                  <label class="labelInput">Email</label>
                  <input class="campo" value="<?= $limpadados['email']?>" type="email" name="email" id="idemail" class="inputUser" placeholder="Digite seu E-mail">
               </div>
            </div>

            <div class="inputBoxpainel">
               <div class="inputBox" id="inputBoxcep">
                  <span class="span" id="idspanCep">CEP inválido</span>
                  <label class="labelInput">CEP</label>
                  <input class="campo" value="<?= $limpadados['cep']?>" type="text" name="cep" id="idcep" class="inputUser" placeholder="Digite o CEP" required maxlength="8">
               </div>

               <div class="inputBox" id="inputBoxrua">
                  <label class="labelInput">Rua</label>
                  <input class="campo" value="<?= $limpadados['logradouro']?>" type="text" name="logradouro" id="idlogradouro" class="inputUser" readonly>
               </div>
            </div>

            <div class="inputBoxpainel">           
               <div class="inputBox" id="inputBoxbairro">
                  <label class="labelInput">Bairro</label>
                  <input class="campo" value="<?= $limpadados['bairro']?>" type="text" name="bairro" id="idbairro" class="inputUser" readonly>
               </div>

               <div class="inputBox" id="inputBoxmunicipio">
                  <label class="labelInput">Município</label>
                  <input class="campo" value="<?= $limpadados['municipio']?>" type="text" name="municipio" id="idmunicipio" class="inputUser" readonly>
               </div>
            </div>
                  
            <div class="inputBoxpainel">
               <div class="inputBox">
                  <label  class="labelInput">Número</label>
                  <input class="campo" value="<?= $limpadados['numero']?>" type="text" name="numero" id="idnumero" class="inputUser" placeholder="xxxxx">
               </div>

               <div class="inputBox">
                  <label  class="labelInput">Complemento</label>
                  <input class="campo" value="<?= $limpadados['complemento']?>" type="text" name="complemento" id="idcomplemento" class="inputUser" placeholder="xxxxx">
               </div>

               <div class="inputBox" id="inputBoxestado">
                  <label class="labelInput">Estado</label>
                  <input class="campo" value="<?= $limpadados['uf']?>" type="text" name="uf" id="iduf" class="inputUser" readonly>
               </div>
            </div>
            
            <div class="inputBoxpainel">              
               <div class="inputBox" id="inputBoxModalidade">
                  <label class="labelInput">Modalidade de Serviços</label>
                  <select class="campo" name="modalidade" id="idmodalidade" required>
                     <option  value="<?= $limpadados['modalidade']?>" readonly='true' selected onblur="selectvalormensalidade.php">Selecione o serviço</option>
                     <?php
                        //$query = $conexao->query("SELECT id, modalidade FROM modalidades");
                        //$registros = $query-> fetchall(PDO::FETCH_ASSOC);
                        //foreach ($registros as $option){
                           ?><option value="<?php echo $option['id']?>">
                           <?//php echo $option['modalidade']?></option>

                  </select>
               </div>

               <div class="inputBoxRodape">
               <input type="submit" name="submit" id="idsubmit" value="Enviar" onclick="">
               <input type="reset" name="reset" id="idreset" value="Limpar" onclick="javascript: location.href='precadastrousuario.php'">
            </div>    
            </div>
             
                       
         </form>
      </div>

    <?php 
        include VIEWS. '\rodape\rodape.php';
    ?>
</body>

</html>

