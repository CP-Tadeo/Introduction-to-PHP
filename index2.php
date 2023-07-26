<!DOCTYPE html>
<html>
<head>
  <title>Norby Tadeo PHP</title>
</head>
<body>
  <h1>Norby Tadeo PHP</h1>
  <pre>
   |-   |
   | -  |
   |  - |
   |   -|
  </pre>
  <?php
  $name = 'Norby Tadeo';
  $sha256 = hash('sha256', $name);
  echo "SHA256 of name '$name': $sha256";
  ?>
</body>
</html>
