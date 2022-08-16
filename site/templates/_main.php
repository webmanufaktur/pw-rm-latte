<?php namespace ProcessWire;

/** @var RockFrontend $rockfrontend */
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
    echo $rockfrontend->styles()
    ->add('/site/templates/styles/tailwind.css')
    ->render();
  ?>
</head>
<body class="bg-black">
<?php
 echo $rockfrontend->render("sections/header");
 echo $rockfrontend->renderLayout($page);
 echo $rockfrontend->render("sections/footer");
?>
</body>
</html>
