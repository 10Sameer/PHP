<?php
 $emp=array(
     array(1,"Ram",400000),array(2,"Shyam",500000),array(3,"Sita",380000)
     
 );
 for($row=0;$row<3;$row++){
  for($col=0;$col<3;$col++){
     echo $emp [$row] [$col]." ";
}
   echo"\n";
}
 ?> 
