<?php
defined('BASEPATH') OR exit('nao e permitido o asseso direto !');
?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>login</title>
    <link rel="" href=<?php echo"extra/css/estilos.css"?>>
<style>
   #entrada{
      background-color: rgb(116, 121, 107);
     width:200px;
     height:500px;
     position:absolute;
     left:43%;
     }
     div{
     margin:20px 20px 20px 20px;
       }
     body{
     background-color: rgb(70, 68, 68);
     color: white;
     font-family: Arial, Helvetica, sans-serif;
     }
     #icone{
     width:100px;
     height:100px;
     margin:50px;
     }
     #direcao{
     margin-left:50px;
     }
     #ir{
     width:50px;
     height:25px;
     border:solid 0px;
      }
     #ir:hover{
     width:50px;
     height:25px;
     border:solid 0px;
     background-color: blueviolet;
     }
     #re{
     width:50px;
     height:25px;
     border:solid 0px;
     }
     #re:hover{
    width:50px;
    height:25px;
    border:solid 0px;
    background-color: blueviolet;
    }
     #so{
     position:absolute;
     top:600px;
     left:95%;
     background-color: rgb(62, 62, 63);
     border:solid 0px ;
     color: white;
     font-size:17px;
     }
     input{
     font-size:18px;
     width:150px;
      border:solid 0px cornflowerblue;
     }

</style>
    <script src="<?php echo'extra/js/code.js'?>"></script>
</head>
<body>
<div id="container">
	<h1>com-pre</h1>
    <form id='entrada' action="">
        <div>seu nome
        <input id='' type='text'></div>
        <div>seu EMAIL
        <input type="text" name="email"></div>
        <div>seu Senha
        <input type="text" name="senha"></div>
        <div id='direcao'>
        <a href='<?php echo base_url('')?>'><input id='ir' type='button' value='volta'></a>
        <a><input id='ir' type='submit' value='volta'></a>
         </div>
         </form>
</body>
</html>
