@extends('layouts.main')

@push('meta')
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Fix For Chunk Error In Webpack and Vue Router -->
<base href="/"/>
@endpush

@push('favicon')
<link rel="shortcut icon" href="/img/favicon.ico?v=2" type="image/x-icon"/>
@endpush

@push('css')
<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
@endpush

@push('header_js')
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
<script>
 WebFont.load({
    google: {
      families: ['Material Icons','Roboto']
    }
  });
</script>
@endpush

@push('title')
<title>{{ config('app.name') }} </title>
@endpush

@section('content')
<div id="app" v-cloak>
  <div id="preloader v-cloak--block full-width">
    <div class="spinner">
      <div class="rect1"></div>
      <div class="rect2"></div>
      <div class="rect3"></div>
      <div class="rect4"></div>
      <div class="rect5"></div>
    </div>
  </div>
  <app/>
</div>
@endsection

@push('footer_js')
<script src="{{ mix('/js/manifest.js') }}"></script>
<script src="{{mix('/js/vendor.js')}}"></script>
<script src="{{mix('/js/app.js')}}"></script>
@endpush