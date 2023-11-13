<!-- Body: Header -->

<?php

include_once('cursor.php') ;

?>


<div class="header">
                    <nav class="navbar py-4">
                        <div class="container-xxl">
                        
                        <div style="width: 100%; display: none;" id="div_msg_sucess" class="alert alert-primary alert-dismissible fade show" role="alert">
                            <strong>Sucesso!</strong> <span id="msg_sucess"  ></span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                        <!-- header rightbar icon -->
                            <div class="h-right d-flex align-items-center mr-5 mr-lg-0 order-1">
                            <div class="d-flex">
                                    <?php

                                        $sql = " SELECT * FROM `users` ";

                                        $c = new Cursor( $sql );

                                        if($c->linhas() < 0){
                                            while(!$c->eof()){
                                                $r = $c->fetch();

                                                if( $_SERVER['SCRIPT_NAME'] == '/app/list_tasks.php' ) {
                                        ?>
                                                    <div class="avatar-list avatar-list-stacked px-3">
                                                        <img class="avatar rounded-circle" src="<?=$r['photo']?>" alt="" />
                                                    </div>
                                        <?php 
                                                }
                                            }
                                        }
                                    ?>

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
                                                    <span>Historico do Projeto</span>
                                                    <span class="badge text-white"></span>
                                                </h5>
                                            </div>


                                            <div class="tab-content card-body">
                                                <div class="tab-pane fade show active">
                                                    <ul class="list-unstyled list mb-0">
<?php

                                $sql = "SELECT ph.date as data, u.name as usuario, ph.history, u.photo FROM `project_histories` ph inner join users u on( u.id_users = ph.id_user ) WHERE 1";

                                $c = new Cursor( $sql );

                                if($c->linhas() > 0){
                                    while(!$c->eof()){
                                        $r = $c->fetch();
                                        if( $r['photo'] == '' ){
                                            $r['photo'] = 'assets/images/lg/avatar2.jpg' ;
                                        }else{ 
                                            $r['photo'] = "../painel-base/_lib/file/img/foto_usuario/" . $r['photo'] ;
                                        }    
                                ?>
                                        <li class="py-2 mb-1 border-bottom">
                                            <a href="javascript:void(0);" class="d-flex">
                                                <img class="avatar rounded-circle" src="<?=$r['photo']?>" alt="" />
                                                <div class="flex-fill ms-2">
                                                    <p class="d-flex justify-content-between mb-0"><span class="font-weight-bold"><?=$r['usuario']?></span> <small>2MIN</small></p>
                                                    <span class=""><?=date('d/m H:i:s',strtotime($r['data']))?>
                                                    <p><?=$r['history']?></p>
                                                </span>
                                                </div>
                                            </a>
                                        </li>
                                <?php

                                    }
                                }

                                ?>
                                                    </ul>
                                                </div>
                                            </div>
                                            <a class="card-footer text-center border-top-0" href="#">Mostrar mais</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="dropdown user-profile ml-2 ml-sm-3 d-flex align-items-center zindex-popover">
                                    <div class="u-info me-2">
                                        <p class="mb-0 text-end line-height-sm">
                                            <span class="font-weight-bold">
                                                <?=$_SESSION['name_session']?>
                                            </span>
                                        </p>
                                    </div>
                                    <a class="nav-link dropdown-toggle pulse p-0" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static">
                                        <img class="avatar lg rounded-circle img-thumbnail" src="<?=$_SESSION['photo_session']?>" alt="profile" />
                                    </a>
                                    <div class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-end p-0 m-0">
                                        <div class="card border-0 w280">
                                            <div class="card-body pb-0">
                                                <div class="d-flex py-1">
                                                    <img class="avatar rounded-circle" src="<?=$_SESSION['photo_session']?>" alt="profile" />
                                                    <div class="flex-fill ms-3">
                                                        <p class="mb-0">
                                                            <span class="font-weight-bold">
                                                                <?=$_SESSION['name_session']?>
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div><hr class="dropdown-divider border-dark" /></div>
                                            </div>
                                            <div class="list-group m-2">
                                                <a href="logout.php" class="list-group-item list-group-item-action border-0"><i class="icofont-logout fs-6 me-3"></i>Sair</a>
                                                <div><hr class="dropdown-divider border-dark" /></div>
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
                            <div class="order-0 col-lg-4 col-md-4 col-sm-12 col-12 mb-3 mb-md-0"></div>
                        </div>
                    </nav>
                </div>
