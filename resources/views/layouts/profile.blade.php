<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    {{-- のちの章で説明します --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    {{-- 各ページ毎にtitleタグを入れるために@yieldで空けておきます --}}
    <title>@yield('title')</title>
    
    <!-- Scripts -->
     {{-- Laravel標準で用意されているJavaScriptを読み込みます --}}
    <script src="{{ secure_asset('js/app.js') }}"defer></script>
    
    <!--Fonts -->
   
    <link rel="dns-prefetch" href="http://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    
    <!--Styles -->
    {{-- Laravel標準で用意されているCSSを読み込みます --}}
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    {{-- この章の後半で作成するcssを読み込みます --}}
    <link href="{{ secure_asset('css/profile.css') }}" rel="stylesheet">
    
  </head>
  <body>
    <div id="app">
      {{-- 画面上部に表示するナビゲーションバーです --}}
      <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
        <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
          </a>
          <button class="navbar-toggler" type="botton" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>  
          </button>
          <div class="collapse navbar-collapse" id="navbarSpportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
              
            </ul>
            
            <!-- Right Side Of Navbar -->
            <ul class="naavbar-nav ml-auto">
              
            </ul>
          </div>
        </div>
      </nav>
      {{-- ここまでナビゲーションバー --}}
      
      
      <main class="py-4">
        {{-- コンテンツをここに入れる為、@yieldで空けておく --}}
        @yield('content')
      </main>
      
    </div>
  </body>
  
</html>