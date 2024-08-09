<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  
    <title></title>
    <style type="text/css" media="all">
      .conteudo-palindromo {
        display: flex;
        flex-flow: wrap column;
        max-width: 360px;
        align-items: center;
        justify-content: center;
        font-size: 20pt;
      }
    </style>
  </head>
  <body>
    <section class="conteudo-palindromo">
      
      <form action="palindromo.php" method="get" accept-charset="utf-8">
        <input type="text" name="txt" placeholder="Digite texto">
        <input type="submit" value="Comparar">
      </form>
      <?php
      function palindromo($str): bool
      {
        $palind = str_split($str);
        $length = count($palind);

        // iterar o array até sua metade do seu tamanho
        for ($i = 0; $i < $length / 2; $i++) {
          // comparo se a primeira metade é igual a segundaetade
          if ($palind[$i] != $palind[$length - 1 - $i]) {
            return false;
          }
        }
        return true;
      }

      echo palindromo($_GET['txt']) ? "É palindromo" : "Não é palindromo";
      ?>
    </section>
  </body>
</html>