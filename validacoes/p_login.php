<?php
$login = $_POST['login'];
$senha = $_POST['senha'];

$query = "SELECT * FROM `usuarios` where `login` = '$login' and `senha` = '$senha'";

$consulta = mysqli_query($conexao, $query);

if(mysqli_num_rows($consulta) == 1){
    $_SESSION['login'] = true;
    $_SESSION['usuario'] = $login;
    sleep(1);
    @header('location: ?pagina=area-cliente');
    echo '<script>window.location.href = "?pagina=area-cliente"</script>';
    exit;
}else{
    @header('location: ?pagina=erro');
    echo '<script>window.location.href = "?pagina=erro"</script>';
    $GLOBALS['errologin'] = true;
    exit;
}
?>