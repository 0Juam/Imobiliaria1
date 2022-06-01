<h1>Imovel</h1>
<hr>
<div>
   <table style="top:40px;">
   <thead>
      <tr>
         <th>Descricao</th>
         <th>Valor</th>
         <th>Tipo</th>
         <th><a href="cadImovel">Novo</th>
      </tr>  
    </thead>
    <tbody>
       <?php
       require_once '../controller/ImovelController.php';
       $imovel = call_user_func(array('ImovelController','listar'));
       if(isset($imovel)){
           foreach ($imovel as $imovel){
               ?>
               <tr>
                  <td><?php echo $imovel->getDescricao(); ?></td>
                  <td><?php echo $imovel->getValor(); ?></td>
                  <td><?php echo $imovel->getTipo(); ?></td>
                  <td>
                     <a href="">Editar</a>
                     <a href="">Excluir</a>
                  </td>
               </tr>
               <?php

           }
       } else{
           ?>
           <tr>
             <td colspan="5">Nenhum registro encontrado</td>
           </tr>
           <?php
       }
       ?>
       </tbody>
       </table>
       </div>
       ?>