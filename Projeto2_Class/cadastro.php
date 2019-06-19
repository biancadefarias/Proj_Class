<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Resultado do Cadastro</title>
  <style type="text/css">
    *{
      background: #F5DEB3;
      width: 300px;
    }
    fieldset{
      color: #696969;
      margin-left: 600px;
      border-radius: 10%;
    }
  </style>
</head>
<body>
  <?php
   
   $login = $_POST["login"];
   $senha = $_POST["senha"];
   
   echo "<fieldset><legend><center><h3>Cadastro</h3></center></legend>";
   echo "<br>";
   echo "<b>Parabéns o seu cadastro foi feito com sucesso!</b>";
   echo "<br>";
   echo "<b>Seu login é $login</b>";
   echo "<br>";
   echo "<b>Sua senha é ******</b>";
  
   
   echo "</fieldset>";

  ?>
</body>
</html>