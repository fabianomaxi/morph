<?php 
include_once('cursor.php') ;
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>:: My-Task:: Members</title>
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

    <?php include_once('incs/header.php') ; ?>

        <!-- Body: Body -->
        <div class="body d-flex py-lg-3 py-md-2">
            <div class="container-xxl">
                <div class="row clearfix">
                    <div class="col-md-12">
                        <div class="card border-0 mb-4 no-bg">
                            <div class="card-header py-3 px-0 d-sm-flex align-items-center  justify-content-between border-bottom">
                                <h3 class=" fw-bold flex-fill mb-0 mt-sm-0">Colaboradores</h3>
                                <button type="button" class="btn btn-dark me-1 mt-1 w-sm-100" data-bs-toggle="modal" data-bs-target="#modal_sc" onclick="javascript:$('#iframesc').attr('src', 'adds/form_users/?id_companies=1&id_users=')"><i class="icofont-plus-circle me-2 fs-6"></i>Adicionar Colaborador</button>
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle mt-1  w-sm-100" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                        Status
                                    </button>
                                    <ul class="dropdown-menu  dropdown-menu-end" aria-labelledby="dropdownMenuButton2">
                                    <li><a class="dropdown-item" href="#">All</a></li>
                                    <li><a class="dropdown-item" href="#">Task Assign Members</a></li>
                                    <li><a class="dropdown-item" href="#">Not Assign Members</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Row End -->
                <div class="row g-3 row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-2 row-deck py-1 pb-4">
                    
                <?php 
                    $sql = "select * from users where status = 1 " ;
                    $c = new Cursor( $sql ) ;
                    if( $c->linhas() > 0 ){
                        while(!$c->eof()){
                            $r = $c->fetch() ;
                ?>
                    <div class="col">
                        <div class="card teacher-card">
                            <div class="card-body d-flex">
                                <div class="profile-av pe-xl-4 pe-md-2 pe-sm-4 pe-4 text-center w220">
                                    <img src="adds/_lib/file/img/foto_usuario/<?=$r['id_clients']?>/<?=$r['photo']?>" alt="" class="avatar xl rounded-circle img-thumbnail shadow-sm">
                                    <div class="about-info d-flex align-items-center mt-3 justify-content-center">
                                        <div class="followers me-2">
                                            <i class="icofont-tasks color-careys-pink fs-4"></i>
                                            <span class="">04</span>
                                        </div>
                                        <div class="star me-2">
                                            <i class="icofont-star text-warning fs-4"></i>
                                            <span class=""><?=$r['evaluation']?></span>
                                        </div>
                                        <div class="own-video">
                                            <i class="icofont-data color-light-orange fs-4"></i>
                                            <span class=""><?=$r['completed_projects']?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="teacher-info border-start ps-xl-4 ps-md-3 ps-sm-4 ps-4 w-100">
                                    <h6  class="mb-0 mt-2  fw-bold d-block fs-6"><?=$r['name']?></h6>
                                    <span class="light-info-bg py-1 px-2 rounded-1 d-inline-block fw-bold small-11 mb-0 mt-1">UI/UX Designer</span>
                                    <div class="video-setting-icon mt-3 pt-3 border-top">
                                        <p><?=utf8_encode($r['descriptions'])?></p>
                                    </div>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_sc" onclick="javascript:$('#iframesc').attr('src', 'adds/form_users/?id_companies=1&id_users=<?=$r['id_users']?>')" class="btn btn-dark btn-sm mt-1"><i class="icofont-invisible me-2 fs-6"></i>Ver Perfil</a>
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
        
       <!-- Modal Members-->
       <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="addUserLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title  fw-bold" id="addUserLabel">Convidar Colaborador</h5>
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
                    <h6 class="fw-bold ">Colaboradores </h6>
                    <ul class="list-unstyled list-group list-group-custom list-group-flush mb-0">
                        <li class="list-group-item py-3 text-center text-md-start">
                            <div class="d-flex align-items-center flex-column flex-sm-column flex-md-row">
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
                            <div class="d-flex align-items-center flex-column flex-sm-column flex-md-row">
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
                                                    Member
                                                <span>Can view, edit, delete, comment on and save files</span>
                                               </a>
                                               
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fs-6 p-2 me-1"></i>
                                                        Admin
                                                    <span>Member, but can invite and manage team members</span>
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
                            <div class="d-flex align-items-center flex-column flex-sm-column flex-md-row">
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
                                                    Member
                                                <span>Can view, edit, delete, comment on and save files</span>
                                               </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fs-6 p-2 me-1"></i>
                                                        Admin
                                                    <span>Member, but can invite and manage team members</span>
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

        <!-- Create Employee-->
        <div class="modal fade" id="createemp" tabindex="-1"  aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title  fw-bold" id="createprojectlLabel"> Add Employee</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleFormControlInput877" class="form-label">Employee Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput877" placeholder="Explain what the Project Name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput977" class="form-label">Employee Company</label>
                            <input type="text" class="form-control" id="exampleFormControlInput977" placeholder="Explain what the Project Name">
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultipleoneone" class="form-label">Employee Profile</label>
                            <input class="form-control" type="file" id="formFileMultipleoneone" >
                        </div>
                        <div class="deadline-form">
                            <form>
                                <div class="row g-3 mb-3">
                                    <div class="col-sm-6">
                                        <label for="exampleFormControlInput1778" class="form-label">Employee ID</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1778" placeholder="User Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="exampleFormControlInput2778" class="form-label">Joining Date</label>
                                        <input type="date" class="form-control" id="exampleFormControlInput2778">
                                    </div>
                                </div>
                                <div class="row g-3 mb-3">
                                <div class="col">
                                    <label for="exampleFormControlInput177" class="form-label">User Name</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput177" placeholder="User Name">
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlInput277" class="form-label">Password</label>
                                    <input type="Password" class="form-control" id="exampleFormControlInput277" placeholder="Password">
                                </div>
                                </div> 
                                <div class="row g-3 mb-3">
                                    <div class="col">
                                        <label for="exampleFormControlInput477" class="form-label">Email ID</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput477" placeholder="User Name">
                                    </div>
                                    <div class="col">
                                        <label for="exampleFormControlInput777" class="form-label">Phone</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput777" placeholder="User Name">
                                    </div>
                                </div>
                                <div class="row g-3 mb-3">
                                    <div class="col">
                                        <label  class="form-label">Department</label>
                                        <select class="form-select" aria-label="Default select Project Category">
                                            <option selected>Web Development</option>
                                            <option value="1">It Management</option>
                                            <option value="2">Marketing</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label  class="form-label">Designation</label>
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
                                </div>
                            </form>
                        </div>
                        <div class="mb-3">          
                            <label for="exampleFormControlTextarea78" class="form-label">Description (optional)</label>
                            <textarea class="form-control" id="exampleFormControlTextarea78" rows="3" placeholder="Add any extra details about the request"></textarea>
                        </div> 
                        <div class="table-responsive">
                            <table class="table table-striped custom-table">
                                <thead>
                                    <tr>
                                        <th>Project Permission</th>
                                        <th class="text-center">Read</th>
                                        <th class="text-center">Write</th>
                                        <th class="text-center">Create</th>
                                        <th class="text-center">Delete</th>
                                        <th class="text-center">Import</th>
                                        <th class="text-center">Export</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="fw-bold">Projects</td>
                                        <td class="text-center">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" checked>
                                        </td>
                                        <td class="text-center">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2" checked>
                                        </td>
                                        <td class="text-center">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3" checked>
                                        </td>
                                        <td class="text-center">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4" checked>
                                        </td>
                                        <td class="text-center">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5" checked>
                                        </td>
                                        <td class="text-center">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault6" checked>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td  class="fw-bold">Tasks</td>
                                        <td class="text-center">
                        
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault7" checked>
                        
                                        </td>
                                        <td class="text-center">
                        
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault8" checked>
                        
                                        </td>
                                        <td class="text-center">
                        
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault9" checked>
                        
                                        </td>
                                        <td class="text-center">
                        
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault10" checked>
                        
                                        </td>
                                        <td class="text-center">
                        
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault11" checked>
                        
                                        </td>
                                        <td class="text-center">
                        
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault12" checked>
                        
                                        </td>
                                    </tr>
                                    <tr>
                                        <td  class="fw-bold">Chat</td>
                                        <td class="text-center">
                        
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault13" checked>
                        
                                        </td>
                                        <td class="text-center">
                        
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault14" checked>
                        
                                        </td>
                                        <td class="text-center">
                        
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault15" checked>
                        
                                        </td>
                                        <td class="text-center">
                        
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault16" checked>
                        
                                        </td>
                                        <td class="text-center">
                        
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault17" checked>
                        
                                        </td>
                                        <td class="text-center">
                        
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault18" checked>
                        
                                        </td>
                                    </tr>
                                    <tr>
                                        <td  class="fw-bold">Estimates</td>
                                        <td class="text-center">
                        
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault19" checked>
                        
                                        </td>
                                        <td class="text-center">
                        
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault20" checked>
                        
                                        </td>
                                        <td class="text-center">
                        
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault21" checked>
                        
                                        </td>
                                        <td class="text-center">
                        
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault22" checked>
                        
                                        </td>
                                        <td class="text-center">
                        
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault23" checked>
                        
                                        </td>
                                        <td class="text-center">
                        
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault24" checked>
                        
                                        </td>
                                    </tr>
                                    <tr>
                                        <td  class="fw-bold">Invoices</td>
                                        <td class="text-center">
                        
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault25" checked>
                        
                                        </td>
                                        <td class="text-center">
                        
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault26">
                        
                                        </td>
                                        <td class="text-center">
                        
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault27" checked>
                        
                                        </td>
                                        <td class="text-center">
                        
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault28">
                        
                                        </td>
                                        <td class="text-center">
                        
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault29" checked>
                        
                                        </td>
                                        <td class="text-center">
                        
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault30" checked>
                        
                                        </td>
                                    </tr>
                                    <tr>
                                        <td  class="fw-bold">Timing Sheets</td>
                                        <td class="text-center">
                        
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault31" checked>
                        
                                        </td>
                                        <td class="text-center">
                        
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault32" checked>
                        
                                        </td>
                                        <td class="text-center">
                        
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault33" checked>
                        
                                        </td>
                                        <td class="text-center">
                        
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault34" checked>
                        
                                        </td>
                                        <td class="text-center">
                        
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault35" checked>
                        
                                        </td>
                                        <td class="text-center">
                        
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault36" checked>
                        
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                        <button type="button" class="btn btn-primary">Create</button>
                    </div> 
                </div>  
            </div>
        </div>
    </div>
</div>

<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>

<!-- Jquery Page Js -->
<script src="../js/template.js"></script>

<?php  include_once('incs/modal_sc.php') ; ?>

</body>

</html>