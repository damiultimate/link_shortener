
<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Linklock Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
    <link rel="icon" type="image/png" href="assets/images/favicon.png"/>

    <link href="./main.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../extras/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="../../extras/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../../extras/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../../extras/plugins/jqvmap/jqvmap.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../extras/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../../extras/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../../extras/plugins/summernote/summernote-bs4.css">

    <link rel="stylesheet" href="../load-animation.css"/>
</head>
<body onload="myFunction()">
    <!-- <div class="sk-chase" id="sk-chase">
    <div class="sk-chase-dot"></div>
    <div class="sk-chase-dot"></div>
    <div class="sk-chase-dot"></div>
    <div class="sk-chase-dot"></div>
    <div class="sk-chase-dot"></div>
    <div class="sk-chase-dot"></div>
    </div> -->
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
       

        <div class="app-header header-shadow bg-primary header-text-light">
            <div class="app-header__logo">
                <div class="logo-src" style="visibility: hidden;"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic1 pc_close_sidebar" data-class="closed-sidebar1">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        

        </div>   

        <div class="app-main">
                <div class="app-sidebar sidebar-shadow bg-night-sky sidebar-text-light">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Menu</li>
                                <li>
                                    <a href="javascript:loadPage('dashboard.php','dashboard')" class="dashboard mm-active">
                                        <i class="metismenu-icon pe-7s-users"></i>
                                        Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:loadPage('create-link.php','createLink')" class="createLink">
                                        <i class="metismenu-icon pe-7s-link"></i>
                                        Links
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:loadPage('affiliate-programs.php','affiliate')" class="affiliate">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        Affiliate Programs
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="javascript:loadPage('withdrawal.php','withdrawal')" class="withdrawal">
                                        <i class="metismenu-icon pe-7s-cash"></i>
                                        Withdrawal
                                    </a>
                                </li>
                                 <li>
                                    <a href="javascript:loadPage('news.php','news')" class="news">
                                        <i class="metismenu-icon pe-7s-news-paper"></i>
                                        News
                                       <span class="badge" style="display: inline-block;
min-width: 10px;
padding: 3px 7px;
font-size: 12px;
font-weight: 700;
color: #fff;
text-align: center;
background-color: #e65252;
margin-top: 6%;
border-radius: 10px;
float: right;">5</span>

                                    </a>
                                </li>
                                <li>
                                    <a href="" class="">
                                        <i class="metismenu-icon pe-7s-hammer"></i>
                                        Legal
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="javascript:loadPage('legal.php','terms')" class="terms">
                                                <i class="metismenu-icon">
                                                </i>Terms and Conditions
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:loadPage('legal.php','disclaimer')" class="disclaimer">
                                                <i class="metismenu-icon">
                                                </i>Disclaimer
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:loadPage('legal.php','privacy')" class="privacy">
                                                <i class="metismenu-icon">
                                                </i>Privacy Policy
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:logout()" class="">
                                        <i class="metismenu-icon pe-7s-back"></i>
                                        Log out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>   
                <style type="text/css">
                    .loader_icon{
                        position: fixed;
                        z-index: 8;
                        top: calc(50% - 2.5rem);
                        left:calc(50% - 2.5rem);
                        background: rgba(0,0,0,0.5);
                        color: white;
                        box-shadow: 0px 0px 0px 700vh rgba(0,0,0,0.5);
                        display: none;
                    }
                </style>
                 <div class="app-main__outer">
            <div class="loader_icon spinner-border" style="width: 5rem; height: 5rem;" role="status">
                  <span class="sr-only">Loading...</span>
            </div>

<script type="text/javascript" src="assets/scripts/main.js"></script>
<script type="text/javascript" src="assets/scripts/jquery.js"></script>
<script src="../../sweetalert2-9.js"></script>

                    <div class="app-main__inner">

               <?php include('dashboard.php'); ?>

                    </div>
                    <div class="app-wrapper-footer">
                        <div class="app-footer">
                            <div class="app-footer__inner">
                               
                                <div class="app-footer-right">
                                    &copy;2020 &nbsp;&nbsp;<b>  Linklock.pro</b>
                                </div>
                            </div>
                        </div>
                    </div>    </div>
        </div>
    </div>
    <style type="text/css">
    .image_second_logo {
        width: 132px;
         height: 33px; 
    }
    .image_second_logo_par { 
        padding-top: 1.1rem;
        z-index: 1000000000000;
        position: fixed;
        top:0; 
        left:0;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        pointer-events: none;
    } 
    @media screen and (max-width: 980px){
        .logo-src {
            display: none;
        }
        .image_second_logo_par {
            display: block;
            padding-top: 1.1rem;
            z-index: 1000000000000;
            position: fixed;
            top:0; 
            left:0;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            pointer-events: none;
        }
    }

     @media screen and (min-width: 981px) and (max-width: 1280px){
    .logo-src{
            visibility: hidden;
        }
    .image_second_logo {
        width: 140px;
         height: 35px; 
    }
    .image_second_logo_par { 
        padding-top: 0.8rem;
        z-index: 1000000000000;
        position: fixed;
        top:0; 
        left:0;
        width: auto;
        pointer-events: none;
        margin-left:45px;
     } 

    }

    @media screen and (min-width: 1281px){
        .logo-src{
            visibility: hidden;
        }
       .image_second_logo {
        width: 140px;
         height: 35px; 
    }
    .image_second_logo_par { 
        padding-top: 0.8rem;
        z-index: 1000000000000;
        position: fixed;
        top:0; 
        left:0;
        width: auto;
        pointer-events: none;
        margin-left:32px;
    } 

    }
  
</style>
<div class="image_second_logo_par">
    <img class="image_second_logo" src="assets/images/logo-inverse.png" />
</div>

<script src="../stop-load.js"></script>
<script type="text/javascript">

//sued to load another page with ajax
    function loadPage(link,className){

$(".loader_icon").css('display','block');

//ajax loading code

$.ajax(link, { 
    success: function(result,status){

//on success, remove loading icon, replace the content and make the sidebar that was clicked active

$(".mm-active").removeClass('mm-active');

$(".loader_icon").css('display','none');

$('.'+className).addClass('mm-active');

  $('.app-main__inner').html(result);

},
error: function(xhr,text,error){

    //on error, show the error alert stuff

Swal.fire('Error','That page could not be loaded, please resolve your internet connectivity issues and try again.','error').then(function(){

$(".loader_icon").css('display','none');


        });
  
},
dataType: 'html',
timeout: 20000
});
    }

function logout(){

    Swal.fire({title:'Are you sure you want to log out?',
       confirmButtonText:'Yes',
        icon:'question',
        showCancelButton: true}).then(function(result){
if(result.value){
    //logout the user
    alert(0);
}
        });
}






</script>


</body>
</html>
