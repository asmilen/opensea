@extends('system.layouts.main')
@section('css')
    <link rel="stylesheet" href="/sys/css/bootstrap-datepicker.css">
@endsection
@section('script')
    <script src="/sys/js/script/bootstrap-datepicker.js?v={{ config('app.version') }}" charset="utf-8"></script>
    <script src="/sys/plugins/tinymce/tinymce.min.js?v={{ config('app.version') }}" charset="utf-8"></script>
    <script src="/sys/plugins/tinymce/tinymce.plugin.js?v={{ config('app.version') }}" charset="utf-8"></script>
    <script src="/sys/js/controller/map-controller.js?v={{ config('app.version') }}" charset="utf-8"></script>

@endsection
@section('content')
<section class="content-header">
  <h1>
    Map managemnet
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Map managemnet</li>
  </ol>
</section>

<section class="content" ng-controller="MapController">
    <label for="">Map</label>
    <div class="">
        <div class="button"
             ngf-select="upload($file)"
             ngf-accept="'image/*'"
             ngf-max-size="20MB"
             ngf-pattern="'image/*'">
            <button class="btn btn-primary btn-sm">Select image...</button>
        </div>
        <div class="preview-store-container">
            <img ng-show="previewImg" ng-src="@{{previewImg}}" alt="Preview"
                 class="img img-responsive">
        </div>
    </div>
</section>
@endsection