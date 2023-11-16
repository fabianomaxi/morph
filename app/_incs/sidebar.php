<!-- sidebar -->
<div class="sidebar px-4 py-4 py-md-5 me-0">
        <div class="d-flex flex-column h-100">
            <a href="dashboard.php" class="mb-0 brand-icon">
                <!--<span class="logo-icon">
                    <svg  width="35" height="35" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                    </svg>
                </span>
                <span class="logo-text">Caméléon</span> -->
                <img src="assets/images/logo-hub.svg" style="width: 100% !important;" alt="MorphProject">
            </a>
            <!-- Menu: main ul --> 
            <ul class="menu-list flex-grow-1 mt-3">
                <li class="collapsed">
                    <a class="m-link" href="dashboard.php">
                    <i class="icofont-home fs-5"></i><span>HUB de Projetos</span>
                    </a>
                </li>
                
                <?php 
                    if( $_SESSION['is_admin_session'] == '1' ){
                ?>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#emp-admin" href="#"><i
                            class="icofont-settings fs-5"></i> <span>Cadastros</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="emp-admin">
                        
                        <li><a class="ms-link" href="conteudos.php?p=grid_team&n=Times"> <span>Equipes</span></a></li>
                        <li><a class="ms-link" href="conteudos.php?p=grid_users&n=Usuários"> <span>Usuários</span></a></li>
                        
                        <?php 
                            if( $_SESSION['is_admin_yh_session'] == '1' ){
                        ?>
                                <li><a class="ms-link" href="conteudos.php?p=grid_profiles&n=Perfis"> <span>Perfil</span></a></li>
                        <?php
                            }
                        ?>
                        <li><a class="m-link" href="conteudos.php?p=grid_project_types&n=Tipos de Projetos"><span>Tipos de Projeto</span></a></li>                      
                        <li><a class="m-link" href="conteudos.php?p=grid_project_status&n=Status do Projetos"><span>Status de Projeto</span></a></li>
                        <li><a class="m-link" href="conteudos.php?p=grid_task_status&n=Status de Tarefas"><span>Status de Tarefas</span></a></li>                                         
                    </ul>
                        
                    </li>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#emp-check" href="#"><i
                            class="icofont-checked fs-5"></i> <span>Checklist</span> <span class="arrow ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="emp-check">
                        <li><a class="m-link" href="conteudos.php?p=form_check_list&n=Checklist" ><span>Checklist</span></a></li>
                    </ul>
                </li>

                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#emp-Components" href="#"><i
                            class="icofont-stopwatch fs-5"></i> <span>Timesheet</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="emp-Components">
                        <li><a class="m-link" href="#" data-bs-toggle="modal" data-bs-target="#modal_sc_timesheet" onclick="javascript:$('#exampleModalXlLabel').html('Timesheet'); $('#iframesctsheet').attr('src', '/painel-base/grid_timesheet/?id_companies=1&id_users=<?=$_SESSION['id_users_session']?>');"><i class="icofont-speed-meter fs-5"></i><span>Registro de Horas</span></a></li>
                        <li><a class="m-link" href="#" data-bs-toggle="modal" data-bs-target="#modal_sc_timesheet" onclick="javascript:$('#exampleModalXlLabel').html('Pedidos de Férias'); $('#iframesctsheet').attr('src', '/painel-base/grid_vacation/?id_companies=1&id_users=<?=$_SESSION['id_users_session']?>');"><i class="icofont-island-alt fs-5"></i><span>Pedido de Férias</span></a></li>                      
                    </ul>
                </li>

                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#client-Components" href="#"><i
                            class="icofont-bank-alt"></i> <span>Clientes</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="client-Components">
                        <li><a class="ms-link" href="conteudos.php?p=grid_clients&n=Clientes"> <span>Gestão de Clientes</span></a></li>
                    </ul>
                </li>
               
                <li class="collapsed">
                    <a class="m-link"  href="javascript:alert('Em Breve!')"><i
                            class="icofont-ui-calculator"></i> <span>Financeiro</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                </li>

                <li class="collapsed" style="display: none;">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#payroll-Components" href="#"><i
                            class="icofont-users-alt-5"></i> <span>Payroll</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="payroll-Components">
                        <li><a class="ms-link" href="#"><span>Employee Salary</span> </a></li>
                    </ul>
                </li>
                <li class="collapsed" style="display: none;">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#app-Components" href="#">
                        <i class="icofont-contrast"></i> <span>App</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="app-Components">
                        <li><a class="ms-link" href="#"> <span>Calander</span></a></li>
                        <li><a class="ms-link" href="#"><span>Chat App</span></a></li>
                    </ul>
                </li>
                                <li class="collapsed" style="display: none;">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#extra-Components" href="#">
                        <i class="icofont-code-alt"></i> <span>Other Pages</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="extra-Components">
                        <li><a class="ms-link" href="#"> <span>Apex Charts</span></a></li>
                        <li><a class="ms-link" href="#"><span>Forms Example</span></a></li>
                        <li><a class="ms-link" href="#"> <span>Table Example</span></a></li>
                        <li><a class="ms-link" href="#"><span>Reviews Page</span></a></li>
                         <li><a class="ms-link" href="#"><span>Icons</span></a></li>
                        <li><a class="ms-link" href="#"><span>Contact</span></a></li>
                        <li><a class="ms-link" href="#"><span>Widgets</span></a></li>
                        <li><a class="ms-link" href="#"><span>Todo-List</span></a></li>
                    </ul>
                </li>
                <li style="display: none;"><a class="m-link" href="#"><i class="icofont-paint"></i> <span>UI Components</span></a></li>
            <?php 
                    }
            ?>
            </ul>

            <!-- Theme: Switch Theme -->
            <ul class="list-unstyled mb-0" style="display: none;">
                <li class="d-flex align-items-center justify-content-center">
                    <div class="form-check form-switch theme-switch">
                        <input class="form-check-input" type="checkbox" id="theme-switch">
                        <label class="form-check-label" for="theme-switch">Enable Dark Mode!</label>
                    </div>
                </li>
                <li class="d-flex align-items-center justify-content-center">
                    <div class="form-check form-switch theme-rtl">
                        <input class="form-check-input" type="checkbox" id="theme-rtl">
                        <label class="form-check-label" for="theme-rtl">Enable RTL Mode!</label>
                    </div>
                </li>
            </ul>
            <!-- Menu: menu collepce btn -->
            <button type="button" class="btn btn-link sidebar-mini-btn text-light">
                <span class="ms-2"><i class="icofont-bubble-right"></i></span>
            </button>
        </div>
    </div>

    <?php  include_once('incs/modal_sc_timesheet.php') ; ?>