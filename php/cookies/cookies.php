<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php

$_SESSION["favcolor"]= "red";
$_SESSION["favfruit"]= "mango";
print_r($_SESSION);

?>

  
</body>
</html>