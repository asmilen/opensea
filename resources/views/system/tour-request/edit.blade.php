@extends('system.layouts.main')
@section('css')
    <link rel="stylesheet" href="/sys/css/bootstrap-datepicker.css">
@endsection
@section('script')
    <script src="/sys/js/script/bootstrap-datepicker.js?v={{ config('app.version') }}" charset="utf-8"></script>
    <script src="/sys/js/controller/tour-request-detail-controller.js?v={{ config('app.version') }}" charset="utf-8"></script>
    <script>
        var TOUR_REQUEST_ID = {{ $tourRequest->id }};
    </script>
@endsection
@section('content')
    <section class="content-header">
        <h1>
            <a href="{{ route('system-tour-request' )}}">Tour request managemnet</a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Update tour request</li>
        </ol>
    </section>

    <section class="content" ng-controller="TourRequestDetailController">
        <div class="box box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Tour</h3>
            </div>
            <div class="box-body" id="editArticleForm">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="" class="col-md-3 control-label">Name<span style="color: red">*</span></label>
                        <div class="col-md-9">
                            <strong> {{ $tourRequest->name }}</strong>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="" class="col-md-3 control-label">Email</label>
                        <div class="col-md-9">
                            <strong> {{ $tourRequest->email }}</strong>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="" class="col-md-3 control-label">Contact</label>
                        <div class="col-md-9">
                            <strong> {{ $tourRequest->contact }}</strong>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group" style="margin-top: 10px">
                        <label for="" class="col-md-3 control-label">Tour</label>
                        <div class="col-md-9">
                            <strong ng-bind-html="editArticle.tour_name"></strong>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="margin-top: 10px">
                    <div class="form-group">
                        <label for="" class="col-md-3 control-label">Nation</label>
                        <div class="col-md-9">
                            <strong> {{ $tourRequest->nation }}</strong>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="margin-top: 10px">
                    <div class="form-group">
                        <label for="" class="col-md-3 control-label">Date</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control datepicker" ng-model="editArticle.date">
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="margin-top: 10px">
                    <div class="form-group">
                        <label for="" class="col-md-3 control-label">Status</label>
                        <div class="col-md-9">
                            <select ng-model="editArticle.time" class="form-control pull-right"
                                    ng-options="status.value as status.name for status in listTime">
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="margin-top: 10px">
                    <div class="form-group">
                        <label for="" class="col-md-3 control-label">Special request</label>
                        <div class="col-md-9">
                            <textarea class="form-control" rows="4" disabled> {{ $tourRequest->special_request }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="margin-top: 10px">
                    <div class="form-group">
                        <label for="" class="col-md-3 control-label">Add note</label>
                        <div class="col-md-9">
                            <textarea class="form-control" rows="4" ng-model="editArticle.note_new"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="margin-top: 10px">
                    <div class="form-group">
                        <label for="" class="col-md-3 control-label">Number people</label>
                        <div class="col-md-9">
                            <input type="number" class="form-control" ng-model="editArticle.number_people">
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="margin-top: 10px">
                    <div class="form-group">
                        <label for="" class="col-md-3 control-label">Status</label>
                        <div class="col-md-9">
                            <select ng-model="editArticle.status" class="form-control pull-right"
                                    ng-options="status.value as status.name for status in listStatus">
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-5" style="margin-top: 10px">
                    <button type="button" class="btn btn-success search" ng-click="updateArticle()" id="searchParamButton"
                            data-loading-text="<span class='fa fa-spinner fa-spin'></span> Loading..."><i class="fa fa-save"></i> Save
                    </button>
                </div>
            </div>
        </div>
        <div class="box box-solid" ng-cloak>
            <div class="box-header with-border">
                <h3 class="box-title">History</h3>
            </div>
            <div class="box-body">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th style="width: 5%">Id</th>
                        <th style="width: 15%">Time</th>
                        <th style="width: 15%">Admin</th>
                        <th>Admin's Note</th>
                        <th>Before</th>
                        <th>After</th>
                    </tr>
                    <tr ng-repeat="note in editArticle.note">
                        <td>@{{ $index + 1 }}</td>
                        <td>@{{ summarizeDateTime(note.time, true) }}</td>
                        <td>
                            @{{ note.author }}
                        </td>
                        <td>
                            <span>@{{ note.content }}</span>
                        </td>
                        <td>
                            <span>-Date: @{{ note.old_data.date }} <br></span>
                            <span>-Number of People: @{{ note.old_data.number_people }} <br></span>
                            <span>-Status: @{{ note.old_data.status }} <br></span>
                            <span ng-if="note.old_data.time == '1'">-Time: 9 a.m - 1 p.m</span>
                            <span ng-if="note.old_data.time == '2'">-Time: 1 p.m - 5 p.m</span>
                        </td>
                        <td>
                            <span>-Date: @{{ note.new_data.date }} <br></span>
                            <span>-Number of People: @{{ note.new_data.number_people }} <br></span>
                            <span>-Status: @{{ note.new_data.status }} <br></span>
                            <span ng-if="note.new_data.time == '1'">-Time: 9 a.m - 1 p.m</span>
                            <span ng-if="note.new_data.time == '2'">-Time: 1 p.m - 5 p.m</span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <script>
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
        })
    </script>
@endsection