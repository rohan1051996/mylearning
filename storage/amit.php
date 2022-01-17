<?php
session_start()
?>
<?php
echo "====".$_SESSION['name'];

print"<pre>";
print_r($_SESSION['name']['FRIEND'][1]);
?>