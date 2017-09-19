@extends('layouts.main')
@section('title','聯絡我們')
@section('image','')
@section('description','如果需要商業合作或是其他的疑問都可以在下方表格告訴我們，我們收到您的訊息之後會盡快回覆，內容可以附上更詳細的聯絡資訊。以便我們聯絡！')
@section('content')
@include('layouts.navbar')
<div class="container contact-page">
   <div class="row">
      <div class="text-center">
         <h1>聯絡我們</h1>
         <p>Hello！如果需要商業合作或是其他的疑問都可以在下方表格告訴我們，我們收到您的訊息之後會盡快回覆，內容可以附上更詳細的聯絡資訊。以便我們聯絡！</p>
      </div>
      <div class="brand-div-line-center"></div>
      <form id="contactForm" data-parsley-validate>
         <div class="row">
            <div class="col-lg-4 col-lg-offset-4">
               <div class="form-group">
                  <label for="name">* 稱 呼</label>
                  <input type="text" class="form-control" name="name" placeholder="填寫完整姓名" maxlength="10" required="required" data-parsley-required-message="請填寫稱呼" data-parsley-trigger="change focusout"  data-parsley-id="1" required>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-4 col-lg-offset-4">
               <div class="form-group">
                  <label for="email">* E-mail</label>
                  <input type="text" class="form-control" name="email" placeholder="填寫完整e-mail" maxlength="35" required="required" data-parsley-required-message="請輸入 E-mail" data-parsley-type-message="請輸入正確的 E-mail" data-parsley-trigger="change focusout" data-parsley-type="email" data-parsley-id="2" required>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-4 col-lg-offset-4">
               <div class="form-group">
                  <label for="content">* 回饋內容</label>
                  <textarea class="form-control" rows="15" name="content" placeholder="內容" required="required" data-parsley-required-message="請填寫內容" data-parsley-trigger="change focusout"  data-parsley-id="3" required></textarea>
               </div>
            </div>
         </div>
         <input type="hidden" name="_token" value="{{ csrf_token() }}">

      </form>
      <div class="row">
         <div class="col-lg-4 col-lg-offset-4">
            <button class="btn btn-success pull-right" id="contactSend" type="submit">傳 送</button>
         </div>
      </div>
         <div class="row text-center">
            <h4>或是寄信到<a href="mailto:futura.noreply@gmail.com"> 服務信箱 </a>，我們收到信件之後會盡快回覆。</h4>
      </div>
   </div>
</div>
</div>
@include('layouts.footer')
@section('footer')
<script src="js/noty.min.js"></script>
@stop
@stop

