************************************************************** <br><br>
Olá  <?php echo $_POST['nome'] ?>; <br>
-------------------------------------------------------------- <br>
 DADOS RECEBIDOS COM SUCESSO!!!!! <br>
-------------------------------------------------------------- <br> <br><br>
Voce informou os seguintes dados: <br><br>
Gênero: <?php foreach ($_POST['sexo'] as $genero){ 
echo $genero. " ";
} ?> <br> <br>
Turno: <?php foreach($_POST['check'] as $turnos){ 
echo $turnos." ";    
} ?> <br><br>
Cidade: <?php echo $_POST ['cidade'] ?>; <br> <br>
Sua senha atual é: <?php echo ($_POST ['senha'])?>;<br> <br>
**************************************************************

<html>
    <head>
        <title>Recebe Dados</title>
    </head>
    <body>

        

        <p><font face="Arial, Helvetica, sans-serif" size="3">
            <a href="formularioenvio.html">Algo está errado? Clique aqui para voltar ao formulário</a>
        </font>
    </body>
</html>