<?php
defined('BASEPATH') OR exit('nao e permitido o asseso direto !');
?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>login</title>
    <link rel="stylesheet" href='<?php echo'extra/estilos.css'?>'>
    <script src="<?php echo'extra/js/code.js'?>"></script>
</head>
<body>
<div id="container">
	<h1>com-pre</h1>
    <form id='entrada' action="">
    <img id='icone' src="<?php echo base_url('extra/icone.png')?>" alt="">
        <div>seu EMAIL
        <input type="text" name="email"></div>
        <div>seu Senha
        <input type="text" name="senha"></div>
     <a id='conta' href="<?php echo site_url('primeiro/conta')?>">criar conta</a>
     </form>
     <a id='sobrelink' href="<?php echo site_url('primeiro/mais')?>">?</a>
</body>
</html>