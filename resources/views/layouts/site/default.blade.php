<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Form Wizard - Chameleon Admin - Modern Bootstrap 4 WebApp & Dashboard HTML Template + UI Kit</title>
    <link rel="apple-touch-icon" href="{{secure_asset('template-admin/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{secure_asset('template-admin/app-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{secure_asset('template-admin/app-assets/css/vendors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{secure_asset('template-admin/app-assets/vendors/css/pickers/daterange/daterangepicker.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="{{secure_asset('template-admin/app-assets/css/app.css')}}">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{secure_asset('template-admin/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{secure_asset('template-admin/app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{secure_asset('template-admin/app-assets/css/plugins/forms/wizard.css')}}">
    <link rel="stylesheet" type="text/css" href="{{secure_asset('template-admin/app-assets/css/plugins/pickers/daterange/daterange.css')}}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END Custom CSS-->
  </head>
  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">

    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
      <div class="navbar-wrapper">
        <div class="navbar-container content">
          <div class="collapse navbar-collapse show" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
              <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
              <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
              <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
              <li class="dropdown nav-item mega-dropdown d-none d-md-block"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Enviar Email</a>
                <ul class="dropdown-menu row">
                  <li class="col-md-12">
                    <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="ft-thumbs-up"></i></h6>
                    <form class="form form-horizontal pt-1">
                      <div class="form-body">
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label" for="inputName1">Nome</label>
                          <div class="col-sm-9">
                            <div class="position-relative has-icon-left">
                              <input class="form-control" id="inputName1" type="text" placeholder="John Doe">
                              <div class="form-control-position pl-1"><i class="ft-user"></i></div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label" for="inputContact1">Contato</label>
                          <div class="col-sm-9">
                            <div class="position-relative has-icon-left">
                              <input class="form-control" id="inputContact1" type="text" placeholder="(123)-456-7890">
                              <div class="form-control-position pl-1"><i class="ft-smartphone"></i></div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label" for="inputEmail1">Email</label>
                          <div class="col-sm-9">
                            <div class="position-relative has-icon-left">
                              <input class="form-control" id="inputEmail1" type="email" placeholder="john@example.com">
                              <div class="form-control-position pl-1"><i class="ft-mail"></i></div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label" for="inputMessage1">Mensagem</label>
                          <div class="col-sm-9">
                            <div class="position-relative has-icon-left">
                              <textarea class="form-control" id="inputMessage1" rows="2" placeholder="Simple Textarea"></textarea>
                              <div class="form-control-position pl-1"><i class="ft-message-circle"></i></div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12 mb-1">
                            <button class="btn btn-danger float-right" type="button"><i class="ft-arrow-right"></i> Submit</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </li>
                </ul>
              </li>
              <li class="dropdown d-none d-md-block mr-1"><a class="dropdown-toggle nav-link" id="apps-navbar-links" href="#" data-toggle="dropdown">
                            Ferramentas    </a>
                <div class="dropdown-menu">
                  <div class="arrow_box"><a class="dropdown-item" href="email-application.html"><i class="ft-user"></i> Email</a><a class="dropdown-item" href="chat-application.html"><i class="ft-mail"></i> Chat</a><a class="dropdown-item" href="project-summary.html"><i class="ft-briefcase"></i> Project Summary            </a><a class="dropdown-item" href="full-calender.html"><i class="ft-calendar"></i> Calendar            </a></div>
                </div>
              </li>
              {{-- <li class="nav-item dropdown navbar-search"><a class="nav-link dropdown-toggle hide" data-toggle="dropdown" href="#"><i class="ficon ft-search"></i></a>
                <ul class="dropdown-menu">
                  <li class="arrow_box">
                    <form>
                      <div class="input-group search-box">
                        <div class="position-relative has-icon-right full-width">
                          <input class="form-control" id="search" type="text" placeholder="Search here...">
                          <div class="form-control-position navbar-search-close"><i class="ft-x"></i></div>
                        </div>
                      </div>
                    </form>
                  </li>
                </ul>
              </li> --}}
            </ul>
            <ul class="nav navbar-nav float-right">
              <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language"></span></a>
                <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                  <div class="arrow_box"><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-ru"></i> Russian</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-es"></i> Spanish</a></div>
                </div>
              </li>
              <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell bell-shake" id="notification-navbar-link"></i><span class="badge badge-pill badge-sm badge-danger badge-default badge-up badge-glow">5</span></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                  <div class="arrow_box_right">
                    <li class="dropdown-menu-header">
                      <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span></h6>
                    </li>
                    <li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
                        <div class="media">
                          <div class="media-left align-self-center"><i class="ft-share info font-medium-4 mt-2"></i></div>
                          <div class="media-body">
                            <h6 class="media-heading info">New Order Received</h6>
                            <p class="notification-text font-small-3 text-muted text-bold-600">Lorem ipsum dolor sit amet!</p><small>
                              <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">3:30 PM</time></small>
                          </div>
                        </div></a><a href="javascript:void(0)">
                        <div class="media">
                          <div class="media-left align-self-center"><i class="ft-save font-medium-4 mt-2 warning"></i></div>
                          <div class="media-body">
                            <h6 class="media-heading warning">New User Registered</h6>
                            <p class="notification-text font-small-3 text-muted text-bold-600">Aliquam tincidunt mauris eu risus.</p><small>
                              <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">10:05 AM</time></small>
                          </div>
                        </div></a><a href="javascript:void(0)">
                        <div class="media">
                          <div class="media-left align-self-center"><i class="ft-repeat font-medium-4 mt-2 danger"></i></div>
                          <div class="media-body">
                            <h6 class="media-heading danger">New Purchase</h6>
                            <p class="notification-text font-small-3 text-muted text-bold-600">Lorem ipsum dolor sit ametest?</p><small>
                              <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Yesterday</time></small>
                          </div>
                        </div></a><a href="javascript:void(0)">
                        <div class="media">
                          <div class="media-left align-self-center"><i class="ft-shopping-cart font-medium-4 mt-2 primary"></i></div>
                          <div class="media-body">
                            <h6 class="media-heading primary">New Item In Your Cart</h6><small>
                              <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last week</time></small>
                          </div>
                        </div></a><a href="javascript:void(0)">
                        <div class="media">
                          <div class="media-left align-self-center"><i class="ft-heart font-medium-4 mt-2 info"></i></div>
                          <div class="media-body">
                            <h6 class="media-heading info">New Sale</h6><small>
                              <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last month</time></small>
                          </div>
                        </div></a></li>
                    <li class="dropdown-menu-footer"><a class="dropdown-item info text-right pr-1" href="javascript:void(0)">Read all</a></li>
                  </div>
                </ul>
              </li>
              <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail">             </i></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                  <div class="arrow_box_right">
                    <li class="dropdown-menu-header">
                      <h6 class="dropdown-header m-0"><span class="grey darken-2">Messages</span></h6>
                    </li>
                    <li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
                        <div class="media">
                          <div class="media-left"><span class="avatar avatar-sm rounded-circle"><img src="{{secure_asset('template-admin/app-assets/images/portrait/small/avatar-s-6.png')}}" alt="avatar"></span></div>
                          <div class="media-body">
                            <h6 class="media-heading text-bold-700">Sarah Montery<i class="ft-circle font-small-2 success float-right"></i></h6>
                            <p class="notification-text font-small-3 text-muted text-bold-600">Everything looks good. I will provide...</p><small>
                              <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">3:55 PM</time></small>
                          </div>
                        </div></a><a href="javascript:void(0)">
                        <div class="media">
                          <div class="media-left"><span class="avatar avatar-sm rounded-circle"><span class="media-object rounded-circle text-circle bg-warning">E</span></span></div>
                          <div class="media-body">
                            <h6 class="media-heading text-bold-700">Eliza Elliot<i class="ft-circle font-small-2 danger float-right"></i></h6>
                            <p class="notification-text font-small-3 text-muted text-bold-600">Okay. here is some more details...</p><small>
                              <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">2:10 AM</time></small>
                          </div>
                        </div></a><a href="javascript:void(0)">
                        <div class="media">
                          <div class="media-left"><span class="avatar avatar-sm rounded-circle"><img src="{{secure_asset('template-admin/app-assets/images/portrait/small/avatar-s-3.png')}}" alt="avatar"></span></div>
                          <div class="media-body">
                            <h6 class="media-heading text-bold-700">Kelly Reyes<i class="ft-circle font-small-2 warning float-right"></i></h6>
                            <p class="notification-text font-small-3 text-muted text-bold-600">Check once and let me know if you...</p><small>
                              <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Yesterday</time></small>
                          </div>
                        </div></a><a href="javascript:void(0)">
                        <div class="media">
                          <div class="media-left"><span class="avatar avatar-sm rounded-circle"><img src="{{secure_asset('template-admin/app-assets/images/portrait/small/avatar-s-19.png')}}" alt="avatar"></span></div>
                          <div class="media-body">
                            <h6 class="media-heading text-bold-700">Tonny Deep<i class="ft-circle font-small-2 danger float-right"></i></h6>
                            <p class="notification-text font-small-3 text-muted text-bold-600">We will start new project development...</p><small>
                              <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Friday</time></small>
                          </div>
                        </div></a></li>
                    <li class="dropdown-menu-footer"><a class="dropdown-item text-right info pr-1" href="javascript:void(0)">Read all</a></li>
                  </div>
                </ul>
              </li>
              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">             <span class="avatar avatar-online"><img src="{{secure_asset('template-admin/app-assets/images/portrait/small/avatar-s-19.png')}}" alt="avatar"></span></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="{{secure_asset('template-admin/app-assets/images/portrait/small/avatar-s-19.png')}}" alt="avatar"><span class="user-name text-bold-700 ml-1">John Doe</span></span></a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="user-profile.html"><i class="ft-user"></i> Edit Profile</a><a class="dropdown-item" href="email-application.html"><i class="ft-mail"></i> My Inbox</a><a class="dropdown-item" href="project-summary.html"><i class="ft-check-square"></i> Task</a><a class="dropdown-item" href="chat-application.html"><i class="ft-message-square"></i> Chats</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="login.html"><i class="ft-power"></i> Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="{{secure_asset('template-admin/app-assets/images/backgrounds/02.jpg')}}">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html"><img class="brand-logo" alt="Chameleon admin logo" src="{{secure_asset('template-admin/app-assets/images/logo/logo.png')}}"/>
              <h3 class="brand-text">Chameleon</h3></a></li>
          <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
      </div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class=" nav-item"><a href="index.html"><i class="ft-home"></i><span class="menu-title" data-i18n="">Amigos</span><span class="badge badge badge-info badge-pill float-right mr-2">3</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="dashboard-ecommerce.html">eCommerce</a>
              </li>
              <li><a class="menu-item" href="dashboard-analytics.html">Analytics</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="ft-layers"></i><span class="menu-title" data-i18n="">Grupos</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="email-application.html">Email Application</a>
              </li>
              <li><a class="menu-item" href="chat-application.html">Chat Application</a>
              </li>
              <li><a class="menu-item" href="full-calender.html">Full Calendar</a>
              </li>
              <li><a class="menu-item" href="project-summary.html">Project Summary</a>
              </li>
              <li><a class="menu-item" href="invoice-template.html">Invoice</a>
              </li>
              <li><a class="menu-item" href="#">Timelines</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="timeline-center.html">Timelines Center</a>
                  </li>
                  <li><a class="menu-item" href="timeline-horizontal.html">Timelines Horizontal</a>
                  </li>
                </ul>
              </li>
              <li><a class="menu-item" href="user-profile.html">Users Profile</a>
              </li>
              <li><a class="menu-item" href="users-contacts.html">Contact List</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="ft-monitor"></i><span class="menu-title" data-i18n="">Eventos</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="#">Vertical</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="../vertical-menu-template">Classic Menu</a>
                  </li>
                  <li><a class="menu-item" href="../vertical-modern-menu-template">Modern Menu</a>
                  </li>
                </ul>
              </li>
              <li><a class="menu-item" href="#">Horizontal</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="../horizontal-menu-template-nav">Full Width</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="ft-layout"></i><span class="menu-title" data-i18n="">Favoritos</span><span class="badge badge badge-pill badge-danger float-right mr-2">5</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="#">Content Sidebar</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="layout-content-detached-left-sidebar.html">Left sidebar</a>
                  </li>
                  <li><a class="menu-item" href="layout-content-detached-left-sticky-sidebar.html">Sticky left sidebar</a>
                  </li>
                  <li><a class="menu-item" href="layout-content-detached-right-sidebar.html">Right sidebar</a>
                  </li>
                  <li><a class="menu-item" href="layout-content-detached-right-sticky-sidebar.html">Sticky right sidebar</a>
                  </li>
                </ul>
              </li>
              <li class="navigation-divider"></li>
              <li><a class="menu-item" href="navbar-hide-on-scroll-top.html">Hide on Scroll Top</a>
              </li>
              <li><a class="menu-item" href="vertical-nav-compact-menu.html">Compact navigation</a>
              </li>
              <li><a class="menu-item" href="layout-fixed-navbar.html">Fixed navbar</a>
              </li>
              <li><a class="menu-item" href="layout-fixed-navigation.html">Fixed navigation</a>
              </li>
              <li><a class="menu-item" href="layout-fixed-navbar-navigation.html">Fixed navbar &amp; navigation</a>
              </li>
              <li><a class="menu-item" href="layout-fixed-navbar-footer.html">Fixed navbar &amp; footer</a>
              </li>
              <li class="navigation-divider"></li>
              <li><a class="menu-item" href="layout-fixed.html">Fixed layout</a>
              </li>
              <li><a class="menu-item" href="layout-boxed.html">Boxed layout</a>
              </li>
              <li><a class="menu-item" href="layout-static.html">Static layout</a>
              </li>
              <li class="navigation-divider"></li>
              <li><a class="menu-item" href="layout-light.html">Navigation light</a>
              </li>
              <li><a class="menu-item" href="layout-dark.html">Navigation Dark</a>
              </li>
              <li><a class="menu-item" href="vertical-nav-flipped.html">Flipped Navigation</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="ft-zap"></i><span class="menu-title" data-i18n="">Comunidades</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="#">Content sidebar</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="starter-kit/ltr/vertical-menu-template/layout-content-detached-left-sidebar.html">Left sidebar</a>
                  </li>
                  <li><a class="menu-item" href="starter-kit/ltr/vertical-menu-template/layout-content-detached-left-sticky-sidebar.html">Sticky left sidebar</a>
                  </li>
                  <li><a class="menu-item" href="starter-kit/ltr/vertical-menu-template/layout-content-detached-right-sidebar.html">Right sidebar</a>
                  </li>
                  <li><a class="menu-item" href="starter-kit/ltr/vertical-menu-template/layout-content-detached-right-sticky-sidebar.html">Sticky right sidebar</a>
                  </li>
                </ul>
              </li>
              <li class="navigation-divider"></li>
              <li><a class="menu-item" href="starter-kit/ltr/vertical-menu-template/layout-fixed-navbar.html">Fixed navbar</a>
              </li>
              <li><a class="menu-item" href="starter-kit/ltr/vertical-menu-template/layout-fixed-navigation.html">Fixed navigation</a>
              </li>
              <li><a class="menu-item" href="starter-kit/ltr/vertical-menu-template/layout-fixed-navbar-navigation.html">Fixed navbar &amp; navigation</a>
              </li>
              <li><a class="menu-item" href="starter-kit/ltr/vertical-menu-template/layout-fixed-navbar-footer.html">Fixed navbar &amp; footer</a>
              </li>
              <li class="navigation-divider"></li>
              <li><a class="menu-item" href="starter-kit/ltr/vertical-menu-template/layout-fixed.html">Fixed layout</a>
              </li>
              <li><a class="menu-item" href="starter-kit/ltr/vertical-menu-template/layout-boxed.html">Boxed layout</a>
              </li>
              <li><a class="menu-item" href="starter-kit/ltr/vertical-menu-template/layout-static.html">Static layout</a>
              </li>
              <li class="navigation-divider"></li>
              <li><a class="menu-item" href="starter-kit/ltr/vertical-menu-template/layout-light.html">Navigation Light</a>
              </li>
              <li><a class="menu-item" href="starter-kit/ltr/vertical-menu-template/layout-dark.html">Navigation Dark</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="ft-aperture"></i><span class="menu-title" data-i18n="">Salvos</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="#">Content</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="content-grid.html">Grid</a>
                  </li>
                  <li><a class="menu-item" href="content-typography.html">Typography</a>
                  </li>
                  <li><a class="menu-item" href="content-text-utilities.html">Text utilities</a>
                  </li>
                  <li><a class="menu-item" href="content-syntax-highlighter.html">Syntax highlighter</a>
                  </li>
                  <li><a class="menu-item" href="content-helper-classes.html">Helper classes</a>
                  </li>
                </ul>
              </li>
              <li><a class="menu-item" href="#">Color Palette</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="color-palette-primary.html">Primary palette</a>
                  </li>

                </ul>
              </li>
              <li><a class="menu-item" href="card-bootstrap.html">Bootstrap Cards</a>
              </li>
              <li><a class="menu-item" href="card-advanced.html">Advanced Cards</a>
              </li>
              <li><a class="menu-item" href="#">Icons</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="icons-feather.html">Feather</a>
                  </li>
                  <li><a class="menu-item" href="icons-line-awesome.html">Line Awesome</a>
                  </li>
                  <li><a class="menu-item" href="icons-simple-line-icons.html">Simple Line Icons</a>
                  </li>
                </ul>
              </li>
              <li><a class="menu-item" href="animation.html">Animation</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="ft-box"></i><span class="menu-title" data-i18n="">Perfil</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="#">Bootstrap</a>
                <ul class="menu-content">

                  <li><a class="menu-item" href="component-progress.html">Progress</a>
                  </li>
                  <li><a class="menu-item" href="component-media-objects.html">Media Objects</a>
                  </li>
                </ul>
              </li>
              <li><a class="menu-item" href="#">Extra</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="ex-component-sweet-alerts.html">Sweet Alerts</a>
                  </li>
                  <li><a class="menu-item" href="ex-component-toastr.html">Toastr</a>
                  </li>
                  <li><a class="menu-item" href="#">Editors</a>
                    <ul class="menu-content">
                      <li><a class="menu-item" href="editor-ckeditor.html">CKEditor</a>
                      </li>
                      <li><a class="menu-item" href="editor-tinymce.html">TinyMCE</a>
                      </li>
                    </ul>
                  </li>
                  <li><a class="menu-item" href="pickers-date-&amp;-time-picker.html">Date &amp; Time Picker</a>
                  </li>
                  <li><a class="menu-item" href="block-ui.html">Block UI</a>
                  </li>
                  <li><a class="menu-item" href="file-uploader-dropzone.html">File Uploader</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="ft-edit"></i><span class="menu-title" data-i18n="">Fotos</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="#">Form Elements</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="form-inputs.html">Form Inputs</a>
                  </li>
                  <li><a class="menu-item" href="form-switch.html">Switch</a>
                  </li>
                  <li><a class="menu-item" href="form-extended-inputs.html">Extended Inputs</a>
                  </li>
                </ul>
              </li>
              <li><a class="menu-item" href="#">Form Layouts</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="form-layout-basic.html">Basic Forms</a>
                  </li>
                  <li><a class="menu-item" href="form-layout-horizontal.html">Horizontal Forms</a>
                  </li>
                  <li><a class="menu-item" href="form-layout-hidden-labels.html">Hidden Labels</a>
                  </li>
                </ul>
              </li>
              <li class=""><a class="menu-item" href="form-wizard.html">Form Wizard</a>
              </li>
              <li><a class="menu-item" href="form-repeater.html">Form Repeater</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="ft-grid"></i><span class="menu-title" data-i18n="">Amigos</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="table-bootstrap.html">Bootstrap Tables</a>
              </li>
              <li><a class="menu-item" href="#">DataTables</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="dt-basic-initialization.html">Basic Initialisation</a>
                  </li>
                  <li><a class="menu-item" href="dt-styling.html">Styling</a>
                  </li>
                  <li><a class="menu-item" href="dt-data-sources.html">Data Sources</a>
                  </li>
                  <li><a class="menu-item" href="dt-advanced-initialization.html">Advanced initialisation</a>
                  </li>
                  <li><a class="menu-item" href="dt-api.html">API</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="ft-bar-chart-2"></i><span class="menu-title" data-i18n="">Bloqueados</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="chartist-charts.html">Chartist</a>
              </li>
              <li><a class="menu-item" href="chartjs-charts.html">Chartjs</a>
              </li>
              <li><a class="menu-item" href="#">Maps</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="google-maps.html">Google Maps</a>
                  </li>
                  <li><a class="menu-item" href="jvector-maps.html">jVector Map</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>



          <li class=" nav-item"><a href="https://themeselection.com/support"><i class="ft-life-buoy"></i><span class="menu-title" data-i18n="">Raise Support</span></a>
          </li>
          <li class=" nav-item"><a href="https://themeselection.com/demo/chameleon-admin-template/documentation"><i class="ft-book"></i><span class="menu-title" data-i18n="">Documentation</span></a>
          </li>
        </ul>
      </div>
      <div class="navigation-background"></div>
    </div>

    @yield('content')
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
      <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2018  &copy; Copyright <a class="text-bold-800 grey darken-2" href="https://themeselection.com" target="_blank">ThemeSelection</a></span>
        <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
          <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/" target="_blank"> More themes</a></li>
          <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/support" target="_blank"> Support</a></li>
          <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/products/chameleon-admin-modern-bootstrap-webapp-dashboard-html-template-ui-kit/" target="_blank"> Purchase</a></li>
        </ul>
      </div>
    </footer>

    <!-- BEGIN VENDOR JS-->
    <script src="{{secure_asset('template-admin/app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{secure_asset('template-admin/app-assets/vendors/js/extensions/jquery.steps.min.js')}}" type="text/javascript"></script>
    <script src="{{secure_asset('template-admin/app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js')}}" type="text/javascript"></script>
    <script src="{{secure_asset('template-admin/app-assets/vendors/js/pickers/daterange/daterangepicker.js')}}" type="text/javascript"></script>
    <script src="{{secure_asset('template-admin/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src="{{secure_asset('template-admin/app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
    <script src="{{secure_asset('template-admin/app-assets/js/core/app.js')}}" type="text/javascript"></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{secure_asset('template-admin/app-assets/js/scripts/forms/wizard-steps.js')}}" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>
