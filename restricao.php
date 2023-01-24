<?php
   
  // A sessão precisa ser iniciada em cada página diferente
  session_start();
   
  // Verifica se não há a variável da sessão que identifica o usuário
  if (!isset($_SESSION["logado"])) {
      session_start();
      // Destrói a sessão por segurança
      session_destroy();
      // Redireciona o visitante de volta pro login
      header("Location: login.php"); exit;
  }
   
  ?>