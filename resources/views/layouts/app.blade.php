<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
<link rel="icon" href="{{ asset('img/brand/favicon.png') }}" type="image/png">
      <link rel="stylesheet" href="{{ asset('libs/swiper/dist/css/swiper.min.css') }}">
      <link rel="stylesheet" href="{{ asset('libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.css') }}">
      <link rel="stylesheet" href="{{ asset('libs/%40fortawesome/fontawesome-free/css/all.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/quick-website.css') }}" id="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="ready loaded" id="app">
     <!--  <div class="preloader">
         <div class="spinner-border text-primary" role="status"><span class="sr-only">Loading...</span></div>
      </div> -->
      <div class="modal fade" tabindex="-1" role="dialog" id="modal-cookies" data-backdrop="false" aria-labelledby="modal-cookies" aria-hidden="true">
         <div class="modal-dialog modal-dialog-aside left-4 right-4 bottom-4">
            <div class="modal-content bg-dark-dark">
               <div class="modal-body">
                  <p class="text-sm text-white mb-3">We use cookies so that our themes work for you. By using our website, you agree to our use of cookies.</p>
                  <a href="../utility/terms.html" class="btn btn-sm btn-white" target="_blank">Learn more</a> <button type="button" class="btn btn-sm btn-primary mr-2" data-dismiss="modal">OK</button>
               </div>
            </div>
         </div>
      </div>
      <header class="header-transparent" id="header-main">
         <nav class="navbar navbar-main navbar-expand-lg " id="navbar-main">
            <div class="container">
               <a class="navbar-brand" href="{{ url('/') }}">
               {{ config('app.name', 'Laravel') }}</a>

               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}"><span class="navbar-toggler-icon"></span></button>
               <div class="collapse navbar-collapse navbar-collapse-overlay" id="navbar-main-collapse">
                  <div class="position-relative">
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                           <line x1="18" y1="6" x2="6" y2="18"></line>
                           <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                     </button>
                  </div>
                  <ul class="navbar-nav ml-lg-auto">
                     <li class="nav-item nav-item-spaced d-none d-lg-block"><a class="nav-link" href="../../overview.html">Overview</a></li>
                     <li class="nav-item nav-item-spaced dropdown dropdown-animate" data-toggle="hover">
                        <a class="nav-link" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Landings</a>
                        <div class="dropdown-menu dropdown-menu-xl p-0">
                           <div class="row no-gutters">
                              <div class="col-12 col-lg-6 order-lg-2">
                                 <div class="dropdown-body dropdown-body-right bg-dropdown-secondary h-100">
                                    <h6 class="dropdown-header">Organization</h6>
                                    <div class="list-group list-group-flush">
                                       <div class="list-group-item bg-transparent border-0 px-0 py-2">
                                          <div class="media d-flex">
                                             <span class="h6">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout">
                                                   <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                                   <line x1="3" y1="9" x2="21" y2="9"></line>
                                                   <line x1="9" y1="21" x2="9" y2="9"></line>
                                                </svg>
                                             </span>
                                             <div class="media-body ml-2"><a href="agency.html" class="d-block heading h6 mb-0">Agency</a> <small class="text-sm text-muted mb-0">Quick's most important features</small></div>
                                          </div>
                                       </div>
                                       <div class="list-group-item bg-transparent border-0 px-0 py-2">
                                          <div class="media d-flex">
                                             <span class="h6">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe">
                                                   <circle cx="12" cy="12" r="10"></circle>
                                                   <line x1="2" y1="12" x2="22" y2="12"></line>
                                                   <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                                                </svg>
                                             </span>
                                             <div class="media-body ml-2"><a href="business.html" class="d-block h6 mb-0">Business</a> <small class="text-sm text-muted mb-0">Quick's most important features</small></div>
                                          </div>
                                       </div>
                                       <div class="list-group-item bg-transparent border-0 px-0 py-2">
                                          <div class="media d-flex">
                                             <span class="h6">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-camera">
                                                   <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path>
                                                   <circle cx="12" cy="13" r="4"></circle>
                                                </svg>
                                             </span>
                                             <div class="media-body ml-2"><a href="studio.html" class="d-block h6 mb-0">Studio</a> <small class="text-sm text-muted mb-0">Quick's most important features</small></div>
                                          </div>
                                       </div>
                                    </div>
                                    <h6 class="dropdown-header mt-4">Products &amp; Services</h6>
                                    <div class="list-group list-group-flush">
                                       <div class="list-group-item bg-transparent border-0 px-0 py-2">
                                          <div class="media d-flex">
                                             <span class="h6">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-code">
                                                   <polyline points="16 18 22 12 16 6"></polyline>
                                                   <polyline points="8 6 2 12 8 18"></polyline>
                                                </svg>
                                             </span>
                                             <div class="media-body ml-2"><a href="development.html" class="d-block h6 mb-0">Development</a> <small class="text-sm text-muted mb-0">Quick's most important features</small></div>
                                          </div>
                                       </div>
                                       <div class="list-group-item bg-transparent border-0 px-0 py-2">
                                          <div class="media d-flex">
                                             <span class="h6">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart">
                                                   <line x1="12" y1="20" x2="12" y2="10"></line>
                                                   <line x1="18" y1="20" x2="18" y2="4"></line>
                                                   <line x1="6" y1="20" x2="6" y2="16"></line>
                                                </svg>
                                             </span>
                                             <div class="media-body ml-2"><a href="marketing.html" class="d-block h6 mb-0">Marketing</a> <small class="text-sm text-muted mb-0">Quick's most important features</small></div>
                                          </div>
                                       </div>
                                       <div class="list-group-item bg-transparent border-0 px-0 py-2">
                                          <div class="media d-flex">
                                             <span class="h6">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map">
                                                   <polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon>
                                                   <line x1="8" y1="2" x2="8" y2="18"></line>
                                                   <line x1="16" y1="6" x2="16" y2="22"></line>
                                                </svg>
                                             </span>
                                             <div class="media-body ml-2"><a href="desktop-app.html" class="d-block h6 mb-0">Desktop App</a> <small class="text-sm text-muted mb-0">Quick's most important features</small></div>
                                          </div>
                                       </div>
                                       <div class="list-group-item bg-transparent border-0 px-0 py-2">
                                          <div class="media d-flex">
                                             <span class="h6">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card">
                                                   <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                                   <line x1="1" y1="10" x2="23" y2="10"></line>
                                                </svg>
                                             </span>
                                             <div class="media-body ml-2"><a href="saas.html" class="d-block h6 mb-0">Saas App</a> <small class="text-sm text-muted mb-0">Quick's most important features</small></div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-12 col-lg-6 order-lg-1 mt-4 mt-lg-0">
                                 <div class="dropdown-body">
                                    <h6 class="dropdown-header">Get started</h6>
                                    <div class="list-group list-group-flush">
                                       <div class="list-group-item border-0">
                                          <div class="media d-flex">
                                             <figure style="width:40px"><img alt="Image placeholder" src="/img/svg/icons/Code_2.svg" class="img-fluid" style="height:40px"></figure>
                                             <div class="media-body ml-3"><a href="../../overview.html#landing" class="d-block h6 mb-0">Landing Pages</a> <small class="text-sm text-muted mb-0">A starting point for any scenario.</small></div>
                                          </div>
                                       </div>
                                       <div class="list-group-item border-0">
                                          <div class="media d-flex">
                                             <figure style="width:40px"><img alt="Image placeholder" src="/img/svg/icons/Like_UI.svg" class="img-fluid" style="height:40px"></figure>
                                             <div class="media-body ml-3"><a href="../../overview.html#secondary" class="d-block h6 mb-0">Secondary Pages</a> <small class="text-sm text-muted mb-0">A starting point for any scenario.</small></div>
                                          </div>
                                       </div>
                                       <div class="list-group-item border-0">
                                          <div class="media d-flex align-items-center">
                                             <figure style="width:40px"><img alt="Image placeholder" src="/img/svg/icons/Online_Store_2.svg" class="img-fluid" style="width:40px"></figure>
                                             <div class="media-body ml-3"><a href="../../overview.html#account" class="d-block h6 mb-0">Account Pages</a> <small class="text-sm text-muted mb-0">Account management made easy.</small></div>
                                          </div>
                                       </div>
                                       <div class="list-group-item border-0">
                                          <div class="media d-flex align-items-center">
                                             <figure style="width:40px"><img alt="Image placeholder" src="/img/svg/icons/Apps.svg" class="img-fluid" style="width:40px"></figure>
                                             <div class="media-body ml-3"><a href="../../overview.html#boards" class="d-block h6 mb-0">Board Pages</a> <small class="text-sm text-muted mb-0">Get your dashboard nice and easy.</small></div>
                                          </div>
                                       </div>
                                       <h6 class="dropdown-header mt-4">Developers</h6>
                                       <div class="list-group-item border-0">
                                          <div class="media d-flex align-items-center">
                                             <figure style="width:40px"><img alt="Image placeholder" src="/img/svg/icons/DOC_File.svg" class="img-fluid" style="width:40px"></figure>
                                             <div class="media-body ml-3"><a href="../../docs/index.html" class="d-block h6 mb-0">Documentation</a> <small class="text-sm text-muted mb-0">A good place to start from</small></div>
                                          </div>
                                       </div>
                                       <div class="list-group-item border-0">
                                          <div class="media d-flex align-items-center">
                                             <figure style="width:40px"><img alt="Image placeholder" src="/img/svg/icons/Package_Opened.svg" class="img-fluid" style="width:40px"></figure>
                                             <div class="media-body ml-3"><a href="../../docs/components/alerts.html" class="d-block h6 mb-0">Components</a> <small class="text-sm text-muted mb-0">A good place to start from</small></div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li class="nav-item nav-item-spaced dropdown dropdown-animate" data-toggle="hover">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                        <div class="dropdown-menu dropdown-menu-md p-0">
                           <ul class="list-group list-group-flush px-lg-4">
                              <li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                                 <a href="#" class="list-group-item list-group-item-action dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="d-flex">
                                       <figure style="width:20px"><img alt="Image placeholder" src="" class="svg-inject img-fluid" style="height:20px"></figure>
                                       <div class="ml-3">
                                          <h6 class="heading mb-0">Landing</h6>
                                          <p class="mb-0">Examples for any scenario.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="agency.html">Agency</a></li>
                                    <li><a class="dropdown-item" href="business.html">Business</a></li>
                                    <li><a class="dropdown-item" href="desktop-app.html">Desktop App</a></li>
                                    <li><a class="dropdown-item" href="development.html">Development</a></li>
                                    <li><a class="dropdown-item" href="marketing.html">Marketing</a></li>
                                    <li><a class="dropdown-item" href="money-app.html">Money App</a></li>
                                    <li><a class="dropdown-item" href="presentation.html">Presentation</a></li>
                                    <li><a class="dropdown-item" href="saas.html">Saas</a></li>
                                    <li><a class="dropdown-item" href="studio.html">Studio</a></li>
                                 </ul>
                              </li>
                              <li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                                 <a href="#" class="list-group-item list-group-item-action dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="d-flex">
                                       <figure style="width:20px"><img alt="Image placeholder" src="" class="svg-inject img-fluid" style="height:20px"></figure>
                                       <div class="ml-3">
                                          <h6 class="heading mb-0">Secondary</h6>
                                          <p class="mb-0">Examples for any scenario.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="../secondary/about.html">About</a></li>
                                    <li><a class="dropdown-item" href="../secondary/services.html">Services</a></li>
                                    <li><a class="dropdown-item" href="../secondary/pricing.html">Pricing</a></li>
                                    <li><a class="dropdown-item" href="../secondary/pricing-alternative.html">Pricing Alternative</a></li>
                                    <li><a class="dropdown-item" href="../secondary/careers.html">Careers</a></li>
                                    <li><a class="dropdown-item" href="../secondary/careers-single.html">Careers Single</a></li>
                                    <li><a class="dropdown-item" href="../secondary/case-study.html">Case Study</a></li>
                                    <li><a class="dropdown-item" href="../secondary/contact.html">Contact</a></li>
                                    <li><a class="dropdown-item" href="../secondary/support.html">Support</a></li>
                                    <li><a class="dropdown-item" href="../secondary/support-topic.html">Support Topic</a></li>
                                 </ul>
                              </li>
                              <li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                                 <a href="#" class="list-group-item list-group-item-action dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="d-flex">
                                       <figure style="width:20px"><img alt="Image placeholder" src="" class="svg-inject img-fluid" style="height:20px"></figure>
                                       <div class="ml-3">
                                          <h6 class="heading mb-0">Blog</h6>
                                          <p class="mb-0">Examples for any scenario.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="../blog/blog-grid.html">Blog Grid</a></li>
                                    <li><a class="dropdown-item" href="../blog/blog-masonry.html">Blog Masonry</a></li>
                                    <li><a class="dropdown-item" href="../blog/blog-article.html">Blog Article</a></li>
                                    <li><a class="dropdown-item" href="../blog/blog-article-modern.html">Blog Article Modern</a></li>
                                 </ul>
                              </li>
                              <li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                                 <a href="#" class="list-group-item list-group-item-action dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="d-flex">
                                       <figure style="width:20px"><img alt="Image placeholder" src="" class="svg-inject img-fluid" style="height:20px"></figure>
                                       <div class="ml-3">
                                          <h6 class="heading mb-0">Utility</h6>
                                          <p class="mb-0">Error pages and everything else.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="../utility/coming-soon.html">Coming Soon</a></li>
                                    <li><a class="dropdown-item" href="../utility/error-side-cover.html">Error Side Cover</a></li>
                                    <li><a class="dropdown-item" href="../utility/error-illustration.html">Error Illustration</a></li>
                                    <li><a class="dropdown-item" href="../utility/faq.html">Faq</a></li>
                                    <li><a class="dropdown-item" href="../utility/terms.html">Terms</a></li>
                                 </ul>
                              </li>
                           </ul>
                        </div>
                     </li>
                     <li class="nav-item nav-item-spaced dropdown dropdown-animate" data-toggle="hover">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">App</a>
                        <div class="dropdown-menu dropdown-menu-md p-0">
                           <ul class="list-group list-group-flush px-lg-4">
                              <li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                                 <a href="#" class="list-group-item list-group-item-action dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="media d-flex">
                                       <figure style="width:20px"><img alt="Image placeholder" src="" class="svg-inject img-fluid" style="height:20px"></figure>
                                       <div class="media-body ml-2">
                                          <h6 class="heading mb-0">Authentication</h6>
                                          <p class="mb-0">Examples for any scenario.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="dropdown-menu">
                                    <a class="dropdown-item" href="../authentication/login-basic.html">Login Basic </a><a class="dropdown-item" href="../authentication/login-side-cover.html">Login Side Cover </a><a class="dropdown-item" href="../authentication/login-overlay.html">Login Overlay</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="../authentication/register-basic.html">Register Basic </a><a class="dropdown-item" href="../authentication/register-side-cover.html">Register Side Cover </a><a class="dropdown-item" href="../authentication/register-overlay.html">Register Overlay</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="../authentication/recover-basic.html">Recover Basic </a><a class="dropdown-item" href="../authentication/recover-side-cover.html">Recover Side Cover </a><a class="dropdown-item" href="../authentication/recover-overlay.html">Recover Overlay</a>
                                 </div>
                              </li>
                              <li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                                 <a href="#" class="list-group-item list-group-item-action dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="media d-flex">
                                       <figure style="width:20px"><img alt="Image placeholder" src="" class="svg-inject img-fluid" style="height:20px"></figure>
                                       <div class="media-body ml-2">
                                          <h6 class="heading mb-0">Account</h6>
                                          <p class="mb-0">Account management made cool.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="dropdown-menu"><a class="dropdown-item" href="../account/profile.html">Profile </a><a class="dropdown-item" href="../account/settings.html">Settings </a><a class="dropdown-item" href="../account/billing.html">Billing </a><a class="dropdown-item" href="../account/cards.html">Cards </a><a class="dropdown-item" href="../account/security.html">Security </a><a class="dropdown-item" href="../account/users.html">Users </a><a class="dropdown-item" href="../account/notifications.html">Notifications</a></div>
                              </li>
                              <li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                                 <a href="#" class="list-group-item list-group-item-action dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="media d-flex">
                                       <figure style="width:20px"><img alt="Image placeholder" src="" class="svg-inject img-fluid" style="height:20px"></figure>
                                       <div class="media-body ml-2">
                                          <h6 class="heading mb-0">Boards</h6>
                                          <p class="mb-0">Account management made cool.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="dropdown-menu"><a class="dropdown-item" href="../boards/overview.html">Overview </a><a class="dropdown-item" href="../boards/projects.html">Projects </a><a class="dropdown-item" href="../boards/tasks.html">Tasks </a><a class="dropdown-item" href="../boards/integrations.html">Integrations</a></div>
                              </li>
                              <li>
                                 <div class="d-none d-lg-block py-3 bg-transparent">
                                    <div class="row">
                                       <div class="col-sm-6"><a href="../boards/overview.html" class="dropdown-item">Dashboard</a> <a href="../boards/projects.html" class="dropdown-item">Projects</a> <a href="../boards/tasks.html" class="dropdown-item">Tasks</a> <a href="../boards/integrations.html" class="dropdown-item">Integrations</a></div>
                                       <div class="col-sm-6"><a href="../account/settings.html" class="dropdown-item">Settings</a> <a href="../account/billing.html" class="dropdown-item">Billing</a> <a href="../account/cards.html" class="dropdown-item">Cards</a> <a href="../account/users.html" class="dropdown-item">Users</a></div>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </li>
                     <li class="nav-item nav-item-spaced dropdown dropdown-animate" data-toggle="hover">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Docs</a>
                        <div class="dropdown-menu dropdown-menu-md p-0">
                           <div class="list-group list-group-flush px-lg-4">
                              <a href="../../docs/index.html" class="list-group-item list-group-item-action" role="button">
                                 <div class="d-flex">
                                    <span class="h6">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book">
                                          <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                          <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                                       </svg>
                                    </span>
                                    <div class="ml-3">
                                       <h6 class="heading mb-0">Documentation</h6>
                                       <small class="text-sm">Quick setup and build tools</small>
                                    </div>
                                 </div>
                              </a>
                              <div class="py-3">
                                 <div class="row">
                                    <div class="col-sm-6"><a href="../../docs/getting-started/quick-start.html" class="dropdown-item">Quick Start</a> <a href="../../docs/getting-started/build-tools.html" class="dropdown-item">Build Tools</a> <a href="../../docs/getting-started/customization.html" class="dropdown-item">Customization</a> <a href="../../docs/getting-started/file-structure.html" class="dropdown-item">File Structure</a> <a href="../../docs/components/alerts.html" class="dropdown-item">Components</a></div>
                                    <div class="col-sm-6"><a href="../../docs/styleguide/icons.html" class="dropdown-item">Icons</a> <a href="../../docs/styleguide/svg-icons.html" class="dropdown-item">SVG Icons</a> <a href="../../docs/styleguide/illustrations.html" class="dropdown-item">Illustrations</a> <a href="../../docs/plugins/animate.html" class="dropdown-item">Plugins</a></div>
                                 </div>
                              </div>
                              <a href="../../docs/components/alerts.html" class="list-group-item list-group-item-action" role="button">
                                 <div class="d-flex">
                                    <span class="h6">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-code">
                                          <polyline points="16 18 22 12 16 6"></polyline>
                                          <polyline points="8 6 2 12 8 18"></polyline>
                                       </svg>
                                    </span>
                                    <div class="ml-3">
                                       <h6 class="heading mb-0">Components</h6>
                                       <small class="text-sm">Component examples and more</small>
                                    </div>
                                 </div>
                              </a>
                              <a href="../../docs/changelog.html" class="list-group-item list-group-item-action" role="button">
                                 <div class="d-flex">
                                    <span class="h6">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                                          <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                          <polyline points="14 2 14 8 20 8"></polyline>
                                          <line x1="16" y1="13" x2="8" y2="13"></line>
                                          <line x1="16" y1="17" x2="8" y2="17"></line>
                                          <polyline points="10 9 9 9 8 9"></polyline>
                                       </svg>
                                    </span>
                                    <div class="ml-3">
                                       <h6 class="heading mb-0">Changelog</h6>
                                       <small class="text-sm">Component examples and more</small>
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>
                     </li>
                  </ul>
                  <ul class="navbar-nav align-items-lg-center d-none d-lg-flex ml-lg-auto">
                     @guest
                      <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                           
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    
                     <li class="nav-item">
                        <a href="https://themes.getbootstrap.com/product/quick-website-ui-kit-2/" class="btn btn-sm btn-warning btn-icon ml-3" target="_blank">
                           <span class="btn-inner--icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag">
                                 <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                 <line x1="3" y1="6" x2="21" y2="6"></line>
                                 <path d="M16 10a4 4 0 0 1-8 0"></path>
                              </svg>
                           </span>
                           <span class="btn-inner--text">Buy now</span>
                        </a>
                     </li>
                  </ul>
                  <div class="d-lg-none px-4 text-center"><a href="https://themes.getbootstrap.com/product/quick-website-ui-kit-2/" class="btn btn-block btn-sm btn-primary" target="_blank">Purchase now</a></div>
               </div>
            </div>
         </nav>
      </header>

 @yield('content')
      

    <script src="{{ asset('libs/jquery/dist/jquery.min.js') }}"></script>
      <script src="{{ asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('libs/svg-injector/dist/svg-injector.min.js') }}"></script>
      <script src="{{ asset('libs/feather-icons/dist/feather.min.js') }}"></script>
      <script src="{{ asset('libs/in-view/dist/in-view.min.js') }}"></script>
      <script src="{{ asset('libs/sticky-kit/dist/sticky-kit.min.js') }}"></script>
      <script src="{{ asset('libs/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
      <script src="{{ asset('libs/swiper/dist/js/swiper.min.js') }}"></script>
      <script src="{{ asset('libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.js') }}"></script>
      <script src="{{ asset('js/quick-website.js') }}"></script>
      <script>feather.replace({width:"1em",height:"1em"})</script>
</body>
</html>
