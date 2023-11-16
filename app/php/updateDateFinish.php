<?php 

include_once('../cursor.php') ;

$sql = " update tasks set 
        ts_finihed_default = '".$_POST['date']."' 
        where id_tasks = ".$_POST['id_tasks']." " ;
        $c = new Cursor( $sql );

echo '1' ;