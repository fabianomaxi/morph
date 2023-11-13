<?php 

function tarefas( $idProject, $pai = '', $subPosition = [] , $position = '' ) {

    $return = '' ;
    $cssPaiShow = ' font-weight: bold;' ;
    $where = $whereSub  = ' ' ;

    if( ! empty($pai) ){
        $where = ' and id_task_main = '.$pai.' ' ;
    } else {
        $where = ' and id_task_main is null ' ;
    }

    if( $_SESSION['is_admin_session'] != '1' ){
        
        //$where .= " and id_users_to in(select id_users_to from tasks where id_task_main is not null and id_users =  ".$_SESSION['id_users_session']." ) " ;
    
        if( ! empty($pai) ){
            //$where .= ' and id_users_to = '.$_SESSION['id_users_session'].' ' ;
           
        } else {
            //$where .= ' and ( ( select count(0) from tasks where id_task_main is not null and id_users_to = '.$_SESSION['id_users_session'].' ) >= 1 and id_task_main is null or  id_users_to = '.$_SESSION['id_users_session'].' ) ' ;
            $whereSub = ' and id_users_to = '.$_SESSION['id_users_session'].' ' ;
        }

    }
    
    $sql = "select 
            t.* , p.name as priotiry, t.id_prioriy, u.name as user, ts.name as status, t.status as id_status, tsi.name as situacao, p.name as priority
        from 
            tasks as t left join priorities p on( p.id_prioriy = t.id_prioriy ) 
            inner join users u on( u.id_users = t.id_users_to )
            left join task_status ts on( ts.id_task_status = t.status )
            left join task_situation tsi on( tsi.id_task_situation = t.situation )
            where id_projects = '".$idProject."' ".$where." order by id_tasks
        " ;
        $c = new Cursor( $sql ) ;

    if( empty($position) )  
        $position = 1 ;

        if( $c->linhas() > 0 ) { 
        while(!$c->eof()) { 
            $r = $c->fetch() ; 

            if( $_SESSION['is_admin_session'] != '1' && ! empty($pai) && $r['id_users_to'] != $_SESSION['id_users_session'] ){
                continue ;
            }

            $sql = "select * from tasks where id_task_main = '".$r['id_tasks']."' ".$whereSub." ";
            $cSubT = new Cursor( $sql ) ;

            if( ! empty($pai) ){
                $cssPai = 'id="subtasks_'.$pai.'"' ;
                $cssPaiShow = 'display:none"' ;
                $subPosition[$pai]++;
            }else {
                $position++ ;
            }
            $return .= '
                <tr style="cursor: cell; '.$cssPaiShow.'  '.$cssPai.' >
                    <input type="hidden" name="position_task[]" id="position_task" value="'.$r['id_tasks'].'" />
                    <td><div class="icon">
            ' ; 
                $sql = "select * from risks where id_task = ".$r['id_tasks']." " ;
                $cIcon = new Cursor( $sql ) ;
                if( $cIcon->linhas() > 0 ) {
                    $return .= '
                        <i  style="cursor:pointer;color:#ffc107;" data-bs-toggle="tooltip" data-bs-placement="right" title="Risco" class="icon-color icofont-warning"></i>' ;
                }

                $sql = "select * from project_obs where id_tasks = ".$r['id_tasks']." " ;
                $cIcon = new Cursor( $sql ) ;
                if( $cIcon->linhas() > 0 ) {
                    $return .= '
                        <i  style="cursor:pointer;color:#6c757d;" data-bs-toggle="tooltip" data-bs-placement="right" title="Observação" class="icon-color icofont-chat"></i> ' ;
                }

                $sql = "select * from files where id_tasks = ".$r['id_tasks']." " ;
                $cIcon = new Cursor( $sql ) ;
                if( $cIcon->linhas() > 0 ) {
                    $return .= '
                        <i  style="cursor:pointer;color:#6c757d;" data-bs-toggle="tooltip" data-bs-placement="right" title="Anexo" class="icon-color icofont-paper-clip"></i>' ;
                }
                $return .= '
                </div>
            </td>
            <td>'.($position-1).'.'.implode('.',$subPosition).' </td>
            <td style="text-align: left; '.(($r['situation']==3) ? "text-decoration: line-through" : "" ).';">'.utf8_encode($r['title']).'</td>
            ' ;

            $return .= '
                <td class="dt-body-right">
                    <span onclick="javascript:showSubs(\''.$r['id_tasks'].'\')" style="cursor:pointer" class="badge bt-subt">
                        '.intval($cSubT->linhas()).' Subtarefas
                    </span>
                </td>
                <td>
                    <div class="dropdown">
                    <button id="depend_'.$r['id_tasks'].'" class="btn btn-outline-success btn-sm dropdown-toggle" type="button bg-primary" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">' ;
                    
                    if( ! empty($r['id_tasks_deppend']) ){
                        $sql = "select * from  tasks where id_tasks = ".$r['id_tasks_deppend']." " ;
                        $cD = new Cursor($sql) ;
                        if( $cD->linhas() > 0 ) {
                            $rD = $cD->fetch() ;
                        }
                        $return .= utf8_encode($rD['title']) ;
                    } else {
                        $return .= 'Depend.' ;
                    }
                    $return .= '
                    </button>
                    <ul class="dropdown-menu border-0 shadow p-3">
            ' ;    

            $data1 = new DateTime(date('Y-m-d',strtotime($r['ts_finihed_default'])));
            $data2 = new DateTime(date('Y-m-d',strtotime($r['ts_start_default'])));
            // Subtrai as datas e obtém a diferença em dias
            $diferenca = $data1->diff($data2);

            $data1 = new DateTime(date('Y-m-d'));
            $data2 = new DateTime(date('Y-m-d',strtotime($r['ts_start_default'])));
            $diferencaHoje = $data1->diff($data2);

            $sql = "select 
                t.* , p.name as prioriy, u.name as user
                from 
                    tasks as t left join priorities p on( p.id_prioriy = t.id_prioriy ) 
                    inner join users u on( u.id_users = t.id_users_to )
                where id_projects = '".$idProject."' 
                ";
            
            $c2 = new Cursor( $sql ) ;
            if( $c2->linhas() > 0 ){ 
                while(!$c2->eof()) { 
                    $r2 = $c2->fetch() ;
                    $return .= '
                            <li>
                                <a onclick="javascript:changeData(1,\'\',\''.utf8_encode($r2['title']).'\','.$r['id_tasks'].','.$r2['id_tasks'].', '.$diferenca->days.' )" class="dropdown-item py-2 rounded" href="#">'.utf8_encode($r2['title']).'</a>
                            </li>
                    ' ;
                }
            }

            $return .= '
            </ul>
                </div>
            </td>
            <td class="text-success fw-bold">
                <button id="user_'.$r['id_tasks'].'" class="btn btn-outline-success btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    '.utf8_encode($r['user']).'
                </button>
                <ul class="dropdown-menu border-0 shadow p-3"> ';

                $sql = "select u.* from users u inner join project_users ju on( u.id_users = ju.id_users ) where id_projects = ".$_GET['i']." ";

                $c3 = new Cursor( $sql ) ;
                if( $c3->linhas() > 0 ){ while(!$c3->eof()) { $r3 = $c3->fetch() ; 
                    $return .= '
                        <li>
                            <a onclick="javascript:$(\'#user_'.$r['id_tasks'].'\').html(\''.utf8_encode($r3['name']).'\')" class="dropdown-item py-2 rounded" href="#">'.utf8_encode($r3['name']).'</a>
                        </li>';
                        
                    }
                }

        $return .= '
                </ul>
            </td>

            <td>'.date('d/m/Y',strtotime($r['ts_start_default'])).'</td>
            <td>
                <!--<i class="icofont-close-circled text-danger"></i>-->' ;

            $percent = 0 ;
            if( ! empty($diferenca->days) && $diferenca->days > 0 )
                $percent = ($diferencaHoje->days * 100 / $diferenca->days) ;
            
            $percent = number_format($percent,0,'.','') ;
            
            if( $percent > 100 ){
                $percent = 100 ;
            }

            if( date('Y-m-d',strtotime($r['ts_start_default'])) > date('Y-m-d') ) {
                $percent = 0 ;
            }

            $days = $diferenca->days ;

            if( $diferenca->days == '0' ){
                $days = 1 ;
            }

            if( $percent == '0' && strtotime($r['ts_finihed_default']) < strtotime(date('Y-m-d')) )  
                $percent = '100' ;

            $return .= '
            '.$days.' dias
            </td>
            <td class="text-success">'.date('d/m/Y',strtotime($r['ts_finihed_default'])).'</td>
            <td>
                <div data-bs-toggle="tooltip" data-bs-placement="top" title="'.$percent.'% Completo" class="progress" style="height:20px;">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="'.$percent.'" aria-valuemin="0" aria-valuemax="100" style="width: '.$percent.'%;">'.$percent.'%</div>
                </div>
            </td>
            
            <td>
                <div onclick="javascript:changeProgress(\'progresso_'.$r['id_tasks'].'\')" id="progresso_'.$r['id_tasks'].'_label_status" style="cursor: pointer;"  data-bs-toggle="tooltip" data-bs-placement="top" title="'.$r['progress_evolution'].'% Completo" class="progress" style="height:20px;">
                    <div  class="progress-bar  progress-bar-warning" role="progressbar" aria-valuenow="'.$r['progress_evolution'].'" aria-valuemin="0" aria-valuemax="100" style="width: '.$r['progress_evolution'].'%;">'.$r['progress_evolution'].'%</div>
                </div>
                
                <span style="display: none;" id="progresso_'.$r['id_tasks'].'">
                        <div class="dropdown">
                            <button id="progresso_'.$r['id_tasks'].'" class="btn btn-outline-info btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                Progresso Evolução
                            </button>
                            <ul class="dropdown-menu border-0 shadow p-3"> ';
                                    
                                    for( $a = 0; $a <= 100; $a = $a + 5  ){
                                        $return .= '
                                            <li><a onclick="javascript:changeProgressData( '.$r['id_tasks'].' , \''.$a.'\' , \''.$a.'\' )" class="dropdown-item py-2 rounded" href="#">'.$a.'</a></li> ' ;
                                    }
                            
                $return .= '
                            </ul>
                        </div>
                    </span>
            </td>

            <td class="dt-body-right">
                <span class="badge bg-info" id="situacao_'.$r['id_tasks'].'_label" style="cursor: pointer;" onclick="javascript:changeSitu(\'situacao_'.$r['id_tasks'].'\')">
                    '.utf8_encode($r['situacao']).'
                </span>
                <span style="display: none;" id="situacao_'.$r['id_tasks'].'">
                    <div class="dropdown">
                        <button id="lbl_situacao_'.$r['id_tasks'].'" class="btn btn-outline-info btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            Situação
                        </button>
                        <ul class="dropdown-menu border-0 shadow p-3"> ';
                                $sql = "select * from task_situation " ; 
                                $cSit = new Cursor( $sql ) ;
                                if( $cSit->linhas() > 0 ){
                                    while(!$cSit->eof()) {
                                        $rSit = $cSit->fetch() ;
                                        $return .= '
                                    <li><a onclick="javascript:changeSituation( '.$r['id_tasks'].' , \''.utf8_encode($rSit['name']).'\' , \''.$rSit['id_task_situation'].'\' )" class="dropdown-item py-2 rounded" href="#">'.utf8_encode($rSit['name']).'</a></li> ' ;
                                    }
                                }
            $return .= '
                        </ul>
                    </div>
                </span>
            </td>

            <td class="dt-body-right">
                <span class="badge bg-info" id="status_'.$r['id_tasks'].'_label_status" onclick="javascript:changeStatus(\'status_'.$r['id_tasks'].'\')" style="cursor: pointer;">'.utf8_encode($r['status']).'</span>
                <span style="display: none;" id="status_'.$r['id_tasks'].'">
                    <div class="dropdown">
                        <button id="lbl_status_'.$r['id_tasks'].'" class="btn btn-outline-info btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            Status
                        </button>
                        <ul class="dropdown-menu border-0 shadow p-3"> ';
                       
                            $sql = "select * from task_status " ; 
                                $cStatus = new Cursor( $sql ) ;
                                if( $cStatus->linhas() > 0 ){
                                    while(!$cStatus->eof()) {
                                        $rStatus = $cStatus->fetch() ;
                                        $return .= '
                                    <li><a onclick="javascript:changeStatusServer( '.$r['id_tasks'].' , \''.utf8_encode($rStatus['name']).'\' , \''.$rStatus['id_task_status'].'\' )" class="dropdown-item py-2 rounded" href="#">'.utf8_encode($rStatus['name']).'</a></li>' ;
                                    }
                                }

            $priritiesColors = ['3' => 'danger','4' => 'warning ','6' => 'info'] ;
            
            $return .= '
                        </ul>
                    </div>
                </span>                                                    
            
            </td>

            <td class="dt-body-right">
                <span class="badge bg-'.$priritiesColors[$r['id_prioriy']].'" id="priority_'.$r['id_tasks'].'_label" style="cursor: pointer;" onclick="javascript:changeSitu(\'priority_'.$r['id_tasks'].'\')">
                '.utf8_encode($r['priotiry']).'
                </span>
                <span style="display: none;" id="priority_'.$r['id_tasks'].'">
                    <div class="dropdown">
                        <button id="lbl_priority_'.$r['id_tasks'].'" class="btn btn-outline-info btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            Prioridade
                        </button>
                        <ul class="dropdown-menu border-0 shadow p-3"> ';
                                $sql = "select * from priorities " ; 
                                $cSit = new Cursor( $sql ) ;
                                if( $cSit->linhas() > 0 ){
                                    while(!$cSit->eof()) {
                                        $rPrioriry = $cSit->fetch() ;
                                        $return .= '
                                    <li><a onclick="javascript:changePrioriry( '.$r['id_tasks'].' , \''.utf8_encode($rPrioriry['name']).'\' , \''.$rPrioriry['id_prioriy'].'\' )" class="dropdown-item py-2 rounded" href="#">'.utf8_encode($rPrioriry['name']).'</a></li> ' ;
                                    }
                                }
            $return .= '
                        </ul>
                    </div>
                </span>
            </td>

            <td><i class="icofont-check-circled text-success"></i> ' ;
                $data1 = new DateTime($r['ts_finihed_default']);
                $data2 = new DateTime(date('Y-m-d H:i:s'));
                // Subtrai as datas e obtém a diferença em dias
                $diferenca = $data1->diff($data2);
                $days = $diferenca->days ;

                if( $diferenca->days == '0' ){
                    $days = 1 ;
                } 
                
                if( $percent == '0' && strtotime($r['ts_finihed_default']) < strtotime(date('Y-m-d')) ) 
                    $percent = '1' ;

                $return .= 
                $diferenca->days.' dias </td>

            <td>
                <div class="dropdown">
                    <button class="btn btn-outline-info btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Ações
                    </button>
                    <ul class="dropdown-menu border-0 shadow p-3">
                        <li>
                            <a
                                onclick="javascript:openModalSc(\'../painel-base/form_tasks/?id_companies=1&id_users=1&id_project='.$idProject.'&id_tasks='.$r['id_tasks'].'\')"
                                class="dropdown-item py-2 rounded">
                                Editar
                            </a>
                        </li>
                        <li><a onclick="javascript:$(\'#idDelete\').val('.$r['id_tasks'].');$(\'#excluir\').modal(\'show\')" class="dropdown-item py-2 rounded" href="#">Excluir</a></li>
                        <li>
                            <a
                                onclick="javascript:$(\'#exampleModalXlLabel\').html(\'Gestão de Riscos\'); $(\'#iframesc\').attr(\'src\', \'../painel-base/grid_risks/?id_companies=1&id_users=1&id_project='.$idProject.'&id_tasks='.$r['id_tasks'].'\');  $(\'#modal_sc\').modal(\'show\')"
                                class="dropdown-item py-2 rounded"
                                href="#"
                            >
                                Inserir Risco
                            </a>
                        </li>
                        <li>
                            <a
                                onclick="javascript:$(\'#exampleModalXlLabel\').html(\'Gestão de Observações\'); $(\'#iframesc\').attr(\'src\', \'../painel-base/grid_project_obs/?id_companies=1&id_users=1&id_project='.$idProject.'&id_tasks='.$r['id_tasks'].'\');  $(\'#modal_sc\').modal(\'show\')"
                                class="dropdown-item py-2 rounded"
                                href="#"
                            >
                                Inserir Observações
                            </a>
                        </li>
                        <li>
                            <a
                                onclick="javascript:$(\'#exampleModalXlLabel\').html(\'Gestão de Anexos\'); $(\'#iframesc\').attr(\'src\', \'../painel-base/grid_files/?id_companies=1&id_users=1&id_project='.$idProject.'&id_tasks='.$r['id_tasks'].'\');  $(\'#modal_sc\').modal(\'show\')"
                                class="dropdown-item py-2 rounded"
                                href="#"
                            >
                                Inserir Anexos
                            </a>
                        </li>

                        <li>
                            <a
                                onclick="javascript:$(\'#exampleModalXlLabel\').html(\'Gestão de Lições Aprendidas\'); $(\'#iframesc\').attr(\'src\', \'../painel-base/grid_lessons_learned/?id_companies=1&id_users=1&id_project='.$idProject.'&id_tasks='.$r['id_tasks'].'\');  $(\'#modal_sc\').modal(\'show\')"
                                class="dropdown-item py-2 rounded"
                                href="#"
                            >
                                Inserir Lição Aprendida
                            </a>
                        </li>

                    </ul>
                </div>
            </td>
        </tr>' ;

            $sql = "select * from  tasks where id_task_main = ".$r['id_tasks']." " ;
            $cS = new Cursor( $sql ) ;
            if( $cS->linhas() > 0 ){
                $return .= tarefas( $idProject, $r['id_tasks'] , $subPosition , $position ) ;
            }
            
           // $position++;
            
           

        }
        
    }

    return $return ;
}