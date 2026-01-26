<!DOCTYPE html>
<html lang="pt-br">
<head>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/estilos/estilos.css">
    <link rel="stylesheet" href="/estilos/paletadecores.css">
    <!--<link rel="stylesheet" href="/estilos/estiloformularios.css">-->
    <link rel="stylesheet" href="/estilos/estilojanelasmodal.css">
    <title>Cadastro de Usuários</title>
   </head>
   <script src="/funcoes/funcaovalidadados.js" defer> </script>

<body>
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
         <form action="processaprecadastroaaa.php" method="post">
            <div class="inputBoxcabecalho">
               <label class="labelInputTitulo">Solicite seu Pré-Cadastro</label>
               <br>
            </div>
            <span class="span" id="idspanNome">Campo Obrigatório</span>
            <div class="inputBox">
               <label class ="labelInput">Nome</label>
               <input value="<?= $limpadados['nome']?>" type="text" name="nome" id="idnome" class="inputUser" autofocus="on" placeholder="Digite seu nome completo">
            </div>

            <div class="duascolunasSpan" id="idduascolunasSpan">
               <span class="span" id="idspanCpf">CPF inválido</span>
               <span class="span" id="idspanTelefone">Telefone inválido</span>
            </div>
            <div class="duascolunas" id="idduascolunas">
               <div class="inputBox">
                  <label class="labelInput">CPF</label>
                  <input value="<?= $limpadados['cpf']?>" type="cpf" name="cpf" id="idcpf" class="inputUser" placeholder="Digite seu CPF" required maxlength="14">
                  
               </div>
               <div class="inputBox">
                  <label class="labelInput">Telefone/Celular</label>
                  <input value="<?= $limpadados['telefone']?>" type="text" name="telefone" id="idtelefone" class="inputUser" placeholder="(00)000000000" maxlength="14">
               </div>
            </div>

            <span id="idspanEmail">Campo obrigatório</span>
            <div class="inputBox">
               <label class="labelInput">Email</label>
               <input value="<?= $limpadados['email']?>" type="text" name="email" id="idemail" class="inputUser" placeholder="Digite seu E-mail">
            </div>

            <div class="trescolunas" id="idtrescolunas">
               <span class="span" id="idspanCep">CEP inválido</span>
               <div class="inputBox">
                  <label class="labelInput">CEP</label>
                  <input value="<?= $limpadados['cep']?>" type="text" name="cep" id="idcep" class="inputUser" placeholder="Digite o CEP" required maxlength="8">
               </div>

               <div class="inputBox">
                  <label  class="labelInput">Número</label>
                  <input value="<?= $limpadados['numero']?>" type="text" name="numero" id="idnumero" class="inputUser" placeholder="xxxxx">
               </div>

               <div class="inputBox">
                  <label  class="labelInput">Complemento</label>
                  <input value="<?= $limpadados['complemento']?>" type="text" name="complemento" id="idcomplemento" class="inputUser" placeholder="xxxxx">
               </div>
            </div>

            <div class="duascolunasSpan" id="idduascolunasSpan">
               <span class="span" id="idspanNumero"></span>
               <span class="span" id="idspanNumero1">Campo obrigatório</span>
            </div>

            <div class="endereço" id="idendereco">
               <div class="inputBox">
                  <label class="labelInput">Rua</label>
                  <input value="<?= $limpadados['logradouro']?>" type="text" name="logradouro" id="idlogradouro" class="inputUser" readonly>
               </div>
               
               <div class="inputBox">
                  <label class="labelInput">Bairro</label>
                  <input value="<?= $limpadados['bairro']?>" type="text" name="bairro" id="idbairro" class="inputUser" readonly>
               </div>
    
               <div class="inputBox">
                  <label class="labelInput">Município</label>
                  <input value="<?= $limpadados['municipio']?>" type="text" name="municipio" id="idmunicipio" class="inputUser" readonly>
               </div>
            </div>

            <div class="duascolunas" id="idduascolunas">
               <div class="inputBox">
                  <label class="labelInput">Estado</label>
                  <input value="<?= $limpadados['uf']?>" type="text" name="uf" id="iduf" class="inputUser" readonly>
               </div>

               <div class="inputBox">
                  <label class="labelInput">Modalidade de Serviços</label>
                  <select name="modalidade" id="idmodalidade" required>
                  <option value="<?= $limpadados['modalidade']?>" readonly='true' selected onblur="selectvalormensalidade.php">Selecione o serviço</option>
                  <?php
                     $query = $conexao->query("SELECT id, modalidade FROM modalidades");
                     $registros = $query-> fetchall(PDO::FETCH_ASSOC);
                     foreach ($registros as $option){
                        ?><option value="<?php echo $option['id']?>">
                        <?php echo $option['modalidade']?></option>
                        <?php
                     }
                        ?>
                  </select>
               </div>
            </div>

            <div class="inputBoxRodape">
                  <input type="submit" name="submit" id="idsubmit" value="Enviar" onclick="">
                  <input type="reset" name="reset" id="idreset" value="Limpar" onclick="javascript: location.href='precadastrousuario.php'">
            </div> 
         </form>

    <?php 
        include VIEWS. '\rodape\rodape.php';
    ?>
</body>

</html>

