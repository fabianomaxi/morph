<?php 
include_once('../cursor.php') ;


// atualiza data da tarefa filha
$sql = "select * from tasks where id_tasks = ".$_POST['id_task_main']." " ;
$c = new Cursor( $sql );
if( $c->linhas() > 0 ) {
    $r = $c->fetch() ;
    $nTsStartDefault =  $r['ts_finihed_default'] ;
    $tsFinihedDefault = date('Y-m-d H:i:s',strtotime('+'.$_POST['days'].' days',strtotime($r['ts_finihed_default']))) ;
}

$sql = " update tasks set 
            id_tasks_deppend = ".$_POST['id_task_main'].",
            ts_start_default = '".$nTsStartDefault."'   ,
            ts_finihed_default  = '".$tsFinihedDefault."' 
        where id_tasks = ".$_POST['id_tasks']." " ;

$c = new Cursor( $sql );

updateDates( $_POST['id_tasks'] ) ;

function updateDates( $id_tasks ) {

    // atualiza data das tarefas dependenetes dessa
    $sql = "select * from tasks where id_task_main = ".$id_tasks." " ;

    $c = new Cursor( $sql );
    if( $c->linhas() > 0 ) {
        while(!$c->eof()){
            
            $r = $c->fetch() ;

            $data1 = new DateTime(date('Y-m-d',strtotime($r['ts_finihed_default'])));
            $data2 = new DateTime(date('Y-m-d',strtotime($r['ts_start_default'])));
            $diferenca = $data1->diff($data2);
            
            $nTsStartDefault =  $r['ts_finihed_default'] ;
            $tsFinihedDefault = date('Y-m-d H:i:s',strtotime('+'.$diferenca->days.' days',strtotime($r['ts_finihed_default']))) ;

            $sql = "update 
                    tasks set 
                        id_tasks_deppend = ".$_POST['id_task_main'].",
                        ts_start_default = '".$nTsStartDefault."'   ,
                        ts_finihed_default  = '".$tsFinihedDefault."' 
                    where 
                        id_tasks = ".$id_tasks." 
            " ;

            $c22 = new Cursor( $sql );

        }
    }

}



echo '1' ;