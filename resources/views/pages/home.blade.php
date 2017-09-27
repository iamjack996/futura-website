

@extends('layouts.main')
@section('title','首頁')
@section('image','')
@section('description','透過美好的實習，引導未來職場上的競爭力，同時吸收前輩們的經驗，結交共同興趣的朋友，強化自身的能力和遠見！')
@section('head')
@stop
@section('content')
@include('layouts/navbar')
@include('partials.status-panel')
<header class="home-header">
   <div class="container-fluid text-center">
      <div class="header-title">
         <h1>用最美好實習，累積堅強實力。</h1>
         <a href="{{ Route('public.intern') }}">查看所有實習</a>
      </div>
   </div>
   <div class="header-image-size">
   </div>
</header>
<div class="container">
   <h1 class="intern-kind">熱門實習</h1>
   <div class="brand-div-line-center"></div>
   <div class="container">
      <div class="row cards-container">
         <div class="col-sm-6 col-md-4 fr-card">
            <div class="card-info">
               <div class="card-title">
                  <div class="title-left">
                     <a href="">
                        <h2>我是標題</h2>
                     </a>
                     <h3>前端實習生</h3>
                  </div>
                  <div class="title-right">
                     <a href="">
                        <h3>科技</h3>
                     </a>
                  </div>
               </div>
               <div class="card-content">
                  <div class="container">
                     <div class="card-detail">
                        <p>I'm 簡介</p>
                     </div>
                     <div class="card-bottom">
                        <a href="" style="color: #00aaff;">
                           <p>電獺股份有限公司</p>
                        </a>
                        <p>14 views</p>
                        <p>2017/9/27</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
@include('layouts/footer')
@stop
@stop

