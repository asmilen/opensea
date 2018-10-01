@extends('system.layouts.main')
@section('css')
    <link rel="stylesheet" href="/sys/css/bootstrap-datepicker.css">
@endsection
@section('script')
    <script src="/sys/js/script/bootstrap-datepicker.js?v={{ config('app.version') }}" charset="utf-8"></script>
    <script src="/sys/js/controller/ticket-edit-controller.js?v={{ config('app.version') }}" charset="utf-8"></script>
    <script>
        var TICKET_ID = {{ $ticket->id }};
    </script>
@endsection
@section('content')
    <section class="content-header">
        <h1>
            <a href="{{ route('system-tour-request' )}}">Ticket managemnet</a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Update Ticket</li>
        </ol>
    </section>

    <section class="content" ng-controller="TicketEditController">
        <div class="box box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Ticket</h3>
            </div>
            <div class="box-body">
                <div class="col-xs-12">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a data-toggle="tab" href="#tab-general">General</a>
                        </li>

                        <li>
                            <a data-toggle="tab" href="#tab-features">Features</a>
                        </li>

                        <li>
                            <a data-toggle="tab" href="#tab-offers">Exclusive Offers</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div id="tab-general" class="tab-pane fade in active">
                            @include('system.ticket._edit-general')
                        </div>

                        <div id="tab-features" class="tab-pane fade">
                            @include('system.ticket._edit-feature')
                        </div>

                        <div id="tab-offers" class="tab-pane fade">
                            @include('system.ticket._edit-offer')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
        })
    </script>
@endsection