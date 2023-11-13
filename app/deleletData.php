<?php 
include_once('cursor.php') ;

$sql = "delete from tasks where id_tasks = ".intval($_POST['idDelete'])." " ; 
$c = new Cursor( $sql );

jsLocation( "list_tasks.php?i=" . intval($_POST['idDelete']) ) ;