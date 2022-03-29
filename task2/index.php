<?php

$b="CASE:";

$a=$_GET['command'];

$o=ltrim($a,"OPEN");
$dir=array("C:\");

$new_dir=array();

if( is_int($a) && ($a<=60) )

{

echo $b.$a;

}

if($o)

{
    
array_push($dir,$o);
    
$new_dir=$dir;
    
echo $o;

}

if($a == "QUIT")

{

echo "<script> window.close();</script>";

}


if($a == "BACK")

{ 

if(count($dir)>0)

{
    
array_pop($dir);
    
$l=count($dir);
    
$ln=$l-1;
    
echo $dir[$ln];

}

else

{
    
echo "Ignored";

}
    


}



?>