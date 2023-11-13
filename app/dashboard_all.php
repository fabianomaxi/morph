<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<?php

include_once('cursor.php') ;

?>

<!-- Mirrored from pixelwibes.com/template/my-task/html/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Aug 2023 03:02:08 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Morph - Indicadores </title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <!-- project css file  -->
    <link rel="stylesheet" href="assets/css/my-task.style.min.css">
    <!-- Google Code  -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-264428387-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-264428387-1');
    </script>

<style>
            .container {
                position: relative;
                overflow: hidden;
                width: 100%;
                padding-top: 56.25%; /* 16:9 Aspect Ratio (divide 9 by 16 = 0.5625) */
            }

            /* Then style the iframe to fit in the container div with full height and width */
            .responsive-iframe {
                position: absolute;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                width: 100%;
                height: 100%;
            }
        </style>

</head>
<body>

<div id="mytask-layout" class="theme-indigo">
    
<?php include_once('incs/sidebar.php') ; ?>

    <!-- main body area -->
    <div class="main px-lg-4 px-md-4">

        <!-- Body: Header -->
        <div class="header">
            <nav class="navbar py-4">
                <div class="container-xxl">
    
                    <!-- header rightbar icon -->
                    <div class="h-right d-flex align-items-center mr-5 mr-lg-0 order-1">
                        <div class="d-flex">
                            <a class="nav-link text-primary collapsed" href="help.html" title="Get Help">
                                <i class="icofont-info-square fs-5"></i>
                            </a>
                            <div class="avatar-list avatar-list-stacked px-3">
                                <img class="avatar rounded-circle" src="assets/images/xs/avatar2.jpg" alt="">
                                <img class="avatar rounded-circle" src="assets/images/xs/avatar1.jpg" alt="">
                                <img class="avatar rounded-circle" src="assets/images/xs/avatar3.jpg" alt="">
                                <img class="avatar rounded-circle" src="assets/images/xs/avatar4.jpg" alt="">
                                <img class="avatar rounded-circle" src="assets/images/xs/avatar7.jpg" alt="">
                                <img class="avatar rounded-circle" src="assets/images/xs/avatar8.jpg" alt="">
                                <span class="avatar rounded-circle text-center pointer" data-bs-toggle="modal" data-bs-target="#addUser"><i class="icofont-ui-add"></i></span>
                            </div>
                        </div>
                        <div class="dropdown notifications zindex-popover">
                            <a class="nav-link dropdown-toggle pulse" href="#" role="button" data-bs-toggle="dropdown">
                                <i class="icofont-alarm fs-5"></i>
                                <span class="pulse-ring"></span>
                            </a>
                            <div id="NotificationsDiv" class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-sm-end p-0 m-0">
                                <div class="card border-0 w380">
                                    <div class="card-header border-0 p-3">
                                        <h5 class="mb-0 font-weight-light d-flex justify-content-between">
                                            <span>Notifications</span>
                                            <span class="badge text-white">11</span>
                                        </h5>
                                    </div>
                                    <div class="tab-content card-body">
                                        <div class="tab-pane fade show active">
                                            <ul class="list-unstyled list mb-0">
                                                <li class="py-2 mb-1 border-bottom">
                                                    <a href="javascript:void(0);" class="d-flex">
                                                        <img class="avatar rounded-circle" src="assets/images/xs/avatar1.jpg" alt="">
                                                        <div class="flex-fill ms-2">
                                                            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Dylan Hunter</span> <small>2MIN</small></p>
                                                            <span class="">Added  2021-02-19 my-Task ui/ux Design <span class="badge bg-success">Review</span></span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="py-2 mb-1 border-bottom">
                                                    <a href="javascript:void(0);" class="d-flex">
                                                        <div class="avatar rounded-circle no-thumbnail">DF</div>
                                                        <div class="flex-fill ms-2">
                                                            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Diane Fisher</span> <small>13MIN</small></p>
                                                            <span class="">Task added Get Started with Fast Cad project</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="py-2 mb-1 border-bottom">
                                                    <a href="javascript:void(0);" class="d-flex">
                                                        <img class="avatar rounded-circle" src="assets/images/xs/avatar3.jpg" alt="">
                                                        <div class="flex-fill ms-2">
                                                            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Andrea Gill</span> <small>1HR</small></p>
                                                            <span class="">Quality Assurance Task Completed</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="py-2 mb-1 border-bottom">
                                                    <a href="javascript:void(0);" class="d-flex">
                                                        <img class="avatar rounded-circle" src="assets/images/xs/avatar5.jpg" alt="">
                                                        <div class="flex-fill ms-2">
                                                            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Diane Fisher</span> <small>13MIN</small></p>
                                                            <span class="">Add New Project for App Developemnt</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="py-2 mb-1 border-bottom">
                                                    <a href="javascript:void(0);" class="d-flex">
                                                        <img class="avatar rounded-circle" src="assets/images/xs/avatar6.jpg" alt="">
                                                        <div class="flex-fill ms-2">
                                                            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Andrea Gill</span> <small>1HR</small></p>
                                                            <span class="">Add Timesheet For Rhinestone project</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="py-2">
                                                    <a href="javascript:void(0);" class="d-flex">
                                                        <img class="avatar rounded-circle" src="assets/images/xs/avatar7.jpg" alt="">
                                                        <div class="flex-fill ms-2">
                                                            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Zoe Wright</span> <small class="">1DAY</small></p>
                                                            <span class="">Add Calander Event</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a class="card-footer text-center border-top-0" href="#"> View all notifications</a>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown user-profile ml-2 ml-sm-3 d-flex align-items-center zindex-popover">
                            <div class="u-info me-2">
                                <p class="mb-0 text-end line-height-sm "><span class="font-weight-bold">Dylan Hunter</span></p>
                                <small>Admin Profile</small>
                            </div>
                            <a class="nav-link dropdown-toggle pulse p-0" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static">
                                <img class="avatar lg rounded-circle img-thumbnail" src="assets/images/profile_av.png" alt="profile">
                            </a>
                            <div class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-end p-0 m-0">
                                <div class="card border-0 w280">
                                    <div class="card-body pb-0">
                                        <div class="d-flex py-1">
                                            <img class="avatar rounded-circle" src="assets/images/profile_av.png" alt="profile">
                                            <div class="flex-fill ms-3">
                                                <p class="mb-0"><span class="font-weight-bold">Dylan Hunter</span></p>
                                                <small class="">Dylan.hunter@gmail.com</small>
                                            </div>
                                        </div>
                                        
                                        <div><hr class="dropdown-divider border-dark"></div>
                                    </div>
                                    <div class="list-group m-2 ">
                                        <a href="task.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-tasks fs-5 me-3"></i>My Task</a>
                                        <a href="members.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-ui-user-group fs-6 me-3"></i>members</a>
                                        <a href="ui-elements/auth-signin.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-logout fs-6 me-3"></i>Signout</a>
                                        <div><hr class="dropdown-divider border-dark"></div>
                                        <a href="ui-elements/auth-signup.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-contact-add fs-5 me-3"></i>Add personal account</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <!-- menu toggler -->
                    <button class="navbar-toggler p-0 border-0 menu-toggle order-3" type="button" data-bs-toggle="collapse" data-bs-target="#mainHeader">
                        <span class="fa fa-bars"></span>
                    </button>
    
                    <!-- main menu Search-->
                    <div class="order-0 col-lg-4 col-md-4 col-sm-12 col-12 mb-3 mb-md-0 ">
                        <div class="input-group flex-nowrap input-group-lg">
                            <button type="button" class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></button>
                            <input type="search" class="form-control" placeholder="Search" aria-label="search" aria-describedby="addon-wrapping">
                            <button type="button" class="input-group-text add-member-top" id="addon-wrappingone" data-bs-toggle="modal" data-bs-target="#addUser"><i class="fa fa-plus"></i></button>
                        </div>
                    </div>
    
                </div>
            </nav>
        </div>

        <!-- Body: Body -->
        <div class="body d-flex py-3">

        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header p-0 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold py-3 mb-0">Indicadores</h3>
                    <div class="d-flex py-2 project-tab flex-wrap w-sm-100">
                        <?php  include_once('incs/herade-project.php') ; ?>
                    </div>
                </div>
            </div>
        </div> <!-- Row end  -->
        
            <div class="container-xxl">
                <div class="row clearfix g-3">
                    <div class="col-xl-8 col-lg-12 col-md-12 flex-column">
                        <div class="row g-3">
                            <div class="col-md-12" style="height: 460px !important; margin-bottom: 60px;">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                        <h6 class="mb-0 fw-bold ">Tarefas concluídas por dia</h6>
                                    </div>
                                <div class="card" style="height: 100%;">
                                    
                                    <div class="card-body">
                                        
                                    <iframe class="responsive-iframe" src="../painel-base/finalizadas_por_dia/"></iframe>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" style="height: 460px !important; margin-bottom: 60px;">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                        <h6 class="mb-0 fw-bold ">Riscos por categoria</h6>
                                    </div>

                            <div class="card" style="height: 100%;">
                                    <div class="card-body">
                                    <iframe class="responsive-iframe" src="../painel-base/riscos_categoria/"></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" style="display: none;">
                                <div class="card">
                                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                        <h6 class="mb-0 fw-bold ">Produtividade por Equipe</h6>
                                    </div>
                                    <div class="card-body">
                                        <div id="hiringsources"></div>
                                    </div>
                                </div>
                            </div>

                            

                            <div class="col-md-12" style="display: none;">
                                <div class="card light-danger-bg">
                                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                        <h6 class="mb-0 fw-bold ">Melhores resultados</h6>
                                    </div>
                                    <div class="card-body">
                                         <div class="row g-3 align-items-center">
                                         <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-2">
                                            <p>You have 140 <span class="fw-bold">influencers </span> in your company.</p>
                                            <div class="d-flex  justify-content-between text-center">
                                                <div class="">
                                                    <h3 class="fw-bold">350</h3>
                                                    <span class="small">New Task</span>
                                                </div>
                                                <div class="">
                                                    <h3 class="fw-bold">130</h3>
                                                    <span class="small">Task Completed</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-10">
                                        <div class="row g-3 row-cols-2 row-cols-sm-3 row-cols-md-3 row-cols-lg-3 row-cols-xl-3 row-cols-xxl-6 row-deck top-perfomer">


                                    <?php
                                $sql = "SELECT u.name, u.photo, count(t.id_users) as percent FROM users u inner join tasks t on( u.id_users = t.id_users ) group by t.id_users";
                                    
                                $c = new Cursor( $sql );
                                            
                                if($c->linhas() > 0){
                                    while(!$c->eof()){
                                        $r = $c->fetch();

                                        if( empty($r['photo']) )
                                            $r['photo'] = 'assets/images/lg/avatar2.jpg' ;
                                        else 
                                            $r['photo'] = "../painel-base/_lib/file/img/foto_usuario/" . $r['photo'] ;
                            ?>
                                        <div class="col">
                                                <div class="card shadow">
                                                    <div class="card-body text-center d-flex flex-column justify-content-center">
                                                        <img class="avatar lg rounded-circle img-thumbnail mx-auto" src="<?=$r['photo']?>" alt="profile">
                                                        <h6 class="fw-bold my-2 small-14"><?=$r['name']?></h6>
                                                        <span class="text-muted mb-2">@Short</span>
                                                        <h4 class="fw-bold text-primary fs-3"><?=$r['percent']?></h4>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php
                                            }
                                        }
                                    ?>
</div>
</div>

                                </div>
                            </div>  

                            </div>  

                            </div>  
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12 col-md-12">
                        <div class="row g-3 row-deck">
                            <div class="col-md-6 col-lg-6 col-xl-12">
                                <div class="card bg-primary">
                                    <div class="card-body row" style="background-color: #45c4b0;">
                                        <div class="col">
                                            <span class="avatar lg bg-white rounded-circle text-center d-flex align-items-center justify-content-center"><i class="icofont-listing-box fs-5"></i></span>
                                            <h1 class="mt-3 mb-0 fw-bold text-white">
                                            <?php 
                                                $sql = "select count(0) as total from tasks where id_projects = ".$_GET['i']." " ;
                                                $c = new Cursor( $sql ) ;
                                                $totalTasks = 0 ;
                                                if( $c->linhas() > 0 ){
                                                    $r = $c->fetch() ;
                                                    $totalTasks = $r['total'] ;
                                                }
                                            ?>
                                            <?=$totalTasks?></h1>
                                            <span class="text-white">Tarefas</span>
                                        </div>
                                        <div class="col">
                                            <img class="img-fluid" src="assets/images/interview.svg" alt="interview">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-12  flex-column">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center flex-fill">
                                            <span class="avatar lg light-orange-bg rounded-circle text-center d-flex align-items-center justify-content-center"><i class="icofont-warning fs-5"></i></span>
                                            <div class="d-flex flex-column ps-3  flex-fill">
                                                <h6 class="fw-bold mb-0 fs-4">
                                                    
                                            <?php 
                                                $sql = "select count(0) as total from risks where status = '0' and  id_project = ".$_GET['i']." " ;
                                                $c = new Cursor( $sql ) ;
                                                $totalRiscs = 0 ;
                                                if( $c->linhas() > 0 ){
                                                    $r = $c->fetch() ;
                                                    $totalRiscs = $r['total'] ;
                                                }
                                            ?>
                                                <?=$totalRiscs?></h6>
                                                <span class="text-muted">Riscos em aberto</span>
                                            </div>
                                            <i class="icofont-chart-bar-graph fs-3 text-muted"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center flex-fill">
                                            <span class="avatar lg light-success-bg rounded-circle text-center d-flex align-items-center justify-content-center"><i class="icofont-tick-mark fs-5"></i></span>
                                            <div class="d-flex flex-column ps-3 flex-fill">
                                                <h6 class="fw-bold mb-0 fs-4">
                                                <?php 
                                                $sql = "select count(0) as total from risks where status = '1' and  id_project = ".$_GET['i']." " ;
                                                $c = new Cursor( $sql ) ;
                                                $totalRiscs = 0 ;
                                                if( $c->linhas() > 0 ){
                                                    $r = $c->fetch() ;
                                                    $totalRiscs = $r['total'] ;
                                                }
                                            ?>    
                                                <?=$totalRiscs?></h6>
                                                <span class="text-muted">Riscos concluídos</span>
                                            </div>
                                            <i class="icofont-chart-line fs-3 text-muted"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-12 col-xl-12">
                                <div class="card">
                                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                    <h6 class="mb-0 fw-bold ">Usuários do Projeto</h6>
                                </div>
                                <?php

                                    $sql = "SELECT name, photo,  (select count(0) from tasks t where t.id_users = u.id_users and t.id_projects = ".$_GET['i']." ) as qtd_tasks FROM `users` u ";
                                    $c = new Cursor( $sql );

                                    if($c->linhas() > 0){
                                        while(!$c->eof()){
                                            $r = $c->fetch();

                                            if( empty($r['photo']) )
                                                $r['photo'] = 'assets/images/lg/avatar2.jpg' ;
                                            else 
                                                $r['photo'] = "../painel-base/_lib/file/img/foto_usuario/" . $r['photo'] ;
                                ?>

                                    <div class="card-body">
                                    <div class="flex-grow-1">
                                        <div class="py-2 d-flex align-items-center border-bottom flex-wrap">
                                            <div class="d-flex align-items-center flex-fill">
                                                <img class="avatar lg rounded-circle img-thumbnail" src="<?=$r['photo']?>" alt="profile">
                                                <div class="d-flex flex-column ps-3">
                                                    <h6 class="fw-bold mb-0 small-14"><?=$r['name']?></h6>
                                                    <span class="text-muted">Concluídas</span>
                                                </div>
                                            </div>
                                            <div class="time-block text-truncate">
                                                <?=$r['qtd_tasks']?> Tarefas 
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>

                                <?php
                                        }

                                
                                    }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>

                        

                    
                </div><!-- Row End -->
            </div>
        </div> 
        
        <!-- Modal Members-->
        <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="addUserLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title  fw-bold" id="addUserLabel">Employee Invitation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="inviteby_email">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email address" id="exampleInputEmail1" aria-describedby="exampleInputEmail1">
                            <button class="btn btn-dark" type="button" id="button-addon2">Sent</button>
                        </div>
                    </div>
                    <div class="members_list">
                        <h6 class="fw-bold ">Employee </h6>
                        <ul class="list-unstyled list-group list-group-custom list-group-flush mb-0">
                            <li class="list-group-item py-3 text-center text-md-start">
                                <div class="d-flex align-items-center flex-column flex-sm-column flex-md-column flex-lg-row">
                                    <div class="no-thumbnail mb-2 mb-md-0">
                                        <img class="avatar lg rounded-circle" src="assets/images/xs/avatar2.jpg" alt="">
                                    </div>
                                    <div class="flex-fill ms-3 text-truncate">
                                        <h6 class="mb-0  fw-bold">Rachel Carr(you)</h6>
                                        <span class="text-muted">rachel.carr@gmail.com</span>
                                    </div>
                                    <div class="members-action">
                                        <span class="members-role ">Admin</span>
                                        <div class="btn-group">
                                            <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="icofont-ui-settings  fs-6"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                              <li><a class="dropdown-item" href="#"><i class="icofont-ui-password fs-6 me-2"></i>ResetPassword</a></li>
                                              <li><a class="dropdown-item" href="#"><i class="icofont-chart-line fs-6 me-2"></i>ActivityReport</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item py-3 text-center text-md-start">
                                <div class="d-flex align-items-center flex-column flex-sm-column flex-md-column flex-lg-row">
                                    <div class="no-thumbnail mb-2 mb-md-0">
                                        <img class="avatar lg rounded-circle" src="assets/images/xs/avatar3.jpg" alt="">
                                    </div>
                                    <div class="flex-fill ms-3 text-truncate">
                                        <h6 class="mb-0  fw-bold">Lucas Baker<a href="#" class="link-secondary ms-2">(Resend invitation)</a></h6>
                                        <span class="text-muted">lucas.baker@gmail.com</span>
                                    </div>
                                    <div class="members-action">
                                        <div class="btn-group">
                                            <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                Members
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                              <li>
                                                  <a class="dropdown-item" href="#">
                                                    <i class="icofont-check-circled"></i>
                                                      
                                                    <span>All operations permission</span>
                                                   </a>
                                                   
                                                </li>
                                                <li>
                                                     <a class="dropdown-item" href="#">
                                                        <i class="fs-6 p-2 me-1"></i>
                                                           <span>Only Invite & manage team</span>
                                                       </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="icofont-ui-settings  fs-6"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                              <li><a class="dropdown-item" href="#"><i class="icofont-delete-alt fs-6 me-2"></i>Delete Member</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item py-3 text-center text-md-start">
                                <div class="d-flex align-items-center flex-column flex-sm-column flex-md-column flex-lg-row">
                                    <div class="no-thumbnail mb-2 mb-md-0">
                                        <img class="avatar lg rounded-circle" src="assets/images/xs/avatar8.jpg" alt="">
                                    </div>
                                    <div class="flex-fill ms-3 text-truncate">
                                        <h6 class="mb-0  fw-bold">Una Coleman</h6>
                                        <span class="text-muted">una.coleman@gmail.com</span>
                                    </div>
                                    <div class="members-action">
                                        <div class="btn-group">
                                            <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                Members
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                              <li>
                                                  <a class="dropdown-item" href="#">
                                                    <i class="icofont-check-circled"></i>
                                                      
                                                    <span>All operations permission</span>
                                                   </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fs-6 p-2 me-1"></i>
                                                           <span>Only Invite & manage team</span>
                                                       </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <div class="btn-group">
                                                <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="icofont-ui-settings  fs-6"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                  <li><a class="dropdown-item" href="#"><i class="icofont-ui-password fs-6 me-2"></i>ResetPassword</a></li>
                                                  <li><a class="dropdown-item" href="#"><i class="icofont-chart-line fs-6 me-2"></i>ActivityReport</a></li>
                                                  <li><a class="dropdown-item" href="#"><i class="icofont-delete-alt fs-6 me-2"></i>Suspend member</a></li>
                                                  <li><a class="dropdown-item" href="#"><i class="icofont-not-allowed fs-6 me-2"></i>Delete Member</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
        </div> 
    </div>
</div>

<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>

<!-- Plugin Js-->
<script src="assets/bundles/apexcharts.bundle.js"></script>

<!-- Jquery Page Js -->
<script src="js/template.js"></script>
<script src="js/page/hr.js"></script>

<!--  Employees Analytics -->

<?php 
    $sql = " SELECT count(0) as total, td_finiched FROM tasks where status = 4 and id_projects = ".intval($_GET['i'])." group by td_finiched  " ;
    $c = new Cursor($sql) ;
    $graph = [] ;
    if( $c->linhas() > 0 ) {
        while(!$c->eof()){
            $r = $c->fetch() ;
            $graphValues[] = $r['total'] ;
            $graphDate[] = "'".date('m/d/Y',strtotime($r['td_finiched']))."'" ;
        }
    }  
?>

<?php 
    // riscos por categoria
    $sql = " SELECT rt.name, count(0) as total FROM `risks` r inner JOIN risk_type rt on( r.risks_type = rt.id_risk_type )  inner join projects p on( r.id_project = p.id_projects ) where id_projects = ".intval($_GET['i'])." group by rt.id_risk_type  " ;
    $c = new Cursor($sql) ;
    $riskValues = $riskNames = [] ;
    if( $c->linhas() > 0 ) {
        while(!$c->eof()){
            $r = $c->fetch() ;
            $riskValues[] = $r['total'] ;
            $riskNames[] = "'".$r['name']."'" ;
        }
    }  

?>

<script>

    $(document).ready(function() { 
        var options = {
            series: [{
                name: 'Tarefas Finalizadas',
                data: [<?=implode(',',$graphValues)?>],
            }],
                chart: {
                height: 140,
                type: 'line',
                toolbar: {
                    show: false,
                }
            },
            grid: {
                show: false,
                xaxis: {
                    lines: {
                        show: false
                    }
                },   
                yaxis: { 
                    lines: {
                        show: false
                    }
                }, 
            },
            stroke: {
                width: 4,
                curve: 'smooth',
                colors: ['var(--chart-color2)'],
            },
            xaxis: {
                type: 'datetime',
                categories: [<?=implode(',',$graphDate)?>],
                tickAmount: 10,
                labels: {
                    formatter: function(value, timestamp, opts) {
                        return opts.dateFormatter(new Date(timestamp), 'dd MMM')
                    }
                }
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    gradientToColors: [ "var(--chart-color3)" ],
                    shadeIntensity: 1,
                    type: 'horizontal',
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [<?=implode(',',$graphValues)?>],
                },
            },
            markers: {
                size: 3,
                colors: ["#FFA41B"],
                strokeColors: "#ffffff",
                strokeWidth: 2,
                hover: {
                    size: 7,
                }
            },
            yaxis: {
                show: false,
                min: -10,
                max: 50,
            }
        };

        var chart = new ApexCharts(document.querySelector("#apex-emplyoeeAnalytics"), options);
        chart.render();
    }); 

    $(function() {
    "use strict";
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })

    // Employees Data
    $(document).ready(function() {
        var options = {
            align: 'center',
            chart: {
                height: 250,
                type: 'donut',
                align: 'center',
            },
            labels: [<?=implode(',',$riskNames)?>],
            dataLabels: {
                enabled: false,
            },
            legend: {
                position: 'bottom',
                horizontalAlign: 'center',
                show: true,
            },
            colors: ['var(--chart-color4)', 'var(--chart-color3)'],
            series: [<?=implode(',',$riskValues)?>],
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 200
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }]
        }
        var chart = new ApexCharts( document.querySelector("#apex-MainCategories"),options);        
        chart.render();
    }); 

     

     // Hr Resorce
    $(document).ready(function() {
        
        var options = {
            series: [{
                name: 'Ui/Ux Designer',
                data: [45, 25, 44, 23, 25, 41, 32, 25, 22, 65, 22, 29]
            }, {
                name: 'App Development',
                data: [45, 12, 25, 22, 19, 22, 29, 23, 23, 25, 41, 32]
            }, {
                name: 'Quality Assurance',
                data: [45, 25, 32, 25, 22, 65, 44, 23, 25, 41, 22, 29]
            }, {
                name: 'Web Developer',
                data: [32, 25, 22, 11, 22, 29, 16, 25, 9, 23, 25, 13]
            }],
            chart: {
                type: 'bar',
                height: 300,
                stacked: true,
                toolbar: {
                    show: false
                },
                zoom: {
                    enabled: true
                }
            },
            colors: ['var(--chart-color1)','var(--chart-color2)','var(--chart-color3)','var(--chart-color4)'],
            responsive: [{
                breakpoint: 480,
                options: {
                    legend: {
                        position: 'bottom',
                        offsetX: -10,
                        offsetY: 0
                    }
                }
            }],
            xaxis: {
                categories: ['Jan','Feb','March','Apr','May','Jun','July','Aug','Sept','Oct','Nov','Dec'],
            },
            legend: {
                position: 'top', // top, bottom
                horizontalAlign: 'right', // left, right
            },
            dataLabels: {
                enabled: false,
            },
            fill: {
                opacity: 1
            }
        };

        var chart = new ApexCharts(document.querySelector("#hiringsources"), options);
        chart.render();
    });
    });

</script>

</body>

<!-- Mirrored from pixelwibes.com/template/my-task/html/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Aug 2023 03:02:38 GMT -->
</html> 