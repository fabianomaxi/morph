<?php 

include_once('../cursor.php') ;

$sql = " update tasks set 
        progress_evolution = ".$_POST['progress_evolution']." 
        where id_tasks = ".$_POST['id_tasks']." " ;
$c = new Cursor( $sql );

echo '1' ;