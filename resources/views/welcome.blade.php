@extends('layouts.app')

@section('content')
      <div id="omnisearch" class="omnisearch">
         <div class="container">
            <div class="omnisearch-container">
               <form class="omnisearch-form">
                  <div class="form-group">
                     <div class="input-group input-group-merge input-group-flush">
                        <div class="input-group-prepend">
                           <span class="input-group-text">
                              <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                 <circle cx="11" cy="11" r="8"></circle>
                                 <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                              </svg>
                           </span>
                        </div>
                        <input type="text" class="form-control" placeholder="Type and hit enter ...">
                     </div>
                  </div>
               </form>
               <div class="omnisearch-suggestions">
                  <h6 class="heading">Search Suggestions</h6>
                  <div class="row">
                     <div class="col-sm-12">
                        <ul class="list-unstyled mb-0">
                           <li>
                              <a class="list-link" href="#">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                 </svg>
                                 <span>macbook pro</span> in Laptops
                              </a>
                           </li>
                           <li>
                              <a class="list-link" href="#">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                 </svg>
                                 <span>iphone 8</span> in Smartphones
                              </a>
                           </li>
                           <li>
                              <a class="list-link" href="#">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                 </svg>
                                 <span>macbook pro</span> in Laptops
                              </a>
                           </li>
                           <li>
                              <a class="list-link" href="#">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                 </svg>
                                 <span>beats pro solo 3</span> in Headphones
                              </a>
                           </li>
                           <li>
                              <a class="list-link" href="#">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                 </svg>
                                 <span>smasung galaxy 10</span> in Phones
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <section class="slice slice-lg bg-primary">
         <div data-offset-top="#navbar-main" style="padding-top: 59px;">
            <div class="container d-flex align-items-center text-center text-lg-left pt-4">
               <div class="col px-0">
                  <div class="row row-grid align-items-center">
                     <div class="col-lg-6 pr-lg-5">
                        <h1 class="display-4 text-white mb-4">Speed up your development with <strong class="text-warning">Quick.</strong></h1>
                        <p class="lead text-white opacity-8">Build a amazing websites with Quick's custom-built, flexible, modern components and features.</p>
                        <div class="mt-5"><a href="#sct-next" class="btn btn-white my-2" data-scroll-to="" data-scroll-to-offset="85">See features</a> <a href="../../docs/index.html" class="btn btn-outline-white my-2">Documentation</a></div>
                     </div>
                     <div class="col-lg-6">
                        <div class="row mx-n2">
                           <div class="col-sm-6 mt-sm-6 px-sm-2">
                              <div class="card border-0 mb-3">
                                 <div class="h-100"><img class="card-img-top" src="/img/theme/light/img-2-1000x1000.jpg" alt="Card image cap"></div>
                                 <div class="card-body p-3">
                                    <div class="d-flex align-items-center">
                                       <div><span class="avatar avatar-sm rounded-circle bg-warning text-white">HR</span></div>
                                       <div class="pl-3"><span class="h6 text-sm mb-0">Heather Wrights</span></div>
                                       <div class="ml-auto">
                                          <div class="actions">
                                             <a href="#!" class="action-item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                                                   <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                                </svg>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="card shadow-none mb-3">
                                 <div class="p-3 d-flex">
                                    <div>
                                       <div class="icon icon-shape rounded-circle bg-success text-white mr-4">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                             <polyline points="20 6 9 17 4 12"></polyline>
                                          </svg>
                                       </div>
                                    </div>
                                    <div>
                                       <span class="h6">300+ components</span>
                                       <p class="text-sm text-muted mb-0">Built to be customized.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-6 px-sm-2">
                              <div class="card mb-3">
                                 <div class="card-body py-5 text-center h-100">
                                    <div class="mb-4 w-50 mx-auto"><img src="/img/clients/svg/airbnb.svg" alt="Image placeholder" class="img-fluid"></div>
                                    <span class="static-rating d-block">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star star voted">
                                          <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                       </svg>
                                       <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star star voted">
                                          <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                       </svg>
                                       <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star star voted">
                                          <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                       </svg>
                                       <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star star voted">
                                          <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                       </svg>
                                       <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star star">
                                          <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                       </svg>
                                    </span>
                                    <h5 class="h6 mt-4 mb-1">4.95 out of 5 stars</h5>
                                    <p class="text-muted text-sm mb-0">from 23 reviews</p>
                                 </div>
                              </div>
                              <div class="card">
                                 <div class="card-body text-center">
                                    <a href="#" class="avatar rounded-circle avatar-lg hover-translate-y-n3"><img alt="Image placeholder" src="/img/theme/light/company-1.png"> </a><a href="#" class="d-block h6 mt-3 mb-4">Website UI Kit</a>
                                    <div class="avatar-group hover-avatar-ungroup mb-2"><a href="#" class="avatar rounded-circle avatar-sm"><img alt="Image placeholder" src="/img/theme/light/person-1.jpg" class=""> </a><a href="#" class="avatar rounded-circle avatar-sm"><img alt="Image placeholder" src="/img/theme/light/person-2.jpg" class=""> </a><a href="#" class="avatar rounded-circle avatar-sm"><img alt="Image placeholder" src="/img/theme/light/person-3.jpg" class=""></a></div>
                                    <span class="clearfix"></span>
                                    <div class="mt-3 pt-3 delimiter-top">
                                       <div class="actions">
                                          <a href="#!" class="action-item mr-3">
                                             <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-paperclip">
                                                <path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"></path>
                                             </svg>
                                          </a>
                                          <a href="#!" class="action-item mr-3">
                                             <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                             </svg>
                                          </a>
                                          <a href="#!" class="action-item">
                                             <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                             </svg>
                                          </a>
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
         </div>
         <div class="shape-container shape-line shape-position-bottom">
            <svg width="2560px" height="100px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100" xml:space="preserve" class="">
               <polygon points="2560 0 2560 100 0 100"></polygon>
            </svg>
         </div>
      </section>
      <section class="slice" id="sct-next">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-6 row">
                  <div class="col-sm-4">
                     <div class="card shadow-lg rounded-lg border-0 mb-sm-0">
                        <div class="p-4 text-center text-sm-left">
                           <h3 class="h4 mb-0"><span class="counter h2 font-weight-bolder counting-finished" data-from="0" data-to="10" data-speed="3000" data-refresh-interval="200">10</span> <span class="counter-extra font-weight-light ml-n1">k</span></h3>
                           <p class="text-muted mb-0">Customers</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="card shadow-lg rounded-lg border-0 mb-sm-0">
                        <div class="p-4 text-center text-sm-left">
                           <h3 class="h4 mb-0"><span class="counter h2 font-weight-bolder counting-finished" data-from="0" data-to="50" data-speed="3000" data-refresh-interval="200">50</span> <span class="counter-extra font-weight-light ml-n1">k</span></h3>
                           <p class="text-muted mb-0">Downloads</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="card shadow-lg rounded-lg border-0 mb-sm-0">
                        <div class="p-4 text-center text-sm-left">
                           <h3 class="h4 mb-0"><span class="counter h2 font-weight-bolder counting-finished" data-from="0" data-to="98" data-speed="3000" data-refresh-interval="200">98</span> <span class="counter-extra font-weight-light ml-n1">%</span></h3>
                           <p class="text-muted mb-0">Happy users</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="slice slice-lg delimiter-bottom">
         <div class="container">
            <div class="row justify-content-center mb-6">
               <div class="col-lg-7 text-center">
                  <h1 class="mb-4">Code faster and better</h1>
                  <p class="lead lh-190">With an intuitive markup, powerful and lightning fast build tools, Quick has everything you need to turn your ideas into incredible products.</p>
               </div>
            </div>
            <div class="row">
               <div class="col-md-7 mx-auto"><img alt="Image placeholder" src="/img/svg/illustrations/illustration-4.svg" class="img-fluid"></div>
            </div>
         </div>
      </section>
      <section class="slice slice-lg delimiter-bottom">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-md-10">
                  <span class="badge badge-primary badge-pill">Key features</span>
                  <h5 class="h5 lh-180 mt-4 mb-6">Quick helps you build beautiful websites that stand out and automatically adapt to your style.</h5>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-3 col-sm-6 mb-lg-0">
                  <div class="card hover-translate-y-n10 hover-shadow-lg">
                     <div class="card-body">
                        <div class="pb-4"><img alt="Image placeholder" src="" class="svg-inject" style="height:50px;width:50px"></div>
                        <div class="pt-2 pb-3">
                           <h5>Modular</h5>
                           <p class="text-muted mb-0">All components are built to be used in any combination.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <div class="card hover-translate-y-n10 hover-shadow-lg mb-lg-0">
                     <div class="card-body">
                        <div class="pb-4"><img alt="Image placeholder" src="" class="svg-inject" style="height:50px;width:50px"></div>
                        <div class="pt-2 pb-3">
                           <h5>Responsive</h5>
                           <p class="text-muted mb-0">Quick is optimized to look and work great on most devices.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <div class="card hover-translate-y-n10 hover-shadow-lg mb-lg-0">
                     <div class="card-body">
                        <div class="pb-4"><img alt="Image placeholder" src="" class="svg-inject" style="height:50px;width:50px"></div>
                        <div class="pt-2 pb-3">
                           <h5>Scalable</h5>
                           <p class="text-muted mb-0">Remain consistent while developing new features and pages.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <div class="card hover-translate-y-n10 hover-shadow-lg mb-lg-0">
                     <div class="card-body">
                        <div class="pb-4"><img alt="Image placeholder" src="" class="svg-inject" style="height:50px;width:50px"></div>
                        <div class="pt-2 pb-3">
                           <h5>Customizable</h5>
                           <p class="text-muted mb-0">Change a few variables and the whole theme adapts.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="slice slice-lg">
         <div class="container container-lg">
            <div class="row row-grid align-items-center">
               <div class="col-lg-5">
                  <span class="badge badge-primary badge-pill">Build tools</span>
                  <h3 class="h2 mt-4">Built for developers</h3>
                  <p class="mb-4 lh-190">Quick has all the right tools in order to make your website building process a breeze and automatize your time-consuming tasks in your development workflow.</p>
                  <ul class="list-unstyled">
                     <li class="py-2">
                        <div class="d-flex align-items-center">
                           <div>
                              <div class="badge badge-circle rounded-circle badge-success mr-3">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                 </svg>
                              </div>
                           </div>
                           <div>
                              <p class="mb-0">Tones of SASS variables</p>
                           </div>
                        </div>
                     </li>
                     <li class="py-2">
                        <div class="d-flex align-items-center">
                           <div>
                              <div class="badge badge-circle rounded-circle badge-success mr-3">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                 </svg>
                              </div>
                           </div>
                           <div>
                              <p class="mb-0">Create your own skin to match your brand</p>
                           </div>
                        </div>
                     </li>
                     <li class="py-2">
                        <div class="d-flex align-items-center">
                           <div>
                              <div class="badge badge-circle rounded-circle badge-success mr-3">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                 </svg>
                              </div>
                           </div>
                           <div>
                              <p class="mb-0">Use Gulp to prepare all assets for production</p>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="col-lg-6 ml-lg-auto">
                  <div class="position-relative pt-md-5 pr-md-5 pt-lg-5 pt-xl-7 pr-xl-5">
                     <div class="card border-0 shadow-lg zindex-100 col-md-8 px-0 position-md-absolute top-md-0 right-md-n0 right-lg-n3 right-xl-n5 zindex-100">
                        <figure><img alt="Image placeholder" src="/img/theme/light/img-4-1000x800.jpg" class="card-img"></figure>
                        <div class="card-img-overlay d-flex">
                           <div class="text-center">
                              <a href="https://www.youtube.com/watch?v=zodT9bCdIiI" class="btn btn-xs btn-warning btn-icon" data-fancybox="">
                                 <span class="btn-inner--text">Play video</span> 
                                 <span class="btn-inner--icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-play">
                                       <polygon points="5 3 19 12 5 21 5 3"></polygon>
                                    </svg>
                                 </span>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header pt-4 px-5">
                           <h6 class="h5 mb-0">Awesome projects</h6>
                        </div>
                        <div class="card-body pt-0 px-5">
                           <div class="list-group list-group-flush">
                              <div class="list-group-item py-4 px-0">
                                 <div class="d-flex justify-content-between mb-2">
                                    <div>
                                       <h6 class="progress-text mb-1 d-block">Create the new logo</h6>
                                    </div>
                                    <div class="text-right">
                                       <span class="h6 font-weight-light">3:50</span> 
                                       <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right ml-2">
                                          <polyline points="9 18 15 12 9 6"></polyline>
                                       </svg>
                                    </div>
                                 </div>
                                 <div class="progress progress-xs mb-0">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width:40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                 </div>
                              </div>
                              <div class="list-group-item py-4 px-0">
                                 <div class="d-flex justify-content-between mb-2">
                                    <div>
                                       <h6 class="progress-text mb-1 d-block">Set up the color palette</h6>
                                    </div>
                                    <div class="text-right">
                                       <span class="h6 font-weight-light">4:00</span> 
                                       <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right ml-2">
                                          <polyline points="9 18 15 12 9 6"></polyline>
                                       </svg>
                                    </div>
                                 </div>
                                 <div class="progress progress-xs mb-0">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width:60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                 </div>
                              </div>
                              <div class="list-group-item py-4 px-0">
                                 <div class="d-flex justify-content-between mb-2">
                                    <div>
                                       <h6 class="progress-text mb-1 d-block">Wireframe and prototype</h6>
                                    </div>
                                    <div class="text-right">
                                       <span class="h6 font-weight-light">6:50</span> 
                                       <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right ml-2">
                                          <polyline points="9 18 15 12 9 6"></polyline>
                                       </svg>
                                    </div>
                                 </div>
                                 <div class="progress progress-xs mb-0">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width:80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="slice slice-lg">
         <div class="container-fluid">
            <div class="jumbotron bg-dark shadow-lg mb-0">
               <img src="/img/svg/backgrounds/dot-map.svg" alt="Image placeholder" class="img-fluid img-as-bg opacity-7">
               <div class="container">
                  <div class="row py-6">
                     <div class="col-lg-10">
                        <h2 class="h3 lh-170 text-white"><strong class="text-warning">Dark Mode</strong> brings a whole new experience to your website. It’s carefully designed to make every element on the screen easier on your eyes and is seamlessly integrated throughout the theme.</h2>
                        <div class="mt-5">
                           <a href="#" class="btn btn-lg btn-warning btn-icon mb-3 mb-lg-0 d-none">
                              <span class="btn-inner--icon">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon">
                                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                                 </svg>
                              </span>
                              <span class="btn-inner--text">Switch to Dark Mode</span> 
                           </a>
                           <a href="../../docs/getting-started/skins.html" target="_blank" class="btn btn-lg btn-warning btn-icon mb-3 mb-lg-0">
                              <span class="btn-inner--text">Learn more</span> 
                              <span class="btn-inner--icon">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                 </svg>
                              </span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="slice">
         <div class="container">
            <div class="section-process-step">
               <div class="row row-grid justify-content-between align-items-center">
                  <div class="col-lg-5 order-lg-2">
                     <h5 class="h3">Need a quick admin panel for your website?</h5>
                     <p class="lead my-4">With Quick you get components and examples, including tons of variables that will help you customize this theme with ease.</p>
                     <ul class="list-unstyled mb-0">
                        <li class="py-2">
                           <div class="d-flex align-items-center">
                              <div>
                                 <div class="icon icon-shape bg-primary text-white icon-sm rounded-circle mr-3"><i class="fas fa-file-invoice"></i></div>
                              </div>
                              <div><span class="h6 mb-0">Perfect for modern startups</span></div>
                           </div>
                        </li>
                        <li class="py-2">
                           <div class="d-flex align-items-center">
                              <div>
                                 <div class="icon icon-shape bg-primary text-white icon-sm rounded-circle mr-3"><i class="fas fa-store-alt"></i></div>
                              </div>
                              <div><span class="h6 mb-0">Ready to be customized</span></div>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <div class="col-lg-6 order-lg-1">
                     <div class="card mb-0 mr-lg-5">
                        <div class="card-body p-2"><img alt="Image placeholder" src="/img/theme/light/screen-1-1000x800.jpg" class="img-fluid shadow rounded"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="section-process-step">
               <div class="row row-grid justify-content-between align-items-center">
                  <div class="col-lg-5">
                     <h5 class="h3">A modern project management dashboard</h5>
                     <p class="lead my-4">With Quick you get components and examples, including tons of variables that will help you customize this theme with ease.</p>
                     <ul class="list-unstyled mb-0">
                        <li class="py-2">
                           <div class="d-flex align-items-center">
                              <div>
                                 <div class="icon icon-shape bg-primary text-white icon-sm rounded-circle mr-3"><i class="fas fa-file-invoice"></i></div>
                              </div>
                              <div><span class="h6 mb-0">Perfect for modern startups</span></div>
                           </div>
                        </li>
                        <li class="py-2">
                           <div class="d-flex align-items-center">
                              <div>
                                 <div class="icon icon-shape bg-primary text-white icon-sm rounded-circle mr-3"><i class="fas fa-store-alt"></i></div>
                              </div>
                              <div><span class="h6 mb-0">Ready to be customized</span></div>
                           </div>
                        </li>
                        <li class="py-2">
                           <div class="d-flex align-items-center">
                              <div>
                                 <div class="icon icon-shape bg-primary text-white icon-sm rounded-circle mr-3"><i class="fas fa-store-alt"></i></div>
                              </div>
                              <div><span class="h6 mb-0">Designed for every devices</span></div>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <div class="col-lg-6">
                     <div class="card mb-0 ml-lg-5">
                        <div class="card-body p-2"><img alt="Image placeholder" src="/img/theme/light/screen-2-1000x800.jpg" class="img-fluid shadow rounded"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="slice slice-lg bg-primary">
         <div class="shape-container shape-line shape-position-top shape-orientation-inverse">
            <svg width="2560px" height="100px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100" xml:space="preserve" class="">
               <polygon points="2560 0 2560 100 0 100"></polygon>
            </svg>
         </div>
         <div class="container pt-md-5">
            <div class="row justify-content-center mb-5">
               <div class="col-lg-7 text-lg-center">
                  <h1 class="mb-4 text-white">Features that you really need</h1>
                  <p class="lh-190 text-white opacity-8">With an intuitive markup, powerful and lightning fast build tools, Quick has everything you need to turn your ideas into incredible products.</p>
               </div>
            </div>
            <div class="row mx-lg-n4">
               <div class="col-lg-4 col-md-6 px-lg-4">
                  <div class="card">
                     <div class="p-3 d-flex">
                        <div>
                           <div class="icon icon-shape rounded-circle bg-warning text-white mr-4">
                              <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                 <polyline points="20 6 9 17 4 12"></polyline>
                              </svg>
                           </div>
                        </div>
                        <div>
                           <span class="h6">100% Responsive</span>
                           <p class="text-sm text-muted mb-0">Built to be customized.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 px-lg-4">
                  <div class="card">
                     <div class="p-3 d-flex">
                        <div>
                           <div class="icon icon-shape rounded-circle bg-primary text-white mr-4">
                              <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                 <polyline points="20 6 9 17 4 12"></polyline>
                              </svg>
                           </div>
                        </div>
                        <div>
                           <span class="h6">Based on Bootstrap 4</span>
                           <p class="text-sm text-muted mb-0">Built to be customized.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 px-lg-4">
                  <div class="card">
                     <div class="p-3 d-flex">
                        <div>
                           <div class="icon icon-shape rounded-circle bg-danger text-white mr-4">
                              <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                 <polyline points="20 6 9 17 4 12"></polyline>
                              </svg>
                           </div>
                        </div>
                        <div>
                           <span class="h6">Built with SASS</span>
                           <p class="text-sm text-muted mb-0">Built to be customized.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 px-lg-4">
                  <div class="card">
                     <div class="p-3 d-flex">
                        <div>
                           <div class="icon icon-shape rounded-circle bg-success text-white mr-4">
                              <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                 <polyline points="20 6 9 17 4 12"></polyline>
                              </svg>
                           </div>
                        </div>
                        <div>
                           <span class="h6">100+ custom components</span>
                           <p class="text-sm text-muted mb-0">Built to be customized.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 px-lg-4">
                  <div class="card">
                     <div class="p-3 d-flex">
                        <div>
                           <div class="icon icon-shape rounded-circle bg-info text-white mr-4">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                 <polyline points="20 6 9 17 4 12"></polyline>
                              </svg>
                           </div>
                        </div>
                        <div>
                           <span class="h6">Cool widgets</span>
                           <p class="text-sm text-muted mb-0">Built to be customized.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 px-lg-4">
                  <div class="card">
                     <div class="p-3 d-flex">
                        <div>
                           <div class="icon icon-shape rounded-circle bg-warning text-white mr-4">
                              <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                 <polyline points="20 6 9 17 4 12"></polyline>
                              </svg>
                           </div>
                        </div>
                        <div>
                           <span class="h6">Bootstrap Flexbox Grid</span>
                           <p class="text-sm text-muted mb-0">Built to be customized.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 px-lg-4">
                  <div class="card">
                     <div class="p-3 d-flex">
                        <div>
                           <div>
                              <div class="icon icon-shape rounded-circle bg-info text-white mr-4">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                 </svg>
                              </div>
                           </div>
                        </div>
                        <div>
                           <span class="h6">Premium SVG icons</span>
                           <p class="text-sm text-muted mb-0">Built to be customized.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 px-lg-4">
                  <div class="card">
                     <div class="p-3 d-flex">
                        <div>
                           <div>
                              <div class="icon icon-shape rounded-circle bg-danger text-white mr-4">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                 </svg>
                              </div>
                           </div>
                        </div>
                        <div>
                           <span class="h6">Integrated plugins</span>
                           <p class="text-sm text-muted mb-0">Built to be customized.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 px-lg-4">
                  <div class="card">
                     <div class="p-3 d-flex">
                        <div>
                           <div>
                              <div class="icon icon-shape rounded-circle bg-primary text-white mr-4">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                 </svg>
                              </div>
                           </div>
                        </div>
                        <div>
                           <span class="h6">Smart HTML markup</span>
                           <p class="text-sm text-muted mb-0">Built to be customized.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="slice slice-lg bg-section-secondary">
         <div class="container">
            <div class="row mb-5 justify-content-center text-center">
               <div class="col-lg-8 col-md-10">
                  <h2 class="mt-4">Simple, Straight Pricing</h2>
                  <div class="mt-2">
                     <p class="lead lh-180">Thousands of developers around the world have already made Quick the main tool for building websites.</p>
                  </div>
               </div>
            </div>
            <div class="row justify-content-center">
               <div class="col-lg-4 col-md">
                  <div class="card card-pricing text-center px-3 hover-scale-110">
                     <div class="card-header py-5 border-0 delimiter-bottom">
                        <div class="h1 text-center mb-0">$<span class="price font-weight-bolder">49</span></div>
                        <span class="h6 text-muted">Standard License</span>
                     </div>
                     <div class="card-body">
                        <ul class="list-unstyled text-sm mb-4">
                           <li>1 end product</li>
                           <li>Use for personal or a client</li>
                           <li>Use in a free end product</li>
                           <li>6 months technical support</li>
                        </ul>
                        <a href="https://themes.getbootstrap.com/product/quick-website-ui-kit-2/" class="btn btn-sm btn-warning hover-translate-y-n3 hover-shadow-lg mb-3" target="_blank">Purchase now</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md">
                  <div class="card card-pricing bg-dark text-center px-3 border-0 hover-scale-110">
                     <div class="card-header py-5 border-0 delimiter-bottom">
                        <div class="h1 text-white text-center mb-0">$<span class="price font-weight-bolder">590</span></div>
                        <span class="h6 text-white">Extended License</span>
                     </div>
                     <div class="card-body">
                        <ul class="list-unstyled text-white text-sm opacity-8 mb-4">
                           <li>1 end product</li>
                           <li>Use for personal or a client</li>
                           <li>Use in a free end product</li>
                           <li>Use in an end product that is <strong class="text-success text-underline--dashed">sold</strong></li>
                           <li>6 months technical support</li>
                        </ul>
                        <a href="https://themes.getbootstrap.com/product/quick-website-ui-kit-2/" class="btn btn-sm btn-white hover-translate-y-n3 hover-shadow-lg mb-3" target="_blank">Purchase now</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="mt-5 text-center">
               <p class="mb-2">Both pricings contains all 6 months free support. Need more?</p>
               <a href="#" class="text-primary text-underline--dashed">
                  Contact us
                  <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right ml-2">
                     <line x1="5" y1="12" x2="19" y2="12"></line>
                     <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
               </a>
            </div>
         </div>
      </section>
      <footer class="position-relative" id="footer-main">
         <div class="footer pt-lg-7 footer-dark bg-dark">
            <div class="shape-container shape-line shape-position-top shape-orientation-inverse">
               <svg width="2560px" height="100px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100" xml:space="preserve" class="fill-section-secondary">
                  <polygon points="2560 0 2560 100 0 100"></polygon>
               </svg>
            </div>
            <div class="container pt-4">
               <div class="row justify-content-center">
                  <div class="col-lg-12">
                     <div class="row align-items-center">
                        <div class="col-lg-7">
                           <h3 class="text-secondary mb-2">Brilliant solutions for your ideas</h3>
                           <p class="lead mb-0 text-white opacity-8">Build modern looking websites fast and easy using Quick.</p>
                        </div>
                        <div class="col-lg-5 text-lg-right mt-4 mt-lg-0">
                           <a href="../../docs/index.html" class="btn btn-white btn-icon my-2" target="_blank">
                              <span class="btn-inner--icon">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book text-primary">
                                    <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                    <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                                 </svg>
                              </span>
                              <span class="btn-inner--text">Documentation</span> 
                           </a>
                           <a href="https://themes.getbootstrap.com/product/quick-website-ui-kit-2/" class="btn btn-primary my-2 ml-0 ml-sm-3" target="_blank">Purchase now</a>
                        </div>
                     </div>
                  </div>
               </div>
               <hr class="divider divider-fade divider-dark my-5">
               <div class="row">
                  <div class="col-lg-4 mb-5 mb-lg-0">
                     <a href="../../index-2.html"><img alt="Image placeholder" src="/img/brand/light.svg" id="footer-logo"></a>
                     <p class="mt-4 text-sm opacity-8 pr-lg-4">Webpixels attempts to bring the best development experience to designers and developers by offering the tools needed for having a quick and solid start in most web projects.</p>
                     <ul class="nav mt-4">
                        <li class="nav-item"><a class="nav-link pl-0" href="https://dribbble.com/webpixels" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                        <li class="nav-item"><a class="nav-link" href="https://github.com/webpixels" target="_blank"><i class="fab fa-github"></i></a></li>
                        <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/webpixelsofficial" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/webpixels" target="_blank"><i class="fab fa-facebook"></i></a></li>
                     </ul>
                  </div>
                  <div class="col-lg-2 col-6 col-sm-4 ml-lg-auto mb-5 mb-lg-0">
                     <h6 class="heading mb-3">Account</h6>
                     <ul class="list-unstyled">
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Settings</a></li>
                        <li><a href="#">Billing</a></li>
                        <li><a href="#">Notifications</a></li>
                     </ul>
                  </div>
                  <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
                     <h6 class="heading mb-3">About</h6>
                     <ul class="list-unstyled">
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Careers</a></li>
                     </ul>
                  </div>
                  <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
                     <h6 class="heading mb-3">Company</h6>
                     <ul class="list-unstyled">
                        <li><a href="#">Community</a></li>
                        <li><a href="#">Help center</a></li>
                        <li><a href="#">Support</a></li>
                     </ul>
                  </div>
               </div>
               <hr class="divider divider-fade divider-dark my-4">
               <div class="row align-items-center justify-content-md-between pb-4">
                  <div class="col-md-6">
                     <div class="copyright text-sm font-weight-bold text-center text-md-left">© 2020 <a href="https://webpixels.io/" class="font-weight-bold" target="_blank">Webpixels</a>. All rights reserved</div>
                  </div>
                  <div class="col-md-6">
                     <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
                        <li class="nav-item"><a class="nav-link" href="#">Terms</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Privacy</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Cookies</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <div class="modal fade fixed-right" id="modal-products" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog modal-vertical" role="document">
            <div class="modal-content">
               <div class="modal-header py-3 align-items-center">
                  <div class="modal-title">
                     <h6 class="mb-0">You might like these</h6>
                  </div>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
               </div>
               <div class="modal-body">
                  <p class="text-sm mb-4">Looking for other designs? Check out the other themes we created. Easy to switch, play and develop new websites.</p>
                  <div class="card card-overlay hover-shadow-lg">
                     <div class="h-100"><img src="../../../../webpixels.s3.eu-central-1.amazonaws.com/public/themes/purpose-website-ui-kit.png" class="card-img-top" alt="Purpose Website UI Kit"></div>
                     <div class="card-img-overlay d-flex flex-column align-items-center p-0">
                        <div class="overlay-actions w-100 card-footer mt-auto"><a href="https://themes.getbootstrap.com/product/purpose-website-ui-kit/" class="h6 mb-0 stretched-link" target="_blank">Purpose Website UI Kit</a></div>
                     </div>
                  </div>
                  <div class="card card-overlay hover-shadow-lg">
                     <div class="h-100"><img src="../../../../webpixels.s3.eu-central-1.amazonaws.com/public/themes/purpose-application-ui-kit.png" class="card-img-top" alt="Purpose Application UI Kit"></div>
                     <div class="card-img-overlay d-flex flex-column align-items-center p-0">
                        <div class="overlay-actions w-100 card-footer mt-auto"><a href="https://themes.getbootstrap.com/product/purpose-application-ui-kit/" class="h6 mb-0 stretched-link" target="_blank">Purpose Application UI Kit</a></div>
                     </div>
                  </div>
                  <div class="card card-placeholder align-items-center flex-column justify-content-center border-dashed" style="height:250px">
                     <div class="col text-center">
                        <div class="pt-5">
                           <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-smile text-primary" style="width:50px;height:50px">
                              <circle cx="12" cy="12" r="10"></circle>
                              <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                              <line x1="9" y1="9" x2="9.01" y2="9"></line>
                              <line x1="15" y1="9" x2="15.01" y2="9"></line>
                           </svg>
                           <span class="h5 d-block mt-3">What's next?</span>
                        </div>
                        <p class="text-sm px-4 mt-2 mb-0">We are already working on a new product, so stay tuned.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="customizer"> <a href="#modal-products" data-toggle="modal" class="btn btn-sm btn-white btn-icon-only rounded-circle hover-scale-110 shadow"><span class="btn-inner--icon"><i class="fas fa-images"></i></span></a></div>
      <div class="modal fade fixed-right" id="modal-customizer" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog modal-vertical" role="document">
            <form class="modal-content" id="form-customizer">
               <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-toggle="tooltip" data-placement="left" title="" data-original-title="Close Customizer"><span aria-hidden="true">×</span></button>
                  <div class="text-center mx-auto mt-4 mb-5" style="width:80px"><img alt="Image placeholder" src="" class="svg-inject img-fluid"></div>
                  <h5 class="text-center mb-2">Customize Quick</h5>
                  <p class="text-center mb-4">Customize your preview experience by selecting skin colors and modes.</p>
                  <hr class="mb-4">
                  <h6 class="mb-1">Skin color</h6>
                  <p class="small text-muted mb-3">Set a new theme color palette.</p>
                  <div class="btn-group-toggle row mx-0 mb-5" data-toggle="buttons"><label class="btn btn-sm btn-neutral active col mb-2"><input type="radio" name="skin" value="default" checked="checked"> Default</label> <label class="btn btn-sm btn-neutral col-6 mb-2 mr-0"><input type="radio" name="skin" value="blue"> Blue</label></div>
                  <h6 class="mb-1">Skin mode</h6>
                  <p class="small text-muted mb-3">Set the theme's mode: light or dark.</p>
                  <div class="btn-group-toggle row mx-0 mb-4" data-toggle="buttons">
                     <label class="btn btn-sm btn-neutral active flex-fill mb-2 mr-2">
                        <input type="radio" name="mode" value="light" checked="checked"> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun mr-2">
                           <circle cx="12" cy="12" r="5"></circle>
                           <line x1="12" y1="1" x2="12" y2="3"></line>
                           <line x1="12" y1="21" x2="12" y2="23"></line>
                           <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                           <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                           <line x1="1" y1="12" x2="3" y2="12"></line>
                           <line x1="21" y1="12" x2="23" y2="12"></line>
                           <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                           <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                        </svg>
                        Light
                     </label>
                     <label class="btn btn-sm btn-neutral flex-fill mb-2 mr-2">
                        <input type="radio" name="mode" value="dark"> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon mr-2">
                           <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                        </svg>
                        Dark
                     </label>
                  </div>
               </div>
               <div class="modal-footer border-0"><button type="submit" class="btn btn-block btn-primary mt-auto">Preview</button></div>
            </form>
         </div>
      </div>
    @endsection