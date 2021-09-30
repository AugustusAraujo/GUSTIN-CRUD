<?php
unset($_SESSION['login']);
unset($_SESSION['usuario']);
@header("location: ?pagina=home");
echo '<script>window.location.href = "?pagina=home"</script>' ;
exit;
?>