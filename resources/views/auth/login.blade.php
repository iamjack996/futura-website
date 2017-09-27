@extends('layouts.main')
@section('title','登入')
@section('head')
<style>
  body{
    background-color: #fefefe;
  }
</style>
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
                   @include('includes.status')
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


    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 futura-signin">
                <div class="card-group mb-0">
                    <div class="card p-4">
                        <div class="card-body">
                            <h1>登入</h1>
                            <p class="text-muted">登入你的帳戶</p>
                            <div class="input-group mb-3">
                                <span class="input-group-addon"><i class="icon-user"></i>
                                </span>
                                <input type="email" class="form-control" placeholder="信箱">
                            </div>
                            <div class="input-group mb-4">
                                <span class="input-group-addon"><i class="icon-lock"></i>
                                </span>
                                <input type="password" class="form-control" placeholder="密碼">
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <button type="button" class="btn btn-primary px-4 fr-login-btn" id="loginSend">登入</button>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="{{ url('password/reset') }}"><button type="button" class="btn btn-link px-0 fr-forget-btn">忘記密碼?</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card text-white fr-sign-bg py-5 d-none d-lg-block" style="width:44%">
                        <div class="card-body text-center">
                            <div>
                                <img src="{{ asset('images/login/icon.png') }}" alt="FUTURA 未來實習看板">
                                <h2>註冊</h2>

                                <p>趕快加入 FUTURA 未來實習資訊看版，你可以更快的找到想要的實習。把握你美好的未來。</p>
                                <a href="{{ Route('register') }}"><button type="button" class="btn fr-sign-btn active mt-3">立即註冊</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@stop
@section('footer')
<script src="js/noty.min.js"></script>
@stop