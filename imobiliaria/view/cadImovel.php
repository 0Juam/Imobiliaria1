<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Usuário</title>
</head>
<body>
<form name="cadImovel" id="cadImovel" action="" method="post">
Descrição:<br/> <input type="text" name="descricao" id="descricao"><br/>
Valor: <br/><input type="number" name="valor" id="valor"><br/>  
Tipo: <select name="tipo" id="tipo">
   <option value="V">Venda</option>
   <option value="A">Aluguel</option>
   </select><br/><br/>
   <input type="submit" name="btnSalvar" id="btnSalvar">
   </form>

   <?php
   if(isset($_POST['btnSalvar'])){
       require_once '../controller/ImovelController.php';
       call_user_func(array('ImovelController','salvar'));
   }
   ?>
</body>
</html>