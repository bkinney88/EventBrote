<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Eventbrote</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
</head>
<body>
    @include('layouts.partials._nav')
    <div class="container">
      @if(session()->has('notification.message'))
       <div class="alert alert-{{ session()->get('notification.type')}}">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
           <strong>
               {{ session()->get('notification.message') }}
           </strong>
       </div>
       @endif
        @yield('content')
    </div>
<script src="{{asset('/js/jquery.js')}}"></script>
<script src="{{ asset('/js/larails.js') }}"></script>
<script src="/js/app.js"></script>

    @include('flashy::message')
</body>
</html>
