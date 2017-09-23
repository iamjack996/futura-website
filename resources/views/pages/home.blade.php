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
    
    <div class="container">
        <div class="row cards-container">
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4 fr-card">
                    
                </div>
            </div>
        </div>
    </div>


</div>


@include('layouts/footer')

@stop
@stop