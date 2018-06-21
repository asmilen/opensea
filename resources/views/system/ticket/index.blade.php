@extends('system.layouts.main')
@section('css')
    <link rel="stylesheet" href="/sys/css/bootstrap-datepicker.css">
@endsection
@section('script')
    <script src="/sys/js/script/bootstrap-datepicker.js?v={{ config('app.version') }}" charset="utf-8"></script>
    <script src="/sys/plugins/tinymce/tinymce.min.js?v={{ config('app.version') }}" charset="utf-8"></script>
    <script src="/sys/plugins/tinymce/tinymce.plugin.js?v={{ config('app.version') }}" charset="utf-8"></script>
    <script src="/sys/js/controller/ticket-controller.js?v={{ config('app.version') }}" charset="utf-8"></script>

@endsection
@section('content')
<section class="content-header">
  <h1>
    Manage Ticket
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Manage Ticket</li>
  </ol>
</section>

<section class="content" ng-controller="TicketController">
  @include('system.ticket.filter')
  @include('system.ticket.list')
  @include('system.ticket.modal')
</section>
@endsection