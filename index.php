
<!DOCTYPE html>
<html lang="fr" >
  <head>
    <meta charset="utf-8" />
    <title>part4ex2</title>
  </head>
  <body>
    <?php
    function uno($dos = '100' , $tres = '100') {
      if ($dos > $tres)
        return ('Le premier nombre est plus grand');
      elseif ($dos < $tres)
        return ('Le premier nombre est plus petit');
      else
        return ('Les deux nombres sont identiques');
    }
      echo uno ()
    ?>
  </body>
</html>
