@extends('layouts.app')

@section('content')
      <section class="section-half-rounded bg-cover bg-size--cover py-4 py-sm-0" style=background-image:url(/img/backgrounds/img-3.jpg)>
         <div class="container-fluid d-flex flex-column">
            <div class="row align-items-center min-vh-100">
               <div class="col-md-6 col-lg-5 col-xl-4 mx-auto">
                  <div class="card shadow-lg border-0 mb-0">
                     <div class="card-body py-5 px-sm-5">
                        <div>
                           <div class="mb-5 text-center">
                              <h6 class="h3 mb-1">Login</h6>
                              <p class="text-muted mb-0">Sign in to your account to continue.</p>
                           </div>
                           <span class=clearfix></span>
                           <form>
                              <div class=form-group>
                                 <label class=form-control-label>Email address</label>
                                 <div class="input-group input-group-merge">
                                    <input type=email class="form-control form-control-prepend" id=input-email placeholder=name@example.com>
                                    <div class=input-group-prepend><span class=input-group-text><i data-feather=user></i></span></div>
                                 </div>
                              </div>
                              <div class="form-group mb-0">
                                 <div class="d-flex align-items-center justify-content-between">
                                    <div><label class=form-control-label>Password</label></div>
                                    <div class=mb-2><a href=# class="small text-muted text-underline--dashed border-primary" data-toggle=password-text data-target=#input-password>Show password</a></div>
                                 </div>
                                 <div class="input-group input-group-merge">
                                    <input type=password class="form-control form-control-prepend" id=input-password placeholder=Password>
                                    <div class=input-group-prepend><span class=input-group-text><i data-feather=key></i></span></div>
                                 </div>
                              </div>
                              <div class=mt-4><button type=button class="btn btn-block btn-primary">Sign in</button></div>
                           </form>
                           <div class="py-3 text-center"><span class="text-xs text-uppercase">or</span></div>
                           <div class=row>
                              <div class=col-sm-6><a href=# class="btn btn-block btn-neutral btn-icon mb-3 mb-sm-0"><span class=btn-inner--icon><img src=../../assets/img/icons/brands/github.svg alt="Image placeholder"></span><span class=btn-inner--text>Github</span></a></div>
                              <div class=col-sm-6><a href=# class="btn btn-block btn-neutral btn-icon"><span class=btn-inner--icon><img src=../../assets/img/icons/brands/google.svg alt="Image placeholder"></span><span class=btn-inner--text>Google</span></a></div>
                           </div>
                           <div class="mt-4 text-center"><small>Not registered?</small> <a href=register-overlay.html class="small font-weight-bold">Create account</a></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
    @endsection