<div class="conteudo-contador">
      <?php
        for ($i = 1; $i <= 100; $i++) {
          if ($i % 3 == 0) {
            echo "[$i = Fizz] - ";
          }
          if ($i % 5 == 0) {
            echo "[$i = Buzz] - ";
          }
          if ($i % 3 == 0 && $i % 5 == 0) {
            echo "[$i = FizzBuzz] - ";
          }
        }
      ?>
</div> 