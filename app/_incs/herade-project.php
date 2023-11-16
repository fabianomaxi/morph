<div style="margin-left: 10px;" class="btn-group">

    <button type="button" class="btn btn-primary dropdown-toggle-not-arrow" data-bs-toggle="dropdown" aria-expanded="false"><i class="icofont-rounded-down me-2 fs-6"></i>Opções</button>

    <ul class="dropdown-menu border-0 shadow bg-primary">

    <li><a class="dropdown-item text-light" onclick="javascript:window.location='list_tasks.php?i=<?=$_GET['i']?>'" href="#"><i class="icofont-listing-box me-2 fs-6"></i>Tarefas</a></li>

    <li><a class="dropdown-item text-light" onclick="javascript:$('#exampleModalXlLabel').html('Gestão de Anexos'); $('#iframesc').attr('src', '../painel-base/grid_files_all/?id_companies=1&id_users=1&id_project=<?=$_GET['i']?>&id_tasks=<?=$r['id_tasks']?>');  $('#modal_sc').modal('show')"><i class="icofont-paper-clip me-2 fs-6"></i>Anexos</a></li>

    <li><a class="dropdown-item text-light" onclick="javascript:$('#exampleModalXlLabel').html('Gestão de Riscos'); $('#iframesc').attr('src', '../painel-base/grid_risks_all/?id_companies=1&id_users=1&id_project=<?=$_GET['i']?>&id_tasks=<?=$r['id_tasks']?>');  $('#modal_sc').modal('show')"><i class="icofont-warning me-2 fs-6"></i>Riscos</a></li>
 
    <li><a class="dropdown-item text-light" onclick="javascript:$('#exampleModalXlLabel').html('Premissas do projeto'); $('#iframesc').attr('src', '../painel-base/grid_premises/?id_companies=1&id_users=1&id_project=<?=$_GET['i']?>&id_tasks=<?=$r['id_tasks']?>');  $('#modal_sc').modal('show')"><i class="icofont-ebook me-2 fs-6"></i>Premissas do Projeto</a></li>
    <!--<li><a class="dropdown-item text-light" href="project-details.php">Detalhes</a></li>-->
    <li><a class="dropdown-item text-light" href="dashboard_all.php"><i class="icofont-chart-arrows-axis me-2 fs-6"></i>Indicadores</a></li>

    <li><a class="dropdown-item text-light" onclick="javascript:$('#exampleModalXlLabel').html('Gestão de Riscos'); $('#iframesc').attr('src', '../painel-base/grid_lessons_learned_all/?id_companies=1&id_users=1&id_project=<?=$_GET['i']?>&id_tasks=<?=$r['id_tasks']?>');  $('#modal_sc').modal('show')"><i class="icofont-book-alt me-2 fs-6"></i>Lições Aprendidas</a></li>

    </ul>
</div><!-- /btn-group -->