<?php 
include_once('cursor.php') ;
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Morph - HUB de Projetos</title>
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
            overflow-y:hidden !important;            
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
                
                <?php include_once('incs/projects.php') ; ?>
                
            </div>
        </div>

        <?php include_once('incs/members.php') ; ?>

        <!-- Create Project-->
        <div class="modal fade" id="createproject" tabindex="-1"  aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title  fw-bold" id="createprojectlLabel"> Create Project</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput77" class="form-label">Project Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput77" placeholder="Explain what the Project Name">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Project Category</label>
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
                        <label for="formFileMultipleone" class="form-label">Project Images & Document</label>
                        <input class="form-control" type="file" id="formFileMultipleone"  multiple>
                    </div>
                    <div class="deadline-form">
                        <form>
                            <div class="row g-3 mb-3">
                              <div class="col">
                                <label for="datepickerded" class="form-label">Project Start Date</label>
                                <input type="date" class="form-control" id="datepickerded">
                              </div>
                              <div class="col">
                                <label for="datepickerdedone" class="form-label">Project End Date</label>
                                <input type="date" class="form-control" id="datepickerdedone">
                              </div>
                            </div>
                            <div class="row g-3 mb-3">
                                <div class="col-sm-12">
                                    <label class="form-label">Notifation Sent</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>All</option>
                                        <option value="1">Team Leader Only</option>
                                        <option value="2">Team Member Only</option>
                                    </select>
                                </div>
                                <div class="col-sm-12">
                                    <label for="formFileMultipleone" class="form-label">Task Assign Person</label>
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
                        </form>
                    </div>
                    <div class="row g-3 mb-3">
                        <div class="col-sm">
                            <label for="formFileMultipleone" class="form-label">Budget</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="col-sm">
                            <label for="formFileMultipleone" class="form-label">Priority</label>
                            <select class="form-select" aria-label="Default select Priority">
                                <option selected>Highest</option>
                                <option value="1">Medium</option>
                                <option value="2">Low</option>
                                <option value="3">Lowest</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea78" class="form-label">Description (optional)</label>
                        <textarea class="form-control" id="exampleFormControlTextarea78" rows="3" placeholder="Add any extra details about the request"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                    <button type="button" class="btn btn-primary">Create</button>
                </div>
            </div>
            </div>
        </div>

        <!-- Edit Project-->
        <div class="modal fade" id="editproject" tabindex="-1"  aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title  fw-bold" id="editprojectLabel"> Edit Project</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput78" class="form-label">Project Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput78" value="Social Geek Made">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Project Category</label>
                        <select class="form-select" aria-label="Default select example">
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
                        <label for="formFileMultiple456" class="form-label">Project Images & Document</label>
                        <input class="form-control" type="file" id="formFileMultiple456">
                    </div>
                    <div class="deadline-form">
                        <form>
                            <div class="row g-3 mb-3">
                              <div class="col">
                                <label for="datepickerded123" class="form-label">Project Start Date</label>
                                <input type="date" class="form-control" id="datepickerded123" value="2021-01-10">
                              </div>
                              <div class="col">
                                <label for="datepickerded456" class="form-label">Project End Date</label>
                                <input type="date" class="form-control" id="datepickerded456" value="2021-04-10">
                              </div>
                            </div>
                            <div class="row g-3 mb-3">
                                <div class="col-sm-12">
                                    <label class="form-label">Notifation Sent</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>All</option>
                                        <option value="1">Team Leader Only</option>
                                        <option value="2">Team Member Only</option>
                                    </select>
                                </div>
                                <div class="col-sm-12">
                                    <label for="formFileMultipleone" class="form-label">Task Assign Person</label>
                                    <select class="form-select" multiple aria-label="Default select Priority">
                                        <option selected>Lucinda Massey</option>
                                        <option selected value="1">Ryan Nolan</option>
                                        <option selected value="2">Oliver Black</option>
                                        <option selected value="3">Adam Walker</option>
                                        <option selected value="4">Brian Skinner</option>
                                        <option value="5">Dan Short</option>
                                        <option value="5">Jack Glover</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="row g-3 mb-3">
                        <div class="col-sm">
                            <label for="formFileMultipleone" class="form-label">Priority</label>
                            <select class="form-select" aria-label="Default select Priority">
                                <option selected>Medium</option>
                                <option value="1">Highest</option>
                                <option value="2">Low</option>
                                <option value="3">Lowest</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea786" class="form-label">Description (optional)</label>
                        <textarea class="form-control" id="exampleFormControlTextarea786" rows="3">Social Geek Made,lorem urna commodo sem. Pellentesque venenatis leo quam, sed mattis sapien lobortis ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                        </textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                    <button type="button" class="btn btn-primary">Create</button>
                </div>
            </div>
            </div>
        </div>

        <!-- Modal  Delete Folder/ File-->
        <div class="modal fade" id="deleteproject" tabindex="-1"  aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title  fw-bold" id="deleteprojectLabel"> Delete item Permanently?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body justify-content-center flex-column d-flex">
                    <i class="icofont-ui-delete text-danger display-2 text-center mt-2"></i>
                    <p class="mt-4 fs-5 text-center">You can only delete this item Permanently</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger color-fff">Delete</button>
                </div>
            </div>
            </div>
        </div>
    </div>
</div> 

<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />



<!-- Jquery Page Js -->
<script src="js/template.js"></script>

<?php  include_once('incs/modal_sc_dash.php') ; ?>

<script>
    $(function() {
        $('input[name="daterange"]').daterangepicker();
    });

</script>

</body>

</html>