<?php #include('componentes/header.php');  ?>
<br><br>
<form style="text-align: center;" action="validacoes/p_cadastro.php" method="POST">
    <label for="">Login</label><br>
    <input name="login" placeholder="Login" type="text"><br>
    <label for="">Senha</label><br>
    <input name="senha" placeholder="Senha" type="password"><br><br>
    <button type="submit">CADASTRAR</button>
</form>