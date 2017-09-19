<!DOCTYPE html>
<html>
  <head>
    <!--
        ______ _    _ _______ _    _ _____
       |  ____| |  | |__   __| |  | |  __ \     /\
       | |__  | |  | |  | |  | |  | | |__) |   /  \
       |  __| | |  | |  | |  | |  | |  _  /   / /\ \
       | |    | |__| |  | |  | |__| | | \ \  / ____ \
       |_|     \____/   |_|   \____/|_|  \_\/_/    \_\  Hope is the certain expectation of future glory - Dante Alighieri

    -->

    <title>@yield('title') - FUTURA 未來實習看版</title>

    <!-- meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="zh-TW">
    <meta name="distribution" content="global" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="author" content="FUTURA 未來實習看版" />
    <meta name="publisher" content="FUTURA 未來實習看版" />
    <meta name="reply-to" content="futura.noreply@gmail.com" />
    <meta name="rating" content="general" />
    <meta name="copyright" content="© 2017 FUTURA Team. All rights reserved." />
    <meta name="abstract" content="透過美好的實習，引導未來職場上的競爭力，同時吸收前輩們的經驗，結交共同興趣的朋友，強化自身的能力和遠見！" />
    <meta name="distribution" content="global" />

    <meta name="robots" content="all" />
    <meta name="spiders" content="all" />
    <meta name="webcrawlers" content="all" />
    <meta name="googlebot" content="all" />

    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-qeuiv="Pragma" content="no-cache">

    <meta name="url" content="http://futura.com.tw/@yield('url')">
    <meta name="keywords" content="FUTURA,FUTURA 未來實習看版,未來實習看版,Intern,Job,實習,實習資訊,新創,大學生,校園,工作,交流,創業" />
    <meta name="description" content="@yield('description')" />
    <meta name="subject" content="@yield('title') - FUTURA Intern Board" />


    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title') FUTURA 未來實習看版" />
    <meta property="og:image" content="{{url('/')}}@yield('image')" />
    <meta property="og:site_name" content="FUTURA 未來實習資訊看版" />
    <meta property="og:url" content="http://futura.com.tw/@yield('url')" />
    <meta property="og:description" content="@yield('description')" />

    <!-- favicons -->

    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/favicon/manifest.json">
    <link rel="shortcut icon" href="/favicon/favicon.ico">
    <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#1cf1c6">
    <meta name="apple-mobile-web-app-title" content="FUTURA 實習資訊看板">
    <meta name="application-name" content="FUTURA 實習資訊看板">
    <meta name="msapplication-config" content="/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    @yield('head')

  </head>
<body>
     @yield('content')
@yield('footer')
<!-- javascripts -->
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

<!-- google analysis -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-97643941-1', 'auto');
  ga('send', 'pageview');

</script>
  <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1391414040881911',
      xfbml      : true,
      version    : 'v2.9'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
  </body>
</html>
