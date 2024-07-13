<style>
  html {
    /* font-size: 40pt; */
    /* font-weight: bold; */
    /* text-align: center; */
    /* margin: 30px; */
    /* max-width: 360px; */
  }
  
  .conteudo-primo {
    text-align: center;
    margin: 4px 0px;
  }
  
  form {
    display: flex;
    flex-flow: wrap column;
    width: 100%;
    gap: 8px;
  }
  
  form input[type="submit"] {
    padding: 5px;
    text-transform: uppercase;
  }
  
  input[placeholder] {text-transform: uppercase;
    text-align: center;
    padding: 2px;
  }
</style>

<section class="conteudo-primo">
  <?php

$numero = trim(intval($_GET['numero']));

function primo($numero)
{
  if ($numero < 1) {
    return "Não é primo";
  } 
  
  if ($numero % 2 == 0 && $numero != 2) {
    return "Não é primo";
  }
  
  if ($numero % 3 == 0 and $numero != 3) {
    return "Não é primo";
  } else {
    echo "primo";
  }
  
}
?>

<form action="index.php" method="get" accept-charset="utf-8">
  <input type="number" name="numero" id="numero" value="" placeholder="número Primo?"/>
  <input type="submit" name="" id="" value="enviar" />
</form>

<?php

echo primo($numero);
?>
</section>