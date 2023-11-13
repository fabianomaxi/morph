<?php 

include_once('../cursor.php') ;

$sql = " update tasks set 
        situation = ".$_POST['id_task_situation']." 
        where id_tasks = ".$_POST['id_tasks']." " ;
$c = new Cursor( $sql );

echo '1' ;