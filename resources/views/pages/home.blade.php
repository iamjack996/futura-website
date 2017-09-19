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
         <a href="#">查看所有實習</a>
   </div>

    </div>
    <div class="header-image-size">
    </div>
</header>


<div class="container home-hotintern">
    <h1 class="intern-kind">熱門實習</h1>
    <div class="brand-div-line-center"></div>


<div class="container intern-card-container">
   <div class="intern-card">
      <span class="card-left-left">
         <h2>科技</h2>
      </span>
      <span class="card-left-right">
         <a href="#">
            <h3>我是測試文字我是測試文字我是測試文字我是測試文字</h3>
         </a>
         <p>12345645645646546454456445644564564564564564564645465456456445645645465465</p>
         <div class="card-info">
            <span>
            <i class="fa fa-eye" aria-hidden="true">
            </i>101
            </span>
            <span><i class="fa fa-clock-o" aria-hidden="true"></i>2014-05-06</span>
         </div>
      </span>
   </span>

</div>


   <div class="intern-card">
      <span class="card-left-left">
         <h2>科技</h2>
      </span>
      <span class="card-left-right">
         <a href="#">
            <h3>我是測試文字我是測試文字我是測試文字我是測試文字</h3>
         </a>
         <p>12345645645646546454456445644564564564564564564645465456456445645645465465</p>
         <div class="card-info">
            <span>
            <i class="fa fa-eye" aria-hidden="true">
            </i>101
            </span>
            <span><i class="fa fa-clock-o" aria-hidden="true"></i>2014-05-06</span>
         </div>
      </span>
   </span>

</div>
   <div class="intern-card">
      <span class="card-left-left">
         <h2>科技</h2>
      </span>
      <span class="card-left-right">
         <a href="#">
            <h3>我是測試文字我是測試文字我是測試文字我是測試文字</h3>
         </a>
         <p>12345645645646546454456445644564564564564564564645465456456445645645465465</p>
         <div class="card-info">
            <span>
            <i class="fa fa-eye" aria-hidden="true">
            </i>101
            </span>
            <span><i class="fa fa-clock-o" aria-hidden="true"></i>2014-05-06</span>
         </div>
      </span>
   </span>

</div>
   <div class="intern-card">
      <span class="card-left-left">
         <h2>科技</h2>
      </span>
      <span class="card-left-right">
         <a href="#">
            <h3>我是測試文字我是測試文字我是測試文字我是測試文字</h3>
         </a>
         <p>12345645645646546454456445644564564564564564564645465456456445645645465465</p>
         <div class="card-info">
            <span>
            <i class="fa fa-eye" aria-hidden="true">
            </i>101
            </span>
            <span><i class="fa fa-clock-o" aria-hidden="true"></i>2014-05-06</span>
         </div>
      </span>
   </span>

</div>
</div>
</div>

@include('layouts/footer')

@stop
@stop