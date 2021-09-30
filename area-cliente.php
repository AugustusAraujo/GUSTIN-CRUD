<?php
if($_SESSION['login'] == false){
    echo '<script>window.location.href = "?pagina=home";</script>';
    exit;
}

if($_SESSION['usuario'] == 'admin'){
    include('view/admin_view.php');
}else{
    include('view/cliente_view.php');
}