<?php
if(isset($_SESSION['login'])){
    header("location: area-cliente");
    echo '<script>window.location.href = "?pagina=area-cliente";</script>';
}
else{
    echo '<div id="conteudo"><br><br><br><br><form action="?pagina=p_login" method="POST"><label><h1>Entrar</h1></label><br><div style="width: 60%; margin:auto;" class="input-group flex-nowrap">
    <span class="input-group-text" id="addon-wrapping">@</span>
    <input  name="login" type="text" class="form-control" placeholder="Usuário" aria-label="Username" aria-describedby="addon-wrapping">
    </div><br><br><div style="width: 60%; margin:auto;" class="input-group flex-nowrap">
    <span class="input-group-text" id="addon-wrapping"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
    <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
    <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
    </svg></span>
    <input name="senha" type="password" class="form-control" placeholder="Senha" aria-label="Username" aria-describedby="addon-wrapping">
    </div><br><br><button style="color: white"; type="submit" class="btn btn-info">Entrar</button></form>';
}
$pagina = $_GET['pagina'];
if($pagina == 'erro'){
    echo '<br><div style="width: 60%; margin: auto; text-align:center;" class="alert alert-warning d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
    <div style="text-align: center; width: 100%;">
      Credenciais incorretas ou inexistentes!
    </div>
  </div>';
}
?> 
<br>
</div>