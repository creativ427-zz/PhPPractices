<?php 
/* learning array_search
   can be written in two formats
*/
//format1=using tag name array-indexed
$numbers = array(1,2,3,4,5);
echo$numbers[0];
echo$numbers[1];
echo$numbers[2];
echo$numbers[3];
echo$numbers[4];
echo'<br>';

//format2=using square brackets-associative arrays
echo'<br>';
$names = ['polly'=> 23,'trey'=> 35,'terry'=> 40,'mucky'=>27];
echo$names['polly'];echo'<br>';
echo$names['trey'];echo'<br>';
echo$names['terry'];echo'<br>';
echo$names['mucky'];echo'<br>';

//multidimensional arrays
echo'<br>';
$people = array(
    array('purity',20,'slim'),
    array('joe', 30,'fat'),
    array('joy',25,'thick'),
);
echo$people[2][0];
//print_r($people);



