<?php 

include_once('../cursor.php') ;

$sql = " update projects set 
        status = ".$_POST['nStatus']." 
        where id_projects = ".$_POST['id_projects']." " ;
$c = new Cursor( $sql );

echo '1' ;