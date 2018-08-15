
<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <title>Certificado Online</title>
    <meta name="Author" content="Eduardo Henrique">
    <meta name="Description" content="Sistema gerador de certificados com banco de dados">
    <meta name="Keywords" content="Gerador, Sistema, Certificado">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/dev-icon.png"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    </head>
<body>
        
<div class="box-login">    
<div class="thumb">
<div class="trigger-box">
<span class="box-info trigger-infor">
Gerador de Certificado
</span>
</div>
</div>

<div class="form-box">
<form action="certificate/certificate.php" class="form" method="post">
    <span class="text-input">Informe seu CPF: (sem pontos e sem traço)</span>
    <input type="text" name="cpf" class="input" maxlength="11">
    <button type="submit" class="btn">Gerar Certificado</button>
</form>

</div>                  
</div>         
</body>
</html>
