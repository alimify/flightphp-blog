
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo asset('/assets/css/all.min.css');?>">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo asset('/assets/css/icheck-bootstrap.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo asset('/assets/css/adminlte.min.css?v=3.2.0'); ?>">
<script data-cfasync="false" nonce="007edffb-4449-46c5-9055-407580158c31">try{(function(w,d){!function(ne,nf,ng,nh){if(ne.zaraz)console.error("zaraz is loaded twice");else{ne[ng]=ne[ng]||{};ne[ng].executed=[];ne.zaraz={deferred:[],listeners:[]};ne.zaraz._v="5823";ne.zaraz._n="007edffb-4449-46c5-9055-407580158c31";ne.zaraz.q=[];ne.zaraz._f=function(ni){return async function(){var nj=Array.prototype.slice.call(arguments);ne.zaraz.q.push({m:ni,a:nj})}};for(const nk of["track","set","debug"])ne.zaraz[nk]=ne.zaraz._f(nk);ne.zaraz.init=()=>{var nl=nf.getElementsByTagName(nh)[0],nm=nf.createElement(nh),nn=nf.getElementsByTagName("title")[0];nn&&(ne[ng].t=nf.getElementsByTagName("title")[0].text);ne[ng].x=Math.random();ne[ng].w=ne.screen.width;ne[ng].h=ne.screen.height;ne[ng].j=ne.innerHeight;ne[ng].e=ne.innerWidth;ne[ng].l=ne.location.href;ne[ng].r=nf.referrer;ne[ng].k=ne.screen.colorDepth;ne[ng].n=nf.characterSet;ne[ng].o=(new Date).getTimezoneOffset();if(ne.dataLayer)for(const no of Object.entries(Object.entries(dataLayer).reduce(((np,nq)=>({...np[1],...nq[1]})),{})))zaraz.set(no[0],no[1],{scope:"page"});ne[ng].q=[];for(;ne.zaraz.q.length;){const nr=ne.zaraz.q.shift();ne[ng].q.push(nr)}nm.defer=!0;for(const ns of[localStorage,sessionStorage])Object.keys(ns||{}).filter((nu=>nu.startsWith("_zaraz_"))).forEach((nt=>{try{ne[ng]["z_"+nt.slice(7)]=JSON.parse(ns.getItem(nt))}catch{ne[ng]["z_"+nt.slice(7)]=ns.getItem(nt)}}));nm.referrerPolicy="origin";nm.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(ne[ng])));nl.parentNode.insertBefore(nm,nl)};["complete","interactive"].includes(nf.readyState)?zaraz.init():ne.addEventListener("DOMContentLoaded",zaraz.init)}}(w,d,"zarazData","script");window.zaraz._p=async br=>new Promise((bs=>{if(br){br.e&&br.e.forEach((bt=>{try{const bu=d.querySelector("script[nonce]"),bv=bu?.nonce||bu?.getAttribute("nonce"),bw=d.createElement("script");bv&&(bw.nonce=bv);bw.innerHTML=bt;bw.onload=()=>{d.head.removeChild(bw)};d.head.appendChild(bw)}catch(bx){console.error(`Error executing script: ${bt}\n`,bx)}}));Promise.allSettled((br.f||[]).map((by=>fetch(by[0],by[1]))))}bs()}));zaraz._p({"e":["(function(w,d){})(window,document)"]});})(window,document)}catch(e){throw fetch("/cdn-cgi/zaraz/t"),e;};</script></head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo get_url('/admin/dashboard'); ?>"><b>Admin</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      
      <p class="text-danger text-center"><?php if($message) echo $message??''; ?></p>

      <form action="<?php echo get_url('/admin/login'); ?>" method="post">
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="login" value="login" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!--<p class="mb-0">
        <a href="<?php echo get_url('/admin/register'); ?>" class="text-center">Register a new membership</a>
      </p>-->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>

<!-- jQuery -->
<script src="<?php echo asset('/assets/js/jquery.min.js'); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo asset('/assets/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo asset('/assets/js/adminlte.min.js?v=3.2.0'); ?>"></script>
</body>
</html>
