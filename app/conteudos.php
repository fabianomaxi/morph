<?php 
include_once('cursor.php') ;
?>
<!DOCTYPE html>
<html class="no-js" lang="pt_br" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Morph - Lista de Tarefas</title>
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- Favicon-->
        <!-- plugin css file  -->
        <link rel="stylesheet" href="assets/plugin/datatables/responsive.dataTables.min.css" />
        <link rel="stylesheet" href="assets/plugin/datatables/dataTables.bootstrap5.min.css" />
        <!-- project css file  -->
        <link rel="stylesheet" href="assets/css/my-task.style.min.css" />
        <!-- Google Code  -->

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
    
                <?php include_once('incs/header.php') ; ?>

                <!-- Body: Body -->
                <div class="body d-flex py-lg-3 py-md-2"  style="padding-bottom: 10px;">
                    <div class="row align-items-center" id="noFilters">
                        <div class="border-0 mb-3">
                            <div class="card-header p-0 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                                <h3 class="fw-bold py-3 mb-0">Lista de <?=$_GET['n']?></h3>
                                
                            </div>
                        </div>
                    </div>
                    <!-- Row end  -->

                    <div class="container-xxl">
                        <div class="row clearfix g-3" style="padding-bottom: 10px;">
                        <div class="container">
                                    <iframe class="responsive-iframe" src="../painel-base/<?=$_GET['p']?>/"></iframe>
                                    </div>
                            <div class="col-sm-12" style=" display: none;">
                                
                                <div class="card">
                                    
                                    <div class="card-body" style="overflow-x: auto;">
                                        
                                    

                                        <table class="btn btn-dark w-sm-100" style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th colspan="9" onclick="javascript:showNewTask()" style="cursor: pointer;"><i class="icofont-plus-circle me-2 fs-6"></i>Adicionar Tarefa</th>
                                                </tr>
                                            </thead>

                                            <thead style="display: none;" id="n-task-header">
                                                <tr>
                                                    <th style="width: 30%;">Tarefa</th>
                                                    <th>Predecessora</th>
                                                    <th style="width: 10%;">Início</th>
                                                    <th>Duração</th>
                                                    <th>Concluir</th>
                                                    <th>Tempo Utilizado</th>
                                                    <th>Responsável</th>
                                                    <th>Ações</th>
                                                </tr>
                                            </thead>

                                            <tbody id="n-task" style="display: none;">
                                                <tr style="cursor: cell;">
                                                    <input type="hidden" name="position_task[]" id="position_task" value="<?=$r['id_tasks']?>" />
                                                    <td>
                                                        <div class="form-group">
                                                            <input placeholder="TAREFA" type="text" class="form-control" required="" />
                                                        </div>
                                                    </td>

                                                    <!--<td /*class="text-danger"*/></td>-->
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-outline-success btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                                ---
                                                            </button>
                                                            <ul class="dropdown-menu border-0 shadow p-3">
                                                                <?php 
                                                    $sql = "select * from tasks ";
                                                    $c = new Cursor( $sql ) ;
                                                    if( $c->linhas() > 0 ){ while(!$c->eof()) { $r = $c->fetch() ; ?>
                                                                <li>
                                                                    <a class="dropdown-item py-2 rounded" href="#"><?=$r['title']?></a>
                                                                </li>
                                                                <?php 
                                                        }
                                                    }
                                                ?>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td><input type="date" class="form-control" required="" /></td>
                                                    <td><input type="text" placeholder="DURAÇÃO" class="form-control" required="" /></td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="date" placeholder="CONCLUIR EM" class="form-control" required="" />
                                                        </div>
                                                    </td>
                                                    <td class="text-success">
                                                        <i class="icofont-check-circled text-success"></i>
                                                        <?=$r['hours_worked']?>
                                                        Hr
                                                    </td>
                                                    <td class="text-success fw-bold">
                                                        <div class="form-group">
                                                            <div class="dropdown">
                                                                <button class="btn btn-outline-success btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    Responsável
                                                                </button>
                                                                <ul class="dropdown-menu border-0 shadow p-3">
                                                                    <?php 
                                                    $sql = "select * from users ";
                                                    $c = new Cursor( $sql ) ;
                                                    if( $c->linhas() > 0 ){ while(!$c->eof()) { $r = $c->fetch() ; ?>
                                                                    <li>
                                                                        <a class="dropdown-item py-2 rounded" href="#"><?=$r['name']?></a>
                                                                    </li>
                                                                    <?php
                                                        }
                                                    }
                                                ?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary">Incluir</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Row End -->
                    </div>
                </div>

                <!-- Modal Members-->
                <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="addUserLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title fw-bold" id="addUserLabel">Employee Invitation</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="inviteby_email">
                                    <div class="input-group mb-3">
                                        <input type="email" class="form-control" placeholder="Email address" id="exampleInputEmail1" aria-describedby="exampleInputEmail1" />
                                        <button class="btn btn-dark" type="button" id="button-addon2">Sent</button>
                                    </div>
                                </div>
                                <div class="members_list">
                                    <h6 class="fw-bold">Employee</h6>
                                    <ul class="list-unstyled list-group list-group-custom list-group-flush mb-0">
                                        <li class="list-group-item py-3 text-center text-md-start">
                                            <div class="d-flex align-items-center flex-column flex-sm-column flex-md-column flex-lg-row">
                                                <div class="no-thumbnail mb-2 mb-md-0">
                                                    <img class="avatar lg rounded-circle" src="assets/images/xs/avatar2.jpg" alt="" />
                                                </div>
                                                <div class="flex-fill ms-3 text-truncate">
                                                    <h6 class="mb-0 fw-bold">Rachel Carr(you)</h6>
                                                    <span class="text-muted">rachel.carr@gmail.com</span>
                                                </div>
                                                <div class="members-action">
                                                    <span class="members-role">Admin</span>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="icofont-ui-settings fs-6"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li>
                                                                <a class="dropdown-item" href="#"><i class="icofont-ui-password fs-6 me-2"></i>ResetPassword</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#"><i class="icofont-chart-line fs-6 me-2"></i>ActivityReport</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item py-3 text-center text-md-start">
                                            <div class="d-flex align-items-center flex-column flex-sm-column flex-md-column flex-lg-row">
                                                <div class="no-thumbnail mb-2 mb-md-0">
                                                    <img class="avatar lg rounded-circle" src="assets/images/xs/avatar3.jpg" alt="" />
                                                </div>
                                                <div class="flex-fill ms-3 text-truncate">
                                                    <h6 class="mb-0 fw-bold">Lucas Baker<a href="#" class="link-secondary ms-2">(Resend invitation)</a></h6>
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
                                                            <i class="icofont-ui-settings fs-6"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li>
                                                                <a class="dropdown-item" href="#"><i class="icofont-delete-alt fs-6 me-2"></i>Delete Member</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item py-3 text-center text-md-start">
                                            <div class="d-flex align-items-center flex-column flex-sm-column flex-md-column flex-lg-row">
                                                <div class="no-thumbnail mb-2 mb-md-0">
                                                    <img class="avatar lg rounded-circle" src="assets/images/xs/avatar8.jpg" alt="" />
                                                </div>
                                                <div class="flex-fill ms-3 text-truncate">
                                                    <h6 class="mb-0 fw-bold">Una Coleman</h6>
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
                                                                <i class="icofont-ui-settings fs-6"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li>
                                                                    <a class="dropdown-item" href="#"><i class="icofont-ui-password fs-6 me-2"></i>ResetPassword</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#"><i class="icofont-chart-line fs-6 me-2"></i>ActivityReport</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#"><i class="icofont-delete-alt fs-6 me-2"></i>Suspend member</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#"><i class="icofont-not-allowed fs-6 me-2"></i>Delete Member</a>
                                                                </li>
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

        <!-- Plugin Js -->
        <script src="assets/bundles/apexcharts.bundle.js"></script>
        <script src="assets/bundles/dataTables.bundle.js"></script>

        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
        <script>
            $("#sortable").sortable({
                stop: function (e) {
                    alert("X:" + e.screenX, "Y:" + e.screenY);
                },
            });
        </script>

        <!-- Jquery Page Js -->
        <script src="../js/template.js"></script>
        <script>
            // project data table
            $(document).ready(function () {
                $("#myProjectTable")
                    .addClass("nowrap")
                    .dataTable({
                        responsive: true,
                        columnDefs: [{ targets: [-1, -3], className: "dt-body-right" }],
                    });
            });
            // employees Line Column
            $(document).ready(function () {
                var options = {
                    chart: {
                        height: 350,
                        type: "line",
                        toolbar: {
                            show: false,
                        },
                    },
                    colors: ["var(--chart-color1)", "var(--chart-color2)"],
                    series: [
                        {
                            name: "Working Hours",
                            type: "column",
                            data: [440, 505, 414, 671, 227, 413, 201, 352, 752, 320, 257, 160],
                        },
                        {
                            name: "Employees Progress",
                            type: "line",
                            data: [23, 42, 35, 27, 43, 22, 17, 31, 22, 22, 12, 16],
                        },
                    ],
                    stroke: {
                        width: [0, 4],
                    },
                    //labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    labels: ["2001", "2002", "2003", "2004", "2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012"],
                    xaxis: {
                        type: "datetime",
                    },
                    yaxis: [
                        {
                            title: {
                                text: "Working Hours",
                            },
                        },
                        {
                            opposite: true,
                            title: {
                                text: "Employees Progress",
                            },
                        },
                    ],
                };
                var chart = new ApexCharts(document.querySelector("#apex-chart-line-column"), options);

                chart.render();
            });

            // employees circle
            $(document).ready(function () {
                var options = {
                    chart: {
                        height: 250,
                        type: "radialBar",
                    },
                    colors: ["var(--chart-color1)"],
                    plotOptions: {
                        radialBar: {
                            hollow: {
                                size: "70%",
                            },
                        },
                    },
                    series: [70],
                    labels: ["Working"],
                };
                var chart = new ApexCharts(document.querySelector("#apex-circle-chart"), options);

                chart.render();
            });

            // predecessora, responsavel
            function changeData(predecessora = "", responsavel = "") {
                alert(predecessora);
                alert(responsavel);
            }
        </script>

        <?php  include_once('incs/modal_sc.php') ; ?>

        <?php  include_once('incs/modal_riscos.php') ; ?>

        <?php  include_once('incs/excluir.php') ; ?>
        <?php  include_once('incs/modal_obs.php') ; ?>

        <script>
            function showNewTask() {
                var isVisible = $("#n-task").is(":visible");

                if (isVisible === false) {
                    $("#n-task-header").show("slow");
                    $("#n-task").show("slow");
                } else {
                    $("#n-task-header").hide("slow");
                    $("#n-task").hide("slow");
                }
            }

            function showFilters() {
                $("#modal_filters_tasks").modal("show");
            }

            function showSubs(){
                var isVisible = $("#subtasks").is(":visible");

                if (isVisible === false) {
                    $("#subtasks").show("slow");
                } else {
                    $("#subtasks").hide("slow");
                }
                
            }
        </script>

        <?php include_once('incs/modal_filters_tasks.php') ;?>
    </body>
</html>
