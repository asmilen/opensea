@extends('system.layouts.main')
@section('css')
    <link rel="stylesheet" href="/sys/css/bootstrap-datepicker.css">
@endsection
@section('script')
    <script src="/sys/js/script/bootstrap-datepicker.js?v={{ config('app.version') }}" charset="utf-8"></script>
    <script src="/sys/js/controller/tour-request-controller.js?v={{ config('app.version') }}" charset="utf-8"></script>

@endsection
@section('content')
<section class="content-header">
  <h1>
    Tour request managemnet
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Tour request managemnet</li>
  </ol>
</section>

<section class="content" ng-controller="TourRequestController">
  @include('system.tour-request.filter')
  @include('system.tour-request.list')
  @include('system.tour-request.modal')
</section>
@endsection