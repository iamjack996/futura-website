@extends('layouts.main')
@section('title','登入')
@section('head')
@stop
@section('content')
<div class="login-background">
   <div class="container">
      <div class="row">
         <div class="futura-signin col-xs-6">
            <div class="panel panel-default">
               <div class="panel-heading">
                  <img src="{{ asset('images/login/icon.png') }}" alt="FUTURA 未來實習看板">
               </div>
               <div class="panel-body">
                  {!! Form::open(['url' => url('login'),'id' => 'loginForm', 'data-parsley-validate' ] ) !!}
                  {{--  @include('includes.status') --}}
                  {!! Form::email('email', null, [
                  'class'                         => 'form-control',
                  'placeholder'                   => 'E-mail',
                  'required',
                  'id'                            => 'signEmail',
                  'data-parsley-required-message' => '請輸入 E-mail',
                  'data-parsley-type-message' => '請輸入正確的 E-mail',
                  'data-parsley-trigger'          => 'change focusout',
                  'data-parsley-type'             => 'email'
                  ]) !!}
                  {!! Form::password('password', [
                  'class'                         => 'form-control',
                  'placeholder'                   => '密 碼',
                  'required',
                  'id'                            => 'signPassword',
                  'data-parsley-required-message' => '請輸入密碼',
                  'data-parsley-minlength-message' => '密碼少於 6 個位元',
                  'data-parsley-maxlength-message' => '密碼大於 20 個位元',
                  'data-parsley-trigger'          => 'change focusout',
                  'data-parsley-minlength'        => '6',
                  'data-parsley-maxlength'        => '20'
                  ]) !!}
                  <div class="row">
                     <div class="col-md-12">
                        <fieldset class="form-group">
                           {!! Form::checkbox('remember', 1, null, ['id' => 'remember-me']) !!}
                           <label for="remember-me"> 保持登入</label>
                        </fieldset>
                     </div>
                  </div>
                  <button class="btn btn-lg btn-block" id="loginSend" type="submit">登 入</button>
                  <p class="text-center forget-password"><a href="{{ url('password/reset') }}">忘記密碼?</a></p>
                  <p class="social-title text-center">或使用 Facebook 登入</p>
                  @include('partials.socials')
                  {!! Form::close() !!}
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@stop
@section('footer')
<script src="js/noty.min.js"></script>
@stop