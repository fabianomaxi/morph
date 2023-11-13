<div class="row align-items-center">
    <div class="border-0 mb-4">
        <div class="card-header p-0 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
            <h3 class="fw-bold py-3 mb-0">Projetos</h3>
            <div class="d-flex py-2 project-tab flex-wrap w-sm-100">

            <ul class="nav nav-tabs tab-body-header rounded ms-3 prtab-set w-sm-100" role="tablist">
                    <li class="nav-item"><a style="cursor:pointer" onclick="javascript:$('#modal-filters').modal('show')" class="nav-link active" data-bs-toggle="tab" role="tab"><i class="icofont-filter me-2 fs-6"></i>Filtros</a></li>
                </ul>

                <?php 
                    if( $_SESSION['is_admin_session'] == '1' ){
                ?>
                    <button style="margin-left: 10px;" type="button" data-bs-toggle="modal" data-bs-target="#modal_sc_dash" onclick="javascript:$('#exampleModalXlLabel').html('Novo Projeto'); $('#iframesc').attr('src', '/painel-base/form_projects/?id_companies=1&id_users=1');" class="btn btn-dark w-sm-100" ><i class="icofont-plus-circle me-2 fs-6"></i>Criar Projeto</button>
                <?php 
                    }
                ?>
            </div>
        </div>
    </div>
</div> <!-- Row end  -->

<div class="row align-items-center">
    <div class="col-lg-12 col-md-12 flex-column">
        <div class="tab-content mt-4">
            <div class="tab-pane fade show active" id="All-list">
                <div class="row g-3 gy-5 py-3 row-deck">
                    <!-- for -->
                    <?php 
                        $sql = "select * from projects" ;

                        if( $_SESSION['is_admin_session'] != '1' ){
                            $sql = "select * from projects p inner join project_users pu on( p.id_projects = pu.id_projects )
                               where pu.id_users = ".$_SESSION['id_users_session']."
                            " ;
                        }
                        $c = new Cursor( $sql ) ;
                        if( $c->linhas() > 0 ){
                            while(!$c->eof()){
                                $r = $c->fetch() ;

                                // atividades
                                $total_tasks = 0;
                                $sql = "select count(0) as total_tasks from tasks where id_projects = ".$r['id_projects']." " ;
                                $cT = new Cursor( $sql ) ;
                                if( $cT->linhas() > 0 ){
                                    $rT = $cT->fetch() ;
                                    $total_tasks = $rT['total_tasks'] ;
                                }
                                // membros
                                $total_membros = 0;
                                $sql = "select count(0) as total_membros from project_users where id_projects = ".$r['id_projects']." " ;
                                $cM = new Cursor( $sql ) ;
                                if( $cM->linhas() > 0 ){
                                    $rM = $cM->fetch() ;
                                    $total_membros = $rM['total_membros'] ;
                                }
                                // calculo do tempo
                                $data_inicial = new DateTime($r['ts_started']);
                                $data_final = new DateTime($r['ts_finish_planner']);
                                $meses = $data_final->diff($data_inicial);
                                // comentários

                                // progresso
                                $total_tasks_finish = $percent = 0 ;
                                $sql = "select count(0) as total_tasks_finish from tasks where id_projects = ".$r['id_projects']." and td_finiched is not null " ;
                                $cTP = new Cursor( $sql ) ;
                                if( $cTP->linhas() > 0 ){
                                    $rTP = $cTP->fetch() ;
                                    $total_tasks_finish = $rTP['total_tasks_finish'] ;
                                }
                                if( $total_tasks_finish != 0 ){
                                    $percent = $total_tasks_finish * 100 / $total_tasks ;
                                }

                    ?>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="card">
                                <div class="card-body" >
                                    <div class="d-flex align-items-center justify-content-between mt-5">
                                        <div class="lesson_name">
                                            <div class="project-block light-info-bg">
                                                <i class="icofont-paint"></i>
                                            </div>
                                            <span class="small text-muted project_name fw-bold" style="padding-top: 10px;"> 
                                            <?php 
                                                $sql = "select * from project_types where id_project_types = ".$r['id_project_types']." " ;
                                                $cP = new Cursor( $sql ) ;
                                                if( $cP->linhas() > 0 ){
                                                    $rP = $cP->fetch() ;
                                                }
                                            ?>
                                                <?=utf8_encode($rP['name'])?> 
                                            </span>
                                            <h6 class="mb-0 fw-bold  fs-6  mb-2" style="cursor: pointer;" onclick="window.location='list_tasks.php?i=<?=$r['id_projects']?>'"><?=utf8_encode($r['name'])?></h6>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                        
                                        <?php 
                                            if( $_SESSION['is_admin_session'] == '1' ){
                                        ?>
                                        <div class="btn-group">
                                                <button class="btn btn-secondary btn-sm dropdown-toggle-not-arrow" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icofont-navigation-menu me-2 fs-6"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a data-bs-toggle="modal" data-bs-target="#modal_sc_dash" onclick="javascript:$('#exampleModalXlLabel').html('Editar Projeto'); $('#iframesc').attr('src', '/painel-base/form_projects/?id_projects=<?=$r['id_projects']?>&id_companies=1&id_users=1');" class="dropdown-item" href="#"><i class="icofont-ui-edit me-2 fs-6"></i>Editar</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="icofont-ui-delete me-2 fs-6"></i>Deletar</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="icofont-ui-copy me-2 fs-6"></i>Duplicar</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="icofont-share-alt me-2 fs-6"></i>Exportar</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="icofont-ui-clip-board me-2 fs-6"></i>Checklist</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="icofont-ebook me-2 fs-6"></i>Premissas</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="icofont-book-alt me-2 fs-6"></i>Lições Aprendidas</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="icofont-warning me-2 fs-6"></i>Riscos</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="icofont-paper-clip me-2 fs-6"></i>Anexos</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="icofont-chat me-2 fs-6"></i>Comentários</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="icofont-chart-arrows-axis me-2 fs-6"></i>Indicadores</a></li>

                                                </ul>
                                            </div><!-- /btn-group -->
                                            <?php 
                                            }
                                        ?>
                                        </div>
                                        
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-list avatar-list-stacked pt-2">
                                            <img class="avatar rounded-circle sm" src="assets/images/xs/avatar2.jpg" alt="">
                                            <img class="avatar rounded-circle sm" src="assets/images/xs/avatar1.jpg" alt="">
                                            <img class="avatar rounded-circle sm" src="assets/images/xs/avatar3.jpg" alt="">
                                            <img class="avatar rounded-circle sm" src="assets/images/xs/avatar4.jpg" alt="">
                                            <img class="avatar rounded-circle sm" src="assets/images/xs/avatar8.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="row g-2 pt-4">
                                        <div class="col-6">
                                            <div class="d-flex align-items-center">
                                                <i class="icofont-listing-box"></i>
                                                <span class="ms-2"><?=$total_tasks?> Tarefas</span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="d-flex align-items-center">
                                                <i class="icofont-clock-time"></i>
                                                <span class="ms-2"><?=$meses->m?> Meses</span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="d-flex align-items-center">
                                                <i class="icofont-people"></i>
                                                <span class="ms-2"><?=$total_membros?> Equipe</span>
                                            </div>
                                        </div>
                                       
                                        <?php 
                                            $sql = "select count(0) as totalFiles from files where id_projects = ".$r['id_projects']." " ; 
                                            $c1 = new Cursor($sql) ;
                                            if( $c1->linhas() > 0 ){
                                                $r1 = $c1->fetch() ;
                                                $totalFiles = $r1['totalFiles'] ;
                                            }

                                       ?>

                                        <div class="col-6">
                                            <div class="d-flex align-items-center">
                                                <i class="icofont-paper-clip"></i>
                                                <span class="ms-2"><?=intval($totalFiles)?> Anexos</span>
                                            </div>
                                        </div>
                                        <?php 
                                            $sql = "select count(0) as totalAbertos from risks where date_finish is null and id_project = ".$r['id_projects']." " ; 
                                            $c1 = new Cursor($sql) ;
                                            if( $c1->linhas() > 0 ){
                                                $r1 = $c1->fetch() ;
                                                $totalAbertos = $r1['totalAbertos'] ;
                                            }

                                       ?>

                                        <div class="col-6">
                                            <div class="d-flex align-items-center">
                                                <i class="icofont-warning"></i>
                                                <span class="ms-2"><?=intval($totalAbertos)?> Riscos Em Aberto</span>
                                            </div>
                                        </div>

                                        <?php 
                                            $sql = "select count(0) as totalConcluidos from risks where date_finish is not null  and id_project = ".$r['id_projects']." " ; 
                                            $c2 = new Cursor($sql) ;
                                            if( $c2->linhas() > 0 ){
                                                $r2 = $c2->fetch() ;
                                                $totalConcluidos = $r2['totalConcluidos'] ;
                                            }

                                       ?>

                                        <div class="col-6">
                                            <div class="d-flex align-items-center">
                                                <i class="icofont-check-circled"></i>
                                                <span class="ms-2"><?=intval($totalConcluidos)?> Riscos Concluídos</span>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="d-flex align-items-center">
                                                <i class="icofont-ui-calendar"></i>
                                                <span class="ms-2">Iniciado <?=date('d/m/Y',strtotime($r['ts_started']))?></span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="d-flex align-items-center">
                                                <i class="icofont-ui-calendar"></i>
                                                <span class="ms-2">Termina <?=date('d/m/Y',strtotime($r['ts_finish_planner']))?></span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="dividers-block"></div>

                                    
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <h4 class="small fw-bold mb-0">Status do Progresso</h4>
                                        <div style="display: none;" id="changeStatus_<?=$r['id_projects']?>">
                                        <div class="btn-group">
                                            <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Selecionar Status
                                            </button>
                                            <ul class="dropdown-menu">
                                                <?php 
                                                    $sql = "select * from project_status" ;
                                                    $cS = new Cursor($sql) ;
                                                    if( $cS->linhas ){
                                                        while(!$cS->eof()) {
                                                            $rS = $cS->fetch() ;
                                                ?>
                                                                <li><a onclick="returnStatus('<?=utf8_encode($rS['name'])?>',<?=$r['id_projects']?>)" class="dropdown-item" href="#"><?=utf8_encode($rS['name'])?></a></li>
                                                <?php

                                                        }
                                                    }
                                                ?>
                                            </ul>
                                        </div><!-- /btn-group -->
                                    </div>
                                        <span style="cursor:pointer" id="showStatus_<?=$r['id_projects']?>" onclick="changeStatus(<?=$r['id_projects']?>)" class="small light-primary-bg  p-1 rounded"><i class="icofont-ui-clock"></i> 
                                                Em Andamento
                                        </span>
                                    </div>
                                    <div class="progress" style="height: 8px;">
                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: <?=$percent?>%" aria-valuenow="<?=$percent?>" aria-valuemin="0" aria-valuemax="100"></div>
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
</div>

<script>

    function changeStatus( id_projects ) {
        var isVisible = $( "#changeStatus" ).is( ":visible" );
        if(isVisible === false) {
            $( "#showStatus_"+id_projects ).hide() ;
            $( "#changeStatus_"+id_projects ).show() ;
        } 
    }

    function returnStatus( nStatus, id_projects ) {
        $('#showStatus_'+id_projects).html(nStatus) ;
        $( "#showStatus_"+id_projects ).show() ;
        $( "#changeStatus_"+id_projects ).hide() ;
    }


</script>

<?php include_once('incs/modal_filters.php') ;?>