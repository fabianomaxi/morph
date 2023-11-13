<?php 
include_once('cursor.php') ;

$sql = "select * from users where email = '".$_POST['email']."' and password = '".$_POST['password']."' and status = '1' " ;
$c = new Cursor( $sql ) ;
if( $c->linhas() > 0 ) {
    $r = $c->fetch() ;
    $_SESSION['name_session'] = utf8_encode($r['name']) ;

    if( $r['photo'] == '' ){
        $_SESSION['photo_session'] = 'assets/images/lg/avatar3.jpg' ;
    }else{ 
        $_SESSION['photo_session'] = "../painel-base/_lib/file/img/foto_usuario/" . $r['photo'] ;
    }  

    $_SESSION['id_users_session'] = $r['id_users'] ;
    $_SESSION['profile_session'] = $r['id_profile'] ;
    $_SESSION['is_admin_session'] = 0 ;

    $sql = "select * from profiles where id_profile = ".$r['id_profile']." " ;
    $c2 = new Cursor($sql) ;
    if( $c2->linhas() > 0 ){
        $r2 = $c2->fetch() ;
        $_SESSION['is_admin_session'] = $r2['is_admin'] ;
        $_SESSION['is_admin_yh_session'] = $r2['is_admin_yh'] ;
    }

    jsLocation( "dashboard.php" ) ;
} else {
    jsAlertLocation( "index.php", "Login ou Senha Inválidos." ) ;
}