<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documentation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/vendors/codemirror/codemirror.css" />
    <link rel="stylesheet" href="/assets/vendors/codemirror/ambiance.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.45.0/theme/dracula.min.css">
    <link rel="stylesheet" href="/assets/vendors/pwstabs/jquery.pwstabs.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="/stackpath/style.css">
    <link rel="shortcut icon" href="/assets/images/xcs-int/favicon.png" />
</head>
<body>
    <div class="container-fluid documentation">
        <div class="row">
          <div class="col-md-3 col-xl-2 left-sidebar">
            <div class="logo-wrapper">
              <a href="/">
                <img src="/assets/images/logo.svg" alt="logo" class="logo">
              </a>
            </div>
            <h5 class="left-menu-title">Documentation</h5>
            <ul class="left-menu">
                <li><a href="#introduction"> Introduction </a></li>
                <li><a href="#getting-started"> Getting started </a></li>
                <li><a href="#options"> Options </a></li>
                <li><a href="#basic-structure"> Basic structure </a></li>
            </ul>
            <h5 class="left-menu-title">Components</h5>
            <ul class="left-menu">
                <li><a href="#basic-ui"> Basic UI Elements </a></li>
                <li><a href="#basic-ui-2"> Basic UI Elements-2  </a></li>
                <li><a href="#advanced-ui"> Advanced UI Elements </a></li>
                <li><a href="#media"> Media </a></li>
                <li><a href="#tables"> Tables </a></li>
                <li><a href="#charts"> Charts </a></li>
                <li><a href="#maps"> Maps </a></li>
                <li><a href="#forms"> Forms </a></li>
                <li><a href="#additional-form"> Additional Form Elements </a></li>
                <li><a href="#icons"> Icons </a></li>
                <li><a href="#file-upload"> File upload </a></li>
                <li><a href="#form-picker"> Form Picker </a></li>
                <li><a href="#editors"> Editors </a></li>
            </ul>
            <h5 class="left-menu-title"><a class="text-body" href="#credits"> Credits </a></h5>            
            <a class="d-block mt-4 text-muted" target="_blank" href="/index.html">Go to Home</a>
          </div>
          <div class="col-md-9 col-xl-10 main-panel">
            <div class="main-panel-wrapper">
              <div class="row">
                <div class="col-12 mb-4">
                  <h2 class="mt-2 text-center font-weight-light text-uppercase">Documentation</h2>
                </div>
                <div class="col-12 grid-margin" id="introduction">
                  <div class="card">
                      <div class="card-body">
                          <h3 class="mb-4">Introduction</h3>
                          <p>Corona Admin is a responsive HTML template that is based on the CSS framework Bootstrap 4 and it is built with Sass. Sass compiler makes it easier to code and customize. If you are unfamiliar with Bootstrap or Sass, visit their
                              website and read through the documentation. All of Bootstrap components have been modified to fit the style of Corona Admin and provide a consistent look throughout the template.</p>
                          <p>Before you start working with the template, we suggest you go through the pages that are bundled with the theme. Most of the template example pages contain quick tips on how to create or use a component which can
                              be really helpful when you need to create something on the fly.</p>
                          <p class="d-inline"><strong>Note</strong>: We are trying our best to document how to use the template. If you think that something is missing from the documentation, please do not hesitate to tell us about it. If you have any questions or issues regarding this theme please use Envato support form on our profile or email us at <a class="d-inline text-info" href="mailto:support@bootstrapdash.com">support@bootstrapdash.com</a></p>
                      </div>
                  </div>
                </div>
                <div class="col-12 grid-margin" id="getting-started">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="mb-4">Getting started</h3>
                            <p>You can directly use the compiled and ready-to-use the version of the template. But in case you plan to customize the template extensively the template allows you to do so.</p>
                            <p>Within the download you'll find the following directories and files, logically grouping common assets and providing both compiled and minified variations:</p>
                            <textarea class="shell-mode">
Corona/
├ jquery/
  ├ documentation/
  ├ template/
      ├ assets/
          ├ css/
          ├ fonts/
          ├ images/
          ├ js/
          ├ scss/
          ├ vendors/
      ├ modern-vertical/
          ├ pages/
          ├ partials/
          ├ index.html
      ├ classic-vertical/
      ├ modern-horizontal/
      ├ classic-horizontal/
      ├ tinted-sidebar/
      ├ gulp-tasks/
      ├ gulpfile.js
      ├ index.html
      ├ package.json
  ├ CHANGELOG.md</textarea>
                            <p class="mt-1">Note: The root folder denoted further in this documentation refers to the 'template' folder inside the downloaded folder</p>
                            <div class="alert alert-success mt-4 d-flex align-items-center" role="alert">
                              <i class="ti-info-alt"></i>
                              <p>We have bundled up the vendor files needed for demo purpose into a folder 'vendors', you may not need all those vendors in your application.  If you want to make any change in the vendor package files, you need to change the src path for related tasks in the file gulpfile.js and run the task <code>bundleVendors</code> to rebuild the vendor files.</p>
                            </div>
                            <hr class="mt-5">
                            <h4 class="mt-4">Installation</h4>
                            <p class="mb-0">
                              You need to install package files/Dependencies for this project if you want to customize it. To do this, you must have <span class="font-weight-bold">node and npm</span> installed in your computer.
                            </p>
                            <p class="mb-0">Installation guide of the node can be found <a href="https://nodejs.org/en/" target="_blank">here</a>. As npm comes bundled with a node, a separate installation of npm is not needed.</p>
                            <p>
                                If you have installed them, just go to the root folder and run the following command in your command prompt or terminal (for the mac users).
                            </p>
                            <textarea class="shell-mode">
  npm install</textarea>
                            <p class="mt-4">
                              This will install the dev dependencies in the local <span class="font-weight-bold">node_modules</span> folder in your root directory.
                            </p>
                            <p class="mt-2">
                              Then you will need to install <span class="font-weight-bold">Gulp</span>. We use the Gulp task manager for the development processes. Gulp will watch for changes to the SCSS files and automatically compile the files to CSS.
                            </p>
                            <p>Getting started with Gulp is pretty simple. The <a href="https://gulpjs.com/" target="_blank">Gulp</a> site is a great place to get information on installing Gulp if you need more information. You need to first install Gulp-cli in your machine using the below command.</p>
                            <textarea class="shell-mode">
  npm install -g gulp-cli</textarea>
                            <p class="mt-4">This installs Gulp-cli globally to your machine. The other thing that Gulp requires, which, is really what does all the work, is the gulpfile.js. In this file, you set up all of your tasks that you will run.</p>
                            <p>Don't worry. We have this file already created for you!</p>
                            <p>To run this project in development mode enter the following command below. This will start the file watch by gulp and whenever a file is modified, the SCSS files will be compiled to create the CSS file.</p>
  <textarea class="shell-mode">
  gulp serve</textarea>           
                            <div class="alert alert-warning mt-4" role="alert">
                              <i class="ti-info-alt-outline"></i>It is important to run <code>gulp serve</code> command from the directory where the gulpfile.js is located.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 grid-margin" id="options">
                  <div class="card">
                    <div class="card-body">
                      <h3 class="card-title">Options</h3>
                      <p> We have provided a bunch of layout options for you with a single class change! You can use the following classes for each layout. </p>
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr class="">
                              <th>Layout</th>
                              <th>Class</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Compact menu</td>
                              <td>sidebar-mini</td>
                            </tr>
                            <tr>
                              <td>Icon menu</td>
                              <td>sidebar-icon-only</td>
                            </tr>
                            <tr>
                              <td>Sidebar Hidden (togglable)</td>
                              <td>sidebar-toggle-display, sidebar-hidden</td>
                            </tr>
                            <tr>
                              <td>Sidebar Overlay</td>
                              <td>sidebar-absolute, sidebar-hidden</td>
                            </tr>
                            <tr>
                              <td>Boxed layout</td>
                              <td>boxed-layout</td>
                            </tr>
                            <tr>
                              <td>RTL layout</td>
                              <td>rtl</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 grid-margin" id="basic-structure">
                  <div class="card">
                    <div class="card-body">
                      <h3 class="card-title">Basic structure</h3>
                      <p class="mb-5"> The below snippet shows the basic HTML structure of Corona Admin. Please note that all the stylesheets and script files in the below snippet should be included to render Corona Admin styles. </p>
                      <div class="demo-tabs">
                          <!-- Tabs Starts -->
                          <div data-pws-tab="Modern Vertical" data-pws-tab-name="Modern Vertical">
                            <p>This section contains code of modern vertical layout. For other layouts in vertical mode like boxed, icon-menu etc., you can follow the snippet same as below, but you have to just add the appropriate optional class to the body. More details of the classes are given in <a href="#options">Options</a> section</p>
<textarea class="multiple-codes mt-5">
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Corona Admin</title>
      <!-- plugins:css -->
      <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
      <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
      <!-- endinject -->
      <!-- Plugin css for this page -->
      <link rel="stylesheet" href="../assets/vendors/jvectormap/jquery-jvectormap.css">
      <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
      <link rel="stylesheet" href="../assets/vendors/owl-carousel-2/owl.carousel.min.css">
      <link rel="stylesheet" href="../assets/vendors/owl-carousel-2/owl.theme.default.min.css">
      <!-- End plugin css for this page -->
      <!-- inject:css -->
      <!-- endinject -->
      <!-- Layout styles -->
      <link rel="stylesheet" href="../assets/css/modern-vertical/style.css">
      <!-- End layout styles -->
      <link rel="shortcut icon" href="images/favicon.png" />
    </head>
    <body>
      <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo" href="index.html"><img src="../assets/images/logo.svg" alt="logo" /></a>
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="text" class="form-control" placeholder="Search products">
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item d-none d-lg-block">
                <div class="nav-link">
                  <button class="btn btn-success">+ Create New Project</button>
                </div>
              </li>
              <li class="nav-item nav-settings d-none d-lg-block">
                <a class="nav-link" href="#">
                  <i class="mdi mdi-view-grid"></i>
                </a>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                  <i class="mdi mdi-email"></i>
                  <span class="count bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                  <h6 class="p-3 mb-0">Messages</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                      <p class="text-muted mb-0"> 1 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                      <p class="text-muted mb-0"> 15 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                      <p class="text-muted mb-0"> 18 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">4 new messages</p>
                </div>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell"></i>
                  <span class="count bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notifications</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-calendar text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Event today</p>
                      <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                      <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-link-variant text-warning"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Launch Admin</p>
                      <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all notifications</p>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="../assets/images/faces/face15.jpg" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Henry Klein</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">Advanced profile settings</p>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <!-- partial:partials/_sidebar.html -->
          <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
              <li class="nav-item profile">
                <div class="profile-desc">
                  <div class="profile-pic">
                    <div class="count-indicator">
                      <img class="img-xs rounded-circle " src="../assets/images/faces/face15.jpg" alt="">
                      <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                      <h5 class="mb-0 font-weight-normal">Henry Klein</h5>
                      <span>Gold Member</span>
                    </div>
                  </div>
                  <a href="#" class="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                </div>
              </li>
              <li class="nav-item nav-category">
                <span class="nav-link">Navigation</span>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" href="index.html">
                  <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                  </span>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" href="pages/widgets/widgets.html">
                  <span class="menu-icon">
                    <i class="mdi mdi-texture"></i>
                  </span>
                  <span class="menu-title">Widgets</span>
                </a>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
                  <span class="menu-icon">
                    <i class="mdi mdi-view-list"></i>
                  </span>
                  <span class="menu-title">Page Layouts</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="page-layouts">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/layout/boxed-layout.html">Boxed</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/layout/rtl-layout.html">RTL</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false" aria-controls="sidebar-layouts">
                  <span class="menu-icon">
                    <i class="mdi mdi-crosshairs-gps"></i>
                  </span>
                  <span class="menu-title">Sidebar Layouts</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="sidebar-layouts">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/layout/compact-menu.html">Compact menu</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-collapsed.html">Icon menu</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-hidden.html">Sidebar Hidden</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-hidden-overlay.html">Sidebar Overlay</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-fixed.html">Sidebar Fixed</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                  <span class="menu-icon">
                    <i class="mdi mdi-laptop"></i>
                  </span>
                  <span class="menu-title">Basic UI Elements</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/accordions.html">Accordions</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/badges.html">Badges</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/breadcrumbs.html">Breadcrumbs</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/modals.html">Modals</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/progress.html">Progress bar</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/pagination.html">Pagination</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/tabs.html">Tabs</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
                  <span class="menu-icon">
                    <i class="mdi mdi-settings"></i>
                  </span>
                  <span class="menu-title">Advanced Elements</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-advanced">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dragula.html">Dragula</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/clipboard.html">Clipboard</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/context-menu.html">Context menu</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/slider.html">Slider</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/loaders.html">Loaders</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/colcade.html">Colcade</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/carousel.html">Carousel</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/tooltips.html">Tooltips</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                  <span class="menu-icon">
                    <i class="mdi mdi-playlist-play"></i>
                  </span>
                  <span class="menu-title">Form Elements</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="form-elements">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/forms/basic_elements.html">Basic Form</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/forms/advanced_elements.html">Advanced Form</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/forms/validation.html">Validation</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/forms/wizard.html">Wizard</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                  <span class="menu-icon">
                    <i class="mdi mdi-table-large"></i>
                  </span>
                  <span class="menu-title">Tables</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="tables">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/tables/data-table.html">Data table</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/tables/js-grid.html">Js-grid</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/tables/sortable-table.html">Sortable table</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="false" aria-controls="editors">
                  <span class="menu-icon">
                    <i class="mdi mdi-format-text"></i>
                  </span>
                  <span class="menu-title">Editors</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="editors">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/forms/text_editor.html">Text editors</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/forms/code_editor.html">Code Editor</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                  <span class="menu-icon">
                    <i class="mdi mdi-chart-bar"></i>
                  </span>
                  <span class="menu-title">Charts</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="charts">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/morris.html">Morris</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/flot-chart.html">Flot</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/google-charts.html">Google charts</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/sparkline.html">Sparkline js</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/c3.html">C3 charts</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/chartist.html">Chartists</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/justGage.html">JustGage</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps">
                  <span class="menu-icon">
                    <i class="mdi mdi-map-marker-radius"></i>
                  </span>
                  <span class="menu-title">Maps</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="maps">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/maps/google-maps.html">Google Maps</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/maps/mapael.html">Mapeal</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/maps/vector-map.html">Vector map</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" href="pages/ui-features/notifications.html">
                  <span class="menu-icon">
                    <i class="mdi mdi-bell-ring"></i>
                  </span>
                  <span class="menu-title">Notifications</span>
                </a>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                  <span class="menu-icon">
                    <i class="mdi mdi-contacts"></i>
                  </span>
                  <span class="menu-title">Icons</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="icons">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/icons/flag-icons.html">Flag icons</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/icons/font-awesome.html">Font Awesome</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/icons/simple-line-icon.html">Simple line icons</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/icons/themify.html">Themify icons</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item nav-category">
                <span class="nav-link">More</span>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" href="pages/ui-features/popups.html">
                  <span class="menu-icon">
                    <i class="mdi mdi-forum"></i>
                  </span>
                  <span class="menu-title">Popups</span>
                </a>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                  <span class="menu-icon">
                    <i class="mdi mdi-security"></i>
                  </span>
                  <span class="menu-title">User Pages</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="auth">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                  <span class="menu-icon">
                    <i class="mdi mdi-earth"></i>
                  </span>
                  <span class="menu-title">General Pages</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="general-pages">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/profile.html"> Profile </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/portfolio.html"> Portfolio </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/faq.html"> FAQ </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/faq-2.html"> FAQ 2 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/search-results.html"> Search Results </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/news-grid.html"> News grid </a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
                  <span class="menu-icon">
                    <i class="mdi mdi-lock"></i>
                  </span>
                  <span class="menu-title">Error pages</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="error">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#e-commerce" aria-expanded="false" aria-controls="e-commerce">
                  <span class="menu-icon">
                    <i class="mdi mdi-medical-bag"></i>
                  </span>
                  <span class="menu-title">E-commerce</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="e-commerce">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/invoice.html"> Invoice </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/pricing-table.html"> Pricing Table </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/orders.html"> Orders </a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" href="pages/apps/calendar.html">
                  <span class="menu-icon">
                    <i class="mdi mdi-calendar-today"></i>
                  </span>
                  <span class="menu-title">Calendar</span>
                </a>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" href="pages/apps/todo.html">
                  <span class="menu-icon">
                    <i class="mdi mdi-bulletin-board"></i>
                  </span>
                  <span class="menu-title">Todo list</span>
                </a>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" href="pages/apps/email.html">
                  <span class="menu-icon">
                    <i class="mdi mdi-email"></i>
                  </span>
                  <span class="menu-title">E-mail</span>
                </a>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" href="pages/apps/gallery.html">
                  <span class="menu-icon">
                    <i class="mdi mdi-image-filter-center-focus-weak"></i>
                  </span>
                  <span class="menu-title">Gallery</span>
                </a>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" href="../../documentation/documentation.html">
                  <span class="menu-icon">
                    <i class="mdi mdi-file-document-box"></i>
                  </span>
                  <span class="menu-title">Documentation</span>
                </a>
              </li>
            </ul>
          </nav>
          <!-- partial -->
          <div class="main-panel">
            <div class="content-wrapper">
              <div class="row">
                <div class="col-12 grid-margin stretch-card">
                  <div class="card corona-gradient-card">
                    <div class="card-body py-0 px-0 px-sm-3">
                      <div class="row align-items-center">
                        <div class="col-4 col-sm-3 col-xl-2">
                          <img src="../assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">
                        </div>
                        <div class="col-5 col-sm-7 col-xl-8 p-0">
                          <h4 class="mb-1 mb-sm-0">New refreshing look</h4>
                          <p class="mb-0 font-weight-normal d-none d-sm-block">Corona admin template now with a new facelift for enhanced legibility and aesthetics!</p>
                        </div>
                        <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                          <button class="btn btn-outline-light btn-rounded get-started-btn">Get Started</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$12.34</h3>
                            <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="icon icon-box-success ">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Potential growth</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$17.34</h3>
                            <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="icon icon-box-success">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Revenue current</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$12.34</h3>
                            <p class="text-danger ml-2 mb-0 font-weight-medium">-2.4%</p>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="icon icon-box-danger">
                            <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Daily Income</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$31.53</h3>
                            <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="icon icon-box-success ">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Expense current</h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Transaction History</h4>
                      <canvas id="transaction-history" class="transaction-chart"></canvas>
                      <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                        <div class="text-md-center text-xl-left">
                          <h6 class="mb-1">Transfer to Paypal</h6>
                          <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
                        </div>
                        <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                          <h6 class="font-weight-bold mb-0">$236</h6>
                        </div>
                      </div>
                      <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                        <div class="text-md-center text-xl-left">
                          <h6 class="mb-1">Tranfer to Stripe</h6>
                          <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
                        </div>
                        <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                          <h6 class="font-weight-bold mb-0">$593</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-8 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-row justify-content-between">
                        <h4 class="card-title mb-1">Open Projects</h4>
                        <p class="text-muted mb-1">Your data status</p>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <div class="preview-list">
                            <div class="preview-item border-bottom">
                              <div class="preview-thumbnail">
                                <div class="preview-icon bg-primary">
                                  <i class="mdi mdi-file-document"></i>
                                </div>
                              </div>
                              <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                  <h6 class="preview-subject">Admin dashboard design</h6>
                                  <p class="text-muted mb-0">Broadcast web app mockup</p>
                                </div>
                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                  <p class="text-muted">15 minutes ago</p>
                                  <p class="text-muted mb-0">30 tasks, 5 issues </p>
                                </div>
                              </div>
                            </div>
                            <div class="preview-item border-bottom">
                              <div class="preview-thumbnail">
                                <div class="preview-icon bg-success">
                                  <i class="mdi mdi-cloud-download"></i>
                                </div>
                              </div>
                              <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                  <h6 class="preview-subject">Wordpress Development</h6>
                                  <p class="text-muted mb-0">Upload new design</p>
                                </div>
                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                  <p class="text-muted">1 hour ago</p>
                                  <p class="text-muted mb-0">23 tasks, 5 issues </p>
                                </div>
                              </div>
                            </div>
                            <div class="preview-item border-bottom">
                              <div class="preview-thumbnail">
                                <div class="preview-icon bg-info">
                                  <i class="mdi mdi-clock"></i>
                                </div>
                              </div>
                              <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                  <h6 class="preview-subject">Project meeting</h6>
                                  <p class="text-muted mb-0">New project discussion</p>
                                </div>
                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                  <p class="text-muted">35 minutes ago</p>
                                  <p class="text-muted mb-0">15 tasks, 2 issues</p>
                                </div>
                              </div>
                            </div>
                            <div class="preview-item border-bottom">
                              <div class="preview-thumbnail">
                                <div class="preview-icon bg-danger">
                                  <i class="mdi mdi-email-open"></i>
                                </div>
                              </div>
                              <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                  <h6 class="preview-subject">Broadcast Mail</h6>
                                  <p class="text-muted mb-0">Sent release details to team</p>
                                </div>
                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                  <p class="text-muted">55 minutes ago</p>
                                  <p class="text-muted mb-0">35 tasks, 7 issues </p>
                                </div>
                              </div>
                            </div>
                            <div class="preview-item">
                              <div class="preview-thumbnail">
                                <div class="preview-icon bg-warning">
                                  <i class="mdi mdi-chart-pie"></i>
                                </div>
                              </div>
                              <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                  <h6 class="preview-subject">UI Design</h6>
                                  <p class="text-muted mb-0">New application planning</p>
                                </div>
                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                  <p class="text-muted">50 minutes ago</p>
                                  <p class="text-muted mb-0">27 tasks, 4 issues </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h5>Revenue</h5>
                      <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                          <div class="d-flex d-sm-block d-md-flex align-items-center">
                            <h2 class="mb-0">$32123</h2>
                            <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                          </div>
                          <h6 class="text-muted font-weight-normal">11.38% Since last month</h6>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                          <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h5>Sales</h5>
                      <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                          <div class="d-flex d-sm-block d-md-flex align-items-center">
                            <h2 class="mb-0">$45850</h2>
                            <p class="text-success ml-2 mb-0 font-weight-medium">+8.3%</p>
                          </div>
                          <h6 class="text-muted font-weight-normal"> 9.61% Since last month</h6>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                          <i class="icon-lg mdi mdi-wallet-travel text-danger ml-auto"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h5>Purchase</h5>
                      <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                          <div class="d-flex d-sm-block d-md-flex align-items-center">
                            <h2 class="mb-0">$2039</h2>
                            <p class="text-danger ml-2 mb-0 font-weight-medium">-2.1% </p>
                          </div>
                          <h6 class="text-muted font-weight-normal">2.27% Since last month</h6>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                          <i class="icon-lg mdi mdi-monitor text-success ml-auto"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row ">
                <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Order Status</h4>
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>
                                <div class="form-check form-check-muted m-0">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                  </label>
                                </div>
                              </th>
                              <th> Client Name </th>
                              <th> Order No </th>
                              <th> Product Cost </th>
                              <th> Project </th>
                              <th> Payment Mode </th>
                              <th> Start Date </th>
                              <th> Payment Status </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <div class="form-check form-check-muted m-0">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                  </label>
                                </div>
                              </td>
                              <td>
                                <img src="../assets/images/faces/face1.jpg" alt="image" />
                                <span class="pl-2">Henry Klein</span>
                              </td>
                              <td> 02312 </td>
                              <td> $14,500 </td>
                              <td> Dashboard </td>
                              <td> Credit card </td>
                              <td> 04 Dec 2019 </td>
                              <td>
                                <div class="badge badge-outline-success">Approved</div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check form-check-muted m-0">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                  </label>
                                </div>
                              </td>
                              <td>
                                <img src="../assets/images/faces/face2.jpg" alt="image" />
                                <span class="pl-2">Estella Bryan</span>
                              </td>
                              <td> 02312 </td>
                              <td> $14,500 </td>
                              <td> Website </td>
                              <td> Cash on delivered </td>
                              <td> 04 Dec 2019 </td>
                              <td>
                                <div class="badge badge-outline-warning">Pending</div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check form-check-muted m-0">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                  </label>
                                </div>
                              </td>
                              <td>
                                <img src="../assets/images/faces/face5.jpg" alt="image" />
                                <span class="pl-2">Lucy Abbott</span>
                              </td>
                              <td> 02312 </td>
                              <td> $14,500 </td>
                              <td> App design </td>
                              <td> Credit card </td>
                              <td> 04 Dec 2019 </td>
                              <td>
                                <div class="badge badge-outline-danger">Rejected</div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check form-check-muted m-0">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                  </label>
                                </div>
                              </td>
                              <td>
                                <img src="../assets/images/faces/face3.jpg" alt="image" />
                                <span class="pl-2">Peter Gill</span>
                              </td>
                              <td> 02312 </td>
                              <td> $14,500 </td>
                              <td> Development </td>
                              <td> Online Payment </td>
                              <td> 04 Dec 2019 </td>
                              <td>
                                <div class="badge badge-outline-success">Approved</div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check form-check-muted m-0">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                  </label>
                                </div>
                              </td>
                              <td>
                                <img src="../assets/images/faces/face4.jpg" alt="image" />
                                <span class="pl-2">Sallie Reyes</span>
                              </td>
                              <td> 02312 </td>
                              <td> $14,500 </td>
                              <td> Website </td>
                              <td> Credit card </td>
                              <td> 04 Dec 2019 </td>
                              <td>
                                <div class="badge badge-outline-success">Approved</div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-row justify-content-between">
                        <h4 class="card-title">Messages</h4>
                        <p class="text-muted mb-1 small">View all</p>
                      </div>
                      <div class="preview-list">
                        <div class="preview-item border-bottom">
                          <div class="preview-thumbnail">
                            <img src="../assets/images/faces/face6.jpg" alt="image" class="rounded-circle" />
                          </div>
                          <div class="preview-item-content d-flex flex-grow">
                            <div class="flex-grow">
                              <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                <h6 class="preview-subject">Leonard</h6>
                                <p class="text-muted text-small">5 minutes ago</p>
                              </div>
                              <p class="text-muted">Well, it seems to be working now.</p>
                            </div>
                          </div>
                        </div>
                        <div class="preview-item border-bottom">
                          <div class="preview-thumbnail">
                            <img src="../assets/images/faces/face8.jpg" alt="image" class="rounded-circle" />
                          </div>
                          <div class="preview-item-content d-flex flex-grow">
                            <div class="flex-grow">
                              <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                <h6 class="preview-subject">Luella Mills</h6>
                                <p class="text-muted text-small">10 Minutes Ago</p>
                              </div>
                              <p class="text-muted">Well, it seems to be working now.</p>
                            </div>
                          </div>
                        </div>
                        <div class="preview-item border-bottom">
                          <div class="preview-thumbnail">
                            <img src="../assets/images/faces/face9.jpg" alt="image" class="rounded-circle" />
                          </div>
                          <div class="preview-item-content d-flex flex-grow">
                            <div class="flex-grow">
                              <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                <h6 class="preview-subject">Ethel Kelly</h6>
                                <p class="text-muted text-small">2 Hours Ago</p>
                              </div>
                              <p class="text-muted">Please review the tickets</p>
                            </div>
                          </div>
                        </div>
                        <div class="preview-item border-bottom">
                          <div class="preview-thumbnail">
                            <img src="../assets/images/faces/face11.jpg" alt="image" class="rounded-circle" />
                          </div>
                          <div class="preview-item-content d-flex flex-grow">
                            <div class="flex-grow">
                              <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                <h6 class="preview-subject">Herman May</h6>
                                <p class="text-muted text-small">4 Hours Ago</p>
                              </div>
                              <p class="text-muted">Thanks a lot. It was easy to fix it .</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Portfolio Slide</h4>
                      <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel">
                        <div class="item">
                          <img src="../assets/images/dashboard/Rectangle.jpg" alt="">
                        </div>
                        <div class="item">
                          <img src="../assets/images/dashboard/Img_5.jpg" alt="">
                        </div>
                        <div class="item">
                          <img src="../assets/images/dashboard/img_6.jpg" alt="">
                        </div>
                      </div>
                      <div class="d-flex py-4">
                        <div class="preview-list w-100">
                          <div class="preview-item p-0">
                            <div class="preview-thumbnail">
                              <img src="../assets/images/faces/face12.jpg" class="rounded-circle" alt="">
                            </div>
                            <div class="preview-item-content d-flex flex-grow">
                              <div class="flex-grow">
                                <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                  <h6 class="preview-subject">CeeCee Bass</h6>
                                  <p class="text-muted text-small">4 Hours Ago</p>
                                </div>
                                <p class="text-muted">Well, it seems to be working now.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p class="text-muted">Well, it seems to be working now. </p>
                      <div class="progress progress-md portfolio-progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">To do list</h4>
                      <div class="add-items d-flex">
                        <input type="text" class="form-control todo-list-input" placeholder="enter task..">
                        <button class="add btn btn-primary todo-list-add-btn">Add</button>
                      </div>
                      <div class="list-wrapper">
                        <ul class="d-flex flex-column-reverse text-white todo-list todo-list-custom">
                          <li>
                            <div class="form-check form-check-primary">
                              <label class="form-check-label">
                                <input class="checkbox" type="checkbox"> Create invoice </label>
                            </div>
                            <i class="remove mdi mdi-close-box"></i>
                          </li>
                          <li>
                            <div class="form-check form-check-primary">
                              <label class="form-check-label">
                                <input class="checkbox" type="checkbox"> Meeting with Alita </label>
                            </div>
                            <i class="remove mdi mdi-close-box"></i>
                          </li>
                          <li class="completed">
                            <div class="form-check form-check-primary">
                              <label class="form-check-label">
                                <input class="checkbox" type="checkbox" checked> Prepare for presentation </label>
                            </div>
                            <i class="remove mdi mdi-close-box"></i>
                          </li>
                          <li>
                            <div class="form-check form-check-primary">
                              <label class="form-check-label">
                                <input class="checkbox" type="checkbox"> Plan weekend outing </label>
                            </div>
                            <i class="remove mdi mdi-close-box"></i>
                          </li>
                          <li>
                            <div class="form-check form-check-primary">
                              <label class="form-check-label">
                                <input class="checkbox" type="checkbox"> Pick up kids from school </label>
                            </div>
                            <i class="remove mdi mdi-close-box"></i>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Visitors by Countries</h4>
                      <div class="row">
                        <div class="col-md-5">
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td>
                                    <i class="flag-icon flag-icon-us"></i>
                                  </td>
                                  <td>USA</td>
                                  <td class="text-right"> 1500 </td>
                                  <td class="text-right font-weight-medium"> 56.35% </td>
                                </tr>
                                <tr>
                                  <td>
                                    <i class="flag-icon flag-icon-de"></i>
                                  </td>
                                  <td>Germany</td>
                                  <td class="text-right"> 800 </td>
                                  <td class="text-right font-weight-medium"> 33.25% </td>
                                </tr>
                                <tr>
                                  <td>
                                    <i class="flag-icon flag-icon-au"></i>
                                  </td>
                                  <td>Australia</td>
                                  <td class="text-right"> 760 </td>
                                  <td class="text-right font-weight-medium"> 15.45% </td>
                                </tr>
                                <tr>
                                  <td>
                                    <i class="flag-icon flag-icon-gb"></i>
                                  </td>
                                  <td>United Kingdom</td>
                                  <td class="text-right"> 450 </td>
                                  <td class="text-right font-weight-medium"> 25.00% </td>
                                </tr>
                                <tr>
                                  <td>
                                    <i class="flag-icon flag-icon-ro"></i>
                                  </td>
                                  <td>Romania</td>
                                  <td class="text-right"> 620 </td>
                                  <td class="text-right font-weight-medium"> 10.25% </td>
                                </tr>
                                <tr>
                                  <td>
                                    <i class="flag-icon flag-icon-br"></i>
                                  </td>
                                  <td>Brasil</td>
                                  <td class="text-right"> 230 </td>
                                  <td class="text-right font-weight-medium"> 75.00% </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="col-md-7">
                          <div id="audience-map" class="vector-map"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2019 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
                <span class="text-muted float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
              </div>
            </footer>
            <!-- partial -->
          </div>
          <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
      </div>
      <!-- container-scroller -->
      <!-- plugins:js -->
      <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
      <!-- endinject -->
      <!-- Plugin js for this page -->
      <script src="../assets/vendors/chart.js/Chart.min.js"></script>
      <script src="../assets/vendors/progressbar.js/progressbar.min.js"></script>
      <script src="../assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
      <script src="../assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
      <script src="../assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
      <!-- End plugin js for this page -->
      <!-- inject:js -->
      <script src="../assets/js/off-canvas.js"></script>
      <script src="../assets/js/hoverable-collapse.js"></script>
      <script src="../assets/js/misc.js"></script>
      <script src="../assets/js/settings.js"></script>
      <script src="../assets/js/todolist.js"></script>
      <!-- endinject -->
      <!-- Custom js for this page -->
      <script src="../assets/js/dashboard.js"></script>
      <!-- End custom js for this page -->
    </body>
  </html>
</textarea>
                          </div>
                          <!-- Tabs Ends -->
                          <!-- Tabs Starts -->
                          <div data-pws-tab="Modern Horizontal" data-pws-tab-name="Modern Horizontal">
                            <p>This section contains code of modern horizontal dark layout. For other layouts in vertical mode like boxed, icon-menu etc., you can follow the snippet same as below, but you have to just add the appropriate optional class to the body. More details of the classes are given in <a href="#options">Options</a> section</p>
<textarea class="multiple-codes mt-5">
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Corona Admin</title>
      <!-- plugins:css -->
      <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
      <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
      <!-- endinject -->
      <!-- Plugin css for this page -->
      <link rel="stylesheet" href="../assets/vendors/jvectormap/jquery-jvectormap.css">
      <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
      <link rel="stylesheet" href="../assets/vendors/owl-carousel-2/owl.carousel.min.css">
      <link rel="stylesheet" href="../assets/vendors/owl-carousel-2/owl.theme.default.min.css">
      <!-- End plugin css for this page -->
      <!-- inject:css -->
      <!-- endinject -->
      <!-- Layout styles -->
      <link rel="stylesheet" href="../assets/css/modern-horizontal/style.css">
      <!-- End layout styles -->
      <link rel="shortcut icon" href="images/favicon.png" />
    </head>
    <body>
      <div class="container-scroller">
        <!-- partial:partials/_horizontal-navbar.html -->
        <div class="horizontal-menu">
          <nav class="navbar top-navbar col-lg-12 col-12 p-0">
            <div class="container">
              <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="index.html"><img src="../assets/images/logo.svg" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../assets/images/logo-mini.svg" alt="logo" /></a>
              </div>
              <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <ul class="navbar-nav">
                  <li class="nav-item ">
                    <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                      <input type="text" class="form-control w-100" placeholder="Search products">
                    </form>
                  </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                  <li class="nav-item d-none d-lg-block">
                    <div class="nav-link">
                      <button class="btn btn-success">+ Create New Project</button>
                    </div>
                  </li>
                  <li class="nav-item nav-settings d-none d-lg-block">
                    <a class="nav-link" href="#">
                      <i class="mdi mdi-view-grid"></i>
                    </a>
                  </li>
                  <li class="nav-item dropdown border-left">
                    <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                      <i class="mdi mdi-email"></i>
                      <span class="count bg-success"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                      <h6 class="p-3 mb-0">Messages</h6>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                          <img src="../assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                        </div>
                        <div class="preview-item-content">
                          <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                          <p class="text-muted mb-0"> 1 Minutes ago </p>
                        </div>
                      </a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                          <img src="../assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                        </div>
                        <div class="preview-item-content">
                          <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                          <p class="text-muted mb-0"> 15 Minutes ago </p>
                        </div>
                      </a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                          <img src="../assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
                        </div>
                        <div class="preview-item-content">
                          <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                          <p class="text-muted mb-0"> 18 Minutes ago </p>
                        </div>
                      </a>
                      <div class="dropdown-divider"></div>
                      <p class="p-3 mb-0 text-center">4 new messages</p>
                    </div>
                  </li>
                  <li class="nav-item dropdown border-left">
                    <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                      <i class="mdi mdi-bell"></i>
                      <span class="count bg-danger"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                      <h6 class="p-3 mb-0">Notifications</h6>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                          <div class="preview-icon bg-dark rounded-circle">
                            <i class="mdi mdi-calendar text-success"></i>
                          </div>
                        </div>
                        <div class="preview-item-content">
                          <p class="preview-subject mb-1">Event today</p>
                          <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                        </div>
                      </a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                          <div class="preview-icon bg-dark rounded-circle">
                            <i class="mdi mdi-settings text-danger"></i>
                          </div>
                        </div>
                        <div class="preview-item-content">
                          <p class="preview-subject mb-1">Settings</p>
                          <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                        </div>
                      </a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                          <div class="preview-icon bg-dark rounded-circle">
                            <i class="mdi mdi-link-variant text-warning"></i>
                          </div>
                        </div>
                        <div class="preview-item-content">
                          <p class="preview-subject mb-1">Launch Admin</p>
                          <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                        </div>
                      </a>
                      <div class="dropdown-divider"></div>
                      <p class="p-3 mb-0 text-center">See all notifications</p>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <div class="navbar-profile">
                        <img class="img-xs rounded-circle" src="../assets/images/faces/face15.jpg" alt="">
                        <p class="mb-0 ml-3 d-none d-sm-block">Henry Klein</p>
                        <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                      </div>
                    </a>
                  </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
                  <span class="mdi mdi-menu"></span>
                </button>
              </div>
            </div>
          </nav>
          <nav class="bottom-navbar">
            <div class="container">
              <ul class="nav page-navigation">
                <li class="nav-item menu-items">
                  <a class="nav-link" href="index.html">
                    <i class="mdi mdi-speedometer menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                  </a>
                </li>
                <li class="nav-item menu-items">
                  <a class="nav-link" href="pages/widgets/widgets.html">
                    <i class="mdi mdi mdi-texture menu-icon"></i>
                    <span class="menu-title">Widgets</span>
                  </a>
                </li>
                <li class="nav-item mega-menu menu-items">
                  <a href="#" class="nav-link">
                    <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                    <span class="menu-title">UI Elements</span>
                    <i class="menu-arrow"></i>
                  </a>
                  <div class="submenu">
                    <div class="col-group-wrapper row">
                      <div class="col-group col-md-4">
                        <div class="row">
                          <div class="col-12">
                            <p class="category-heading">Basic Elements</p>
                            <div class="submenu-item">
                              <div class="row">
                                <div class="col-md-6">
                                  <ul>
                                    <li class="nav-item"><a class="nav-link" href="pages/ui-features/accordions.html">Accordion</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/ui-features/badges.html">Badges</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/ui-features/breadcrumbs.html">Breadcrumbs</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdown</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/ui-features/modals.html">Modals</a></li>
                                  </ul>
                                </div>
                                <div class="col-md-6">
                                  <ul>
                                    <li class="nav-item"><a class="nav-link" href="pages/ui-features/progress.html">Progress bar</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/ui-features/pagination.html">Pagination</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/ui-features/tabs.html">Tabs</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-group col-md-4">
                        <div class="row">
                          <div class="col-12">
                            <p class="category-heading">Advanced Elements</p>
                            <div class="submenu-item">
                              <div class="row">
                                <div class="col-md-6">
                                  <ul>
                                    <li class="nav-item"><a class="nav-link" href="pages/ui-features/dragula.html">Dragula</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/ui-features/carousel.html">Carousel</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/ui-features/clipboard.html">Clipboard</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/ui-features/context-menu.html">Context Menu</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/ui-features/loaders.html">Loader</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/ui-features/slider.html">Slider</a></li>
                                  </ul>
                                </div>
                                <div class="col-md-6">
                                  <ul>
                                    <li class="nav-item"><a class="nav-link" href="pages/ui-features/popups.html">Popup</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/ui-features/notifications.html">Notification</a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-group col-md-4">
                        <p class="category-heading">Icons</p>
                        <ul class="submenu-item">
                          <li class="nav-item"><a class="nav-link" href="pages/icons/flag-icons.html">Flag Icons</a></li>
                          <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/icons/font-awesome.html">Font Awesome</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/icons/simple-line-icon.html">Simple Line Icons</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/icons/themify.html">Themify Icons</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item menu-items">
                  <a href="#" class="nav-link">
                    <i class="mdi mdi-clipboard-text menu-icon"></i>
                    <span class="menu-title">Forms</span>
                    <i class="menu-arrow"></i></a>
                  <div class="submenu">
                    <ul class="submenu-item">
                      <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/forms/advanced_elements.html">Advanced Elements</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/forms/validation.html">Validation</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/forms/wizard.html">Wizard</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/forms/text_editor.html">Text Editor</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/forms/code_editor.html">Code Editor</a></li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item mega-menu menu-items">
                  <a href="#" class="nav-link">
                    <i class="mdi mdi-chart-bar menu-icon"></i>
                    <span class="menu-title">Data</span>
                    <i class="menu-arrow"></i></a>
                  <div class="submenu">
                    <div class="col-group-wrapper row">
                      <div class="col-group col-md-6">
                        <p class="category-heading">Charts</p>
                        <div class="submenu-item">
                          <div class="row">
                            <div class="col-md-6">
                              <ul>
                                <li class="nav-item"><a class="nav-link" href="pages/charts/chartjs.html">Chart Js</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/charts/morris.html">Morris</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/charts/flot-chart.html">Flot</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/charts/google-charts.html">Google Chart</a></li>
                              </ul>
                            </div>
                            <div class="col-md-6">
                              <ul>
                                <li class="nav-item"><a class="nav-link" href="pages/charts/sparkline.html">Sparkline</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/charts/c3.html">C3 Chart</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/charts/chartist.html">Chartist</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/charts/justGage.html">JustGage</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-group col-md-3">
                        <p class="category-heading">Table</p>
                        <ul class="submenu-item">
                          <li class="nav-item"><a class="nav-link" href="pages/tables/basic-table.html">Basic Table</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/tables/data-table.html">Data Table</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/tables/js-grid.html">Js-grid</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/tables/sortable-table.html">Sortable Table</a></li>
                        </ul>
                      </div>
                      <div class="col-group col-md-3">
                        <p class="category-heading">Maps</p>
                        <ul class="submenu-item">
                          <li class="nav-item"><a class="nav-link" href="pages/maps/mapael.html">Mapael</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/maps/vector-map.html">Vector Map</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/maps/google-maps.html">Google Map</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item mega-menu menu-items">
                  <a href="#" class="nav-link">
                    <i class="mdi mdi-content-copy menu-icon"></i>
                    <span class="menu-title">Sample Pages</span>
                    <i class="menu-arrow"></i></a>
                  <div class="submenu">
                    <div class="col-group-wrapper row">
                      <div class="col-group col-md-3">
                        <p class="category-heading">User Pages</p>
                        <ul class="submenu-item">
                          <li class="nav-item"><a class="nav-link" href="pages/samples/login.html">Login</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/samples/login-2.html">Login 2</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/samples/register.html">Register</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/samples/register-2.html">Register 2</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/samples/lock-screen.html">Lockscreen</a></li>
                        </ul>
                      </div>
                      <div class="col-group col-md-3">
                        <p class="category-heading">Error Pages</p>
                        <ul class="submenu-item">
                          <li class="nav-item"><a class="nav-link" href="pages/samples/error-404.html">404</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/samples/error-500.html">500</a></li>
                        </ul>
                      </div>
                      <div class="col-group col-md-3">
                        <p class="category-heading">E-commerce</p>
                        <ul class="submenu-item">
                          <li class="nav-item"><a class="nav-link" href="pages/samples/invoice.html">Invoice</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/samples/pricing-table.html">Pricing Table</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/samples/orders.html">Orders</a></li>
                        </ul>
                      </div>
                      <div class="col-group col-md-3">
                        <p class="category-heading">General</p>
                        <ul class="submenu-item">
                          <li class="nav-item"><a class="nav-link" href="pages/samples/search-results.html">Search Results</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/samples/profile.html">Profile</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/samples/timeline.html">Timeline</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/samples/news-grid.html">News grid</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/samples/portfolio.html">Portfolio</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/samples/faq.html">FAQ</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item menu-items">
                  <a href="#" class="nav-link">
                    <i class="mdi mdi-webpack menu-icon"></i>
                    <span class="menu-title">Apps</span>
                    <i class="menu-arrow"></i></a>
                  <div class="submenu">
                    <ul class="submenu-item">
                      <li class="nav-item"><a class="nav-link" href="pages/apps/email.html">Email</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/apps/calendar.html">Calendar</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/apps/todo.html">Todo List</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/apps/gallery.html">Gallery</a></li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item menu-items">
                  <a href="http://www.bootstrapdash.com/demo/corona/jquery/documentation/documentation.html" class=" nav-link" target="_blank">
                    <i class="mdi mdi-file-document-box menu-icon"></i>
                    <span class="menu-title">Documentation</span></a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <div class="main-panel">
            <div class="content-wrapper">
              <div class="row">
                <div class="col-12 grid-margin stretch-card">
                  <div class="card corona-gradient-card">
                    <div class="card-body py-0 px-0 px-sm-3">
                      <div class="row align-items-center">
                        <div class="col-4 col-sm-3 col-xl-2">
                          <img src="../assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">
                        </div>
                        <div class="col-5 col-sm-7 col-xl-8 p-0">
                          <h4 class="mb-1 mb-sm-0">New refreshing look</h4>
                          <p class="mb-0 font-weight-normal d-none d-sm-block">Corona admin template now with a new facelift for enhanced legibility and aesthetics!</p>
                        </div>
                        <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                          <button class="btn btn-outline-light btn-rounded get-started-btn">Get Started</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$12.34</h3>
                            <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="icon icon-box-success ">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Potential growth</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$17.34</h3>
                            <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="icon icon-box-success">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Revenue current</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$12.34</h3>
                            <p class="text-danger ml-2 mb-0 font-weight-medium">-2.4%</p>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="icon icon-box-danger">
                            <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Daily Income</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$31.53</h3>
                            <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="icon icon-box-success ">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Expense current</h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Transaction History</h4>
                      <canvas id="transaction-history" class="transaction-chart"></canvas>
                      <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                        <div class="text-md-center text-xl-left">
                          <h6 class="mb-1">Transfer to Paypal</h6>
                          <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
                        </div>
                        <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                          <h6 class="font-weight-bold mb-0">$236</h6>
                        </div>
                      </div>
                      <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                        <div class="text-md-center text-xl-left">
                          <h6 class="mb-1">Tranfer to Stripe</h6>
                          <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
                        </div>
                        <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                          <h6 class="font-weight-bold mb-0">$593</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-8 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-row justify-content-between">
                        <h4 class="card-title mb-1">Open Projects</h4>
                        <p class="text-muted mb-1">Your data status</p>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <div class="preview-list">
                            <div class="preview-item border-bottom">
                              <div class="preview-thumbnail">
                                <div class="preview-icon bg-primary">
                                  <i class="mdi mdi-file-document"></i>
                                </div>
                              </div>
                              <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                  <h6 class="preview-subject">Admin dashboard design</h6>
                                  <p class="text-muted mb-0">Broadcast web app mockup</p>
                                </div>
                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                  <p class="text-muted">15 minutes ago</p>
                                  <p class="text-muted mb-0">30 tasks, 5 issues </p>
                                </div>
                              </div>
                            </div>
                            <div class="preview-item border-bottom">
                              <div class="preview-thumbnail">
                                <div class="preview-icon bg-success">
                                  <i class="mdi mdi-cloud-download"></i>
                                </div>
                              </div>
                              <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                  <h6 class="preview-subject">Wordpress Development</h6>
                                  <p class="text-muted mb-0">Upload new design</p>
                                </div>
                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                  <p class="text-muted">1 hour ago</p>
                                  <p class="text-muted mb-0">23 tasks, 5 issues </p>
                                </div>
                              </div>
                            </div>
                            <div class="preview-item border-bottom">
                              <div class="preview-thumbnail">
                                <div class="preview-icon bg-info">
                                  <i class="mdi mdi-clock"></i>
                                </div>
                              </div>
                              <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                  <h6 class="preview-subject">Project meeting</h6>
                                  <p class="text-muted mb-0">New project discussion</p>
                                </div>
                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                  <p class="text-muted">35 minutes ago</p>
                                  <p class="text-muted mb-0">15 tasks, 2 issues</p>
                                </div>
                              </div>
                            </div>
                            <div class="preview-item border-bottom">
                              <div class="preview-thumbnail">
                                <div class="preview-icon bg-danger">
                                  <i class="mdi mdi-email-open"></i>
                                </div>
                              </div>
                              <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                  <h6 class="preview-subject">Broadcast Mail</h6>
                                  <p class="text-muted mb-0">Sent release details to team</p>
                                </div>
                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                  <p class="text-muted">55 minutes ago</p>
                                  <p class="text-muted mb-0">35 tasks, 7 issues </p>
                                </div>
                              </div>
                            </div>
                            <div class="preview-item">
                              <div class="preview-thumbnail">
                                <div class="preview-icon bg-warning">
                                  <i class="mdi mdi-chart-pie"></i>
                                </div>
                              </div>
                              <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                  <h6 class="preview-subject">UI Design</h6>
                                  <p class="text-muted mb-0">New application planning</p>
                                </div>
                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                  <p class="text-muted">50 minutes ago</p>
                                  <p class="text-muted mb-0">27 tasks, 4 issues </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h5>Revenue</h5>
                      <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                          <div class="d-flex d-sm-block d-md-flex align-items-center">
                            <h2 class="mb-0">$32123</h2>
                            <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                          </div>
                          <h6 class="text-muted font-weight-normal">11.38% Since last month</h6>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                          <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h5>Sales</h5>
                      <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                          <div class="d-flex d-sm-block d-md-flex align-items-center">
                            <h2 class="mb-0">$45850</h2>
                            <p class="text-success ml-2 mb-0 font-weight-medium">+8.3%</p>
                          </div>
                          <h6 class="text-muted font-weight-normal"> 9.61% Since last month</h6>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                          <i class="icon-lg mdi mdi-wallet-travel text-danger ml-auto"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h5>Purchase</h5>
                      <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                          <div class="d-flex d-sm-block d-md-flex align-items-center">
                            <h2 class="mb-0">$2039</h2>
                            <p class="text-danger ml-2 mb-0 font-weight-medium">-2.1% </p>
                          </div>
                          <h6 class="text-muted font-weight-normal">2.27% Since last month</h6>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                          <i class="icon-lg mdi mdi-monitor text-success ml-auto"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row ">
                <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Order Status</h4>
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>
                                <div class="form-check form-check-muted m-0">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                  </label>
                                </div>
                              </th>
                              <th> Client Name </th>
                              <th> Order No </th>
                              <th> Product Cost </th>
                              <th> Project </th>
                              <th> Payment Mode </th>
                              <th> Start Date </th>
                              <th> Payment Status </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <div class="form-check form-check-muted m-0">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                  </label>
                                </div>
                              </td>
                              <td>
                                <img src="../assets/images/faces/face1.jpg" alt="image" />
                                <span class="pl-2">Henry Klein</span>
                              </td>
                              <td> 02312 </td>
                              <td> $14,500 </td>
                              <td> Dashboard </td>
                              <td> Credit card </td>
                              <td> 04 Dec 2019 </td>
                              <td>
                                <div class="badge badge-outline-success">Approved</div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check form-check-muted m-0">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                  </label>
                                </div>
                              </td>
                              <td>
                                <img src="../assets/images/faces/face2.jpg" alt="image" />
                                <span class="pl-2">Estella Bryan</span>
                              </td>
                              <td> 02312 </td>
                              <td> $14,500 </td>
                              <td> Website </td>
                              <td> Cash on delivered </td>
                              <td> 04 Dec 2019 </td>
                              <td>
                                <div class="badge badge-outline-warning">Pending</div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check form-check-muted m-0">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                  </label>
                                </div>
                              </td>
                              <td>
                                <img src="../assets/images/faces/face5.jpg" alt="image" />
                                <span class="pl-2">Lucy Abbott</span>
                              </td>
                              <td> 02312 </td>
                              <td> $14,500 </td>
                              <td> App design </td>
                              <td> Credit card </td>
                              <td> 04 Dec 2019 </td>
                              <td>
                                <div class="badge badge-outline-danger">Rejected</div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check form-check-muted m-0">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                  </label>
                                </div>
                              </td>
                              <td>
                                <img src="../assets/images/faces/face3.jpg" alt="image" />
                                <span class="pl-2">Peter Gill</span>
                              </td>
                              <td> 02312 </td>
                              <td> $14,500 </td>
                              <td> Development </td>
                              <td> Online Payment </td>
                              <td> 04 Dec 2019 </td>
                              <td>
                                <div class="badge badge-outline-success">Approved</div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check form-check-muted m-0">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                  </label>
                                </div>
                              </td>
                              <td>
                                <img src="../assets/images/faces/face4.jpg" alt="image" />
                                <span class="pl-2">Sallie Reyes</span>
                              </td>
                              <td> 02312 </td>
                              <td> $14,500 </td>
                              <td> Website </td>
                              <td> Credit card </td>
                              <td> 04 Dec 2019 </td>
                              <td>
                                <div class="badge badge-outline-success">Approved</div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-row justify-content-between">
                        <h4 class="card-title">Messages</h4>
                        <p class="text-muted mb-1 small">View all</p>
                      </div>
                      <div class="preview-list">
                        <div class="preview-item border-bottom">
                          <div class="preview-thumbnail">
                            <img src="../assets/images/faces/face6.jpg" alt="image" class="rounded-circle" />
                          </div>
                          <div class="preview-item-content d-flex flex-grow">
                            <div class="flex-grow">
                              <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                <h6 class="preview-subject">Leonard</h6>
                                <p class="text-muted text-small">5 minutes ago</p>
                              </div>
                              <p class="text-muted">Well, it seems to be working now.</p>
                            </div>
                          </div>
                        </div>
                        <div class="preview-item border-bottom">
                          <div class="preview-thumbnail">
                            <img src="../assets/images/faces/face8.jpg" alt="image" class="rounded-circle" />
                          </div>
                          <div class="preview-item-content d-flex flex-grow">
                            <div class="flex-grow">
                              <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                <h6 class="preview-subject">Luella Mills</h6>
                                <p class="text-muted text-small">10 Minutes Ago</p>
                              </div>
                              <p class="text-muted">Well, it seems to be working now.</p>
                            </div>
                          </div>
                        </div>
                        <div class="preview-item border-bottom">
                          <div class="preview-thumbnail">
                            <img src="../assets/images/faces/face9.jpg" alt="image" class="rounded-circle" />
                          </div>
                          <div class="preview-item-content d-flex flex-grow">
                            <div class="flex-grow">
                              <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                <h6 class="preview-subject">Ethel Kelly</h6>
                                <p class="text-muted text-small">2 Hours Ago</p>
                              </div>
                              <p class="text-muted">Please review the tickets</p>
                            </div>
                          </div>
                        </div>
                        <div class="preview-item border-bottom">
                          <div class="preview-thumbnail">
                            <img src="../assets/images/faces/face11.jpg" alt="image" class="rounded-circle" />
                          </div>
                          <div class="preview-item-content d-flex flex-grow">
                            <div class="flex-grow">
                              <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                <h6 class="preview-subject">Herman May</h6>
                                <p class="text-muted text-small">4 Hours Ago</p>
                              </div>
                              <p class="text-muted">Thanks a lot. It was easy to fix it .</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Portfolio Slide</h4>
                      <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel">
                        <div class="item">
                          <img src="../assets/images/dashboard/Rectangle.jpg" alt="">
                        </div>
                        <div class="item">
                          <img src="../assets/images/dashboard/Img_5.jpg" alt="">
                        </div>
                        <div class="item">
                          <img src="../assets/images/dashboard/img_6.jpg" alt="">
                        </div>
                      </div>
                      <div class="d-flex py-4">
                        <div class="preview-list w-100">
                          <div class="preview-item p-0">
                            <div class="preview-thumbnail">
                              <img src="../assets/images/faces/face12.jpg" class="rounded-circle" alt="">
                            </div>
                            <div class="preview-item-content d-flex flex-grow">
                              <div class="flex-grow">
                                <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                  <h6 class="preview-subject">CeeCee Bass</h6>
                                  <p class="text-muted text-small">4 Hours Ago</p>
                                </div>
                                <p class="text-muted">Well, it seems to be working now.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p class="text-muted">Well, it seems to be working now. </p>
                      <div class="progress progress-md portfolio-progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">To do list</h4>
                      <div class="add-items d-flex">
                        <input type="text" class="form-control todo-list-input" placeholder="enter task..">
                        <button class="add btn btn-primary todo-list-add-btn">Add</button>
                      </div>
                      <div class="list-wrapper">
                        <ul class="d-flex flex-column-reverse text-white todo-list todo-list-custom">
                          <li>
                            <div class="form-check form-check-primary">
                              <label class="form-check-label">
                                <input class="checkbox" type="checkbox"> Create invoice </label>
                            </div>
                            <i class="remove mdi mdi-close-box"></i>
                          </li>
                          <li>
                            <div class="form-check form-check-primary">
                              <label class="form-check-label">
                                <input class="checkbox" type="checkbox"> Meeting with Alita </label>
                            </div>
                            <i class="remove mdi mdi-close-box"></i>
                          </li>
                          <li class="completed">
                            <div class="form-check form-check-primary">
                              <label class="form-check-label">
                                <input class="checkbox" type="checkbox" checked> Prepare for presentation </label>
                            </div>
                            <i class="remove mdi mdi-close-box"></i>
                          </li>
                          <li>
                            <div class="form-check form-check-primary">
                              <label class="form-check-label">
                                <input class="checkbox" type="checkbox"> Plan weekend outing </label>
                            </div>
                            <i class="remove mdi mdi-close-box"></i>
                          </li>
                          <li>
                            <div class="form-check form-check-primary">
                              <label class="form-check-label">
                                <input class="checkbox" type="checkbox"> Pick up kids from school </label>
                            </div>
                            <i class="remove mdi mdi-close-box"></i>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Visitors by Countries</h4>
                      <div class="row">
                        <div class="col-md-5">
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td>
                                    <i class="flag-icon flag-icon-us"></i>
                                  </td>
                                  <td>USA</td>
                                  <td class="text-right"> 1500 </td>
                                  <td class="text-right font-weight-medium"> 56.35% </td>
                                </tr>
                                <tr>
                                  <td>
                                    <i class="flag-icon flag-icon-de"></i>
                                  </td>
                                  <td>Germany</td>
                                  <td class="text-right"> 800 </td>
                                  <td class="text-right font-weight-medium"> 33.25% </td>
                                </tr>
                                <tr>
                                  <td>
                                    <i class="flag-icon flag-icon-au"></i>
                                  </td>
                                  <td>Australia</td>
                                  <td class="text-right"> 760 </td>
                                  <td class="text-right font-weight-medium"> 15.45% </td>
                                </tr>
                                <tr>
                                  <td>
                                    <i class="flag-icon flag-icon-gb"></i>
                                  </td>
                                  <td>United Kingdom</td>
                                  <td class="text-right"> 450 </td>
                                  <td class="text-right font-weight-medium"> 25.00% </td>
                                </tr>
                                <tr>
                                  <td>
                                    <i class="flag-icon flag-icon-ro"></i>
                                  </td>
                                  <td>Romania</td>
                                  <td class="text-right"> 620 </td>
                                  <td class="text-right font-weight-medium"> 10.25% </td>
                                </tr>
                                <tr>
                                  <td>
                                    <i class="flag-icon flag-icon-br"></i>
                                  </td>
                                  <td>Brasil</td>
                                  <td class="text-right"> 230 </td>
                                  <td class="text-right font-weight-medium"> 75.00% </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="col-md-7">
                          <div id="audience-map" class="vector-map"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2019 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
                <span class="text-muted float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
              </div>
            </footer>
            <!-- partial -->
          </div>
          <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
      </div>
      <!-- container-scroller -->
      <!-- plugins:js -->
      <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
      <!-- endinject -->
      <!-- Plugin js for this page -->
      <script src="../assets/vendors/chart.js/Chart.min.js"></script>
      <script src="../assets/vendors/progressbar.js/progressbar.min.js"></script>
      <script src="../assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
      <script src="../assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
      <script src="../assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
      <!-- End plugin js for this page -->
      <!-- inject:js -->
      <script src="../assets/js/off-canvas.js"></script>
      <script src="../assets/js/hoverable-collapse.js"></script>
      <script src="../assets/js/misc.js"></script>
      <script src="../assets/js/settings.js"></script>
      <script src="../assets/js/todolist.js"></script>
      <!-- endinject -->
      <!-- Custom js for this page -->
      <script src="../assets/js/dashboard.js"></script>
      <!-- End custom js for this page -->
    </body>
  </html>
</textarea>
                          </div>
                          <!-- Tabs Ends -->
                          <!-- Tabs Starts -->
                          <div data-pws-tab="Classic Vertical" data-pws-tab-name="Classic Vertical">
                            <p>This section contains classic vertical layout.</p>
<textarea class="multiple-codes mt-5">
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Corona Admin</title>
      <!-- plugins:css -->
      <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
      <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
      <!-- endinject -->
      <!-- Plugin css for this page -->
      <link rel="stylesheet" href="../assets/vendors/jvectormap/jquery-jvectormap.css">
      <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
      <!-- End plugin css for this page -->
      <!-- inject:css -->
      <!-- endinject -->
      <!-- Layout styles -->
      <link rel="stylesheet" href="../assets/css/classic-vertical/style.css">
      <!-- End layout styles -->
      <link rel="shortcut icon" href="images/favicon.png" />
    </head>
    <body>
      <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
          <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo" href="index.html"><img src="../assets/images/logo.svg" alt="logo" /></a>
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="text" class="form-control" placeholder="Search Here..">
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                  <i class="mdi mdi-email"></i>
                  <span class="count bg-danger">5</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                  <h6 class="p-3 mb-0">Messages</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                      <p class="text-muted mb-0"> 1 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                      <p class="text-muted mb-0"> 15 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                      <p class="text-muted mb-0"> 18 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">4 new messages</p>
                </div>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell"></i>
                  <span class="count bg-danger">7</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notifications</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-calendar text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Event today</p>
                      <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                      <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-link-variant text-warning"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Launch Admin</p>
                      <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all notifications</p>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <img class="img-xs rounded-circle" src="../assets/images/faces-clipart/pic-1.png" alt="">
                </a>
              </li>
              <li class="nav-item nav-settings d-none d-lg-block">
                <a class="nav-link" href="#">
                  <i class="mdi mdi-view-grid"></i>
                </a>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <!-- partial:partials/_sidebar.html -->
          <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
              <li class="nav-item account-dropdown">
                <a class="nav-link" data-toggle="collapse" href="#account-dropdown" aria-expanded="false" aria-controls="account-dropdown">
                  <img class="img-xs rounded-circle" src="../assets/images/faces-clipart/pic-1.png" alt="">
                  <p class="mb-0 text-light">Stella Johnson</p>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="account-dropdown">
                  <ul class="nav flex-column sub-menu pl-0">
                    <li class="nav-item">
                      <a class="nav-link pl-5" href="#">
                        <span class="menu-icon">
                          <i class="mdi mdi-account"></i>
                        </span>
                        <span class="menu-title">Profile</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link pl-5" href="#">
                        <span class="menu-icon">
                          <i class="mdi mdi-email"></i>
                        </span>
                        <span class="menu-title">Inbox</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link pl-5" href="#">
                        <span class="menu-icon">
                          <i class="mdi mdi-wrench"></i>
                        </span>
                        <span class="menu-title">Settings</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link pl-5" href="#">
                        <span class="menu-icon">
                          <i class="mdi mdi-power"></i>
                        </span>
                        <span class="menu-title">Logout</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item nav-category">
                <span class="nav-link">Navigation</span>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" href="index.html">
                  <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                  </span>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" href="pages/widgets/widgets.html">
                  <span class="menu-icon">
                    <i class="mdi mdi-texture"></i>
                  </span>
                  <span class="menu-title">Widgets</span>
                </a>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
                  <span class="menu-icon">
                    <i class="mdi mdi-view-list"></i>
                  </span>
                  <span class="menu-title">Page Layouts</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="page-layouts">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/layout/boxed-layout.html">Boxed</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/layout/rtl-layout.html">RTL</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false" aria-controls="sidebar-layouts">
                  <span class="menu-icon">
                    <i class="mdi mdi-crosshairs-gps"></i>
                  </span>
                  <span class="menu-title">Sidebar Layouts</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="sidebar-layouts">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/layout/compact-menu.html">Compact menu</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-collapsed.html">Icon menu</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-hidden.html">Sidebar Hidden</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-hidden-overlay.html">Sidebar Overlay</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-fixed.html">Sidebar Fixed</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                  <span class="menu-icon">
                    <i class="mdi mdi-laptop"></i>
                  </span>
                  <span class="menu-title">Basic UI Elements</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/accordions.html">Accordions</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/badges.html">Badges</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/breadcrumbs.html">Breadcrumbs</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/modals.html">Modals</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/progress.html">Progress bar</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/pagination.html">Pagination</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/tabs.html">Tabs</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
                  <span class="menu-icon">
                    <i class="mdi mdi-settings"></i>
                  </span>
                  <span class="menu-title">Advanced Elements</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-advanced">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dragula.html">Dragula</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/clipboard.html">Clipboard</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/context-menu.html">Context menu</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/slider.html">Slider</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/loaders.html">Loaders</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/colcade.html">Colcade</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/carousel.html">Carousel</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/tooltips.html">Tooltips</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                  <span class="menu-icon">
                    <i class="mdi mdi-playlist-play"></i>
                  </span>
                  <span class="menu-title">Form Elements</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="form-elements">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/forms/basic_elements.html">Basic Form</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/forms/advanced_elements.html">Advanced Form</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/forms/validation.html">Validation</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/forms/wizard.html">Wizard</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                  <span class="menu-icon">
                    <i class="mdi mdi-table-large"></i>
                  </span>
                  <span class="menu-title">Tables</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="tables">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/tables/data-table.html">Data table</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/tables/js-grid.html">Js-grid</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/tables/sortable-table.html">Sortable table</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="false" aria-controls="editors">
                  <span class="menu-icon">
                    <i class="mdi mdi-format-text"></i>
                  </span>
                  <span class="menu-title">Editors</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="editors">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/forms/text_editor.html">Text editors</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/forms/code_editor.html">Code Editor</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                  <span class="menu-icon">
                    <i class="mdi mdi-chart-bar"></i>
                  </span>
                  <span class="menu-title">Charts</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="charts">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/morris.html">Morris</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/flot-chart.html">Flot</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/google-charts.html">Google charts</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/sparkline.html">Sparkline js</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/c3.html">C3 charts</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/chartist.html">Chartists</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/justGage.html">JustGage</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps">
                  <span class="menu-icon">
                    <i class="mdi mdi-map-marker-radius"></i>
                  </span>
                  <span class="menu-title">Maps</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="maps">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/maps/google-maps.html">Google Maps</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/maps/mapael.html">Mapeal</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/maps/vector-map.html">Vector map</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" href="pages/ui-features/notifications.html">
                  <span class="menu-icon">
                    <i class="mdi mdi-bell-ring"></i>
                  </span>
                  <span class="menu-title">Notifications</span>
                </a>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                  <span class="menu-icon">
                    <i class="mdi mdi-contacts"></i>
                  </span>
                  <span class="menu-title">Icons</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="icons">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/icons/flag-icons.html">Flag icons</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/icons/font-awesome.html">Font Awesome</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/icons/simple-line-icon.html">Simple line icons</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/icons/themify.html">Themify icons</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item nav-category">
                <span class="nav-link">More</span>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" href="pages/ui-features/popups.html">
                  <span class="menu-icon">
                    <i class="mdi mdi-forum"></i>
                  </span>
                  <span class="menu-title">Popups</span>
                </a>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                  <span class="menu-icon">
                    <i class="mdi mdi-security"></i>
                  </span>
                  <span class="menu-title">User Pages</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="auth">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                  <span class="menu-icon">
                    <i class="mdi mdi-earth"></i>
                  </span>
                  <span class="menu-title">General Pages</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="general-pages">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/profile.html"> Profile </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/portfolio.html"> Portfolio </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/faq.html"> FAQ </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/faq-2.html"> FAQ 2 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/search-results.html"> Search Results </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/news-grid.html"> News grid </a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
                  <span class="menu-icon">
                    <i class="mdi mdi-lock"></i>
                  </span>
                  <span class="menu-title">Error pages</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="error">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#e-commerce" aria-expanded="false" aria-controls="e-commerce">
                  <span class="menu-icon">
                    <i class="mdi mdi-medical-bag"></i>
                  </span>
                  <span class="menu-title">E-commerce</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="e-commerce">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/invoice.html"> Invoice </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/pricing-table.html"> Pricing Table </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/orders.html"> Orders </a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" href="pages/apps/calendar.html">
                  <span class="menu-icon">
                    <i class="mdi mdi-calendar-today"></i>
                  </span>
                  <span class="menu-title">Calendar</span>
                </a>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" href="pages/apps/todo.html">
                  <span class="menu-icon">
                    <i class="mdi mdi-bulletin-board"></i>
                  </span>
                  <span class="menu-title">Todo list</span>
                </a>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" href="pages/apps/email.html">
                  <span class="menu-icon">
                    <i class="mdi mdi-email"></i>
                  </span>
                  <span class="menu-title">E-mail</span>
                </a>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" href="pages/apps/gallery.html">
                  <span class="menu-icon">
                    <i class="mdi mdi-image-filter-center-focus-weak"></i>
                  </span>
                  <span class="menu-title">Gallery</span>
                </a>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" href="../../documentation/documentation.html">
                  <span class="menu-icon">
                    <i class="mdi mdi-file-document-box"></i>
                  </span>
                  <span class="menu-title">Documentation</span>
                </a>
              </li>
            </ul>
          </nav>
          <!-- partial -->
          <div class="main-panel">
            <div class="content-wrapper">
              <div class="row">
                <div class="col-md-4 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Current Balance</h4>
                      <div class="row my-4">
                        <div class="col-lg-7 mx-auto text-center">
                          <div id="currentBalanceCircle" class="progressbar-js-circle demo-progress-circle"></div>
                          <h3 class="card-text mb-0 mt-4">360$</h3>
                          <p class="card-text">Total Expense</p>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-12 bg-gray-dark d-flex flex-row py-3 px-4 rounded justify-content-between">
                          <div>
                            <h6 class="mb-1">Transfer to stripe</h6>
                            <p class="card-text">Dec 25, 2018</p>
                          </div>
                          <div class="align-self-center">
                            <h6 class="font-weight-bold mb-0">650$</h6>
                          </div>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-12 bg-gray-dark d-flex flex-row py-3 px-4 rounded">
                          <div>
                            <h6 class="mb-1">Transfer to Paypal</h6>
                            <p class="card-text">Dec 31, 2018</p>
                          </div>
                          <div class="align-self-center flex-grow text-right">
                            <h6 class="font-weight-bold mb-0">530$</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-8 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-row justify-content-between">
                        <div>
                          <h4 class="card-title">Open Projects</h4>
                          <p>Your data status</p>
                        </div>
                        <div class="align-self-center">
                          <p class="text-muted">View History</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <div class="preview-list">
                            <div class="preview-item border-bottom">
                              <div class="preview-thumbnail">
                                <div class="preview-icon bg-primary rounded">
                                  <i class="mdi mdi-file-document"></i>
                                </div>
                              </div>
                              <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                  <h6 class="preview-subject">New Document</h6>
                                  <p class="mb-0">Broadcast web app mockup</p>
                                </div>
                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                  <p class="text-muted">15 minutes ago</p>
                                  <p>30 tasks, 5 issues </p>
                                </div>
                              </div>
                            </div>
                            <div class="preview-item border-bottom">
                              <div class="preview-thumbnail">
                                <div class="preview-icon bg-success rounded">
                                  <i class="mdi mdi-cloud-upload"></i>
                                </div>
                              </div>
                              <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                  <h6 class="preview-subject">New Design</h6>
                                  <p class="mb-0">Upload new design</p>
                                </div>
                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                  <p class="text-muted">1 hour ago</p>
                                  <p>23 tasks, 5 issues </p>
                                </div>
                              </div>
                            </div>
                            <div class="preview-item border-bottom">
                              <div class="preview-thumbnail">
                                <div class="preview-icon bg-info rounded">
                                  <i class="mdi mdi-clock"></i>
                                </div>
                              </div>
                              <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                  <h6 class="preview-subject">Project meeting</h6>
                                  <p class="mb-0">New project discussion</p>
                                </div>
                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                  <p class="text-muted">35 minutes ago</p>
                                  <p>15 tasks, 2 issues </p>
                                </div>
                              </div>
                            </div>
                            <div class="preview-item border-bottom">
                              <div class="preview-thumbnail">
                                <div class="preview-icon bg-warning rounded">
                                  <i class="mdi mdi-email"></i>
                                </div>
                              </div>
                              <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                  <h6 class="preview-subject">Broadcast Mail</h6>
                                  <p class="mb-0">Sent release details to team</p>
                                </div>
                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                  <p class="text-muted">55 minutes ago</p>
                                  <p>35 tasks, 7 issues </p>
                                </div>
                              </div>
                            </div>
                            <div class="preview-item">
                              <div class="preview-thumbnail">
                                <div class="preview-icon bg-danger rounded">
                                  <i class="mdi mdi-chart-pie"></i>
                                </div>
                              </div>
                              <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                  <h6 class="preview-subject">Planning</h6>
                                  <p class="mb-0">New application planning</p>
                                </div>
                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                  <p class="text-muted">50 minutes ago</p>
                                  <p>27 tasks, 4 issues </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-row p-3">
                        <div class="align-self-top">
                          <p class="card-title mb-1 font-weight-bold">Today's sales</p>
                          <h3 class="mb-0">2800</h3>
                        </div>
                        <div class="align-self-center flex-grow text-right">
                          <i class="icon-lg mdi mdi-chart-pie text-primary"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-row p-3">
                        <div class="align-self-top">
                          <p class="card-title mb-1 font-weight-bold">Total Revenue</p>
                          <h3 class="mb-0">38,879</h3>
                        </div>
                        <div class="align-self-center flex-grow text-right">
                          <i class="icon-lg mdi mdi-cash-multiple text-warning"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-row p-3">
                        <div class="align-self-top">
                          <p class="card-title mb-1 font-weight-bold">Today's Visits</p>
                          <h3 class="mb-0">2569</h3>
                        </div>
                        <div class="align-self-center flex-grow text-right">
                          <i class="icon-lg mdi mdi-account-outline text-success"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Order Status</h4>
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>
                                <div class="form-check form-check-flat m-0">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                  </label>
                                </div>
                              </th>
                              <th> Profile </th>
                              <th> Customer </th>
                              <th> Email </th>
                              <th> Products </th>
                              <th> Start Date </th>
                              <th> Actions </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <div class="form-check form-check-flat m-0">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                  </label>
                                </div>
                              </td>
                              <td>
                                <img src="../assets/images/faces/face1.jpg" alt="image" />
                              </td>
                              <td> David Grey </td>
                              <td> davidgrey@demo.com </td>
                              <td> 6300 </td>
                              <td> 01/11/2017 </td>
                              <td>
                                <i class="mdi mdi-pencil icon-sm mr-2 text-success"></i>
                                <i class="mdi mdi-close icon-sm text-danger"></i>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check form-check-flat m-0">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                  </label>
                                </div>
                              </td>
                              <td>
                                <img src="../assets/images/faces/face2.jpg" alt="image" />
                              </td>
                              <td> Stella Johnson </td>
                              <td> stella@demo.com </td>
                              <td> 1256 </td>
                              <td> 03/11/2017 </td>
                              <td>
                                <i class="mdi mdi-pencil icon-sm mr-2 text-success"></i>
                                <i class="mdi mdi-close icon-sm text-danger"></i>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check form-check-flat m-0">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                  </label>
                                </div>
                              </td>
                              <td>
                                <img src="../assets/images/faces/face5.jpg" alt="image" />
                              </td>
                              <td> Marina Michel </td>
                              <td> marinam@demo.com </td>
                              <td> 8600 </td>
                              <td> 26/10/2017 </td>
                              <td>
                                <i class="mdi mdi-pencil icon-sm mr-2 text-success"></i>
                                <i class="mdi mdi-close icon-sm text-danger"></i>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check form-check-flat m-0">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                  </label>
                                </div>
                              </td>
                              <td>
                                <img src="../assets/images/faces/face3.jpg" alt="image" />
                              </td>
                              <td> John Doe </td>
                              <td> djohn@demo.com </td>
                              <td> 3250 </td>
                              <td> 18/12/2017 </td>
                              <td>
                                <i class="mdi mdi-pencil icon-sm mr-2 text-success"></i>
                                <i class="mdi mdi-close icon-sm text-danger"></i>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check form-check-flat m-0">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                  </label>
                                </div>
                              </td>
                              <td>
                                <img src="../assets/images/faces/face4.jpg" alt="image" />
                              </td>
                              <td> Catherine </td>
                              <td> catherine@demo.com </td>
                              <td> 8750 </td>
                              <td> 15/09/2017 </td>
                              <td>
                                <i class="mdi mdi-pencil icon-sm mr-2 text-success"></i>
                                <i class="mdi mdi-close icon-sm text-danger"></i>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Messages</h4>
                      <div class="preview-list">
                        <div class="preview-item border-bottom">
                          <div class="preview-thumbnail">
                            <img src="../assets/images/faces/face6.jpg" alt="image" class="rounded-circle" />
                          </div>
                          <div class="preview-item-content d-flex flex-grow">
                            <div class="flex-grow">
                              <div class="d-sm-flex justify-content-between">
                                <h6 class="preview-subject">Richard Joy</h6>
                                <div class="d-flex">
                                  <p class="text-small text-muted border-right pr-3">13.06.2017</p>
                                  <p class="text-small text-muted pl-3">2 hours ago</p>
                                </div>
                              </div>
                              <p>Well, it seems to be working now. Thank You !</p>
                            </div>
                          </div>
                        </div>
                        <div class="preview-item border-bottom">
                          <div class="preview-thumbnail">
                            <img src="../assets/images/faces/face8.jpg" alt="image" class="rounded-circle" />
                          </div>
                          <div class="preview-item-content d-flex flex-grow">
                            <div class="flex-grow">
                              <div class="d-sm-flex justify-content-between">
                                <h6 class="preview-subject">Richard Joy</h6>
                                <div class="d-flex">
                                  <p class="text-small text-muted border-right pr-3">13.06.2017</p>
                                  <p class="text-small text-muted pl-3">2 hours ago</p>
                                </div>
                              </div>
                              <p>Well, it seems to be working now. Thank You !</p>
                            </div>
                          </div>
                        </div>
                        <div class="preview-item border-bottom">
                          <div class="preview-thumbnail">
                            <img src="../assets/images/faces/face9.jpg" alt="image" class="rounded-circle" />
                          </div>
                          <div class="preview-item-content d-flex flex-grow">
                            <div class="flex-grow">
                              <div class="d-sm-flex justify-content-between">
                                <h6 class="preview-subject">Richard Joy</h6>
                                <div class="d-flex">
                                  <p class="text-small text-muted border-right pr-3">13.06.2017</p>
                                  <p class="text-small text-muted pl-3">2 hours ago</p>
                                </div>
                              </div>
                              <p>Well, it seems to be working now. Thank You !</p>
                            </div>
                          </div>
                        </div>
                        <div class="preview-item border-bottom">
                          <div class="preview-thumbnail">
                            <img src="../assets/images/faces/face11.jpg" alt="image" class="rounded-circle" />
                          </div>
                          <div class="preview-item-content d-flex flex-grow">
                            <div class="flex-grow">
                              <div class="d-sm-flex justify-content-between">
                                <h6 class="preview-subject">Richard Joy</h6>
                                <div class="d-flex">
                                  <p class="text-small text-muted border-right pr-3">13.06.2017</p>
                                  <p class="text-small text-muted pl-3">2 hours ago</p>
                                </div>
                              </div>
                              <p>Well, it seems to be working now. Thank You !</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Todo</h4>
                      <div class="add-items d-flex">
                        <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?">
                        <button class="add btn btn-primary font-weight-bold todo-list-add-btn">Add</button>
                      </div>
                      <div class="list-wrapper">
                        <ul class="d-flex flex-column-reverse text-white todo-list todo-list-custom">
                          <li>
                            <div class="form-check form-check-flat">
                              <label class="form-check-label">
                                <input class="checkbox" type="checkbox"> Meeting with Alisa </label>
                            </div>
                            <i class="remove mdi mdi-close-circle-outline"></i>
                          </li>
                          <li class="completed">
                            <div class="form-check form-check-flat">
                              <label class="form-check-label">
                                <input class="checkbox" type="checkbox" checked> Call John </label>
                            </div>
                            <i class="remove mdi mdi-close-circle-outline"></i>
                          </li>
                          <li>
                            <div class="form-check form-check-flat">
                              <label class="form-check-label">
                                <input class="checkbox" type="checkbox"> Create invoice </label>
                            </div>
                            <i class="remove mdi mdi-close-circle-outline"></i>
                          </li>
                          <li>
                            <div class="form-check form-check-flat">
                              <label class="form-check-label">
                                <input class="checkbox" type="checkbox"> Print Statements </label>
                            </div>
                            <i class="remove mdi mdi-close-circle-outline"></i>
                          </li>
                          <li class="completed">
                            <div class="form-check form-check-flat">
                              <label class="form-check-label">
                                <input class="checkbox" type="checkbox" checked> Prepare for presentation </label>
                            </div>
                            <i class="remove mdi mdi-close-circle-outline"></i>
                          </li>
                          <li>
                            <div class="form-check form-check-flat">
                              <label class="form-check-label">
                                <input class="checkbox" type="checkbox"> Pick up kids from school </label>
                            </div>
                            <i class="remove mdi mdi-close-circle-outline"></i>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Audience By Country</h4>
                      <div class="row">
                        <div class="col-md-5">
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td>
                                    <i class="flag-icon flag-icon-us"></i>
                                  </td>
                                  <td>USA</td>
                                  <td class="text-right"> 1500 </td>
                                  <td class="text-right"> 56.35% </td>
                                </tr>
                                <tr>
                                  <td>
                                    <i class="flag-icon flag-icon-de"></i>
                                  </td>
                                  <td>Germany</td>
                                  <td class="text-right"> 800 </td>
                                  <td class="text-right"> 33.25% </td>
                                </tr>
                                <tr>
                                  <td>
                                    <i class="flag-icon flag-icon-au"></i>
                                  </td>
                                  <td>Australia</td>
                                  <td class="text-right"> 760 </td>
                                  <td class="text-right"> 15.45% </td>
                                </tr>
                                <tr>
                                  <td>
                                    <i class="flag-icon flag-icon-gb"></i>
                                  </td>
                                  <td>United Kingdom</td>
                                  <td class="text-right"> 450 </td>
                                  <td class="text-right"> 25.00% </td>
                                </tr>
                                <tr>
                                  <td>
                                    <i class="flag-icon flag-icon-ro"></i>
                                  </td>
                                  <td>Romania</td>
                                  <td class="text-right"> 620 </td>
                                  <td class="text-right"> 10.25% </td>
                                </tr>
                                <tr>
                                  <td>
                                    <i class="flag-icon flag-icon-br"></i>
                                  </td>
                                  <td>Brasil</td>
                                  <td class="text-right"> 230 </td>
                                  <td class="text-right"> 75.00% </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="col-md-7">
                          <div id="audience-map" class="vector-map"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2019 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
              </div>
            </footer>
            <!-- partial -->
          </div>
          <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
      </div>
      <!-- container-scroller -->
      <!-- plugins:js -->
      <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
      <!-- endinject -->
      <!-- Plugin js for this page -->
      <script src="../assets/vendors/progressbar.js/progressbar.min.js"></script>
      <script src="../assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
      <script src="../assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
      <!-- End plugin js for this page -->
      <!-- inject:js -->
      <script src="../assets/js/off-canvas.js"></script>
      <script src="../assets/js/hoverable-collapse.js"></script>
      <script src="../assets/js/misc.js"></script>
      <script src="../assets/js/settings.js"></script>
      <script src="../assets/js/todolist.js"></script>
      <!-- endinject -->
      <!-- Custom js for this page -->
      <script src="../assets/js/dashboard.js"></script>
      <!-- End custom js for this page -->
    </body>
  </html>
</textarea>
                          </div>
                          <!-- Tabs Ends -->
                          <!-- Tabs Starts -->
                          <div data-pws-tab="Classic Horizontal" data-pws-tab-name="Classic Horizontal">
                            <p>This section contains code of classic horizontal layout.</p>                            
<textarea class="multiple-codes mt-5">
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/classic-horizontal/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_horizontal-navbar.html -->
      <div class="horizontal-menu">
        <nav class="navbar top-navbar col-lg-12 col-12 p-0">
          <div class="container">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
              <a class="navbar-brand brand-logo" href="index.html"><img src="../assets/images/logo.svg" alt="logo" /></a>
              <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../assets/images/logo-mini.svg" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
              <ul class="navbar-nav w-100">
                <li class="nav-item w-100">
                  <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                    <input type="text" class="form-control" placeholder="Search Here..">
                  </form>
                </li>
              </ul>
              <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown">
                  <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-email"></i>
                    <span class="count bg-danger">5</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                    <h6 class="p-3 mb-0">Messages</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <img src="../assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                      </div>
                      <div class="preview-item-content">
                        <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                        <p class="text-muted mb-0"> 1 Minutes ago </p>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <img src="../assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                      </div>
                      <div class="preview-item-content">
                        <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                        <p class="text-muted mb-0"> 15 Minutes ago </p>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <img src="../assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
                      </div>
                      <div class="preview-item-content">
                        <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                        <p class="text-muted mb-0"> 18 Minutes ago </p>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <p class="p-3 mb-0 text-center">4 new messages</p>
                  </div>
                </li>
                <li class="nav-item dropdown border-left">
                  <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                    <i class="mdi mdi-bell"></i>
                    <span class="count bg-danger">7</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                    <h6 class="p-3 mb-0">Notifications</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-dark rounded-circle">
                          <i class="mdi mdi-calendar text-success"></i>
                        </div>
                      </div>
                      <div class="preview-item-content">
                        <p class="preview-subject mb-1">Event today</p>
                        <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-dark rounded-circle">
                          <i class="mdi mdi-settings text-danger"></i>
                        </div>
                      </div>
                      <div class="preview-item-content">
                        <p class="preview-subject mb-1">Settings</p>
                        <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-dark rounded-circle">
                          <i class="mdi mdi-link-variant text-warning"></i>
                        </div>
                      </div>
                      <div class="preview-item-content">
                        <p class="preview-subject mb-1">Launch Admin</p>
                        <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <p class="p-3 mb-0 text-center">See all notifications</p>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <img class="img-xs rounded-circle" src="../assets/images/faces-clipart/pic-1.png" alt="">
                  </a>
                </li>
                <li class="nav-item nav-settings d-none d-lg-block">
                  <a class="nav-link" href="#">
                    <i class="mdi mdi-view-grid"></i>
                  </a>
                </li>
              </ul>
              <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
                <span class="mdi mdi-menu"></span>
              </button>
            </div>
          </div>
        </nav>
        <nav class="bottom-navbar">
          <div class="container">
            <ul class="nav page-navigation">
              <li class="nav-item menu-items">
                <a class="nav-link" href="index.html">
                  <i class="mdi mdi-speedometer menu-icon"></i>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" href="pages/widgets/widgets.html">
                  <i class="mdi mdi mdi-texture menu-icon"></i>
                  <span class="menu-title">Widgets</span>
                </a>
              </li>
              <li class="nav-item mega-menu menu-items">
                <a href="#" class="nav-link">
                  <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                  <span class="menu-title">UI Elements</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="submenu">
                  <div class="col-group-wrapper row">
                    <div class="col-group col-md-4">
                      <div class="row">
                        <div class="col-12">
                          <p class="category-heading">Basic Elements</p>
                          <div class="submenu-item">
                            <div class="row">
                              <div class="col-md-6">
                                <ul>
                                  <li class="nav-item"><a class="nav-link" href="pages/ui-features/accordions.html">Accordion</a></li>
                                  <li class="nav-item"><a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                                  <li class="nav-item"><a class="nav-link" href="pages/ui-features/badges.html">Badges</a></li>
                                  <li class="nav-item"><a class="nav-link" href="pages/ui-features/breadcrumbs.html">Breadcrumbs</a></li>
                                  <li class="nav-item"><a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdown</a></li>
                                  <li class="nav-item"><a class="nav-link" href="pages/ui-features/modals.html">Modals</a></li>
                                </ul>
                              </div>
                              <div class="col-md-6">
                                <ul>
                                  <li class="nav-item"><a class="nav-link" href="pages/ui-features/progress.html">Progress bar</a></li>
                                  <li class="nav-item"><a class="nav-link" href="pages/ui-features/pagination.html">Pagination</a></li>
                                  <li class="nav-item"><a class="nav-link" href="pages/ui-features/tabs.html">Tabs</a></li>
                                  <li class="nav-item"><a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-group col-md-4">
                      <div class="row">
                        <div class="col-12">
                          <p class="category-heading">Advanced Elements</p>
                          <div class="submenu-item">
                            <div class="row">
                              <div class="col-md-6">
                                <ul>
                                  <li class="nav-item"><a class="nav-link" href="pages/ui-features/dragula.html">Dragula</a></li>
                                  <li class="nav-item"><a class="nav-link" href="pages/ui-features/carousel.html">Carousel</a></li>
                                  <li class="nav-item"><a class="nav-link" href="pages/ui-features/clipboard.html">Clipboard</a></li>
                                  <li class="nav-item"><a class="nav-link" href="pages/ui-features/context-menu.html">Context Menu</a></li>
                                  <li class="nav-item"><a class="nav-link" href="pages/ui-features/loaders.html">Loader</a></li>
                                  <li class="nav-item"><a class="nav-link" href="pages/ui-features/slider.html">Slider</a></li>
                                </ul>
                              </div>
                              <div class="col-md-6">
                                <ul>
                                  <li class="nav-item"><a class="nav-link" href="pages/ui-features/popups.html">Popup</a></li>
                                  <li class="nav-item"><a class="nav-link" href="pages/ui-features/notifications.html">Notification</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-group col-md-4">
                      <p class="category-heading">Icons</p>
                      <ul class="submenu-item">
                        <li class="nav-item"><a class="nav-link" href="pages/icons/flag-icons.html">Flag Icons</a></li>
                        <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages/icons/font-awesome.html">Font Awesome</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages/icons/simple-line-icon.html">Simple Line Icons</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages/icons/themify.html">Themify Icons</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item menu-items">
                <a href="#" class="nav-link">
                  <i class="mdi mdi-clipboard-text menu-icon"></i>
                  <span class="menu-title">Forms</span>
                  <i class="menu-arrow"></i></a>
                <div class="submenu">
                  <ul class="submenu-item">
                    <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/forms/advanced_elements.html">Advanced Elements</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/forms/validation.html">Validation</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/forms/wizard.html">Wizard</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/forms/text_editor.html">Text Editor</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/forms/code_editor.html">Code Editor</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item mega-menu menu-items">
                <a href="#" class="nav-link">
                  <i class="mdi mdi-chart-bar menu-icon"></i>
                  <span class="menu-title">Data</span>
                  <i class="menu-arrow"></i></a>
                <div class="submenu">
                  <div class="col-group-wrapper row">
                    <div class="col-group col-md-6">
                      <p class="category-heading">Charts</p>
                      <div class="submenu-item">
                        <div class="row">
                          <div class="col-md-6">
                            <ul>
                              <li class="nav-item"><a class="nav-link" href="pages/charts/chartjs.html">Chart Js</a></li>
                              <li class="nav-item"><a class="nav-link" href="pages/charts/morris.html">Morris</a></li>
                              <li class="nav-item"><a class="nav-link" href="pages/charts/flot-chart.html">Flot</a></li>
                              <li class="nav-item"><a class="nav-link" href="pages/charts/google-charts.html">Google Chart</a></li>
                            </ul>
                          </div>
                          <div class="col-md-6">
                            <ul>
                              <li class="nav-item"><a class="nav-link" href="pages/charts/sparkline.html">Sparkline</a></li>
                              <li class="nav-item"><a class="nav-link" href="pages/charts/c3.html">C3 Chart</a></li>
                              <li class="nav-item"><a class="nav-link" href="pages/charts/chartist.html">Chartist</a></li>
                              <li class="nav-item"><a class="nav-link" href="pages/charts/justGage.html">JustGage</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-group col-md-3">
                      <p class="category-heading">Table</p>
                      <ul class="submenu-item">
                        <li class="nav-item"><a class="nav-link" href="pages/tables/basic-table.html">Basic Table</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages/tables/data-table.html">Data Table</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages/tables/js-grid.html">Js-grid</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages/tables/sortable-table.html">Sortable Table</a></li>
                      </ul>
                    </div>
                    <div class="col-group col-md-3">
                      <p class="category-heading">Maps</p>
                      <ul class="submenu-item">
                        <li class="nav-item"><a class="nav-link" href="pages/maps/mapael.html">Mapael</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages/maps/vector-map.html">Vector Map</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages/maps/google-maps.html">Google Map</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item mega-menu menu-items">
                <a href="#" class="nav-link">
                  <i class="mdi mdi-content-copy menu-icon"></i>
                  <span class="menu-title">Sample Pages</span>
                  <i class="menu-arrow"></i></a>
                <div class="submenu">
                  <div class="col-group-wrapper row">
                    <div class="col-group col-md-3">
                      <p class="category-heading">User Pages</p>
                      <ul class="submenu-item">
                        <li class="nav-item"><a class="nav-link" href="pages/samples/login.html">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages/samples/login-2.html">Login 2</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages/samples/register.html">Register</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages/samples/register-2.html">Register 2</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages/samples/lock-screen.html">Lockscreen</a></li>
                      </ul>
                    </div>
                    <div class="col-group col-md-3">
                      <p class="category-heading">Error Pages</p>
                      <ul class="submenu-item">
                        <li class="nav-item"><a class="nav-link" href="pages/samples/error-404.html">404</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages/samples/error-500.html">500</a></li>
                      </ul>
                    </div>
                    <div class="col-group col-md-3">
                      <p class="category-heading">E-commerce</p>
                      <ul class="submenu-item">
                        <li class="nav-item"><a class="nav-link" href="pages/samples/invoice.html">Invoice</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages/samples/pricing-table.html">Pricing Table</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages/samples/orders.html">Orders</a></li>
                      </ul>
                    </div>
                    <div class="col-group col-md-3">
                      <p class="category-heading">General</p>
                      <ul class="submenu-item">
                        <li class="nav-item"><a class="nav-link" href="pages/samples/search-results.html">Search Results</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages/samples/profile.html">Profile</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages/samples/timeline.html">Timeline</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages/samples/news-grid.html">News grid</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages/samples/portfolio.html">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages/samples/faq.html">FAQ</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item menu-items">
                <a href="#" class="nav-link">
                  <i class="mdi mdi-webpack menu-icon"></i>
                  <span class="menu-title">Apps</span>
                  <i class="menu-arrow"></i></a>
                <div class="submenu">
                  <ul class="submenu-item">
                    <li class="nav-item"><a class="nav-link" href="pages/apps/email.html">Email</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/apps/calendar.html">Calendar</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/apps/todo.html">Todo List</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/apps/gallery.html">Gallery</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item menu-items">
                <a href="http://www.bootstrapdash.com/demo/corona/jquery/documentation/documentation.html"" class=" nav-link" target="_blank">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">Documentation</span></a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Current Balance</h4>
                    <div class="row my-4">
                      <div class="col-lg-7 mx-auto text-center">
                        <div id="currentBalanceCircle" class="progressbar-js-circle demo-progress-circle"></div>
                        <h3 class="card-text mb-0 mt-4">360$</h3>
                        <p class="card-text">Total Expense</p>
                      </div>
                    </div>
                    <div class="row mt-3">
                      <div class="col-12 bg-gray-dark d-flex flex-row py-3 px-4 rounded justify-content-between">
                        <div>
                          <h6 class="mb-1">Transfer to stripe</h6>
                          <p class="card-text">Dec 25, 2018</p>
                        </div>
                        <div class="align-self-center">
                          <h6 class="font-weight-bold mb-0">650$</h6>
                        </div>
                      </div>
                    </div>
                    <div class="row mt-3">
                      <div class="col-12 bg-gray-dark d-flex flex-row py-3 px-4 rounded">
                        <div>
                          <h6 class="mb-1">Transfer to Paypal</h6>
                          <p class="card-text">Dec 31, 2018</p>
                        </div>
                        <div class="align-self-center flex-grow text-right">
                          <h6 class="font-weight-bold mb-0">530$</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                      <div>
                        <h4 class="card-title">Open Projects</h4>
                        <p>Your data status</p>
                      </div>
                      <div class="align-self-center">
                        <p class="text-muted">View History</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="preview-list">
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-primary rounded">
                                <i class="mdi mdi-file-document"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">New Document</h6>
                                <p class="mb-0">Broadcast web app mockup</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">15 minutes ago</p>
                                <p>30 tasks, 5 issues </p>
                              </div>
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-success rounded">
                                <i class="mdi mdi-cloud-upload"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">New Design</h6>
                                <p class="mb-0">Upload new design</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">1 hour ago</p>
                                <p>23 tasks, 5 issues </p>
                              </div>
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-info rounded">
                                <i class="mdi mdi-clock"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Project meeting</h6>
                                <p class="mb-0">New project discussion</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">35 minutes ago</p>
                                <p>15 tasks, 2 issues </p>
                              </div>
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-warning rounded">
                                <i class="mdi mdi-email"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Broadcast Mail</h6>
                                <p class="mb-0">Sent release details to team</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">55 minutes ago</p>
                                <p>35 tasks, 7 issues </p>
                              </div>
                            </div>
                          </div>
                          <div class="preview-item">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-danger rounded">
                                <i class="mdi mdi-chart-pie"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Planning</h6>
                                <p class="mb-0">New application planning</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">50 minutes ago</p>
                                <p>27 tasks, 4 issues </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-row p-3">
                      <div class="align-self-top">
                        <p class="card-title mb-1 font-weight-bold">Today's sales</p>
                        <h3 class="mb-0">2800</h3>
                      </div>
                      <div class="align-self-center flex-grow text-right">
                        <i class="icon-lg mdi mdi-chart-pie text-primary"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-row p-3">
                      <div class="align-self-top">
                        <p class="card-title mb-1 font-weight-bold">Total Revenue</p>
                        <h3 class="mb-0">38,879</h3>
                      </div>
                      <div class="align-self-center flex-grow text-right">
                        <i class="icon-lg mdi mdi-cash-multiple text-warning"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-row p-3">
                      <div class="align-self-top">
                        <p class="card-title mb-1 font-weight-bold">Today's Visits</p>
                        <h3 class="mb-0">2569</h3>
                      </div>
                      <div class="align-self-center flex-grow text-right">
                        <i class="icon-lg mdi mdi-account-outline text-success"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Order Status</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>
                              <div class="form-check form-check-flat m-0">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                </label>
                              </div>
                            </th>
                            <th> Profile </th>
                            <th> Customer </th>
                            <th> Email </th>
                            <th> Products </th>
                            <th> Start Date </th>
                            <th> Actions </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check form-check-flat m-0">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                </label>
                              </div>
                            </td>
                            <td>
                              <img src="../assets/images/faces/face1.jpg" alt="image" />
                            </td>
                            <td> David Grey </td>
                            <td> davidgrey@demo.com </td>
                            <td> 6300 </td>
                            <td> 01/11/2017 </td>
                            <td>
                              <i class="mdi mdi-pencil icon-sm mr-2 text-success"></i>
                              <i class="mdi mdi-close icon-sm text-danger"></i>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check form-check-flat m-0">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                </label>
                              </div>
                            </td>
                            <td>
                              <img src="../assets/images/faces/face2.jpg" alt="image" />
                            </td>
                            <td> Stella Johnson </td>
                            <td> stella@demo.com </td>
                            <td> 1256 </td>
                            <td> 03/11/2017 </td>
                            <td>
                              <i class="mdi mdi-pencil icon-sm mr-2 text-success"></i>
                              <i class="mdi mdi-close icon-sm text-danger"></i>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check form-check-flat m-0">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                </label>
                              </div>
                            </td>
                            <td>
                              <img src="../assets/images/faces/face5.jpg" alt="image" />
                            </td>
                            <td> Marina Michel </td>
                            <td> marinam@demo.com </td>
                            <td> 8600 </td>
                            <td> 26/10/2017 </td>
                            <td>
                              <i class="mdi mdi-pencil icon-sm mr-2 text-success"></i>
                              <i class="mdi mdi-close icon-sm text-danger"></i>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check form-check-flat m-0">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                </label>
                              </div>
                            </td>
                            <td>
                              <img src="../assets/images/faces/face3.jpg" alt="image" />
                            </td>
                            <td> John Doe </td>
                            <td> djohn@demo.com </td>
                            <td> 3250 </td>
                            <td> 18/12/2017 </td>
                            <td>
                              <i class="mdi mdi-pencil icon-sm mr-2 text-success"></i>
                              <i class="mdi mdi-close icon-sm text-danger"></i>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check form-check-flat m-0">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                </label>
                              </div>
                            </td>
                            <td>
                              <img src="../assets/images/faces/face4.jpg" alt="image" />
                            </td>
                            <td> Catherine </td>
                            <td> catherine@demo.com </td>
                            <td> 8750 </td>
                            <td> 15/09/2017 </td>
                            <td>
                              <i class="mdi mdi-pencil icon-sm mr-2 text-success"></i>
                              <i class="mdi mdi-close icon-sm text-danger"></i>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Messages</h4>
                    <div class="preview-list">
                      <div class="preview-item border-bottom">
                        <div class="preview-thumbnail">
                          <img src="../assets/images/faces/face6.jpg" alt="image" class="rounded-circle" />
                        </div>
                        <div class="preview-item-content d-flex flex-grow">
                          <div class="flex-grow">
                            <div class="d-sm-flex justify-content-between">
                              <h6 class="preview-subject">Richard Joy</h6>
                              <div class="d-flex">
                                <p class="text-small text-muted border-right pr-3">13.06.2017</p>
                                <p class="text-small text-muted pl-3">2 hours ago</p>
                              </div>
                            </div>
                            <p>Well, it seems to be working now. Thank You !</p>
                          </div>
                        </div>
                      </div>
                      <div class="preview-item border-bottom">
                        <div class="preview-thumbnail">
                          <img src="../assets/images/faces/face8.jpg" alt="image" class="rounded-circle" />
                        </div>
                        <div class="preview-item-content d-flex flex-grow">
                          <div class="flex-grow">
                            <div class="d-sm-flex justify-content-between">
                              <h6 class="preview-subject">Richard Joy</h6>
                              <div class="d-flex">
                                <p class="text-small text-muted border-right pr-3">13.06.2017</p>
                                <p class="text-small text-muted pl-3">2 hours ago</p>
                              </div>
                            </div>
                            <p>Well, it seems to be working now. Thank You !</p>
                          </div>
                        </div>
                      </div>
                      <div class="preview-item border-bottom">
                        <div class="preview-thumbnail">
                          <img src="../assets/images/faces/face9.jpg" alt="image" class="rounded-circle" />
                        </div>
                        <div class="preview-item-content d-flex flex-grow">
                          <div class="flex-grow">
                            <div class="d-sm-flex justify-content-between">
                              <h6 class="preview-subject">Richard Joy</h6>
                              <div class="d-flex">
                                <p class="text-small text-muted border-right pr-3">13.06.2017</p>
                                <p class="text-small text-muted pl-3">2 hours ago</p>
                              </div>
                            </div>
                            <p>Well, it seems to be working now. Thank You !</p>
                          </div>
                        </div>
                      </div>
                      <div class="preview-item border-bottom">
                        <div class="preview-thumbnail">
                          <img src="../assets/images/faces/face11.jpg" alt="image" class="rounded-circle" />
                        </div>
                        <div class="preview-item-content d-flex flex-grow">
                          <div class="flex-grow">
                            <div class="d-sm-flex justify-content-between">
                              <h6 class="preview-subject">Richard Joy</h6>
                              <div class="d-flex">
                                <p class="text-small text-muted border-right pr-3">13.06.2017</p>
                                <p class="text-small text-muted pl-3">2 hours ago</p>
                              </div>
                            </div>
                            <p>Well, it seems to be working now. Thank You !</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Todo</h4>
                    <div class="add-items d-flex">
                      <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?">
                      <button class="add btn btn-primary font-weight-bold todo-list-add-btn">Add</button>
                    </div>
                    <div class="list-wrapper">
                      <ul class="d-flex flex-column-reverse text-white todo-list todo-list-custom">
                        <li>
                          <div class="form-check form-check-flat">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox"> Meeting with Alisa </label>
                          </div>
                          <i class="remove mdi mdi-close-circle-outline"></i>
                        </li>
                        <li class="completed">
                          <div class="form-check form-check-flat">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox" checked> Call John </label>
                          </div>
                          <i class="remove mdi mdi-close-circle-outline"></i>
                        </li>
                        <li>
                          <div class="form-check form-check-flat">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox"> Create invoice </label>
                          </div>
                          <i class="remove mdi mdi-close-circle-outline"></i>
                        </li>
                        <li>
                          <div class="form-check form-check-flat">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox"> Print Statements </label>
                          </div>
                          <i class="remove mdi mdi-close-circle-outline"></i>
                        </li>
                        <li class="completed">
                          <div class="form-check form-check-flat">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox" checked> Prepare for presentation </label>
                          </div>
                          <i class="remove mdi mdi-close-circle-outline"></i>
                        </li>
                        <li>
                          <div class="form-check form-check-flat">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox"> Pick up kids from school </label>
                          </div>
                          <i class="remove mdi mdi-close-circle-outline"></i>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Audience By Country</h4>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="table-responsive">
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>
                                  <i class="flag-icon flag-icon-us"></i>
                                </td>
                                <td>USA</td>
                                <td class="text-right"> 1500 </td>
                                <td class="text-right"> 56.35% </td>
                              </tr>
                              <tr>
                                <td>
                                  <i class="flag-icon flag-icon-de"></i>
                                </td>
                                <td>Germany</td>
                                <td class="text-right"> 800 </td>
                                <td class="text-right"> 33.25% </td>
                              </tr>
                              <tr>
                                <td>
                                  <i class="flag-icon flag-icon-au"></i>
                                </td>
                                <td>Australia</td>
                                <td class="text-right"> 760 </td>
                                <td class="text-right"> 15.45% </td>
                              </tr>
                              <tr>
                                <td>
                                  <i class="flag-icon flag-icon-gb"></i>
                                </td>
                                <td>United Kingdom</td>
                                <td class="text-right"> 450 </td>
                                <td class="text-right"> 25.00% </td>
                              </tr>
                              <tr>
                                <td>
                                  <i class="flag-icon flag-icon-ro"></i>
                                </td>
                                <td>Romania</td>
                                <td class="text-right"> 620 </td>
                                <td class="text-right"> 10.25% </td>
                              </tr>
                              <tr>
                                <td>
                                  <i class="flag-icon flag-icon-br"></i>
                                </td>
                                <td>Brasil</td>
                                <td class="text-right"> 230 </td>
                                <td class="text-right"> 75.00% </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div class="col-md-7">
                        <div id="audience-map" class="vector-map"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2019 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="../assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="../assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../assets/js/off-canvas.js"></script>
    <script src="../assets/js/hoverable-collapse.js"></script>
    <script src="../assets/js/misc.js"></script>
    <script src="../assets/js/settings.js"></script>
    <script src="../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
</textarea>
                          </div>
                          <!-- Tabs Ends -->
                          <!-- Tabs Starts -->
                          <div data-pws-tab="Tinted Sidebar" data-pws-tab-name="Tinted Sidebar">
                            <p>This section contains code of tinted sidebar layout.</p>                            
<textarea class="multiple-codes mt-5">
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Corona Admin</title>
      <!-- plugins:css -->
      <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
      <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
      <!-- endinject -->
      <!-- Plugin css for this page -->
      <link rel="stylesheet" href="../assets/vendors/jvectormap/jquery-jvectormap.css">
      <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
      <link rel="stylesheet" href="../assets/vendors/owl-carousel-2/owl.carousel.min.css">
      <link rel="stylesheet" href="../assets/vendors/owl-carousel-2/owl.theme.default.min.css">
      <!-- End plugin css for this page -->
      <!-- inject:css -->
      <!-- endinject -->
      <!-- Layout styles -->
      <link rel="stylesheet" href="../assets/css/modern-vertical/style.css">
      <!-- End layout styles -->
      <link rel="shortcut icon" href="images/favicon.png" />
    </head>
    <body class="sidebar-tinted">
      <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo" href="index.html"><img src="../assets/images/logo.svg" alt="logo" /></a>
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="text" class="form-control" placeholder="Search products">
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item d-none d-lg-block">
                <div class="nav-link">
                  <button class="btn btn-success">+ Create New Project</button>
                </div>
              </li>
              <li class="nav-item nav-settings d-none d-lg-block">
                <a class="nav-link" href="#">
                  <i class="mdi mdi-view-grid"></i>
                </a>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                  <i class="mdi mdi-email"></i>
                  <span class="count bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                  <h6 class="p-3 mb-0">Messages</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                      <p class="text-muted mb-0"> 1 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                      <p class="text-muted mb-0"> 15 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                      <p class="text-muted mb-0"> 18 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">4 new messages</p>
                </div>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell"></i>
                  <span class="count bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notifications</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-calendar text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Event today</p>
                      <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                      <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-link-variant text-warning"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Launch Admin</p>
                      <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all notifications</p>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="../assets/images/faces/face15.jpg" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Henry Klein</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">Advanced profile settings</p>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <!-- partial:partials/_sidebar.html -->
          <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
              <li class="nav-item profile">
                <div class="profile-desc">
                  <div class="profile-pic">
                    <div class="count-indicator">
                      <img class="img-xs rounded-circle " src="../assets/images/faces/face15.jpg" alt="">
                      <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                      <h5 class="mb-0 font-weight-normal">Henry Klein</h5>
                      <span>Gold Member</span>
                    </div>
                  </div>
                  <a href="#" class="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                </div>
              </li>
              <li class="nav-item nav-category">
                <span class="nav-link">Navigation</span>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" href="index.html">
                  <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                  </span>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" href="pages/widgets/widgets.html">
                  <span class="menu-icon">
                    <i class="mdi mdi-texture"></i>
                  </span>
                  <span class="menu-title">Widgets</span>
                </a>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
                  <span class="menu-icon">
                    <i class="mdi mdi-view-list"></i>
                  </span>
                  <span class="menu-title">Page Layouts</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="page-layouts">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/layout/boxed-layout.html">Boxed</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/layout/rtl-layout.html">RTL</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false" aria-controls="sidebar-layouts">
                  <span class="menu-icon">
                    <i class="mdi mdi-crosshairs-gps"></i>
                  </span>
                  <span class="menu-title">Sidebar Layouts</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="sidebar-layouts">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/layout/compact-menu.html">Compact menu</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-collapsed.html">Icon menu</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-hidden.html">Sidebar Hidden</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-hidden-overlay.html">Sidebar Overlay</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-fixed.html">Sidebar Fixed</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                  <span class="menu-icon">
                    <i class="mdi mdi-laptop"></i>
                  </span>
                  <span class="menu-title">Basic UI Elements</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/accordions.html">Accordions</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/badges.html">Badges</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/breadcrumbs.html">Breadcrumbs</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/modals.html">Modals</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/progress.html">Progress bar</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/pagination.html">Pagination</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/tabs.html">Tabs</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
                  <span class="menu-icon">
                    <i class="mdi mdi-settings"></i>
                  </span>
                  <span class="menu-title">Advanced Elements</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-advanced">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dragula.html">Dragula</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/clipboard.html">Clipboard</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/context-menu.html">Context menu</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/slider.html">Slider</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/loaders.html">Loaders</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/colcade.html">Colcade</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/carousel.html">Carousel</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/tooltips.html">Tooltips</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                  <span class="menu-icon">
                    <i class="mdi mdi-playlist-play"></i>
                  </span>
                  <span class="menu-title">Form Elements</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="form-elements">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/forms/basic_elements.html">Basic Form</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/forms/advanced_elements.html">Advanced Form</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/forms/validation.html">Validation</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/forms/wizard.html">Wizard</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                  <span class="menu-icon">
                    <i class="mdi mdi-table-large"></i>
                  </span>
                  <span class="menu-title">Tables</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="tables">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/tables/data-table.html">Data table</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/tables/js-grid.html">Js-grid</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/tables/sortable-table.html">Sortable table</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="false" aria-controls="editors">
                  <span class="menu-icon">
                    <i class="mdi mdi-format-text"></i>
                  </span>
                  <span class="menu-title">Editors</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="editors">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/forms/text_editor.html">Text editors</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/forms/code_editor.html">Code Editor</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                  <span class="menu-icon">
                    <i class="mdi mdi-chart-bar"></i>
                  </span>
                  <span class="menu-title">Charts</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="charts">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/morris.html">Morris</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/flot-chart.html">Flot</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/google-charts.html">Google charts</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/sparkline.html">Sparkline js</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/c3.html">C3 charts</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/chartist.html">Chartists</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/justGage.html">JustGage</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps">
                  <span class="menu-icon">
                    <i class="mdi mdi-map-marker-radius"></i>
                  </span>
                  <span class="menu-title">Maps</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="maps">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/maps/google-maps.html">Google Maps</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/maps/mapael.html">Mapeal</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/maps/vector-map.html">Vector map</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" href="pages/ui-features/notifications.html">
                  <span class="menu-icon">
                    <i class="mdi mdi-bell-ring"></i>
                  </span>
                  <span class="menu-title">Notifications</span>
                </a>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                  <span class="menu-icon">
                    <i class="mdi mdi-contacts"></i>
                  </span>
                  <span class="menu-title">Icons</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="icons">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/icons/flag-icons.html">Flag icons</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/icons/font-awesome.html">Font Awesome</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/icons/simple-line-icon.html">Simple line icons</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/icons/themify.html">Themify icons</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item nav-category">
                <span class="nav-link">More</span>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" href="pages/ui-features/popups.html">
                  <span class="menu-icon">
                    <i class="mdi mdi-forum"></i>
                  </span>
                  <span class="menu-title">Popups</span>
                </a>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                  <span class="menu-icon">
                    <i class="mdi mdi-security"></i>
                  </span>
                  <span class="menu-title">User Pages</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="auth">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                  <span class="menu-icon">
                    <i class="mdi mdi-earth"></i>
                  </span>
                  <span class="menu-title">General Pages</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="general-pages">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/profile.html"> Profile </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/portfolio.html"> Portfolio </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/faq.html"> FAQ </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/faq-2.html"> FAQ 2 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/search-results.html"> Search Results </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/news-grid.html"> News grid </a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
                  <span class="menu-icon">
                    <i class="mdi mdi-lock"></i>
                  </span>
                  <span class="menu-title">Error pages</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="error">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#e-commerce" aria-expanded="false" aria-controls="e-commerce">
                  <span class="menu-icon">
                    <i class="mdi mdi-medical-bag"></i>
                  </span>
                  <span class="menu-title">E-commerce</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="e-commerce">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/invoice.html"> Invoice </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/pricing-table.html"> Pricing Table </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/orders.html"> Orders </a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" href="pages/apps/calendar.html">
                  <span class="menu-icon">
                    <i class="mdi mdi-calendar-today"></i>
                  </span>
                  <span class="menu-title">Calendar</span>
                </a>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" href="pages/apps/todo.html">
                  <span class="menu-icon">
                    <i class="mdi mdi-bulletin-board"></i>
                  </span>
                  <span class="menu-title">Todo list</span>
                </a>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" href="pages/apps/email.html">
                  <span class="menu-icon">
                    <i class="mdi mdi-email"></i>
                  </span>
                  <span class="menu-title">E-mail</span>
                </a>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" href="pages/apps/gallery.html">
                  <span class="menu-icon">
                    <i class="mdi mdi-image-filter-center-focus-weak"></i>
                  </span>
                  <span class="menu-title">Gallery</span>
                </a>
              </li>
              <li class="nav-item menu-items">
                <a class="nav-link" href="../../documentation/documentation.html">
                  <span class="menu-icon">
                    <i class="mdi mdi-file-document-box"></i>
                  </span>
                  <span class="menu-title">Documentation</span>
                </a>
              </li>
            </ul>
          </nav>
          <!-- partial -->
          <div class="main-panel">
            <div class="content-wrapper">
              <div class="row">
                <div class="col-12 grid-margin stretch-card">
                  <div class="card corona-gradient-card">
                    <div class="card-body py-0 px-0 px-sm-3">
                      <div class="row align-items-center">
                        <div class="col-4 col-sm-3 col-xl-2">
                          <img src="../assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">
                        </div>
                        <div class="col-5 col-sm-7 col-xl-8 p-0">
                          <h4 class="mb-1 mb-sm-0">New refreshing look</h4>
                          <p class="mb-0 font-weight-normal d-none d-sm-block">Corona admin template now with a new facelift for enhanced legibility and aesthetics!</p>
                        </div>
                        <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                          <button class="btn btn-outline-light btn-rounded get-started-btn">Get Started</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$12.34</h3>
                            <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="icon icon-box-success ">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Potential growth</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$17.34</h3>
                            <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="icon icon-box-success">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Revenue current</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$12.34</h3>
                            <p class="text-danger ml-2 mb-0 font-weight-medium">-2.4%</p>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="icon icon-box-danger">
                            <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Daily Income</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$31.53</h3>
                            <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="icon icon-box-success ">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Expense current</h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Transaction History</h4>
                      <canvas id="transaction-history" class="transaction-chart"></canvas>
                      <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                        <div class="text-md-center text-xl-left">
                          <h6 class="mb-1">Transfer to Paypal</h6>
                          <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
                        </div>
                        <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                          <h6 class="font-weight-bold mb-0">$236</h6>
                        </div>
                      </div>
                      <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                        <div class="text-md-center text-xl-left">
                          <h6 class="mb-1">Tranfer to Stripe</h6>
                          <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
                        </div>
                        <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                          <h6 class="font-weight-bold mb-0">$593</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-8 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-row justify-content-between">
                        <h4 class="card-title mb-1">Open Projects</h4>
                        <p class="text-muted mb-1">Your data status</p>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <div class="preview-list">
                            <div class="preview-item border-bottom">
                              <div class="preview-thumbnail">
                                <div class="preview-icon bg-primary">
                                  <i class="mdi mdi-file-document"></i>
                                </div>
                              </div>
                              <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                  <h6 class="preview-subject">Admin dashboard design</h6>
                                  <p class="text-muted mb-0">Broadcast web app mockup</p>
                                </div>
                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                  <p class="text-muted">15 minutes ago</p>
                                  <p class="text-muted mb-0">30 tasks, 5 issues </p>
                                </div>
                              </div>
                            </div>
                            <div class="preview-item border-bottom">
                              <div class="preview-thumbnail">
                                <div class="preview-icon bg-success">
                                  <i class="mdi mdi-cloud-download"></i>
                                </div>
                              </div>
                              <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                  <h6 class="preview-subject">Wordpress Development</h6>
                                  <p class="text-muted mb-0">Upload new design</p>
                                </div>
                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                  <p class="text-muted">1 hour ago</p>
                                  <p class="text-muted mb-0">23 tasks, 5 issues </p>
                                </div>
                              </div>
                            </div>
                            <div class="preview-item border-bottom">
                              <div class="preview-thumbnail">
                                <div class="preview-icon bg-info">
                                  <i class="mdi mdi-clock"></i>
                                </div>
                              </div>
                              <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                  <h6 class="preview-subject">Project meeting</h6>
                                  <p class="text-muted mb-0">New project discussion</p>
                                </div>
                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                  <p class="text-muted">35 minutes ago</p>
                                  <p class="text-muted mb-0">15 tasks, 2 issues</p>
                                </div>
                              </div>
                            </div>
                            <div class="preview-item border-bottom">
                              <div class="preview-thumbnail">
                                <div class="preview-icon bg-danger">
                                  <i class="mdi mdi-email-open"></i>
                                </div>
                              </div>
                              <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                  <h6 class="preview-subject">Broadcast Mail</h6>
                                  <p class="text-muted mb-0">Sent release details to team</p>
                                </div>
                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                  <p class="text-muted">55 minutes ago</p>
                                  <p class="text-muted mb-0">35 tasks, 7 issues </p>
                                </div>
                              </div>
                            </div>
                            <div class="preview-item">
                              <div class="preview-thumbnail">
                                <div class="preview-icon bg-warning">
                                  <i class="mdi mdi-chart-pie"></i>
                                </div>
                              </div>
                              <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                  <h6 class="preview-subject">UI Design</h6>
                                  <p class="text-muted mb-0">New application planning</p>
                                </div>
                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                  <p class="text-muted">50 minutes ago</p>
                                  <p class="text-muted mb-0">27 tasks, 4 issues </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h5>Revenue</h5>
                      <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                          <div class="d-flex d-sm-block d-md-flex align-items-center">
                            <h2 class="mb-0">$32123</h2>
                            <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                          </div>
                          <h6 class="text-muted font-weight-normal">11.38% Since last month</h6>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                          <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h5>Sales</h5>
                      <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                          <div class="d-flex d-sm-block d-md-flex align-items-center">
                            <h2 class="mb-0">$45850</h2>
                            <p class="text-success ml-2 mb-0 font-weight-medium">+8.3%</p>
                          </div>
                          <h6 class="text-muted font-weight-normal"> 9.61% Since last month</h6>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                          <i class="icon-lg mdi mdi-wallet-travel text-danger ml-auto"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h5>Purchase</h5>
                      <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                          <div class="d-flex d-sm-block d-md-flex align-items-center">
                            <h2 class="mb-0">$2039</h2>
                            <p class="text-danger ml-2 mb-0 font-weight-medium">-2.1% </p>
                          </div>
                          <h6 class="text-muted font-weight-normal">2.27% Since last month</h6>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                          <i class="icon-lg mdi mdi-monitor text-success ml-auto"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row ">
                <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Order Status</h4>
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>
                                <div class="form-check form-check-muted m-0">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                  </label>
                                </div>
                              </th>
                              <th> Client Name </th>
                              <th> Order No </th>
                              <th> Product Cost </th>
                              <th> Project </th>
                              <th> Payment Mode </th>
                              <th> Start Date </th>
                              <th> Payment Status </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <div class="form-check form-check-muted m-0">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                  </label>
                                </div>
                              </td>
                              <td>
                                <img src="../assets/images/faces/face1.jpg" alt="image" />
                                <span class="pl-2">Henry Klein</span>
                              </td>
                              <td> 02312 </td>
                              <td> $14,500 </td>
                              <td> Dashboard </td>
                              <td> Credit card </td>
                              <td> 04 Dec 2019 </td>
                              <td>
                                <div class="badge badge-outline-success">Approved</div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check form-check-muted m-0">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                  </label>
                                </div>
                              </td>
                              <td>
                                <img src="../assets/images/faces/face2.jpg" alt="image" />
                                <span class="pl-2">Estella Bryan</span>
                              </td>
                              <td> 02312 </td>
                              <td> $14,500 </td>
                              <td> Website </td>
                              <td> Cash on delivered </td>
                              <td> 04 Dec 2019 </td>
                              <td>
                                <div class="badge badge-outline-warning">Pending</div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check form-check-muted m-0">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                  </label>
                                </div>
                              </td>
                              <td>
                                <img src="../assets/images/faces/face5.jpg" alt="image" />
                                <span class="pl-2">Lucy Abbott</span>
                              </td>
                              <td> 02312 </td>
                              <td> $14,500 </td>
                              <td> App design </td>
                              <td> Credit card </td>
                              <td> 04 Dec 2019 </td>
                              <td>
                                <div class="badge badge-outline-danger">Rejected</div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check form-check-muted m-0">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                  </label>
                                </div>
                              </td>
                              <td>
                                <img src="../assets/images/faces/face3.jpg" alt="image" />
                                <span class="pl-2">Peter Gill</span>
                              </td>
                              <td> 02312 </td>
                              <td> $14,500 </td>
                              <td> Development </td>
                              <td> Online Payment </td>
                              <td> 04 Dec 2019 </td>
                              <td>
                                <div class="badge badge-outline-success">Approved</div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check form-check-muted m-0">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                  </label>
                                </div>
                              </td>
                              <td>
                                <img src="../assets/images/faces/face4.jpg" alt="image" />
                                <span class="pl-2">Sallie Reyes</span>
                              </td>
                              <td> 02312 </td>
                              <td> $14,500 </td>
                              <td> Website </td>
                              <td> Credit card </td>
                              <td> 04 Dec 2019 </td>
                              <td>
                                <div class="badge badge-outline-success">Approved</div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-row justify-content-between">
                        <h4 class="card-title">Messages</h4>
                        <p class="text-muted mb-1 small">View all</p>
                      </div>
                      <div class="preview-list">
                        <div class="preview-item border-bottom">
                          <div class="preview-thumbnail">
                            <img src="../assets/images/faces/face6.jpg" alt="image" class="rounded-circle" />
                          </div>
                          <div class="preview-item-content d-flex flex-grow">
                            <div class="flex-grow">
                              <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                <h6 class="preview-subject">Leonard</h6>
                                <p class="text-muted text-small">5 minutes ago</p>
                              </div>
                              <p class="text-muted">Well, it seems to be working now.</p>
                            </div>
                          </div>
                        </div>
                        <div class="preview-item border-bottom">
                          <div class="preview-thumbnail">
                            <img src="../assets/images/faces/face8.jpg" alt="image" class="rounded-circle" />
                          </div>
                          <div class="preview-item-content d-flex flex-grow">
                            <div class="flex-grow">
                              <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                <h6 class="preview-subject">Luella Mills</h6>
                                <p class="text-muted text-small">10 Minutes Ago</p>
                              </div>
                              <p class="text-muted">Well, it seems to be working now.</p>
                            </div>
                          </div>
                        </div>
                        <div class="preview-item border-bottom">
                          <div class="preview-thumbnail">
                            <img src="../assets/images/faces/face9.jpg" alt="image" class="rounded-circle" />
                          </div>
                          <div class="preview-item-content d-flex flex-grow">
                            <div class="flex-grow">
                              <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                <h6 class="preview-subject">Ethel Kelly</h6>
                                <p class="text-muted text-small">2 Hours Ago</p>
                              </div>
                              <p class="text-muted">Please review the tickets</p>
                            </div>
                          </div>
                        </div>
                        <div class="preview-item border-bottom">
                          <div class="preview-thumbnail">
                            <img src="../assets/images/faces/face11.jpg" alt="image" class="rounded-circle" />
                          </div>
                          <div class="preview-item-content d-flex flex-grow">
                            <div class="flex-grow">
                              <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                <h6 class="preview-subject">Herman May</h6>
                                <p class="text-muted text-small">4 Hours Ago</p>
                              </div>
                              <p class="text-muted">Thanks a lot. It was easy to fix it .</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Portfolio Slide</h4>
                      <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel">
                        <div class="item">
                          <img src="../assets/images/dashboard/Rectangle.jpg" alt="">
                        </div>
                        <div class="item">
                          <img src="../assets/images/dashboard/Img_5.jpg" alt="">
                        </div>
                        <div class="item">
                          <img src="../assets/images/dashboard/img_6.jpg" alt="">
                        </div>
                      </div>
                      <div class="d-flex py-4">
                        <div class="preview-list w-100">
                          <div class="preview-item p-0">
                            <div class="preview-thumbnail">
                              <img src="../assets/images/faces/face12.jpg" class="rounded-circle" alt="">
                            </div>
                            <div class="preview-item-content d-flex flex-grow">
                              <div class="flex-grow">
                                <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                  <h6 class="preview-subject">CeeCee Bass</h6>
                                  <p class="text-muted text-small">4 Hours Ago</p>
                                </div>
                                <p class="text-muted">Well, it seems to be working now.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p class="text-muted">Well, it seems to be working now. </p>
                      <div class="progress progress-md portfolio-progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">To do list</h4>
                      <div class="add-items d-flex">
                        <input type="text" class="form-control todo-list-input" placeholder="enter task..">
                        <button class="add btn btn-primary todo-list-add-btn">Add</button>
                      </div>
                      <div class="list-wrapper">
                        <ul class="d-flex flex-column-reverse text-white todo-list todo-list-custom">
                          <li>
                            <div class="form-check form-check-primary">
                              <label class="form-check-label">
                                <input class="checkbox" type="checkbox"> Create invoice </label>
                            </div>
                            <i class="remove mdi mdi-close-box"></i>
                          </li>
                          <li>
                            <div class="form-check form-check-primary">
                              <label class="form-check-label">
                                <input class="checkbox" type="checkbox"> Meeting with Alita </label>
                            </div>
                            <i class="remove mdi mdi-close-box"></i>
                          </li>
                          <li class="completed">
                            <div class="form-check form-check-primary">
                              <label class="form-check-label">
                                <input class="checkbox" type="checkbox" checked> Prepare for presentation </label>
                            </div>
                            <i class="remove mdi mdi-close-box"></i>
                          </li>
                          <li>
                            <div class="form-check form-check-primary">
                              <label class="form-check-label">
                                <input class="checkbox" type="checkbox"> Plan weekend outing </label>
                            </div>
                            <i class="remove mdi mdi-close-box"></i>
                          </li>
                          <li>
                            <div class="form-check form-check-primary">
                              <label class="form-check-label">
                                <input class="checkbox" type="checkbox"> Pick up kids from school </label>
                            </div>
                            <i class="remove mdi mdi-close-box"></i>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Visitors by Countries</h4>
                      <div class="row">
                        <div class="col-md-5">
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td>
                                    <i class="flag-icon flag-icon-us"></i>
                                  </td>
                                  <td>USA</td>
                                  <td class="text-right"> 1500 </td>
                                  <td class="text-right font-weight-medium"> 56.35% </td>
                                </tr>
                                <tr>
                                  <td>
                                    <i class="flag-icon flag-icon-de"></i>
                                  </td>
                                  <td>Germany</td>
                                  <td class="text-right"> 800 </td>
                                  <td class="text-right font-weight-medium"> 33.25% </td>
                                </tr>
                                <tr>
                                  <td>
                                    <i class="flag-icon flag-icon-au"></i>
                                  </td>
                                  <td>Australia</td>
                                  <td class="text-right"> 760 </td>
                                  <td class="text-right font-weight-medium"> 15.45% </td>
                                </tr>
                                <tr>
                                  <td>
                                    <i class="flag-icon flag-icon-gb"></i>
                                  </td>
                                  <td>United Kingdom</td>
                                  <td class="text-right"> 450 </td>
                                  <td class="text-right font-weight-medium"> 25.00% </td>
                                </tr>
                                <tr>
                                  <td>
                                    <i class="flag-icon flag-icon-ro"></i>
                                  </td>
                                  <td>Romania</td>
                                  <td class="text-right"> 620 </td>
                                  <td class="text-right font-weight-medium"> 10.25% </td>
                                </tr>
                                <tr>
                                  <td>
                                    <i class="flag-icon flag-icon-br"></i>
                                  </td>
                                  <td>Brasil</td>
                                  <td class="text-right"> 230 </td>
                                  <td class="text-right font-weight-medium"> 75.00% </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="col-md-7">
                          <div id="audience-map" class="vector-map"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2019 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
              </div>
            </footer>
            <!-- partial -->
          </div>
          <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
      </div>
      <!-- container-scroller -->
      <!-- plugins:js -->
      <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
      <!-- endinject -->
      <!-- Plugin js for this page -->
      <script src="../assets/vendors/chart.js/Chart.min.js"></script>
      <script src="../assets/vendors/progressbar.js/progressbar.min.js"></script>
      <script src="../assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
      <script src="../assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
      <script src="../assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
      <!-- End plugin js for this page -->
      <!-- inject:js -->
      <script src="../assets/js/off-canvas.js"></script>
      <script src="../assets/js/hoverable-collapse.js"></script>
      <script src="../assets/js/misc.js"></script>
      <script src="../assets/js/settings.js"></script>
      <script src="../assets/js/todolist.js"></script>
      <!-- endinject -->
      <!-- Custom js for this page -->
      <script src="../assets/js/dashboard.js"></script>
      <!-- End custom js for this page -->
    </body>
  </html>
</textarea>
                          </div>
                          <!-- Tabs Ends -->
                        </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <!-- New Docs Starts Here -->
                      <h3 class="mb-4">Components</h3>
                      <hr class="hr" id="basic-ui">
                      <h4 class="my-4">Basic UI Elements</h4>
                      <div class="demo-tabs">
                        <!-- Tabs Starts -->
                        <div data-pws-tab="Button" data-pws-tab-name="Button">
                          <h5 class="mb-2 mt-4">Button with single color</h5>
                          <div class="fluid-container py-4">
                            <button type="button" class="btn btn-primary">Primary</button>
                            <button type="button" class="btn btn-secondary">Secondary</button>
                            <button type="button" class="btn btn-success">Success</button>
                            <button type="button" class="btn btn-info">Info</button>
                            <button type="button" class="btn btn-warning">Warning</button>
                            <button type="button" class="btn btn-danger">Danger</button>
                          </div>
                          <textarea class="multiple-codes">
    <div class="row">
      <button type="button" class="btn btn-primary">Primary</button>
      <button type="button" class="btn btn-secondary">Secondary</button>
      <button type="button" class="btn btn-success">Success</button>
      <button type="button" class="btn btn-info">Info</button>
      <button type="button" class="btn btn-warning">Warning</button>
      <button type="button" class="btn btn-danger">Danger</button>
    </div>
                                      </textarea>
                          <h5 class="mb-2 mt-4">Outlined</h5>
                          <div class="fluid-container py-4">
                            <button type="button" class="btn btn-outline-primary">Primary</button>
                            <button type="button" class="btn btn-outline-secondary">Secondary</button>
                            <button type="button" class="btn btn-outline-success">Success</button>
                            <button type="button" class="btn btn-outline-info">Info</button>
                            <button type="button" class="btn btn-outline-warning">Warning</button>
                            <button type="button" class="btn btn-outline-danger">Danger</button>
                          </div>
                          <textarea class="multiple-codes">
    <div class="row">
      <button type="button" class="btn btn-outline-primary">Primary</button>
      <button type="button" class="btn btn-outline-secondary">Secondary</button>
      <button type="button" class="btn btn-outline-success">Success</button>
      <button type="button" class="btn btn-outline-info">Info</button>
      <button type="button" class="btn btn-outline-warning">Warning</button>
      <button type="button" class="btn btn-outline-danger">Danger</button>
    </div>
                                      </textarea>
                          <h5 class="mb-2 mt-4">Sizes</h5>
                          <div class="fluid-container py-4">
                            <button type="button" class="btn btn-primary btn-lg">Large</button>
                            <button type="button" class="btn btn-primary">Medium</button>
                            <button type="button" class="btn btn-primary btn-sm">Small</button>
                          </div>
                          <textarea class="multiple-codes">
    <div class="row">
      <button type="button" class="btn btn-primary btn-lg">Small</button>
      <button type="button" class="btn btn-secondary">Medium</button>
      <button type="button" class="btn btn-success btn-sm">Large</button>
    </div>
                                      </textarea>
                        </div>
                        <!-- Tabs Ends -->
                        <!-- Tabs Starts -->
                        <div data-pws-tab="Accordions" data-pws-tab-name="Accordions">
                          <h5 class="mb-2 mt-4">Bootstrap Accordion</h5>
                          <div class="fluid-container py-4">
                            <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                              <div class="card">
                                <div class="card-header" role="tab" id="headingOne">
                                  <h5 class="mb-0">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Collapsible Group Item #1 </a>
                                  </h5>
                                </div>
                                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                  <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" role="tab" id="headingTwo">
                                  <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Collapsible Group Item #2 </a>
                                  </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                  <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" role="tab" id="headingThree">
                                  <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Collapsible Group Item #3 </a>
                                  </h5>
                                </div>
                                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                  <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <textarea class="multiple-codes">
    <div id="accordion" class="accordion" role="tablist" aria-multiselectable="true">
      <div class="card">
        <div class="card-header" role="tab" id="headingOne">
          <h5 class="mb-0">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Collapsible Group Item #1
            </a>
          </h5>
        </div>
    
        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
          <div class="card-body">
              ....
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" role="tab" id="headingTwo">
          <h5 class="mb-0">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Collapsible Group Item #2
            </a>
          </h5>
        </div>
        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
          <div class="card-body">
              ....
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" role="tab" id="headingThree">
          <h5 class="mb-0">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Collapsible Group Item #3
            </a>
          </h5>
        </div>
        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
          <div class="card-body">
              ....
          </div>
        </div>
      </div>
    </div>
                                    </textarea>
                        </div>
                        <!-- Tabs Ends -->
                        <!-- Tabs Starts -->
                        <div data-pws-tab="Dropdown" data-pws-tab-name="Dropdown">
                          <h5 class="mb-2 mt-4">Bootstrap Dropdown</h5>
                          <div class="fluid-container py-4">
                            <div class="btn-group">
                              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Action </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                              </div>
                            </div>
                            <div class="btn-group">
                              <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Action </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                              </div>
                            </div>
                            <div class="btn-group">
                              <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Action </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                              </div>
                            </div>
                            <div class="btn-group">
                              <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Action </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                              </div>
                            </div>
                            <div class="btn-group">
                              <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Action </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                              </div>
                            </div>
                          </div>
                          <textarea class="multiple-codes">
    <div class="btn-group">
      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Action
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
      </div>
    </div>
    <div class="btn-group">
      <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Action
      </button>
      <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>
      </div>
    </div>
    
    <div class="btn-group">
      <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Action
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
      </div>
    </div>
    
    <div class="btn-group">
      <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Action
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
      </div>
    </div>
    
    <div class="btn-group">
      <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Action
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
      </div>
    </div>
                                      </textarea>
                          <h5 class="mb-2 mt-4">Dropdown Outlined</h5>
                          <div class="fluid-container py-4">
                            <div class="btn-group">
                              <button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Action </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                              </div>
                            </div>
                            <div class="btn-group">
                              <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Action </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                              </div>
                            </div>
                            <div class="btn-group">
                              <button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Action </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                              </div>
                            </div>
                            <div class="btn-group">
                              <button type="button" class="btn btn-outline-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Action </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                              </div>
                            </div>
                            <div class="btn-group">
                              <button type="button" class="btn btn-outline-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Action </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                              </div>
                            </div>
                          </div>
                          <textarea class="multiple-codes">
    <div class="btn-group">
      <button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Action
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
      </div>
    </div>
    <div class="btn-group">
      <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Action
      </button>
      <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>
      </div>
    </div>
    
    <div class="btn-group">
      <button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Action
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
      </div>
    </div>
    
    <div class="btn-group">
      <button type="button" class="btn btn-outline-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Action
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
      </div>
    </div>
    
    <div class="btn-group">
      <button type="button" class="btn btn-outline-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Action
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
      </div>
    </div>
                                    </textarea>
                        </div>
                        <!-- Tabs Ends -->
                        <!-- Tabs Starts -->
                        <div data-pws-tab="Tabs" data-pws-tab-name="Tabs">
                          <h5 class="mb-2 mt-4">Bootstrap Tabs</h5>
                          <div class="fluid-container py-4">
                            <ul class="nav nav-tabs">
                              <li class="nav-item">
                                <a class="nav-link active" href="#">Active</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link disabled" href="#">Disabled</a>
                              </li>
                            </ul>
                          </div>
                          <textarea class="multiple-codes">
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="#">Active</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
                                      </textarea>
                        </div>
                        <!-- Tabs Ends -->
                        <!-- Tabs Starts -->
                        <div data-pws-tab="Modals" data-pws-tab-name="Modals">
                          <h5 class="mb-2 mt-4">Bootstrap Modal</h5>
                          <div class="fluid-container py-4">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#defaultModal">Launch demo modal</button>
                            <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <p>This is a modal with default size</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <textarea class="multiple-codes">
    <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>This is a modal with default size</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
                                    </textarea>
                        </div>
                        <!-- Tabs Ends -->
                        <!-- Tabs Starts -->
                        <div data-pws-tab="bootstrap-Pagination" data-pws-tab-name="Pagination">
                          <h5 class="mb-2 mt-4">Bootstrap Pagination</h5>
                          <div class="fluid-container py-4">
                            <nav aria-label="Page navigation example">
                              <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                              </ul>
                            </nav>
                          </div>
                          <textarea class="multiple-codes">
    <nav aria-label="Page navigation example">
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item active"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
    </nav>
                                      </textarea>
                        </div>
                        <!-- Tabs Ends -->
                        <!-- Tabs Starts -->
                        <div data-pws-tab="bootstrap-Badge" data-pws-tab-name="Badge">
                          <h5 class="mb-2 mt-4">Bootstrap Badges</h5>
                          <div class="fluid-container py-4">
                            <div class="badge badge-primary">Default</div>
                            <div class="badge badge-primary badge-pill">Pill</div>
                            <div class="badge badge-outline-primary badge-pill">Outlined</div>
                          </div>
                          <textarea class="multiple-codes">
    <div class="badge badge-primary">Default</div>                                           
    <div class="badge badge-primary badge-pill">Pill</div>
    <div class="badge badge-outline-primary badge-pill">Outlined</div>
                                      </textarea>
                        </div>
                        <!-- Tabs Ends -->
                      </div>
                      <!-- demo-tabs container ends -->
                      <!-- New Docs Ends Here -->
                      <!-- New Docs Starts Here -->
                      <hr class="hr" id="basic-ui-2">
                      <h4 class="my-4">Basic UI Elements - 2</h4>
                      <div class="demo-tabs">
                        <!-- Tabs Starts -->
                        <div data-pws-tab="bootstrap-Breadcrumb" data-pws-tab-name="Breadcrumb">
                          <h5 class="mb-2 mt-4">Bootstrap Breadcrumb</h5>
                          <div class="fluid-container py-4">
                            <nav aria-label="breadcrumb">
                              <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Library</li>
                              </ol>
                            </nav>
                          </div>
                          <textarea class="multiple-codes">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Library</li>
      </ol>
    </nav>
                                      </textarea>
                        </div>
                        <!-- Tabs Ends -->
                        <!-- Tabs Starts -->
                        <div data-pws-tab="bootstrap-Progressbar" data-pws-tab-name="Progressbar">
                          <h5 class="mb-2 mt-4">Bootstrap Progressbar</h5>
                          <div class="fluid-container py-4">
                            <div class="progress progress-md w-50">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                          <textarea class="multiple-codes">
    <div class="progress progress-md">
      <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
                                      </textarea>
                        </div>
                        <!-- Tabs Ends -->
                        <!-- Tabs Starts -->
                        <div data-pws-tab="bootstrap-tooltip" data-pws-tab-name="Tooltip">
                          <h5 class="mb-2 mt-4">Bootstrap Tooltip</h5>
                          <div class="container-fluid py-4">
                            <button class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="Basic tooltip">Hover me</button>
                          </div>
                          <p class="pt-4"> Add the following script files in &lt;body&gt;. </p>
                          <textarea class="multiple-codes">
    <script src="path-to/js/tooltips.js"></script>
    </textarea>
                          <p> To create a clipboard, add the following code: </p>
                          <textarea class="multiple-codes">
    <button class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="Basic tooltip">Hover me</button>
    <script>
    $('[data-toggle="tooltip"]').tooltip();
    </script>
                                      </textarea>
                        </div>
                        <!-- Tabs Ends -->
                      </div>
                      <!-- demo-tabs container ends -->
                      <!-- New Docs Ends Here -->
                      <!-- New Docs Starts Here -->
                      <hr class="hr" id="advanced-ui">
                      <h4 class="my-4">Advanced UI Elements</h4>
                      <div class="demo-tabs">
                        <!-- Tabs Starts -->
                        <div data-pws-tab="Clipboard" data-pws-tab-name="Clipboard">
                          <p>
                            <a href="https://clipboardjs.com/">Clipboard</a>, a modern approach to copy text to clipboard. </p>
                          <h5 class="mt-5 mb-4">Usage</h5>
                          <p> Add the following script files in &lt;body&gt;. </p>
                          <textarea class="multiple-codes">
    <script src="path-to/node_modules/clipboard/dist/clipboard.min.js"></script>
                                      </textarea>
                          <p> To create a clipboard, add the following code: </p>
                          <textarea class="multiple-codes">
    <textarea id="clipboardExample2" class="form-control">Hello&lt;/textarea&gt;
    <button type="button" class="btn btn-primary btn-clipboard" data-clipboard-action="copy" data-clipboard-target="#clipboardExample2">Copy</button>
    <button type="button" class="btn btn-danger btn-clipboard" data-clipboard-action="cut" data-clipboard-target="#clipboardExample2">Cut</button>
    
    <script>
    var clipboard = new Clipboard('.btn-clipboard');
    clipboard.on('success', function(e) {
      console.log(e);
    });
    clipboard.on('error', function(e) {
      console.log(e);
    });
    </script>
                                      </textarea>
                        </div>
                        <!-- Tabs Ends -->
                        <!-- Tabs Starts -->
                        <div data-pws-tab="TodoList" data-pws-tab-name="Todo List">
                          <p>
                            <a href="http://www.jqueryscript.net/demo/Minimal-To-do-List-Task-Manager-App-Using-jQuery-Local-Storage/">Todolist</a> is a minimal jQuery plugin to create checklist. </p>
                          <h5 class="mt-5 mb-4">Usage</h5>
                          <p> Add the following script files in &lt;body&gt;. </p>
                          <textarea class="multiple-codes">
    <script src="path-to/js/todolist.js"></script>
                                      </textarea>
                          <p> To create a filterable list, add the following code: </p>
                          <textarea class="multiple-codes">
    <div class="add-items d-flex">
      <input type="text" class="form-control todo-list-input"  placeholder="What do you need to do today?">
      <button class="add btn btn-primary font-weight-bold todo-list-add-btn" id="add-task">Add</button>
    </div>
    <div class="list-wrapper">
      <ul class="d-flex flex-column-reverse todo-list">
        <li>
          <div class="form-check">
            <label class="form-check-label">
              <input class="checkbox" type="checkbox">
              Meeting with Alisa
            </label>
          </div>
          <i class="remove mdi mdi-close-circle-outline"></i>
        </li>
        <li>
          ...
        </li>
        <li>
          ...
        </li>
        <li>
          ...
        </li>
      </ul>
    </div>
                                      </textarea>
                        </div>
                        <!-- Tabs Ends -->
                        <!-- Tabs Starts -->
                        <div data-pws-tab="Dragula" data-pws-tab-name="Dragula">
                          <p>
                            <a href="https://bevacqua.github.io/dragula/">Dragula</a> ,Drag and drop so simple it hurts. </p>
                          <h5 class="mt-5 mb-4">Usage</h5>
                          <p> To use Dragula in your application, include the following files in &lt;head&gt;. </p>
                          <textarea class="multiple-codes">
    <link rel="stylesheet" href="path-to/node_modules/dragula/dist/dragula.min.css" />
                                      </textarea>
                          <p> Add the following script files in &lt;body&gt;. </p>
                          <textarea class="multiple-codes">
    <script src="path-to/node_modules/dragula/dist/dragula.min.js"></script>
                                      </textarea>
                          <p> To create a drag n drop list, add the following code: </p>
                          <textarea class="multiple-codes">
    <div id="dragula-event-left" class="h-100">
      <div>
      Drag me!
      </div>
    </div>
    <div id="dragula-event-right" class="h-100">
      <div>
      Drag me!
      </div>
    </div>
    
    <script>
    (function($) {
      dragula([document.getElementById("dragula-left"), document.getElementById("dragula-right")]);
      dragula([document.getElementById("dragula-event-left"), document.getElementById("dragula-event-right")])
      .on('drop', function(el) {
        el.className += ' bg-danger';
      })
    })(jQuery);
    </script>
                                    </textarea>
                        </div>
                        <!-- Tabs Ends -->
                        <!-- Tabs Starts -->
                        <div data-pws-tab="context-menu" data-pws-tab-name="ContextMenu">
                          <p> The contextMenu Plugin was designed for web applications in need of menus on a possibly large amount of objects. <a target="_blank" href="https://swisnl.github.io/jQuery-contextMenu/">Click Here</a> to see the official documentation. </p>
                        </div>
                        <!-- Tabs Ends -->
                        <!-- Ui-slider Starts -->
                        <div data-pws-tab="UISlider" data-pws-tab-name="UI Slider">
                          <p>
                            <a href="https://refreshless.com/nouislider/">noUiSlider</a> is a range slider without bloat. </p>
                          <h5 class="mt-5 mb-4">Usage</h5>
                          <p> To use NoUISlider in your application, include the following files in &lt;head&gt;. </p>
                          <textarea class="multiple-codes">
    <link rel="stylesheet" href="path-to/node_modules/nouislider/distribute/nouislider.min.css" /></textarea>
                          <p> Add the following script files in &lt;body&gt;. </p>
                          <textarea class="multiple-codes">
    <script src="path-to/node_modules/nouislider/distribute/nouislider.min.js"></script></textarea>
                          <p> To create a slider, add the following code: </p>
                          <textarea class="multiple-codes">
    <div id="ui-slider" class="slider"></div>
    
    <script>
    var startSlider = document.getElementById('ui-slider');
    noUiSlider.create(startSlider, {
    start: [20, 80],
    range: {
      'min': [0],
      'max': [100]
    }
    });
    </script></textarea>
                        </div>
                        <!-- Ui slider Ends -->
                        <!-- Tabs Starts -->
                        <div data-pws-tab="Range-slider" data-pws-tab-name="Range Slider">
                          <p> Easy, flexible and responsive range slider with skin support. <a target="_blank" href="http://ionden.com/a/plugins/ion.rangeSlider/en.html">Click Here</a> to see the official documentation. </p>
                        </div>
                        <!-- Tabs Ends -->
                        <!-- Tabs Starts -->
                        <div data-pws-tab="Colgade" data-pws-tab-name="Colcade Grid">
                          <p>
                            <a href="https://github.com/desandro/colcade">Colcade</a> is a simple lightweight masonry layout. </p>
                          <h5 class="mt-5 mb-4">Usage</h5>
                          <p> Add the following script files in &lt;body&gt;. </p>
                          <textarea class="multiple-codes">
    <script src="path-to/node_modules/colcade/colcade.js"></script>
                                            </textarea>
                          <p> To create a responsive, add the following code: </p>
                          <textarea class="multiple-codes">
    <div class="grid">
      <div class="grid-col grid-col--1"></div>
      <div class="grid-col grid-col--2"></div>
      <div class="grid-col grid-col--3"></div>
      <div class="grid-col grid-col--4"></div>
      <div class="grid-item grid-item--b"></div>
      <div class="grid-item grid-item--a"></div>
      <div class="grid-item grid-item--c"></div>
      <div class="grid-item grid-item--a"></div>
      <div class="grid-item grid-item--a"></div>
      <div class="grid-item grid-item--b"></div>
      <div class="grid-item grid-item--c"></div>
      <div class="grid-item grid-item--c"></div>
    </div>
    
    <script>
    var colcade = new Colcade('.grid', {
      columns: '.grid-col',
      items: '.grid-item'
    });
    </script>
                                            </textarea>
                        </div>
                        <!-- Tabs Ends -->
                      </div>
                      <!-- demo-tabs container ends -->
                      <!-- New Docs Starts Here -->
                      <hr class="hr" id="media">
                      <h4 class="my-4">Media</h4>
                      <div class="demo-tabs">
                        <!-- Tabs Starts -->
                        <div data-pws-tab="LightBox" data-pws-tab-name="Lightbox">
                          <p>
                            <a href="http://sachinchoolur.github.io/lightGallery/">Light Galary</a> is a customizable, modular, responsive, Lightbox gallery plugin for jQuery. </p>
                          <h5 class="mt-5 mb-4">Usage</h5>
                          <p> To use LightGallery in your application, include the following files in &lt;head&gt;. </p>
                          <textarea class="multiple-codes">
    <link rel="stylesheet" href="path-to/node_modules/lightgallery/dist/css/lightgallery.min.css">
                                      </textarea>
                          <p> Add the following script files in &lt;body&gt;. </p>
                          <textarea class="multiple-codes">
    <script src="../../node_modules/lightgallery/dist/js/lightgallery-all.min.js"></script>
                                      </textarea>
                          <p> To create Lightbox Gallery, add the following code: </p>
                          <textarea class="multiple-codes">
    <div id="gallery" class="row lightGallery">
      <a class="image-tile col-xl-3 col-lg-3 col-md-3 col-md-4 col-6" href="http://via.placeholder.com/690x580">
        <img src="http://via.placeholder.com/280x280" />
      </a>
      <a class="image-tile col-xl-3 col-lg-3 col-md-3 col-md-4 col-6" href="http://via.placeholder.com/690x580">
        <img src="http://via.placeholder.com/280x280" />
      </a>
      <a class="image-tile col-xl-3 col-lg-3 col-md-3 col-md-4 col-6" href="http://via.placeholder.com/690x580">
        <img src="http://via.placeholder.com/280x280" />
      </a>
      <a class="image-tile col-xl-3 col-lg-3 col-md-3 col-md-4 col-6" href="http://via.placeholder.com/690x580">
        <img src="http://via.placeholder.com/280x280" />
      </a>
      <a class="image-tile col-xl-3 col-lg-3 col-md-3 col-md-4 col-6" href="http://via.placeholder.com/690x580">
        <img src="http://via.placeholder.com/280x280" />
      </a>
    </div>
    
    <script>
    $("#lightgallery").lightGallery();
    </script>
                                    </textarea>
                        </div>
                        <!-- Tabs Ends -->
                        <!-- Tabs Starts -->
                        <div data-pws-tab="owl-carousel" data-pws-tab-name="Owl Carousel">
                          <p>
                            <a href="https://owlcarousel2.github.io/OwlCarousel2/">Owl Carousel</a> is a touch enabled jQuery plugin that lets you create a beautiful responsive carousel slider. </p>
                          <h5 class="mt-5 mb-4">Usage</h5>
                          <p> To use Owl Carousel in your application, include the following files in &lt;head&gt;. </p>
                          <textarea class="multiple-codes">
    <link rel="stylesheet" href="path-to/node_modules/owl-carousel-2/assets/owl.carousel.min.css" />
                                      </textarea>
                          <p> Add the following script files in &lt;body&gt;. </p>
                          <textarea class="multiple-codes">
    <script src="path-to/node_modules/owl-carousel-2/owl.carousel.min.js"></script>
                                      </textarea>
                          <p> To create a carousel, add the following code: </p>
                          <textarea class="multiple-codes">
    <div class="owl-carousel owl-theme nonloop">
      <div class="item"><h4>1</h4></div>
      <div class="item"><h4>2</h4></div>
      <div class="item"><h4>3</h4></div>
      <div class="item"><h4>4</h4></div>
      <div class="item"><h4>5</h4></div>
      <div class="item"><h4>6</h4></div>
      <div class="item"><h4>7</h4></div>
      <div class="item"><h4>8</h4></div>
      <div class="item"><h4>9</h4></div>
      <div class="item"><h4>10</h4></div>
      <div class="item"><h4>11</h4></div>
      <div class="item"><h4>12</h4></div>
    </div>
    
    <script>
    $('.owl-carousel').owlCarousel();
    </script></textarea>
                        </div>
                        <!-- Tabs Ends -->
                      </div>
                      <!-- demo-tabs container ends -->
                      <!--Tables starts-->
                      <hr class="hr" id="tables">
                      <h4 class="my-4">Tables</h4>
                      <div class="demo-tabs">
                        <!-- Basic table starts -->
                        <div data-pws-tab="basic-table" data-pws-tab-name="Basic table">
                          <p> To create a basic Twitter Bootstrap table, add the following code. </p>
                          <textarea class="multiple-codes">
    <table class="table">
      <thead>
      <tr class="">
        <th>#</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Username</th>
      </tr>
      </thead>
      <tbody>
        <tr>
          <td scope="row">1</td>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <td scope="row">2</td>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <td scope="row">3</td>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
    </textarea>
                        </div>
                        <!-- Basic table Ends -->
                        <!-- bootstrap-table Starts -->
                        <div data-pws-tab="bootstrap-table" data-pws-tab-name="Bootstrap table">
                          <p>
                            <a href="http://bootstrap-table.wenzhixin.net.cn/">Bootstrap-table</a> is an extended Bootstrap table with radio, checkbox, sort, pagination, and other added features. </p>
                          <h5 class="mt-5 mb-4">Usage</h5>
                          <p> To use Bootstrap-table in your application, include the following files in &lt;head&gt;. </p>
                          <textarea class="multiple-codes">
    <link rel="stylesheet" href="path-to/node_modules/bootstrap-table/dist/bootstrap-table.min.css" /></textarea>
                          <p> Add the following script files in &lt;body&gt;. </p>
                          <textarea class="multiple-codes">
    <script src="path-to/node_modules/bootstrap-table/dist/bootstrap-table.min.js"></script></textarea>
                          <p> Activate Bootstrap table without writing JavaScript, set data-toggle="table" on a normal table. </p>
                          <textarea class="multiple-codes">
    <table data-toggle="table">
      <thead>
      <tr>
        <th>Item ID</th>
        <th>Item Name</th>
        <th>Item Price</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>1</td>
        <td>Item 1</td>
        <td>$1</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Item 2</td>
        <td>$2</td>
      </tr>
      </tbody>
    </table>
    </textarea>
                        </div>
                        <!-- Bootstrap-table Ends -->
                        <!-- Js-grid Starts -->
                        <div data-pws-tab="js-grid" data-pws-tab-name="Js-grid">
                          <p>
                            <a href="http://js-grid.com/">Js-grid</a> creates simple responsive chartsis a lightweight client-side data grid control based on jQuery. </p>
                          <h5 class="mt-5 mb-4">Usage</h5>
                          <p> To use Js-grid in your application, include the following files in &lt;head&gt;. </p>
                          <textarea class="multiple-codes">
    <link rel="stylesheet" href="path-to/node_modules/jsgrid/dist/jsgrid.min.css" />
    <link rel="stylesheet" href="path-to/node_modules/jsgrid/dist/jsgrid-theme.min.css" /></textarea>
                          <p> Add the following script files in &lt;body&gt;. </p>
                          <textarea class="multiple-codes">
    <script src="path-to/node_modules/jsgrid/dist/jsgrid.min.js"></script></textarea>
                          <p> To create a basic table using Js-grid, add the following code: </p>
                          <textarea class="multiple-codes">
    <div id="js-grid"></div>
    <script>
    $("#js-grid").jsGrid({
      height: "500px",
      width: "100%",
      filtering: true,
      editing: true,
      inserting: true,
      sorting: true,
      paging: true,
      autoload: true,
      pageSize: 15,
      pageButtonCount: 5,
      deleteConfirm: "Do you really want to delete the client?",
      controller: db,
      fields: [{
        name: "Name",
        type: "text",
        width: 150
      },
      {
        name: "Age",
        type: "number",
        width: 50
      },
      {
        name: "Address",
        type: "text",
        width: 200
      },
      {
        name: "Country",
        type: "select",
        items: db.countries,
        valueField: "Id",
        textField: "Name"
      },
      {
        name: "Married",
        type: "checkbox",
        title: "Is Married",
        sorting: false
      },
      {
        type: "control"
      }]
    });
    </script></textarea>
                        </div>
                        <!-- Js-grid Ends -->
                        <!-- Table-sorter Starts -->
                        <div data-pws-tab="SortableTable" data-pws-tab-name="Sortable table">
                          <p>
                            <a href="http://tablesorter.com/docs/">Tablesorter</a> is a jQuery plugin for turning a standard HTML table with THEAD and TBODY tags into a sortable table without page refreshes. </p>
                          <h5 class="mt-5 mb-4">Usage</h5>
                          <p> To use Table in your application, include the following files in &lt;head&gt;. </p>
                          <textarea class="multiple-codes">
    <link rel="stylesheet" href="path-to/node_modules/bootstrap-table/dist/bootstrap-table.min.css">
                                        </textarea>
                          <p> Add the following script files in &lt;body&gt;. </p>
                          <textarea class="multiple-codes">
    <script src="path-to/js/jq.tablesort.js"></script>
                                        </textarea>
                          <p> To create a Table, add the following code: </p>
                          <textarea class="multiple-codes">

    <div class="table-sorter-wrapper">
      <table id="myTable" class="table table-striped table-hover">
        <thead>
          <tr>
            <th class="sortStyle">Last Name</th>
            <th class="sortStyle">First Name</th>
            <th class="sortStyle">Due</th>
            <th class="sortStyle">Web Site</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Smith</td>
            <td>John</td>
            <td>$50.00</td>
            <td>http://www.jsmith.com</td>
          </tr>
          <tr>
            <td>Bach</td>
            <td>Frank</td>
            <td>$50.00</td>
            <td>http://www.frank.com</td>
          </tr>
          <tr>
            <td>Doe</td>
            <td>Jason</td>
            <td>$100.00</td>
            <td>http://www.jdoe.com</td>
          </tr>
          <tr>
            <td>Conway</td>
            <td>Tim</td>
            <td>$50.00</td>
            <td>http://www.timconway.com</td>
          </tr>
        </tbody>
      </table>
    </div>
    
    <script>
    $('#myTable').tablesort();
    </script>
    
                                        </textarea>
                        </div>
                        <!-- Table-sorter Ends -->
                      </div>
                      <!--Tables ends-->
                      <!-- New Docs Starts Here -->
                      <!-- New Docs Ends Here -->
                      <hr class="hr" id="charts">
                      <h4 class="my-4">Charts</h4>
                      <div class="demo-tabs">
                        <div data-pws-tab="anynameyouwant1" data-pws-tab-name="Chart.js">
                          <p>
                            <a href="http://www.chartjs.org/">Chart.js</a> is a simple yet flexible JavaScript charting for designers & developers. </p>
                          <h5 class="mt-5 mb-4">Usage</h5>
                          <p> To use Chart.js in your application, include the following files in &lt;head&gt;. </p>
                          <textarea class="multiple-codes">
    <link rel="stylesheet" href="path-to/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" /></textarea>
                          <p> and the following script files in &lt;body&gt;. </p>
                          <textarea class="multiple-codes">
    <script src="path-to/node_modules/chart.js/dist/Chart.min.js"></script></textarea>
                          <p> To create a simple chart, add the following code: </p>
                          <textarea class="multiple-codes">
    <canvas id="lineChart" style="height:250px"></canvas>
    
    <script>
      var data = {
          labels: ["Red", "Blue", "Yellow", "Green", "Corona", "Orange"],
          datasets: [{
              label: '# of Votes',
              data: [12, 19, 3, 5, 2, 3],
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 102, 255, 0.2)',
                  'rgba(255, 159, 64, 0.2)'
              ],
              borderColor: [
                  'rgba(255,99,132,1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 1
          }]
      };
      var options = {
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero:true
                  }
              }]
          },
          legend: {
              display: false
          },
          elements: {
            point: {
                radius: 0
            }
          }
    
      };
      if($("#lineChart").length) {
        var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
        var lineChart = new Chart(lineChartCanvas, {
          type: 'line',
          data: data,
          options: options
        });
      }
    </script></textarea>
                        </div>
                        <div data-pws-tab="Float-Chart" data-pws-tab-name="Float.js">
                          <p>
                            <a href="http://www.flotcharts.org/">Float.js</a> is a pure JavaScript plotting library for jQuery, with a focus on simple usage, attractive looks and interactive features. </p>
                          <h5 class="mt-5 mb-4">Usage</h5>
                          <p> Add following script files in &lt;body&gt;. </p>
                          <textarea class="multiple-codes">
    <script src="path-to/node_modules/flot/jquery.flot.js"></script>
    <script src="path-to/node_modules/flot/jquery.flot.resize.js"></script></textarea>
                          <p> To create a simple chart, add the following code: </p>
                          <textarea class="multiple-codes">
    <div class="float-chart-container">
      <div id="placeholder-basic" class="float-chart"></div>
    </div>
    
    <script>
    $(function() {
      var d1 = [];
      for (var i = 0; i < Math.PI * 2; i += 0.25) {
        d1.push([i, Math.sin(i)]);
      }
      var d2 = [];
      for (var i = 0; i < Math.PI * 2; i += 0.25) {
        d2.push([i, Math.cos(i)]);
      }
      var d3 = [];
      for (var i = 0; i < Math.PI * 2; i += 0.1) {
        d3.push([i, Math.tan(i)]);
      }
      $.plot("#placeholder-basic-option", [{
          label: "sin(x)",
          data: d1
        },
        {
          label: "cos(x)",
          data: d2
        },
        {
          label: "tan(x)",
          data: d3
        }
      ], {
        series: {
          lines: {
            show: true
          },
          points: {
            show: true
          }
        },
        xaxis: {
          ticks: [
            0, [Math.PI / 2, "\u03c0/2"],
            [Math.PI, "\u03c0"],
            [Math.PI * 3 / 2, "3\u03c0/2"],
            [Math.PI * 2, "2\u03c0"]
          ]
        },
        yaxis: {
          ticks: 10,
          min: -2,
          max: 2,
          tickDecimals: 3
        },
        grid: {
          backgroundColor: {
            colors: ["#fff", "#eee"]
          },
          borderWidth: {
            top: 1,
            right: 1,
            bottom: 2,
            left: 2
          }
        }
      });
    });
    </script></textarea>
                        </div>
                        <div data-pws-tab="google-chart" data-pws-tab-name="Google">
                          <p>
                            <a href="https://developers.google.com/chart/">Google</a> chart tools are powerful, simple to use, and free. Try out our rich gallery of interactive charts and data tools. </p>
                          <h5 class="mt-5 mb-4">Usage</h5>
                          <p> Add the following script files in &lt;body&gt;. </p>
                          <textarea class="multiple-codes">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script></textarea>
                          <p> Basic chart structure: </p>
                          <textarea class="multiple-codes">
    <div class="google-chart-container">
      <div id="Bar-chart" class="google-charts"></div>
    </div>
    
    <script>
    if($("#barChart").length) {
      var barChartCanvas = $("#barChart").get(0).getContext("2d");
      // This will get the first returned node in the jQuery collection.
      var barChart = new Chart(barChartCanvas, {
        type: 'bar',
        data: data,
        options: options
      });
    }
    </script></textarea>
                        </div>
                        <!-- Tabs Starts -->
                        <div data-pws-tab="c3" data-pws-tab-name="C3.js">
                          <p>
                            <a href="http://c3js.org/">C3.js</a> is a D3-based reusable chart library. </p>
                          <h6>Usage</h6>
                          <p> To use C3 charts in your application, include the following files in &lt;head&gt;. </p>
                          <textarea class="multiple-codes">
    <link rel="stylesheet" href="path-to/node_modules/c3/c3.min.css" /></textarea>
                          <p> and the following script files in &lt;body&gt;. </p>
                          <textarea class="multiple-codes">
    <script src="path-to/node_modules/d3/d3.min.js"></script>
    <script src="path-to/node_modules/c3/c3.min.js"></script></textarea>
                          <p> To create a simple chart, add the following code: </p>
                          <textarea class="multiple-codes">
    <div id="c3-line-chart"></div>
    
    <script>
      var c3LineChart = c3.generate({
        bindto: '#c3-line-chart',
        data: {
          columns: [
              ['data1', 30, 200, 100, 400, 150, 250],
              ['data2', 50, 20, 10, 40, 15, 25]
          ]
        }
      });
    </script></textarea>
                        </div>
                        <!-- Tabs Ends -->
                        <!-- Chartist Starts -->
                        <div data-pws-tab="chartist" data-pws-tab-name="Chartist">
                          <p>
                            <a href="https://gionkunz.github.io/chartist-js/">Chartist</a> creates simple responsive charts. </p>
                          <h5 class="mt-5 mb-4">Usage</h5>
                          <p> To use Chartist in your application, include the following files in &lt;head&gt;. </p>
                          <textarea class="multiple-codes">
    <link rel="stylesheet" href="path-to/node_modules/chartist/dist/chartist.min.css" /></textarea>
                          <p> Add the following script files in &lt;body&gt;. </p>
                          <textarea class="multiple-codes">
    <script src="path-to/node_modules/chartist/dist/chartist.min.js"></script></textarea>
                          <p> To create a simple line chart using Chartist, add the following code: </p>
                          <textarea class="multiple-codes">
    <div class="ct-chart ct-perfect-fourth" id="ct-chart-line"></div>
    
    <script>
    new Chartist.Line('#ct-chart-line', {
        labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
        series: [
            [12, 9, 7, 8, 5],
            [2, 1, 3.5, 7, 3],
            [1, 3, 4, 5, 6]
        ]
    }, {
        fullWidth: true,
        chartPadding: {
            right: 40
        }
    });
    </script></textarea>
                        </div>
                        <!-- Chartist Ends -->
                        <!-- Morris Starts -->
                        <div data-pws-tab="morris" data-pws-tab-name="Morris">
                          <p>
                            <a href="http://morrisjs.github.io/morris.js/">Morris</a> creates pretty time-series line graphs. </p>
                          <h5 class="mt-5 mb-4">Usage</h5>
                          <p> To use Morris in your application, include the following files in &lt;head&gt;. </p>
                          <textarea class="multiple-codes">
    <link rel="stylesheet" href="path-to/node_modules/morris.js/morris.css" /></textarea>
                          <p> Add the following script files in &lt;body&gt;. </p>
                          <textarea class="multiple-codes">
    <script src="path-to/node_modules/raphael/raphael.min.js"></script>
    <script src="path-to/node_modules/morris.js/morris.min.js"></script></textarea>
                          <p> To create a simple line chart using Morris, add the following code: </p>
                          <textarea class="multiple-codes">
    <div id="morris-line-example"></div>
    
    <script>
    Morris.Line({
        element: 'morris-line-example',
        data: [{
                y: '2006',
                a: 100,
                b: 90
            },
            {
                y: '2007',
                a: 75,
                b: 65
            },
            {
                y: '2008',
                a: 50,
                b: 40
            },
            {
                y: '2009',
                a: 75,
                b: 65
            },
            {
                y: '2010',
                a: 50,
                b: 40
            },
            {
                y: '2011',
                a: 75,
                b: 65
            },
            {
                y: '2012',
                a: 100,
                b: 90
            }
        ],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B']
    });
    </script></textarea>
                        </div>
                        <!-- Morris Ends -->
                        <!-- Sparkline Starts -->
                        <div data-pws-tab="sparkline" data-pws-tab-name="Sparkline">
                          <p>
                            <a href="https://omnipotent.net/jquery.sparkline/#s-about">Jquery Sparkline</a> generates sparklines (small inline charts) directly in the browser using data supplied either inline in the HTML, or via Javascript. </p>
                          <h5 class="mt-5 mb-4">Usage</h5>
                          <p> To use Sparkline in your application, add the following script files in &lt;body&gt;. </p>
                          <textarea class="multiple-codes">
    <script src="path-to/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script></textarea>
                          <p> To create a line chart using Sparkline, add the following code: </p>
                          <textarea class="multiple-codes">
    <div id="sparkline-line-chart"></div>
    
    <script>
    $("#sparkline-line-chart").sparkline([5,6,7,9,9,5,3,2,2,4,6,7], {
      type: 'line',
      width: '100%',
      height: '100%'
    });
    </script></textarea>
                        </div>
                        <!-- Sparkline Ends -->
                        <!-- Tabs Starts -->
                        <div data-pws-tab="JustGage" data-pws-tab-name="Just Gage">
                          <p>
                            <a href="http://justgage.com/">Just Gage</a> is a handy JavaScript plugin for generating and animating nice & clean gauges. </p>
                          <h5 class="mt-5 mb-4">Usage</h5>
                          <p> Add the following script files in &lt;body&gt;. </p>
                          <textarea class="multiple-codes">
      <script src="path-to/node_modules/justgage/justgage.js"></script>
                                        </textarea>
                          <p> To create a gage, add the following code: </p>
                          <textarea class="multiple-codes">
      <div id="justgage" class="gauge"></div>
    
      <script>
      window.onload = function() {
        var g1 = new JustGage({
          id: "g1",
          value: getRandomInt(0, 100),
          min: 0,
          max: 100,
          title: "Big Fella",
          label: "pounds"
        });
      };
      </script>
                                        </textarea>
                        </div>
                        <!-- Tabs Ends -->
                      </div>
                      <!-- New Docs Starts Here -->
                      <hr class="hr" id="maps">
                      <h4 class="my-4">Maps</h4>
                      <div class="demo-tabs">
                        <div data-pws-tab="Vector-map" data-pws-tab-name="Vector Map">
                          <p>
                            <a href="http://jvectormap.com/">JvectorMap</a> uses only native browser technologies like JavaScript, CSS, HTML, SVG or VML. </p>
                          <h5 class="mt-5 mb-4">Usage</h5>
                          <p> To use Vector map in your application, include the following files in &lt;head&gt;. </p>
                          <textarea class="multiple-codes">
    <link rel="stylesheet" href="path-to/node_modules/jqvmap/dist/jqvmap.min.css" /></textarea>
                          <p> Add the following script files in &lt;body&gt;. </p>
                          <textarea class="multiple-codes">
    <script src="path-to/node_modules/jqvmap/dist/jquery.vmap.min.js"></script></textarea>
                          <p> To create a simple map, add the following code: </p>
                          <textarea class="multiple-codes">
    <div id="vmap" class="vector-map" style="width: 100%; height:500px"></div>
    
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }
    
      $(function() {
        jQuery('#vmap').vectorMap({ map: 'world_en' });
      });
    </script></textarea>
                        </div>
                        <!-- Tabs Ends -->
                        <!-- Tabs Starts -->
                        <div data-pws-tab="Mapeal" data-pws-tab-name="Mapeal">
                          <p>
                            <a href="https://www.vincentbroute.fr/mapael/">Mapeal Map</a> Ease the build of pretty data visualizations on dynamic vector maps. </p>
                          <p> Add the following script files in &lt;body&gt;. </p>
                          <textarea class="multiple-codes">
    <script src="path-to/node_modules/raphael/raphael.min.js"></script>
    <script src="path-to/node_modules/jquery-mapael/js/jquery.mapael.min.js"></script></textarea>
                          <p> To create a simple map, add the following code: </p>
                          <textarea class="multiple-codes">
    <div class="container">
        <div class="map">Alternative content</div>
    </div>
    
    <script>
      $(".container").mapael({
        map: {
          name: "world_countries"
        }
      });
    </script></textarea>
                        </div>
                        <!-- Tabs Ends -->
                      </div>
                      <!-- demo-tabs container ends -->
                      <!-- New Docs Ends Here -->
                      <!--Forms starts-->
                      <hr class="hr" id="forms">
                      <h4 class="my-4">Forms</h4>
                      <div class="demo-tabs">
                        <!-- Basic elements Starts -->
                        <div data-pws-tab="basic-elements" data-pws-tab-name="Basic elements">
                          <p> The basic form elements can be added to your application as below: </p>
                          <textarea class="multiple-codes">
    <form class="forms-sample">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted text-success"><span class="fa fa-info mt-1"></span>&nbsp; We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control p-input" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleTextarea">Example textarea</label>
            <textarea class="form-control p-input" id="exampleTextarea" rows="3">&lt;/textarea&gt;
        </div>
        <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
            <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
        </div>
        <fieldset class="form-group">
            <legend class="mb-4 mt-5">Radio buttons</legend>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                  Option one is this and that&mdash;be sure to include why it's great
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
                  Option two can be something else and selecting it will deselect option one
                </label>
            </div>
            <div class="form-check disabled">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                  Option three is disabled
                </label>
            </div>
        </fieldset>
        <div class="form-check col-12">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
              Check me out
            </label>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form></textarea>
                        </div>
                        <!-- Basic elements Ends -->
                        <!-- Form validation Starts -->
                        <div data-pws-tab="validation" data-pws-tab-name="Validation">
                          <p> We are using <a href="https://jqueryvalidation.org/">Jquery validation</a> for simple clientside form validation. </p>
                          <h5 class="mt-5 mb-4">Usage</h5>
                          <p> To use jquery validation in your application, include the following script files in &lt;body&gt;. </p>
                          <textarea class="multiple-codes">
    <script src="path-to/node_modules/jquery-validation/dist/jquery.validate.min.js"></script></textarea>
                          <p> The following code shows validation of a simple form: </p>
                          <textarea class="multiple-codes">
    <form class="cmxform" id="commentForm" method="get" action="">
      <fieldset>
        <div class="form-group">
          <label for="cname">Name (required, at least 2 characters)</label>
          <input id="cname" class="form-control" name="name" minlength="2" type="text" required>
        </div>
        <div class="form-group">
          <label for="cemail">E-Mail (required)</label>
          <input id="cemail" class="form-control" type="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="curl">URL (optional)</label>
          <input id="curl" class="form-control" type="url" name="url">
        </div>
        <div class="form-group">
          <label for="ccomment">Your comment (required)</label>
          <textarea id="ccomment" class="form-control" name="comment" required>&lt;/textarea&gt;
        </div>
        <input class="btn btn-primary" type="submit" value="Submit">
      </fieldset>
    </form>
    
    <script>
      $.validator.setDefaults({
          submitHandler: function() {
              alert("submitted!");
          }
      });
      $(function() {
          // validate the comment form when it is submitted
          $("#commentForm").validate({
            errorPlacement: function(label, element) {
              label.addClass('text-danger');
              label.insertAfter(element);
            },
            highlight: function(element, errorClass) {
              $(element).parent().addClass('has-danger')
              $(element).addClass('form-control-danger')
            }
          });
      });
    </script></textarea>
                        </div>
                        <!-- Form validation Ends -->
                        <!-- Wizard Starts -->
                        <div data-pws-tab="Wizard" data-pws-tab-name="Wizard">
                          <p> We are using <a href="http://www.jquery-steps.com/">Jquery steps</a> in our template to create form addons. It is an all-in-one wizard plugin that is extremely flexible, compact and feature-rich. </p>
                          <h5 class="mt-5 mb-4">Usage</h5>
                          <p> To use jquery.steps in your application, include the following files &lt;body&gt;. </p>
                          <textarea class="multiple-codes">
    <script src="path-to/node_modules/jquery-steps/build/jquery.steps.min.js"></script></textarea>
                          <p> The following code generates a simple form wizard. </p>
                          <textarea class="multiple-codes">
    <form id="example-form" action="#">
      <div>
        <h3>Account</h3>
        <section>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Confirm Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm password">
          </div>
        </section>
        <h3>Profile</h3>
        <section>
          <div class="form-group">
            <label for="exampleInputEmail1">First name</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter first name">
          </div>
          <div class="form-group">
            <label>Last name</label>
            <input type="password" class="form-control" placeholder="Last name">
          </div>
          <div class="form-group">
            <label>Profession</label>
            <input type="password" class="form-control" placeholder="Profession">
          </div>
        </section>
        <h3>Comments</h3>
        <section>
          <div class="form-group">
            <label>Comments</label>
            <textarea class="form-control" rows="3">&lt;/textarea&gt;
          </div>
        </section>
        <h3>Finish</h3>
        <section>
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
              I agree terms and conditions
            </label>
          </div>
        </section>
      </div>
    </form>
    
    <script>
      var form = $("#example-form");
      form.children("div").steps({
          headerTag: "h3",
          bodyTag: "section",
          transitionEffect: "slideLeft",
          onFinished: function (event, currentIndex) {
              alert("Submitted!");
          }
      });
    </script></textarea>
                        </div>
                        <!-- Wizard Ends -->
                        <!-- Repeater Starts -->
                        <div data-pws-tab="FormRepeater" data-pws-tab-name="Form Repeater">
                          <p>
                            <a href="http://briandetering.net/repeater">Jquery Repeater</a> is an interface to add and remove a repeatable group of input elements. </p>
                          <h5 class="mt-5 mb-4">Usage</h5>
                          <p> Add the following script files in &lt;body&gt;. </p>
                          <textarea class="multiple-codes">
    <script src="path-to/node_modules/jquery.repeater/jquery.repeater.min.js"></script></textarea>
                          <p> To create a Repeater, add the following code: </p>
                          <textarea class="multiple-codes">
    <form class="form-inline repeater">
      <div data-repeater-list="group-a">
          <div data-repeater-item class="d-flex mb-2">
              <label class="sr-only" for="inlineFormInput">Name</label>
              <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="Jane Doe">
              <label class="sr-only" for="inlineFormInputGroup">Username</label>
              <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                  <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                  </div>
                  <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
              <input data-repeater-delete type="button" class="btn btn-danger ml-2" value="Delete" />
          </div>
      </div>
      <input data-repeater-create type="button" class="btn btn-success ml-2 mb-2" value="+" />
    </form>
    
    <script>
      $(document).ready(function() {
        $('.repeater').repeater()
      });
    </script></textarea>
                        </div>
                        <!-- Repeater Ends -->
                      </div>
                      <!--Forms ends-->
                      <!--Additional form elements starts-->
                      <hr class="hr" id="additional-form">
                      <h4 class="my-4">Additional form elements</h4>
                      <div class="demo-tabs">
                        <!-- Tags Starts -->
                        <div data-pws-tab="tags" data-pws-tab-name="Tags">
                          <p>
                            <a href="http://xoxco.com/projects/code/tagsinput/">jQuery-Tags-Input</a> magically convert a simple text input into a cool tag list with this jQuery plugin. </p>
                          <h5 class="mt-5 mb-4">Usage</h5>
                          <p> To use jQuery-Tags-Input in your application, include the following files in &lt;head&gt;. </p>
                          <textarea class="multiple-codes">
    <link rel="stylesheet" href="path-to/node_modules/jquery-tags-input/dist/jquery.tagsinput.min.css" /></textarea>
                          <p> Add the following script files in &lt;body&gt;. </p>
                          <textarea class="multiple-codes">
    <script src="path-to/node_modules/jquery-tags-input/dist/jquery.tagsinput.min.js"></script></textarea>
                          <p> To convert an input to tag using jQuery-Tags-Input, add the following code: </p>
                          <textarea class="multiple-codes">
    <input name="tags" id="tags" value="London,Canada,Australia,Mexico" />
    
    <script>
      $('#tags').tagsInput({
          'width': '100%',
          'height': '75%',
          'interactive': true,
          'defaultText': 'Add More',
          'removeWithBackspace': true,
          'minChars': 0,
          'maxChars': 20, // if not provided there is no limit
          'placeholderColor': '#666666'
      });
    </script></textarea>
                        </div>
                        <!-- Tags Ends -->
                        <!-- Rating Starts -->
                        <div data-pws-tab="BarRating" data-pws-tab-name="Rating">
                          <p>
                            <a href="http://antenna.io/demo/jquery-bar-rating/examples/">jQuery Bar Rating</a> Plugin works by transforming a standard select field into a rating widget. </p>
                          <h5 class="mt-5 mb-4">Usage</h5>
                          <p> To use Corona rating in your application, include the following files in &lt;head&gt;. </p>
                          <textarea class="multiple-codes">
    <link rel="stylesheet" href="path-to/node_modules/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="path-to/node_modules/jquery-bar-rating/dist/themes/fontawesome-stars.css"></textarea>
                          <p> Add the following script files in &lt;body&gt;. </p>
                          <textarea class="multiple-codes">
    <script src="path-to/node_modules/jquery-bar-rating/dist/jquery.barrating.min.js"></script></textarea>
                          <p> To create a simple rating, add the following code: </p>
                          <textarea class="multiple-codes">
    <select id="example-fontawesome" name="rating" autocomplete="off">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
    
    <script>
      $('#example-fontawesome').barrating({
        theme: 'fontawesome-stars',
        showSelectedRating: false
      });
    </script></textarea>
                        </div>
                        <!-- Rating Ends -->
                        <!-- Tabs Starts -->
                        <div data-pws-tab="BTMaxLength" data-pws-tab-name="Bootstrap Max-Length">
                          <p>
                            <a href="http://mimo84.github.io/bootstrap-maxlength/">Bootstrap MaxLength</a> uses a Twitter Bootstrap label to show a visual feedback to the user about the maximum length of the field where the user is inserting text. Uses the HTML5 attribute "maxlength" to work. </p>
                          <h5 class="mt-5 mb-4">Usage</h5>
                          <p> Add the following script files in &lt;body&gt;. </p>
                          <textarea class="multiple-codes">
    <script src="path-to/node_modules/bootstrap-maxlength/bootstrap-maxlength.min.js"></script></textarea>
                          <p> To create a Maxlength input, add the following code: </p>
                          <textarea class="multiple-codes">
    <input class="form-control" maxlength="25" name="defaultconfig" id="defaultconfig" type="text">
    
    <script>
      $('#defaultconfig').maxlength();
    </script></textarea>
                        </div>
                        <!-- Tabs Ends -->
                        <!-- Form mask Starts -->
                        <div data-pws-tab="form-mask" data-pws-tab-name="Input Mask">
                          <p>
                            <a href="http://robinherbots.github.io/Inputmask/">Input-mask</a> helps the user with the input by ensuring a predefined format. This can be useful for dates, numerics, phone numbers etc. </p>
                          <h5 class="mt-5 mb-4">Usage</h5>
                          <p> To use Inputmask in your application, include the following files in &lt;body&gt;. </p>
                          <textarea class="multiple-codes">
    <script src="path-to/node_modules/inputmask/dist/jquery.inputmask.bundle.js"></script>
    <script src="path-to/node_modules/inputmask/dist/inputmask/phone-codes/phone.js"></script>
    <script src="path-to/node_modules/inputmask/dist/inputmask/phone-codes/phone-be.js"></script>
    <script src="path-to/node_modules/inputmask/dist/inputmask/phone-codes/phone-ru.js"></script>
    <script src="path-to/node_modules/inputmask/dist/inputmask/bindings/inputmask.binding.js"></script></textarea>
                          <p> The below code shows an example of input mask for date. </p>
                          <textarea class="multiple-codes">
    <input class="form-control" data-inputmask="'alias': 'date'" /></textarea>
                        </div>
                        <!-- Form mask Ends -->
                        <!-- Typeahead Starts -->
                        <div data-pws-tab="typeahead" data-pws-tab-name="Typeahead">
                          <p>
                            <a href="https://twitter.github.io/typeahead.js/">Typeahead.js</a> is a flexible JavaScript library that provides a strong foundation for building robust typeaheads. </p>
                          <h5 class="mt-5 mb-4">Usage</h5>
                          <p> To use Typeahead.js in your application, include the following files in &lt;body&gt;. </p>
                          <textarea class="multiple-codes">
    <script src="path-to/node_modules/typeahead.js/dist/typeahead.bundle.min.js"></script></textarea>
                          <p> A sample typeahead can be generated as below: </p>
                          <textarea class="multiple-codes">
    <div id="typeahead sample">
        <input class="typeahead" type="text" placeholder="States of USA">
    </div>
    
    <script>
      //Define substring matcher function
      var substringMatcher = function (strs) {
          return function findMatches(q, cb) {
              var matches, substringRegex;
    
              // an array that will be populated with substring matches
              matches = [];
    
              // regex used to determine if a string contains the substring `q`
              substrRegex = new RegExp(q, 'i');
    
              // iterate through the pool of strings and for any string that
              // contains the substring `q`, add it to the `matches` array
              $.each(strs, function (i, str) {
                  if (substrRegex.test(str)) {
                      matches.push(str);
                  }
              });
    
              cb(matches);
          };
      };
    
      //dataset
      var states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California',
          'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii',
          'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana',
          'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota',
          'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire',
          'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota',
          'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island',
          'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont',
          'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'
      ];
    
      //Initialisation
      $('#typeahead-sample .typeahead').typeahead({
          hint: true,
          highlight: true,
          minLength: 1
      }, {
          name: 'states',
          source: substringMatcher(states)
      });
    </script></textarea>
                        </div>
                        <!-- Typeahead Ends -->
                      </div>
                      <!--Additional form elements ends-->
                      <!--Icons starts-->
                      <hr class="hr" id="icons">
                      <h4 class="my-4">Icons</h4>
                      <div class="demo-tabs">
                        <!-- MDI icon Starts -->
                        <div data-pws-tab="mdi-icon" data-pws-tab-name="Material Icons">
                          <p>
                            <a href="https://materialdesignicons.com/">Material Design Icons</a> growing icon collection allows designers and developers targeting various platforms to download icons in the format, color and size they need for any project. </p>
                          <h5 class="mt-5 mb-4">Usage</h5>
                          <p> To use Material Design Icons in your application, include the following files in &lt;head&gt;. </p>
                          <textarea class="multiple-codes">
    <link rel="stylesheet" href="path-to/node_modules/mdi/css/materialdesignicons.min.css"/></textarea>
                          <p> To generate an icon, add the following code: </p>
                          <textarea class="multiple-codes">
    <i class="mdi mdi-bell"></i>
                                                </textarea>
                        </div>
                        <!-- MDI icon Ends -->
                        <!-- Font awesome starts -->
                        <div data-pws-tab="font-awesome" data-pws-tab-name="Font Awesome">
                          <p>
                            <a href="http://fontawesome.io/">Font Awesome</a> gives you scalable vector icons that can instantly be customized. </p>
                          <h5 class="mt-5 mb-4">Usage</h5>
                          <p> To use Font Awesome in your application, include the following files in &lt;head&gt;. </p>
                          <textarea class="multiple-codes">
    <link rel="stylesheet" href="path-to/node_modules/font-awesome/css/font-awesome.min.css" /></textarea>
                          <p> To create an address-book icon, add the following code: </p>
                          <textarea class="multiple-codes">
    <i class="fa fa-address-book"></textarea>
                        </div>
                        <!-- Font awesome Ends -->
                        <!-- Themify Starts -->
                        <div data-pws-tab="themify" data-pws-tab-name="Themify Icons">
                          <p>
                            <a href="https://themify.me/themify-icons">Themify Icons</a> Themify Icons is a complete set of icons for use in web design and apps. </p>
                          <h5 class="mt-5 mb-4">Usage</h5>
                          <p> To use themify icons in your application, include the following files in &lt;head&gt;. </p>
                          <textarea class="multiple-codes">
    <link rel="stylesheet" href="path-to/node_modules/ti-icons/css/themify-icons.css" /></textarea>
                          <p> To generate an icon, add the following code: </p>
                          <textarea class="multiple-codes">
    <i class="ti-arrow-up"></i></textarea>
                        </div>
                        <!-- Themify Ends -->
                        <!-- Simple line icon Starts -->
                        <div data-pws-tab="simple-line-icon" data-pws-tab-name="Simple Line Icons">
                          <p>
                            <a href="http://simplelineicons.com/">Simple Line Icons</a> is a set of simple and minimal line icons. </p>
                          <h5 class="mt-5 mb-4">Usage</h5>
                          <p> To use Simple Line Icons in your application, include the following files in &lt;head&gt;. </p>
                          <textarea class="multiple-codes">
    <link rel="stylesheet" href="path-to/node_modules/simple-line-icons/css/simple-line-icons.css" /></textarea>
                          <p> To generate an icon, add the following code: </p>
                          <textarea class="multiple-codes">
    <i class="icon-user"></i></textarea>
                        </div>
                        <!-- Simple line icon Ends -->
                        <!-- Flag icon Starts -->
                        <div data-pws-tab="flag-icon" data-pws-tab-name="Flag Icons">
                          <p>
                            <a href="http://flag-icon-css.lip.is/">Flag Icons</a> is a collection of all country flags in SVG — plus the CSS for easier integration. </p>
                          <h5 class="mt-5 mb-4">Usage</h5>
                          <p> To use Simple Line Icons in your application, include the following files in &lt;head&gt;. </p>
                          <textarea class="multiple-codes">
    <link rel="stylesheet" href="path-to/node_modules/flag-icon-css/css/flag-icon.min.css"/></textarea>
                          <p> To generate an icon, add the following code: </p>
                          <textarea class="multiple-codes">
    <i class="flag-icon flag-icon-ad" title="ad" id="ad"></i></textarea>
                        </div>
                        <!-- Simple line icon Ends -->
                      </div>
                      <!--icons ends-->
                      <hr class="hr" id="file-upload">
                      <h4 class="my-4">File Upload</h4>
                      <div class="demo-tabs">
                        <!-- Tabs Starts -->
                        <div data-pws-tab="Dropify" data-pws-tab-name="Dropify">
                          <p>
                            <a href="http://jeremyfagis.github.io/dropify/">Dropify</a> is a simple drag n drop file upload. </p>
                          <h5 class="mt-5 mb-4">Usage</h5>
                          <p> To use Dropify in your application, include the following files in &lt;head&gt;. </p>
                          <textarea class="multiple-codes">
    <link rel="stylesheet" href="path-to/node_modules/dropify/dist/css/dropify.min.css">
                                                </textarea>
                          <p> Add the following script files in &lt;body&gt;. </p>
                          <textarea class="multiple-codes">
    <script src="path-to/node_modules/dropify/dist/js/dropify.min.js"></script>
                                                </textarea>
                          <p> To create a Dropify file upload, add the following code: </p>
                          <textarea class="multiple-codes">
      <input type="file" class="dropify"/>
    
      <script>
        $('.dropify').dropify();
      </script></textarea>
                        </div>
                        <!-- Tabs Ends -->
                        <!-- Tabs Starts -->
                        <div data-pws-tab="Dropzone" data-pws-tab-name="Dropzone">
                          <p>
                            <a href="http://www.dropzonejs.com/">Dropzone</a> is an open source library that provides drag’n’drop file uploads with image previews. </p>
                          <h5 class="mt-5 mb-4">Usage</h5>
                          <p> Add the following script files in &lt;body&gt;. </p>
                          <textarea class="multiple-codes">
    <script src="path-to/node_modules/dropzone/dist/dropzone.js"></script></textarea>
                          <p> To create a Dropzone file upload,add the following code: </p>
                          <textarea class="multiple-codes">
    <form action="/file-upload" class="dropzone" id="my-awesome-dropzone"></form>
    
    <script>
      $("#my-awesome-dropzone").dropzone({ url: "/file/post" });
    </script></textarea>
                        </div>
                        <!-- Tabs Ends -->
                        <!-- Tabs Starts -->
                        <div data-pws-tab="jquery-file-upload" data-pws-tab-name="Jquery file upload">
                          <p>
                            <a href="http://hayageek.com/docs/jquery-upload-file.php">jQuery File UPload</a> plugin provides multiple file uploads with progress bar. jQuery File Upload Plugin depends on Ajax Form Plugin, So Github contains source code with and without form plugin. </p>
                          <h5 class="mt-5 mb-4">Usage</h5>
                          <p> To use file upload in your application, include the following files in &lt;head&gt;. </p>
                          <textarea class="multiple-codes">
    <link rel="stylesheet" href="path-to/node_modules/jquery-file-upload/css/uploadfile.css"></textarea>
                          <p> Add the following script files in &lt;body&gt;. </p>
                          <textarea class="multiple-codes">
    <script src="path-to/node_modules/jquery-file-upload/js/jquery.uploadfile.min.js"></script></textarea>
                          <p> To create a Jquery file upload,add the following code: </p>
                          <textarea class="multiple-codes">
    <div class="file-upload-wrapper">
      <div id="fileuploader">Upload</div>
    </div>
    
    <script>
      $("#fileuploader").uploadFile({
        url: "YOUR_FILE_UPLOAD_URL",
        fileName: "myfile"
      });
    </script></textarea>
                        </div>
                        <!-- Tabs Ends -->
                      </div>
                      <!-- demo-tabs container ends -->
                      <!-- New Docs Ends Here -->
                      <!-- New Docs Starts Here -->
                      <hr class="hr" id="form-picker">
                      <h4 class="my-4">Form Picker</h4>
                      <div class="demo-tabs">
                        <!-- Tabs Starts -->
                        <div data-pws-tab="clock-picker" data-pws-tab-name="Clock Picker">
                          <p> We are using <a href="https://tempusdominus.github.io/bootstrap-4/">Tempus Dominus plugin</a> in our template to create beautiful time picker. </p>
                          <h5 class="mt-5 mb-4">Usage</h5>
                          <p> To use clock picker in your application, include the following files in &lt;head&gt;. </p>
                          <textarea class="multiple-codes">
    <link rel="stylesheet" href="path-to/node_modules/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css" /></textarea>
                          <p> Add the following script files in &lt;body&gt;. </p>
                          <textarea class="multiple-codes">
    <script src="path-to/node_modules/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.js"></script></textarea>
                          <p> To create a clock picker, add the following code: </p>
                          <textarea class="multiple-codes">
    <div class="input-group date" id="timepicker-example" data-target-input="nearest">
      <div class="input-group" data-target="#timepicker-example" data-toggle="datetimepicker">
        <input type="text" class="form-control datetimepicker-input" data-target="#timepicker-example"/>
        <div class="input-group-addon input-group-append"><i class="mdi mdi-clock input-group-text"></i></div>
      </div>
    </div>
    
    <script>
      $('#timepicker-example').datetimepicker({
        format: 'LT'
      });
    </script></textarea>
                        </div>
                        <!-- Tabs Ends -->
                        <!-- Tabs Starts -->
                        <div data-pws-tab="date-picker" data-pws-tab-name="Date Picker">
                          <p>
                            <a href="https://bootstrap-datepicker.readthedocs.io/en/latest/">Bootstrap Date Picker</a> provides a flexible datepicker widget in the Bootstrap style. </p>
                          <h5 class="mt-5 mb-4">Usage</h5>
                          <p> To use bootstrap date picker in your application, include the following files in &lt;head&gt;. </p>
                          <textarea class="multiple-codes">
    <link rel="stylesheet" href="path-to/node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" /></textarea>
                          <p> Add the following script files in &lt;body&gt;. </p>
                          <textarea class="multiple-codes">
    <script src="path-to/node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script></textarea>
                          <p> To create a datepicker, add the following code: </p>
                          <textarea class="multiple-codes">
    <div id="datepicker-popup" class="input-group date datepicker">
      <input type="text" class="form-control">
      <span class="input-group-addon input-group-append border-left">
        <span class="mdi mdi-calendar input-group-text"></span>
      </span>
    </div>
    
    <script>
      $('#datepicker-popup').datepicker();
    </script></textarea>
                        </div>
                        <!-- Tabs Ends -->
                        <!-- Tabs Starts -->
                        <div data-pws-tab="color-picker" data-pws-tab-name="Color Picker">
                          <p>
                            <a href="http://www.oss.io/p/amazingSurge/jquery-asColorPicker">AsColor Picker</a> is a jQuery plugin that convent input into color picker. </p>
                          <h5 class="mt-5 mb-4">Usage</h5>
                          <p> To use color picker in your application, include the following files in &lt;head&gt;. </p>
                          <textarea class="multiple-codes">
    <link rel="stylesheet" href="path-to/node_modules/jquery-asColorPicker/dist/css/asColorPicker.min.css" />
                                                </textarea>
                          <p> Add the following script files in &lt;body&gt;. </p>
                          <textarea class="multiple-codes">
    <script src="path-to/node_modules/jquery-asColor/dist/jquery-asColor.min.js"></script>
    <script src="path-to/node_modules/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
    <script src="path-to/node_modules/jquery-asGradient/dist/jquery-asGradient.min.js"></script> //optional
                                                </textarea>
                          <p> To create a color picker, add the following code: </p>
                          <textarea class="multiple-codes">
    <input type='text' class="color-picker" value="#ffe74c" />
    
    <script>
      $('.color-picker').asColorPicker()
    </script></textarea>
                        </div>
                        <!-- Tabs Ends -->
                      </div>
                      <!-- demo-tabs container ends -->
                      <!-- New Docs Ends Here -->
                      <!--Form editors starts-->
                      <hr class="hr" id="editors">
                      <h4 class="my-4">Editors</h4>
                      <div class="demo-tabs">
                        <!-- Tinymce Starts -->
                        <div data-pws-tab="tinymce" data-pws-tab-name="Tinymce">
                          <p>
                            <a href="https://www.tinymce.com/">Tinymce</a> is a full-featured web editing tool. </p>
                          <h5 class="mt-5 mb-4">Usage</h5>
                          <p> To use Tinymce in your application, include the following files in &lt;body&gt;. </p>
                          <textarea class="multiple-codes">
    <script src="path-to/node_modules/tinymce/tinymce.min.js"></script></textarea>
                          <p> To create an editor using tinymce, add the following code: </p>
                          <textarea class="multiple-codes">
    <textarea id='tinyMceExample'>&lt;/textarea&gt;
    
    <script>
      tinymce.init({
          selector: '#tinyMceExample',
          height: 500,
          theme: 'modern',
          plugins: [
              'advlist autolink lists link image charmap print preview hr anchor pagebreak',
              'searchreplace wordcount visualblocks visualchars code fullscreen',
              'insertdatetime media nonbreaking save table contextmenu directionality',
              'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help'
          ],
          toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
          toolbar2: 'print preview media | forecolor backcolor emoticons | codesample help',
          image_advtab: true,
          templates: [{
                  title: 'Test template 1',
                  content: 'Test 1'
              },
              {
                  title: 'Test template 2',
                  content: 'Test 2'
              }
          ],
          content_css: [
              '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
              '//www.tinymce.com/css/codepen.min.css'
          ]
      });
    </script></textarea>
                        </div>
                        <!-- Tinymce Ends -->
                        <!-- X-editable Starts -->
                        <div data-pws-tab="x-editable" data-pws-tab-name="X-editable">
                          <p>
                            <a href="https://vitalets.github.io/x-editable/">X-editable</a> allows you to create editable elements on your page. It can be used with any engine (Bootstrap, jQuery-UI, jQuery only) and includes both popup and inline modes. </p>
                          <h5 class="mt-5 mb-4">Usage</h5>
                          <p> To use x-editable in your application, include the following files in &lt;head&gt;. </p>
                          <textarea class="multiple-codes">
    <link rel="stylesheet" href="path-to/node_modules/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css" /></textarea>
                          <p> Add the following script files in &lt;body&gt;. </p>
                          <textarea class="multiple-codes">
    <script src="path-to/node_modules/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.js"></script></textarea>
                          <p> To create a simple editable text field, add the following code: </p>
                          <textarea class="multiple-codes">
    <a href="#" id="username" data-type="text" data-pk="1">awesome</a>
    
    <script>
      $.fn.editable.defaults.mode = 'inline';
      $.fn.editableform.buttons =
          '<button type="submit" class="btn btn-primary btn-sm editable-submit">' +
          '<i class="fa fa-fw fa-check"></i>' +
          '</button>' +
          '<button type="button" class="btn btn-default btn-sm editable-cancel">' +
          '<i class="fa fa-fw fa-times"></i>' +
          '</button>';
      $('#username').editable({
          type: 'text',
          pk: 1,
          name: 'username',
          title: 'Enter username'
      });
    </script></textarea>
                        </div>
                        <!-- X-editable Ends -->
                        <!-- Summernote Starts -->
                        <div data-pws-tab="summernote" data-pws-tab-name="Summernote">
                          <p>
                            <a href="http://summernote.org/">Summernote</a> is a super simple WYSIWYG Editor. </p>
                          <h5 class="mt-5 mb-4">Usage</h5>
                          <p> To use summernote in your application, include the following files in &lt;head&gt;. </p>
                          <textarea class="multiple-codes">
    <link rel="stylesheet" href="path-to/node_modules/summernote-bootstrap4/dist/summernote.css" /></textarea>
                          <p> Add the following script files in &lt;body&gt;. </p>
                          <textarea class="multiple-codes">
    <script src="path-to/node_modules/summernote-bootstrap4/dist/summernote.min.js"></script></textarea>
                          <p> To create a summernote editor, add the following code: </p>
                          <textarea class="multiple-codes">
    <div id="summernoteExample"></div>
    
    <script>
      $('#summernoteExample').summernote({
          height: 300,
          tabsize: 2
      });
    </script></textarea>
                        </div>
                        <!-- Summernote Ends -->
                        <!-- SimpleMde Starts -->
                        <div data-pws-tab="simplemde" data-pws-tab-name="SimpleMDE">
                          <p>
                            <a href="https://simplemde.com/">SimpleMDE</a> is a simple, beautiful, and embeddable JavaScript Markdown editor. </p>
                          <h5 class="mt-5 mb-4">Usage</h5>
                          <p> To use simpleMDE in your application, include the following files in &lt;head&gt;. </p>
                          <textarea class="multiple-codes">
    <link rel="stylesheet" href="path-to/node_modules/simplemde/dist/simplemde.min.css" /></textarea>
                          <p> Add the following script files in &lt;body&gt;. </p>
                          <textarea class="multiple-codes">
    <script src="path-to/node_modules/simplemde/dist/simplemde.min.js"></script></textarea>
                          <p> To create an editor using simpleMDE, add the following code: </p>
                          <textarea class="multiple-codes">
    <textarea id="simpleMde">Start editing here&lt;/textarea&gt;
    
    <script>
      if($("#simpleMde").length) {
        var simplemde = new SimpleMDE({ element: $("#simpleMde")[0] });
      }
    </script></textarea>
                        </div>
                        <!-- SimpleMDE Ends -->
                        <!-- Quill Starts -->
                        <div data-pws-tab="quill" data-pws-tab-name="Quill">
                          <p>
                            <a href="https://quilljs.com/">Quill</a> is a free, open source WYSIWYG editor built for the modern web. </p>
                          <h5 class="mt-5 mb-4">Usage</h5>
                          <p> To use Quill in your application, include the following files in &lt;head&gt;. </p>
                          <textarea class="multiple-codes">
    <link rel="stylesheet" href="path-to/node_modules/quill/dist/quill.snow.css" /></textarea>
                          <p> Add the following script files in &lt;body&gt;. </p>
                          <textarea class="multiple-codes">
    <script src="path-to/node_modules/quill/dist/quill.min.js"></script></textarea>
                          <p> To create an editor using Quill, add the following code: </p>
                          <textarea class="multiple-codes">
    <div id="quillExample" class="quill-container"></div>
    
    <script>
      var quill = new Quill('#quillExample', {
          modules: {
              toolbar: [
                  [{
                      header: [1, 2, false]
                  }],
                  ['bold', 'italic', 'underline'],
                  ['image', 'code-block']
              ]
          },
          placeholder: 'Compose an epic...',
          theme: 'snow' // or 'bubble'
      });
    </script></textarea>
                        </div>
                        <!-- Quill Ends -->
                        <!-- Ace Starts -->
                        <div data-pws-tab="ace" data-pws-tab-name="Ace">
                          <p>
                            <a href="https://ace.c9.io/">Ace</a> is an embeddable code editor written in JavaScript. It matches the features and performance of native editors such as Sublime, Vim and TextMate. </p>
                          <h5 class="mt-5 mb-4">Usage</h5>
                          <p> To use ace editor in your application, include the following files in &lt;body&gt;. </p>
                          <textarea class="multiple-codes">
    <script src="path-to/node_modules/ace-builds/src/ace.js"></script>
    <script src="path-to/node_modules/ace-builds/src-min/mode-javascript.js"></script>
    <script src="path-to/node_modules/ace-builds/src-min/theme-chaos.js"></script><!--Choose any theme you wish--></textarea>
                          <p> To create a code editor using ace with a sample code, add the following code: </p>
                          <textarea class="multiple-codes">
    <div id="aceExample" class="ace-editor">
        var x = add(4, 3); // Function is called, return value will end up in x function add(a, b) { return a + b; // Function returns the sum of a and b } var y = mul(4, 3); // Function is called, return value will end up in y function add(a, b) { return a *
        b; // Function returns the product of a and b }
    </div>
    
    <script>
      var editor = ace.edit("aceExample");
      editor.setTheme("ace/theme/chaos"); //set theme
      editor.getSession().setMode("ace/mode/javascript"); //set mode
      document.getElementById('aceExample').style.fontSize='1rem'; //styling
    </script></textarea>
                        </div>
                        <!-- Ace Ends -->
                        <!-- Codemirror Starts -->
                        <div data-pws-tab="codemirror" data-pws-tab-name="CodeMirror">
                          <p>
                            <a href="https://codemirror.net/">CodeMirror</a> is a versatile text editor implemented in JavaScript for the browser. It is specialized for editing code, and comes with a number of language modes and addons that implement more advanced editing functionality. </p>
                          <h5 class="mt-5 mb-4">Usage</h5>
                          <p> To use CodeMirror in your application, include the following files in &lt;head&gt;. </p>
                          <textarea class="multiple-codes">
    <link rel="stylesheet" href="path-to/node_modules/codemirror/lib/codemirror.css" />
    <link rel="stylesheet" href="path-to/node_modules/codemirror/theme/ambiance.css" /><!--Choose a theme you wish--></textarea>
                          <p> Add the following script files in &lt;body&gt;. </p>
                          <textarea class="multiple-codes">
    <script src="path-to/node_modules/codemirror/lib/codemirror.js"></script>
    <script src="path-to/node_modules/codemirror/mode/javascript/javascript.js"></script></textarea>
                          <p> Here is an example of an editor using CodeMirror. </p>
                          <textarea class="multiple-codes">
    <textarea rows="4" cols="50" name="code-editable" id="code-editable">
      <script>
      var x = 3;
      var y = 4;
      var z = x + y;
      </script>
    &lt;/textarea&gt;
    
    <script>
      var editableCodeMirror = CodeMirror.fromTextArea(document.getElementById('code-editable'), {
          mode: "javascript",
          theme: "ambiance",
          lineNumbers: true
      });
    </script></textarea>
                        </div>
                        <!--  CodeMirror Ends -->
                      </div>
                      <!--Form editors ends-->
                    </div> <!-- Card Block Ends Here -->
                  </div>
                </div>
                <div class="col-12 grid-margin credits" id="credits">
                  <div class="card">
                    <div class="card-body">
                      <h3 class="mb-4">Credits</h3>
                      <p>We have used the following plugins in Corona admin</p>
                      <div class="row">
                        <div class="col-12 col-md-6">
                          <ul class="credit-list">
                            <li>
                              <p>Ace editor</p> <a href="https://ace.c9.io/" target="_blank">https://ace.c9.io/</a>
                            </li>
                            <li>
                              <p>Bootstrap</p> <a href="https://getbootstrap.com/" target="_blank">https://getbootstrap.com/</a>
                            </li>
                            <li>
                              <p>Bootstrap Datepicker</p> <a href="https://gitter.im/uxsolutions/bootstrap-datepicker" target="_blank">https://gitter.im/uxsolutions/bootstrap-datepicker</a>
                            </li>
                            <li>
                              <p>Bootstrap Maxlength</p> <a href="http://mimo84.github.com/bootstrap-maxlength" target="_blank">http://mimo84.github.com/bootstrap-maxlength</a>
                            </li>
                            <li>
                              <p>C3</p> <a href="https://travis-ci.org/c3js/c3" target="_blank">https://travis-ci.org/c3js/c3</a>
                            </li>
                            <li>
                              <p>Chart.js</p> <a href="https://www.chartjs.org/" target="_blank">https://www.chartjs.org/</a>
                            </li>
                            <li>
                              <p>Chartist</p> <a href="https://gionkunz.github.io/chartist-js/" target="_blank">https://gionkunz.github.io/chartist-js/</a>
                            </li>
                            <li>
                              <p>Clipboard</p> <a href="https://clipboardjs.com" target="_blank">https://clipboardjs.com</a>
                            </li>
                            <li>
                              <p>Codemirror</p> <a href="https://codemirror.net/" target="_blank">https://codemirror.net/</a>
                            </li>
                            <li>
                              <p>Colcade</p> <a href="https://github.com/desandro/colcade" target="_blank">https://github.com/desandro/colcade/</a>
                            </li>
                            <li>
                              <p>D3</p> <a href="https://d3js.org" target="_blank">https://d3js.org</a>
                            </li>
                            <li>
                              <p>Datatables.net</p> <a href="https://datatables.net/" target="_blank">https://datatables.net/</a>
                            </li>
                            <li>
                              <p>Dragula</p> <a href="https://bevacqua.github.io/dragula/" target="_blank">https://bevacqua.github.io/dragula/</a>
                            </li>
                            <li>
                              <p>Dropify</p> <a href="http://jeremyfagis.github.io/dropify/" target="_blank">http://jeremyfagis.github.io/dropify/</a>
                            </li>
                            <li>
                              <p>Dropzone</p> <a href="http://www.dropzonejs.com/" target="_blank">http://www.dropzonejs.com/</a>
                            </li>
                            <li>
                              <p>Flag icons</p> <a href="http://lipis.github.io/flag-icon-css/" target="_blank">http://lipis.github.io/flag-icon-css/</a>
                            </li>
                            <li>
                              <p>Flot</p> <a href="https://www.flotcharts.org/" target="_blank">https://www.flotcharts.org/</a>
                            </li>
                            <li>
                              <p>Font awesome</p> <a href="https://fontawesome.com/" target="_blank">https://fontawesome.com/</a>
                            </li>
                            <li>
                              <p>Full calendar</p> <a href="https://fullcalendar.io/" target="_blank">https://fullcalendar.io/</a>
                            </li>
                            <li>
                              <p>Gulp</p> <a href="https://gulpjs.com/" target="_blank">https://gulpjs.com/</a>
                            </li>
                            <li>
                              <p>Icheck</p> <a href="http://icheck.fronteed.com/" target="_blank">http://icheck.fronteed.com/</a>
                            </li>
                            <li>
                              <p>Inputmask</p> <a href="http://robinherbots.github.io/Inputmask/" target="_blank">http://robinherbots.github.io/Inputmask/</a>
                            </li>
                            <li>
                              <p>Ion range slider</p> <a href="http://ionden.com/a/plugins/ion.rangeSlider/en.html" target="_blank">http://ionden.com/a/plugins/ion.rangeSlider/en.html</a>
                            </li>
                            <li>
                              <p>JQuery</p> <a href="https://jquery.com/" target="_blank">https://jquery.com/</a>
                            </li>
                            <li>
                              <p>JQuery asColorPicker</p> <a href="https://github.com/thecreation/jquery-asColorPicker" target="_blank">https://github.com/thecreation/jquery-asColorPicker</a>
                            </li>
                            <li>
                              <p>JQuery bar rating</p> <a href="http://antenna.io/demo/jquery-bar-rating/examples/" target="_blank">http://antenna.io/demo/jquery-bar-rating/examples/</a>
                            </li>
                            <li>
                              <p>JQuery context menu</p> <a href="http://swisnl.github.io/jQuery-contextMenu/" target="_blank">http://swisnl.github.io/jQuery-contextMenu/</a>
                            </li>
                            <li>
                              <p>JQuery file upload</p> <a href="http://hayageek.com/docs/jquery-upload-file.php" target="_blank">http://hayageek.com/docs/jquery-upload-file.php</a>
                            </li>
                            <li>
                              <p>JQuery Mapael</p> <a href="https://github.com/neveldo/mapael-maps" target="_blank">https://github.com/neveldo/mapael-maps</a>
                            </li>
                            <li>
                              <p>JQuery sparklin</p> <a href="http://omnipotent.net/jquery.sparkline/" target="_blank">http://omnipotent.net/jquery.sparkline/</a>
                            </li>
                            <li>
                              <p>JQuery-steps</p> <a href="http://www.jquery-steps.com/" target="_blank">http://www.jquery-steps.com/</a>
                            </li>
                            <li>
                              <p>JQuery Tags Input</p> <a href="http://xoxco.com/projects/code/tagsinput/" target="_blank">http://xoxco.com/projects/code/tagsinput/</a>
                            </li>
                          </ul>
                        </div>
                        <div class="col-12 col-md-6">
                          <ul class="credit-list">
                            <li>
                              <p>JQuery Toast</p> <a href="https://kamranahmed.info/toast" target="_blank">https://kamranahmed.info/toast</a>
                            </li>
                            <li>
                              <p>JQuery Validation</p> <a href="https://jqueryvalidation.org/" target="_blank">https://jqueryvalidation.org/</a>
                            </li>
                            <li>
                              <p>JQuery Avgrund</p> <a href="https://github.com/voronianski/jquery.avgrund.js" target="_blank">https://github.com/voronianski/jquery.avgrund.js</a>
                            </li>
                            <li>
                              <p>JQuery Repeater</p> <a href="http://briandetering.net/repeater" target="_blank">http://briandetering.net/repeater</a>
                            </li>
                            <li>
                              <p>JSgrid</p> <a href="http://js-grid.com/" target="_blank">http://js-grid.com/</a>
                            </li>
                            <li>
                              <p>JSgrid</p> <a href="http://js-grid.com/" target="_blank">http://js-grid.com/</a>
                            </li>
                            <li>
                              <p>Justgage</p> <a href="http://justgage.com/" target="_blank">http://justgage.com/</a>
                            </li>
                            <li>
                              <p>JVector Map</p> <a href="http://jvectormap.com/" target="_blank">http://jvectormap.com/</a>
                            </li>
                            <li>
                              <p>Light gallery</p> <a href="http://sachinchoolur.github.io/lightGallery/" target="_blank">http://sachinchoolur.github.io/lightGallery/</a>
                            </li>
                            <li>
                              <p>Material Design Icons</p> <a href="https://materialdesignicons.com/" target="_blank">https://materialdesignicons.com/</a>
                            </li>
                            <li>
                              <p>Moment.js</p> <a href="https://momentjs.com/" target="_blank">https://momentjs.com/</a>
                            </li>
                            <li>
                              <p>Morris.js</p> <a href="https://momentjs.com/" target="_blank">https://momentjs.com/</a>
                            </li>
                            <li>
                              <p>NoUISlider</p> <a href="https://refreshless.com/nouislider/" target="_blank">https://refreshless.com/nouislider/</a>
                            </li>
                            <li>
                              <p>Owl carousel</p> <a href="https://owlcarousel2.github.io/OwlCarousel2/docs/started-welcome.html" target="_blank">https://owlcarousel2.github.io/OwlCarousel2/docs/started-welcome.html</a>
                            </li>
                            <li>
                              <p>Perfect scrollbar</p> <a href="http://utatti.github.io/perfect-scrollbar/" target="_blank">http://utatti.github.io/perfect-scrollbar/</a>
                            </li>
                            <li>
                              <p>Popper.js</p> <a href="https://popper.js.org/" target="_blank">https://popper.js.org/</a>
                            </li>
                            <li>
                              <p>Progressbar.js</p> <a href="https://progressbarjs.readthedocs.io/en/latest/" target="_blank">https://progressbarjs.readthedocs.io</a>
                            </li>
                            <li>
                              <p>PWS Tabs</p> <a href="https://alexchizhov.com/pwstabs/" target="_blank">https://alexchizhov.com/pwstabs/</a>
                            </li>
                            <li>
                              <p>Quill Editor</p> <a href="https://quilljs.com/" target="_blank">https://quilljs.com/</a>
                            </li>
                            <li>
                              <p>Rapheal</p> <a href="http://dmitrybaranovskiy.github.io/raphael/" target="_blank">http://dmitrybaranovskiy.github.io/raphael/</a>
                            </li>
                            <li>
                              <p>Select 2</p> <a href="https://select2.org/" target="_blank">https://select2.org/</a>
                            </li>
                            <li>
                              <p>Simple line icons</p> <a href="http://simplelineicons.com/" target="_blank">http://simplelineicons.com/</a>
                            </li>
                            <li>
                              <p>SimpleMDE</p> <a href="https://simplemde.com/" target="_blank">https://simplemde.com/</a>
                            </li>
                            <li>
                              <p>Summernote</p> <a href="https://summernote.org/" target="_blank">https://summernote.org/</a>
                            </li>
                            <li>
                              <p>Sweetalert</p> <a href="http://sweetalert.js.org" target="_blank">http://sweetalert.js.org</a>
                            </li>
                            <li>
                              <p>Tempusdominus-bootstrap-4</p> <a href="https://tempusdominus.github.io/bootstrap-4/" target="_blank">https://tempusdominus.github.io/bootstrap-4/</a>
                            </li>
                            <li>
                              <p>Themify icons</p> <a href="https://themify.me/themify-icons" target="_blank">https://themify.me/themify-icons</a>
                            </li>
                            <li>
                              <p>TinyMCE</p> <a href="https://www.tiny.cloud/" target="_blank">https://www.tiny.cloud/</a>
                            </li>
                            <li>
                              <p>TWBS pagination</p> <a href="https://esimakin.github.io/twbs-pagination/" target="_blank">https://esimakin.github.io/twbs-pagination/</a>
                            </li>
                            <li>
                              <p>Typeahead</p> <a href="https://twitter.github.io/typeahead.js/" target="_blank">https://twitter.github.io/typeahead.js/</a>
                            </li>
                            <li>
                              <p>Xeditable</p> <a href="https://vitalets.github.io/x-editable/" target="_blank">https://vitalets.github.io/x-editable/</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>            
          </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="/assets/vendors/codemirror/codemirror.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.45.0/mode/ruby/ruby.min.js"></script>
    <script src="/assets/vendors/pwstabs/jquery.pwstabs.min.js"></script>
    <script src="/stackpath/script.js"></script>
</body>
</html>