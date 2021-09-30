<?php
include('componentes/header.php');
include('componentes/db.php');

if(isset($_GET['pagina'])){
    $pagina = $_GET['pagina'];
    switch($pagina){
    case 'home': include('home.php'); break;
    case '': include('home.php'); break;
    case 'login': include('login.php'); break;
    case 'area-cliente': include('area-cliente.php'); break;
    case 'p_login': include('validacoes/p_login.php'); break;
    case 'p_cadastro': include('validacoes/p_cadastro.php'); break;
    case 'logout': include('validacoes/logout.php'); break;
    case 'cadastro': include('cadastro.php'); break;
    case 'erro': include('login.php'); break;
    }
}
else{
    @header("Location: ?pagina=home");
    echo '<script>window.location.href = "?pagina=home"</script>';
}


include('componentes/footer.php');
