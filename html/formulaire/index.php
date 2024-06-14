<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="iconne/fontawesome-free-6.5.2-web/css/all.min.css">
   <link href="modifie.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
<a href="form.html">
<i class="fa fa-plus">ajouter</i>
</a>
<?php 
//session_start();


   include "config.php";

   $selection=pg_query($connect,"select * from personne ");
?>
   <table>
             <tr>
                <th>nom </th>
                <th>prenom</th>
                <th> age</th> 
                <th> update </th> 
                <th> delete</th> 
            </tr>
        <?php
            while ($row = pg_fetch_row($selection)) {
         ?>
    
          <tr>
               <td><?php echo $row[1]; ?> </td>
                <td ><?php echo $row[2];?></td>
                <td> <?php echo $row[3];?> </td>
                <td>
                  
                <a href="modifier.php?id= <?php  echo $row[0];?>"><i class="fa fa-pen"></i></a>
                
               
               
               </td>
                <td> 
                <a href="delete.php?id= <?php  echo $row[0];?>">
                  <i class="fa fa-trash"></i></td>
                
            </tr>
  <?php }
?>
 </table>
</div>


</body>
</html>














