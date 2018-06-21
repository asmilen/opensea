@extends('system.layouts.main')
@section('css')
    <link rel="stylesheet" href="/sys/css/bootstrap-datepicker.css">
@endsection
@section('script')
    <script src="/sys/js/script/bootstrap-datepicker.js?v={{ config('app.version') }}" charset="utf-8"></script>
    <script src="/sys/plugins/tinymce/tinymce.min.js?v={{ config('app.version') }}" charset="utf-8"></script>
    <script src="/sys/plugins/tinymce/tinymce.plugin.js?v={{ config('app.version') }}" charset="utf-8"></script>
    <script src="/sys/js/controller/tour-controller.js?v={{ config('app.version') }}" charset="utf-8"></script>

@endsection
@section('content')
<section class="content-header">
  <h1>
    Tour managemnet
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Tour managemnet</li>
  </ol>
</section>

<section class="content" ng-controller="TourController">
  @include('system.tour.filter')
  @include('system.tour.list')
  @include('system.tour.modal')
</section>
@endsection