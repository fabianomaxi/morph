<?php 
include_once('cursor.php') ;
?>
<!doctype html>
<html class="no-js" lang="pt_br" dir="ltr">


<!-- Mirrored from pixelwibes.com/template/my-task/html/dist/ui-elements/auth-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Aug 2023 03:06:53 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Morph Project - Login</title>
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
</head>

<body>

<div id="mytask-layout" class="theme-indigo">

    <!-- main body area -->
    <div class="main-login p-2 py-3 p-xl-5 ">
        
        <!-- Body: Body -->
        <div class="body d-flex p-0 p-xl-5">
            <div class="container-xxl">

                <div class="row g-0">
                    <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center rounded-lg auth-h100">
                        <div style="max-width: 25rem;">
                            <!-- Image block -->
                            <div class="">
                                <img src="assets/images/login-img.png" alt="Caméléon Project">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-center align-items-center border-0 rounded-lg auth-h100">
                        <div class="w-100 p-3 p-md-5 card border-0 bg-dark text-light" style="max-width: 32rem;">
                            <!-- Form -->
                            <form class="row g-1 p-3 p-md-4" action="validaLogin.php" method="post" id="frmLogin">
                                <div class="col-12 text-center text-fxd mb-1 mb-lg-5">
                                    <h1>Login</h1>
                                    <span>Acesse o seu Morph</span>
                                </div>
                                <div class="col-12 text-center mb-4">
                                    <a class="btn btn-lg btn-outline-secondary btn-block" href="#">
                                        <span class="d-flex justify-content-center align-items-center">
                                            <img class="avatar xs me-2" src="assets/images/google.svg" alt="Image Description">
                                            Acessar com Google
                                        </span>
                                    </a>
                                    <span class="dividers text-fxd mt-4">OU</span>
                                </div>
                                <div class="col-12">
                                    <div class="mb-2 text-fxd">
                                        <label class="form-label">Usuário</label>
                                        <input type="email" class="form-control form-control-lg" name="email" id="email" placeholder="nome@exemplo.com">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-2 text-fxd">
                                        <div class="form-label">
                                            <span class="d-flex justify-content-between align-items-center">
                                                Senha
                                                <a class="text-secondary" href="auth-password-reset.html">Esqueceu sua senha?</a>
                                            </span>
                                        </div>
                                        <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="***************">
                                    </div>
                                </div>
                                <div class="col-12 text-fxd">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Lembre-se de mim
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 text-center mt-4">
                                    <input type="submit" class="btn btn-lg btn-block btn-light btn-color" atl="signin" value="Acessar agora" >
                                </div>
                                <div class="col-12 text-center mt-4">
                                    <span class="text-fxd">Ainda não é nosso cliente? <a href="auth-signup.html" class="text-secondary">Fale Conosco</a></span>
                                </div>
                            </form>
                            <!-- End Form -->
                        </div>
                    </div>
                </div> <!-- End Row -->
            </div>
        </div>
        <footer class="rodape-direitos" id="rodape">
    <p class="rodape-direitos">© 2023, Yourhelp – Todos os Direitos Reservados.</p>
</footer>
    </div>
</div>
<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>

</body>

<!-- Mirrored from pixelwibes.com/template/my-task/html/dist/ui-elements/auth-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Aug 2023 03:06:54 GMT -->
</html>