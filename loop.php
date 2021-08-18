<?php
$counter  = 1;
echo "while loop<br>";
while($counter<=10)
{
    echo "ProgrammingLanguage<br>"; 
    $counter++;
}
echo "do while loop<br>";
do{
    echo "ProgrammingLanguage<br>"; 
    $counter++;
}
while($counter<=10);
$counter = 1;
echo "for loop"; 
for($counter=1;$counter<=10;$counter++){
    echo "ProgrammingLanguage<br>"; 
}
$arrayexample = array('Amirtha', 'Shwathi');

echo "Foreach executeted<br>";
foreach($arrayexample as $arrayexample){
    echo $arrayexample.'<br>';
}
?>