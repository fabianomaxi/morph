<?php 
include_once('cursor.php') ;
?>
<!doctype html>
<html class="no-js" lang="pt_br" dir="ltr">


<!-- Mirrored from pixelwibes.com/template/my-task/html/dist/task.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Aug 2023 03:06:06 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>:: My-Task:: Task </title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <!-- plugin css file  -->
    <link rel="stylesheet" href="assets/plugin/nestable/jquery-nestable.css"/>
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
        <div class="body d-flex py-lg-3 py-md-2">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header p-0 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold py-3 mb-0">Lista de Tarefas</h3>
                    <div class="d-flex py-2 project-tab flex-wrap w-sm-100">
                        <ul class="nav nav-tabs tab-body-header rounded ms-3 prtab-set w-sm-100" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#All-list" role="tab">Todas</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Started-list" role="tab">Em Andamento</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Started-list" role="tab">Atrasadas</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Approval-list" role="tab">Finalizadas</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Completed-list" role="tab">Impedimentos</a></li>
                        </ul>
                        <?php  include_once('incs/herade-project.php') ; ?>
                    </div>
                </div>
            </div>
        </div> <!-- Row end  -->    
        <div class="container-xxl">
                
                <div class="row clearfix  g-3">
                    <div class="col-lg-12 col-md-12 flex-column">
                        <div class="row g-3 row-deck">
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-header py-3">
                                        <h6 class="mb-0 fw-bold ">Progresso por Time</h6>
                                    </div>
                                    <div class="card-body mem-list">
                                        <div class="progress-count mb-4">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h6 class="mb-0 fw-bold d-flex align-items-center">UI/UX Design</h6>
                                                <span class="small text-muted">02/07</span>
                                            </div>
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar light-info-bg" role="progressbar" style="width: 92%" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="progress-count mb-4">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h6 class="mb-0 fw-bold d-flex align-items-center">Website Design</h6>
                                                <span class="small text-muted">01/03</span>
                                            </div>
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar bg-lightgreen" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="progress-count mb-4">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h6 class="mb-0 fw-bold d-flex align-items-center">Quality Assurance</h6>
                                                <span class="small text-muted">02/07</span>
                                            </div>
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar light-success-bg" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="progress-count mb-3">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h6 class="mb-0 fw-bold d-flex align-items-center">Development</h6>
                                                <span class="small text-muted">01/05</span>
                                            </div>
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar light-orange-bg" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="progress-count mb-4">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h6 class="mb-0 fw-bold d-flex align-items-center">Testing</h6>
                                                <span class="small text-muted">01/08</span>
                                            </div>
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar bg-lightyellow" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-header py-3">
                                        <h6 class="mb-0 fw-bold ">Atividades Recentes</h6>
                                    </div>
                                    <div class="card-body mem-list">
                                        
                                    <?php 
                                        $sql = "select * from tasks order by td_updated desc " ;
                                        $c = new Cursor( $sql ) ;
                                        if( $c->linhas() > 0 ){
                                            while(!$c->eof()) {
                                                $r = $c->fetch() ;
                                    ?>

                                        <div class="timeline-item ti-danger border-bottom ms-2">
                                            <div class="d-flex">
                                                <span class="avatar d-flex justify-content-center align-items-center rounded-circle light-success-bg">RH</span>
                                                <div class="flex-fill ms-3">
                                                    <div class="mb-1"><strong>Rechard Add New Task</strong></div>
                                                    <span class="d-flex text-muted">20Min ago</span>
                                                </div>
                                            </div>
                                        </div> <!-- timeline item end  -->
                                    
                                    <?php
                                            }
                                        }
                                    ?>
                                    </div>
                                </div> <!-- .card: My Timeline -->
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12">
                                <div class="card">
                                    <div class="card-header py-3">
                                        <h6 class="mb-0 fw-bold ">Membros do prjeto</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="flex-grow-1 mem-list">
                                            
                                        <?php 
                                            $sql = "select 
                                                        * 
                                                    from 
                                                        project_users pu 
                                                    inner join 
                                                        users u on( pu.id_users = u.id_users ) 
                                                    order 
                                                        by u.name " ;
                                            $c = new Cursor( $sql ) ;
                                            if( $c->linhas() > 0 ){
                                                while(!$c->eof()) {
                                                    $r = $c->fetch() ;
                                        ?>

                                            <div class="py-2 d-flex align-items-center border-bottom">
                                                <div class="d-flex ms-2 align-items-center flex-fill">
                                                    <img src="assets/images/xs/avatar6.jpg" class="avatar lg rounded-circle img-thumbnail" alt="avatar">
                                                    <div class="d-flex flex-column ps-2">
                                                        <h6 class="fw-bold mb-0"><?=$r['name']?></h6>
                                                        <span class="small text-muted">Ui/UX Designer</span>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn light-danger-bg text-end" data-bs-toggle="modal" data-bs-target="#dremovetask">Remove</button>
                                            </div>
                                        <?php 
                                                }
                                            }
                                        ?>

                                        </div>
                                    </div>
                                </div> <!-- .card: My Timeline -->
                            </div>
                        </div>
                        <div class="row taskboard g-3 py-xxl-4">
                            <!-- <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 mt-xxl-4 mt-xl-4 mt-lg-4 mt-md-4 mt-sm-4 mt-4">
                                <h6 class="fw-bold py-3 mb-0">Task Ready</h6>
                                <div class="planned_task">
                                    <div class="dd" data-plugin="nestable">
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="1">
                                                <div class="dd-handle">
                                                    <div class="task-info d-flex align-items-center justify-content-between">
                                                        <h6 class="light-info-bg py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0">UI/UX Design</h6>
                                                        <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                                                            <div class="avatar-list avatar-list-stacked m-0">
                                                                <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar2.jpg" alt="">
                                                                <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar1.jpg" alt="">
                                                            </div>
                                                            <span class="badge bg-warning text-end mt-2">MEDIUM</span>
                                                        </div>
                                                    </div>
                                                    <p class="py-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id
                                                        nec scelerisque massa.</p>
                                                    <div class="tikit-info row g-3 align-items-center">
                                                        <div class="col-sm">
                                                            <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                                <li class="me-2">
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="icofont-flag"></i>
                                                                        <span class="ms-1">25 Nov</span>
                                                                    </div>
                                                                </li>
                                                                <li class="me-2">
                                                                    <div class="d-flex align-items-center">
                                                                        
                                                                            <i class="icofont-ui-text-chat"></i>
                                                                            <span class="ms-1">4</span>
                                                                        
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="icofont-paper-clip"></i>
                                                                        <span class="ms-1">5</span>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm text-end">
                                                            <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small"> Social Geek Made </div>
                                                        </div>
                                                    </div>
                                                </div>
        
                                            </li>
                                            <li class="dd-item" data-id="2">
                                                <div class="dd-handle">
                                                    <div class="task-info d-flex align-items-center justify-content-between">
                                                        <h6 class="bg-lightgreen py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0">Website Design
                                                        </h6>
                                                        <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                                                            <div class="avatar-list avatar-list-stacked m-0">
                                                                <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar7.jpg" alt="">
                                                            </div>
                                                            <span class="badge bg-success text-end mt-2">LOW</span>
                                                        </div>
                                                    </div>
                                                    <p class="py-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id
                                                        nec scelerisque massa.</p>
                                                    <div class="tikit-info row g-3 align-items-center">
                                                        <div class="col-sm">
                                                            <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                                <li class="me-2">
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="icofont-flag"></i>
                                                                        <span class="ms-1">12 Feb</span>
                                                                    </div>
                                                                </li>
                                                                <li class="me-2">
                                                                    <div class="d-flex align-items-center">
                                                                        
                                                                            <i class="icofont-ui-text-chat"></i>
                                                                            <span class="ms-1">3</span>
                                                                        
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="icofont-paper-clip"></i>
                                                                        <span class="ms-1">4</span>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm text-end">
                                                            
                                                            <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small"> Practice to Perfect </div>
                                                        </div>
                                                    </div>
                                                </div>
        
                                            </li>
                                            <li class="dd-item" data-id="3">
                                                <div class="dd-handle">
                                                    <div class="task-info d-flex align-items-center justify-content-between">
                                                        <h6 class="light-success-bg py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0">Quality Assurance
                                                        </h6>
                                                        <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                                                            <div class="avatar-list avatar-list-stacked m-0">
                                                                <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar2.jpg" alt="">
                                                                <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar1.jpg" alt="">
                                                            </div>
                                                            <span class="badge bg-warning text-end mt-2">MEDIUM</span>
                                                        </div>
                                                    </div>
                                                    <p class="py-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id
                                                        nec scelerisque massa.</p>
                                                    <div class="tikit-info row g-3 align-items-center">
                                                        <div class="col-sm">
                                                            <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                                <li class="me-2">
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="icofont-flag"></i>
                                                                        <span class="ms-1">17 Mar</span>
                                                                    </div>
                                                                </li>
                                                                <li class="me-2">
                                                                    <div class="d-flex align-items-center">
                                                                        
                                                                            <i class="icofont-ui-text-chat"></i>
                                                                            <span class="ms-1">15</span>
                                                                        
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="icofont-paper-clip"></i>
                                                                        <span class="ms-1">1</span>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm text-end">
                                                            
                                                            <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small"> Box of Crayons </div>
                                                        </div>
                                                    </div>
                                                </div>
        
                                            </li>
                                            <li class="dd-item" data-id="4">
                                                <div class="dd-handle">
                                                    <div class="task-info d-flex align-items-center justify-content-between">
                                                        <h6 class="light-orange-bg py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0">Development
                                                        </h6>
                                                        <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                                                            <div class="avatar-list avatar-list-stacked m-0">
                                                                <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar6.jpg" alt="">
                                                                <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar5.jpg" alt="">
                                                            </div>
                                                            <span class="badge bg-warning text-end mt-2">MEDIUM</span>
                                                        </div>
                                                    </div>
                                                    <p class="py-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id
                                                        nec scelerisque massa.</p>
                                                    <div class="tikit-info row g-3 align-items-center">
                                                        <div class="col-sm">
                                                            <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                                <li class="me-2">
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="icofont-flag"></i>
                                                                        <span class="ms-1">28 Nov</span>
                                                                    </div>
                                                                </li>
                                                                <li class="me-2">
                                                                    <div class="d-flex align-items-center">
                                                                        
                                                                            <i class="icofont-ui-text-chat"></i>
                                                                            <span class="ms-1">45</span>
                                                                        
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="icofont-paper-clip"></i>
                                                                        <span class="ms-1">1</span>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm text-end">
                                                            
                                                            <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small"> Gob Geeklords </div>
                                                        </div>
                                                    </div>
                                                </div>
        
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 mt-xxl-4 mt-xl-4 mt-lg-4 mt-md-4 mt-sm-4 mt-4">
                                <h6 class="fw-bold py-3 mb-0">Backlog</h6>
                                <div class="progress_task">
                                    <div class="dd" data-plugin="nestable">
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="1">
                                                <div class="dd-handle">
                                                    <div class="task-info d-flex align-items-center justify-content-between">
                                                        <h6 class="light-success-bg py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0">Quality Assurance
                                                        </h6>
                                                        <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                                                            <div class="avatar-list avatar-list-stacked m-0">
                                                                <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar2.jpg" alt="">
                                                                <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar1.jpg" alt="">
                                                            </div>
                                                            <span class="badge bg-warning text-end mt-2">MEDIUM</span>
                                                        </div>
                                                    </div>
                                                    <p class="py-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id
                                                        nec scelerisque massa.</p>
                                                    <div class="tikit-info row g-3 align-items-center">
                                                        <div class="col-sm">
                                                            <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                                <li class="me-2">
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="icofont-flag"></i>
                                                                        <span class="ms-1">28 Mar</span>
                                                                    </div>
                                                                </li>
                                                                <li class="me-2">
                                                                    <div class="d-flex align-items-center">
                                                                        
                                                                            <i class="icofont-ui-text-chat"></i>
                                                                            <span class="ms-1">5</span>
                                                                        
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="icofont-paper-clip"></i>
                                                                        <span class="ms-1">5</span>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm text-end">
                                                            
                                                            <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small"> Box of Crayons </div>
                                                        </div>
                                                    </div>
                                                </div>
        
                                            </li>
                                            <li class="dd-item" data-id="2">
                                                <div class="dd-handle">
                                                    <div class="task-info d-flex align-items-center justify-content-between">
                                                        <h6 class="bg-lightgreen py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0">Website Design
                                                        </h6>
                                                        <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                                                            <div class="avatar-list avatar-list-stacked m-0">
                                                                <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar8.jpg" alt="">
                                                            </div>
                                                            <span class="badge bg-success text-end mt-2">LOW</span>
                                                        </div>
                                                    </div>
                                                    <p class="py-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id
                                                        nec scelerisque massa.</p>
                                                    <div class="tikit-info row g-3 align-items-center">
                                                        <div class="col-sm">
                                                            <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                                <li class="me-2">
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="icofont-flag"></i>
                                                                        <span class="ms-1">12 Feb</span>
                                                                    </div>
                                                                </li>
                                                                <li class="me-2">
                                                                    <div class="d-flex align-items-center">
                                                                        
                                                                            <i class="icofont-ui-text-chat"></i>
                                                                            <span class="ms-1">3</span>
                                                                        
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="icofont-paper-clip"></i>
                                                                        <span class="ms-1">4</span>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm text-end">
                                                            
                                                            <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small"> Practice to Perfect </div>
                                                        </div>
                                                    </div>
                                                </div>
        
                                            </li>
                                            <li class="dd-item" data-id="3">
                                                <div class="dd-handle">
                                                    <div class="task-info d-flex align-items-center justify-content-between">
                                                        <h6 class="light-info-bg py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0">UI/UX Design</h6>
                                                        <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                                                            <div class="avatar-list avatar-list-stacked m-0">
                                                                <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar3.jpg" alt="">
                                                                <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar1.jpg" alt="">
                                                            </div>
                                                            <span class="badge bg-warning text-end mt-2">MEDIUM</span>
                                                        </div>
                                                    </div>
                                                    <p class="py-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id
                                                        nec scelerisque massa.</p>
                                                    <div class="tikit-info row g-3 align-items-center">
                                                        <div class="col-sm">
                                                            <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                                <li class="me-2">
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="icofont-flag"></i>
                                                                        <span class="ms-1">03 Apr</span>
                                                                    </div>
                                                                </li>
                                                                <li class="me-2">
                                                                    <div class="d-flex align-items-center">
                                                                        
                                                                            <i class="icofont-ui-text-chat"></i>
                                                                            <span class="ms-1">7</span>
                                                                        
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="icofont-paper-clip"></i>
                                                                        <span class="ms-1">2</span>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm text-end">
                                                            
                                                            <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small"> Social Geek Made </div>
                                                        </div>
                                                    </div>
                                                </div>
        
                                            </li>
                                            <li class="dd-item" data-id="4">
                                                <div class="dd-handle">
                                                    <div class="task-info d-flex align-items-center justify-content-between">
                                                        <h6 class="light-info-bg py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0">UI/UX Design</h6>
                                                        <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                                                            <div class="avatar-list avatar-list-stacked m-0">
                                                                <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar5.jpg" alt="">
                                                                <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar1.jpg" alt="">
                                                            </div>
                                                            <span class="badge bg-warning text-end mt-2">MEDIUM</span>
                                                        </div>
                                                    </div>
                                                    <p class="py-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id
                                                        nec scelerisque massa.</p>
                                                    <div class="tikit-info row g-3 align-items-center">
                                                        <div class="col-sm">
                                                            <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                                <li class="me-2">
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="icofont-flag"></i>
                                                                        <span class="ms-1">25 Nov</span>
                                                                    </div>
                                                                </li>
                                                                <li class="me-2">
                                                                    <div class="d-flex align-items-center">
                                                                        
                                                                            <i class="icofont-ui-text-chat"></i>
                                                                            <span class="ms-1">4</span>
                                                                        
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="icofont-paper-clip"></i>
                                                                        <span class="ms-1">5</span>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm text-end">
                                                            
                                                            <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small"> Social Geek Made </div>
                                                        </div>
                                                    </div>
                                                </div>
        
                                            </li>
                                            <li class="dd-item" data-id="5">
                                                <div class="dd-handle">
                                                    <div class="task-info d-flex align-items-center justify-content-between">
                                                        <h6 class="light-success-bg py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0">Quality Assurance
                                                        </h6>
                                                        <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                                                            <div class="avatar-list avatar-list-stacked m-0">
                                                                <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar4.jpg" alt="">
                                                            </div>
                                                            <span class="badge bg-danger text-end mt-2">High</span>
                                                        </div>
                                                    </div>
                                                    <p class="py-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id
                                                        nec scelerisque massa.</p>
                                                    <div class="tikit-info row g-3 align-items-center">
                                                        <div class="col-sm">
                                                            <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                                <li class="me-2">
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="icofont-flag"></i>
                                                                        <span class="ms-1">27 Mar</span>
                                                                    </div>
                                                                </li>
                                                                <li class="me-2">
                                                                    <div class="d-flex align-items-center">
                                                                        
                                                                            <i class="icofont-ui-text-chat"></i>
                                                                            <span class="ms-1">8</span>
                                                                        
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="icofont-paper-clip"></i>
                                                                        <span class="ms-1">6</span>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm text-end">
                                                            
                                                            <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small"> Box of Crayons </div>
                                                        </div>
                                                    </div>
                                                </div>
        
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 mt-xxl-4 mt-xl-4 mt-lg-4 mt-md-0 mt-sm-0 mt-0">
                                <h6 class="fw-bold py-3 mb-0">Doing</h6>
                                <div class="review_task">
                                    <div class="dd" data-plugin="nestable">
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="1">
                                                <div class="dd-handle">
                                                    <div class="task-info d-flex align-items-center justify-content-between">
                                                        <h6 class="light-info-bg py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0">UI/UX Design</h6>
                                                        <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                                                            <div class="avatar-list avatar-list-stacked m-0">
                                                                <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar3.jpg" alt="">
                                                                <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar1.jpg" alt="">
                                                            </div>
                                                            <span class="badge bg-warning text-end mt-2">MEDIUM</span>
                                                        </div>
                                                    </div>
                                                    <p class="py-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id
                                                        nec scelerisque massa.</p>
                                                    <div class="tikit-info row g-3 align-items-center">
                                                        <div class="col-sm">
                                                            <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                                <li class="me-2">
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="icofont-flag"></i>
                                                                        <span class="ms-1">03 Apr</span>
                                                                    </div>
                                                                </li>
                                                                <li class="me-2">
                                                                    <div class="d-flex align-items-center">
                                                                        
                                                                            <i class="icofont-ui-text-chat"></i>
                                                                            <span class="ms-1">7</span>
                                                                        
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="icofont-paper-clip"></i>
                                                                        <span class="ms-1">2</span>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm text-end">
                                                            
                                                            <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small"> Social Geek Made </div>
                                                        </div>
                                                    </div>
                                                </div>
        
                                            </li>
                                            <li class="dd-item" data-id="2">
                                                <div class="dd-handle">
                                                    <div class="task-info d-flex align-items-center justify-content-between">
                                                        <h6 class="light-info-bg py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0">UI/UX Design</h6>
                                                        <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                                                            <div class="avatar-list avatar-list-stacked m-0">
                                                                <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar5.jpg" alt="">
                                                                <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar1.jpg" alt="">
                                                            </div>
                                                            <span class="badge bg-warning text-end mt-2">MEDIUM</span>
                                                        </div>
                                                    </div>
                                                    <p class="py-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id
                                                        nec scelerisque massa.</p>
                                                    <div class="tikit-info row g-3 align-items-center">
                                                        <div class="col-sm">
                                                            <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                                <li class="me-2">
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="icofont-flag"></i>
                                                                        <span class="ms-1">25 Nov</span>
                                                                    </div>
                                                                </li>
                                                                <li class="me-2">
                                                                    <div class="d-flex align-items-center">
                                                                        
                                                                            <i class="icofont-ui-text-chat"></i>
                                                                            <span class="ms-1">4</span>
                                                                        
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="icofont-paper-clip"></i>
                                                                        <span class="ms-1">5</span>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm text-end">
                                                            
                                                            <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small"> Social Geek Made </div>
                                                        </div>
                                                    </div>
                                                </div>
        
                                            </li>
                                            <li class="dd-item" data-id="3">
                                                <div class="dd-handle">
                                                    <div class="task-info d-flex align-items-center justify-content-between">
                                                        <h6 class="light-success-bg py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0">Quality Assurance
                                                        </h6>
                                                        <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                                                            <div class="avatar-list avatar-list-stacked m-0">
                                                                <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar6.jpg" alt="">
                                                            </div>
                                                            <span class="badge bg-danger text-end mt-2">High</span>
                                                        </div>
                                                    </div>
                                                    <p class="py-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id
                                                        nec scelerisque massa.</p>
                                                    <div class="tikit-info row g-3 align-items-center">
                                                        <div class="col-sm">
                                                            <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                                <li class="me-2">
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="icofont-flag"></i>
                                                                        <span class="ms-1">27 Mar</span>
                                                                    </div>
                                                                </li>
                                                                <li class="me-2">
                                                                    <div class="d-flex align-items-center">
                                                                        
                                                                            <i class="icofont-ui-text-chat"></i>
                                                                            <span class="ms-1">8</span>
                                                                        
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="icofont-paper-clip"></i>
                                                                        <span class="ms-1">6</span>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm text-end">
                                                            
                                                            <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small"> Box of Crayons </div>
                                                        </div>
                                                    </div>
                                                </div>
        
                                            </li>
                                            <li class="dd-item" data-id="4">
                                                <div class="dd-handle">
                                                    <div class="task-info d-flex align-items-center justify-content-between">
                                                        <h6 class="light-success-bg py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0">Quality Assurance
                                                        </h6>
                                                        <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                                                            <div class="avatar-list avatar-list-stacked m-0">
                                                                <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar7.jpg" alt="">
                                                                <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar8.jpg" alt="">
                                                            </div>
                                                            <span class="badge bg-warning text-end mt-2">MEDIUM</span>
                                                        </div>
                                                    </div>
                                                    <p class="py-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id
                                                        nec scelerisque massa.</p>
                                                    <div class="tikit-info row g-3 align-items-center">
                                                        <div class="col-sm">
                                                            <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                                <li class="me-2">
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="icofont-flag"></i>
                                                                        <span class="ms-1">28 Mar</span>
                                                                    </div>
                                                                </li>
                                                                <li class="me-2">
                                                                    <div class="d-flex align-items-center">
                                                                        
                                                                            <i class="icofont-ui-text-chat"></i>
                                                                            <span class="ms-1">5</span>
                                                                        
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="icofont-paper-clip"></i>
                                                                        <span class="ms-1">5</span>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm text-end">
                                                            
                                                            <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small"> Box of Crayons </div>
                                                        </div>
                                                    </div>
                                                </div>
        
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 mt-xxl-4 mt-xl-4 mt-lg-4 mt-md-0 mt-sm-0 mt-0">
                                <h6 class="fw-bold py-3 mb-0">Done</h6>
                                <div class="completed_task">
                                    <div class="dd" data-plugin="nestable">
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="1">
                                                <div class="dd-handle">
                                                    <div class="task-info d-flex align-items-center justify-content-between">
                                                        <h6 class="light-info-bg py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0">UI/UX Design</h6>
                                                        <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                                                            <div class="avatar-list avatar-list-stacked m-0">
                                                                <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar6.jpg" alt="">
                                                                <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar7.jpg" alt="">
                                                            </div>
                                                            <span class="badge bg-warning text-end mt-2">MEDIUM</span>
                                                        </div>
                                                    </div>
                                                    <p class="py-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id
                                                        nec scelerisque massa.</p>
                                                    <div class="tikit-info row g-3 align-items-center">
                                                        <div class="col-sm">
                                                            <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                                <li class="me-2">
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="icofont-flag"></i>
                                                                        <span class="ms-1">13 Jan</span>
                                                                    </div>
                                                                </li>
                                                                <li class="me-2">
                                                                    <div class="d-flex align-items-center">
                                                                        
                                                                            <i class="icofont-ui-text-chat"></i>
                                                                            <span class="ms-1">4</span>
                                                                        
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="icofont-paper-clip"></i>
                                                                        <span class="ms-1">1</span>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm text-end">
                                                            
                                                            <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small"> Social Geek Made </div>
                                                        </div>
                                                    </div>
                                                </div>
        
                                            </li>
                                            <li class="dd-item" data-id="2">
                                                <div class="dd-handle">
                                                    <div class="task-info d-flex align-items-center justify-content-between">
                                                        <h6 class="light-info-bg py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0">UI/UX Design</h6>
                                                        <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                                                            <div class="avatar-list avatar-list-stacked m-0">
                                                                <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar2.jpg" alt="">
                                                                <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar8.jpg" alt="">
                                                            </div>
                                                            <span class="badge bg-warning text-end mt-2">MEDIUM</span>
                                                        </div>
                                                    </div>
                                                    <p class="py-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id
                                                        nec scelerisque massa.</p>
                                                    <div class="tikit-info row g-3 align-items-center">
                                                        <div class="col-sm">
                                                            <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                                <li class="me-2">
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="icofont-flag"></i>
                                                                        <span class="ms-1">02 Feb</span>
                                                                    </div>
                                                                </li>
                                                                <li class="me-2">
                                                                    <div class="d-flex align-items-center">
                                                                        
                                                                            <i class="icofont-ui-text-chat"></i>
                                                                            <span class="ms-1">1</span>
                                                                        
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="icofont-paper-clip"></i>
                                                                        <span class="ms-1">5</span>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm text-end">
                                                            
                                                            <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small"> Social Geek Made </div>
                                                        </div>
                                                    </div>
                                                </div>
        
                                            </li>
                                            <li class="dd-item" data-id="3">
                                                <div class="dd-handle">
                                                    <div class="task-info d-flex align-items-center justify-content-between">
                                                        <h6 class="bg-lightgreen py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0">Website Design
                                                        </h6>
                                                        <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                                                            <div class="avatar-list avatar-list-stacked m-0">
                                                                <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar7.jpg" alt="">
                                                            </div>
                                                            <span class="badge bg-success text-end mt-2">LOW</span>
                                                        </div>
                                                    </div>
                                                    <p class="py-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id
                                                        nec scelerisque massa.</p>
                                                    <div class="tikit-info row g-3 align-items-center">
                                                        <div class="col-sm">
                                                            <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                                <li class="me-2">
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="icofont-flag"></i>
                                                                        <span class="ms-1">12 Feb</span>
                                                                    </div>
                                                                </li>
                                                                <li class="me-2">
                                                                    <div class="d-flex align-items-center">
                                                                        
                                                                            <i class="icofont-ui-text-chat"></i>
                                                                            <span class="ms-1">3</span>
                                                                        
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="icofont-paper-clip"></i>
                                                                        <span class="ms-1">4</span>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm text-end">
                                                            
                                                            <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small"> Practice to Perfect </div>
                                                        </div>
                                                    </div>
                                                </div>
        
                                            </li>
                                            <li class="dd-item" data-id="4">
                                                <div class="dd-handle">
                                                    <div class="task-info d-flex align-items-center justify-content-between">
                                                        <h6 class="light-success-bg py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0">Quality Assurance
                                                        </h6>
                                                        <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                                                            <div class="avatar-list avatar-list-stacked m-0">
                                                                <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar11.jpg" alt="">
                                                            </div>
                                                            <span class="badge bg-danger text-end mt-2">High</span>
                                                        </div>
                                                    </div>
                                                    <p class="py-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id
                                                        nec scelerisque massa.</p>
                                                    <div class="tikit-info row g-3 align-items-center">
                                                        <div class="col-sm">
                                                            <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                                <li class="me-2">
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="icofont-flag"></i>
                                                                        <span class="ms-1">01 Jan</span>
                                                                    </div>
                                                                </li>
                                                                <li class="me-2">
                                                                    <div class="d-flex align-items-center">
                                                                        
                                                                            <i class="icofont-ui-text-chat"></i>
                                                                            <span class="ms-1">2</span>
                                                                        
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="icofont-paper-clip"></i>
                                                                        <span class="ms-1">4</span>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm text-end">
                                                            
                                                            <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small"> Box of Crayons </div>
                                                        </div>
                                                    </div>
                                                </div>
        
                                            </li>
                                            <li class="dd-item" data-id="5">
                                                <div class="dd-handle">
                                                    <div class="task-info d-flex align-items-center justify-content-between">
                                                        <h6 class="light-success-bg py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0">Quality Assurance
                                                        </h6>
                                                        <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                                                            <div class="avatar-list avatar-list-stacked m-0">
                                                                <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar2.jpg" alt="">
                                                                <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar1.jpg" alt="">
                                                            </div>
                                                            <span class="badge bg-warning text-end mt-2">MEDIUM</span>
                                                        </div>
                                                    </div>
                                                    <p class="py-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id
                                                        nec scelerisque massa.</p>
                                                    <div class="tikit-info row g-3 align-items-center">
                                                        <div class="col-sm">
                                                            <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                                <li class="me-2">
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="icofont-flag"></i>
                                                                        <span class="ms-1">17 Jan</span>
                                                                    </div>
                                                                </li>
                                                                <li class="me-2">
                                                                    <div class="d-flex align-items-center">
                                                                        
                                                                            <i class="icofont-ui-text-chat"></i>
                                                                            <span class="ms-1">6</span>
                                                                        
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="icofont-paper-clip"></i>
                                                                        <span class="ms-1">6</span>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm text-end">
                                                            
                                                            <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small"> Box of Crayons </div>
                                                        </div>
                                                    </div>
                                                </div>
        
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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

        <!-- Create task-->
        <div class="modal fade" id="createtask" tabindex="-1"  aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title  fw-bold" id="createprojectlLabel"> Criar Tarefas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label  class="form-label">Project Name</label>
                        <select class="form-select" aria-label="Default select Project Category">
                            <option selected>Project Name Select</option>
                            <option value="1">Fast Cad</option>
                            <option value="2">Box of Crayons</option>
                            <option value="3">Gob Geeklords</option>
                            <option value="4">Java Dalia</option>
                            <option value="5">Practice to Perfect</option>
                            <option value="6">Rhinestone</option>
                            <option value="7">Social Geek Made</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Task Category</label>
                        <select class="form-select" aria-label="Default select Project Category">
                            <option selected>UI/UX Design</option>
                            <option value="1">Website Design</option>
                            <option value="2">App Development</option>
                            <option value="3">Quality Assurance</option>
                            <option value="4">Development</option>
                            <option value="5">Backend Development</option>
                            <option value="6">Software Testing</option>
                            <option value="7">Website Design</option>
                            <option value="8">Marketing</option>
                            <option value="9">SEO</option>
                            <option value="10">Other</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="formFileMultipleone" class="form-label">Task Images & Document</label>
                        <input class="form-control" type="file" id="formFileMultipleone"  multiple>
                    </div>
                    <div class="deadline-form mb-3">
                        <form>
                            <div class="row">
                              <div class="col">
                                <label for="datepickerded" class="form-label">Task Start Date</label>
                                <input type="date" class="form-control" id="datepickerded">
                              </div>
                              <div class="col">
                                <label for="datepickerdedone" class="form-label">Task End Date</label>
                                <input type="date" class="form-control" id="datepickerdedone">
                              </div>
                            </div>
                        </form>
                    </div>
                    <div class="row g-3 mb-3">
                        <div class="col-sm">
                            <label  class="form-label">Task Assign Person</label>
                            <select class="form-select" multiple aria-label="Default select Priority">
                                <option selected>Lucinda Massey</option>
                                <option value="1">Ryan Nolan</option>
                                <option value="2">Oliver Black</option>
                                <option value="3">Adam Walker</option>
                                <option value="4">Brian Skinner</option>
                                <option value="5">Dan Short</option>
                                <option value="5">Jack Glover</option>
                            </select>
                        </div>
                    </div>
                    <div class="row g-3 mb-3">
                        <div class="col-sm">
                            <label  class="form-label">Task Priority</label>
                            <select class="form-select" aria-label="Default select Priority">
                                <option selected>Highest</option>
                                <option value="1">Medium</option>
                                <option value="2">Low</option>
                                <option value="3">Lowest</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea786" class="form-label">Description (optional)</label>
                        <textarea class="form-control" id="exampleFormControlTextarea786" rows="3" placeholder="Add any extra details about the request"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                    <button type="button" class="btn btn-primary">Create</button>
                </div>
            </div>
            </div>
        </div>

        <!-- Modal  Remove Task-->
        <div class="modal fade" id="dremovetask" tabindex="-1"  aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title  fw-bold" id="dremovetaskLabel"> Remove From Task?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body justify-content-center flex-column d-flex">
                    <i class="icofont-ui-rate-remove text-danger display-2 text-center mt-2"></i>
                    <p class="mt-4 fs-5 text-center">You can  Remove only From Task</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger color-fff">Remove</button>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>

<!-- Plugin Js-->
<script src="assets/bundles/nestable.bundle.js"></script>

<!-- Jquery Page Js -->
<script src="js/template.js"></script>
<script src="js/page/task.js"></script>

<?php  include_once('incs/modal_sc.php') ; ?>

</body>

</html>