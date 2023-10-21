<html>
    <head>
        <title>Formão site</title>
    </head>
<body>    
<h1>Site demostração formulário - Formão</h1>

<?php 
    if (isset($_POST["nome"]))
    {
        $frase1 = "Seja bem vindo " . $_POST['nome'];
        $frase2 = " Obrigado logo entraremos em contato pelo email " . $_POST['email'];
        echo "<font font-size: 18px; font-family: 'georgia'; font-weight: bold; text-align: center;>". $frase1 . "</font><br>";
        echo "<font font-size: 18px; font-family: 'georgia'; font-weight: bold; text-align: center;>". $frase2 . "</font><br>";
?>
    <br>
    <a href=index.php>
    <input type=submit value=voltar  />
    </a>
<?php
    }
    else 
    { 
?>
<h2 style="color: green;">Preencha o formulário</h2>
<form action=index.php method=POST>
<table border=0>
    <tr>
        <th>Nome: <input name=nome type=text value=kakaroto /></th>
    </tr>
    <tr>
        <th>E-mail: <input name=email type=text value=kakaroto@kakaroto.com /></th>
    </tr>
    <tr>
        <th>
            <input name=enviar type=submit value=Enviar style="background-color: green; color: white" />
            <input name=cancelar type=button value=Cancelar style="background-color: green; color: white" />
        </th>
    <tr>
</table>
</form>

<?php 
    } 
?>
</body>
</html>



