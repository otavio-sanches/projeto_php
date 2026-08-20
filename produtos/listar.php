<?php include 'verifica_login.php'; ?>
<?php include '../cabecalho.php'; ?>
<link rel="stylesheet" href="../css/style.css">
<main>
 <p>Bem-vindo(a), <?php echo $_SESSION['usuario_nome']; ?>!</p>
 <!-- conteúdo da página -->
</main>
<?php include '../rodape.php'; ?>