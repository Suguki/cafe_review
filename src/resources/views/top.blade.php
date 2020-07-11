@extends('layouts.app')

@section('content')

<head>
  <link href="css/Top.css" rel="stylesheet" type="text/css" />
</head>

  <div class="wrapper">

    <div class="box">
      <h1 class="logo">
        <div class="logo-title">Trip-Coffee<span class="period">.</span></div>
      </h1>
      <div class="container">
    <a href="{{route('cafe.index')}}" class="btn">コンテンツ一覧へ</a>
    </div>
    </div>
  </div>
  <script src="js/script.js"></script>
@endsection
