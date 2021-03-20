<?php
   /* 
   for loop
   while loop
   do..while loop
   foreach loop
   */

   //for loop
   echo 'For loop: ';
   echo '<br>';
   for($i=0; $i<=5; $i++){
       echo $i;
       echo '<br>';
   }
   echo '<br>';
   
   
   //while loop'
   echo 'This is a While loop: ';
   echo '<br>';
   $i = 0;
   while($i<=5){
    echo $i;
    echo '<br>';
    $i++;
   }
   echo '<br>';

   //do..while loop
   echo 'This is a do...while loop: ';
   echo '<br>';
   $i = 0;
   do{
    echo 'Number: ',$i;
    echo '<br>';
    $i++;
   } 
   while($i<=5);
   echo '<br>';
   

   //foreach loop
   echo 'This is a foreach loop: ';
   echo '<br>';
   $names = ['purity','keter','cheptoo','kanda'];
   foreach($names as $name){
       echo $name;
       echo '<br>';
   }
   echo '<br>';
?>