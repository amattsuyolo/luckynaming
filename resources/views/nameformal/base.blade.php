<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="亞洲專業寶貝命名網專業算命、取名、命名網站" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:url"           content="{{ url()->current() }}" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="@yield('og-title','寶貝命名網')" />
    <meta property="og:description"   content="最專業命名網站，業務含蓋命名、算名、風水、五行、八卦" />
    <meta property="og:image"         content="@yield('og-image','https://storage.googleapis.com/luckynaming/big2.jpeg')" />

    <!-- Bootstrap core CSS -->
    <link href=@yield('bootstrap','/nametest/vendor/bootstrap/css/bootstrap.min.css') rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="/nametest/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="/nametest/css/clean-blog.min.css" rel="stylesheet">
    <link href="/nametest/css/naming.css" rel="stylesheet">
    <!-- GA -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-180226923-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-180226923-1');
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link href="/css/app.css" rel="stylesheet">
    <script src="/js/app.js"></script>
    @stack('include-scripts')
    @stack('css')
    <title>@yield('title')</title>
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="/"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="/">首頁</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">關於我們</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/post">命名學知識</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="contact.html">聯絡我們</a>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>
@yield('header')

@yield('content')

@yield('footer')
@component('nameformal.components.privacy')
@endcomponent
</body>
@stack('scripts')
</html>