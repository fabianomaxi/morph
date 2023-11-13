<?php 

include_once('../cursor.php') ;

$sql = " update tasks set 
        status = ".$_POST['id_task_status']." 
        where id_tasks = ".$_POST['id_tasks']." " ;
$c = new Cursor( $sql );

echo '1' ;