<?php
// Переменные для первой таблицы
$a1 = 0;
$b1 = 0;
$a2 = 0;
$b2 = 1;
$a3 = 1;
$b3 = 0;
$a4 = 1;
$b4 = 1;

// Переменные для второй и третьей таблиц
$c1 = true;
$c2 = false;
$c3 = 1;
$c4 = 0;
$c5 = -1;
$c6 = "1";
$c7 = null;
$c8 = "php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Задание Модуль 11</title>
  <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
 <body>
   <!--Первая таблица-->
    <table class='tableOne'>
      <caption><h2>Таблица истинности PHP</h2></caption>
     <thead>
          <tr>
             <th><strong>A</strong></th>
             <th><strong>B</strong></th>
             <th><strong>!A</strong></th>
             <th><strong>A || B</strong></th>
             <th><strong>A && B</strong></th>
             <th><strong>A xor B</strong></th>
         </tr>
     </thead>
     <tbody>
         <tr>
             <td><?php echo $a1?></td>
             <td><?php echo $b1?></td>
             <td><?php var_dump (!$a1)?></td>
             <td><?php var_dump ($a1 || $b1)?></td>
             <td><?php var_dump ($a1 && $b1)?></td>
             <td><?php var_dump ($a1 xor $b1)?></td>
         </tr>
         <tr>
             <td><?php echo $a2?></td>
             <td><?php echo $b2?></td>
             <td><?php var_dump (!$a2)?></td>
             <td><?php var_dump ($a2 || $b2)?></td>
             <td><?php var_dump ($a2 && $b2)?></td>
             <td><?php var_dump ($a2 xor $b2)?></td>
         </tr>
         <tr>
             <td><?php echo $a3?></td>
             <td><?php echo $b3?></td>
             <td><?php var_dump (!$a3)?></td>
             <td><?php var_dump ($a3 || $b3)?></td>
             <td><?php var_dump ($a3 && $b3)?></td>
             <td><?php var_dump ($a3 xor $b3)?></td>
         </tr>
         <tr>
             <td><?php echo $a4?></td>
             <td><?php echo $b4?></td>
             <td><?php var_dump (!$a4)?></td>
             <td><?php var_dump ($a4 || $b4)?></td>
             <td><?php var_dump ($a4 && $b4)?></td>
             <td><?php var_dump ($a4 xor $b4)?></td>
         </tr>
     </tbody>
 </table>

 <!--Вторая таблица-->

 <table class='tableTwo'>
    <caption><h2>Гибкое сравнение в PHP</h2></caption>
     <thead>
          <tr>
             <th></th>
             <th><strong>true</strong></th>
             <th><strong>false</strong></th>
             <th><strong>1</strong></th>
             <th><strong>0</strong></th>
             <th><strong>-1</strong></th>
             <th><strong>"1"</strong></th>
             <th><strong>null</strong></th>
             <th><strong>"php"</strong></th>
         </tr>
     </thead>     
     <tbody>
             <tr>
                <td id="column"><strong>true</strong></td>
                <td><?php var_dump($c1==$c1)?></td>
                <td><?php var_dump($c1==$c2)?></td>
                <td><?php var_dump($c1==$c3)?></td>
                <td><?php var_dump($c1==$c4)?></td>
                <td><?php var_dump($c1==$c5)?></td>
                <td><?php var_dump($c1==$c6)?></td>
                <td><?php var_dump($c1==$c7)?></td>
                <td><?php var_dump($c1==$c8)?></td>
             </tr>
             <tr>
                <td id="column"><strong>false</strong></td>
                <td><?php var_dump($c2==$c1)?></td>
                <td><?php var_dump($c2==$c2)?></td>
                <td><?php var_dump($c2==$c3)?></td>
                <td><?php var_dump($c2==$c4)?></td>
                <td><?php var_dump($c2==$c5)?></td>
                <td><?php var_dump($c2==$c6)?></td>
                <td><?php var_dump($c2==$c7)?></td>
                <td><?php var_dump($c2==$c8)?></td>
             </tr>
             <tr>
                <td id="column"><strong>1</strong></td>
                <td><?php var_dump($c3==$c1)?></td>
                <td><?php var_dump($c3==$c2)?></td>
                <td><?php var_dump($c3==$c3)?></td>
                <td><?php var_dump($c3==$c4)?></td>
                <td><?php var_dump($c3==$c5)?></td>
                <td><?php var_dump($c3==$c6)?></td>
                <td><?php var_dump($c3==$c7)?></td>
                <td><?php var_dump($c3==$c8)?></td>
             </tr>
             <tr>
                <td id="column"><strong>0</strong></td>
                <td><?php var_dump($c4==$c1)?></td>
                <td><?php var_dump($c4==$c2)?></td>
                <td><?php var_dump($c4==$c3)?></td>
                <td><?php var_dump($c4==$c4)?></td>
                <td><?php var_dump($c4==$c5)?></td>
                <td><?php var_dump($c4==$c6)?></td>
                <td><?php var_dump($c4==$c7)?></td>
                <td><?php var_dump($c4==$c8)?></td>
             </tr>
             <tr>
                <td id="column"><strong>-1</strong></td>
                <td><?php var_dump($c5==$c1)?></td>
                <td><?php var_dump($c5==$c2)?></td>
                <td><?php var_dump($c5==$c3)?></td>
                <td><?php var_dump($c5==$c4)?></td>
                <td><?php var_dump($c5==$c5)?></td>
                <td><?php var_dump($c5==$c6)?></td>
                <td><?php var_dump($c5==$c7)?></td>
                <td><?php var_dump($c5==$c8)?></td>
             </tr>
             <tr>
                <td id="column"><strong>"1"</strong></td>
                <td><?php var_dump($c6==$c1)?></td>
                <td><?php var_dump($c6==$c2)?></td>
                <td><?php var_dump($c6==$c3)?></td>
                <td><?php var_dump($c6==$c4)?></td>
                <td><?php var_dump($c6==$c5)?></td>
                <td><?php var_dump($c6==$c6)?></td>
                <td><?php var_dump($c6==$c7)?></td>
                <td><?php var_dump($c6==$c8)?></td>
             </tr>
             <tr>
                <td id="column"><strong>null</strong></td>
                <td><?php var_dump($c7==$c1)?></td>
                <td><?php var_dump($c7==$c2)?></td>
                <td><?php var_dump($c7==$c3)?></td>
                <td><?php var_dump($c7==$c4)?></td>
                <td><?php var_dump($c7==$c5)?></td>
                <td><?php var_dump($c7==$c6)?></td>
                <td><?php var_dump($c7==$c7)?></td>
                <td><?php var_dump($c7==$c8)?></td>
             </tr>
             <tr>
                <td id="column"><strong>"php"</strong></td>
                <td><?php var_dump($c8==$c1)?></td>
                <td><?php var_dump($c8==$c2)?></td>
                <td><?php var_dump($c8==$c3)?></td>
                <td><?php var_dump($c8==$c4)?></td>
                <td><?php var_dump($c8==$c5)?></td>
                <td><?php var_dump($c8==$c6)?></td>
                <td><?php var_dump($c8==$c7)?></td>
                <td><?php var_dump($c8==$c8)?></td>
             </tr>
     </tbody>
 </table>

  <!--Третья таблица-->

  <table class='tableTwo'>
    <caption><h2>Жёсткое сравнение в PHP</h2></caption>
     <thead>
          <tr>
             <th></th>
             <th><strong>true</strong></th>
             <th><strong>false</strong></th>
             <th><strong>1</strong></th>
             <th><strong>0</strong></th>
             <th><strong>-1</strong></th>
             <th><strong>"1"</strong></th>
             <th><strong>null</strong></th>
             <th><strong>"php"</strong></th>
         </tr>
     </thead>     
     <tbody>
             <tr>
                <td id="column"><strong>true</strong></td>
                <td><?php var_dump($c1===$c1)?></td>
                <td><?php var_dump($c1===$c2)?></td>
                <td><?php var_dump($c1===$c3)?></td>
                <td><?php var_dump($c1===$c4)?></td>
                <td><?php var_dump($c1===$c5)?></td>
                <td><?php var_dump($c1===$c6)?></td>
                <td><?php var_dump($c1===$c7)?></td>
                <td><?php var_dump($c1===$c8)?></td>
             </tr>
             <tr>
                <td id="column"><strong>false</strong></td>
                <td><?php var_dump($c2===$c1)?></td>
                <td><?php var_dump($c2===$c2)?></td>
                <td><?php var_dump($c2===$c3)?></td>
                <td><?php var_dump($c2===$c4)?></td>
                <td><?php var_dump($c2===$c5)?></td>
                <td><?php var_dump($c2===$c6)?></td>
                <td><?php var_dump($c2===$c7)?></td>
                <td><?php var_dump($c2===$c8)?></td>
             </tr>
             <tr>
                <td id="column"><strong>1</strong></td>
                <td><?php var_dump($c3===$c1)?></td>
                <td><?php var_dump($c3===$c2)?></td>
                <td><?php var_dump($c3===$c3)?></td>
                <td><?php var_dump($c3===$c4)?></td>
                <td><?php var_dump($c3===$c5)?></td>
                <td><?php var_dump($c3===$c6)?></td>
                <td><?php var_dump($c3===$c7)?></td>
                <td><?php var_dump($c3===$c8)?></td>
             </tr>
             <tr>
                <td id="column"><strong>0</strong></td>
                <td><?php var_dump($c4===$c1)?></td>
                <td><?php var_dump($c4===$c2)?></td>
                <td><?php var_dump($c4===$c3)?></td>
                <td><?php var_dump($c4===$c4)?></td>
                <td><?php var_dump($c4===$c5)?></td>
                <td><?php var_dump($c4===$c6)?></td>
                <td><?php var_dump($c4===$c7)?></td>
                <td><?php var_dump($c4===$c8)?></td>
             </tr>
             <tr>
                <td id="column"><strong>-1</strong></td>
                <td><?php var_dump($c5===$c1)?></td>
                <td><?php var_dump($c5===$c2)?></td>
                <td><?php var_dump($c5===$c3)?></td>
                <td><?php var_dump($c5===$c4)?></td>
                <td><?php var_dump($c5===$c5)?></td>
                <td><?php var_dump($c5===$c6)?></td>
                <td><?php var_dump($c5===$c7)?></td>
                <td><?php var_dump($c5===$c8)?></td>
             </tr>
             <tr>
                <td id="column"><strong>"1"</strong></td>
                <td><?php var_dump($c6===$c1)?></td>
                <td><?php var_dump($c6===$c2)?></td>
                <td><?php var_dump($c6===$c3)?></td>
                <td><?php var_dump($c6===$c4)?></td>
                <td><?php var_dump($c6===$c5)?></td>
                <td><?php var_dump($c6===$c6)?></td>
                <td><?php var_dump($c6===$c7)?></td>
                <td><?php var_dump($c6===$c8)?></td>
             </tr>
             <tr>
                <td id="column"><strong>null</strong></td>
                <td><?php var_dump($c7===$c1)?></td>
                <td><?php var_dump($c7===$c2)?></td>
                <td><?php var_dump($c7===$c3)?></td>
                <td><?php var_dump($c7===$c4)?></td>
                <td><?php var_dump($c7===$c5)?></td>
                <td><?php var_dump($c7===$c6)?></td>
                <td><?php var_dump($c7===$c7)?></td>
                <td><?php var_dump($c7===$c8)?></td>
             </tr>
             <tr>
                <td id="column"><strong>"php"</strong></td>
                <td><?php var_dump($c8===$c1)?></td>
                <td><?php var_dump($c8===$c2)?></td>
                <td><?php var_dump($c8===$c3)?></td>
                <td><?php var_dump($c8===$c4)?></td>
                <td><?php var_dump($c8===$c5)?></td>
                <td><?php var_dump($c8===$c6)?></td>
                <td><?php var_dump($c8===$c7)?></td>
                <td><?php var_dump($c8===$c8)?></td>
             </tr>
     </tbody>
 </table>
</body>
</html>