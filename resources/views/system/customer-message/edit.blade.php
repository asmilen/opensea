@extends('system.layouts.main')
@section('css')
    <link rel="stylesheet" href="/sys/css/bootstrap-datepicker.css">
@endsection
@section('script')
    <script src="/sys/js/script/bootstrap-datepicker.js?v={{ config('app.version') }}" charset="utf-8"></script>
    <script src="/sys/js/controller/customer-message-detail-controller.js?v={{ config('app.version') }}" charset="utf-8"></script>
    <script>
        var CUSTOMER_MESSAGE_ID = {{ $customerMessage->id }};
    </script>
@endsection
@section('content')
    <section class="content-header">
        <h1>
            <a href="{{ route('system-customer-message' )}}">Customer Message Managemnet</a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Update Customer Message</li>
        </ol>
    </section>

    <section class="content" ng-controller="CustomerMessageDetailController">
        <div class="box box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Message</h3>
            </div>
            <div class="box-body" id="editArticleForm">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="" class="col-md-3 control-label">Name<span style="color: red">*</span></label>
                        <div class="col-md-9">
                            <strong> {{ $customerMessage->name }}</strong>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="" class="col-md-3 control-label">Email</label>
                        <div class="col-md-9">
                            <strong> {{ $customerMessage->email }}</strong>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="" class="col-md-3 control-label">Contact</label>
                        <div class="col-md-9">
                            <strong> {{ $customerMessage->phone_number }}</strong>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="" class="col-md-3 control-label">Message</label>
                        <div class="col-md-9">
                            <span> {{ $customerMessage->message }}</span>
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
                            <span>-Status: @{{ note.old_data.status }} <br></span>
                        </td>
                        <td>
                            <span>-Status: @{{ note.new_data.status }} <br></span>
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