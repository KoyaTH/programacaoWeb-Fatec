<?php
setcookie("cor_usuario", "", time()-3600);
setcookie("idioma_usuario", "", time()-3600);
header("Location: index.php");
exit();

?>