@extends('system.layouts.main')
@section('script')
    <script>
        var listTopStoreSelected = '<?= $listTopStoreSelected ?>';
        var allStores = <?= $allStores ?>;
    </script>
    <script src="/sys/js/controller/setting-frontend-config-controller.js?v={{ config('app.version') }}" charset="utf-8"></script>
@endsection
@section('content')
    <section class="content-header">
        <h1>
            Frontend Setting
        </h1>
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Frontend Setting</li>
        </ol>
    </section>

    <section class="content" ng-controller="SettingFrontendConfigController">
        <div class="row">


            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Menu config -->
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Config Menu</h3>
                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="box-body">
                                <style media="screen">
                                    .wheat{
                                        background-color: wheat;
                                    }
                                    .form-group{
                                        -webkit-transition: all 400ms; /* Safari */
                                        transition: all 400ms;

                                    }
                                </style>
                                <form class="form-horizontal">
                                    <div class="col-md-12">
                                        <div class="" ng-repeat="(key,item) in menuConfig track by $index">
                                            <div class="form-group @{{ color[key] }}" style="padding: 5px 0;">
                                                <div class="input-group">

                                                    <span class="input-group-btn"></span>
                                                    <input type="text" class="form-control" placeholder="Recipient's username" ng-model="item.name">
                                                    <span class="input-group-btn"></span>
                                                    <input type="text" class="form-control" placeholder="Recipient's username" ng-model="item.url">
                                                    <span class="input-group-btn"></span>
                                                    <span class="input-group-btn">
                                                      <button ng-click="upMenu(key)" type="button" class="btn  btn-flat @{{key?'btn-info':'btn-default disabled'}}"><i class="fa fa-angle-up"></i></button>
                                                    </span>
                                                    <span class="input-group-btn"></span>
                                                    <span class="input-group-btn ">
                                                      <button ng-click="downMenu(key)" type="button" class="btn btn-flat @{{(key == menuConfig.length - 1)?'btn-default disabled':'btn-info'}}"><i class="fa fa-angle-down"></i></button>
                                                    </span>
                                                    <span class="input-group-btn"></span>
                                                    <span class="input-group-btn">
                                                      <button ng-click="removeMenuItem(key)" type="button" class="btn btn-danger btn-flat"><i class="fa fa-minus"></i></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>

                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="New item display text" ng-model="newItem.name">
                                                <span class="input-group-btn"></span>
                                                <input type="text" class="form-control" placeholder="New item url" ng-model="newItem.url">
                                                <span class="input-group-btn"></span>
                                                <span class="input-group-btn">
                                                  <button ng-click="addMenuItem(newItem)" type="button" class="btn btn-info btn-flat @{{newItem?'':'disabled'}}"><i class="fa fa-plus"></i></button>
                                                </span>
                                                </div>
                                        </div>


                                    </div>
                                </form>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-info pull-right" ng-click="updateMenu()">Save</button>
                            </div>
                        </div>
                        <!-- End menu config -->

                    </div>
                    <div class="col-md-6">
                        <!-- Store banner config -->
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Config Store banner <span class="small">Các store nằm bên phải banner</span></h3>
                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="box-body">
                                <style media="screen">
                                    .wheat{
                                        background-color: wheat;
                                    }
                                    .form-group{
                                        -webkit-transition: all 400ms; /* Safari */
                                        transition: all 400ms;

                                    }
                                </style>
                                <form class="form-horizontal">
                                    <div class="col-md-12">
                                        <div class="" ng-repeat="(key,item) in storeBannerConfig track by $index">
                                            <div class="form-group" style="padding: 5px 0;">
                                                <div class="input-group">

                                                    <span class="input-group-btn"></span>
                                                    <select class="form-control" name="" ng-model="storeBannerConfig[key]" ng-options="store.id as store.name for store in allStores">>
                                                        <option value="" disabled>Please select store</option>
                                                    </select>
                                                    <span class="input-group-btn"></span>
                                                    <span class="input-group-btn">
                                                      <button ng-click="removeItem(key, storeBannerConfig)" type="button" class="btn btn-danger btn-flat"><i class="fa fa-minus"></i></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group" style="padding: 5px 0;">
                                            <div class="input-group">

                                                <span class="input-group-btn"></span>
                                                <select class="form-control" name="" ng-model="newStoreBanner.id" ng-options="store.id as store.name for store in allStores">>
                                                    <option value="" disabled>Please select store</option>
                                                </select>
                                                <span class="input-group-btn"></span>
                                                <span class="input-group-btn">
                                                  <button ng-click="addItem(newStoreBanner.id, storeBannerConfig)" type="button" class="btn btn-info btn-flat"><i class="fa fa-plus"></i></button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-info pull-right" ng-click="updateStoreBanner()">Save</button>
                            </div>
                        </div>
                        <!-- End menu config -->

                    </div>
                </div>





                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Config Top Stores</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body">
                        <form class="form-horizontal">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Add Store</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" ng-model="topStore.title" ng-change="searchNameChangeGift(topStore.title)" style="width: 106%">
                                        <table style="position:absolute;border: 2px solid #CCC;z-index: 10; background-color: white"
                                               ng-show="isShowRelatedTopStore && listTopStore.length > 0"
                                               class="data-table table col-sm-12" cellpadding="0" cellspacing="0" border="0">
                                            <tr class="tr-table-list-top-store"
                                                style="cursor: pointer"
                                                ng-click="addStore(store)"
                                                ng-repeat="store in listTopStore">
                                                <td>@{{store.id}}</td>
                                                <td>@{{store.name}}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><input type="button" ng-click="closeSelect();" value="Close"/></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <th width="80%">Title</th>
                                            <th width="10%">Order</th>
                                            <th width="10%">Action</th>
                                        </tr>
                                        <tr ng-repeat="storeSelected in topStoreSelected">
                                            <td>@{{ storeSelected.name }}</td>
                                            <td><input type="number" ng-model="storeSelected.sorder" style="width: 50px"></td>
                                            <td><button class="btn btn-sm btn-danger" ng-click="deleteStoreSelected(storeSelected)">Delete</button></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </form>
                </div>


                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right" ng-click="updateTopStores()">Save</button>
                </div>
                <!-- /.box-footer -->

            </div>

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Config comments info</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <form class="form-horizontal">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" ng-model="commentsConfig.title">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Rate</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" ng-model="commentsConfig.rate">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">No. of reviews</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" ng-model="commentsConfig.numberOfReview">
                                </div>
                            </div>
                        </div>
                        <div class="clearfix">

                        </div>
                        <hr>

                        @for ($i=0; $i < 6; $i++)
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Author {{$i+1}}</label>

                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" ng-model="commentsConfig.comments[{{$i}}].author">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Comments {{$i+1}}</label>

                                    <div class="col-sm-9">
                                        <textarea class="form-control" rows="3" cols="80" ng-model="commentsConfig.comments[{{$i}}].comment"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Rate {{$i+1}}</label>

                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" ng-model="commentsConfig.comments[{{$i}}].rate">
                                    </div>
                                </div>
                                <hr>
                            </div>

                        @endfor

                    </form>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right" ng-click="updateComments()">Save</button>
                </div>

            </div>

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Config sidebar store info</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <form class="form-horizontal">
                        @for ($i=0; $i < 3; $i++)
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Store {{$i+1}}</label>

                                    <div class="col-sm-9">
                                        <select class="form-control" name="" ng-model="storeWidgetConfig[{{$i}}].store_id" ng-options="store.id as store.name for store in allStores">>
                                            <option value="" disabled>Please select store</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Banner {{$i+1}}</label>

                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" ng-model="storeWidgetConfig[{{$i}}].banner_url">
                                            <span class="input-group-btn"
                                            ngf-select="upload($file, storeWidgetConfig[{{$i}}])"
                                            ngf-accept="'image/*'"
                                            ngf-max-size="20MB"
                                            ngf-pattern="'image/*'">
                                            <button type="button" class="btn btn-default btn-flat"><i class="fa fas fa-camera"></i></button>
                                        </span>

                                    </div>
                                    <div class="" style="padding: 10px;">

                                        <img  style="max-width: 100%; max-height: 40px;" ng-src="http://system.getcashbackhere.net/api/resources{{storeWidgetConfig[<?php echo($i); ?>].banner_url}}" alt="">
                                    </div>
                                </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Text {{$i+1}}</label>

                                    <div class="col-sm-9">
                                        <textarea type="text" rows="3" cols="80"  class="form-control" ng-model="storeWidgetConfig[{{$i}}].description"></textarea>
                                    </div>
                                </div>
                                <hr>
                            </div>

                        @endfor

                    </form>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right" ng-click="updateStoreWidget()">Save</button>
                </div>

            </div>
            <!-- End box -->

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Config Footer</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <form class="form-horizontal">
                        @for ($i=0; $i < 4; $i++)
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Title {{$i+1}}</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" ng-model="footerConfig[{{$i}}].title"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Content {{$i+1}}</label>

                                    <div class="col-sm-10">
                                        <textarea type="text" ui-tinymce="tinymceOptions" class="form-control footerContentEditor" ng-model="footerConfig[{{$i}}].content"></textarea>
                                        <p>
                                            <small>* Allow html</small>
                                        </p>
                                    </div>
                                </div>
                                <hr>
                            </div>

                        @endfor

                    </form>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right" ng-click="updateFooterConfig()">Save</button>
                </div>

            </div>
            <!-- End box -->
        </div>
    </div>
    <script src="/sys/plugins/tinymce/tinymce.min.js" charset="utf-8"></script>
    <script src="/sys/js/angular/angular-tinymce.js" charset="utf-8"></script>
    <style media="screen">
        body.mce-content-body  {
           background-color: :#333 !important;
           color:#888 !important;
        }
        .tr-table-list-top-store:hover {
            background-color: #FFFFCC;
        }
    </style>



</section>
@endsection
