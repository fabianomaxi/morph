<?php 

include_once('../cursor.php') ;

$sql = " update tasks set 
        id_prioriy = ".$_POST['id_prioriy']." 
        where id_tasks = ".$_POST['id_tasks']." " ;
$c = new Cursor( $sql );

echo '1' ;