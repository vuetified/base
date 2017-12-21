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
<link href='//fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
<!-- Show Preloader When Not Finished Loading Vue -->
<style type="text/css">
[v-cloak] > * { display:none }
[v-cloak]::before { 
  content: " ";
  display: block;
  width: 75px;
  height: 75px;
  background-size: cover;
  background-repeat:  no-repeat;
  background-position: center center; 
  background-image: url('/loaders/default.svg');
}
</style>
@endpush

@push('header_js')
@endpush

@push('title')
<title>{{ config('app.name') }} </title>
@endpush

@section('content')
<div id="app" v-cloak></div>
    <app/>
</div>
@endsection

@push('footer_js')
<script src="{{ mix('/js/manifest.js') }}"></script>
<script src="{{mix('/js/vendor.js')}}"></script>
<script src="{{mix('/js/app.js')}}"></script>
@endpush